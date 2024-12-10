<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
use App\Models\Location;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $types = Type::all();
        $location = Location::all();
        return view('products.index')->with(['products' => $products, 'types' => $types, 'locations' => $location]);
    }

    public function type($type)
    {
        $product = Product::where('type_id', $type)->get();
        $types = Type::all();
        $location = Location::all();
        return view('products.index') -> with(['products' => $product, 'types' => $types, 'locations' => $location]);
    }
    public function location($location)
    {
        $product = Product::where('location_id', $location)->get();
        $location = Location::all();
        $types = Type::all();
        return view('products.index') -> with(['products' => $product, 'locations' => $location,'types' => $types]);
    }
}
