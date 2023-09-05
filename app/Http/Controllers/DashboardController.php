<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function index()
    {
        $blog = new Blog();
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'sub_title' => 'Dashboard',
            'page' => 'Dashboard',
            'blog_count' => $blog->where('user_id', '=', auth()->user()->id)->count(),
        ]);
    }

    public function about()
    {
        return view('dashboard.about', [
            'title' => 'About',
            'sub_title' => 'About',
            'page' => 'Dashboard / About',
            'about_data' => About::about_data(),
        ]);
    }
}