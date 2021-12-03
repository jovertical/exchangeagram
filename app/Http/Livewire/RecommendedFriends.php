<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RecommendedFriends extends Component
{
    public function unFollow(User $user)
    {
        Auth::user()->unFollow($user);

        $this->emit('userUnFollowed', $user);
    }

    public function follow(User $user)
    {
        Auth::user()->follow($user);

        $this->emit('userFollowed', $user);
    }

    public function render()
    {
        $users = User::whereNotIn('id', [Auth::id()])
            ->inRandomOrder()
            ->simplePaginate(3);

        return view('livewire.recommended-friends', [
            'users' => $users,
        ]);
    }
}
