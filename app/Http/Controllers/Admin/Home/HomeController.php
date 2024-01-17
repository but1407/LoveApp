<?php

namespace App\Http\Controllers\Admin\Home;

use App\Models\Slider;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::latest()->take(6)->get() ;
        $categories = Category::where('parent_id',0)->get() ;
        $products = Product::latest()->get() ;
        

        return view('home.home', compact('sliders','categories','products'));
    }




    
}