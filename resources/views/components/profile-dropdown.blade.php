<div x-data="{open: false}" class="relative">
    <img src="/images/user.svg" alt="" class="bg-gray-500 p-0.5 rounded-full self-center" @click="open = true">

    <div x-show="open" @click.away="open = false" class="absolute z-10 top-0 right-0 mt-10 bg-gray-100 shadow-md rounded-md text-left border border-gray-200 w-32">
        <a href="/profile" class=" font-medium text-md block px-4 py-2 hover:text-gray-800 hover:bg-white rounded-t-md">Profile</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();this.closest('form').submit();">{{ __('Log out') }}</x-responsive-nav-link>
        </form>
    </div>
</div>