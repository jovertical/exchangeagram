<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PostList extends Component
{
    protected $listeners = [
        'postCreated' => '$refresh',
        'userFollowed' => 'userFollowed',
        'userUnFollowed' => '$refresh'
    ];

    public function userFollowed(User $user)
    {
        if (Auth::user()->following($user)) {
            $this->emitSelf('$refresh');
        }
    }

    public function render()
    {
        $posts = Auth::user()
            ->feed()
            ->with(['author', 'likes'])
            ->get();

        return view('livewire.post-list', [
            'posts' => $posts,
        ]);
    }
}
