<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Follow;

class FollowController extends Controller
{

    public function create(Request $request)
    {
        /*
            Check if the user already follows the user
        */

        $follow = Follow::where('user_id', auth()->user()->id)->where('follow_id', $request->user_id)->first();

        /*
            If the follow exists redirect back
        */

        if($follow)
        {
            return redirect()->back();
        }

        /*
            If the follow does not exist create it
        */

        $attributes = [
            'user_id' => auth()->user()->id,
            'follow_id' => $request->user_id
        ];

        Follow::create($attributes);
        return redirect()->back();
    }
}
