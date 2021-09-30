<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        $users = User::all();

        return view('admin-panel\user\index',compact('users'));
    }

    public function edit($id){

        $users = User::find($id);

        return view('admin-panel\user\edit',compact('users'));
    }

    public function update(Request $request,$id){
        
        $users = User::find($id);
        $users->update(
            [
                'name' => $request->name,
                'email' => $request->email,
                'status' => $request->status,
            ]
        );

        return redirect('/admin/users');

    }   

    public function delete($id){

        $users = User::find($id);
        $users->delete();

        return redirect('/admin/users');
    }
}
