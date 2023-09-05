<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'title' => 'About',
            'sub_title' => 'About',
            'about_data' => About::about_data(),
        ]);
    }
}