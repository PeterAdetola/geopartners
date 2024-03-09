<?php

use App\AppHelpers;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HeroController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Service\ServicesController;

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
    Route::post('/delete/slide/{id}', 'DeleteSlide')->name('delete.slide');
    Route::get('/view/slides', 'ViewSlides')->name('view.slides');
    Route::post('/sort/slide', 'SortSlide')->name('sort.slide');
    Route::post('/update/slider', 'UpdateSlide')->name('update.slide');
    Route::post('/store/slide', 'SaveSlide')->name('save.slide');    
});

// --------------| About Routes |----------------------------------------
Route::controller(AboutController::class)->group(function () 
{
    Route::post('/update/about_summary', 'UpdateAboutSummary')->name('update.about_summary');
});

// --------------| Services Routes |----------------------------------------
Route::controller(ServicesController::class)->group(function () 
{
    Route::get('/view/services', 'ViewServices')->name('view.services');
    Route::post('/store/service', 'SaveService')->name('save.service');
    Route::post('/sort/service', 'SortService')->name('sort.service');
    Route::post('/update/service', 'UpdateService')->name('update.service');
    Route::get('/edit/service/{id}', 'EditService')->name('edit.service');
    Route::post('/delete/service/{id}', 'DeleteService')->name('delete.service');
});

// --------------| Team Routes |----------------------------------------
Route::controller(TeamController::class)->group(function () 
{
    Route::get('/view/members', 'ViewMembers')->name('view.members');
    Route::post('/store/member', 'SaveMember')->name('save.member');
    Route::post('/sort/member', 'SortMember')->name('sort.member');
    Route::post('/update/member', 'UpdateMember')->name('update.member');
    Route::get('/edit/member/{id}', 'EditMember')->name('edit.member');
    Route::post('/delete/member/{id}', 'DeleteMember')->name('delete.member');
});





require __DIR__.'/auth.php';
