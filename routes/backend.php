<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CSV\CsvUploadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function(){


    Route::controller(AdminController::class)->group(function(){

        Route::get('/admin', 'index')->name('admin.index');

    });

    Route::controller(UserController::class)->group(function(){
        Route::get('/admin/user/all', 'index')->name('admin.user.all');
        Route::post('/admin/user/create', 'create')->name('admin.user.create');
        Route::post('/admin/user/update', 'update')->name('admin.user.update');
        Route::get('/admin/user/destroy/{id}', 'destroy')->name('admin.user.destroy');
    });

    Route::controller(LeadController::class)->group(function(){

        Route::get('/admin/leads', 'index')->name('admin.leads.index');
        Route::get('/admin/leads/delete/{id}', 'destroy')->name('admin.leads.single.delete');
        Route::get('/admin/leads/importpage', 'importpage')->name('admin.leads.importpage');

    });

    Route::controller(CountryController::class)->group(function(){

        Route::get('/admin/countries', 'index')->name('admin.countrie.index');
        Route::post('/admin/countries/create', 'create')->name('admin.countrie.create');
        Route::post('/admin/countries/update', 'update')->name('admin.country.update');
        Route::get('/admin/countries/destroy/{id}', 'destroy')->name('admin.country.destroy');

    });


});
