<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded = [];

    function getCountry(){
        return $this->hasOne(Country::class, 'country_id', 'name');
        // return $this->where('country_id', 'name')->get();
    }
}
