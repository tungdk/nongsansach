<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::all();

        return view('admin.slider.index', compact('sliders'));
    }
}
