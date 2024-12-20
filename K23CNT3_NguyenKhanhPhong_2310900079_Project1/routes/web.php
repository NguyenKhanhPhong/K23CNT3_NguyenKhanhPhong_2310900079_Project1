<?php

use App\Http\Controllers\NKP_LOAI_SAN_PHAMController;
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

#Admin - row
Route::get('/nkp-admins',function(){
    return view('nkpAdmins.index');
});

Route::get('/nkp-admins/nkp-loai-san-pham',[NKP_LOAI_SAN_PHAMController::class,'nkpList'])->name('nkpadmins.nkploaisanpham');
Route::get('/nkp-admins/nkp-loai-san-pham/nkp-create',[NKP_LOAI_SAN_PHAMController::class,'nkpCreate'])->name('nkpadmins.nkploaisanpham.nkpcreate');
Route::get('/nkp-admins/nkp-loai-san-pham/nkp-create',[NKP_LOAI_SAN_PHAMController::class,'nkpCreateSubmit'])->name('nkpadmins.nkploaisanpham.nkpcreatesubmit');

#edit
Route::get('/nkp-admins/nkp-loai-san-pham/nkp-edit',[NKP_LOAI_SAN_PHAMController::class,'nkpCreate'])->name('nkpadmins.nkploaisanpham.nkpedit');