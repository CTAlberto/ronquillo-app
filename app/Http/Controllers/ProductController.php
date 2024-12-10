<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $types = Type::all();
        return view('products.index')->with(['products' => $products, 'types' => $types]);
    }

    public function show($type)
    {
        $product = Product::where('type_id', $type)->get();
        $types = Type::all();
        return view('products.index') -> with(['products' => $product, 'types' => $types]);
    }
}
