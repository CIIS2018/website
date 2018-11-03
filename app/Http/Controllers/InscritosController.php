<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Artisan;

use App\Inscritos;

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


        try{
            if($dataResponse['nombre'] == '' || $dataResponse['apellido'] == '' || $dataResponse['dni'] == ''){
                new \Exception('Faltan Valores');
                $inscrito = false;
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

    public function show(Request $request, $id){

        $id_inscrito = $id;

        try{
                $inscrito = Inscritos::findOrFail($id_inscrito);
                return response()->json($inscrito);

        }catch (Exception $e){

            return response()->json('ERROR');

        }

    }

    public function update(Request $request, $id){

        $id_inscrito = $id;

        $dataResponse = [
            'nombre' => $request->nameEdit,
            'apellido' => $request->lastnameEdit,
            'codigo' => $request->codeEdit,
            'celular' => $request->phoneEdit,
            'dni' => $request->dniEdit,
            'institucion' => $request->instituteEdit,
            'email' => $request->emailEdit,
            'pago' => $request->pagoEdit,
            'modo_pago' => $request->modeEdit,
            'ciudad' => $request->cityEdit,
            'descuento' => $request->descountEdit,
            'tipo_inscripcion' => $request->typeEdit,
            'confirmado' => 1,
        ];


        try{
            if($dataResponse['nombre'] == '' || $dataResponse['apellido'] == '' || $dataResponse['dni'] == ''){
                return redirect()->route('report.inscritos')
                    ->with('error', TRUE);
            }else{
                $inscrito = Inscritos::find($id_inscrito);
                $inscrito->nombre = $dataResponse['nombre'];
                $inscrito->apellido = $dataResponse['apellido'];
                $inscrito->codigo = $dataResponse['codigo'];
                $inscrito->celular = $dataResponse['celular'];
                $inscrito->dni = $dataResponse['dni'];
                $inscrito->institucion = $dataResponse['institucion'];
                $inscrito->email = $dataResponse['email'];
                $inscrito->pago = $dataResponse['pago'];
                $inscrito->modo_pago = $dataResponse['modo_pago'];
                $inscrito->ciudad = $dataResponse['ciudad'];
                $inscrito->descuento = $dataResponse['descuento'];
                $inscrito->tipo_inscripcion = $dataResponse['tipo_inscripcion'];
                $inscrito->save();

                return redirect()->route('report.inscritos')
                    ->with('status', TRUE);
            }

        }catch (Exception $e){

            return redirect()->route('report.inscritos')
                ->with('error', TRUE);

        }
    }

}
