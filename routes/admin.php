<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
//use App\Http\Controllers\Admin\AboutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('admin.dashboard');
})->name('dashboard');

//Gestion de roles
Route::resource('roles', RoleController::class);

//Gestion de usuarios
Route::resource('users', UserController::class);

//About us (Corregido)
// Esta ruta es simple, solo necesita mostrar una vista.
Route::get('about', function() {
    return view('admin.about.index');
})->name('about.index'); // Asignamos el nombre para el sidebar

?>