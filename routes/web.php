<?php

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

// Route::get('/', [pagesController, 'home'])->name('homepage');
Route::get('/', 'pagesController@home')->name('home');

Route::get('/products/{product}', 'pagesController@showProduct');
Route::get('/products/personalized-gifts', 'pagesController@personalizedGiftsByCategory')->name('personalized-gifts');
Route::get('/products/personalized-gifts/{subcategory}', 'pagesController@personalizedGiftsByCategory')->name('personalized-gifts.index');

// Route::get('/category', 'CategoryController@show');
// Route::get('/page', 'CategoryController@show');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'manage'], function() {

    Route::group(['middleware' => ['auth','permission:browse admin']], function () {

        Route::get('/dashboard', 'ManagePages@dashboard')->name('manage.dashboard');
        Route::put('/categories/{category}/change-status', 'CategoryController@changeStatus');
        Route::put('/categories/{category}/assign-label', 'CategoryController@assignLabel');
        Route::resource('/categories', 'CategoryController');

        Route::resource('/categories/{category}/sub-categories', 'SubCategoryController');
        Route::put('/subcategories/{sub}/change-status', 'SubCategoryController@changeStatus');
        Route::put('/subcategories/{sub}/assign-label', 'SubCategoryController@assignLabel');

        Route::put('/menu/{menu}/assign-label', 'MenuController@assignLabel');
        Route::put('/menu/{menu}/change-status', 'MenuController@changeStatus');
        Route::resource('/menu', 'MenuController');
        Route::resource('/labels', 'LabelController');
        Route::resource('/colors', 'ColorController');

        Route::get('/select-product-type', 'ProductController@selectProductType')->name('select_product_type');
        Route::post('/products/{product}/gallery', 'ProductController@storeGallery');
        Route::put('/products/{product}/change-status', 'ProductController@changeStatus');
        Route::delete('/products/{product}/gallery-image/{image}', 'ProductController@deleteGalleryImage');
        Route::resource('/products', 'ProductController');
        Route::get('/create/gift-product', 'ProductController@createGiftProduct')->name('products.gift.create');

        Route::resource('/products/{product}/points', 'PointController');
        Route::put('/sizes/{size}/change-status', 'SizeController@changeStatus');
        Route::resource('/sizes', 'SizeController');
        Route::put('/papers/{paper}/change-status', 'PaperController@changeStatus');
        Route::resource('/papers', 'PaperController');
        Route::put('/finishings/{finishing}/change-status', 'FinishingController@changeStatus');
        Route::resource('/finishings', 'FinishingController');
        Route::put('/packages/{pacakge}/change-status', 'PackageController@changeStatus');
        Route::resource('/products/{product}/packages', 'PackageController');
        Route::resource('/products/{product}/variants', 'VariantController');
        Route::post('/products/{product}/variants/{variant}/add-color-to-variant', 'VariantController@addColorToVariant');
        Route::put('/variants/{variant}/change-status', 'VariantController@changeStatus');
        Route::put('/prices/{price}/change-status', 'PackagePriceController@changeStatus');
        Route::resource('/products/{product}/packages/{package}/prices', 'PackagePriceController');
        Route::delete('/packagepricesizes/{packagepricesize}', 'PackagePriceSizeController@destroy');

    });

});