<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPostForm extends Component
{
    use WithFileUploads;

    public $photo;
    public $body = '';

    protected $messages = [
        'photo.required' => 'Please upload a photo',
        'body.required' => 'Please enter a caption',
        'body.min' => 'Caption must be at least 20 characters',
    ];

    public function submit()
    {
        $this->validate([
            'photo' => 'required|image|max:4096', // 4MB Max
            'body' => 'required|min:20',
        ]);

        $post = Auth::user()->posts()->create([
            'body' => $this->body,
        ]);

        $post->update([
            'photo' => $this->photo->store('photos'),
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
