<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function dashboard()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $user = Auth::user();
            $adminRole = $user->hasRoles('admin');
            if($adminRole) {
                $request->session()->regenerate();
                return redirect()->route('dashboard');
            } else {
                abort(403, 'Only Admin Can Login');
            }
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match our records.',
        ])->onlyInput('email');

    }
    public function logout() {
        Auth::logout();
        return view('login');
    }
}
