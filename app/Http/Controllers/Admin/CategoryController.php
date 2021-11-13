<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        $dataCategorys = Category::get();
        return view('admin.category', compact('dataCategorys'));
    }

    public function category_form(){
        $dataCategorys = [];
        return view('admin.category_form', compact('dataCategorys'));
    }

    public function saveСategory(Request $request){
        $request->file('image')->store('unloads', 'public');

        $dataCategorys = $request->all();
        Category::updateOrCreate([
            'id' => $dataCategorys['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'name' => $dataCategorys['name'],
            'slug' => $dataCategorys['slug'],
            'action' => $dataCategorys['action'],
            'priority' => $dataCategorys['priority'],
        ]);
        return back();
    }
    public function edit_category($id){
        $dataCategorys = Category::where('id', $id)->first();
        return view('admin.edit_category', compact('dataCategorys'));
    }

    public function delete_category($id){
        Category::where('id', $id)->delete();
        return back();
    }



}
