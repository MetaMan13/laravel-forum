<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Follow;

class FollowController extends Controller
{

    public function create(Request $request)
    {
        $attributes = [
            'user_id' => auth()->user()->id,
            'follow_id' => $request->user_id
        ];
        Follow::create($attributes);
        return redirect()->back();
    }
}
