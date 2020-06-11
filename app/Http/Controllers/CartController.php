<?php

namespace App\Http\Controllers;

use App\Cart;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{


    public  function index(){

        if( Auth::id()){
        $user = User::find( Auth::id());
        $products= $user->products;
        $count=count($products);
        $total=$products->sum('price');;
     return view('cart',compact('products','count','total'));
        }else{

        return back()->with('error', 'No product was found in the cart');

        }
    }




    public  function store( Request $request ,$id){

        if(Auth::id()){
          Cart::create([
          'product_id'=>$id,
          'user_id'=> Auth::id(),
          'quantity'=>$request->quantity
          ]);
         return  redirect()->route('cart.index')->with('succsess','a new product exists
         ');
        }
        return  back()->with('error', 'You must log in first');
    }




}
