<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index(User $author)
    {
        return view('user', [
            'mainData' => User::mainData(),
            'name' => $author->name,
            'posts' => $author->blog->load('category', 'author')

        ]);
    }
}