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
//主页视图路由
Route::get('/','\App\Http\Controllers\IndexController@index');
//图表视图路由
Route::get('charts.php','\App\Http\Controllers\IndexController@charts');
//表格视图路由
Route::get('tables.php','\App\Http\Controllers\IndexController@tables');
//按钮视图路由
Route::get('buttons.php','\App\Http\Controllers\IndexController@buttons');