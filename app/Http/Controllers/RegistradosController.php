<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registered;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistradosEmail;

class RegistradosController extends Controller
{
    //

    public function renderReportTable(){

        $students= Registered::all();

//        return response()->json($students);

        return view('backend.registrados.report',compact('students'));
    }

    public function registradosData() {

        $students= Registered::all();
        return response()->json($students);

    }

    public function confirmateStudent(Request $request) {

        $student = Registered::find($request->id);

        $messageSend = Mail::to("ciistacna@gmail.com")
            ->send(new RegistradosEmail($student));
        if ($messageSend == null) {
            return response()->json(['status' => 'OK']);
        } else {
            return response()->json(['status' => 'ERROR']);
        }

    }

}
