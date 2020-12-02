<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CommentRequest;
use App\Models\Comment;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(CommentRequest $request){
        $user_id = Auth::id();
        $product_id = $request->product_id;
        $content = $request->commentContent;
        $rating = $request->rating;
//        $order = Order::query()
//            ->where('user_id', $user_id)
//            ->where('product_id', $product_id)
//            ->first();
        $comment = new Comment();
        $comment->user_id = $user_id;
        $comment->product_id = $product_id;
        $comment->content = $content;
        $comment->rating = $rating;
        $comment->save();

        return 'Bình luận thành công';

    }
}
