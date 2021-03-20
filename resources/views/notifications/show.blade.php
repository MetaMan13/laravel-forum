@extends('layouts.app')

@section('content')
    @include('page-parts.navigation')
    <div class="pt-16 min-h-screen flex">
        <x-menu.layout>
            <x-menu.item href="/">
                <x-icons.home></x-icons.home>
                Home
            </x-menu.item>
            <x-menu.item href="/post">
                <x-icons.compas></x-icons.compas>
                Posts
            </x-menu.item>
            <x-menu.item href="/profile">
                <x-icons.users></x-icons.users>
                People
            </x-menu.item>
        </x-menu.layout>
        
        <x-main-content.layout>
            @foreach ($notifications as $notification)
                
                @if ($notification->type === 'App\Notifications\PostLiked')
                    <x-notifications.notification
                        userImage="{{ $notification->data['user_image'] }}"
                        userNickname="{{ $notification->data['user_nickname'] }}"
                        postId="{{ $notification->data['post_id'] }}"
                        postTitle="{{ $notification->data['post_title'] }}"
                        createdAt="{{ $notification->created_at }}"
                    >
                    liked your post
                    </x-notifications.notification>
                @endif

                @if ($notification->type === 'App\Notifications\PostDisliked')
                    <x-notifications.notification
                        userImage="{{ $notification->data['user_image'] }}"
                        userNickname="{{ $notification->data['user_nickname'] }}"
                        postId="{{ $notification->data['post_id'] }}"
                        postTitle="{{ $notification->data['post_title'] }}"
                        createdAt="{{ $notification->created_at }}"
                    >
                    disliked your post
                    </x-notifications.notification>
                @endif

                @if ($notification->type === 'App\Notifications\NewFollower')
                    <x-notifications.notification
                        userImage="{{ $notification->data['user_image'] }}"
                        userNickname="{{ $notification->data['user_nickname'] }}"
                        createdAt="{{ $notification->created_at }}"
                    >
                    started following you
                    </x-notifications.notification>
                @endif
            @endforeach
        </x-main-content.layout>
        
        <div class="hidden md:block md:min-h-full md:w-3/12 md:-mt-1 fixed right-0">
            <div class="w-full h-screen bg-gray-50 pr-4 md:pr-8 lg:pr-16 xl:pr-24 2xl:pr-32 text-right border-l border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <div class="w-full h-full">
                    <h3>HEWO</h3>
                </div>
            </div>
        </div>
    </div>
    @include('page-parts.mobile-user-bar')
@endsection