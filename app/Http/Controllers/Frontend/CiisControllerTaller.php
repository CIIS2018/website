<?php

namespace App\Http\Controllers\Frontend;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\inscritos_talleres;
use Mail;

use Storage;

class CiisControllerTaller extends Controller
{
    //
    public function index()
    {

        return view('frontend.ciis.index');

    }


    //aqui ira la funcion inscriptiontaller
    public function inscriptionTaller()
    {
        return view('frontend.inscriptionTaller.inscriptionTaller');
    }
   
   
    //registrar a taller
    public function registerInscriptionTaller(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:150',
            'lastname' => 'required|max:150',
            'dni' => 'required|max:9',
            'city' => 'required|max:150',
            'type_taller' => 'required',
            'institution' => 'required|max:150',
            'cellphone' => 'required|max:150',
            'email' => 'required',

        ])->validate();

        try {
            $file = $request->file('fotovoucher');

            $file_name = date("M") . '-' .date("d") . '-' .$request->name.'-'.$request->dni.$file->getClientOriginalName() ?? 'No tiene foto';

            if ($file !== null) {

                $contents = $file_name;


                $file->move(public_path() . "/uploads/voucher/", $file_name);

            //    $type = pathinfo($image_path, PATHINFO_EXTENSION);

            //    $data = file_get_contents($image_path);

            //    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
	    
            } else {

                return response()->json(['error' => 'Enviar la foto']);

            }
        } catch (\Exception $e) {

            return response()->json(['error' => 'Enviar la foto-']);

        }


        try {
            $user = inscritos_talleres::create([
                'nombre' => $request->name,
                'email' => $request->email,
                'apellido' => $request->lastname,
                'dni' => $request->dni,
                'tipo_taller' => $request->type_taller,
                'ciudad' => $request->city,
                'instituto' => $request->institution,
                'celular' => $request->cellphone,
                'imagen' => $file_name,
		
            ]);
		// enviando correo

		$img=(public_path()."/uploads/voucher/".$contents); //direccion del archivo
                
		$data = array('name' => $request->name,

                              'email' => $request->email,

                              'apellido' => $request->lastname,

                              'dni' => $request->dni,

                              'tipo_taller' => $request->type_taller,

                              'ciudad' => $request->city,

                              'instituto' => $request->institution,

                              'celular' => $request->cellphone);

                $r=Mail::send('correo.index',$data, function($message) use ($img){

                  $message->from('ciis.xix@gmail.com','Pagina del ciis');

                //   $message->to('miriam.19.marisol@gmail.com')->subject('nuevo asistente registrado');
                $message->to('joevil23tjq@gmail.com')->subject('nuevo asistente registrado a taller');
                  $message->attach($img);
                
		});

            // end enviando correo
            
            // $this->registerImageUser($user->id, $file);
		
            return response()->json('ok', 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al registrar'], 421);
        }
    } 
       
}
