<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'dashboard.users.index',
            [
                'title' => 'Users',
                'sub_title' => 'Users',
                'page' => 'Users',
                'users' => User::all()
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
    public function show(User $user, Blog $blog)
    {
        return view('dashboard.users.show', [
            'title' => 'User Detail',
            'sub_title' => 'User Detail',
            'page' => 'User Detail',
            'user' => $user,
            'blog_count' => $blog->where('user_id', '=', $user->id)->count()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', [
            'title' => 'Update User',
            'sub_title' => 'Update User',
            'page' => "Users / Update User",
            'user' => $user,
            'users' => User::all(['*'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'is_admin' => 'required',
        ];

        if ($request->username != $user->username) {
            $rules['username'] = 'required|unique:users|regex:/^[^?]*$/';
        }


        $validatedData = $request->validate($rules);

        $validatedData['id'] = $user->id;


        User::where('id', $user->id)
            ->update($validatedData);

        return redirect('/dashboard/users')->with('success', 'User Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}