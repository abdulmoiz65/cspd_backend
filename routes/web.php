<?php

use App\Http\Controllers\Admin\NavttcProgramController;
use App\Http\Controllers\Admin\UpcomingProgramController;
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



     // Upcoming Programs
    Route::get('/upcoming-programs', 
        [UpcomingProgramController::class, 'index']
    )->name('upcoming.index');
    
    Route::get('/upcoming-programs/create', 
        [UpcomingProgramController::class, 'create']
    )->name('upcoming.create');
    
    Route::post('/upcoming-programs', 
        [UpcomingProgramController::class, 'store']
    )->name('upcoming.store');
    
    Route::get('/upcoming-programs/{id}', 
        [UpcomingProgramController::class, 'show']
    )->name('upcoming.show');
    
    Route::get('/upcoming-programs/{id}/edit', 
        [UpcomingProgramController::class, 'edit']
    )->name('upcoming.edit');
    
    Route::put('/upcoming-programs/{id}', 
        [UpcomingProgramController::class, 'update']
    )->name('upcoming.update');
    
    Route::delete('/upcoming-programs/{id}', 
        [UpcomingProgramController::class, 'destroy']
    )->name('upcoming.destroy');

});