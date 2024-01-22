<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index($slug,$categoryId){
        $categoriesLimit = Category::where('parent_id',0)->take(3)->get() ;
        $products = Product::where('category_id',$categoryId)->paginate(12);
        $categories = Category::where('parent_id',0)->get() ;

        return view('product.category.list',compact('categoriesLimit','products','categories'));
    }
}