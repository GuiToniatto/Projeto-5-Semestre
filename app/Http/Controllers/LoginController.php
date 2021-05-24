<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $data = $request->only(['email', 'password']);
        $user = User::where('email', $data['email'])->first();

        if (!isset($user)) {
            return redirect()->route('login')->with('email_error', true);
        }

        if (Auth::attempt($data)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login')->with('pass_error', true);
        }
    }

    public function register()
    {
        return view('register');
    }

    public function guardar(RegisterRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('login')->with('create', true);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
