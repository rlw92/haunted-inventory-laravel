<?php

namespace App\Policies;

use App\Models\User;
use App\Models\items;
use Illuminate\Auth\Access\Response;

class itemsPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, items $items): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, items $items): bool
    {
        //
       // return $items->user()->is($user);
       return $items->user_id === $user->id;

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, items $items): bool
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, items $items): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, items $items): bool
    {
        //
    }
}
