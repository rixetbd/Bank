<?php

use App\Http\Controllers\CSV\CsvUploadController;
use Illuminate\Support\Facades\Route;



Route::controller(CsvUploadController::class)->group(function(){

    Route::post('/admin/import/country', 'CountryCsvUpload')->name('CountryCsvUpload');
    Route::post('/admin/import/city', 'CityCsvUpload')->name('CityCsvUpload');
    Route::post('/admin/import/leads', 'LeadsCsvUpload')->name('LeadsCsvUpload');
    Route::post('/admin/export/leads', 'LeadExport')->name('LeadExport');

});
