<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
class EmployeePolicy
{
    use HandlesAuthorization;

    public $message = 'You dont have permission to access this Document Operation. Contact Admin for more details';

    public function viewAny(User $user)
    {
        return $user->isAdmin ?
        Response::allow()
        : Response::deny($this->message);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\odel=Employee  $odel=Employee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Employee $employee)
    {
        return $user->isAdmin ?
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
        return $user->isAdmin ?
        Response::allow()
        : Response::deny($this->message);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\odel=Employee  $odel=Employee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Employee $employee)
    {
        return $user->isAdmin ?
        Response::allow()
        : Response::deny($this->message);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\odel=Employee  $odel=Employee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Employee $employee)
    {
        return $user->isAdmin ?
            Response::allow()
            : Response::deny($this->message);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\odel=Employee  $odel=Employee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Employee $employee)
    {
        return $user->isAdmin ?
        Response::allow()
        : Response::deny($this->message);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\odel=Employee  $odel=Employee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Employee $employee)
    {
        return $user->isAdmin ?
        Response::allow()
        : Response::deny($this->message);
    }
}
