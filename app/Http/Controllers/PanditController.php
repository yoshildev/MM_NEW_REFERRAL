<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanditController extends Controller
{
    //
    public function dashboard(){
        return view('front.dashboard');
    }

}
