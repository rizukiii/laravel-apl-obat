<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('backend.auth.login');
    }

    public function authenticate(Request $request){
        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('clasification')->with('success', 'Berhasil Login!');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal login: ' . $e->getMessage());
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success','Berhasil Logout!');
    }
}
