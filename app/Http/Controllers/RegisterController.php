<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    function getregister(Request $request)
    {
    //return view('register',['name'=>$name, 'age'=>30, 'email'=>'abc@gmail.com']);
    $this->validate($request,
       [ 'name'=>'required|string|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/|max:100',
        'contact'=>'required|min:11|numeric',
        'gender'=>'required|in:male,female',
        'password'=>'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'

    ]
    );
    $output="<h1>Submitted</h1>";
    $output.="name: ".$request->name;
    $output.="<br>contact: ".$request->contact;
    $output.="<br>gender: ".$request->gender;
    $output.="<br>password: ".$request->password;
    $output.="<br>file: ".$request->file;
    return $output;
    }
    /*function getregisterwith()
    {
        $ages=['wname'=>$name,'wage'=>23,'wemail'=>'xyz@gmail.com'];
        return view("register")->with("ages",$ages);
    }*/
}

