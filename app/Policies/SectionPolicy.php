<?php

namespace App\Policies;

use App\Models\Permission;
use App\Models\Section;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class SectionPolicy
{
    use HandlesAuthorization;

    public $message = 'You dont have permission to access this Section Operation. Contact Admin for more details';
    public function viewAny(User $user)
    {
        $getPermission = Permission::whereModel('section')->whereName('viewAny')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Section $section)
    {
        $getPermission = Permission::whereModel('section')->whereName('view')->first();
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
        $getPermission = Permission::whereModel('section')->whereName('create')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Section $section)
    {
        $getPermission = Permission::whereModel('section')->whereName('update')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Section $section)
    {
        $getPermission = Permission::whereModel('section')->whereName('delete')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Section $section)
    {
        return $user->isAdmin ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Section $section)
    {
        return $user->isAdmin ?
            Response::allow()
            : Response::deny($this->message);
    }
}
