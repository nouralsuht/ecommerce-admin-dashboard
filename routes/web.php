<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    // return view('welcome');
    return "<h1>Welcome to the App</h1>";
});
Route ::get('/nour',function(){
return "<h1>Welcome Nour</h1>" ;
})->name('nour');
// Route::get('/dashboard',function(){
// $p = [
//     ['name' => 'Laptop', 'price' => 500],
//     ['name' => 'Mouse', 'price' => 15],
//     ['name' => 'Keyboard', 'price' => 30],
// ];
// $products = [
//     ['name' => 'Phone', 'price' => 250],
//     ['name' => 'Charger', 'price' => 10],
// ];
// // $products = []; // One item: an empty array
//     // $featuredProduct=[['name'=>'Phone','price'=>250],['name'=>'Laptop','price'=>500],['name'=>'Tablet','price'=>300] ,['name' => 'Mouse', 'price' => 15],
//     // ['name' => 'Keyboard', 'price' => 30]];
//     return view('dashboard' ,['name'=>'Nour' , 'age'=>22 ,'productsCount'=>count($products), 'products'=>$products  ,'p'=>$p]);  
// });
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('/products',[ProductController::class,'index'])->name('products');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products',[ProductController::class,'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])
    ->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])
    ->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])
    ->name('products.destroy');