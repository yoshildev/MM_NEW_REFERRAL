<?php

namespace App\Http\Controllers;

use App\Models\Pandits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PanditController extends Controller
{
    //
    public function dashboard(){
        return view('front.dashboard');
    }

    public function kycSubmit(Request $r){
        $pandit = Pandits::find(Session::get('PANDIT_ID'));
        if($pandit->kyc==0){
            if($pandit->aadhaar_verified==0){
                $pandit->aadhaar_card = uploadSingle($r->aadhaar_card,'AADHAAR_CARD','KYC');
            }
            if($pandit->pan_card_verified==0){
                $pandit->pan_card = uploadSingle($r->pan_card,'PAN_CARD','KYC');
            }
            $pandit->save();
            return success('File Updated Successfully');
        }else{
            return error('KYC is Already Verified');
        }
    }

}
