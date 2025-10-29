<?php

use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Routes;

Route::get('/', function(){
    return view('admin.dashboard');
})->name('dashboard');

//Gestion de roles
Route::resource('roles', RoleController::class);

?>