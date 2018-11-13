<?php

namespace App\Http\Controllers;

use App\inscritosConcurso;
use Illuminate\Http\Request;

class ConcursoController extends Controller
{
    public function listaConcurso()
    {
       $listas = inscritosConcurso::all();

        return view('backend.inscritos.listaConcurso',[
            'listas'=>$listas,
       ]);
    }

public function imprimir($id){
    //dd($id);
    $datos=inscritosConcurso::find($id); 
//$cobrador=User::find($datos->last_user_modificied);
//    return view('backend.inscritos.imprimir_taller')->with('datos', $datos)->with('cobrador', $cobrador);
 return view('backend.inscritos.imprimir_concurso')->with('datos', $datos);

  }

    public function create(Request $request){
       
        //     $this->validate($request, ['nombre' => ['required','max:20']],
        //     ['nombre.required'=>'Registe el nombre ',
        //     'nombre.max'=>'el nombre no supera 20 caracteres'
        //     ]
        // );
            $inscritosConcurso = inscritosConcurso::create([
                'nombre'=>$request->input('nombre'),
                'apellido'=>$request->input('apellido'),
                'celular'=>$request->input('celular'),
                'institucion'=>$request->input('institucion'),
                'concurso'=>$request->input('concurso'),
                'precio'=>$request->input('precio'),
                'tipo_inscripcion'=>$request->input('tipoinscripcion'),
                'integrantes'=>$request->input('integrantes'),
            ]);
            
            return redirect('/admin/reporte/concurso');
    }

    public function show(Request $request, $id){
        $id_inscrito = $id;
        try{
                $inscrito = inscritosConcurso::findOrFail($id_inscrito);
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
                'concurso'=>$request->input('concursoEdit'),
                'precio'=>$request->input('precioEdit'),
                'tipo_inscripcion'=>$request->input('tipoinscripcionEdit'),
                'integrantes'=>$request->input('integrantesEdit'),
        ];
        try{
            if($dataResponse['nombre'] == '' || $dataResponse['apellido'] == '' || $dataResponse['celular'] == ''){
                return redirect()->route('report.inscritosConcurso')
                    ->with('error', TRUE);
            }else{
                $inscrito = inscritosConcurso::find($id_inscrito);
                $inscrito->nombre = $dataResponse['nombre'];
                $inscrito->apellido = $dataResponse['apellido'];
                $inscrito->celular = $dataResponse['celular'];
                $inscrito->institucion = $dataResponse['institucion'];
                $inscrito->concurso = $dataResponse['concurso'];
                $inscrito->precio = $dataResponse['precio'];
                $inscrito->tipo_inscripcion = $dataResponse['tipo_inscripcion'];
                $inscrito->integrantes = $dataResponse['integrantes'];
                $inscrito->save();
                return redirect()->route('report.inscritosConcurso')
                    ->with('status', TRUE);
            }
        }catch (Exception $e){
            return redirect()->route('report.inscritosConcurso')
                ->with('error', TRUE);
        }
    }
}