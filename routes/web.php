<?php

use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\MainController;
use Illuminate\Http\Response;
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

Route::get('/main', [MainController::class, 'index'])->name('main');

Route::group(['prefix' => 'admin', 'as' => 'admin'], static function () {
    Route::resource('main', AdminMainController::class);
});

Route::get('hello/{name}', static function (string $name): string {
    return "Hello, {$name}";
});
