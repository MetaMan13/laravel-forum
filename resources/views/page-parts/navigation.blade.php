<div class=" bg-gray-50 w-full fixed top-0 left-0 border-b-2 border-gray-200 dark:bg-gray-800 dark:border-gray-700 z-20">
    <div class="mx-auto px-4 py-4 flex justify-between md:px-8 lg:px-16 xl:px-24 2xl:px-32">
        <div class="flex">
            <a href="/" class="flex">
                <x-icons.logo></x-icons.logo>
                <h1 class="ml-1 self-center font-semibold text-blue-600 text-lg dark:text-blue-300">Justdev</h1>
            </a>
        </div>

        <div class="flex items-center">
            <div class="self-center">
                <x-icons.moon></x-icons.moon>
            </div>
            <div class="self-center hidden md:inline-block">
                <a href="/notifications" class="flex relative">
                    <x-icons.bell></x-icons.bell>
                    @if (count(auth()->user()->notifications) != 0)
                        <div class="bg-blue-600 h-2 w-2 rounded-full absolute top-0 left-2.5"></div>
                    @endif
                </a>
            </div>
            <div class="self-center hidden md:inline-block">
                <x-profile-dropdown></x-profile-dropdown>
            </div>
        </div>
    </div>
</div>