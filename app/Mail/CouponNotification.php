<?php

namespace App\Mail;

use App\Models\Coupon;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CouponNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($coupon, $user)
    {
        $this->code = $coupon->code;
        $this->sale = $coupon->sale;
        $this->count = $coupon->count;
        $this->name = $coupon->name;
        $this->name_user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('nongsansach@gmail.com', 'Nông sản sạch')
            ->subject('[nongsansach] Mã giảm giá sự kiện: '.$this->name)
            ->markdown('mails.mail_coupon')
            ->with([
                'name' => $this->name_user,
                'code' => $this->code,
                'sale' => $this->sale,
                'count' => $this->count,
            ]);
    }
}
