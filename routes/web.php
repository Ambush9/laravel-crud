<?php

use App\Http\Controllers\UsersController;
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

// т.о. когда всегда когда юзер заходит на главную, его редиректит на юзерс
Route::redirect('/', 'users');

// в предыдущих версиях было бы так:
//Route::resource('users', 'UsersController');


// так задается роут в ларавел 8
Route::resource('users', UsersController::class);
