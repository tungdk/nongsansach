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
        return view('admin.partner.index');
    }

    function getAll(){
        return Partner::query()
            ->where('is_deleted', null)
            ->orWhere('is_deleted', 0)
            ->orderByDesc('created_at')
            ->get();
    }

    function load_data(){
        $partners = $this->getAll();
        return  response()->json([
            'view' => view('admin.partner.data', [
                'partners' => $partners
            ])->render()
        ], 200);
    }

    public function create(){
        return view('admin.partner.create');
    }

    public function store(PartnerRequest $request){
        $partner = new Partner();
        $partner->name = $request->name;
        $partner->logo = upload_image('partners', $request->logo);
        $partner->status = $request->status ? '1' : '0';
        $partner->save();
        return  response()->json([
            'message' => 'Thành công'
        ], 200);
    }

    public function edit($id){
        $partner = Partner::query()->findOrFail($id);
        return view('admin.partner.update', compact('partner'));
    }

    public function update(PartnerRequest $request, $id){
        $partner = Partner::query()->findOrFail($id);
        $data = $request->except('_token', 'status', 'logo');
        $data['status'] = $request->status ? '1' : '0';
        if(isset($request->logo)){
            $data['logo'] = upload_image('partners', $request->logo);
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

    public function active(Request $request){
        $id = $request->id;
        $parter = Partner::query()->findOrFail($id);
        $parter->status = ! $parter->status;
        $parter->save();

        $partners = $this->getAll();
        return  response()->json([
            'view' => view('admin.partner.data', [
                'partners' => $partners
            ])->render()
        ], 200);
    }

    public function delete(Request $request){
        $id = $request->id;
        $parter = Partner::query()->findOrFail($id);
        $parter->is_deleted = 1;
        $parter->save();

        $partners = $this->getAll();
        return  response()->json([
            'view' => view('admin.partner.data', [
                'partners' => $partners
            ])->render()
        ], 200);
    }
}
