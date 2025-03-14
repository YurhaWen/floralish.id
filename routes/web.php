<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

# Buat /welcome
Route::get('/welcome', function ()
{
    return view('welcome');
});

# Buat /user/(ID)
Route::get('/user/{id}', function($id)
{
    return 'User Dengan ID ' . $id;
});

#Prefix = Group
Route::prefix('admin')->group(function(){
    Route::get('/dashboard', function (){
        return 'Admin Dashboard';
    });

    Route::get ('/users', function (){
        return 'Admin Users';
    });
});
//  Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//  return view('list_barang', compact('id', 'nama'));
//  });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
