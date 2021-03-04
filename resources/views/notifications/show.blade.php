@foreach ($notifications as $notification)
    <p>{{ $notification->data['user_nickname']}} liked your post {{ $notification->data['post_title'] }}</p>
@endforeach