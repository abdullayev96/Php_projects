<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function loginPage(){
        return view('admin.login');
    }

    public function loginCheck(Request $request){

//        $password = Hash::make($request->password);
//
//        $user = User::where('email', $request->email)->where('password', $password)->first();
//
//        if($user){
//            Auth::login($user);
//
//            return redirect()->route('dashboard');
//        }else{
//            return view('admin.error');
//        }
//
//       }

        $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
