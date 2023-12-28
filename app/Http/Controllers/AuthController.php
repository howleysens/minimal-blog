<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
        ]);
        $user = User::query()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);
        if ($user) {
            auth('web')->login($user);
        }

        return redirect()->route('home');
    }

    public function logout()
    {
        auth('web')->logout();

        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth('web')->attempt($validated)) {
            return redirect()->route('home');
        }

        return redirect()->route('login')->withErrors([
            'email' => 'Пользователь не найден, либо введены неверные данные.',
        ]);
    }
}
