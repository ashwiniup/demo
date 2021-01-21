<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

/*----------Supplier----------------*/
Route::get('/supplier-signup', function () {
    return view('supplier.auth.signup');
})->name('supplier-signup');

Route::post('signup',[
  'uses' => 'Supplier\SupplierController@Singnup',
  'as'    =>'signup'
]);

Route::get('/supplier-login', function () {
   return view('supplier.auth.login');
})->name('supplier-login');

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


/*----------End Supplier----------------*/
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
/*------------End Page---------*/
});
/*============End Admin Section================*/


