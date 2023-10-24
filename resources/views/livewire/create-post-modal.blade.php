<div x-show="$wire.show" x-on:show-create-post-modal.window="$wire.show = true"
    class="fixed top-0 flex h-screen w-screen items-center justify-center backdrop-blur backdrop-brightness-50">
    <div @click.outside="$wire.show = false" class="rounded bg-white p-8 shadow">
        <form class="flex flex-col gap-8" wire:submit="createPost">
            <div class="flex flex-col gap-2">
                <label class="opacity-70" for="create-post-content-input">Write
                    something...</label>
                <textarea id="create-post-content-input" wire:model="content"></textarea>
            </div>
            <button class="rounded border border-gray-200 p-4 shadow"
                type="submit">Create Post
            </button>
        </form>
    </div>
</div>
