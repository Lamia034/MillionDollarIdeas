<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    
    Route::get('/', function () {
        return view('home');
    });


Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');

Route::get('home', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('home', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::get('home', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.comments.index');
Route::get('home', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.comments.show');
Route::get('home', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.likes.index');
Route::get('home', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.likes.show');
Route::post('/posts/{postId}/storeLike', [App\Http\Controllers\PostController::class, 'storeLike'])->name('posts.storeLike');
Route::post('/posts/{postId}/storeComment', [App\Http\Controllers\PostController::class, 'storeComment'])->name('posts.storeComment');
Route::get('search', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::get('/posts/search', [App\Http\Controllers\PostController::class, 'search'])->name('posts.search');
Route::delete('/posts/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('posts.destroy');



Route::get('/', 'App\Http\Controllers\PostController@index')->name('home');

});


// Route::post('/posts', [App\Http\Controllers\PostController::class, 'store'])->name('posts.store');




// Route::get('home', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
// Route::get('home', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
// Route::get('home', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.comments.index');
// Route::get('home', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.comments.show');
// Route::get('home', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.likes.index');
// Route::get('home', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.likes.show');
// Route::post('/posts/{postId}/storeLike', [App\Http\Controllers\PostController::class, 'storeLike'])->name('posts.storeLike');
// Route::post('/posts/{postId}/storeComment', [App\Http\Controllers\PostController::class, 'storeComment'])->name('posts.storeComment');
// Route::get('search', [App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
// Route::get('/posts/search', [App\Http\Controllers\PostController::class, 'search'])->name('posts.search');



// Route::get('/', 'App\Http\Controllers\PostController@index')->name('home');



require __DIR__.'/auth.php';
