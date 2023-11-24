<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect(route('dashboard'));
        } else {
            return redirect()->back()->with(['danger' => 'Failed to login. Wrong username or password.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route('dashboard'));
    }

    public function register_view()
    {
        return view('auth.register');
    }

    public function register_user(Request $request)
    {
        //validata the login form
        $request->validate(
            [
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:8|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}$/'
            ],
            [
                'password.regex' => '
            Password must contain : <br>
            1. A character <br>
            2. A Number <br>
            3. A special Charachter(@,#,! etc)
            '
            ]
        );

        //create the user
        $user = new Users();
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if ($user->save()) {
            return redirect()->back()->with(['success' => 'Account created successfully. Go to the login page to login.']);
        } else {
            return redirect()->back()->with(['danger' => 'Failed to create an account']);
        }
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
