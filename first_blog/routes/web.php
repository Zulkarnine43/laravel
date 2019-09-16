<?php

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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/',[
    'uses' =>'adminController@index',
    'as' =>'index'
]);


Route::get('/product/{id}',[
    'uses' =>'adminController@allpage',
    'as'=>'allpage'
]);


Route::get('/adminpage',[
    'uses' =>'adminController@addManage',
    'as' =>'admin'
]);

Route::get('/brand/add',[
    'uses' =>'brandController@add_brand',
    'as' =>'add_brand'
]);
Route::post('/brand/save',[
    'uses' =>'brandController@new_brand',
    'as' =>'new_brand'
]);

Route::get('/brand/manage',[
    'uses' =>'brandController@manage_brand',
    'as' =>'manage_brand'
]);

Route::get('/brand/delete/{id}',[
    'uses' =>'brandController@deleteBrand',
    'as' =>'delete_brand'
]);

Route::get('/category/add',[
    'uses' =>'categoryController@add_category',
    'as' =>'add_category'
]);

Route::post('/category/save',[
    'uses' =>'categoryController@new_category',
    'as' =>'new_category'
]);

Route::get('/category/manage',[
    'uses' =>'categoryController@manage_category',
    'as' =>'manage_category'
]);
Route::get('/category/delete/{id}',[
    'uses' =>'categoryController@deleteCategory',
    'as' =>'delete_category'
]);

Route::get('/products/added',[
    'uses' =>'productController@add_product',
    'as' =>'add_product'
]);

Route::post('/products/save',[
    'uses' =>'productController@new_product',
    'as' =>'new_product'
]);

Route::get('/products/manage',[
    'uses' =>'productController@manage_product',
    'as' =>'manage_product'
]);
Route::get('/products/Delete/{id}',[
    'uses' =>'productController@productDelete',
    'as' =>'productDelete'
]);
Route::get('/product/edit/{id}',[
    'uses' =>'productController@productEdit',
    'as' =>'productEdit'
]);
Route::post('/product/Update',[
    'uses' =>'productController@UpdateProduct',
    'as' =>'UpdateProduct'
]);


Route::get('/product/detail/{id}',[
    'uses' =>'productController@product_detail',
    'as' =>'product_detail'

]);

Route::get('/product/shipping/{id}',[
    'uses' =>'checkoutController@shipping',
    'as' =>'shipping'

]);

Route::get('/shipping/form/{id}',[
    'uses' =>'checkoutController@shippingForm',
    'as' =>'shippingForm'

]);


Route::post('/form/save',[
    'uses' =>'checkoutController@fromSubmit',
    'as' =>'fromSubmit'

]);

Route::get('/payment/type',[
    'uses' =>'checkoutController@payment',
    'as' =>'payment'

]);


Route::post('/payment/Info',[
    'uses' =>'checkoutController@paymenttype',
    'as' =>'paymenttype'

]);
Route::get('/Order/Info',[
    'uses' =>'checkoutController@OrderInfo',
    'as' =>'OrderInfo'

]);
Route::get('/download/Info',[
    'uses' =>'checkoutController@downloadInfo',
    'as' =>'downloadInfo'

]);


//Route::post('/add/cart/{id}',[
//   'uses' =>'productController@add_cart',
//   'as' =>'add_cart'

//]);
Route::get('/product/electronic',[
    'uses' =>'productController@electronic',
    'as' =>'electronic'

]);
Route::get('/customer/registered',[
    'uses' =>'customerController@registered',
    'as' =>'registered'
]);
Route::post('/registered/save',[
    'uses' =>'customerController@registerSave',
    'as' =>'registerSave'
]);
Route::get('/customer/logins',[
    'uses' =>'customerController@logins',
    'as' =>'logins'
]);
Route::post('/customer/loginCheck',[
    'uses' =>'customerController@loginCheck',
    'as' =>'loginCheck'
]);
Route::get('producs/Info/{name}',[
    'uses' =>'customerController@GetProduct',
    'as' =>'GetProduct'
]);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'adminController@addManage')->name('admin');
