<div class="bg-gray-50 w-full fixed bottom-0 left-0 border-t-2 border-gray-200 dark:bg-gray-800 dark:border-gray-700 z-20 md:hidden">
    <div class="mx-auto px-4 py-4 flex justify-between md:px-8 lg:px-16 xl:px-24 2xl:px-32">
        <a href="/">
            <x-mobile-user-bar.home></x-mobile-user-bar.home>
        </a>

        <a href="/profile/{{ auth()->user()->nickname }}">
            <img src="{{ auth()->user()->image }}" alt="" class="self-center bg-gray-600 rounded-full h-6 dark:bg-gray-300" @click="open = true">
        </a>
    </div>
</div>