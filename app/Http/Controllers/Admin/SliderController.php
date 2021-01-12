<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Models\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::query()->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create(){
        $sliders = Slider::all();
        return view('admin.slider.create', compact('sliders'));
    }

    public function store(SliderRequest $request){
        $data = $request->except('_token', 'status', 'thumbnail');
        $data['status'] = $request->status ? '1' : '0';
        $data['created_at'] = Carbon::now();
        if($request->thumbnail){
            $data['thumbnail'] = upload_image('sliders', $request->thumbnail);
        }
        $success = Slider::query()->insertGetId($data);
        if($success){
            Session::flash('toastr',[
                'type'  =>  'success',
                'message' => 'Thêm slider thành công'
            ]);
        }
        return redirect()->back();
    }

    public function edit($id){
        $slider = Slider::find($id);
        return view('admin.slider.update', compact('slider'));
    }

    public function update(SliderRequest $request, $id){
        $sliders = Slider::find($id);
        $data = $request->except('_token', 'status', 'thumbnail');
        $data['status'] = $request->status ? '1' : '0';
        if(isset($request->thumbnail)){
            $data['thumbnail'] = upload_image('sliders', $request->thumbnail);
        }
        $data['created_at'] = Carbon::now();
        $sliders->update($data);
        return redirect()->back();
    }

    public function active($id){
        $slider = Slider::find($id);
        $slider->status = ! $slider->status;
        $slider->save();
        return redirect()->back();
    }
}
