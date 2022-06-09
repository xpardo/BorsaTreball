<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

<<<<<<< HEAD
class notificar extends Mailable
=======

class SendDemoMail extends Mailable

>>>>>>> ab91e88dcea2f9ac2ff98e6ae8e1584e3f13c53d
{
    use Queueable, SerializesModels;
    public $maildata;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($maildata)
    {
        //
        $this->maildata = $maildata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sendDemoMail')
        ->with('maildata', $this->maildata);

    }
}
