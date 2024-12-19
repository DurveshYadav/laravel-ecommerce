<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //


    public function cart()
    {
        // Your logic here
        // return view('cart.index'); // Adjust the view name as per your application
        return view('front.cart');
    }


}
