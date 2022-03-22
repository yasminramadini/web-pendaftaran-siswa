<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengaturan;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login', ['pengaturan' => Pengaturan::select('tema')->first()]);
    }
    
    public function storeLogin(Request $request)
    {
        $data = $request->validate([
          'email' => 'required|email',
          'password' => 'required|min:8'
        ]);
        
        if(Auth::attempt($data)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/admin/dashboard');
        }
        
        return redirect()->back()->with('msg', 'Email atau password salah');
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('login');
    }
}
