<?php

namespace App\Policies;

use App\Models\Document;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class DocumentPolicy
{
    use HandlesAuthorization;


    public $message = 'You dont have permission to access this Document Operation. Contact Admin for more details';
    public function viewAny(User $user)
    {
        $getPermission = Permission::whereModel('document')->whereName('viewAny')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    public function view(User $user, Document $document)
    {
        $getPermission = Permission::whereModel('document')->whereName('view')->first();
        return ($user->isAdmin ||  $user->permissions->contains($getPermission->id)) ?
            Response::allow()
            : Response::deny($this->message);
    }


    public function create(User $user)
    {

        $getPermission = Permission::whereModel('document')->whereName('create')->first();
        return ($user->isAdmin ||  $user->permissions->contains($getPermission->id)) ?
            Response::allow()
            : Response::deny($this->message);
    }


    public function update(User $user, Document $document)
    {
        $getPermission = Permission::whereModel('document')->whereName('update')->first();

        return ($user->isAdmin ||  $user->permissions->contains($getPermission->id)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    public function delete(User $user, Document $document)
    {
        $getPermission = Permission::whereModel('document')->whereName('delete')->first();
        return ($user->isAdmin ||  $user->permissions->contains($getPermission->id)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    public function restore(User $user, Document $document)
    {

        return $user->isAdmin ?
            Response::allow()
            : Response::deny($this->message);
    }


    public function forceDelete(User $user, Document $document)
    {
        return $user->isAdmin ?
            Response::allow()
            : Response::deny($this->message);
    }
}
