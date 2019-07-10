<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    public function product(){
        $products = Product::all();
        return response()->json([
            'products'=>$products
        ],200);
    }

    public function productDetails($id){
        $product = Product::with('category')->where('id', $id)->first();
        return response()->json([
            'product'=>$product
        ],200);
    }
}
