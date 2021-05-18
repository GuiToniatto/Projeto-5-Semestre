<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Criação de usuário no site
     *
     * @param Request $request Requisição vinda do html
     *
     * @return void
     */
    public function createUser(Request $request)
    {
        $data = $request->all();

        User::create($data);

        return view('index', with('create', true));
    }

    /**
     * Login no sistema
     *
     * @param Request $request Requisição vinda do html
     *
     * @return void
     */
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($request->password == $user->password) {
            return view('index');
        } else {
            return redirect()->route('login');
        }
    }
}
