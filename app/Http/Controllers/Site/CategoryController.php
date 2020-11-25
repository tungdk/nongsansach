<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends SiteController
{
    public function index(){
        return view('site.category.index');
    }
}
