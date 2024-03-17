<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\MemberController;

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

Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/book', [BookController::class, 'home'])->name('book.home');

Route::resource('/member', MemberController::class)->middleware('auth');

Route::get('/member/borrow/list', [BorrowController::class, 'list'])->middleware('member')->name('borrow.list');

Route::middleware('member')->prefix('member')->group(function () {
    Route::resource('/borrow', BorrowController::class);
});

Route::middleware('admin')->prefix('dashboard')->group(function () {
    Route::get('/', fn () => view('admin.index'))->name('dashboard.index');
    Route::resource('/book', BookController::class);
});
