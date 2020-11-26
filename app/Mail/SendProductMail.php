<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendProductMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $product;
    public function __construct($product)
    {
        $this->name = $product->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('nongsansach@gmail.com', 'Nông sản sạch')
            ->subject('[nongsansach] Sản phẩm: '.$this->name)
            ->markdown('mails.mail_product')
            ->with([
//                'name' => $this->name_user,
//                'code' => $this->code,
//                'sale' => $this->sale,
//                'count' => $this->count,
            ]);
    }
}
