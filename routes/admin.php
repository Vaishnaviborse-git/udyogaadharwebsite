<?php

use App\Http\Controllers\AadharRegistrationsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\GEMRegistrationsController;
use App\Http\Controllers\GSTRegistrationsController;
use App\Http\Controllers\PrintCertificatesController;
use App\Http\Controllers\UdyamRegistrationsController;
use App\Http\Controllers\UpdateRegistrationsController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth.admin'], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
  
    Route::group(['prefix' => 'settings','middleware' => 'auth.admin'], function (){

        Route::get('/',[SettingController::class,'index'])->name('settings.index');
        Route::post('/',[SettingController::class,'store'])->name('settings.store');

        
     

    });

    Route::get('aadharRegs',[AadharRegistrationsController::class,'index'])->name('aadharRegs.index');
    Route::get('aadharRegs/{aadharReg}/show',[AadharRegistrationsController::class,'show'])->name('aadharRegs.show');

    Route::get('GSTRegs',[GSTRegistrationsController::class,'index'])->name('GSTRegs.index');
    Route::get('GSTRegs/{gstReg}/show',[GSTRegistrationsController::class,'show'])->name('GSTRegs.show');

    Route::get('updateRegs',[UpdateRegistrationsController::class,'index'])->name('updateRegs.index');
    Route::get('updateRegs/{updateReg}/show',[UpdateRegistrationsController::class,'show'])->name('updateRegs.show');

    Route::get('GEMRegs',[GEMRegistrationsController::class,'index'])->name('GEMRegs.index');
    Route::get('GEMRegs/{GEMReg}/show',[GEMRegistrationsController::class,'show'])->name('GEMRegs.show');

    Route::get('printCerts',[PrintCertificatesController::class,'index'])->name('printCerts.index');
    Route::get('printCerts/{printCert}/show',[PrintCertificatesController::class,'show'])->name('printCerts.show');


});
