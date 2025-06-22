<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $images = [];
        try {
            $validated = $request->validated();

            $thumbnail = '';

            foreach ($request->file('images') as $i => $image) {
                $uploaded = $image->store('images/products', 'public');
                $basename = basename($uploaded);
                if ($i == 0) {
                    $thumbnail = $basename;
                }
                array_push($images, $basename);
            }

            $product = DB::transaction(function() use ($validated, $images, $thumbnail) {
                $product = Product::create([
                    'user_id' => Auth::id(),
                    'slug' => Str::slug($validated['name']) . rand(1000, 9999),
                    'name' => $validated['name'],
                    'sub' => $validated['sub'],
                    'category' => $validated['category'],
                    'story' => $validated['story'],
                    'image' => $thumbnail,
                ]);
                \App\Models\ProductImage::insert(array_map(function($image) use ($product) {
                    return [
                        'product_id' => $product->id,
                        'image' => $image
                    ];
                }, $images));

                return $product;
            });

            return redirect()->route('products.show', $product->slug)->with('success', 'Your product successfully submitted');
        } catch (\Throwable $e) {
            if (!empty($images)) {
                foreach ($images as $image) {
                    if (Storage::disk('public')->exists('images/products/' . $image)) {
                        Storage::disk('public')->delete('images/products/' . $image);
                    }
                }
            }
            return back()->with('error', 'Failed to submit your products, try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return Inertia::render('product', [
            'product' => $product->load(['images', 'user' => function($query) {
                return $query->withExists('followers');
            }])->loadExists('likes')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function like(Request $request, Product $product)
    {
        try {
            $liked = Like::where('user_id', Auth::id())
            ->where('product_id', $product->id)->first();
            
            if ($liked) {
                $liked->delete();
                $product->decrement('likes');
                return back();
            } else {
                Like::create([
                    'user_id' => Auth::id(),
                    'product_id' => $product->id,
                ]);
                $product->increment('likes');
                return back()->with('success', 'Product liked');
            }
        } catch (\Throwable $e) {
            return $e;
            return back()->with('error', 'Failed to like product, try again');
        }
    }
}
