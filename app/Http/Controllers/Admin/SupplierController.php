<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SupplierRequest;
use App\Models\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SupplierController extends Controller
{
    public function index(){
        $suppliers = Supplier::paginate(10);
        return view('admin.supplier.index', compact('suppliers'));
    }
    public function create(){
        return view('admin.supplier.create');
    }

    public function store(SupplierRequest $request){
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->logo = $request->logo;
        $supplier->description = $request->description;
        $supplier->status = $request->status ? '1' : '0';
        $success = $supplier->save();
        if($success){
            Session::flash('toastr',[
                'type'  =>  'success',
                'message' => 'Thêm nhà cung cấp thành công'
            ]);
        }

        return redirect()->back();
    }

    public function edit($id){
        $supplier = Supplier::query()->findOrFail($id);
        return view('admin.supplier.update', compact('supplier'));
    }

    public function update(SupplierRequest $request, $id){
        $supplier = Supplier::find($id);
        $data = $request->except('_token', 'status', 'logo');
        $data['status'] = $request->status ? '1' : '0';
        if(isset($request->logo)){
            $data['logo'] = $request->logo;
        }
        $data['updated_at'] = Carbon::now();
        $success = $supplier->update($data);
        if($success){
            Session::flash('toastr',[
                'type'  =>  'success',
                'message' => 'Cập nhật thông tin nhà cung cấp thành công'
            ]);
        }
        return redirect()->back();
    }

    public function active($id){
        $supplier = Supplier::find($id);
        $supplier->status = ! $supplier->status;
        $supplier->save();
        return redirect()->back();
    }
}
