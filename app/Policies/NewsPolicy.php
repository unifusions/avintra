<?php

namespace App\Policies;

use App\Models\News;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class NewsPolicy
{
    use HandlesAuthorization;
    public $message = 'You dont have permission to access this News Operation. Contact Admin for more details';

    public function viewAny(User $user)
    {
        $getPermission = Permission::whereModel('news')->whereName('viewAny')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    public function view(User $user, News $news)
    {
        $getPermission = Permission::whereModel('news')->whereName('view')->first();
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
        $getPermission = Permission::whereModel('news')->whereName('create')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\News  $news
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, News $news)
    {
        $getPermission = Permission::whereModel('news')->whereName('update')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\News  $news
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, News $news)
    {
        $getPermission = Permission::whereModel('news')->whereName('delete')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\News  $news
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, News $news)
    {
        return $user->isAdmin ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\News  $news
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, News $news)
    {
        return $user->isAdmin ?
            Response::allow()
            : Response::deny($this->message);
    }
}
