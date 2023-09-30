<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

#[Title('First Component')]
class FirstComponent extends Component
{
    public int $count = 0;
    public string $userId = '';
    public Collection|null $users;

    public User|null $user;

    public function getUsers(): void
    {
        $this->users = User::all();
    }

    public function hideUsers(): void
    {
        $this->users = null;
    }

    public function getUserById(): void
    {
        $this->user = null;
        $foundUser = User::find($this->userId);
        if ($foundUser) {
            $this->user = $foundUser;
        }
    }

    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count--;
    }

    public function doNothing()
    {
    }
}
