<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddPostForm extends Component
{
    public $body = '';

    public function submit()
    {
        $this->validate([
            'body' => 'required|min:10',
        ]);

        $post = Auth::user()->posts()->create([
            'body' => $this->body,
        ]);

        $this->emit('postCreated', $post->id);

        $this->reset('body');
    }

    public function render()
    {
        return view('livewire.add-post-form');
    }
}
