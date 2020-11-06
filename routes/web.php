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

// ---------------------------FRONT---------------------
Route::get('/','BannerController@getBanners');

Route::get('/jewelry/{id}-{slug}', 'CategoryController@getCommodities');

Route::get('/san-pham/{id}-{slug}', 'ProductController@getProducts');

Route::get('/chi-tiet/{slug}', 'ProductController@show');

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
Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admin'], function() {
	Route::get('/dashboard', function() {
		return redirect('/admin/products');
    });
            // -------------Categories--------------
    Route::resource('/categories', 'CategoryController');
    Route::get('/create-category', 'CategoryController@create_category');
    Route::get('/update_categories/{id}', 'CategoryController@show');
    Route::post('/update_categories/{id}', 'CategoryController@update');
    Route::get('/remove_categories/{id}', 'CategoryController@destroy');


            // -------------Products--------------
    Route::resource('/products', 'ProductController');
    Route::get('/create-product', 'ProductController@create_product');
    Route::get('/update_product/{id}', 'ProductController@detail');
    Route::post('/update_product/{id}', 'ProductController@update');
    Route::get('/remove_product/{id}', 'ProductController@destroy');


            // -------------Banners--------------
    Route::resource('/banners', 'BannerController');
    Route::get('/create-banner', 'BannerController@create_banner');
    Route::get('/update_banner/{id}', 'BannerController@show');
    Route::post('/update_banner/{id}', 'BannerController@update');
    Route::get('/remove_banner/{id}', 'BannerController@destroy');

            // -------------Thumbnails--------------
    Route::get('/thumbnails/{id}', 'ThumbnailController@showThumbnails');
    Route::get('/create-thumbnail/{id}', 'ThumbnailController@create_thumbnail');
    Route::post('/store-thumbnail', 'ThumbnailController@store');
    Route::get('/update_thumbnail/{id}', 'ThumbnailController@show');
    Route::post('/update_thumbnail/{id}', 'ThumbnailController@update');
    Route::get('/remove_thumbnail/{id}', 'ThumbnailController@destroy');

            // -------------Commodity--------------
    Route::get('/commodities', 'CommodityController@index');
    Route::get('/update_commodity/{id}', 'CommodityController@show');
    Route::post('/update_commodity/{id}', 'CommodityController@update');
    Route::get('/remove_commodity/{id}', 'CommodityController@destroy');

            // ---------------Delivery-------------------------

    Route::get('/delivery', 'DeliveryController@delivery');
    Route::post('/select-delivery', 'DeliveryController@select_delivery');
    Route::post('/select-feeship', 'DeliveryController@select_feeship');
    Route::post('/insert-delivery', 'DeliveryController@insert_delivery');
    Route::post('/update-delivery', 'DeliveryController@update_delivery');

            // ---------------Order-------------------------

    Route::get('/manage-order', 'OrderController@manage_order');
    Route::get('/view-order/{order_code}', 'OrderController@view_order');
    Route::post('/update-order-status/{id}', 'OrderController@update_order_status');
    Route::get('/delete-order/{order_code}', 'OrderController@delete_order');

});





// ------------------------------------









