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
        return view('admin.policy.index');
    }

    function getAll(){
        return Policy::query()
            ->where('is_deleted', null)
            ->orWhere('is_deleted', 0)
            ->orderByDesc('created_at')
            ->get();
    }

    function load_data(){
        $policies = $this->getAll();
        return  response()->json([
            'view' => view('admin.policy.data', [
                'policies' => $policies
            ])->render()
        ]);
    }

    public function create(){
        return view('admin.policy.create');
    }

    public function store(PolicyRequest $request){
        $policy = new Policy();
        $policy->name = $request->name;
        $policy->slug = Str::slug($request->name);
        $policy->content = $request->policy_content;
        $policy->status = $request->status;
        $policy->save();

        return response()->json([
            'message' => 'Thành công'
        ], 200);
    }

    public function edit($id)
    {
        $policy = Policy::find($id);
        return view('admin.policy.update', compact('policy'));
    }

    public function update(PolicyRequest $request)
    {
        $id = $request->id;
        $policy = Policy::query()->findOrFail($id);
        $data = [
            'updated_at' => Carbon::now(),
            'name' => $request->name,
            'content' => $request->policy_content
        ];
        $data['status'] = $request->status ? '1' : 0;

        $policy->update($data);
        return response()->json([
            'message' => 'Thành công'
        ], 200);
    }

    public function active(Request $request)
    {
        $id = $request->id;
        $policy = Policy::query()->findOrFail($id);
        $policy->status = !$policy->status;
        $policy->save();

        $policies = $this->getAll();
        return response()->json([
            'view' => view('admin.policy.data', [
                'policies' => $policies
            ])->render()
        ]);
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $policy = Policy::query()->findOrFail($id);
        $policy->is_deleted = 1;
        $policy->save();
        $policies = $this->getAll();
        return response()->json([
            'view' => view('admin.policy.data', [
                'policies' => $policies
            ])->render()
        ]);
    }
}
