<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BuyMail extends Mailable
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
        $subject = 'Buy Artifact done successfully at kandt Museum';
        $content = $this->messages;
        $data = [
            'subject' => $subject,
            'email' => $content['email'],
            'product_name' => $content['product_name'],
            'product_description' => $content['product_description'],
            'product_amount' => $content['product_amount'],
        ];
        return $this->subject($subject)
            ->view('email.booking', compact('data'));
    }
}
