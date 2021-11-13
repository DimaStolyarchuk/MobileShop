<?php

namespace App\Http\Controllers\Admin;

use App\Brands;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function brands(){
        $dataBrands = Brands::get();
        return view('admin.brands', compact('dataBrands'));
    }

    public function brands_form(){
        $dataBrands = [];
        return view('admin.brands_form', compact('dataBrands'));
    }

    public function saveBrands(Request $request){
       // $request->file('image')->store('unloads', 'public');

        $dataBrands = $request->all();
        $brands = Brands::updateOrCreate([
            'id' => $dataBrands['id'],
        ],[
           // 'image' => $request->file('image')->getClientOriginalName(),
            'name' => $dataBrands['name'],
            'slug' => $dataBrands['slug'],
            'action' => $dataBrands['action'],
            'priority' => $dataBrands['priority'],
        ]);

        $brands->categories()->detach();

        $brands->categories()->attach($dataBrands['category_id']);
        return back();
    }

    public function edit_brands($id){

        $categories = Category::get();
        $dataBrands = Brands::where('id', $id)->first();
        return view('admin.edit_brands', compact('dataBrands','categories'));
    }

    public function delete_brands($id){
        Brands::where('id', $id)->delete();
        return back();
    }
}
