<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return $products;
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->Name = $request->Name;
        $product->Description = $request->Description;
        $product->Purchase_value = $request->Purchase_value;
        $product->Sales_value = $request->Sales_value;
        $product->Stocks = $request->Stocks;
        $product->Type = $request->Type;

        $product->save();
    }

    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }

    public function update(Request $request)
    {
        $product = Product::findOrFail($request->id);
        
        $product->Name = $request->Name;
        $product->Description = $request->Description;
        $product->Purchase_value = $request->Purchase_value;
        $product->Sales_value = $request->Sales_value;
        $product->Stocks = $request->Stocks;
        $product->Type = $request->Type;

        $product->save();

        return $product;
    }

    public function destroy($id)
    {
        $product = Product::destroy($id);
        return $product;
    }
}
