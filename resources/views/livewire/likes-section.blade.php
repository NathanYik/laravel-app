<div class="rounded border px-5 py-4 shadow">
    <h1 class="font-bold">Liked by:</h1>
    @foreach ($likes as $likedBy)
        <h1>{{ $likedBy }}</h1>
    @endforeach
</div>
