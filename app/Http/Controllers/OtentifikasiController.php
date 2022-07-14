<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OtentifikasiController extends Controller
{
    public function index()
    {
        return view('otentifikasi.login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // dd('berhasil login');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dasboard');
        }

        return back()->with(['loginError' => 'Login Failed..!!!']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }

    public function register()
    {
        return view('otentifikasi.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function registerPost(Request $request)
    {
        // return request()->all();
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5'],
            'terms' => ['required'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/login')->with('success', 'Register Success..!!!');
    }

    public function lupapassword()
    {
        return view('otentifikasi.lupapassword', [
            'title' => 'Lupa Password',
            'active' => 'lupapassword'
        ]);
    }
}