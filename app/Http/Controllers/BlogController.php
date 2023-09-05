<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{

    public function index()
    {
        $title = 'Blog';
        $sub_title = 'Blog';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $sub_title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $sub_title = ' by ' . $author->name;
        }

        return view('blog', [
            'sub_title' => $sub_title,
            'title' => $title,
            'posts' => Blog::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function singlePost(Blog $blog)
    {
        return view('post', [
            'title' => "Post",
            'sub_title' => "Post - " . $blog->title,
            'post' => $blog
        ]);
    }
}