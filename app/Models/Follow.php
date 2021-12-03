<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Follow extends Pivot
{
    protected $table = 'follows';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function followedUser()
    {
        return $this->belongsTo(User::class, 'following_user_id');
    }
}
