<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NKP_QUAN_TRIcontroller extends Controller
{
    // login (authentication)
    public function nkpLogin(){
        return view('NkpLogin.nkp-login');
    }
    public function nkpLoginSubmit(Request $request){
        return view('NkpLogin.nkp-login');
    }
}
