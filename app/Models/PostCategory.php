<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;
    protected $table = 'post_categories';
    protected $guarded = [];

    public function posts(){
        return $this->hasMany('App\Models\Post','post_category_id','id');
    }

    public function getPostCategory(){
        $getPostCategory = [];
        $post_categories = PostCategory::query()
            ->where([
                ['status', 1]
            ])->get(['id', 'name', 'slug']);
        foreach ($post_categories as $category){
            if(isset($category->posts) && $category->posts->count() > 0){
                array_push($getPostCategory, $category);
            }
        }
        return $getPostCategory;
    }

}
