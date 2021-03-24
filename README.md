text-gray-600 dark:text-gray-300
border-gray-200 dark:border-gray-700
bg-gray-50 ( normal ) dark: bg-gray-800
bg-white ( hover, focus, etc states )

GROUPS: 

    


     @foreach ($follows as $follow)

                @foreach ($follow->follower['posts'] as $post)

                <x-post.layout>

                    {{-- Follower user information --}}
                    <div class="flex">
                        <img src="{{ $post->user->image }}" alt="" class="h-8 rounded-full">
                        {{-- <x-icons.user></x-icons.user> --}}
                        <a class="self-center ml-2 text-sm" href="/profile/{{ $post->user->nickname }}">
                            {{ $post->user->nickname }}
                        </a>
                    </div>

                    {{-- Follower Post title --}}
                    <div class="mt-3">
                        <a href="/post/{{ $post->id }}" class="text-md text-lg">
                            {{ $post->title }}
                        </a>
                    </div>


                    <div class="mt-3 flex">

                        <div class="flex">
                            <x-icons.like postId="{{ $post->id }}"></x-icons.like>
                            <p class="self-center">
                                {{ count($post->likes) }}
                            </p>
                        </div>


                        <div class="flex ml-4">
                            <x-icons.dislike postId="{{ $post->id }}"></x-icons.dislike>
                            <p class="self-center">
                                {{ count($post->dislikes) }}
                            </p>
                        </div>

                        <div class="flex ml-4">
                            <x-icons.comment></x-icons.comment>
                            <p class="self-center">
                                {{ count($post->comments) }}
                            </p>
                        </div>

                    </div>
                </x-post.layout>

                @endforeach
            @endforeach