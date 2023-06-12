<?php

namespace App\Policies;

use App\Models\Division;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class DivisionPolicy
{
    use HandlesAuthorization;

    

    public $message = 'You dont have permission to access this Division Operation. Contact Admin for more details';
    public function viewAny(User $user)
    {
        $getPermission = Permission::whereModel('division')->whereName('viewAny')->first();
        return ($user->isAdmin ||  $user->permissions->contains($getPermission->id)) ?

            Response::allow()
            : Response::deny($this->message);
    }

    public function view(User $user, Division $division)
    {
        $getPermission = Permission::whereModel('division')->whereName('view')->first();
        return ($user->isAdmin ||  $user->permissions->contains($getPermission->id)) ?
            Response::allow()
            : Response::deny($this->message);
    }

   
    public function create(User $user)
    {

        $getPermission = Permission::whereModel('division')->whereName('create')->first();
        return ($user->isAdmin ||  $user->permissions->contains($getPermission->id)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    
    public function update(User $user, Division $division)
    {
        $getPermission = Permission::whereModel('division')->whereName('update')->first();

        return ($user->isAdmin ||  $user->permissions->contains($getPermission->id)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    public function delete(User $user, Division $division)
    {
        $getPermission = Permission::whereModel('division')->whereName('delete')->first();
        return ($user->isAdmin ||  $user->permissions->contains($getPermission->id)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    public function restore(User $user, Division $division)
    {

        return $user->isAdmin ?
            Response::allow()
            : Response::deny($this->message);
    }

    
    public function forceDelete(User $user, Division $division)
    {
        return $user->isAdmin ?
            Response::allow()
            : Response::deny($this->message);
    }
}
