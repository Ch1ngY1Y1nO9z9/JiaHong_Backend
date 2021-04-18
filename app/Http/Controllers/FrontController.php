<?php

namespace App\Http\Controllers;

use App\Banners;
use App\ContactUs;
use App\News;
use App\Products;
use App\ProductsType;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function redirectToCh() {
        return redirect('/ch');
    }

    public function index() {
        $banners = Banners::orderBy('sort','desc')->get();
        $all_news = News::orderBy('sort','desc')->take(2)->get();
        $productTypes = ProductsType::orderBy('sort','desc')->get();

        return view('front.index',compact('banners','all_news','productTypes'));
    }

    public function index_en() {
        $banners = Banners::orderBy('sort','desc')->get();
        $all_news = News::orderBy('sort','desc')->take(2)->get();
        $productTypes = ProductsType::orderBy('sort','desc')->get();

        return view('front.index_en',compact('banners','all_news','productTypes'));
    }


    public function news($lang,$id) {
        $news = News::find($id);

        if($lang == 'ch'){
            return view('front.news_ch',compact('news'));
        }

        return view('front.news_en',compact('news'));
    }

    public function Types($lang,$id) {
        $type = ProductsType::find($id);
        $products = Products::where('type',$type->id)->orderBy('sort','desc')->get();

        if($lang == 'ch'){
            return view('front.product_ch',compact('type','products'));
        }
        return view('front.product_en',compact('type','products'));
    }

    public function contact_us(Request $request) {
        ContactUs::create($request->all());

        return redirect('/');
    }
}
