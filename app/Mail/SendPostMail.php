<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPostMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $post;
    public function __construct($post)
    {
        $this->title = $post->title;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('nongsansach@gmail.com', 'Nông sản sạch')
            ->subject('[nongsansach] Bài viết mới: '.$this->title)
            ->markdown('mails.mail_post')
            ->with([
//                'name' => $this->name_user,
//                'code' => $this->code,
//                'sale' => $this->sale,
//                'count' => $this->count,
            ]);
    }
}
