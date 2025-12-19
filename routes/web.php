<?php

use App\Http\Controllers\Admin\NavttcProgramController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// routes/web.php
Route::prefix('admin')->name('admin.')->group(function () {
    
    Route::get('/', function () {
        return view('cspd_admin.pages.index');
    })->name('dashboard');
    
    // NAVTTC Programs
    Route::get('/navttc-programs', 
        [NavttcProgramController::class, 'index']
    )->name('navttc.index');
    
    Route::get('/navttc-programs/create', 
        [NavttcProgramController::class, 'create']
    )->name('navttc.create');
    
    Route::post('/navttc-programs', 
        [NavttcProgramController::class, 'store']
    )->name('navttc.store');
    
    Route::get('/navttc-programs/{id}/edit', 
        [NavttcProgramController::class, 'edit']
    )->name('navttc.edit');
    
    Route::put('/navttc-programs/{id}', 
        [NavttcProgramController::class, 'update']
    )->name('navttc.update');
    
    Route::delete('/navttc-programs/{id}', 
        [NavttcProgramController::class, 'destroy']
    )->name('navttc.destroy');
});