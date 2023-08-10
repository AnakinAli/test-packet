<?php

use Illuminate\Support\Facades\Route;

Route::namespace('AnakinAli\Contact\Http\Controllers')->group(function () {
    Route::get('/contact', [\AnakinAli\Contact\Http\Controllers\ContactController::class, 'index'])->name('contact');
    Route::post('/contact', [\AnakinAli\Contact\Http\Controllers\ContactController::class, 'handleRequest']);

});
