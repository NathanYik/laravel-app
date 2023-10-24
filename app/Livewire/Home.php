<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\Attributes\On;

#[Title('Home')]
class Home extends Component
{
    public User $user;
    public Collection $users;
    public Collection $posts;

    public function mount(): void
    {
        $this->user = User::first();
        $this->users = User::all();
        $this->posts = $this->user->posts;
    }

    #[On('post-created')]
    public function refresh(): void
    {
        dump('refreshing');
//        $this->refresh();
    }
}
