<?php

namespace App\Http\Controllers\Admin\Auth;

use Auth;
use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;

class RegisterController extends Controller
{

    public function showRegisterForm(){

        return view('admin.register');
     }

   
    public function register(Request $request)
    {

        request()->validate([

            'name' => 'required|min:2|max:50',           

            'email' => 'required|email|unique:admins',

            'password' => 'required|min:6',                

            'confirm_password' => 'required|min:6|max:20|same:password',

        ], [

            'name.required' => 'Name is required',

            'name.min' => 'Name must be at least 2 characters.',

            'name.max' => 'Name should not be greater than 50 characters.',

        ]);



        $input = request()->except('password','confirm_password');

        $user=new Admin($input);

        $user->password=bcrypt(request()->password);

        $user->save();



        return redirect()
                ->intended(route('admin.login'))
                ->with('status','You are Registered in as Admin!');


    }
}