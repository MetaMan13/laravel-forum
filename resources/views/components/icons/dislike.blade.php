@props([
    'postId' => ''
])

<form action="/dislike" method="POST" class="flex">
    @csrf
    @method('POST')
    <input type="hidden" value="{{ $postId }}" name="post_id">
    <input type="hidden" value="{{ auth()->user()->id }}" name="user_id">
    <button type="submit" class="self-center">
        <svg id="dislike" class="transform rotate-180 mr-1 self-center stroke-current text-gray-600 dark:text-gray-400" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
    </button>
</form>