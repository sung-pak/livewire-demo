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

Route::view('/', 'welcome')->name('home');

// mount() has view params, similar to app.blade.php but we dont need \@section('body') to inject into layouts.base
Route::get('/register', App\Http\Livewire\Auth\Register::class);
Route::get('/form-elements', App\Http\Livewire\FormElements::class);

// this works as well but extra file 'livewires-demo.blade.php'
//Route::view('/register', 'livewires-demo');
