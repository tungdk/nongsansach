<?php

namespace App\Jobs;

use App\Mail\CouponNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendCouponEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $users;
    protected $coupon;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($coupon, $users)
    {
        $this->users = $users;
        $this->coupon = $coupon;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this->users as $user) {
            try {
                Mail::to($user->email)->send(new CouponNotification( $this->coupon, $user->name));
            }
            catch (\Exception $e){
                continue;
            }
        }
    }
}
