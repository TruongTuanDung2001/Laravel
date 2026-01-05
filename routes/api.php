<?php
use App\Http\Controllers\Api\PostController;
use Illuminate\Support\Facades\Route;

//post page
Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{id}/edit', [PostController::class, 'edit']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::put('/posts/{id}', [PostController::class, 'update']);
Route::delete('/posts/{id}', [PostController::class, 'destroy']);

