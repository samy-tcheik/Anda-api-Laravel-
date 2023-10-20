<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PinMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pin; // The PIN to be sent

    /**
     * Create a new message instance.
     */
    public function __construct($pin)
    {
        $this->pin = $pin;
    }

    public function build()
    {
        return $this
            ->subject('Your Verification PIN')
            ->view('emails.pin', ['pin' => $this->pin]);
    }
}
