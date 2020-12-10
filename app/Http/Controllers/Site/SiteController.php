<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\SubscribeRequest;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Policy;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class SiteController extends Controller
{
    public function __construct()
    {
        //lấy danh mục
        $categories = Category::query()
            ->where('status', 1)
            ->orderByDesc('created_at')
            ->get(['id', 'name', 'slug']);

        //lấy danh sách chính sách
        $policies = Policy::query()
            ->where('status', 1)
            ->orderByDesc('created_at')
            ->get(['id', 'name', 'slug']);

        View::share([
            'categories' => $categories,
            'policies' => $policies
        ]);
//        if ($this->middleware('auth:web')) {
////            $this->middleware(function () {
//                $user_id = Auth::id();
//                $count_cart = Cart::query()->where('user_id', $user_id)->count();
////                dd($count_cart);
//                \view()->share('count_cart', $count_cart);
////                View::share('count_cart', $count_cart);
////            });
//        }
    }

    function count_cart()
    {
        $user_id = Auth::id();
        $count_cart = Cart::query()->where('user_id', $user_id)->count();
        return $count_cart;
    }

    function array_sort($array, $on, $order=SORT_ASC)
    {
        $new_array = array();
        $sortable_array = array();

        if (count($array) > 0) {
            foreach ($array as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k2 => $v2) {
                        if ($k2 == $on) {
                            $sortable_array[$k] = $v2;
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }

            switch ($order) {
                case SORT_ASC:
                    asort($sortable_array);
                    break;
                case SORT_DESC:
                    natsort($sortable_array);
                    break;
            }

            foreach ($sortable_array as $k => $v) {
                $new_array[$k] = $array[$k];
            }
        }

        return $new_array;
    }

    public function test()
    {
        $arr = [
            [
                "id"=> 63,
                "name"=> "Lớp 1A",
                "level"=> 1
            ],
            [
                "id"=> 63,
                "name"=> "Lớp 3C",
                "level"=> 1
            ],
            [
                "id"=> 63,
                "name"=> "Lớp 12A",
                "level"=> 1
            ],
            [
                "id"=> 63,
                "name"=> "Lớp 2A",
                "level"=> 1
            ]
        ];
        usort($arr, array($this, "cmp"));
//        return response()->json($this->array_sort($arr, 'name', SORT_DESC));
//        usort($arr, function($a, $b)
//        {
//            return strcmp($a->name, $b->name);
//        });
        foreach ($arr as $key => $val) {
            echo "fruits[" . $key . "] = " . $val . "\n";
        }

//        usort($arr, "cmp");
    }
    function cmp($a, $b) {
        return strcmp($a->name, $b->name);
    }
    public function subscribe(SubscribeRequest $request)
    {
        $email = $request->email;
        $findEmail = Subscribe::query()->where('email', $email)->first();
        if (!$findEmail) {
            $newSubscribe = new Subscribe();
            $newSubscribe->email = $email;
            $newSubscribe->save();
        }
        return response()->json([
            'status' => true,
            'message' => 'Đăng kí thành công'
        ]);
    }

}
