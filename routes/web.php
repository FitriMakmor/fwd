<?php

use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard', ['user' => auth()->user()]);
})->middleware(['auth'])->name('dashboard');

Route::get('/section1', function () {
    return view('section1', ['user' => auth()->user()]);
})->middleware(['auth'])->name('section1');

Route::get('/section2', function () {
    return view('section2', ['user' => auth()->user()]);
})->middleware(['auth'])->name('section2');

Route::get('/section3', function () {
    return view('section3', ['user' => auth()->user()]);
})->middleware(['auth'])->name('section3');

Route::get('/section4', function () {
    return view('section4', ['user' => auth()->user()]);
})->middleware(['auth'])->name('section4');

Route::get('/results', function () {
    return view('results', ['user' => auth()->user()]);
})->middleware(['auth'])->name('results');

Route::put("/section1-update/{user}", [UserController::class, 'updateS1'])->name('update-s1')->middleware(['auth']);
Route::put("/section2-update/{user}", [UserController::class, 'updateS2'])->name('update-s2')->middleware(['auth']);
Route::put("/section3-update/{user}", [UserController::class, 'updateS3'])->name('update-s3')->middleware(['auth']);
Route::put("/section4-update/{user}", [UserController::class, 'updateS4'])->name('update-s4')->middleware(['auth']);

require __DIR__.'/auth.php';
