<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function loginPage(){
        return view('admin.login');
    }
    
    public function loginCheck(UserRequest $request){
    
        $user = User::where([
            'email'=>$request['email'],
            'password'=>$request['password']
        ])->first();
    
        if($user){
            Auth::login($user);
    
            return redirect()->route('dashboard');
        }else{
            return view('admin.error');
        }
    
       }
}
