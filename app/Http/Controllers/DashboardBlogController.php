<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage as FacadesStorage;
use Illuminate\Support\Str;

class DashboardBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'dashboard.blog.index',
            [
                'title' => 'Blog',
                'sub_title' => 'Blog',
                'page' => 'Blog',
                'blogs' => Blog::where('user_id', auth()->user()->id)->get()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blog.create', [
            'title' => 'Add Post',
            'sub_title' => 'Add Post',
            'page' => "Blog / Add Post",
            'categories' => Category::all(['*'])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:blogs|regex:/^[^?]*$/',
            'image' => 'required',
            'category_id' => 'required',
            'body' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');

        Blog::create($validatedData);
        return redirect('/dashboard/blog')->with('success', 'New Post Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        if ($blog->author->id !== auth()->user()->id) {
            abort(403);
        }

        return view('dashboard.blog.show', [
            'title' => 'Post Detail',
            'sub_title' => 'Post Detail',
            'page' => 'Post Detail',
            'post' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blog.edit', [
            'title' => 'Edit Post',
            'sub_title' => 'Edit Post',
            'page' => "Blog / Edit Post",
            'post' => $blog,
            'categories' => Category::all(['*'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
        ];

        if ($request->slug != $blog->slug) {
            $rules['slug'] = 'required|unique:blogs|regex:/^[^?]*$/';
        }


        $validatedData = $request->validate($rules);


        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');

        Blog::where('id', $blog->id)
            ->update($validatedData);

        return redirect('/dashboard/blog')->with('success', 'Post Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            FacadesStorage::delete($blog->image);
        }

        Blog::destroy($blog->id);
        return redirect('/dashboard/blog')->with('success', 'Post Deleted!');
    }
}