<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Huawei;
use Illuminate\Http\Request;

class HuaweiController extends Controller
{
    public function huawei(){
        $dataHuaweis = Huawei::get();
        return view('admin.huawei', compact('dataHuaweis'));
    }

    public function Huawei_form(){
        $dataHuaweis = [];
        return view('admin.huawei_form', compact('dataHuaweis'));
    }

    public function saveHuawei(Request $request){
        $request->file('image')->store('unloads', 'public');

        $dataHuaweis = $request->all();
        Huawei::updateOrCreate([
            'id' => $dataHuaweis['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'name' => $dataHuaweis['name'],
            'action' => $dataHuaweis['action'],
            'priority' => $dataHuaweis['priority'],
        ]);
        return back();
    }
    public function edit_huawei($id){
        $dataHuaweis = Huawei::where('id', $id)->first();
        return view('admin.edit_huawei', compact('dataHuaweis'));
    }

    public function delete_huawei($id){
        Huawei::where('id', $id)->delete();
        return back();
    }
}
