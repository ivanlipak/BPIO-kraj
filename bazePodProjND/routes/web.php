<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
//Route::get('/', 'App\\Http\\Controllers\\HomeController@dashboard')->name('dashboard');



//index
Route::get('/cartitem', 'App\\Http\\Controllers\\CartItemController@index')                ->name('cartitem.index');
Route::get('/inventory', 'App\\Http\\Controllers\\InventoryController@index')               ->name('inventory.index');
Route::get('/orderdetail', 'App\\Http\\Controllers\\OrderDetailController@index')          ->name('orderdetail.index');
Route::get('/orderitem', 'App\\Http\\Controllers\\OrderItemController@index')              ->name('orderitem.index');
Route::get('/paymentdetail', 'App\\Http\\Controllers\\PaymentDetailController@index')      ->name('paymentdetail.index');
Route::get('/productcategory', 'App\\Http\\Controllers\\ProductCategoryController@index')  ->name('productcategory.index');
Route::get('/product', 'App\\Http\\Controllers\\ProductController@index')                   ->name('product.index');
Route::get('/shoppingsession', 'App\\Http\\Controllers\\ShoppingSessionController@index')  ->name('shoppingsession.index');
Route::get('/useraddress', 'App\\Http\\Controllers\\UserAddressController@index')          ->name('useraddress.index');
Route::get('/userpayment', 'App\\Http\\Controllers\\UserPaymentController@index')          ->name('userpayment.index');
Route::get('/user', 'App\\Http\\Controllers\\UserController@index')                         ->name('user.index');

//store
Route::post('/cartitem', 'App\\Http\\Controllers\\CartItemController@store');
Route::post('/inventory', 'App\\Http\\Controllers\\InventoryController@store');
Route::post('/orderdetail', 'App\\Http\\Controllers\\OrderDetailController@store');
Route::post('/orderitem', 'App\\Http\\Controllers\\OrderItemController@store');
Route::post('/paymentdetail', 'App\\Http\\Controllers\\PaymentDetailController@store');
Route::post('/productcategory', 'App\\Http\\Controllers\\ProductCategoryController@store');
Route::post('/product', 'App\\Http\\Controllers\\ProductController@store');
Route::post('/shoppingsession', 'App\\Http\\Controllers\\ShoppingSessionController@store');
Route::post('/useraddress', 'App\\Http\\Controllers\\UserAddressController@store');
Route::post('/userpayment', 'App\\Http\\Controllers\\UserPaymentController@store');
Route::post('/user', 'App\\Http\\Controllers\\UserController@store');

//destory
Route::get('/cartitem/delete/{cartitem}', [CartItemController::class, 'destroy'])                  ->name('cartitem.destroy');
Route::get('/inventory/delete/{inventory}', [InventoryController::class, 'destroy'])                ->name('inventory.destroy');
Route::get('/orderdetail/delete/{orderdetail}', [OrderDetailController::class, 'destroy'])         ->name('orderdetail.destroy');
Route::get('/orderitem/delete/{orderitem}', [OrderItemController::class, 'destroy'])               ->name('orderitem.destroy');
Route::get('/paymentdetail/delete/{payment_detail}', [PaymentDetailController::class, 'destroy'])  ->name('paymentdetail.destroy');
Route::get('/useraddress/delete/{useraddress}', [UserAddressController::class, 'destroy'])         ->name('useraddress.destroy');
Route::get('/user/delete/{user}', [UserController::class, 'destroy'])                               ->name('user.destroy');
Route::get('/userpayment/delete/{userpayment}', [UserPaymentController::class, 'destroy'])         ->name('userpayment.destroy');
Route::get('/productdelete/{user}', [ProductController::class, 'destroy'])                         ->name('product.destroy');
Route::get('/shoppingsession/delete/{session}', [ShoppingSessionController::class, 'destroy'])     ->name('shoppingsession.destroy');
Route::get('/productcategory/delete/{user}', [ProductCategoryController::class, 'destroy'])        ->name('productcategory.destroy');

/* authorizacija */
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'attemptLogin'])->name('auth.attempt_login');

Route::POST('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 

Route::post('/register', [AuthController::class, 'register'])->name('auth.attempt_register');
