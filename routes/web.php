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

Route::get('/','Front\HomeController@index');

Route::get('/about-us',function(){
return view('front.aboutus');
});

Route::get('/contact-us',function(){
	return view('front.contactus');
});

Route::get('/tnc',function(){
	return view('front.tnc');
});

Route::get('/work',function(){
	return view('front.work');
});

Route::get('/why-us',function(){
	return view('front.whyus');
});

Route::get('/faq',
function(){
	return view('faq');

});

Route::get('/searchproduct','Front\HomeController@search');
Route::get('/categoryselect/','Front\HomeController@selectcategory');

Route::get('/categoryproduct/{categoryid}','Front\HomeController@productselect');
Route::get('/locationproduct/{category}/{location}/','Front\HomeController@dash');

Route::get('/search','Front\HomeController@productsearch');
Route::get('/product/{category_name}','Front\HomeController@categoryview');

Route::get('/categoryproduct/{categoryid}','Front\HomeController@categorysearch');
Auth::routes();


Route::middleware(['auth','prevent-back-history'])->group(function(){

Route::group(['prefix' =>'/admin'],function(){




Route::get('/','Admin\HomeController@view');
Route::resource('/media','Admin\MediaController');
Route::resource('/client','Admin\ClientController');
Route::resource('/recent','Admin\RecentController');
Route::resource('/brand','Admin\BrandController');
Route::resource('/location','Admin\LocationController');
Route::resource('/category','Admin\CategoryController');
Route::resource('/product','Admin\ProductController');
Route::resource('/coverage','Admin\CoverageController');
Route::resource('/travel','Admin\TravelController');
Route::resource('/productlocation','Admin\ProductlocationController');
Route::resource('permission','Admin\PermissionController');
Route::resource('roles','Admin\RoleController');
Route::resource('users','Admin\UserController');


Route::get('/profile','Admin\HomeController@show');
Route::post('/profile/update/{user}','Admin\HomeController@updateprofile');

Route::get('/product/view/{product}','Admin\ProductController@view');
Route::get('/recent/view/{recent}','Admin\RecentController@view');
Route::get('/coverage/view/{coverage}','Admin\CoverageController@view');
});
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/detail','DetailController@delt');
