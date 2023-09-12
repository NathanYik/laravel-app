<div>
    <h1>{{ $count }}</h1>
    <button class='big-shrug' wire:click="increment">Increment the counter!</button>
    <button class='big-shrug' wire:click="decrement">Decrement the counter!</button>
    <h1 x-text='$wire.text'></h1>
    <h1>{{ $text }}</h1>
    <input id='input' type='text' wire:model="text" placeholder='hi there'>
    <label for="input">Some label</label>
</div>
