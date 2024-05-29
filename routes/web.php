<?php

use App\Http\Controllers\PostController;
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
Route::resource('/posts', PostController::class);



// Route::get('/test', function () {
//     return "<h1>Hello World</h1>";
// });

// Route::get('/test', function () {
//     $test="Testv1";
//     return $test;
// });