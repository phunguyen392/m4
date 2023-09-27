<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class AuthController extends Controller
{
public function showLoginForm(){
    if (Session::has('user')) {
        // khi o trang product khong quay lai login duoc 
        return redirect()->back();

    }
    return view('login');
}
public function login(Request $request){
    if($request->input('username')==='user' && $request->input('password')==='123'){
        //luu trang thai
        Session::put('user','admin');
        //flash thogn bao chao mung
        session()->flash('message', 'Xin chào admin, ' . Session::get('user') . '!'); 
        return redirect('/product');
    } else {
        return redirect('/login')->with('error', 'Đăng nhập thất bại');
    }
}
public function welcome()
{
    if(session::exists('user')){
        return view('welcome');
    }
    else{
        return view('login');
    }
}
public function logout()
{
    // Xóa thông tin đăng nhập khỏi Session
    Session::forget('user');
    return redirect('/login');
}
public function regenerateSession()
{
    // Tạo lại ID của phiên
    Session::regenerate();
    return redirect('/welcome');
}

}
