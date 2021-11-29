<?php

namespace App\Http\Controllers;

use App\Brands;
use App\Category;
use App\Home;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $dataBrands = Brands::get();
        $dataHomes = Home::get();
        return view('home',compact('dataHomes', 'dataBrands'));
    }

    public function category($slug)
    {
        $dataCategorys = Brands::where('slug', $slug)->with(['categories' => function ($q) {
            $q->where('action', 1);
        }])->first();
        return view('category',compact('dataCategorys'));
    }

    public function productInCatalog($brand, $category)
    {

        $brand = Brands::whereSlug($brand)->first();

        $products = Category::where('slug', $category)->with(['products' => function ($query) use ($brand) {
            $query->where([
                'brand_id' => $brand->id
            ]);
        }])->first();

        return view('product',compact('products'));

    }

    //    public function category()
//    {
//
//        $dataCategorys = Category::get();
//        return view('category',compact('dataCategorys'));
//    }

//    public function about()
//    {
//        $dataAbouts = About::get();
//        return view('about',compact('dataAbouts'));
//    }
//
//    public function brand()
//    {
//        $dataBrands = Brand::get();
//        return view('brand',compact('dataBrands'));
//    }
//
//    public function contact()
//    {
//        $dataContacts = Contact::get();
//        return view('contact',compact('dataContacts'));
//    }
//
//    public function entry()
//    {
//        $dataEntry = Entry::get();
//        return view('entry',compact('dataEntry'));
//    }
//
//    public function action()
//    {
//        $dataActions = Action::get();
//        return view('action',compact('dataActions'));
//    }
//    public function second_action()
//    {
//        $dataSecondActions = SecondAction::get();
//        return view('second_action',compact('dataSecondActions'));
//    }
//    public function category($id)
//    {
//        $dataProducts = Product::where('category', $id)->get();
//        return view('category',compact('dataProducts'));
//    }
//
//    public function basket(request $request)
//    {
//        if (Auth::check()) {
//            $user = Auth::user();
//        }
//        if ($request->get('id'))
//        {
//        }
//        $idUsers = \Auth::user()->id;
//
//        $roles = $user->products()->orderBy('id')->get();
//
//
//
//        return view('basket',compact(  'idUsers', 'roles'));
//    }
//
//    public function saveBasket($id)
//    {
//        $users = Auth::user();
//
//        $users->products()->attach($id);
//
//        return back();
//    }
//
//    public function custom()
//    {
//        $dataCustoms = Customs::get();
//        return view('custom',compact('dataCustoms'));
//    }
//
//    public function thanks()
//    {
//        return view('thanks');
//    }
}
