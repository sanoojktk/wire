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

/*Route::get('/', function () {
    return view('login');
});*/

Route::view('login','livewire.index');

//Route::get('/upload', 'Livewire\RegistrationLogin@upload');



Route::view('logins','livewire.up_fils');

Route::view('lara-livewire-file-upload','livewire.home');

Route::put('add_img', 'uploadConroller@submit')->name('submit');

Route::get('/view_data', 'uploadConroller@pro_show')->name('all.data');; 
Route::view('data_view','livewire.data_view');
    //Route::get('/upload', \App\Http\Livewire\RegistrationLogin::class);
