<?php

namespace App\Policies;

use App\Models\Gallery;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class GalleryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public $message = 'You dont have permission to access this Gallery Operation. Contact Admin for more details';
    public function viewAny(User $user)
    {
        $getPermission = Permission::whereModel('gallery')->whereName('viewAny')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Gallery $gallery)
    {
        $getPermission = Permission::whereModel('gallery')->whereName('viewAny')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        $getPermission = Permission::whereModel('gallery')->whereName('viewAny')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Gallery $gallery)
    {
        $getPermission = Permission::whereModel('gallery')->whereName('viewAny')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Gallery $gallery)
    {
        $getPermission = Permission::whereModel('gallery')->whereName('delete')->first();
        return ($user->isAdmin ||  $user->permissions->contains($getPermission->id)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Gallery $gallery)
    {
        return $user->isAdmin ?
        Response::allow()
        : Response::deny($this->message);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Gallery $gallery)
    {
        return $user->isAdmin ?
            Response::allow()
            : Response::deny($this->message);
    }
}
