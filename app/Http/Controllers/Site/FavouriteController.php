<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Favourite;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function add($id){
        return response()->json(Auth::id());
        $user_id = Auth::id();
        $product = Product::find($id);
        if(!$product) return response(['messages'=>'Không tồn tại sản phầm','status'=>false]);
        $favourite = Favourite::query()->where('user_id', $user_id)->where('product_id', $id)->first();
        if($favourite){
            return response(['messages'=>'Sản phẩm này đã được yêu thích', 'status'=>false]);
        }
        $messages='Thêm yêu thích thành công';
        $status = true;
        try {
            $favourite = new Favourite();
            $favourite->product_id = $id;
            $favourite->user_id = $user_id;
            $favourite->created_at = Carbon::now();
            $favourite->save();
        } catch (\Throwable $th) {
            $status = false;
            $messages='Sản phẩm này đã được yêu thích';
        }
        return response(['messages'=>$messages, 'status'=>$status]);
    }
}
