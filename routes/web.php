<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    // return view('welcome');
    return 'Bismillah';
});

// Route::get('/register', function () {
//     // return view('welcome');
//     return 'reg';
// });


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);


Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');


// Route::get('/dashboard/posts/create', function () {
//     return view('dashboard/posts/create', [
//         "title" => "Create New Post",
//     ]);
// });

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:id}', [PostController::class, 'show']);