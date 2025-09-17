<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerFrontend extends Controller
{
    //======= For index page ======
    public function index (){
        return view("index");
    }  
    //======= For Products Page ======
    public function products (){
        return view("frontend.products");
    }

     //=========== For topbrands page=========
     public function topbrand (){
        return view("frontend.topbrands");
     }
    //=========== For cart page =========
     public function cart (){
        return view("frontend.cart");
     }

    //=========== For cart page =========
     public function contact(){
        return view("frontend.contact");
     }


    //========= For Login page 
    public function login(){
        return view("frontend.loginf");
    }
   
}
