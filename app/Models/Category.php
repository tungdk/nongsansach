<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'status'
    ];

    public function parent_cate(){
        return Category::query()->where('id', $this->parent_id)->first();
    }

}
