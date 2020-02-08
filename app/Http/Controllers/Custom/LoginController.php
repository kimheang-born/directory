<?php

namespace App\Http\Controllers\Custom;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function form() {
        return view('frontend.login');
    }

    public function login(Request $request)
    {
        if(Auth::guard()->attempt(
            $request->only('email', 'password'), $request->filled('remember')
        )) {

            $request->session()->regenerate();
            return redirect(route('dashboard'));
        } else {
            throw ValidationException::withMessages([
                'email' => [trans('auth.failed')],
            ]);
        }

    }
}
