<div x-data="{open: false}">
    <img src="/images/user.svg" alt="" class="bg-gray-500 p-0.5 rounded-full self-center" @click="open = true">

    <div x-show="open" @click.away="open = false">
        <a href="#">Profile</a>
        <a href="#">Settings</a>
        <a href="#">Logout</a>
    </div>
</div>