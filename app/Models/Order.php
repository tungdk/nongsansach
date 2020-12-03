<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $o_status = [
        '1' => [
            'class' => 'default',
            'name' => 'Tiếp nhận'
        ],
        '2' => [
            'class' => 'primary',
            'name' => 'Đang vận chuyển'
        ],
        '3' => [
            'class' => 'success',
            'name' => 'Đã giao hàng'
        ],
        '0' => [
            'class' => 'danger',
            'name' => 'Tiếp nhận'
        ],
    ];
    public function getStatus(){
        return Arr::get($this->o_status, $this->status, "[N\A]");
    }
}
