<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\Admin\MailboxController;
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

        Route::post('/admin/state/create', 'stateCreate')->name('admin.state.create');
        Route::get('/admin/city/index', 'cityIndex')->name('admin.city.index');
        Route::post('/admin/city/create', 'cityCreate')->name('admin.city.create');
        Route::get('/admin/city/destroy/{id}', 'cityDestroy')->name('admin.city.destroy');
        Route::post('/admin/city/update', 'cityUpdate')->name('admin.city.update');
    });

    Route::controller(IndustryController::class)->group(function(){
        Route::get('/admin/industry', 'index')->name('admin.industry.index');
        Route::post('/admin/industry/create', 'create')->name('admin.industry.create');
        Route::post('/admin/industry/update', 'update')->name('admin.industry.update');
        Route::get('/admin/industry/destroy/{id}', 'destroy')->name('admin.industry.destroy');
    });


    Route::controller(MailboxController::class)->group(function(){

        Route::get('/admin/inbox', 'inbox')->name('admin.inbox');
        Route::get('/admin/compose', 'compose')->name('admin.inbox.compose');
        Route::get('/admin/read/id', 'read_message')->name('admin.inbox.read_message');

    });

});
