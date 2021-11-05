<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Samsung;
use Illuminate\Http\Request;

class SamsungController extends Controller
{
    public function samsung(){
        $dataSamsungs = Samsung::get();
        return view('admin.samsung', compact('dataSamsungs'));
    }

    public function samsung_form(){
        $dataSamsungs = [];
        return view('admin.samsung_form', compact('dataSamsungs'));
    }

    public function saveSamsung(Request $request){
        $request->file('image')->store('unloads', 'public');

        $dataAsus = $request->all();
        Samsung::updateOrCreate([
            'id' => $dataAsus['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'name' => $dataAsus['name'],
            'action' => $dataAsus['action'],
            'priority' => $dataAsus['priority'],
        ]);
        return back();
    }
    public function edit_samsung($id){
        $dataSamsungs = Samsung::where('id', $id)->first();
        return view('admin.edit_samsung', compact('dataSamsungs'));
    }

    public function delete_samsung($id){
        Samsung::where('id', $id)->delete();
        return back();
    }
}
