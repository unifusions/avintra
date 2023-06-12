<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{

    public function __construct(){
        $this->authorizeResource(User::class, 'user');
     }

    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(15);
        return view('users.index', compact('users'));
    }


    public function create()
    {
        $divisions = Division::all();
        $permissionsList = Permission::orderBy('name', 'ASC')->get()->groupBy('model');
        return view('users.create', compact('divisions', 'permissionsList'));
    }


    public function store(Request $request)
    {

        // $request->validate([
        //     'full_name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
        $user = User::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'division_id' => $request->division_id
        ]);
        if ($request->hasPermissionsCheckBox)
            foreach ($request->hasPermissionsCheckBox as $perml)
                $user->permissions()->attach($perml);
        return redirect()->route('user.index')->with('success', 'User ' . $user->name . ' has been created succesfully');
    }

    public function show(User $user)
    {
        
        
        
    }

    public function edit(User $user)
    {
        $divisions = Division::all();
        // $permissionsList = Permission::orderBy('name', 'ASC')->get();
        $permissionsList = Permission::orderBy('name', 'ASC')->get()->groupBy('model');
        return view('users.edit', compact(['user', 'divisions', 'permissionsList']));
    }


    public function update(Request $request, User $user)
    {
        $user->division_id = $request->division_id ?? $user->division_id;
        $user->save();
        $user->permissions()->detach();
        if ($request->hasPermissionsCheckBox)
            foreach ($request->hasPermissionsCheckBox as $perml)
                $user->permissions()->attach($perml);
        return redirect()->route('user.index')->with('success', 'User ' . $user->name . ' has been modified succesfully');
    }

    public function destroy($id)
    {
    }
}
