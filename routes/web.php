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

Route::get('/', function () {
    return redirect('home');
});


Route::get('/home', function (){
    $categories =  App\Models\Category::all();
    return view('pages.home')->with('categories', $categories);
});

Route::get('/jewelry-silver', 'CategoryController@index');

Route::get('/jewelry-silver/{id}', 'CategoryController@show');

Route::resource('/products', 'ProductController');

Route::get('/day-chuyen-bac-925-hanada-n34-n-x-s-380-0607-canh-canh-chim-xa-cu', function (){
    return view('pages.detail.detail');
});


