@foreach ($notifications as $notification)
    <p class="mb-10">
        <p>{{ $notification->data['user_nickname']}} liked your post {{ $notification->data['post_title'] }}</p>
    </p>
@endforeach