<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // class DashboardController extends Controller

    public function index()
    {
        // $products = [['name'=>'Phone','price'=>250],['name'=>'Charger','price'=>10],['name'=>'Laptop','price'=>500]];   
        // return view('dashboard', [
        //     'name' => 'Nour',
        //     'age' => 22,
        //     'products' => $products,
        //     'productsCount' => count($products),
        // ]);
        $products = Product::all();
        $productsCount = $products->count();
        $name = 'Nour';
        $age = 22;
        return view('dashboard', compact('products', 'productsCount', 'name', 'age'));
    }
}
