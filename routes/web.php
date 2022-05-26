<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ScheduleController, AreaController, ReportController};
use App\Models\{Schedule, Area, Report};

Route::get('/', function () {
    $data = Schedule::where('time_schedule', '!=', 'null')->get();
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

Route::get('/report', [ReportController::class, 'index']);
