<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function edit(User $user)
    {
        return ($user->roles == "Owner" || "Staff"
            ? Response::allow()
            : Response::deny('You must be a staff administrator'));
    }
    public function delete(User $user)
    {
        return ($user->roles == "Owner"
            ? Response::allow()
            : Response::deny('You must be an Owner'));
    }
}
