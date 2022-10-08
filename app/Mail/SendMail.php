<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;


class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $request;

    /* /
     * Create a new message instance.
     *
     * @return void
     */ 
    public function __construct(Request $request)
    {
        $this->name = $request->name;
        $this->email = $request->email;
        $this->text = $request->text;
    }

    /* /
     * Build the message.
     *
     * @return $this
     */ 
    public function build()
    {
        //    $mail = $this->mail;
       $name = $this->name;
        $email = $this->email;
        $text =$this->text;
        return $this->markdown('mails.send', compact('email', 'name', 'text'));
    }
}