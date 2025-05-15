<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubcribeController;
use App\Http\Controllers\ThemeController;
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

// Theme Routes
Route::controller(ThemeController::class)->name('theme.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/category/{id}','category')->name('category');
    Route::get('/contact','contact')->name('contact');
});


// subcribe Routes
Route::post('subcribe/stroe',[SubcribeController::class,'store'])->name('subcribe.store');

// contact Routes
Route::post('contact/store',[ContactController::class,'store'])->name('contact.store');


// blogs Routes
route::get('blogs/myBlogs',[BlogController::class ,'myBlogs'])->name('blogs.myBlogs');
route::resource('blogs',BlogController::class)->except('index');


// comment Routes
Route::post('/comment/store', [CommentController::class,'store'])->name('comment.store');



require __DIR__.'/auth.php';