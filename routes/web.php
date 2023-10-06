<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TokenController;
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
Route::controller(\App\Http\Controllers\RoleController::class)->group(function(){
    Route::get('/roles','index')->name('roles.index');
    Route::get('/roles/create','create')->name('roles.create');
    Route::post('roles/create','store')->name('roles.store');
    Route::get('/roles/edit/{id}','edit')->name('roles.edit');
    Route::post('/roles/edit/{id}','update')->name('roles.update');
    Route::post('/roles/delete/{id}','destroy')->name('roles.delete');
});
Route::get('/', function () {

    return view('welcome',[
        'title' => 'Dashboard',
    ]);
});

//Classes Route
Route::get('classes',[ClassesController::class, 'index']);
Route::get('classes/create', [ClassesController::class, 'create'])->name('classes.create');
Route::post('classes/create', [ClassesController::class, 'store'])->name('classes.store');

//Subjects Routes
Route::get('subjects',[ SubjectController::class, 'index']);
Route::get('/subjects/create',[ SubjectController::class,'create']);
Route::post('subjects/create',[ SubjectController::class,'store']);
Route::get('/subjects/edit/{id}',[ SubjectController::class,'edit'])->name('subjects.edit');
Route::post('/subjects/edit/{id}',[ SubjectController::class,'update'])->name('subjects.update');
Route::post('/subjects/{id}',[ SubjectController::class,'destroy'])->name('subjects.delete');
//Levels Routes
Route::get('/levels',[ LevelController::class,'index']);
Route::get('/levels/create',[ LevelController::class,'create']);
Route::post('levels/create',[ LevelController::class,'store']);
Route::get('/levels/edit/{id}',[ LevelController::class,'edit'])->name('levels.edit');
Route::post('/levels/edit/{id}',[ LevelController::class,'update'])->name('levels.update');
Route::post('/levels/{id}',[ LevelController::class,'destroy'])->name('levels.delete');

//PDF Routes
Route::get('/generate-pdf', [SubjectController::class, 'exportPDF']);

//Period Routes
Route::get('/periods',[ PeriodController::class,'index']);
Route::get('/periods/create',[ PeriodController::class,'create']);
Route::post('periods/create',[ PeriodController::class,'store']);
Route::get('/periods/edit/{id}',[ PeriodController::class,'edit'])->name('periods.edit');
Route::post('/periods/edit/{id}',[ PeriodController::class,'update'])->name('periods.update');
Route::post('/periods/{id}',[ PeriodController::class,'destroy'])->name('periods.delete');

//Tokens Routes
Route::get('/tokens',[ TokenController::class,'index']);
Route::get('/tokens/create',[ TokenController::class,'create']);
Route::post('tokens/create',[ TokenController::class,'store']);
Route::get('/tokens/edit/{id}',[ TokenController::class,'edit'])->name('tokens.edit');
Route::post('/tokens/edit/{id}',[ TokenController::class,'update'])->name('tokens.update');
Route::post('/tokens/{id}',[ TokenController::class,'destroy'])->name('tokens.delete');






