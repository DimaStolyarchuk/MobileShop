<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        $dataProducts = Product::get();
        return view('admin.product', compact('dataProducts'));
    }

    public function product_form(){
        $dataProducts = [];
        return view('admin.product_form', compact('dataProducts'));
    }

    public function saveProduct(Request $request){
        $request->file('image')->store('unloads', 'public');

        $dataProducts = $request->all();
        Product::updateOrCreate([
            'id' => $dataProducts['id'],
        ],[
            'image' => $request->file('image')->getClientOriginalName(),
            'name' => $dataProducts['name'],
            'slug' => $dataProducts['slug'],
            'action' => $dataProducts['action'],
            'priority' => $dataProducts['priority'],
        ]);
        return back();
    }
    public function edit_product($id){
        $dataProducts = Product::where('id', $id)->first();
        return view('admin.edit_product', compact('dataProducts'));
    }

    public function delete_product($id){
        Product::where('id', $id)->delete();
        return back();
    }
}
