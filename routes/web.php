<?php

use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('foo/{name?}', function (Request $request, $name = 'ady') {
    $data = [
        $request->all(),
        $name
    ];
    //dd($data);
    return view('foo')->with('data', $data);
});

Route::get('user/{name}', 'UserController@show');
Route::get('list-user', 'UserController@list');
Route::get('article', 'ArticleController@index');

Route::get('buku-kas', 'BukuController@index');
Route::get('input-buku-kas', 'BukuController@input');
Route::get('edit-buku-kas', 'BukuController@edit');
Route::get('beranda-buku-kas', 'BukuController@beranda');