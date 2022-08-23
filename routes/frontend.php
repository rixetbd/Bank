<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::controller(FrontendController::class)->group(function(){

    Route::get('/', 'index')->name('frontend.index');
    Route::get('/getCityName', 'getCityName')->name('frontend.getCityName');

});
