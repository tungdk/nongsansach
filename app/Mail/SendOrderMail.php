<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('nongsansach@gmail.com', 'Nông sản sạch')
            ->subject('[nongsansach] Tạo đơn hàng thành công.')
            ->markdown('mails.mail_order')
            ->with([
//                'name' => $this->name_user,
//                'code' => $this->code,
//                'sale' => $this->sale,
//                'count' => $this->count,
            ]);
    }
}
