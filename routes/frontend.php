<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\IPController;
use App\Models\Country;
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
    Route::get('/3', 'index3')->name('frontend.index3');
    Route::get('/getCityName', 'getCityName')->name('frontend.getCityName');
    Route::get('/test/data', function(){
        $data = Lead::all();
        return response()->json($data);
    });
    Route::get('/test', function(){
        return view('frontend.test');
    });
    Route::get('/betheme', function(){
        return view('frontend.betheme.index');
    });
    Route::get('/home2', 'index_home2')->name('frontend.leadgeneration');
    Route::get('/mainpage', 'index_mainpage')->name('frontend.home');


});


Route::controller(FrontendController::class)->group(function(){
    Route::get('/000', 'index_0')->name('frontend.0');
    Route::post('/getservicedata', 'getservicedata')->name('frontend.getservicedata');
    Route::post('/getservicedata/first', 'getservicedata_first')->name('frontend.getservicedata_first');
    Route::post('/getservicedata/selected', 'getservicedata_selected')->name('frontend.getservicedata_selected');
});



Route::controller(SearchController::class)->group(function(){

    Route::post('/getcities', 'search')->name('getcities.search');
    // Route::post('/getalldata', 'getalldata')->name('getcities.getalldata');
    // Route::post('/getcitiesdata', 'searchCitiesData')->name('searchCitiesData.search');
    // Route::post('/getdataindustries', 'getdataindustries')->name('getdataindustries.search');

    Route::post('/searchall', 'searchall')->name('search.searchall');
    Route::post('/searchcountryonly', 'searchcountryonly')->name('search.searchcountryonly');
    Route::post('/searchcityonly', 'searchcityonly')->name('search.searchcityonly');
    Route::post('/searchindustryonly', 'searchindustryonly')->name('search.searchindustryonly');
    Route::post('/searchcountryandcity', 'searchcountryandcity')->name('search.searchcountryandcity');
    Route::post('/searchcountryandindustry', 'searchcountryandindustry')->name('search.searchcountryandindustry');
    Route::post('/searchcityandindustry', 'searchcityandindustry')->name('search.searchcityandindustry');

});

Route::controller(ContactController::class)->group(function(){
    Route::get('/contact', 'index')->name('frontend.contact.index');
    Route::post('/contact/create', 'create')->name('frontend.contact.post');

});

Route::controller(IPController::class)->group(function(){
    Route::get('/ip', 'create');
});
