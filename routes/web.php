<?php
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UsersController::class, 'index'])->name('users');
route::get('users/create', [UsersController::class, 'create'])->name('users.create');
route::post('/users',[UsersController::class, 'store'])->name('users.store');
route::delete('/users/destroy/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
route::get('/users/{id}/edit', [UsersController::class, 'edit'])->name('users.edit');
Route::put('/users/update{id}', [UsersController::class, 'update'])->name('users.update');