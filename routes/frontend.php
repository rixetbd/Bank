<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\SearchController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::controller(FrontendController::class)->group(function(){

    Route::get('/', 'index')->name('frontend.index');
    Route::get('/getCityName', 'getCityName')->name('frontend.getCityName');

});

Route::controller(SearchController::class)->group(function(){

    Route::post('/getcities', 'search')->name('getcities.search');
    Route::post('/getcitiesdata', 'searchCitiesData')->name('searchCitiesData.search');
    Route::post('/getdataindustries', 'getdataindustries')->name('getdataindustries.search');

});
