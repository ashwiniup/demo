<?php

use Illuminate\Support\Facades\Route;


/*-------------Admin----------------*/

Route::get('/ts-admin', 'Admin\AuthController@checkLogin')->name('ts-admin');

Route::post('/login', 'Admin\AuthController@postLogin')->name('login'); 

Route::group(['middleware' => ['admin'],'prefix'=>'admin'], function () { 
Route::get('/dashboard', 'Admin\AuthController@index')->name('dashboard');
Route::get('/logout', 'Admin\AuthController@getLogout')->name('logout');

Route::get('/user-profile', function () {
  return view('admin.auth.user-profile');
})->name('profile');

Route::post('/changePassword', 'Admin\AuthController@changePassword')
       ->name('changePassword');

Route::post('/change-profile',[
  'uses' => 'Admin\AuthController@changeProfile',
  'as'    =>'change-profile'
]);

Route::get('/setting', function () {
  return view('admin.setting');
})->name('setting');

Route::post('/setting',[
  'uses' => 'Admin\AppsettingController@Themes',
  'as'    =>'setting'
]);

Route::post('/appsetting',[
  'uses' => 'Admin\AppsettingController@AppSetting',
  'as'    =>'appsetting'
]);    
/*===========Pages=============*/

Route::get('/customers',[
  'uses' => 'Admin\UserController@getAllCustomer',
  'as'    =>'customers'
]);

Route::get('/create-customer', function () {
  return view('admin.pages.add.create-customer');
})->name('create-customer');

Route::post('/create-customer',[
  'uses' => 'Admin\UserController@CreateCustomer',
  'as'    =>'create-customer'
]);


Route::get('edit-customer/{id}', [
  'uses' => 'Admin\UserController@editCustomerView',
  'as' => 'edit-customer/{id}'
 ]);

Route::post('edit-customer', [
  'uses' => 'Admin\UserController@putCustomer',
    'as' => 'edit-customer'
 ]);

Route::get('delete-customer/{id}', [
  'uses' => 'Admin\UserController@deleteCustomer',
  'as' => 'delete-customer/{id}'
 ]);
/*-------Supplier Curd---------*/
Route::get('/suppliers',[
  'uses' => 'Admin\UserController@getAllsuppliers',
  'as'    =>'suppliers'
]);

Route::get('/create-supplier', function () {
  return view('admin.pages.add.create-supplier');
})->name('create-supplier');


Route::post('/create-supplier',[
  'uses' => 'Admin\UserController@CreateSupplier',
  'as'    =>'create-supplier'
]);

Route::get('edit-supplier/{id}', [
  'uses' => 'Admin\UserController@editSupplierView',
  'as' => 'edit-supplier/{id}'
 ]);

Route::post('edit-supplier', [
  'uses' => 'Admin\UserController@putSupplier',
    'as' => 'edit-supplier'
 ]);

Route::get('delete-supplier/{id}', [
  'uses' => 'Admin\UserController@deleteSupplier',
  'as' => 'delete-supplier/{id}'
 ]);

Route::get('changeStatus', 'Admin\UserController@ChangeUserStatus');

/*-------Statics Pages-------*/
Route::get('/static-pages',[
  'uses' => 'Admin\StaticPagesController@getAllPages',
  'as'    =>'static-pages'
]);

Route::get('/create-page', function () {
  return view('admin.pages.static-pages.create-page');
})->name('create-page');


Route::post('/create-page',[
  'uses' => 'Admin\StaticPagesController@CreatePage',
  'as'    =>'create-page'
]);

Route::get('edit-page/{id}', [
  'uses' => 'Admin\StaticPagesController@editPageView',
  'as' => 'edit-page/{id}'
 ]);

Route::post('edit-page', 'Admin\StaticPagesController@putPage')->name('edit-page');
Route::get('delete-page/{id}', 'Admin\StaticPagesController@deletePage')->name('delete-page/{id}');

/*-----Categories Management-------*/
Route::get('/categories', 'Admin\CategoriesController@getAllCategories')->name('categories');

Route::get('/create-category', function () {
  return view('admin.pages.categories.create-category');
})->name('create-category');

Route::post('create-category', 'Admin\CategoriesController@CreateCategory')->name('create-category');

Route::get('edit-category/{id}', 'Admin\CategoriesController@editCategoryView')->name('edit-category/{id}');
Route::post('edit-category', 'Admin\CategoriesController@putCategory')->name('edit-category');
Route::get('delete-category/{id}', 'Admin\CategoriesController@deleteCategory')->name('delete-category/{id}');


/*------------End Page---------*/
});