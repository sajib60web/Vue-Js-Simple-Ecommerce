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
    return view('frontend.master');
});

Route::get('/category', 'WelcomeController@product');
Route::get('/product-details/{id}', 'WelcomeController@productDetails');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/main-category/manage', 'MainCategoryController@index');
Route::post('/insert-main-category', 'MainCategoryController@insertMainCategory');
Route::get('/publish-main-category/{id}', 'MainCategoryController@publishMainCategory');
Route::get('/unpublish-main-category/{id}', 'MainCategoryController@unpublishMainCategory');
Route::post('/update-main-category', 'MainCategoryController@updateMainCategory');
Route::get('/delete-main-category/{id}', 'MainCategoryController@deleteMainCategory');

Route::get('/sub-category/manage', 'SubCategoryController@index');
Route::post('/insert-sub-category', 'SubCategoryController@insertSubCategory');
Route::get('/publish-sub-category/{id}', 'SubCategoryController@publishSubCategory');
Route::get('/unpublish-sub-category/{id}', 'SubCategoryController@unpublishSubCategory');
Route::post('/update-sub-category', 'SubCategoryController@updateSubCategory');
Route::get('/delete-sub-category/{id}', 'SubCategoryController@deleteSubCategory');


Route::get('/brand/manage', 'BrandController@index');
Route::post('/insert-brand', 'BrandController@insertBrand');
Route::get('/publish-brand/{id}', 'BrandController@publishBrand');
Route::get('/unpublish-brand/{id}', 'BrandController@unpublishBrand');
Route::post('/update-brand', 'BrandController@updateBrand');
Route::get('/delete-brand/{id}', 'BrandController@deleteBrand');

Route::get('/product/manage', 'ProductController@index');
Route::post('/insert-product', 'ProductController@insertProduct');
Route::get('/edit-image/{id}', 'ProductController@editImage');
Route::post('/update-product_image', 'ProductController@updateProductImage');
Route::get('/publish-product/{id}', 'ProductController@publishProduct');
Route::get('/unpublish-product/{id}', 'ProductController@unpublishProduct');
Route::post('/update-product', 'ProductController@updateProduct');
Route::get('/delete-product/{id}', 'ProductController@deleteProduct');
