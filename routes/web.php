<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Frontend\BoldWareController;
use app\Http\Controllers\Frontend\MenController;
use app\Http\Controllers\Frontend\WomenController;
use app\Http\Controllers\Frontend\ShirtsController;
use app\Http\Controllers\Frontend\AboutController;
use app\Http\Controllers\Frontend\ContactController;



// Route::get('/', [BoldWareController::class, 'index'])->name('frontend.BoldWare');
// Route::get('/Shirts', [ShirtsController::class, 'index'])->name('frontend.Shirts');
// Route::get('/Women', [WomenController::class, 'index'])->name('frontend.Women');
// Route::get('/Men', [MenController::class, 'index'])->name('frontend.Men');
// Route::get('/Contact', [ContactController::class, 'index'])->name('frontend.Contact');
// Route::get('/About', [AboutController::class, 'index'])->name('frontend.About');




 //Route::get(uri: "/", [BoldWareController::class,"index"]);

Route::get('/', function(){
return view('frontend.BoldWare');
});

Route::get('/Men', function(){
    return view('frontend.Men');
    });

    Route::get('/Women', function(){
        return view('frontend.Women');
        });

        Route::get('/About', function(){
            return view('frontend.About');
            });

            Route::get('/Contact', function(){
                return view('frontend.Contact');
                });

                Route::get('/Shirts', function(){
                    return view('frontend.Shirts');
                    });

                    Route::get('/Login', function(){
                        return view('frontend.Login');
                        });
    
// Route::get('/', function () {



// Route::get('/', function () {
//     return view('layouts.web');
// });


// Route::get('/post', function () {
//     return view('post');
// });

// Route::middleware('auth')->name('student.')->prefix('student')->group(function() {
//     Route::get('/', [StudentController::class, 'index'])->name('index');
//     Route::get('create', [StudentController::class, 'create'])->name('create');
//     Route::post('store', [StudentController::class, 'store'])->name('store');
//     Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
//     Route::post('update', [StudentController::class, 'update'])->name('update');
//     Route::get('destroy/{id}', [StudentController::class, 'destroy'])->name('destroy');
// });

// Route::middleware('auth')->name('course.')->prefix('course')->group(function() {
//     Route::get('/', [CourseController::class, 'index'])->name('index');
//     Route::get('create', [CourseController::class, 'create'])->name('create');
//     Route::post('store', [CourseController::class, 'store'])->name('store');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';