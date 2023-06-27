<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/fullcalendar', [\App\Http\Controllers\FullCalendar::class,'calendar'])->name('fullcalendar');
