<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;



class PostPublishedMail extends Mailable
{
    use Queueable, SerializesModels;

    private $new_post;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($new_post)
    {
        $this->new_post = $new_post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = url('/posts/'. $this->new_post->id);
        return $this->markdown('mails.posts.created', ['post' => $this->new_post , 'url' => $url]);
    }
}
