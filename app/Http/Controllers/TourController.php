<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InscritosTour;

class TourController extends Controller
{
    //
    public function list(){

        $inscritos = InscritosTour::all();
        return view('backend.tour.list',compact('inscritos'));        

    }
}
