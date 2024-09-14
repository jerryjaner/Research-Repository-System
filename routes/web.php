<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CompleteResearchController;
use App\Http\Controllers\Admin\ResearchAbstractController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });

    Route::prefix('research-abstract')->name('research-abstract.')->group(function () {
        Route::get('/', [ResearchAbstractController::class, 'index'])->name('index');
        Route::post('/store', [ResearchAbstractController::class, 'store'])->name('store');
        Route::get('/fetch', [ResearchAbstractController::class, 'AllRecord'])->name('allrecord');
        Route::get('/view', [ResearchAbstractController::class, 'view'])->name('view');
        Route::get('/view-pdf/{id}', [ResearchAbstractController::class, 'view_pdf'])->name('view_pdf');
        Route::get('/edit', [ResearchAbstractController::class, 'edit'])->name('edit');
        Route::post('/update', [ResearchAbstractController::class, 'update'])->name('update');
        Route::delete('/delete', [ResearchAbstractController::class, 'delete'])->name('delete');
    });

    Route::prefix('research')->name('complete-research.')->group(function () {

        Route::get('/', [CompleteResearchController::class, 'index'])->name('index');
        Route::post('/store', [CompleteResearchController::class, 'store'])->name('store');
        Route::get('/fetch', [CompleteResearchController::class, 'AllResearchRecord'])->name('allresearchrecord');
        Route::get('/view', [CompleteResearchController::class, 'view'])->name('view');
        Route::get('/view-pdf/{id}', [CompleteResearchController::class, 'view_pdf'])->name('view_pdf');
        Route::get('/edit', [CompleteResearchController::class, 'edit'])->name('edit');
        Route::post('/update', [CompleteResearchController::class, 'update'])->name('update');
        Route::delete('/delete', [CompleteResearchController::class, 'delete'])->name('delete');
    });

});

require __DIR__.'/auth.php';
