<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/cms', [PageController::class, 'index'])->name('pages.index');

    Route::get('/cms/choose-type', [PageController::class, 'chooseType'])->name('pages.chooseType');

    Route::get('/cms/select-template', [PageController::class, 'selectTemplate'])->name('pages.selectTemplate');

    Route::get('/cms/template/{template}', [PageController::class, 'showTemplate'])->name('pages.template');

    Route::get('/cms/create', [PageController::class, 'create'])->name('pages.create');
    Route::post('/cms/store', [PageController::class, 'store'])->name('pages.store');

    Route::get('/cms/edit/{page}', [PageController::class, 'edit'])->name('pages.edit');
    Route::put('/cms/update/{page}', [PageController::class, 'update'])->name('pages.update');
    Route::delete('/cms/delete/{page}', [PageController::class, 'destroy'])->name('pages.destroy');

    Route::get('/pages/preview/{template}', [PageController::class, 'preview'])->name('pages.preview');
});

Route::get('/page/{slug}', [PageController::class, 'show'])->name('pages.show');

// Guide Page
Route::get('/guide', function () {
    return view('guide.howToUse');
})->name('guide.howToUse');
