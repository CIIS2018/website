<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CiisController extends Controller
{
    //
    public function index(){

        return view('frontend.ciis.index');

    }

    public function inscription(){
        return view('frontend.inscription.inscription');


    }


}
