<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class emailVerify extends Mailable
{
    use Queueable, SerializesModels;

    public $tokenGenerated;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($subject, $token)
    {
        $this->tokenGenerated = $token;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->subject($this->subject)->markdown('emails.email_verify');
    }
}
