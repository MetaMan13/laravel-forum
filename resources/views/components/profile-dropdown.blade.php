<div x-data="{open: false}" class="relative">
    <img src="/images/bear.jpg" alt="" class="self-center bg-gray-500 rounded-full p-0.5 h-7" @click="open = true">

    <div x-show="open" @click.away="open = false" class="absolute z-10 top-0 right-0 mt-8 bg-gray-100 shadow-lg rounded-md text-left border border-gray-200 w-32 dark:bg-gray-700 dark:border-gray-600">
        <a href="/profile" class=" font-medium text-md block px-4 py-2 border-b border-gray-200 hover:text-gray-800 hover:bg-white rounded-t-md dark:hover:text-gray-50 dark:hover:bg-gray-600 dark:text-gray-50 dark:border-gray-500">Profile</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">{{ __('Log out') }}</x-responsive-nav-link>
        </form>
    </div>
</div>