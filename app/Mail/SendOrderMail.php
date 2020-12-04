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
    protected $order;
    protected $order_details;
    public function __construct($order, $order_details)
    {
        $this->order = $order;
        $this->order_details = $order_details;
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
                'order' => $this->order,
                'order_details' => $this->order_details,
//                'sale' => $this->sale,
//                'count' => $this->count,
            ]);
    }
}
