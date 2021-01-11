<?php

namespace App\Http\Controllers\Site;

use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PostController extends SiteController
{
    public function hamdungchung()
    {
        $recent_products = Product::query()
            ->where('status', 1)
            ->orderByDesc('updated_at')
            ->limit(5)
            ->get();
        $post_categories = PostCategory::query()->where('status', 1)->get(['id', 'name', 'slug']);

        $five_post_best_views = Post::query()
            ->where('status', 1)
            ->orderByDesc('views')
            ->take(5)
            ->get(['id', 'title', 'slug', 'thumbnail', 'views']);

        return ([
            'recent_products' => $recent_products,
            'post_categories' => $post_categories,
            'five_post_best_views' => $five_post_best_views
        ]);

    }

    public function index()
    {
        $posts = Post::query()->where('status', 1)
            ->paginate(3, ['id', 'title', 'description', 'slug', 'thumbnail']);
        $data = $this->hamdungchung();
        $viewData = [
            'recent_products' => $data['recent_products'],
            'post_categories' => $data['post_categories'],
            'five_post_best_views' => $data['five_post_best_views'],
            'posts' => $posts
        ];
        return view('site.post.index', $viewData);
    }

    public function detail($id, $slug)
    {
        Post::query()->findOrFail($id)->increment('views');
        $post = Post::query()->findOrFail($id);
        $data = $this->hamdungchung();
        $data = [
            'recent_products' => $data['recent_products'],
            'post' => $post,
            'post_categories' => $data['post_categories'],
            'five_post_best_views' => $data['five_post_best_views'],
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
