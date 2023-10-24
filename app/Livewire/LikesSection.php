<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class LikesSection extends Component
{
    public array $likes = [];

    public function mount(Post $post): void
    {
        $this->likes = $post->likes->map(function ($like) {
            return $like->user->name;
        })->toArray();
    }

    public function render()
    {
        return view('livewire.likes-section');
    }
}
