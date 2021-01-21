<?php

use Illuminate\Support\Facades\Route;


/*-------------Admin----------------*/
Route::get('/ts-admin', function () {
  return view('admin.auth.login');
})->name('ts-admin');

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
Route::post('/customers',[
  'uses' => 'Admin\UserController@CreateCustomer',
  'as'    =>'customers'
]);

Route::get('/suppliers',[
  'uses' => 'Admin\UserController@getAllsuppliers',
  'as'    =>'suppliers'
]);

Route::post('/supplier',[
  'uses' => 'Admin\UserController@CreateSupplier',
  'as'    =>'supplier'
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

/*------------End Page---------*/
});