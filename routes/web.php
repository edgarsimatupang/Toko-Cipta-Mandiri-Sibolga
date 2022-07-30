<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexcon;
use App\Http\Controllers\eventcon;
use App\Http\Controllers\kepengurusancon;

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



Route::get('store', function () {
    return view('store');
});

Route::get('admin.indexadmin', [indexcon::class, 'indexadmin']);
Route::get('/tambahindex', [indexcon::class, 'tambahindex']);
Route::post('tambahindex/store', [indexcon::class, 'store'])->name('tambah.store');
Route::get('indexadmin/delete/{id}', [indexcon::class, 'delete'])->name('tabel.delete');
Route::get('/editindex/edit/{id}', [indexcon::class, 'edit']);
Route::post('indexadmin/update/{id}', [indexcon::class, 'update'])->name('index.update');

Route::get('admin.eventadmin', [eventcon::class, 'eventadmin']);
Route::get('/tambahevent', [eventcon::class, 'tambahevent']);
Route::post('tambahevent/store', [eventcon::class, 'store'])->name('tambahevent.store');
Route::get('eventadmin/delete/{id}', [eventcon::class, 'delete'])->name('tabel.delete');
Route::get('/editevent/edit/{id}', [eventcon::class, 'edit']);
Route::post('eventadmin/update/{id}', [eventcon::class, 'update'])->name('event.update');

Route::get('admin.bagianadmin', [kepengurusancon::class, 'bagianadmin']);
Route::get('/tambahbagian', [kepengurusancon::class, 'tambahbagian']);
Route::post('tambahbagian/store', [kepengurusancon::class, 'store'])->name('tambahbagian.store');
Route::get('bagianadmin/delete/{id}', [kepengurusancon::class, 'delete'])->name('tabel.delete');
Route::get('/editbagian/edit/{id}', [kepengurusancon::class, 'edit']);
Route::post('bagianadmin/update/{id}', [kepengurusancon::class, 'update'])->name('bagian.update');

Route::get('/', [indexcon::class, 'indexxx']);
Route::get('/products', [eventcon::class, 'eventi']);
Route::get('/store', [kepengurusancon::class, 'bagiann']);