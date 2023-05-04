<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function indexLogin(){
        return view('admin.login');
    }

    public function auth(Request $request){

        $login = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if(Auth::attempt($login)){
            $request->session()->regenerate();

            return redirect()->intended('indexLogin');
        }

        return back()->with('loginError', 'Login error!');
    }
}
