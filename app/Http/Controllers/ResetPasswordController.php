<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
class ResetPasswordController extends Controller
{
    public function showForm() {
        return view('layout.reset-password');
    }

    public function sendResetLink(Request $request) {
        Log::info('sendResetLink() called'); // Dòng test log này
        $request->validate(['email' => 'required|email']);
        $status = Password::sendResetLink(
            $request->only('email')
        );
        if ($status === Password::RESET_LINK_SENT) {
            Log::info('Reset password email is being sent.', ['email' => $request->email]);
            return back()->with(['status' => __($status)]);

        } else {
            // Nếu có lỗi, hãy ghi lại lỗi vào logs
            Log::error('Password reset link error', ['status' => $status, 'email' => $request->email]);
            return back()->withErrors(['email' => __($status)]);
        }
    }
    public function showMailForm($token, Request $request) {
        return view('layout.form-reset-password', [
            'token' => $token,
            'email' => $request->query('email'),
        ]);
    }
    public function resetPassword(Request $request)
{
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password),
            ])->save();
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
}
}
