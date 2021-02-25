<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function save()
    {
        request()->validate([
            'name' => 'required|max:255',
            'email' => 'required'
        ]);

        $user = auth()->user();
        $user->name = request()->name;
        $user->email = request()->email;
        $user->save();
        return redirect()->to('profile');
    }
}
