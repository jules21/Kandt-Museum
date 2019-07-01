<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingMail extends Mailable
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
        $subject = 'Book Reservation on Exhibition at kandt Museum';
        $content = $this->messages;
        $data = [
            'names' => $content['names'],
            'subject' => $subject,
            'email' => $content['email'],
            'exhibition_title' => $content['exhibition_title'],
            'exhibition_description' => $content['exhibition_description'],
        ];
        return $this->subject($subject)
            ->view('email.booking', compact('data'));
    }
}
