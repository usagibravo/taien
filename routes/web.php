<?php

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
    return view('welcome');
});

// Controll Auth routing
Auth::routes([
    'register' => false,  // ユーザー登録用のルート。デフォルトは true
    'reset'    => false,  // パスワードリセット用のルート。デフォルトは true
    'confirm'  => false,  // パスワード確認用のルート。Auth\ConfirmPasswordController が存在すればデフォルトは true
    'verify'   => true,  // メール確認用のルート。デフォルトは false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('news', 'index')->name('news.index');
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create', 'create')->name('news.create');
    Route::get('news/edit', 'edit')->name('news.edit');
    Route::post('news/edit', 'update')->name('news.update');
    Route::get('news/delete', 'delete')->name('news.delete');
});
