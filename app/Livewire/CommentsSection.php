<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class CommentsSection extends Component
{
    public array $comments = [];

    public function mount(Post $post): void
    {
        $this->comments = $post->comments->map(function ($comment) {
            return ['name' => $comment->user->name, 'content' => $comment->content];
        })->toArray();
    }

    public function render()
    {
        return view('livewire.comments-section');
    }
}
