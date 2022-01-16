<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

     public function isAdmin(User $user)
    {
        return $user->email === 'admin@gmail.com' ? Response::allow()
        : Response::deny('You do not own this post');
    }
}
