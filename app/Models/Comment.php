<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    protected $fillable = [
        'user_id',
        'product_id',
        'content',
        'rating',
        'status'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }

    public function product(){
        return $this->belongsTo('App\Models\Product','product_id','id');
    }
}
