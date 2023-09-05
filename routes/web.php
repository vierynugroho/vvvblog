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

// Route::get('/', function () {
//     return ['Laravel' => app()->version()];
// });

// require __DIR__ . '/auth.php';

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAllBlogsController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardBlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;

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


// Dashboard
Route::get('/', [GuestController::class, 'index']);

// Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

// register form
Route::post('/register', [RegisterController::class, 'store']);

// login form
Route::post('/login', [LoginController::class, 'authenticate']);

// Logout
Route::post('/logout', [LoginController::class, 'logout']);

// About
Route::get('/about', [AboutController::class, 'index']);

// Blog
Route::get('/blog', [BlogController::class, 'index']);

// Single Post
Route::get('blog/{blog:slug}', [BlogController::class, 'singlePost']);

// Categories
Route::get('/categories', [CategoryController::class, 'index']);

// Data
Route::get('/data/data-mahasiswa', [DataController::class, 'dataMahasiswa']);

// Dashbaord
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('/dashboard/about', [DashboardController::class, 'about'])->middleware('auth');

Route::resource('/dashboard/blog', DashboardBlogController::class)->middleware('auth');

Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');



Route::middleware(['admin', 'auth'])->group(function () {
    Route::resource('/dashboard/blogs', AdminAllBlogsController::class);

    Route::resource('/dashboard/categories', AdminCategoryController::class);

    Route::resource('/dashboard/users', AdminUsersController::class);
});

/**
 * socialite auth
 */
Route::get('/auth/{provider}', [SocialiteController::class, 'redirectToProvider']);
Route::get('/auth/{provider}/callback', [SocialiteController::class, 'handleProvideCallback']);