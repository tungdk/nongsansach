<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends SiteController
{
    public function detail($id, $slug){
        $policy = Policy::query()->findOrFail($id);
//        $products = Product::query()->where('category_id', $id)->where('status', 1)->orderByDesc('created_at')->get();
        $data = [
//            'category' => $category,
            'policy' => $policy
        ];
        if($policy->slug == $slug){
            return view('site.policy.detail', $data);
        }
        else{
            return redirect()->route('site.policy.detail',[$policy->id, $policy->slug]);
        }
    }
}
