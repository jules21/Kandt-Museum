<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $messages = array();

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($messages = array())
    {
        //
        $this->messages = $messages;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $content = $this->messages;
        $data = [
            'name' => $content['name'],
            'subject' => $content['subject'],
            'email' => $content['email'],
            'message' => $content['message'],
        ];
        return $this->subject($content['subject'])
            ->view('email.contact', compact('data'));
    }
}
