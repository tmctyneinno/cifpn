<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;


class VerificationController extends Controller
{
    public function verify($id, $hash)
    {
        
        $user = User::findOrFail($id);

        if (sha1($user->email) !== $hash) {
            return redirect('/')->with('error', 'Invalid verification link.');
        }

        $user->markEmailAsVerified();

        return redirect('/')->with('success', 'Email verified successfully.');
    }
}