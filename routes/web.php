<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\HomeControllerSite;
use App\Http\Controllers\Admin\HomeControllerAdmin;



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

Route::get('/', 'Site\HomeControllerSite@index');

Route::prefix('painel')->group(function(){
    Route::get('/','Admin\HomeControllerAdmin@index');
});