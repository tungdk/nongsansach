<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create(){
        $sliders = Slider::all();
        return view('admin.slider.create', compact('sliders'));
    }

    public function store(SliderRequest $request){
        $data = $request->except('_token', 'status');
        $data['status'] = $request->status ? '1' : '0';
        $data['created_at'] = Carbon::now();
        Slider::insertGetId($data);
        return redirect()->back();
    }
}
