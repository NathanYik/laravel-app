<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class UserPost extends Component
{
    public Post $userPost;
    public string $content;
    public string $username;
    public int $likeCount;
    public int $commentCount;
    public bool $showLikes = false;
    public bool $showComments = false;

    public function toggleLikes(): void
    {
        $this->showLikes = !$this->showLikes;
    }

    public function toggleComments(): void
    {
        $this->showComments = !$this->showComments;
    }

    public function mount(string $username, Post $post): void
    {
        $this->fill($post);
        $this->userPost = $post;
        $this->likeCount = $post->likes->count();
        $this->commentCount = $post->comments->count();
        $this->username = $username;
    }

    public function render()
    {
        return view('livewire.user-post');
    }
}
