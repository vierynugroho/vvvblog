<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Blog $blog)
    {
        return view(
            'dashboard.profile.index',
            [
                'title' => 'Profile',
                'sub_title' => 'Profile',
                'page' => 'Profile',
                'blog_count' => $blog->where('user_id', '=', auth()->user()->id)->count(),
                'user' => User::all()->where('id', '=', auth()->user()->id)->first(),
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.profile.edit', [
            'title' => 'Update Profile',
            'sub_title' => 'Update Profile',
            'page' => "Profile / Update Profile",
            'user' => $user,
            'users' => User::all(['*'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email:dns'
        ];

        if ($request->username != auth()->user()->username) {
            $rules['username'] = 'required|unique:users';
        }


        $validatedData = $request->validate($rules);
        // dd(auth()->user()->id);

        $validatedData['id'] = auth()->user()->id;

        User::where('id', auth()->user()->id)
            ->update($validatedData);

        return redirect('/dashboard/profile')->with('success', 'User Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}