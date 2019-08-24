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

Route::group([
        'prefix' => config('docsify.route'),
        'namespace' => '\\Mdebuf\\Docsify\\Http\Controllers',
    ], function () {

	Route::get('/', 'DocsifyController@index')->name('docs.index');
	Route::get('/{path}', 'DocsifyController@get')->name('docs.get')->where('path', '.*');

});