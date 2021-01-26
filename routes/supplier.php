<?php

use Illuminate\Support\Facades\Route;
/*----------Supplier----------------*/
Route::get('/supplier-signup', function () {
    return view('supplier.auth.signup');
})->name('supplier-signup');

Route::post('signup',[
  'uses' => 'Supplier\SupplierController@Singnup',
  'as'    =>'signup'
]);

Route::get('/supplier-login', 'Supplier\SupplierController@checkLogin')->name('supplier-login');

Route::post('/supplier-login',[
  'uses' => 'Supplier\SupplierController@postLogin',
  'as'    =>'supplier-login'
]);     

Route::get('/supplier-profile', function () {
  return view('supplier.auth.user-profile');
})->name('supplier-profile');

Route::post('/supplier-change-profile',[
  'uses' => 'Supplier\SupplierController@changeProfile',
  'as'    =>'supplier-change-profile'
]);  

Route::post('/supplier-changePassword',[
  'uses' => 'Supplier\SupplierController@changePassword',
  'as'    =>'supplier-changePassword'
]); 

// Password reset routes...
Route::get('/supplier-forget-password', function () {
  return view('supplier.auth.forget-password');
})->name('supplier-forget-password');

Route::post('supplier-forget-password',[
  'uses' => 'supplier\SupplierController@forget',
  'as'    =>'supplier-forget-password'
]);
Route::get('/reset/{token}', 'supplier\SupplierController@reset')->name('password.reset');
Route::post('/reset/{token}', 'supplier\SupplierController@reset')->name('reset');

Route::group(['middleware' => ['supplier'],'prefix'=>'supplier'], function () { 
Route::get('/supplier-dashboard', 'Supplier\SupplierController@Index')
       ->name('supplier-dashboard');
Route::get('/supplier-logout', 'Supplier\SupplierController@getLogout')
       ->name('supplier-logout');
/*===========Supplier Pages=================*/

/*-------------End Supplier Pages---------------*/
 });


