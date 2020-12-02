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
//    public function get_last_id()
//    {
//        return Comment::query()->firstOr(function () {
//            return 0;
//        })->id;
//    }

    public function load_comment(Request $request)
    {
        $product_id = $request->product_id;
        $comments = Comment::query()->where('product_id', $product_id)->where('status', 1)->orderByDesc('created_at')->get();
        return response()->json([
            'view' => view('site.product.components.comment', [
                'comments' => $comments,
            ])->render()
        ]);
    }

    public function store(CommentRequest $request)
    {
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
        $comment->status = 1;
        $comment->save();

        $count_comments = Comment::query()->where('product_id', $product_id)->where('status', 1)->orderByDesc('created_at')->count();
        $comments = Comment::query()->where('product_id', $product_id)->where('status', 1)->orderByDesc('created_at')->limit(5)->get();
        return response()->json([
            'status' => true,
            'message' => 'Bình luận thành công',
            'view' => view('site.product.components.comment', [
                'comments' => $comments,
                'count_comments' => $count_comments
            ])->render()
        ]);

    }


}
