<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Follow;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewFollower;
use Illuminate\Support\Facades\Auth;

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

        $new_follow = Follow::create($attributes);
        $notify_user = User::find($request->user_id);
        Notification::send($notify_user, new NewFollower(Auth::user()));
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        /*
            Check if follow exists
        */
        $follow = Follow::where('user_id', auth()->user()->id)->where('follow_id', $request->user_id)->first();

        /*
            If the follow exists delete it
        */

        if($follow)
        {
            $follow->delete();

            return redirect()->back();
        }
        
        /*
            If not just redirect back
        */
        
        return redirect()->back();
    }
}
