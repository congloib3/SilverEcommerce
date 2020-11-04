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



// --------------------------LOGIN---------------------
Route::get('admin/login', ['as' => 'getLogin', 'uses' => 'AdminController@getLogin']);
Route::post('admin/login', ['as' => 'postLogin', 'uses' => 'AdminController@postLogin']);
Route::get('admin/logout', ['as' => 'getLogout', 'uses' => 'AdminController@getLogout']);
Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admin', 'namespace' => 'Admin'], function() {
	Route::get('/dashboard', function() {
		return redirect('/admin/products');
	});
});


// ---------------------------FRONT---------------------
Route::get('/slug/{product}', 'BannerController@testSlug');
Route::get('/', 'BannerController@getBanners');

Route::get('/jewelry/{id}', 'CategoryController@getCommodities');

Route::get('/san-pham/{id}', 'ProductController@getProducts');

Route::get('/chi-tiet/{id}', 'ProductController@show');

Route::get('/tim-kiem', 'ProductController@search');

        // ---------------Checkout--------------------
Route::get('/checkout', 'CheckoutController@index');
Route::post('/checkout-select-delivery', 'CheckoutController@select_delivery');
Route::post('/checkout-calculate-fee', 'CheckoutController@calculate_fee');
Route::post('/checkout-complete-bill', 'CheckoutController@checkout_complete_bill');

        // ---------------Cart-------------------------
Route::get('/cart', 'CartController@index');
Route::post('/add-cart-ajax', 'CartController@add_cart_ajax');
Route::post('/update-cart', 'CartController@update_cart');
Route::get('/delete-cart/{session_id}', 'CartController@delete_cart');

        // ---------------Help-------------------------
Route::get('/cach-do-size-nhan', function(){
    return view('pages.help.size-nhan');
});
Route::get('/cach-do-size-day-chuyen', function(){
    return view('pages.help.size-day-chuyen');
});
Route::get('/cach-do-size-lac', function(){
    return view('pages.help.size-lac');
});
Route::get('/cach-giu-cho-trang-suc-bac-sang-dep', function(){
    return view('pages.help.giu-trang-suc');
});

// -----------------------ADMIN-------------------

        // -------------Categories--------------
Route::resource('/admin/categories', 'CategoryController');
Route::get('/admin/create-category', 'CategoryController@create_category');
Route::get('/admin/update_categories/{id}', 'CategoryController@show');
Route::post('/admin/update_categories/{id}', 'CategoryController@update');
Route::get('/admin/remove_categories/{id}', 'CategoryController@destroy');


        // -------------Products--------------
Route::resource('/admin/products', 'ProductController');
Route::get('/admin/create-product', 'ProductController@create_product');
Route::get('/admin/update_product/{id}', 'ProductController@detail');
Route::post('/admin/update_product/{id}', 'ProductController@update');
Route::get('/admin/remove_product/{id}', 'ProductController@destroy');


        // -------------Banners--------------
Route::resource('/admin/banners', 'BannerController');
Route::get('/admin/create-banner', 'BannerController@create_banner');
Route::get('/admin/update_banner/{id}', 'BannerController@show');
Route::post('/admin/update_banner/{id}', 'BannerController@update');
Route::get('/admin/remove_banner/{id}', 'BannerController@destroy');

        // -------------Thumbnails--------------
Route::get('admin/thumbnails/{id}', 'ThumbnailController@showThumbnails');
Route::get('/admin/create-thumbnail/{id}', 'ThumbnailController@create_thumbnail');
Route::post('/admin/store-thumbnail', 'ThumbnailController@store');
Route::get('/admin/update_thumbnail/{id}', 'ThumbnailController@show');
Route::post('/admin/update_thumbnail/{id}', 'ThumbnailController@update');
Route::get('/admin/remove_thumbnail/{id}', 'ThumbnailController@destroy');

        // -------------Commodity--------------
Route::get('/admin/commodities', 'CommodityController@index');
Route::get('/admin/create-commodity', 'CommodityController@create_commodity');
Route::get('/admin/update_commodity/{id}', 'CommodityController@show');
Route::post('/admin/update_commodity/{id}', 'CommodityController@update');
Route::get('/admin/remove_commodity/{id}', 'CommodityController@destroy');

        // ---------------Delivery-------------------------

Route::get('/admin/delivery', 'DeliveryController@delivery');
Route::post('/admin/select-delivery', 'DeliveryController@select_delivery');
Route::post('/admin/select-feeship', 'DeliveryController@select_feeship');
Route::post('/admin/insert-delivery', 'DeliveryController@insert_delivery');
Route::post('/admin/update-delivery', 'DeliveryController@update_delivery');

        // ---------------Order-------------------------

Route::get('/admin/manage-order', 'OrderController@manage_order');
Route::get('/admin/view-order/{order_code}', 'OrderController@view_order');
Route::get('/admin/delete-order/{order_code}', 'OrderController@delete_order');





// ------------------------------------









