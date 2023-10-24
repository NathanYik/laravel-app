<div class="flex flex-col">
    <div class="rounded-lg border px-5 py-4 shadow">
        <h1 class="mb-2 font-bold">{{ $username }}</h1>
        <p class="my-4 text-2xl">{{ $content }}</p>
        <p class="cursor-pointer" wire:click="toggleLikes">
            {{ $likeCount }} Likes
        </p>
        <p class="cursor-pointer" wire:click="toggleComments">{{ $commentCount }}
            Comments</p>

    </div>
    {{--    <div x-show="$wire.showLikes"> --}}
    @if ($showLikes)
        <livewire:likes-section :post="$userPost->id" />
    @endif
    {{--    </div> --}}
    @if ($showComments)
        <livewire:comments-section :post="$userPost->id" />
    @endif
</div>
