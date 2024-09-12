<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

Route::get('/users/files/create', [UserController::class, 'fileCreate'])->name('users.files.create');
Route::post('/users/post/files/store', [UserController::class, 'fileStore'])->name('users.files.store');

Route::get('/users/products/create', [UserController::class, 'productCreate'])->name('users.products.create');
Route::post('/users/products/store', [UserController::class, 'productStore'])->name('users.products.store');

Route::get('/users/dates/create', [UserController::class, 'dateCreate'])->name('users.dates.create');
Route::post('/users/dates/store', [UserController::class, 'dateStore'])->name('users.dates.store');

Route::get('/users/passwords/create', [UserController::class, 'passwordCreate'])->name('users.passwords.create');
Route::post('/users/passwords/store', [UserController::class, 'passwordStore'])->name('users.passwords.store');

Route::get('/users/urls/create', [UserController::class, 'urlCreate'])->name('users.urls.create');
Route::post('/users/urls/store', [UserController::class, 'urlStore'])->name('users.urls.store');

Route::get('/users/numbers/create', [UserController::class, 'numberCreate'])->name('users.numbers.create');
Route::post('/users/numbers/store', [UserController::class, 'numberStore'])->name('users.numbers.store');








// Route::get('/about/tasks', function () {
//     return view('tasks');
// })->name('about.tasks');
