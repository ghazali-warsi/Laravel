<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    // method for login , register , logout
    public function signup()
    {
        return view('User.sign');
    } 
    public function register(Request $request)
    {
        $request->validate(
            [
                'name' =>'required',
                'email' =>'required|email',
                'password' => 'required|confirmed'
            ]);

         DB::table('users')->insert(
            [
            'Name' =>$request->name,
            'Email'=>$request->email,
            'password' =>Hash::make($request->password)
            ]);

            return redirect()->route('user.login');
        
    } 


    public function loginform()
    {
        return view('User.login');
        
    } 
    public function login(Request $request)
    {
        $value = $request->only('email' , 'password');
        if(Auth::attempt($value)) //Auth = users
        {
         return redirect()->route('website');
        } 
    } 

 
    public function website()
    {
        return view('Website.index');
    }


    public function logout()
    {
        
    } 
}
