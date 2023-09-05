<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class AdminAllBlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'dashboard.allblogs.index',
            [
                'title' => 'All Blog',
                'sub_title' => 'All Blog',
                'page' => 'All Blog',
                'blogs' => Blog::all()
            ]
        );
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        // dd($blog);
        return view('dashboard.allblogs.show', [
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        Blog::destroy($blog->id);
        return back()->with('success', 'Post Deleted!');
    }
}