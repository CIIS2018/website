<?php

namespace App\Http\Controllers;

use App\inscritosTaller;
use Illuminate\Http\Request;

class tallerController extends Controller
{
    public function listaTaller()
    {
       $listas = inscritosTaller::all();

        return view('backend.inscritos.listaTaller',[
            'listas'=>$listas,
       ]);
    }

    public function create(Request $request){
       
        //     $this->validate($request, ['nombre' => ['required','max:20']],
        //     ['nombre.required'=>'Registe el nombre ',
        //     'nombre.max'=>'el nombre no supera 20 caracteres'
        //     ]
        // );
            $inscritosTaller = inscritosTaller::create([
                'nombre'=>$request->input('nombre'),
                'apellido'=>$request->input('apellido'),
                'celular'=>$request->input('celular'),
                'institucion'=>$request->input('institucion'),
                'taller'=>$request->input('taller'),
                'precio'=>$request->input('precio'),
                'tipo_inscripcion'=>$request->input('inscripcion'),
            ]);
            
            return redirect('/admin/reporte/taller');
    }

    public function show(Request $request, $id){
        $id_inscrito = $id;
        try{
                $inscrito = inscritosTaller::findOrFail($id_inscrito);
                return response()->json($inscrito);
        }catch (Exception $e){
            return response()->json('ERROR');
        }
    }

    public function update(Request $request, $id){
        $id_inscrito = $id;
        $dataResponse = [
            'nombre'=>$request->input('nombreEdit'),
                'apellido'=>$request->input('apellidoEdit'),
                'celular'=>$request->input('celularEdit'),
                'institucion'=>$request->input('institucionEdit'),
                'taller'=>$request->input('tallerEdit'),
                'precio'=>$request->input('precioEdit'),
                'tipo_inscripcion'=>$request->input('inscripcionEdit'),
        ];
        try{
            if($dataResponse['nombre'] == '' || $dataResponse['apellido'] == '' || $dataResponse['celular'] == ''){
                return redirect()->route('report.inscritosTaller')
                    ->with('error', TRUE);
            }else{
                $inscrito = inscritosTaller::find($id_inscrito);
                $inscrito->nombre = $dataResponse['nombre'];
                $inscrito->apellido = $dataResponse['apellido'];
                $inscrito->celular = $dataResponse['celular'];
                $inscrito->institucion = $dataResponse['institucion'];
                $inscrito->taller = $dataResponse['taller'];
                $inscrito->precio = $dataResponse['precio'];
                $inscrito->tipo_inscripcion = $dataResponse['tipo_inscripcion'];
                $inscrito->save();
                return redirect()->route('report.inscritosTaller')
                    ->with('status', TRUE);
            }
        }catch (Exception $e){
            return redirect()->route('report.inscritosTaller')
                ->with('error', TRUE);
        }
    }
}