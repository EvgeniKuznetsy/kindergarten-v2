<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Admin\Educators\Educator_groupController;
use App\Http\Controllers\Admin\Educators\EducatorController;
use App\Http\Controllers\Admin\Photo_gallery\GalleryController;
use App\Http\Controllers\Admin\Photo_gallery\Photo_galleryController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\Parents\ParentsController;
use App\Http\Controllers\Admin\Post\NewsController;


use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/auth', "HomeController@index")->name('home');
Route::get('/', "PageController@main");


Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->middleware('auth')->name('logout');


    Route::middleware('access:admin')->group(function () {
        Route::prefix('admin')->group(function () {
            Route::get('/', [IndexController::class, 'index'])->name('admin');

            Route::prefix('news')->group(function () {
                Route::get('/', [IndexController::class, 'news'])->name('admin.news.index');

                Route::get('/create', [IndexController::class, 'newsCreate'])->name('admin.news.createPage');
                Route::post('/create', [NewsController::class, 'create'])->name('admin.post.news.create');

                Route::get('/edit/{news}', [IndexController::class, 'newsUpdate'])->name('admin.news.updatePage');
                Route::post('/edit/{news}', [NewsController::class, 'edit'])->name('admin.news.edit');

                Route::get('/delete/{news}', [NewsController::class, 'delete'])->name('admin.news.delete');
            });
            Route::prefix('parents')->group(function () {
                Route::get('/', [IndexController::class, 'parents'])->name('admin.parents.index');

                Route::get('/create', [IndexController::class, 'parentsCreate'])->name('admin.parents.createPage');
                Route::post('/create', [ParentsController::class, 'create'])->name('admin.post.parents.create');

                Route::get('/edit/{parents}', [IndexController::class, 'parentsUpdate'])->name('admin.parents.updatePage');
                Route::post('/edit/{parents}', [ParentsController::class, 'edit'])->name('admin.parents.edit');

                Route::get('/delete/{parents}', [ParentsController::class, 'delete'])->name('admin.parents.delete');
            });

            Route::prefix('educators_groups')->group(function () {
                Route::get('/', [IndexController::class, 'educators_groups'])->name('admin.educators_groups.index');

                Route::get('/groups', [IndexController::class, 'educators_groupsCreate'])->name('admin.educators_groups.createPage');
                Route::post('/groups', [Educator_groupController::class, 'create'])->name('admin.post.educators_groups.create');

                Route::get('/edit/{groups}', [IndexController::class, 'educators_groupsUpdate'])->name('admin.educators_groups.updatePage');
                Route::post('/edit/{groups}', [Educator_groupController::class, 'edit'])->name('admin.educators_groups.edit');

                Route::get('/delete/{groups}', [Educator_groupController::class, 'delete'])->name('admin.educators_groups.delete');
            });
            Route::prefix('educators')->group(function () {
                Route::get('/{id}', [IndexController::class, 'educators'])->name('admin.educators.index');

                Route::get('/educator/{id}', [IndexController::class, 'educatorsCreate'])->name('admin.educators.createPage');
                Route::post('/educator', [EducatorController::class, 'create'])->name('admin.post.educators.create');

                Route::get('/edit/{post}', [IndexController::class, 'educatorsUpdate'])->name('admin.educators.updatePage');
                Route::post('/edit/{post}', [EducatorController::class, 'edit'])->name('admin.educators.edit');

                Route::get('/delete/{educator}', [EducatorController::class, 'delete'])->name('admin.educators.delete');
            });



            Route::prefix('title_photo_gallery')->group(function () {
                Route::get('/', [IndexController::class, 'title_photo_gallery'])->name('admin.title_photo_gallery.index');

                Route::get('/gallery', [IndexController::class, 'title_photo_galleryCreate'])->name('admin.title_photo_gallery.createPage');
                Route::post('/gallery', [Photo_galleryController::class, 'create'])->name('admin.post.title_photo_gallery.create');

                Route::get('/edit/{gallery}', [IndexController::class, 'title_photo_galleryUpdate'])->name('admin.title_photo_gallery.updatePage');
                Route::post('/edit/{gallery}', [Photo_galleryController::class, 'edit'])->name('admin.title_photo_gallery.edit');

                Route::get('/delete/{title_photo_galleries}', [Photo_galleryController::class, 'delete'])->name('admin.title_photo_gallery.delete');
            });
            Route::prefix('photo_gallery')->group(function () {
                Route::get('/{id}', [IndexController::class, 'photo_gallery'])->name('admin.photo_gallery.index');

                Route::get('/photo/{id}', [IndexController::class, 'photo_galleryCreate'])->name('admin.photo_gallery.createPage');
                Route::post('/photo', [GalleryController::class, 'create'])->name('admin.post.photo_gallery.create');
                Route::get('/edit/{photo}', [IndexController::class, 'photo_galleryUpdate'])->name('admin.photo_gallery.updatePage');
                Route::post('/edit/{photo}', [GalleryController::class, 'edit'])->name('admin.photo_gallery.edit');

                Route::get('/delete/{photo}', [GalleryController::class, 'delete'])->name('admin.photo_gallery.delete');
            });
        });
    });
});

Route::get('/main', [PageController::class,'main'])->name('main.index');
Route::get('/title_group', [PageController::class,'title_group'])->name('title_group.index');
Route::get('/title_group/educator/{id}', [PageController::class, 'educator'])->name('educator');
Route::get('/parents', [PageController::class, 'parents'])->name('parents.index');
Route::get('/photo_gallery', [PageController::class, 'title'])->name('photo_gallery');
Route::get('/photo_gallery/photo/{id}', [PageController::class, 'photo'])->name('photo');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/about', [PageController::class, 'about'])->name('about');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



