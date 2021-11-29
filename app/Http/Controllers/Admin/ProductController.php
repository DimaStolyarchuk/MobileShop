<?php

namespace App\Http\Controllers\Admin;

use App\Brands;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $dataProducts = Product::with(['brand', 'category'])->get();
        return view('admin.product', compact('dataProducts'));
    }

    public function product_form(){
        $brands = Brands::get();
        $categories = Category::get();
        $dataProducts = [];
        return view('admin.product_form', compact('dataProducts', 'brands', 'categories'));
    }

    public function saveProduct(Request $request)
    {
        $dataProducts = $request->all();

        if  ($request->file('image')) {
            $request->file('image')->store('unloads', 'public');
            $image = $request->file('image')->getClientOriginalName();
        } else {
            $image = $dataProducts['image_2'];
        }

        Product::updateOrCreate([
            'id' => $dataProducts['id'],
        ],[
            'image' =>$image,
            'name' => $dataProducts['name'],
            'price' => $dataProducts['price'],
            'description' => $dataProducts['description'],
            'brand_id' => $dataProducts['brand_id'],
            'category_id' => $dataProducts['category_id'],
            'slug' => $dataProducts['slug'],
            'action' => $dataProducts['action'],
            'priority' => $dataProducts['priority'],
        ]);
        return back();
    }
    public function edit_product($id){

        $brand = Brands::get();
        $category = Category::get();
        $dataProducts = Product::where('id', $id)->first();
        return view('admin.edit_product', compact('dataProducts', 'brand', 'category'));
    }

    public function delete_product($id){
        Product::where('id', $id)->delete();
        return back();
    }
}
