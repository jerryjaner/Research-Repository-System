<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Admin\ResearchController;
use App\Http\Controllers\Admin\ProfileAccountController;
use App\Http\Controllers\User\ProfileController;


Route::get('/', [HomePageController::class, 'index'])->name('homepage');
Route::get('/search', [HomePageController::class, 'search'])->name('search');

Route::middleware(['auth', 'role:user'])->group(function () {
    
    // Route for downloading the research abstract
    Route::get('/research/download/{id}', [HomePageController::class, 'downloadAbstract'])->name('research.download');

    Route::prefix('user-profile-account')->name('user-profile-account.')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::post('/update', [ProfileController::class, 'update'])->name('update');
    });

});



Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::prefix('profile-account')->name('profile-account.')->group(function () {
        Route::get('/', [ProfileAccountController::class, 'index'])->name('index');
        Route::post('/update', [ProfileAccountController::class, 'update'])->name('update');
    });

    Route::prefix('research-databank')->name('research-databank.')->group(function () {

        Route::get('/', [ResearchController::class, 'index'])->name('index');
        Route::post('/store', [ResearchController::class, 'store'])->name('store');
        Route::get('/fetch', [ResearchController::class, 'record'])->name('record');
        Route::get('/view', [ResearchController::class, 'view'])->name('view');
        Route::get('/view-abstract-pdf/{id}', [ResearchController::class, 'view_abstract_pdf'])->name('view_abstract_pdf');
        Route::get('/view-research-pdf/{id}', [ResearchController::class, 'view_research_pdf'])->name('view_research_pdf');
        Route::get('/edit', [ResearchController::class, 'edit'])->name('edit');
        Route::post('/update', [ResearchController::class, 'update'])->name('update');
        Route::delete('/delete', [ResearchController::class, 'delete'])->name('delete');

    });

});

require __DIR__.'/auth.php';
