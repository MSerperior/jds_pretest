<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Http\Middleware\CheckToken;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth:api')->get('/user', [AuthController::class, 'user']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('news', [NewsController::class, 'index'])->middleware( CheckToken::using('news:index'))->name('news.index');
    Route::post('news', [NewsController::class, 'store'])->middleware(CheckToken::using('news:store'))->name('news.store');
    Route::get('news/{news}', [NewsController::class, 'show'])->middleware(CheckToken::using('news:show'))->name('news.show');
    Route::put('news/{news}', [NewsController::class, 'update'])->middleware(CheckToken::using('news:update'))->name('news.update');
    Route::delete('news/{news}', [NewsController::class, 'destroy'])->middleware(CheckToken::using('news:destroy'))->name('news.destroy');

    Route::resource('news.comments', CommentController::class)->shallow();
});
