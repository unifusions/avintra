<?php

namespace App\Policies;

use App\Models\TodayWord;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;


class TodayWordPolicy
{
    use HandlesAuthorization;

    public $message = 'You dont have permission to access this Operation. Contact Admin for more details';
 
    public function viewAny(User $user)
    {
        $getPermission = Permission::whereModel('TodayWord')->whereName('viewAny')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

  
    public function view(User $user, TodayWord $todayWord)
    {
        $getPermission = Permission::whereModel('TodayWord')->whereName('view')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

  
    public function create(User $user)
    {
        $getPermission = Permission::whereModel('TodayWord')->whereName('create')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

   
    public function update(User $user, TodayWord $todayWord)
    {
        $getPermission = Permission::whereModel('TodayWord')->whereName('update')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

   
    public function delete(User $user)
    {
        $getPermission = Permission::whereModel('TodayWord')->whereName('delete')->first();
        return ($user->isAdmin || $user->permissions->contains($getPermission ? $getPermission->id : 0)) ?
            Response::allow()
            : Response::deny($this->message);
    }

  
    public function restore(User $user, TodayWord $todayWord)
    {
        return $user->isAdmin ?
        Response::allow()
        : Response::deny($this->message);
    }

    
    public function forceDelete(User $user, TodayWord $todayWord)
    {
        return $user->isAdmin ?
        Response::allow()
        : Response::deny($this->message);
    }
}
