<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function country_index() {
        return view('countries.country_index');
    }
}
