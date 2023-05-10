<?php

use App\Http\Controllers\AllSectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Gallery\DeleteController;
use App\Http\Controllers\Gallery\MultipleUploadsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicDocumentsController;
use App\Http\Controllers\PublicNewsController;
use App\Http\Controllers\PublicNewsSingleController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\WordOfTheDayController;
use Illuminate\Support\Facades\Route;

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



Route::get('/', HomepageController::class)->name('home');

Route::get('/message-from-the-cmd', function () {
    return view('pages.cmd');
})->name('cmdmessage');


Route::post('/fetchSections', [DocumentController::class, 'fetchSection']);

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {

    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/settings', [SettingsController::class, 'store'])->name('settings.store');

    Route::get('/documents/archive', [DocumentController::class, 'archive'])->name('documents.archive');
    Route::get('/documents/trash', [DocumentController::class, 'trash'])->name('documents.trash');

    Route::resource('documents', DocumentController::class);
    Route::resource('news', NewsController::class);
    Route::resource('wordoftheday', WordOfTheDayController::class);

    Route::resource('division', DivisionController::class)->parameters(['division' => 'division:slug']);
    Route::resource('gallery', GalleryController::class);

    Route::resource('section', SectionController::class)->parameters(['section' => 'section:slug']);
    // Route::scopeBindings()->group(function () {

    //     Route::resource('division.section', SectionController::class)->parameters(['division' => 'division:slug', 'section' => 'section:slug']);
    // });
});

// PUBLIC ROUTES

Route::get('/news', PublicNewsController::class)->name('publicnews');
Route::get('/gallery', function(){
    return 'Public Gallery';
})->name('publicgallery');
Route::get('/news/{news:slug}', PublicNewsSingleController::class)->name('singlenews');
Route::get('/documents', PublicDocumentsController::class)->name('publicdocuments');
Route::get('/directory', function(){
    return view('pages.directory');
})->name('directory');

Route::get('/about-us', function(){
    return view ('pages.about');
 })->name('aboutus');

Route::post('galleryImageUpload',  MultipleUploadsController::class)->name('galleryImageUpload');
Route::get('galleryImageDelete', DeleteController::class)->name('galleryImageDelete');
require __DIR__ . '/auth.php';
