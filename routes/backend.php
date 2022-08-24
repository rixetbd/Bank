<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\CSV\CsvUploadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function(){


    Route::controller(AdminController::class)->group(function(){

        Route::get('/admin', 'index')->name('admin.index');

    });

    Route::controller(LeadController::class)->group(function(){

        Route::get('/admin/leads', 'index')->name('admin.leads.index');

    });

    Route::controller(CountryController::class)->group(function(){

        Route::get('/admin/countries', 'index')->name('admin.countrie.index');
        Route::post('/admin/countries/create', 'create')->name('admin.countrie.create');

    });

    Route::controller(CsvUploadController::class)->group(function(){
        Route::post('/admin/countries/csv/upload', 'CountryCsv')->name('countries.csv.upload');
    });


});
