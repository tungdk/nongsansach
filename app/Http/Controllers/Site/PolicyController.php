<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use App\Models\Product;
use Illuminate\Http\Request;

class PolicyController extends SiteController
{
    public function index(){
        $recent_products = Product::query()->where('status', 1)->orderByDesc('updated_at')->limit(5)->get();
        $policies = Policy::query()->where('status', 1)->orderByDesc('created_at')->get();
        $viewData = [
            'recent_products' => $recent_products,
            'policies' => $policies
        ];
        return view('site.policy.index', $viewData);
    }
    public function detail($id, $slug){
        $recent_products = Product::query()->where('status', 1)->orderByDesc('updated_at')->limit(5)->get();

        $policy = Policy::query()->where('status', 1)->findOrFail($id);
//        $products = Product::query()->where('category_id', $id)->where('status', 1)->orderByDesc('created_at')->get();
        $data = [
//            'category' => $category,
            'policy' => $policy,
            'recent_products' => $recent_products
        ];
        if($policy->slug == $slug){
            return view('site.policy.detail', $data);
        }
        else{
            return redirect()->route('site.policy.detail',[$policy->id, $policy->slug]);
        }
    }
}
