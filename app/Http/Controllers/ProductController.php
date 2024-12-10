<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;
use App\Models\Location;
use App\Models\QuantityType;
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

    public function create()
    {
        $types = Type::all();
        $locations = Location::all();
        $quantity_types = QuantityType::all();
        return view('products.create')->with(['types' => $types, 'locations' => $locations, 'quantity_types' => $quantity_types]);
    }

    public function store(){
        request()->validate([
            'name' => 'required',
            'type_id' => 'required',
            'location_id' => 'required',
            'quantity' => 'required',
            'quantity_type_id' => 'required',
        ]);
        Product::create([
            'name' => request('name'),
            'type_id' => request('type_id'),
            'location_id' => request('location_id'),
            'quantity' => request('quantity'),
            'quantity_type_id' => request('quantity_type_id'),
        ]);
        return redirect()->route('products.index');
    }
    public function storeEdit(){
        request()->validate([
            'id' => 'required',
            'name' => 'required',
            'type_id' => 'required',
            'location_id' => 'required',
            'quantity' => 'required',
            'quantity_type_id' => 'required',
        ]);
        $product = Product::find(request('id'));
        $product->update([
            'name' => request('name'),
            'type_id' => request('type_id'),
            'location_id' => request('location_id'),
            'quantity' => request('quantity'),
            'quantity_type_id' => request('quantity_type_id'),
        ]);
        return redirect()->route('products.index');
    }
    
    public function edit($id)
    {
        return view('products.edit')->with(['product' => Product::find($id), 'types' => Type::all(), 'locations' => Location::all(), 'quantity_types' => QuantityType::all()]);
    }
}
