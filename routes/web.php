<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// //:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Auth
// Route::group(['/login' => 'auth'], function () {
//     require(__DIR__ . '/auth.php');
// });
// //:::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Authenticated
// // Route::group(['middleware' => 'auth'], function () {
// //     // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Category
// //     // require(__DIR__ . '/brand.php');
// //     // // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Product
// //     // require(__DIR__ . '/product.php');
// //     // // :::::::::::::>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> Cart
// //     // require(__DIR__ . '/cart.php');
// // });



Route::get('/', function () {
    return view('products.show');
});
Route::get('/product/create',function(){
    return view('products.create');
}) ->name('products.create');


Route::POST('/product/store', [ProductController::class,'store'])->name('products.store');
Route::get('/product/show', [ProductController::class, 'show'])->name('products.show');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');
Route::POST('/product/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/product/show/json', [ProductController::class, 'showJson'])->name('products.showJson');
Route::get('/product/show/json/{id}', [ProductController::class, 'showJsonById']);


