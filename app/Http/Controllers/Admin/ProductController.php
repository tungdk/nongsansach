<?php

namespace App\Http\Controllers\Admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Jobs\SendProductMailJob;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('category:id, c_name');
        if ($id = $request->id) $products->where('id', $id);
        if ($name = $request->name) $products->where('name', 'like', '%' . $name . '%');
        if (request()->type === 'active') {
            $products = Product::where('status', 1)->where('quantity', '>', 10)->orderByDesc('created_at')->paginate(10);
        } elseif (request()->type === 'soldout') {
            $products = Product::where('quantity', '<=', 10)->orderByDesc('created_at')->paginate(10);
        } elseif (request()->type === 'unlisted') {
            $products = Product::where('status', 0)->orderByDesc('created_at')->paginate(10);
        } else {
            $products = Product::orderByDesc('created_at')->paginate(10);
        }
        $viewData = [
            'products' => $products
        ];
        return view('admin.product.index', $viewData);
    }

    public function create()
    {
        $htmlOption = $this->getCategory($parentId = '');
        $units = Unit::all();
        return view('admin.product.create', compact('htmlOption', 'units'));
    }

    public function getCategory($parentId)
    {
        $data = Category::all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }

    public function store(ProductRequest $request)
    {
        $data = $request->except('_token', 'avatar');
        $data['slug'] = Str::slug($request->name);
        $data['created_at'] = Carbon::now();
        if ($request->avatar) {
            $image = upload_image('avatar');
            if ($image['code'] == 1)
                $data['avatar'] = $image['name'];
        }
        $success = Product::query()->insertGetId($data);
        if ($success) {
            Session::flash('toastr', [
                'type' => 'success',
                'message' => 'Thêm sản phẩm thành công'
            ]);
        }
        return redirect()->back();

    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $units = Unit::all();
        return view('admin.product.update', compact('product', 'categories', 'units'));
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        $data = $request->except('_token', 'avatar');
        $data['slug'] = Str::slug($request->name);
        $data['updated_at'] = Carbon::now();
        if ($request->avatar) {
            $image = upload_image('avatar');
            if ($image['code'] == 1)
                $data['avatar'] = $image['name'];
        }
        $product->update($data);

        return redirect()->back();
    }

    public function active($id)
    {
        $product = Product::find($id);
        $product->status = !$product->status;
        $product->save();
        return redirect()->back();
    }

    public function hot($id)
    {
        $product = Product::find($id);
        $product->hot = !$product->hot;
        $product->save();
        return redirect()->back();
    }

    public function sendMail(Request $request)
    {
        $product = Product::query()
            ->where('id', $request->id)->first();
        if ($product->status == 0) {
            return response()->json([
                'status' => 0,
                'message' => 'Mã giảm giá đang bị ẩn'
            ]);
        }

        $time_now = Carbon::now();
//        if($coupon->start_time > $time_now || $time_now > $coupon->end_time){
//            return response()->json([
//                'status' => 0,
//                'message' =>'Mã giảm giá đã hết thời gian sử dụng'
//            ]);
//        }

        $adminController = new AdminController();
        $users = $adminController->get_email_user_subscribe();
        SendProductMailJob::dispatch($product, $users);

        if ($product->send_mail == 0) {
            $product->send_mail = 1;
            $product->save();
        }
    }
}
