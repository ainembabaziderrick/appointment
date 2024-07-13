<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Mail;
use App\Mail\RegisterMail;
use Str;

class AuthController extends Controller
{
    public function Register(Request $request){

       
        return view('backend.auth.register');
    }

    public function Login(Request $request){

       
        return view('backend.auth.login');
    }

    public function register_post(Request $request){
        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->c_password = Hash::make($request->c_password);
        $save->is_role = trim($request->is_role);
       
        $save->save();
          

        return redirect('login')->with('success', 'Account created successfully');
    }

    public function login_post(Request $request){ 
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password],true)){
            if (Auth::User()->is_role == '1') {
                return redirect()->intended('admin/dashboard');
                } elseif (Auth::User()->is_role == '2') {
                    return redirect()->intended('doctor/dashboard');
                }
                elseif (Auth::User()->is_role == '3') {
                    return redirect()->intended('patient/dashboard');
                }
               
                else {
                 return redirect()->back()->with('error', 'Please Enter the correct credentials');
                }

        }else{
            return redirect()->back()->with('error', 'Please Enter the correct credentials');
        }
        
    }

    public function logout(){
        Auth::logout();
            return redirect(url('/'));
    }

}
