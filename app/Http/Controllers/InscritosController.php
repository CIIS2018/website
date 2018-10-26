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

        $inscrito = false;

        try{
            if($dataResponse['nombre'] == '' || $dataResponse['apellido'] == '' || $dataResponse['dni'] == ''){
                new \Exception('Faltan Valores');
            }else{
                $inscrito = Inscritos::create($dataResponse);
            }

        }catch (Exception $e){

            return redirect()->route('report.inscritos')
                ->with('error', TRUE);

        }
        if($inscrito){

            return redirect()->route('report.inscritos')
                ->with('status', TRUE);

        } else {

            return redirect()->route('report.inscritos')
                ->with('error', TRUE);

        }
    }

}
