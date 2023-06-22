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
/*
Route::get('/', function () {
    return view('top');
}); */
use App\Http\Controllers\NewsController as PublicNewsController;
Route::get('/', [PublicNewsController::class, 'index_lp'])->name('news.index_lp');

use App\Http\Controllers\ArtworkController as PublicArtworkController;
Route::get('/artwork', [PublicArtworkController::class, 'show_gallery'])->name('artwork');

use App\Http\Controllers\ContactController as PublicContactController;
Route::controller(PublicContactController::class)->prefix('contact')->name('contact.')->group(function () {
    Route::get('edit', 'edit')->name('edit');
    Route::post('edit', 'send')->name('send');
    Route::get('complete', 'complete')->name('complete');
});

// Controll Auth routing
Auth::routes([
    'register' => false,  // ユーザー登録用のルート。デフォルトは true
    'reset'    => false,  // パスワードリセット用のルート。デフォルトは true
    'confirm'  => false,  // パスワード確認用のルート。Auth\ConfirmPasswordController が存在すればデフォルトは true
    'verify'   => true,  // メール確認用のルート。デフォルトは false
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('news', 'index')->name('news.index');
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create', 'create')->name('news.create');
    Route::get('news/edit', 'edit')->name('news.edit');
    Route::post('news/edit', 'update')->name('news.update');
    Route::get('news/delete', 'delete')->name('news.delete');
});

use App\Http\Controllers\Admin\WorkController;
Route::controller(WorkController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('work', 'index')->name('work.index');
    Route::get('work/create', 'add')->name('work.add');
    Route::post('work/create', 'create')->name('work.create');
    Route::get('work/edit', 'edit')->name('work.edit');
    Route::post('work/edit', 'update')->name('work.update');
    Route::get('work/delete', 'delete')->name('work.delete');
});