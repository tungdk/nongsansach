<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $guarded = [];

    public function postcate()
    {
        return $this->belongsTo('App\Models\PostCategory','post_category_id','id');
    }
}
