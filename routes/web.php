<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\LoginUserController;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::view('/', 'welcome');


// Route::post('/', function (Request $request) {
//     dd($request->all());
// });

// Route::put('/', function (Request $request) {
//     dd($request->all());
// });
// Route::delete('/{id}', function ( $id) {
//     return $id;
// });

// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/posts/create', [PostController::class, 'create']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::get('/posts/{id}', [PostController::class, 'show']);
// Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
// Route::put('/posts/{id}', [PostController::class, 'update']);
// Route::delete('/posts/{id}', [PostController::class, 'destroy']);
Route::middleware('auth')->group(function ( ) {
    Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create');
    Route::post('/posts',[PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{post}/edit',[PostController::class, 'edit'])->can('update','post')->name('posts.edit');   
    Route::put('/posts/{post}',[PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}',[PostController::class, 'destroy'])->name('posts.destroy');
    Route::post('/logout',[LoginUserController::class,'logout'])->name('logout');
    
});
Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}',[PostController::class, 'show'])->middleware('can-view-post')->name('posts.show');

Route::middleware('guest')->group(function ( ) {
    Route::get('/register',[RegisterUserController::class, 'register'])->name('register');
    Route::post('/register',[RegisterUserController::class, 'store'])->name('register.store');
    Route::get('/login',[LoginUserController::class,'login'])->name('login');
    Route::post('/login',[LoginUserController::class,'store'])->name('login.store');
});



// Route::get('/test', function () {
//     return "<h1>Hello World</h1>";
// });

// Route::get('/test', function () {
//     $test="Testv1";
//     return $test;
// });