<?php

namespace App\Observers;

use Str;
use App\User;

class UserObserver
{
    public function creating(User $user)
    {
        $user->api_token = Str::random(64);
    }
}
