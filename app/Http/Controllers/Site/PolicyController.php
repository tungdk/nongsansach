<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use App\Models\Product;
use Illuminate\Http\Request;

class PolicyController extends SiteController
{
    public function detail($id, $slug){
        $recent_products = Product::query()
            ->where('status', 1)
            ->orderByDesc('updated_at')
            ->limit(5)
            ->get(['id', 'name', 'slug', 'price_new', 'avatar']);
        $policy = Policy::query()->where('status', 1)->findOrFail($id);
        $policies = Policy::query()
            ->where([
                ['status', 1],
                ['id', '!=', $id]
            ])->get(['id', 'name', 'slug']);
        $data = [
            'policy' => $policy,
            'recent_products' => $recent_products,
            'policies' => $policies
        ];
        if($policy->slug == $slug){
            return view('site.policy.detail', $data);
        }
        else{
            return redirect()->route('site.policy.detail',[$policy->id, $policy->slug]);
        }
    }
}
