<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $products = Product::all();
        $categories = Category::all();
        $count = count($products);
        return view('home', compact('products', 'count', 'categories'));
    }



    public function show($id)
    {
        $product = Product::find($id);
        return view('single-product-details', compact('product'));
    }
    public function category_products($id)
    {
        $categories = Category::all();

        $products = Category::find($id)->product;
        $count = count($products);
        return view('home', compact('products', 'count', 'categories'));
    }
}
