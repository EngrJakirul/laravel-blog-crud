<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


Route::get('/', [BlogController::class, 'index'])->name('home');
Route::get('/add-blog', [BlogController::class, 'add'])->name('blog.add');
Route::post('/new-blog', [BlogController::class, 'create'])->name('blog.new');
Route::get('/manage-blog', [BlogController::class, 'manage'])->name('blog.manage');
Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('/update-blog/{id}', [BlogController::class,'update'])->name('blog.update');
Route::get('/delete-blog/{id}', [BlogController::class, 'delete'])->name('blog.delete');
