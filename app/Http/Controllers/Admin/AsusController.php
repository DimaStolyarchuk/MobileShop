<?php

namespace App\Http\Controllers\Admin;

use App\Asus;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsusController extends Controller
{
    public function asus(){
        $dataAsuse = Asus::get();
        return view('admin.asus', compact('dataAsuse'));
    }

    public function asus_form(){
        $dataAsuse = [];
        return view('admin.asus_form', compact('dataAsuse'));
    }

    public function saveAsus(Request $request){
        $request->file('image')->store('unloads', 'public');

        $dataAsuse = $request->all();
        Asus::updateOrCreate([
            'id' => $dataAsuse['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'name' => $dataAsuse['name'],
            'action' => $dataAsuse['action'],
            'priority' => $dataAsuse['priority'],
        ]);
        return back();
    }
    public function edit_asus($id){
        $dataAsuse = Asus::where('id', $id)->first();
        return view('admin.edit_asus', compact('dataAsuse'));
    }

    public function delete_asus($id){
        Asus::where('id', $id)->delete();
        return back();
    }
}
