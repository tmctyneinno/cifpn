<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Auth;

class EmailVerificationController extends Controller
{
    // Show the email verification notice
    public function notice()
    {
        return view('auth.verify-email');
    }

    // Handle email verification
    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/home')->with('status', 'Your email has been verified!');
    }

    // Resend verification email
    public function resend()
    {
        Auth::user()->sendEmailVerificationNotification();

        return back()->with('status', 'Verification email resent!');
    }
}

