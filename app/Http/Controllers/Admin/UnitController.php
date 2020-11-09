<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UnitRequest;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index(){
        $units = Unit::query()->orderByDesc('created_at')->paginate(10);
        return view('admin.unit.index', compact('units'));
    }
    public function create(){
        return view('admin.unit.create');
    }
    public function store(UnitRequest $request){
        $unit = new Unit();
        $unit->name = $request->name;
        $unit->save();
        return redirect()->back();
    }
    public function edit($id){
        $unit = Unit::findOrFail($id);
        return view('admin.unit.update', compact('unit'));
    }
    public function update(UnitRequest $request, $id){
        $unit = Unit::findOrFail($id);
        $unit->name = $request->name;
        $unit->save();
        return redirect()->back();
    }

}
