<div>
    <h1>gfds</h1>
    <h1 x-text="$wire.count"></h1>
    <h1>{{ $count }}</h1>
    <button x-on:click='$wire.count++'>Increment</button>
    <button x-on:click='$wire.count--'>Decrement</button>
    <button wire:click="$set('count', 473)">Worse increment</button>
    <button wire:click='decrement'>Worse decrement</button>
    <button wire:click='doNothing'>Guess it actually does something</button>
    <button wire:click='getUsers'>Get the users</button>
    <button wire:click='hideUsers'>Hide the users</button>
    <input type='text' wire:model="userId" placeholder='Enter user ID'>
    <button wire:click='getUserById'>Get specific user</button>
    <a href='/' wire:navigate>Go to home</a>
    <div>
        <p wire:loading>Loading...</p>
    </div>

    <h1>{{ $userId }}</h1>
    @if($users)
        @foreach($users as $user)
            <h1>User:</h1>
            <h1>{{ $user->name }}: {{ $user->id }}</h1>
            <h2>{{ $user->email }}</h2>
            <h2>{{ $user->posts }}</h2>
            @foreach($user->posts as $post)
                <h2>{{ $post->content }}</h2>
                <h2>{{ $post->likes->count() }}</h2>
                <h2>{{ $post->comments->count() }}</h2>
            @endforeach
        @endforeach
    @endif
    @if($user)
        {{--        <h2>{{ $user->name }}: {{ $user->id }}</h2>--}}
    @else
        <h2>No user found</h2>
    @endif
    @if($count > 5)
        <h1>Count is greater than 5</h1>
    @endif
    <h1 x-show='$wire.count > 5'>Count is greater than 5</h1>
</div>
