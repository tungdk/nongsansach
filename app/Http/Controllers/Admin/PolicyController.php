<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PolicyRequest;
use App\Models\Policy;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PolicyController extends Controller
{
    public function index(){
        $policies = Policy::query()->paginate(10);
        return view('admin.policy.index', compact('policies'));
    }

    public function create(){
        return view('admin.policy.create');
    }

    public function store(PolicyRequest $request){
        $name = $request->name;
        $content = $request->policy_content;
        $status = $request->status;
        $policy = new Policy();
        $policy->name = $name;
        $policy->slug = Str::slug($name);
        $policy->content = $content;
        $policy->status = $status;
        $success = $policy->save();

        if($success){
            Session::flash('toastr',[
                'type'  =>  'success',
                'message' => 'Thêm chính sách thành công'
            ]);
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $policy = Policy::find($id);
        return view('admin.policy.update', compact('policy'));
    }

    public function update(PolicyRequest $request, $id)
    {
        $policy = Policy::query()->findOrFail($id);
        $data = $request->except('_token');
        $data = [
            'updated_at' => Carbon::now(),
            'name' => $request->name,
            'content' => $request->policy_content
        ];

        $policy->update($data);
        Session::flash('toastr', [
            'type' => 'success',
            'message' => 'Cập nhật thành công'
        ]);
        return redirect()->back();
    }

    public function active($id)
    {
        $policy = Policy::find($id);
        $policy->status = !$policy->status;
        $policy->save();
        return redirect()->back();
    }
}
