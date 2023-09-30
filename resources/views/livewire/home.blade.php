<div class="m-14 flex flex-col items-center justify-center">
    <h1 class="text-3xl font-bold underline">This is the home screen</h1>
    <a href="/testing" wire:navigate>Go to new page</a>
    <button
        class="bg-sky-700 px-4 py-2 text-red-600 hover:bg-sky-800 sm:px-8 sm:py-3">
        fsfskkk
    </button>

    <label for="some-checkbox" class="mt-3 inline-flex items-center">Check me
        plz</label>
    <input id="some-checkbox" type='checkbox' class="rounded text-pink-500" />
    <label for="some-select" class="mt-3 inline-flex items-center">Select me
        plz</label>
    <select id="some-select" class="form-select rounded-full px-4 py-3">
        <option>Option 1</option>
        <option>Option 2</option>
        <option>Option 3</option>
    </select>
    <livewire:post />
</div>
