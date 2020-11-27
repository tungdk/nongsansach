<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendRegisterMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    private $code;
    public function __construct( $code)
    {
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('nongsansach@gmail.com', 'Nông sản sạch')
            ->subject('Xác thực đăng ký tài khoản')
            ->markdown('mails.mail_register')
            ->with([
                'code' => $this->code
            ]);
    }
}
