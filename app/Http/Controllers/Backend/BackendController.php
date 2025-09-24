<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    // For bbackend  home page
    public function index (){
        return view ("backend.index");
    }
}
