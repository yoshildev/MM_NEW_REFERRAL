<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pandits;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontController extends Controller
{
    public function home(){
        return view('front.home');
    }
    public function register(){
        return view('front.auth.register');
    }

    public function save(Request $r){
        $r->validate([
            'name' => 'required',
            'email' => 'required|unique:pandits,email',
            'phone' => 'required',
            'password' => 'required',
        ]);

        try{
            $pandits = new Pandits();
            $pandits->name  = $r->name;
            $pandits->email  = $r->email;
            $pandits->phone  = $r->phone;
            $pandits->password  = $r->password;
            $pandits->save();
            return success('Pandit Registration Successfull. Your Account WIll Be Active Once Apporoved By Admin');
        }catch(Exception $e){
            return error($e->getMessage());
        }
    }

    public function loginSubmit(Request $r){
        $r->validate([
            'email' => 'required|exists:pandits,email',
            'password' => 'required'
        ]);
        try{
            $pandit = Pandits::where('email',$r->email)->where('password',$r->password)->first();
            if($pandit){
                Session::put('PANDIT_ID',$pandit->id);
                return to_route('pandit.dashboard');
            }else{
                return error('Password Not Matched');
            }
        }catch(Exception $e){
            return error($e->getMessage());
        }
    }

    public function login(){
        return view('front.auth.login');
    }


}
