<div class="m-14 flex flex-col items-center justify-center">
    <h1 class="text-4xl font-bold">Twitter rip off</h1>
    <div wire:loading>Loading...</div>
    <div class="flex flex-col gap-6">
        <h1 class="text-3xl">Posts</h1>
        @foreach($users as $user)
            @foreach ($user->posts as $post)
                <livewire:user-post :username="$user->name" :post="$post->id" />
            @endforeach
        @endforeach
    </div>
</div>
