<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ScheduleController, AreaController};
use App\Models\{Schedule, Area};

Route::get('/', function () {
    $data = Schedule::all();
    $area = Area::all();
    // dd($data);
    return view('welcome', compact('data', 'area'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('area', AreaController::class)->except('destroy');
Route::get('/area/destroy/{id}', [AreaController::class,'destroy']);

Route::resource('schedule', ScheduleController::class)->except('destroy');
Route::get('/schedule/destroy/{id}', [ScheduleController::class,'destroy']);
