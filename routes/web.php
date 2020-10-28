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


Route::get('admin/login', ['as' => 'getLogin', 'uses' => 'AdminController@getLogin']);
Route::post('admin/login', ['as' => 'postLogin', 'uses' => 'AdminController@postLogin']);
Route::get('admin/logout', ['as' => 'getLogout', 'uses' => 'AdminController@getLogout']);

Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admin', 'namespace' => 'Admin'], function() {
	Route::get('/dashboard', function() {
		return view('admin.dashboard');
	});
});


// ---------------------------FRONT---------------------
Route::get('/', 'BannerController@getBanners');


Route::get('/jewelry-silver', 'CategoryController@getCategories');

Route::get('/jewelry-silver/{id}', 'CategoryController@getProducts');

Route::resource('/products', 'ProductController');


Route::resource('/cart', 'CartController');

Route::get('/test/{id}', 'ProductController@test');

// -----------------------ADMIN-------------------
Route::get('/admin/create-category', 'CategoryController@create_category');

Route::resource('/admin/categories', 'CategoryController');
Route::get('/admin/update_categories/{id}', 'CategoryController@show');
Route::post('/admin/update_categories/{id}', 'CategoryController@update');
Route::get('/admin/remove_categories/{id}', 'CategoryController@destroy');



// ------------------------------------
Route::get('/news', function(){
    return view('pages.blog');
});

Route::get('/lien-he', function(){
    return view('pages.contact');
});

Route::get('/checkout', function(){
    return view('pages.checkout');
});








