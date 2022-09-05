<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\Post;
use App\Models\Unit;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Models\Photo;

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
Route::get('/', [PostController::class,'home'])->name('home');
// Route::get('/about',[PostController::class,'about'])->name('about');
// Route::get('/photos',[PhotoController::class,'index'])->name('galeri');
Route::get('/posts', [PostController::class,'index'])->name('berita');
Route::get('/posts/{post:slug}',[PostController::class,'show'])->name('berita-lihat');
Route::get('/units/{unit:slug}',[PostController::class,'unitSekolah'])->name('unit');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/penerimaan', function () {
    return view('pendaftaran');
})->name('ppdb');


// Route::get('/register', function () {
//     return view('register');
// });


Route::prefix('webadmin-ra')->group(function () {       
    Auth::routes();
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/authenticate',[LoginController::class,'authenticate'])->name('authenticate');
    // Route::get('/logout',[LoginController::class,'logout'])->name('logout');    
    Route::group(['middleware'=>['auth','admin']],function(){
        Route::get('home', [HomeController::class,'index'])->name('webadmin.home');
    
        Route::get('/users',[UserController::class,'index'])->name('webadmin.users-list');
        Route::get('/users/createuser',[UserController::class,'create'])->name('webadmin.users-create');
        Route::post('/users',[UserController::class,'store'])->name('webadmin.users-store');
        Route::get('/users/{user:id}',[UserController::class,'edit'])->name('webadmin.users-edit');
        Route::put('/users/{user:id}',[UserController::class,'update'])->name('webadmin.users-update');
        Route::delete('/users/{user:id}',[UserController::class,'destroy'])->name('webadmin.users-delete');
        
        Route::get('/password/{user:id}',[UserController::class,'getPassword'])->name('webadmin.get-password');
        Route::put('/password/{user:id}',[UserController::class,'resetPassword'])->name('webadmin.change-password');
        
        Route::get('/posts',[BeritaController::class,'index'])->name('webadmin.posts');
        Route::get('/posts/createpost',[BeritaController::class,'create'])->name('webadmin.create');
        Route::post('/posts',[BeritaController::class,'store'])->name('webadmin.store');
        Route::get('/posts/{post:id}',[BeritaController::class,'edit'])->name('webadmin.edit');
        Route::put('/posts/{post:id}',[BeritaController::class,'update'])->name('webadmin.update');
        Route::delete('/posts/{post:id}',[BeritaController::class,'destroy'])->name('webadmin.delete');
        
        Route::get('/tag-category',[CategoryController::class,'index'])->name('webadmin.tag-category');
        Route::get('/tag-category/createtag',[CategoryController::class,'create'])->name('webadmin.tag-category-create');
        Route::post('/tag-category',[CategoryController::class,'store'])->name('webadmin.tag-category-store');
        Route::get('/tag-category/{category:id}',[CategoryController::class,'edit'])->name('webadmin.tag-category-edit');
        Route::put('/tag-category/{category:id}',[CategoryController::class,'update'])->name('webadmin.tag-category-update');
        Route::delete('/tag-category/{category:id}',[CategoryController::class,'destroy'])->name('webadmin.tag-category-delete');
        
        Route::get('/galeri',[GaleriController::class,'index'])->name('webadmin.galeri-list');
        Route::get('/galeri/create',[GaleriController::class,'create'])->name('webadmin.galeri-create');
        Route::post('/galeri',[GaleriController::class,'store'])->name('webadmin.galeri-store');
        Route::get('/galeri/{photo:id}',[GaleriController::class,'edit'])->name('webadmin.galeri-edit');
        Route::put('/galeri/{photo:id}',[GaleriController::class,'update'])->name('webadmin.galeri-update');
        Route::delete('/galeri/{photo:id}',[GaleriController::class,'destroy'])->name('webadmin.galeri-delete');
        
        Route::get('/unit-sekolah',[UnitController::class,'index'])->name('webadmin.unit-sekolah');
        Route::get('/unit-sekolah/{unit:slug}',[UnitController::class,'edit'])->name('webadmin.unit-sekolah-edit');
        Route::put('/unit-sekolah/{unit:slug}',[UnitController::class,'update'])->name('webadmin.unit-sekolah-update');
        
    });       
});


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
