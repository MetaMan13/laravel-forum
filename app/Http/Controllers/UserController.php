<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function theme(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);
        $user->theme = $request->theme;
        $user->save();
    }
}
