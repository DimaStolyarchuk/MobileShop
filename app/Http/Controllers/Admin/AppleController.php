<?php

namespace App\Http\Controllers\Admin;

use App\Apple;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppleController extends Controller
{
    public function apple(){
        $dataApples = Apple::get();
        return view('admin.apple', compact('dataApples'));
    }

    public function apple_form(){
        $dataApples = [];
        return view('admin.apple_form', compact('dataApples'));
    }

    public function saveApple(Request $request){
        $request->file('image')->store('unloads', 'public');

        $dataApples = $request->all();
        Apple::updateOrCreate([
            'id' => $dataApples['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'name' => $dataApples['name'],
            'action' => $dataApples['action'],
            'priority' => $dataApples['priority'],
        ]);
        return back();
    }
    public function edit_apple($id){
        $dataApples = Apple::where('id', $id)->first();
        return view('admin.edit_apple', compact('dataApples'));
    }

    public function delete_apple($id){
        Apple::where('id', $id)->delete();
        return back();
    }
}
