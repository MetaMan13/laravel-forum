<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class UserNotificationsController extends Controller
{
    public function show()
    {
        $notifications = auth()->user()->unreadNotifications;
        // $notifications = auth()->user()->notifications;

        $notifications->markAsRead();

        return view('notifications.show', [
            'notifications' => $notifications
        ]);
    }
}
