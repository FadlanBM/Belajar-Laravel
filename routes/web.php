<?php
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\HalamanController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('siswa',[SiswaController::class,'index']);
// Route::get('siswa/{id}',[SiswaController::class,'detail'])->where('id','[0-9]+');

Route::get('/',[HalamanController::class,'index']);
Route::get('/tentang',[HalamanController::class,'tentang']);
Route::get('/kontak',[HalamanController::class,'kontak']);