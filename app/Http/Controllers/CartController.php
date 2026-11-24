<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $userId = Auth::id();
        
        $cart = Cart::where('user_id', $userId)->where('status', 'active')->first();
        return view('carts.index',compact('cart'));
    }  

    public function show(string $id){
        $cart = Cart::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();
        $cart->items;    
            return view('carts.show',compact('cart'));
    }
} 
