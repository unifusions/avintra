<?php

use App\Http\Controllers\AllSectionController;
use App\Http\Controllers\CmdMessageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DocumentCategoryController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Gallery\DeleteController;
use App\Http\Controllers\Gallery\GalleryImageDeleteController;
use App\Http\Controllers\Gallery\MultipleUploadsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Pages\LeadershipController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicDirectoryController;
use App\Http\Controllers\PublicDivisionController;
use App\Http\Controllers\PublicDocumentDivisionController;
use App\Http\Controllers\PublicDocumentsController;
use App\Http\Controllers\PublicDocumentSingleController;
use App\Http\Controllers\PublicGalleryController;
use App\Http\Controllers\PublicGallerySingleController;
use App\Http\Controllers\PublicNewsController;
use App\Http\Controllers\PublicNewsSingleController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\Settings\HomePageSettingsController;
use App\Http\Controllers\Settings\LeadershipPageSettingsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WordOfTheDayController;
use App\Http\Middleware\Localization;
use App\Models\DocumentCategory;
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
    Route::get('documents/{document}/restore/', [DocumentController::class, 'restore'])->name('documents.restore');
    Route::resource('documentsCategories', DocumentCategoryController::class);
    Route::resource('documents', DocumentController::class);
    

    

    Route::resource('news', NewsController::class);
    Route::get('news-category', NewsCategoryController::class);
    Route::resource('wordoftheday', WordOfTheDayController::class);

    Route::resource('division', DivisionController::class);
    Route::resource('gallery', GalleryController::class);

    Route::resource('section', SectionController::class)->parameters(['section' => 'section:slug']);
    Route::resource('user', UserController::class);
    
    Route::get('/settings/home-page/', [HomePageSettingsController::class, 'edit'])->name('homepagesettings.edit');

    Route::group(['prefix' => 'settings',  'middleware' => 'auth'],function(){
        Route::resource('leadership',LeadershipPageSettingsController::class);
    });

   

});

// PUBLIC ROUTES

Route::get('/news', PublicNewsController::class)->name('publicnews');
Route::get('/gallery', PublicGalleryController::class)->name('publicgallery');

Route::get('/news/{news:slug}', PublicNewsSingleController::class)->name('singlenews');
Route::get('/documents', PublicDocumentsController::class)->name('publicdocuments');
Route::get('/documents/{document:slug}', PublicDocumentSingleController::class)->name('documents.single');

Route::get('/gallery', PublicGalleryController::class)->name('publicgallery');
Route::get('/gallery/{gallery:slug}', PublicGallerySingleController::class)->name('gallery.single');
Route::get('documents/{document}/download', [DocumentController::class, 'download'])->name('documents.download');

Route::get('/division/{division:slug}', PublicDivisionController::class)->name('publicdivision');
Route::get('/directory', PublicDirectoryController::class)->name('directory');

Route::get('/about-us', function () {
    return view('pages.about');
})->name('aboutus');


Route::get('/leadership', LeadershipController::class)->name('leadership');

Route::get('/cmd-message',CmdMessageController::class)->name('cmdmessage');

Route::post('galleryImageUpload',  MultipleUploadsController::class)->name('galleryImageUpload');
Route::delete('galleryImageDelete', DeleteController::class)->name('galleryImageDelete');
Route::delete('/galleryImageDelete/{galleryImage}', GalleryImageDeleteController::class)->name('galleryImageDeletewithID');


Route::get('lang/{lang}', LocaleController::class);
require __DIR__ . '/auth.php';
