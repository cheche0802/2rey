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

Route::redirect('/', 'rey');

Auth::routes();

Route::get('rey', 'Web\PageController@rey')->name('rey');

Route::middleware(['auth'])->group(function () {
//admin
Route::resource('users', 'Admin\UserController');
Route::resource('histories', 'Admin\HistoryController');
Route::resource('roles', 'Admin\RoleController');
//reportes
Route::get('Productos', 'Admin\ReportController@pdfp')->name('products.pdf');
Route::get('products/{product}/print', 'Admin\ReportController@productPrint');
Route::get('Categorias', 'Admin\ReportController@pdfc')->name('categories.pdf');
Route::get('Detalles', 'Admin\ReportController@pdfd')->name('details.pdf');
Route::get('Almacenes', 'Admin\ReportController@pdfs')->name('stores.pdf');
Route::get('Usuarios', 'Admin\ReportController@pdfu')->name('users.pdf');
/*
Route::get('descargar', 'Admin\ReportController@pdfm')->name('moviments.pdf');
Route::get('moviments/{moviments}/print', 'Admin\ReportController@movimentPrint');

*/
//Usuarios
Route::resource('categories', 'User\CategoryController');
Route::resource('details',    'User\DetailController');
Route::resource('stores',     'User\StoreController');
Route::resource('products',   'User\ProductController');
Route::resource('moviments',  'User\MovimentController');
});
