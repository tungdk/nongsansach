<?php

namespace App\Http\Controllers\Site;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Product;
use Illuminate\Http\Request;

class PostController extends SiteController
{
    public function __construct(PostCategory $postCategory)
    {
        parent::__construct();
        $this->postCategory = $postCategory;
    }

    public function index()
    {
        $posts = Post::query()->where('status', 1)
            ->orderByDesc('updated_at')
            ->paginate(8, ['id', 'title', 'description', 'slug', 'thumbnail', 'updated_at']);
        $viewData = [
            'recent_products' => $this->five_new_product(),
            'five_post_best_views' => $this->five_hot_news(),
            'post_categories' => $this->postCategory->getPostCategory(),
            'posts' => $posts
        ];
        return view('site.post.index', $viewData);
    }

    public function detail($id, $slug)
    {
        Post::query()->where('status', 1)->findOrFail($id)->increment('views');
        $post = Post::query()
            ->where('status', 1)
            ->findOrFail($id);
        $relate_posts = Post::query()
            ->where([
                ['status', 1],
                ['post_category_id', $post->post_category_id],
                ['id', '!=', $id]
            ])
            ->orderByDesc('updated_at')
            ->take(5)
            ->get(['id', 'title', 'slug']);

        $data = [
            'recent_products' => $this->five_new_product(),
            'five_post_best_views' => $this->five_hot_news(),
            'post' => $post,
            'post_categories' => $this->post_category(),
            'relate_posts' => $relate_posts
        ];
        if ($post->slug == $slug) {
            return view('site.post.detail', $data);
        } else {
            return redirect()->route('site.post.detail', [$post->id, $post->slug]);
        }
    }

    public function search(Request $request)
    {
        $tukhoa = $request->tukhoa;
        $posts = Post::query()
            ->where([
                ['title', 'LIKE', '%' . $tukhoa . '%'],
                ['status', 1]
            ])
            ->orderByDesc('created_at')
            ->get(['title', 'slug', 'thumbnail', 'views']);

        $five_post_best_views = Post::query()
            ->where('status', 1)
            ->orderByDesc('views')
            ->take(5)
            ->get(['title', 'slug', 'thumbnail', 'views']);

        $viewData = [
            'posts' => $posts,
            'five_post_best_views' => $five_post_best_views
        ];
        return view('site.post.search', $viewData);

    }
}
