<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $post;

    public function like()
    {
        $this->post->like();
    }

    public function dislike()
    {
        $this->post->dislike();
    }

    public function render()
    {
        return view('livewire.post');
    }
}
