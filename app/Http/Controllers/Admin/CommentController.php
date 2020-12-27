<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        return view('admin.comment.index');
    }

    function getAll(){
        return Comment::query()
            ->where('is_deleted', null)
            ->orWhere('is_deleted', 0)
            ->orderByDesc('created_at')
            ->get();
    }

    function load_data(){
        $comments = $this->getAll();
        return  response()->json([
            'view' => view('admin.comment.data', [
                'comments' => $comments
            ])->render()
        ], 200);
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

        $comments = $this->getAll();
        return  response()->json([
            'view' => view('admin.comment.data', [
                'comments' => $comments
            ])->render()
        ], 200);
    }

    public function delete(Request $request){
        $comment = Comment::query()->findOrFail($request->id);
        $comment->is_deleted = 1;
        $comment->save();

        $comments = $this->getAll();
        return  response()->json([
            'view' => view('admin.comment.data', [
                'comments' => $comments
            ])->render()
        ], 200);
    }
}
