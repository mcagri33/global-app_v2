<?php

namespace App\Http\Controllers\Castle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
class CastleController extends Controller
{
    public function index()
    {
        return view('castle.castle_login');
    }

    public function dashboard()
    {
        return view('castle.index');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'email' => 'required|email'
        ]);

        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email','password');
            if (Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('castle/dashboard');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ]);
        }else {
            return view('castle.castle_login');
        }
    }
}
