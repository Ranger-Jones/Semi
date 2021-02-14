<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Permission;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function teacher()
    {
        Auth::user()->role = 'Lehrer';
        Auth::user()->save();
        return redirect('/a/permissions');
    }

    public function index()
    {
        $usernames = User::all();
        return view('admin.permission.index', compact('usernames'));
    }

    public function create()
    {
        $usernames = User::all();
        return view('admin.permission.create', compact('usernames'));
    }

    public function store()
    {
        $data = request()->validate([
            'username' => ['required'],
            'permission' => ['required']
        ]);

        $user = User::where('username', $data['username'])->first();

        $permissions = $user->permissions()->get();

        foreach ($permissions as $permission) {
            if($permission->permission == $data['permission']){
                return redirect('/a/permissions/create');
            }
        }

        $user->permissions()->create([
            'permission' => $data['permission']
        ]);

        return redirect('/a/permissions/create');

    }

    public function show()
    {
        $data = request()->validate([
            'username' => ['required'],
        ]);

        $user = User::where('username', $data['username'])->first();

        $permissions = $user->permissions()->get();

        return view('admin.permission.show', compact('user', 'permissions'));
    }

    public function update(User $userid, Permission $permissionid)
    {
        Permission::where('id', $permissionid->id)->delete();
        return redirect('/a/permissions/');
    }
}
