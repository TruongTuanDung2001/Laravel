<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//home page
//C1
// Route::get('/home', function(){
//     return view('home');
// });
//C2
Route::get('/home', [HomeController::class, 'index']);

//post page
// Route::get('/posts', [PostController::class, 'index']);
// Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
// Route::get('/posts/create', [PostController::class, 'create']);
// Route::post('/posts', [PostController::class, 'store']);
// Route::put('/posts/{id}', [PostController::class, 'update']);
// Route::delete('/posts/{id}', [PostController::class, 'destroy']);

Route::resource('posts', PostController::class);
