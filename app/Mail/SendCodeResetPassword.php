<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCodeResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $code;

    /**
     * Create a new message instance.
     */
    public function __construct($user,$code)
    {
        $this->user = $user;
        $this->code = $code;
    }

    public function build()
    {
        return $this
            ->subject('Forget password request')
            ->view('auth.forget-password')
            ->with([
                'user' => $this->user,
                'code' => $this->code,
            ]);
    }
}
