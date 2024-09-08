<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinhVienController;
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
Route::get('/danh-sach-sv', [SinhVienController::class,'danh_sach']);

Route::get('/danh-sach-sv/dangky',[SinhVienController::class,'dang_ky_hoc']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gioi-thieu',function(){
    return (' <h2>route laravel at trang gioi thieu</h2>');
});
Route::get('/lien-he',function(){
    return ('yeu cau tu trang lien he');
});

