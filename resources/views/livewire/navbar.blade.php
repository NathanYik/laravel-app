<nav class="px-8 py-2 text-2xl font-bold shadow">
    <ul class="flex gap-12">
        <li class="cursor-pointer hover:underline">
            <a href="/">Home</a>
        </li>
        <li class="cursor-pointer hover:underline"
            @click="$dispatch('show-create-post-modal')">Create post
        </li>
    </ul>
    <a class="text-base text-blue-500 hover:underline" href="/testing"
        wire:navigate>
        Go to testing page
    </a>
</nav>
