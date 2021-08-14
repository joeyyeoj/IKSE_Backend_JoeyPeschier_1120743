<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(){
        $products = \App\Models\Product::all();
        return $products;
    }

    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            'brand' => 'required',
            'name' => 'required',
            'price' => 'required',
            'imagePath' => 'required',
            'description' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $nieuwProduct = Product::create(array_merge($validator->validated()));

        return response()->json([
            'message' => 'Product successfully registered',
        ], 201); 
    }
}
