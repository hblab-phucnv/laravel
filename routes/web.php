<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\MainController;

// Route::get('/', function () {
//     $html = '<h1>Big Boss </h1>';
//     return $html;
// });

// Route::get('unicode', function () {
//     return view('form');
// });

// Route::post('unicode', function () {
//     return 'Phương thức Post';
// });

// Route::put('unicode', function () {
//     return 'Phương thức Put';
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/', function () {
//         return view('home');
//     });

//     Route::get('tin-tuc/{slug?}-{id?}.html', function ($slug = null, $id = null) {
//         $content = 'Method Get with parameter: ';
//         $content .= 'id = ' . $id . '<br/>';
//         $content .= 'slug = ' . $slug;
//         return $content;
//     })->where(
//         [
//             'slug' => '.+',
//             'id' => '[0-9]+'
//         ]
//     )->name('admin.tin-tuc');

//     Route::get('show-form', function () {
//         return view('form');
//     })->name('admin.show-form');

//     Route::prefix('products')->middleware('CheckPermission')->group(function () {
//         Route::get('/', function () {
//             return 'List Product';
//         });
//         Route::get('add', function () {
//             return 'Add Product';
//         })->name('admin.products.add');
//         Route::get('edit', function () {
//             return 'Edit Product';
//         });
//         Route::get('delete', function () {
//             return 'Delete Product';
//         });
//     });
// });
//Client Route
Route::get('/', function () {
    return view('home');
});


Route::prefix('categories')->group(function () {

    // get list categori
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');

    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory']);

    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');

    Route::post('/add', [CategoriesController::class, 'handleAddCategory']);
});


// Route::prefix('admin')->group(function () {
//     Route::get('/', [DashboardController::class, 'index']);
//     Route::middleware('auth.admin.product')->resource('products', ProductsController::class);
// });

//---------------------------------------------------------
Route::prefix('auth')->group(function () {
    Route::get('login', [MainController::class, 'login'])->name('login');
    Route::get('register', [MainController::class, 'register'])->name('register');
    Route::post('save', [MainController::class, 'storeReg'])->name('registerStore');
});

Route::post('/', [MainController::class, 'loginCheck'])->name('app.dashboard');
