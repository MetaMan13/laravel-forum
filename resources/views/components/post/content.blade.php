@props([
    'title' => '',
    'body' => '',
    'nickname' => ''
])

<div class="bg-yellow-200">

    {{-- POST CREATOR --}}
    <div class="bg-green-200">
        <p>{{ $nickname }}</p>
    </div>

    {{-- POST CONTENT --}}
    <div>
        <p>{{ $title }}</p>
        <p>{{ $body }}</p>
    </div>

    {{-- POST ACTION BAR --}}
    <div>

    </div>

</div>