<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('ceo');
    }
    public function index() {
        $users = User::all();
        return view('user/bdd', compact('users'));
    }
    public function edit($id){
        $user = User::find($id);
        $roles = Role::all();
        return view('user/editUser', compact('user', 'roles'));
    }
    public function update(Request $request, $id) {

        $user = User::find($id);
        $user->roles_id = $request->input('role');

        $user->save();

        return redirect()->route('bddUser');
    }
}
