<div x-data="{open: false}" class="relative">
    <img src="/images/{{ auth()->user()->image }}" alt="" class="self-center bg-gray-600 rounded-full h-7 dark:bg-gray-300" @click="open = true">

    <div x-show="open" @click.away="open = false" class="absolute z-10 top-0 right-0 mt-8 bg-gray-50 shadow-inner rounded-md text-left border border-gray-200 w-32 dark:bg-gray-800 dark:border-gray-700">
        <a href="/profile/{{ auth()->user()->nickname }}" class="font-medium text-md block px-4 py-2 border-b border-gray-300 hover:text-blue-600 hover:bg-white rounded-t-md dark:hover:text-blue-300 dark:hover:bg-gray-700 dark:text-gray-300 dark:border-gray-600">Profile</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">{{ __('Log out') }}</x-responsive-nav-link>
        </form>
    </div>
</div>