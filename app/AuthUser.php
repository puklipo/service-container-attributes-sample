<?php

namespace App;

use App\Models\User;
use Illuminate\Container\Attributes\CurrentUser;

class AuthUser
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        #[CurrentUser] public User $user
    )
    {
        //
    }
}
