<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register/index', [
            'title' => 'Register',
            'sub_title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', ' min:3', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => [Password::min(5)->mixedCase()->letters()->numbers()->symbols()]
        ]);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration Successfull! Please Login');
    }
}