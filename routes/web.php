<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;
use App\Models\Setting;

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
    return view('articles.index');
});


Route::resource('articles', ArticleController::class);

Route::resource('comments', CommentController::class);




Route::get('/articles/delete/{id}', [ ArticleController::class, 'deleteArticle']); //->name('articles.deleteArticle');

Route::get('/comments/delete/{id}', [ CommentController::class, 'deleteComment']);

Route::get('/upload-file', [SettingController::class, 'createForm']);

Route::post('/upload-file', [SettingController::class, 'fileUpload'])->name('fileUpload');

// Route::get('/upload-file', [SettingController::class, 'showSetting'])->name('showSettings');