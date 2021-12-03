<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPostForm extends Component
{
    use WithFileUploads;

    public $photo;
    public $body = 'A handsome boi';

    public function submit()
    {
        $this->validate([
            'photo' => 'required|image|max:4096', // 4MB Max
            'body' => 'required|min:10',
        ]);

        $post = Auth::user()->posts()->create([
            'body' => $this->body,
        ]);

        $post->update([
            'photo' => $this->photo->store('photos', 's3'),
        ]);

        $this->emit('postCreated', $post->id);

        $this->reset('photo');
        $this->reset('body');
    }

    public function render()
    {
        return view('livewire.add-post-form');
    }
}
