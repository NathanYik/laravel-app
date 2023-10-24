<div class="rounded-lg border px-5 py-4 shadow">
    <h1 class="font-bold">Comments:</h1>
    @foreach ($comments as $comment)
        <h1 class="font-bold">{{ $comment['name'] }}</h1>
        <p class="">{{ $comment['content'] }}</p>
    @endforeach
</div>
