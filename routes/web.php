<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\mdware;
use Illuminate\Support\Facades\Route;




Route::get('/', [PostController::class,'posts'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('aboutus');

Route::get('/read-post/{id}',[PostController::class,'each_post'])->name('read-post');

Route::get('/notification',function(){
    return view('notification');
})->name('notification');

Route::get('/member',function(){
    return view('member');
})->name('member');
Route::get('/search',[PostController::class,'search'])->name('search');
Route::get('/filter',[PostController::class,'filter'])->name('filter');
Route::post('/saveMember',[MemberController::class, "saveMember"])->name('savemember');


Route::post('/admin/editor-post',[PostController::class,'post'])->name('post')->middleware(mdware::class);
Route::post('/admin/register',[AuthController::class,'admin'])->name('admin.register');
Route::post('/admin/login',[AuthController::class,'login'])->name('admin.login');

Route::get('/admin/loginView',[AuthController::class,'loginView'])->name('admin.loginView');
Route::get('/admin/registerView',[AuthController::class,'registerView'])->name('register');
Route::get('/admin/panel',[AuthController::class,'panel'])->name('admin.panel')->middleware(mdware::class);
Route::get('/admin/editor',function(){
    return view('admin.editor');
})->middleware(mdware::class);
Route::get('/admin/delete/{id}',[AuthController::class, 'delete'])->name('delete')->middleware(mdware::class);
Route::get('/admin/editPost/{id}',[AuthController::class,'editPost'])->name('edit.post')->middleware(mdware::class);
Route::put('/admin/update/{id}',[AuthController::class,'update'])->name('edit.done')->middleware(mdware::class);