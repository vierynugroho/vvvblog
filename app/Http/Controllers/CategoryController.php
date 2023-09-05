<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Category $category, Blog $blog)
    {
        return view('categories', [
            'title' => "Categories",
            'sub_title' => "Categories",
            'categories' => $category::latest()->paginate(8)->withQueryString(),
        ]);
    }
    public function categories_detail(Category $category)
    {
        return view('category', [
            'mainData' => Category::mainData(),
            'title' => $category->name,
            // 'blogs' => $category->blog->toArray(),
            'posts' => $category->blog->load('category', 'author'),
            'category_name' => $category->name
        ]);
    }
}