<?php

use App\Http\Controllers\NKP_QUAN_TRIcontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/admin/nkp-login',[NKP_QUAN_TRIcontroller::class,'nkpLogin'])->name('admins.nkpLogin');
route::get('/admin/nkp-login',[NKP_QUAN_TRIcontroller::class,'nkpLoginSubmit'])->name('admins.nkpLoginSubmit');
