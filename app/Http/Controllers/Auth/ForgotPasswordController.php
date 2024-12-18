<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm() {
        return view('pages.forgotPassword');
    }

    public function sendResetLink(Request $request) {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
        ? back()->with('status', __('A reset link has been sent to your email address.'))
        : back()->withErrors(['email' => __('Failed to send reset link. Please try again.')]);
    }
    protected function redirectTo()
{
    return route('auth.login');  // Your custom login route
}


}

