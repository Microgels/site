<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller


{

    public function login()
    {
        return view("site.auth.login");
    }
    public function forgotPassword()
    {
        return view("site.auth.forgot-password");
    }
    public function reset(string $token)
    {
        return view("site.auth.reset",["token"=> $token,"email"=>$_GET["email"]]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([

            'email' => ['required', 'email'],
            'password' => ['required'],

        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect()->intended('staff');
        }

        return back()->withErrors([

            'email' => 'The provided credentials do not match our records.',

        ])->onlyInput('email');

    }

    public function forgotPasswordRequest(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(

            $request->only('email')

        );

        return $status === Password::ResetLinkSent

            ? back()->with(['status' => __($status)])

            : back()->withErrors(['email' => __($status)]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([

            'token' => 'required',
    
            'email' => 'required|email',
    
            'password' => 'required|min:8|confirmed',
    
        ]);
    
        $status = Password::reset(
    
        $request->only('email', 'password', 'password_confirmation', 'token'),
    
        function (User $user, string $password) {
    
                $user->forceFill([
    
                    'password' => Hash::make($password)
    
                ])->setRememberToken(Str::random(60));
    
                $user->save();
    
                event(new PasswordReset($user));
    
            }
    
        );
        return $status === Password::PasswordReset
    
            ? redirect()->route('login')->with('status', __($status))
    
            : back()->withErrors(['email' => [__($status)]]);
    }
}
