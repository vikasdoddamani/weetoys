<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

route::get('/',[HomeController::class,'home' ]);

route::get('/dashboard',[HomeController::class,'login_home' ])
->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('/anil_cart',function(){
    return view('anil.ProductSinglePage');
});

// Route::get('/dashboard', function () {
//     return view('home.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

route::get('admin/dashboard',[HomeController::class,'index'])->
middleware(['auth','admin']);

route::get('view_category',[AdminController::class,'view_category'])->
middleware(['auth','admin']);

route::post('add_category',[AdminController::class,'add_category'])->
middleware(['auth','admin']);

route::get('delete_category/{id}',[AdminController::class,'delete_category'])->
middleware(['auth','admin']);

route::get('edit_category/{id}',[AdminController::class,'edit_category'])->
middleware(['auth','admin']);

route::post('update_category/{id}',[AdminController::class,'update_category'])->
middleware(['auth','admin']);

route::get('add_product',[AdminController::class,'add_product'])->
middleware(['auth','admin']);

route::post('upload_product',[AdminController::class,'upload_product'])->
middleware(['auth','admin']);

route::get('view_product',[AdminController::class,'view_product'])->
middleware(['auth','admin']);

route::get('delete_product/{id}',[AdminController::class,'delete_product'])->
middleware(['auth','admin']);

route::get('update_product/{id}',[AdminController::class,'update_product'])->
middleware(['auth','admin']);

route::post('edit_product/{id}',[AdminController::class,'edit_product'])->
middleware(['auth','admin']);

route::get('product_search',[AdminController::class,'product_search'])->
middleware(['auth','admin']);

route::get('product_details/{id}',[HomeController::class,'product_details']);

route::get('add_cart/{id}',[HomeController::class,'add_cart'])
->middleware(['auth', 'verified']);

route::get('mycart',[HomeController::class,'mycart'])
->middleware(['auth', 'verified']);

route::delete('remove_cart/{id}',[HomeController::class,'remove_cart'])
->middleware(['auth', 'verified']);

route::get('user_checkout',[HomeController::class,'checkout'])
->middleware(['auth', 'verified']);

Route::post('/process_order/{id}', [HomeController::class, 'process_order'])
    ->name('process_order') // Add this line to name the route
    ->middleware(['auth', 'verified']);

    route::get('view_orders',[AdminController::class,'view_orders'])
->middleware(['auth', 'verified']);

Route::post('/update_order_status/{id}', [AdminController::class, 'update_order_status'])
    ->middleware(['auth', 'verified']);

Route::get('/download_invoice/{id}', [AdminController::class, 'downloadInvoice'])
->name('download_invoice')
->middleware(['auth', 'verified']);

Route::get('/category/{category}', [HomeController::class, 'showByCategory'])->name('category.products');

Route::get('/shop', [HomeController::class, 'category_by_products']);

Route::get('/usermyorder', [HomeController::class, 'usermyorder']);




