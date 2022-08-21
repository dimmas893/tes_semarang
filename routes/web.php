<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


     Route::prefix('produk')->group(function () {
        Route::get('', [ProdukController::class, 'table'])->name('produk.table');  
        Route::get('create', [ProdukController::class, 'create'])->name('pasien.create');
        Route::post('create', [ProdukController::class, 'store']);
        Route::delete('{pasien:id}/delete', [ProdukController::class, 'destroy'])->name('pasien.delete');

        
        Route::get('/category', [CategoryController::class, 'table'])->name('category.table');  
          });

require __DIR__.'/auth.php';
