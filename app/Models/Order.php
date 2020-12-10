<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'address',
        'note',
        'status',
        'payment_method',
        'total_money',
        'sale'
    ];

    protected $o_status = [
        '1' => [
            'class' => 'default',
            'name' => 'Chờ xử lý'
        ],
        '2' => [
            'class' => 'success',
            'name' => 'Xác nhận'
        ],
        '3' => [
            'class' => 'primary',
            'name' => 'Đang vận chuyển'
        ],
        '4' => [
            'class' => 'success',
            'name' => 'Đã giao hàng'
        ],
        '0' => [
            'class' => 'danger',
            'name' => 'Huỷ'
        ],
    ];
    public function getStatus(){
        return Arr::get($this->o_status, $this->status, "[N\A]");
    }
}
