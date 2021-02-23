<div class="bg-gray-800 w-full">
    <div class="mx-auto px-4 py-4 flex justify-between md:px-6 lg:px-8 xl:px-10 2xl:px-12">
        <div class="text-gray-50 flex">
            <a href="/" class="flex">
                <img src="/images/logo.svg" alt="" class="self-center">
                <h1 class="ml-2 self-center">Connect</h1>
            </a>
        </div>

        <div class="hidden md:flex">
            <img src="/images/bell.svg" alt="" class="self-center mr-4 h-5">
            {{-- <div>
                <img src="/images/user.svg" alt="" class="bg-gray-500 p-0.5 rounded-full self-center">

                <div class="hidden">
                    <a href="#">Profile</a>
                    <a href="#">Settings</a>
                    <a href="#">Logout</a>
                </div>
            </div> --}}
            <x-profile-dropdown></x-profile-dropdown>
        </div>
    </div>
</div>