<?php

namespace App\Http\Controllers;

use App\Models\User;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function index()
    {
        return view('profile.index', [
            'users' => \App\Models\User::with(['follows', 'followers'])->simplePaginate(30)
        ]);
    }

    public function show(User $user)
    {
        return view('profile.show', [
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view('profile.edit', [
            'user' => $user
        ]);
    }

    public function update()
    {
        /*
            Check if image exists/isset

            IF: validate and upload
        */

        if(!isset(request()->image))
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
            return redirect("/profile/$user->nickname")->with('success', 'Your profile has been updated!');

        }else{

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
                ],
                'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:1024'
            ]);

            /*
                Here we want to name our images accordingly to the user

                EXAMPLE:

                image-falcon-2021-1614811058.jpg

            */

            $imageName = '/images/image-' . strtolower($user->nickname) . '-' . date('Y') . '-' . time() . '.' . request()->image->extension();

            request()->image->move(public_path('images'), $imageName);

            $attributes['image'] = $imageName;

            $user->update($attributes);

            return redirect("/profile/$user->nickname")->with('success', 'Your profile has been updated!');
        }
    }
}
