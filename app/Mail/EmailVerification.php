<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailVerification extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@rabmotlicensing.com', 'Rabmot Licensing Agency')
        ->subject('Email Verification')
        ->markdown('emails.verification-email')->with([
            'email_token' => $this->user->email_token, 
            'fullname' => $this->user->fullname
        ]);

       // return $this->markdown('emails.verification-email')->with(['email_token' => $this->user->email_token, 'fullname' => $this->user->fullname]);
    }
}
