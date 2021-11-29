<?php

namespace App\Http\Controllers\Admin;

use App\Brands;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function saveBrands(Request $request)
    {
        $dataBrands = $request->all();

        if  ($request->file('image')) {
            $request->file('image')->store('unloads', 'public');
            $image = $request->file('image')->getClientOriginalName();
        } else {
            $image = $dataBrands['image_2'];
        }

        $brands = Brands::updateOrCreate([
            'id' => $dataBrands['id'],
        ],[
            'image' =>$image,
            'name' => $dataBrands['name'],
            'slug' => Str::slug($dataBrands['name'], '-'),
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
