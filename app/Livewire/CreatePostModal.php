<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class CreatePostModal extends Component
{
    public bool $show = false;

    public string $content = '';

    public int $userId = 1;

    public function createPost(): void
    {
        Post::create([
            'user_id' => $this->userId,
            'content' => $this->content,
        ]);
        $this->show = false;
        $this->dispatch('post-created');
        dump('post created');
    }
}
