<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Inscritos;
use Validator;

class InscritosController extends Controller
{
    //
    public function list(){

        $inscritos = Inscritos::get();
        return view('backend.inscritos.list',compact('inscritos'));
    }

    public function runningMigration(){
        Artisan::call('migrate', array('--path' => 'database/migrations/inscritos', '--force' => true));
        return response()->json('Migrate Confirmat');
    }
    public function create(Request $request){


        $dataResponse = [
            'nombre' => $request->name,
            'apellido' => $request->lastname,
            'codigo' => $request->code,
            'celular' => $request->phone,
            'dni' => $request->dni,
            'institucion' => $request->institute,
            'email' => $request->email,
            'pago' => $request->pago,
            'modo_pago' => $request->mode,
            'ciudad' => $request->city,
            'descuento' => $request->descount,
            'tipo_inscripcion' => $request->type,
            'confirmado' => 1,
        ];
        $rules = [
            'dni' => 'required|max:10|unique:inscritos',
            'nombre' => 'max:100',
            'apellido' => 'max:100',
        ];
        $messages = [
            'nombre'    => 'El nombre no esta completado.',
            'dni'    => 'El dni no esta completado.',
        ];
        $validator = Validator::make($dataResponse, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->route('report.inscritos')
                ->with('error', TRUE);
        }
        $inscrito = Inscritos::create($dataResponse);
        if($inscrito){
            return redirect()->route('report.inscritos')
                ->with('status', TRUE);
        } else {
            return redirect()->route('report.inscritos')
                ->with('error', TRUE);
        }
    }

}
