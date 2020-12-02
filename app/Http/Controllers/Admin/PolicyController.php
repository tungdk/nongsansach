<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PolicyRequest;
use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function index(){
        $policies = Policy::query()->where('status', 1)->paginate(10);
        return view('admin.policy.index', compact('policies'));
    }

    public function create(){
        return view('admin.policy.create');
    }

    public function store(PolicyRequest $request){
        echo 'ahihi';
    }
}
