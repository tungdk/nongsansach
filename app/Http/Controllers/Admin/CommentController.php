<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return view('admin.comment.index', compact('comments'));
    }
    public function show_home(Request $request){
        $comment = Comment::query()->findOrFail($request->id);
        $comment->show_home = ! $comment->show_home;
        $comment->save();
        return response()->json([
            'message' => 'Cập nhật thành công'
        ], 200);
    }

    public function active(Request $request){
        $comment = Comment::query()->findOrFail($request->id);
        $comment->status = ! $comment->status;
        $comment->save();
       return back();
    }
}
