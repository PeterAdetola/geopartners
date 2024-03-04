<?php

use App\AppHelpers;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HeroController;
use App\Http\Controllers\Home\AboutController;

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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --------------| Hero Routes |----------------------------------------
Route::controller(HeroController::class)->group(function () 
{
    // Route::get('/', 'Intropage')->name('intro');

    // Route::get('/edit/slide/{id}', 'EditSlide')->name('edit.slide');
    Route::get('/delete/slide/{id}', 'DeleteSlide')->name('delete.slide');
    Route::get('/view/slides', 'ViewSlides')->name('view.slides');
    Route::post('/sort/slide', 'SortSlide')->name('sort.slide');
    Route::post('/update/slider', 'UpdateSlide')->name('update.slide');
    Route::post('/store/slide', 'SaveSlide')->name('save.slide');    
});





require __DIR__.'/auth.php';
