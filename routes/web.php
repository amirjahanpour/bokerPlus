<?php

use App\Http\Controllers\ContactDetailController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('page-maintenance');
});
Route::get('/index', [Controller::class,'index'])->name('index');

Route::get('/post/{tagID?}', [PostController::class,'index'])->name('post.index');
Route::get('/post/get/{title}', [PostController::class,'show'])->name('post.show');
Route::get('/contactUs', [ContactDetailController::class,'index'])->name('contactDetail.index');

Route::middleware('throttle:30,4')->prefix('contactUs')->group(function () {
    Route::post('/create', [ContactDetailController::class,'create'])->name('contactDetail.create');
    Route::post('/saveInfo', [ContactDetailController::class,'saveInfo'])->name('contactDetail.saveInfo');
});

Route::get('/cache', function() {
    Artisan::call('cache:clear');
    echo 'ok';
});
Route::get('/storage', function() {
    Artisan::call('storage:link');
    echo 'ok';
});
Route::get('/fresh', function() {
    Artisan::call('migrate:fresh --seed');
    echo 'ok';
});
