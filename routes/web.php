<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $html = '<h1>Big Boss </h1>';
    return $html;
});

Route::get('unicode', function () {
    return view('form');
});

Route::post('unicode', function () {
    return 'Phương thức Post';
});


Route::put('unicode', function () {
    return 'Phương thức Put';
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('tin-tuc/{slug?}-{id?}.html', function ($slug = null, $id = null) {
        $content = 'Method Get with parameter: ';
        $content .= 'id = ' . $id . '<br/>';
        $content .= 'slug = ' . $slug;
        return $content;
    })->where(
        [
            'slug' => '.+',
            'id' => '[0-9]+'
        ]
    )->name('admin.tin-tuc');

    Route::get('show-form', function () {
        return view('form');
    })->name('admin.show-form');

    Route::prefix('products')->middleware('CheckPermission')->group(function () {
        Route::get('/', function () {
            return 'List Product';
        });
        Route::get('add', function () {
            return 'Add Product';
        })->name('admin.products.add');
        Route::get('edit', function () {
            return 'Edit Product';
        });
        Route::get('delete', function () {
            return 'Delete Product';
        });
    });
});
