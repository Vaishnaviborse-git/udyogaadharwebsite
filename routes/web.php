<?php

use App\Http\Controllers\AadharRegistrationsController;
use App\Http\Controllers\GEMRegistrationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UdyamRegistrationsController;
use App\Http\Controllers\GSTRegistrationsController;
use App\Http\Controllers\PrintCertificatesController;
use App\Http\Controllers\ProprietorshipRegistrationsController;
use App\Http\Controllers\UdyogToUdyamsController;
use App\Http\Controllers\UpdateRegistrationsController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('aadharRegistration', [AadharRegistrationsController::class, 'store'])->name('aadharRegistration.store');
Route::get('udyamReg/create', [UdyamRegistrationsController::class, 'create'])->name('udyamReg.create');
Route::get('udyogToUdyam/create', [UdyogToUdyamsController::class, 'create'])->name('udyogToUdyam.create');
Route::get('proprietorshipReg/create', [ProprietorshipRegistrationsController::class, 'create'])->name('proprietorshipReg.create');


Route::get('GSTReg/create', [GSTRegistrationsController::class, 'create'])->name('GSTReg.create');
Route::post('GSTReg', [GSTRegistrationsController::class, 'store'])->name('GSTReg.store');


Route::get('updateReg/create', [UpdateRegistrationsController::class, 'create'])->name('updateReg.create');
Route::post('updateReg', [UpdateRegistrationsController::class, 'store'])->name('updateReg.store');


Route::get('printCert/create', [PrintCertificatesController::class, 'create'])->name('printCert.create');
Route::post('printCert', [PrintCertificatesController::class, 'store'])->name('printCert.store');


Route::get('GEMReg/create', [GEMRegistrationsController::class, 'create'])->name('GEMReg.create');
Route::post('GEMReg', [GEMRegistrationsController::class, 'store'])->name('GEMReg.store');








Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
