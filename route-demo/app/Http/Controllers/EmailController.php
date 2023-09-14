<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function index(Request $request){
        //lay dl email tu request
       $email = $request->email;
       if($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $message = "Email dung dinh dang";
        }else{
            $message = "mail khong dung dinh dang";
        }
       }else{
        $message = "du lieu trong, vui long nhap email";
       }
        return view('b3.th1.vali_email',compact('message'));
    }
}
