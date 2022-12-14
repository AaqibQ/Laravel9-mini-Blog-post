<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


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
//     return view('welcome');
// });

Route::get('/' , [HomeController::class, 'show_post'])->name('home');

// grouping route path 

Route::middleware(['auth'])->group(function() {

    Route::get('/dashboard' , [DashboardController::class , 'show_post'])->name('dashboard');
    Route::get('/post' , [PostController::class, 'index']) -> name('post_index');
    Route::post('/post' , [PostController::class, 'create']) -> name('post_create');
    Route::get('/post/edit/{id}' , [PostController::class , 'edit'])->name('post_edit');
    Route::put('/post/edit/{id}' , [PostController::class , 'update'])->name('post_update');
    Route::get('/post/delete/{id}' , [PostController::class , 'destroy'])->name('post_destroy');

});

// -----------------same-------------------

// Route::get('/post' , [PostController::class, 'index']) -> name('post_index');
// Route::post('/post' , [PostController::class, 'create']) -> name('post_create');
// Route::get('/dashboard' , [DashboardController::class , 'show_post'])->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';
