<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class AboutUsController extends SiteController
{
    public function index(){
        $recent_products = Product::query()->where('status', 1)->orderByDesc('updated_at')->limit(5)->get();
        $about_us = Setting::query()->first();
        return view('site.about_us.index', compact('about_us', 'recent_products'));
    }
}
