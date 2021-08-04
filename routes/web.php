<?php

use App\Http\Controllers\StudentController;
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

// List siswa
Route::get('/',[StudentController::class, 'index']);
// Form tambah siswa
Route::get('/student/add',[StudentController::class, 'create']);
// Simpan data siswa
Route::post('/student/add',[StudentController::class, 'store']);
// Form edit siswa
Route::get('/student/edit/{student:id}',[StudentController::class, 'edit']);
// Update data siswa
Route::patch('/student/edit/{student:id}',[StudentController::class, 'update']);
// Hapus data siswa
Route::delete('/student/delete/{student:id}',[StudentController::class, 'destroy']);