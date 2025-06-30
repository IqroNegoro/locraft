<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('admin/tags/index', [
            'tags' => Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('admin/tags/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request)
    {
        try {
            $data = $request->validated();

            $data['slug'] = Str::slug($data['name']);

            Tag::create($data);

            return redirect()->route('admin.tags.index')->with('success', 'Tag created');
        } catch (\Throwable $e) {
            return back()->with('error', 'Failed to create tag');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tag $tag)
    {
        return Inertia::render('admin/tags/edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        try {
            $data = $request->validated();
            $data['slug'] = Str::slug($data['name']);
            $tag->update($data);
            return redirect()->route('admin.tags.index')->with('success', 'Tag updated');
        } catch (\Throwable $e) {
            return back()->with('error', 'Failed to update tag');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        try {
            $tag->delete();
            return back()->with('success', 'Tag deleted');
        } catch (\Throwable $e) {
            return back()->with('error', 'Failed to delete tag');
        }
    }

    public function search(Request $request) {
        try {
            $q = $request->input('q');

            $tags = Tag::when($q, function($query) use ($q) {
                return $query->where('name', 'like', '%' . $q . '%');
            })
            ->orderBy('name')
            ->limit(10)
            ->get();

            return response()->json([
                'data' => $tags
            ]);
        } catch (\Throwable $e) {
            return response()->json([], 500);
        }
    }
}
