<?php

namespace App\Http\Controllers;

use App\Apple;
use App\Asus;
use App\Category;
use App\Home;
use App\Nokia;
use App\Samsung;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $dataCategorys = Category::get();
        $dataHomes = Home::get();
        return view('home',compact('dataHomes', 'dataCategorys'));
    }

    public function apple()
    {
        $dataApples = Apple::get();
        return view('apple',compact('dataApples'));
    }

    public function asus()
    {
        $dataAsuse = Asus::get();
        return view('asus',compact('dataAsuse'));
    }

    public function huawei()
    {
        $dataHuaweis = Apple::get();
        return view('huawei',compact('dataHuaweis'));
    }

    public function nokia()
    {
        $dataNokias = Nokia::get();
        return view('nokia',compact('dataNokias'));
    }

    public function samsung()
    {
        $dataSamsungs = Samsung::get();
        return view('samsung',compact('dataSamsungs'));
    }

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
