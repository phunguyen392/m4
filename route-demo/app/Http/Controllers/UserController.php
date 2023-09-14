<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('b3.vd1.index',compact('users'));
    }
    public function create(){
        return view('b3.vd1.create');
    }
    public function store(Request $request){
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();  
        return redirect()->route('user.index');
    }
    public function edit($id){
        $user = User::find($id);
        return view('b3.vd1.edit ',compact('user')).$id;
    }
    public function update(Request $request,$id){
        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
            return redirect()->route('user.index');
    }
    public function delete($id)
    {
        User::destroy($id);
        return redirect()->route('user.index');
    }
    public function show($id){
       $user = User::find($id);
        return view('b3.vd1.show', compact('user')); 
    }
}
