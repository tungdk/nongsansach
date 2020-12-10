<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends SiteController
{
    public function index(){
        $recent_products = Product::query()->where('status', 1)->orderByDesc('updated_at')->limit(5)->get();
        $viewData = [
            'recent_products' =>   $recent_products
        ];
        return view('site.post.index', $viewData);
    }
    public function detail($id, $slug){
        Post::query()->findOrFail($id)->increment('views');
        $post = Post::query()->findOrFail($id);

//        $recent_products = Post::query()->where('status', 1)->orderByDesc('updated_at')->limit(5)->get();
//        $post = Post::query()->select('products.*', DB::raw('(price_old - price_new)/price_old * 100 as percent'))->findOrFail($id);
//        $count_comments = Comment::query()->where('product_id', $id)->where('status', 1)->orderByDesc('created_at')->count();
        $data = [
//            'recent_products' => $recent_products,
            'post' => $post,
//            'count_comments' => $count_comments
        ];
        if($post->slug == $slug){
            return view('site.post.detail', $data);
        }
        else{
            return redirect()->route('site.post.detail',[$post->id, $post->slug]);
        }
    }
}
