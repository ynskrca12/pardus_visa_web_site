<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationProcessController extends Controller
{
    public function index() {
        return view('application_process.application_process_index');
    }
}
