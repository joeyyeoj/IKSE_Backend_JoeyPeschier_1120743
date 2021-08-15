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

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'brand' => 'required',
            'name' => 'required',
            'price' => 'required',
            'imagePath' => 'required',
            'description' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $product = Product::find($request->id);
        $product->brand = $request->brand;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->imagePath = $request->imagePath;
        $product->description = $request->description;

        $product->save();

        return response()->json([
            'message' => 'Product successfully updated',
        ], 200); 
    }

    public function delete($id){
        if($id == null){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $product = Product::find($id);
        $product->delete();

        return response()->json([
            'message' => 'Product successfully deleted',
        ], 200); 
    }
}
