<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\ModulController;
use App\Http\Controllers\Admin\StepController;
use App\Http\Controllers\Admin\ContactController;



Route::get('/',[MainController:: class, 'index'])->name('index');
Route::get('/course/detail/{slug}',[MainController:: class, 'categoryPosts'])->name('categoryPosts');


Route::get('/login/page', [UserController:: class, 'loginPage'])->name('login.page');
Route::post('/login/check', [UserController:: class, 'loginCheck'])->name('login.check');

//Route::get('/admin/dashboard',[MainController::class,'dashboard'])->name('dashboard');

Route::get('/logout',function(){
    Auth::logout();

    return redirect('/login/page');

 })->name('logout');

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function(){

    Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboard');

    Route::get('category/export/', [CategoryController::class, 'export'])->name('category.export');

    Route::resources([
        'category' => CategoryController::class,
        'question' => QuestionController::class,
        'course' => CourseController::class,
        'modul' => ModulController::class,
        'step' => StepController::class,
        'contact' => ContactController::class,
    ]);

});
