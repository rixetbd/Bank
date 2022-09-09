<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\IPController;
use App\Models\Lead;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/', function(){
//     return view('frontend.tal');
// });


Route::controller(FrontendController::class)->group(function(){

    Route::get('/', 'index')->name('frontend.index');
    Route::get('/2', 'index2')->name('frontend.index2');
    Route::get('/getCityName', 'getCityName')->name('frontend.getCityName');


    Route::get('/test/data', function(){
        $data = Lead::all();
        return response()->json($data);
    });

    Route::get('/test', function(){
        return view('frontend.test');
    });

});

Route::controller(SearchController::class)->group(function(){

    Route::post('/getcities', 'search')->name('getcities.search');
    Route::post('/getalldata', 'getalldata')->name('getcities.getalldata');
    Route::post('/getcitiesdata', 'searchCitiesData')->name('searchCitiesData.search');
    Route::post('/getdataindustries', 'getdataindustries')->name('getdataindustries.search');

});

Route::controller(ContactController::class)->group(function(){

    Route::get('/contact', 'index')->name('frontend.contact.index');
    Route::post('/contact/create', 'create')->name('frontend.contact.post');

});

Route::controller(IPController::class)->group(function(){

    Route::get('/ip', 'create');
});
