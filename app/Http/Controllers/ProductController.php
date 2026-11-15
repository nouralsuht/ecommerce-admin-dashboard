<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        // $products=[['name'=>'Phone','price'=>250],['name'=>'Charger','price'=>10],['name'=>'Laptop','price'=>500]];
        // $products=[];
//         $products = [
//     ['name' => 'Phone', 'price' => 250, 'stock' => 5],
//     ['name' => 'Charger', 'price' => 10, 'stock' => 0],
//     ['name' => 'Laptop', 'price' => 500, 'stock' => 3],
// ];
// $productsCount = count($products);
//         $title = 'Our Products';
//         return view('products', compact('products', 'title', 'productsCount'));
$products=Product::all();
$productsCount = $products->count();
$title = 'Our Products';
return view('products', compact('products', 'title', 'productsCount'));
    }
    public function create()
    {
        return view('products-create');
    }
    public function store (Request $request)
    {
       $validatedData=$request->validate([
        'name'=>'required|string|max:255',
        'price'=>'required|numeric|min:0',
        'stock'=>'required|integer|min:0',
       ]);
         Product::create($validatedData);
        return redirect()->route('products')->with('success', 'Product created successfully.');
    }
    public function edit($id)
{
    $product = Product::findOrFail($id);

    return view('products-edit', compact('product'));
}
public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    // Validation and updating will go here.
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'stock' => 'required|integer|min:0',
    ]);
    $product->update($validatedData);
    return redirect()->route('products')->with('success', 'Product updated successfully.');
}
public function destroy($id)
{
    $product = Product::findOrFail($id);

    $product->delete();

    return redirect()->route('products')
        ->with('success', 'Product deleted successfully.');
}
}
