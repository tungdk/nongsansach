<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends SiteController
{
    public function __construct(PostCategory $postCategory)
    {
        parent::__construct();
        $this->postCategory = $postCategory;
    }

    public function detail($id, $slug){
        $post_category = PostCategory::query()->findOrFail($id);
        $posts = Post::query()->where([
            ['post_category_id', $id],
            ['status', 1]
        ])->paginate(5);
        $viewData = [
            'post_category' => $post_category,
            'posts' => $posts,
            'recent_products' => $this->five_new_product(),
            'five_post_best_views' => $this->five_hot_news(),
            'post_categories' => $this->postCategory->getPostCategory()
        ];
        return view('site.post_category.detail', $viewData);
    }
}
