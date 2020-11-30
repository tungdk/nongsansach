<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PartnerRequest;
use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PartnerController extends Controller
{
    public function index(){
        $partners = Partner::paginate(10);
        return view('admin.partner.index', compact('partners'));
    }
    public function create(){
        return view('admin.partner.create');
    }

    public function store(PartnerRequest $request){
        $partner = new Partner();
        $partner->name = $request->name;
        $partner->logo = $request->logo;
        $partner->status = $request->status ? '1' : '0';
        $success = $partner->save();
        if($success){
            Session::flash('toastr',[
                'type'  =>  'success',
                'message' => 'Thêm đối tác thành công'
            ]);
        }

        return redirect()->back();
    }

    public function edit($id){
        $partner = Partner::query()->findOrFail($id);
        return view('admin.partner.update', compact('partner'));
    }

    public function update(PartnerRequest $request, $id){
        $partner = Partner::find($id);
        $data = $request->except('_token', 'status', 'logo');
        $data['status'] = $request->status ? '1' : '0';
        if(isset($request->logo)){
            $data['logo'] = $request->logo;
        }
        $data['updated_at'] = Carbon::now();
        $success = $partner->update($data);
        if($success){
            Session::flash('toastr',[
                'type'  =>  'success',
                'message' => 'Cập nhật đối tác thành công'
            ]);
        }
        return redirect()->back();
    }

    public function active($id){
        $parter = Partner::find($id);
        $parter->status = ! $parter->status;
        $parter->save();
        return redirect()->back();
    }
}
