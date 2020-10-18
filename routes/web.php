<?php

use App\Http\Controllers\AddItem;
use App\Http\Controllers\DeleteItem;
use App\Http\Controllers\IndexItems;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('items', IndexItems::class);
Route::get('new-item', AddItem::class);
Route::get('delete-item/{id}', DeleteItem::class);
