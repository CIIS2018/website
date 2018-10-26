<?php

namespace App\Http\Controllers\Frontend;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Registered;
use Mail;

use Storage;

class CiisController extends Controller
{
    //
    public function index()
    {

        return view('frontend.ciis.index');

    }

    public function inscription()
    {
        return view('frontend.inscription.inscription');
    }

    public function registerInscription(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:150',
            'lastname' => 'required|max:150',
            'dni' => 'required|max:9',
            'city' => 'required|max:150',
            'type_inscription' => 'required',
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
            $user = Registered::create([
                'nombre' => $request->name,
                'email' => $request->email,
                'apellido' => $request->lastname,
                'dni' => $request->dni,
                'tipo_inscripcion' => $request->type_inscription,
                'ciudad' => $request->city,
                'instituto' => $request->institution,
                'telefono' => $request->cellphone,
                'celular' => $request->cellphone,
                'imagen' => $file_name,
		
            ]);
		// enviando correo

		$img=(public_path()."/uploads/voucher/".$contents); //direccion del archivo
                
		$data = array('name' => $request->name,

                              'email' => $request->email,

                              'apellido' => $request->lastname,

                              'dni' => $request->dni,

                              'tipo_inscripcion' => $request->type_inscription,

                              'ciudad' => $request->city,

                              'instituto' => $request->institution,

                              'telefono' => $request->cellphone,

                              'celular' => $request->cellphone);

                $r=Mail::send('correo.index',$data, function($message) use ($img){

                  $message->from('ciis.xix@gmail.com','Pagina del ciis');

                //   $message->to('miriam.19.marisol@gmail.com')->subject('nuevo asistente registrado');
  $message->to('achoque1400@gmail.com')->subject('nuevo asistente registrado');
                  $message->attach($img);
                
		});

            // end enviando correo
            
            // $this->registerImageUser($user->id, $file);
		
            return response()->json('ok', 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al registrar'], 421);
        }

        

    }

    public function registerImageUser($id, $image)
    {
        
        $contents = $image->openFile()->fread($image->getSize());
        $user = Registered::find($id);
        $user->image = $contents;
        $user->save();

        return response()->json('ok', 200);
    }
    //registrar a taller    
    
}
