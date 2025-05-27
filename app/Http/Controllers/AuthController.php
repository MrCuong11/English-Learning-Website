<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login(Request $request) 
    {
        $credentials = $request->only('name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'wrong' => 'Tên đăng nhập hoặc mật khẩu ko đúng',
        ]);
    }
}
