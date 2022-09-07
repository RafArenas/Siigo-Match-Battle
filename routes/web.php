<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CardController;

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
<<<<<<< HEAD

Route::resource('games', GameController::class);
Route::resource('cards', CardController::class);

=======
Route::get('/battle', function () {
    return view('game');
});
>>>>>>> bfac61fbfbb71e830a35690986aa504b2bc35637
