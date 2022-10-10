<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\LoginRegister;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Departman;
use App\Http\Livewire\Profile;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;
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
// Route::get("login");

Route::middleware([Authenticate::class])->group(function () {
});
Route::get('/',LoginRegister::class);
Route::middleware(['userconnect'])->group(function () {
Route::get('dashboard', [AuthController::class, 'index']);

Route::prefix('patients')->group(function () {
    Route::get('/', [PatientController::class, 'index'])->name('patient');
    Route::get('/create', [PatientController::class, 'create'])->name('patients_create');
    Route::get('/patient/edit/{patient}', [PatientController::class, 'edit'])->name('patient.edit');
});
});










