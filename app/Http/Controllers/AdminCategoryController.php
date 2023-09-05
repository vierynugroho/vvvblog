<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // gate
        // $this->authorize('admin');

        return view('dashboard.categories.index', [
            'title' => 'Categories',
            'sub_title' => 'Categories',
            'page' => "Categories / Category",
            'categories' => Category::all(['*'])
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            'title' => 'Add Category',
            'sub_title' => 'Add Category',
            'page' => "Categories / Add Category",
            'categories' => Category::all(['*'])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'slug' => 'required|unique:categories',
        ]);

        Category::create($validatedData);
        return redirect('/dashboard/categories')->with('success', 'New Category Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category, Blog $blog)
    {
        return view('dashboard.categories.show', [
            'title' => 'Category Detail',
            'sub_title' => 'Category Detail',
            'page' => 'Category Detail',
            'category' => $category,
            'blog_count' => $blog->where('category_id', '=', $category->id)->count()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return view('dashboard.categories.edit', [
            'title' => 'Update Category',
            'sub_title' => 'Update Category',
            'page' => "Categories / Update Category",
            'category' => $category,
            'categories' => Category::all(['*'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $rules = [
            'name' => 'required|max:50'
        ];

        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }


        $validatedData = $request->validate($rules);

        $validatedData['id'] = $category->id;


        Category::where('id', $category->id)
            ->update($validatedData);

        return redirect('/dashboard/categories')->with('success', 'Category Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        Category::destroy($category->id);
        return redirect('/dashboard/categories')->with('success', 'Category Deleted!');
    }
}