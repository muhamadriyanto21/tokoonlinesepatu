<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('auth.login');
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->email === 'admin@gmail.com') {
            return redirect()->route('admin.crud');
        }

        return redirect('/home');
    }



    protected function authenticate(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::guard('web')->attempt($credentials)) {
        if (Auth::user()->isAdmin()) {
            return redirect()->route('admin.crud');
        } else {
            return redirect()->intended('/');
        }
    }

}


}

