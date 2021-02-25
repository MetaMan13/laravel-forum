<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function index()
    {
        return view('profile.index', [
            'user' => auth()->user()
        ]);
    }

    public function show(User $user)
    {
        return view('profile.show', [
            'user' => $user
        ]);
    }

    public function update()
    {
        $user = auth()->user();
        $attributes = request()->validate([
            'nickname' => [
                'required',
                'max:255',
                Rule::unique('users')->ignore($user)
            ],
            'name' => 'required|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user)
            ]
        ]);

        $user->update($attributes);
        return redirect()->to('profile')->with('success', 'Your profile has been updated!');
    }
}
