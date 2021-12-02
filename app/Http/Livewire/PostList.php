<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostList extends Component
{
    protected $listeners = [
        'postCreated' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.post-list', [
            'posts' => Post::with('author')->latest()->get(),
        ]);
    }
}
