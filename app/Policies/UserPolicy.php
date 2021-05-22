<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->is_leader;

    }

  
    public function view(User $user, User $model)
    {
        return $user->is_leader;

    }

  
    public function create(User $user)
    {
        return $user->is_leader;

    }

   
    public function update(User $user, User $model)
    {
        return $user->is_leader;

    }

   
    public function delete(User $user, User $model)
    {
        return $user->is_leader;

    }

   
    public function restore(User $user, User $model)
    {
        return $user->is_leader;

    }

    
    public function forceDelete(User $user, User $model)
    {
        return $user->is_leader;
    }
}
