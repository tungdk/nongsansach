<?php

namespace App\Console\Commands;

use App\Mail\CouponNotification;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:mail_coupon {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user = User::find($this->argument('user'));
        Mail::to($user)->send(new CouponNotification());
//        $user = User::find($this->argument('user'));
//        Mail::to($user)->send(new \App\Mail\SendMail());
//        return 0;
    }
}
