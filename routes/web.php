<?php

use App\Http\Controllers\HrCourierController;
use App\Http\Controllers\HrEmployeeController;
use App\Http\Controllers\MainUserController;
use App\Http\Controllers\MasterModulController;
use App\Http\Controllers\MasterRoleController;
use App\Http\Controllers\MaterPermissionController;
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

Route::get('/', function () {
    return view('homepage');
})->name('homepage');


Route::prefix('emp')->name('emp.')->group(function () {
    Route::prefix('employee')->name('employee.')->group(function () {
        Route::get('/', [HrEmployeeController::class, 'index'])->name('index');
        Route::get('/import-new', [HrEmployeeController::class, 'importNew'])->name('importNew');
        Route::get('/check-update', [HrEmployeeController::class, 'checkUpdate'])->name('checkUpdate');
    });
    Route::prefix('courier')->name('courier.')->group(function () {
        Route::get('/', [HrCourierController::class, 'index'])->name('index');
    });
});


Route::prefix('user')->name('user.')->group(function () {
    Route::prefix('permission')->name('permission.')->group(function () {
        Route::get('/', [MaterPermissionController::class, 'index'])->name('index');
        Route::post('/', [MaterPermissionController::class, 'store'])->name('store');
        // Route::get('/assignment/{user}', [MainUserController::class, 'assignment'])->name('assignment');
    });
    Route::prefix('role')->name('role.')->group(function () {
        Route::get('/', [MasterRoleController::class, 'index'])->name('index');
        Route::post('/', [MasterRoleController::class, 'store'])->name('store');
    });

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [MainUserController::class, 'index'])->name('index');
        Route::get('/assignment/{user}', [MainUserController::class, 'assignment'])->name('assignment');
        Route::put('/{user}/assignment', [MainUserController::class, 'revelation'])->name('revelation');
    });
    Route::prefix('modul')->name('modul.')->group(function () {
        Route::get('/', [MasterModulController::class, 'index'])->name('index');
        Route::post('/', [MasterModulController::class, 'store'])->name('store');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
