<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = response()->json(User::all());
        return $users;
    }
    public function show($id)
    {
        $user = response()->json(User::find($id));
        return $user;
    }
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
    }
    public function destroy($id)
    {
        User::find($id)->delete();
    }
    public function newView()
    {
        return view('user.new');
    }
    public function listView()
    {
        $users = User::all();
        return view('user.list', ['users' => $users]);
    }
    public function editView($id)
    {
        $user = User::find($id);
        return view('user.edit', ['user' => $user]);
    }
    public function editAll()
    {
        $users = User::all();
        return view('user.edits', ['users' => $users]);
    }
    public function patchView($id)
    {
        $user = User::find($id);
        return view('user.patch', ['user' => $user]);
    }
}
