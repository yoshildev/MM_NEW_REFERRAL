<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('front.home');
    }
    public function register(){
        return view('front.register');
    }
    
}
