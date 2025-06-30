<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('admin/categories/index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return Inertia::render('admin/categories/edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
    try {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['name']);
        $category->update($data);
        return redirect()->route('admin.categories.index')->with('success', 'Category updated');
    } catch (\Throwable $e) {
        return back()->with('error', 'Failed to update category');
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return back()->with('success', 'Category deleted');
        } catch (\Throwable $e) {
            return back()->with('error', 'Failed to delete category');
        }
    }

    public function search(Request $request) {
        try {
            $q = $request->input('q');

            $categories = Category::when($q, function($query) use ($q) {
                return $query->where('name', 'like', '%' . $q . '%');
            })
            ->orderBy('name')
            ->limit(10)
            ->get();

            return response()->json([
                'data' => $categories
            ]);
        } catch (\Throwable $e) {
            return response()->json([], 500);
        }
    }
}
