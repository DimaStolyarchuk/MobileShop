<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Nokia;
use Illuminate\Http\Request;

class NokiaController extends Controller
{
    public function nokia(){
        $dataNokias = Nokia::get();
        return view('admin.nokia', compact('dataNokias'));
    }

    public function nokia_form(){
        $dataNokias = [];
        return view('admin.nokia_form', compact('dataNokias'));
    }

    public function saveNokia(Request $request){
        $request->file('image')->store('unloads', 'public');

        $dataNokias = $request->all();
        Nokia::updateOrCreate([
            'id' => $dataNokias['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'name' => $dataNokias['name'],
            'action' => $dataNokias['action'],
            'priority' => $dataNokias['priority'],
        ]);
        return back();
    }
    public function edit_nokia($id){
        $dataNokias = Nokia::where('id', $id)->first();
        return view('admin.edit_nokia', compact('dataNokias'));
    }

    public function delete_nokia($id){
        Nokia::where('id', $id)->delete();
        return back();
    }
}
