<?php

namespace App\Support;

use App\Models\Like;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait Likeable
{
    public function like(?User $user = null, $liked = true)
    {
        return $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : Auth::id(),
        ], [
            'liked' => $liked,
        ]);
    }

    public function dislike(?User $user = null)
    {
        return $this->like($user, false);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function positiveLikes()
    {
        return $this->likes()->where('liked', true);
    }

    public function isLikedBy(User $user)
    {
        if (!$user->likes) {
            return false;
        }

        return (bool) $user->likes
            ->where('post_id', $this->id)
            ->where('liked', true)
            ->count();
    }
}
