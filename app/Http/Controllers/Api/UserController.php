<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->Username = $request->Username;
        $user->Password = $request->Password;
        $user->Role = $request->Role;
        $user->Names = $request->Names;
        $user->Lastnames = $request->Lastnames;
        $user->Phone = $request->Phone;

        $user->save();
    }

    public function show($id)
    {
        $user = User::find($id);
        return $user;
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);

        $user->Username = $request->Username;
        $user->Password = $request->Password;
        $user->Role = $request->Roles;
        $user->Names = $request->Names;
        $user->Lastnames = $request->Lastnames;
        $user->Phone = $request->Phone;

        $user->save();

        return $user;
    }

    public function destroy($id)
    {
        $user = User::destroy($id);
        return $user;
    }
}
