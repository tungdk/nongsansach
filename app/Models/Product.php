<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price_old',
        'price_new',
        'quantity',
        'avatar',
        'views',
        'buyed',
        'rating',
        'hot',
        'status',
        'category_id',
        'unit_id',
        'tags',
        'send_mail'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function findOrFailProduct($id){
        return $this->newQuery()->findOrFail($id);
    }
}
