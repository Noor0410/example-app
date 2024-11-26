<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use app\Http\Controllers\Frontend\BoldWareController;
use app\Http\Controllers\Frontend\MenController;
use app\Http\Controllers\Frontend\WomenController;
use app\Http\Controllers\Frontend\ShirtsController;
use app\Http\Controllers\Frontend\AboutController;
use app\Http\Controllers\Frontend\ContactController;
use app\Http\Controllers\Frontend\Product_detailController;


// Route::get('/', [BoldWareController::class, 'index'])->name('frontend.BoldWare');

// Route::middleware(['auth'])->group(function () {
//   //  Route::get('/Men', [MenController::class, 'index'])->name('frontend.Men');
//    Route::get('/Women', [WomenController::class, 'index'])->name('frontend.Women');
//    Route::get('/About', [AboutController::class, 'index'])->name('frontend.About');
//    Route::get('/Contact', [ContactController::class, 'index'])->name('frontend.Contact');
//    Route::get('/Shirts', [ShirtsController::class, 'index'])->name('frontend.Shirts');
// });



Route::get('/', function () {
    return view('frontend.BoldWare');
});

Route::get('/Men', function () {
    return view('frontend.Men');
});

Route::get('/Women', function () {
    return view('frontend.Women');
});

Route::get('/About', function () {
    return view('frontend.About');
});

Route::get('/Contact', function () {
    return view('frontend.Contact');
});

Route::get('/Shirts', function () {
    return view('frontend.Shirts');
});

Route::get('/Product_detail',function(){
    return view('frontend.Product_detail');
});



// assignment 2

Route::resource('products', ProductController::class);


// Frontend route (for customers)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');



// Admin routes (no "admin" folder in views)
Route::middleware(['auth'])->group(function () {
    Route::get('/products', [ProductController::class, 'adminIndex'])->name('admin.products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});

     // before

     Route::get('/create', function () {
        return view('frontend.products.create');
    });
    Route::get('/index', function () {
        return view('frontend.products.index');
    });
    Route::get('/edit', function () {
        return view('frontend.products.edit');
    });




     // Route::get('/post', function () {
//     return view('post');
// });

Route::middleware('auth')->name('student.')->prefix('student')->group(function() {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('create', [StudentController::class, 'create'])->name('create');
    Route::post('store', [StudentController::class, 'store'])->name('store');
    Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::post('update', [StudentController::class, 'update'])->name('update');
    Route::get('destroy/{id}', [StudentController::class, 'destroy'])->name('destroy');
});


Route::middleware('auth')->name('course.')->prefix('course')->group(function() {
    Route::get('/', [CourseController::class, 'index'])->name('index');
    Route::get('create', [CourseController::class, 'create'])->name('create');
    Route::post('store', [CourseController::class, 'store'])->name('store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


   //  Route::get('/login', [PageController::class, 'login'])->name('login');

    //  // Authenticated Routes
     
    //  // Example additional grouped routes for modularity
    //   Route::middleware(['auth', 'verified'])->group(function () {
    //       Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    //   });