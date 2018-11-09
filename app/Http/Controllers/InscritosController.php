<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use App\Inscritos;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistradosEmail;

class InscritosController extends Controller
{
    //
    public function list()
    {

        $inscritos = Inscritos::get();
        return view('backend.inscritos.list', compact('inscritos'));

    }

    public function imprimir($id)
    {
        //dd($id);
        $datos = Inscritos::find($id);
        return view('backend.inscritos.imprimir')->with('datos', $datos);
    }


    public function create(Request $request)
    {
        $dataResponse = [
            'nombre' => $request->name,
            'apellido' => $request->lastname,
            'codigo' => $request->code,
            'celular' => $request->phone,
            'dni' => $request->dni,
            'institucion' => $request->institute,
            'email' => $request->email,
            'pago' => $request->pay,
            'modo_pago' => $request->mode,
            'ciudad' => $request->city,
            'descuento' => $request->descount,
            'tipo_inscripcion' => $request->type,
            'confirmado' => 1,
            'last_user_modificied' => Auth::id()
        ];
        try {
            if ($dataResponse['nombre'] == '' || $dataResponse['apellido'] == '') {
                new \Exception('Faltan Valores');
                $inscrito = false;
            } else {
                $inscrito = Inscritos::create($dataResponse);
            }
        } catch (Exception $e) {
            return redirect()->route('report.inscritos')
                ->with('error', TRUE);
        }
        if ($inscrito) {
            return redirect()->route('report.inscritos')
                ->with('status', TRUE);
        } else {
            return redirect()->route('report.inscritos')
                ->with('error', TRUE);
        }
    }

    public function show(Request $request, $id)
    {
        $id_inscrito = $id;
        try {
            $inscrito = Inscritos::findOrFail($id_inscrito);
            if (isset($inscrito->last_user_modificied)) {
                $inscrito->user = User::findOrFail($inscrito->last_user_modificied);
            }
            return response()->json($inscrito);
        } catch (Exception $e) {
            return response()->json('ERROR');
        }
    }

    public function confirmateStudent(Request $request)
    {

        $inscrito = Inscritos::find($request->id);
        //return response()->json(['status' => 'SEND EMAIL']);
        //$messageSend = Mail::to('cherry199662@gmail.com')


        $messageSend = Mail::to($inscrito->email)
            ->send(new RegistradosEmail($inscrito));
        if ($messageSend == null) {
            return response()->json(['status' => 'OK']);
        } else {
            return response()->json(['status' => 'ERROR']);
        }

    }


    public function update(Request $request, $id)
    {
        $id_inscrito = $id;
        $dataResponse = [
            'nombre' => $request->nameEdit,
            'apellido' => $request->lastnameEdit,
            'codigo' => $request->codeEdit,
            'celular' => $request->phoneEdit,
            'dni' => $request->dniEdit,
            'institucion' => $request->instituteEdit,
            'email' => $request->emailEdit,
            'pago' => $request->payEdit,
            'modo_pago' => $request->modeEdit,
            'ciudad' => $request->cityEdit,
            'descuento' => $request->descountEdit,
            'tipo_inscripcion' => $request->typeEdit,
            'confirmado' => 1
        ];
        try {
            if ($dataResponse['nombre'] == '' || $dataResponse['apellido'] == '') {
                return redirect()->route('report.inscritos')
                    ->with('error', TRUE);
            } else {
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
                $inscrito->last_user_modificied = Auth::id();

                $inscrito->save();
                return redirect()->route('report.inscritos')
                    ->with('status', TRUE);
            }
        } catch (Exception $e) {
            return redirect()->route('report.inscritos')
                ->with('error', TRUE);
        }
    }


    public function llenar()
    {
        for ($i = 1; $i <= 100; $i++) {
            $datos = new Inscritos;
            $datos->nombre = 'MARIBEL COHAILA GARCÍA';
            $datos->institucion = 'UNIVERSIDAD NACIONAL JORGE BASADRE GROHMANN';
            $datos->email = 'maribell_18@hotmail.com';
            $datos->celular = '931738836';
            $datos->pago = '80';
            $datos->tour = '1';
            $datos->save();
            Inscritos::where('id', $i)->delete();
        }

        $datos = new Inscritos;
        $datos->nombre = 'MARIBEL COHAILA GARCÍA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JORGE BASADRE GROHMANN';
        $datos->email = 'maribell_18@hotmail.com';
        $datos->celular = '931738836';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'JESUS EDUARDO JIMENEZ BONIFACIO';
        $datos->institucion = 'IESTP FRANCISCO DE PAULA GONZALES VIGIL';
        $datos->email = 'jesus.jimenez.bonifacio@gmail.com';
        $datos->celular = '933478470';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'JOSSIE YUSHADA MAMANI COPA';
        $datos->institucion = 'IESTP FRANCISCO DE PAULA GONZALES VIGIL';
        $datos->email = 'jossiemc15@gmail.com';
        $datos->celular = '910373700';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'HEYSON BRAVO INCUÑA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'bravo3077@hotmail.com';
        $datos->celular = '918467000';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'CARMEN VICENTE OSCCO';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'vicenteoscco2015@gmail.com';
        $datos->celular = '993913587';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'CRISTIAN JOEL POCCO PALOMINO';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'cristianjoelpp@gmail.com';
        $datos->celular = '930915739';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'KEVIN ROMERO AQUINO';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'kevinaquino2308@gmail.com';
        $datos->celular = '925208259';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'PERCY MAUCAYLLE HUAMAN';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'lmh.maucaylle@gmail.com';
        $datos->celular = '825803780';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'JAIME ALCARRAZ HUMÁN';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'jaime.ingsistemas@gmail.com';
        $datos->celular = '962266178';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'LUIS DORIAN AULLA MINAYA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'luis.dorian.oz@gmail.com';
        $datos->celular = '934276014';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'ZULMA ISABEL ALVAREZ CARTOLIN';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'aalvarezzulmaa@gmail.com';
        $datos->celular = '921740032';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'JACOB ALDO CHIPANA DELGADO';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'aldochd13@gmail.com';
        $datos->celular = '931588227';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'ROSALIN FRECIA FLORES UQUICHI';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'rosalinffu02@gmail.com';
        $datos->celular = '986454358';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'RODRIGO AULLA MINAYA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'aullaminayarodrigo@gmail.com';
        $datos->celular = '934740048';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'ISMER PEDRAZA HERHUAY';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'ismerpedraza@gmail.com';
        $datos->celular = '957732279';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'SUSAN LARITZA SILVERA CUSIATAO';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'susanlaritzasilveracusiatao@gmail.com';
        $datos->celular = '972415895';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'CINTHIA BARBARAN MARTINEZ';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'c.barbaran.m.23@gmail.com';
        $datos->celular = '941290517';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'FREDERIK JUAREZ QUISPE';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'frederikjuarezquispe@gmail.com';
        $datos->celular = '929433598';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'WILIAM SICHA ISLACHIN';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'wsicha01@gmail.com';
        $datos->celular = '912790571';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'KENS ERVIN MOREANO RAYA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'APKemr@gmail.com';
        $datos->celular = '986224809';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'EEDISON LLACCHUAS VALDIVIA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'edisonlv07@gmail.com';
        $datos->celular = '937076254';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'JULIO CESAR HUARACA FLORES';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'cesitarjchf@gmail.com';
        $datos->celular = '946627219';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'ROBIT COTARMA TORRES';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'robitocotarma@gmail.com';
        $datos->celular = '940866353';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'FILEMÓN RIMACHI DÍAZ';
        $datos->institucion = 'UNIVERSIDAD NACIONAL JOSÉ MARÍA ARGUEDAS';
        $datos->email = 'fdrimachi@gmail.com';
        $datos->celular = '981556716';
        $datos->pago = '80';
        $datos->tour = '1';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'WASHINGTON ACERO MAMANI';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'shin321654987@gmail.com';
        $datos->celular = '927580547';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'YESSICA AGUILAR ESPINOZA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'aguilaresyessica@gmail.com';
        $datos->celular = '928544507';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'CRISTHIAN ABAD ANCHAPURI RUELAS';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'abadruelas123@gmail.com';
        $datos->celular = '970623218';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'CHRISTIAN APAZA MAMANI';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'tomy.zix@gmail.com';
        $datos->celular = '946198015';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'JESUS ANTONY ARRATIA CAMA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'jesusyx22@gmail.com';
        $datos->celular = '982303247';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'MIREYA VALKIRIA BENITES CAZORLA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'valkiria.caz@gmail.com';
        $datos->celular = '948682440';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'YHOMIRA  CACERES VELASQUEZ';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'yhomira.tk3@gmail.com';
        $datos->celular = '946320040';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'SLEYTHER GIULIO CALSIN PACSI';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'sleythergcp@gmail.com';
        $datos->celular = '965875865';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'YEMIRA LAURA CALVO CCALLO';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'yemi.junsu@gmail.com';
        $datos->celular = '990914232';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'CECILIA CÁRDENAS CHOQUE';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'cecithacardenas@gmail.com';
        $datos->celular = '999117689';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'VICTOR JHAMPIER CAXI MAQUERA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'victorjhampier@gmail.com';
        $datos->celular = '968991714';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'FRANCO ENRIQUE CHAMBI MAMANI ';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'franckoj27@gmail.com';
        $datos->celular = '946600412';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'FRANCISCO CHIPA CARRASCO';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'franzxhito666@gmail.com';
        $datos->celular = '959892661';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'DENNIS MARTIN GINGER CHIPANA AZA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'demargin2409@gmail.com';
        $datos->celular = '979030308';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'YESSICA CONDORI CONDORI ';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'condoryesy@gmail.com';
        $datos->celular = '925363317';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'CHRISTIAN BENJAMÍN FLORES COPA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'christianbfc97@gmail.com';
        $datos->celular = '978082047';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'ANGHELO GABRIEL FLORES PAREDES';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'anghelogfloresp@gmail.com';
        $datos->celular = '950904618';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'MARÍA ELENA GÓMEZ HUAYTA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'mgomezhuayta@gmail.com';
        $datos->celular = '921077525';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'ALEX FABIO HUALLPACHOQUE PANTI';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'alaen.afhp@gmail.com';
        $datos->celular = '933440928';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'KEVIN ARNOLD LARUTA CALCINA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'kalc.06.18.95@gmail.com';
        $datos->celular = '917386722';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'EDGAR LIBERATO LAURA CHAYÑA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'face.4d@gmail.com';
        $datos->celular = '950864641';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'MANUEL ALEJANDRO LAURA JARAMILLO';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'mjtemdark28@gmail.com';
        $datos->celular = '940820786';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'GABY ANTONIETA LIMA CONDORI';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'gabyxita.lc@gmail.com';
        $datos->celular = '957075267';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'CRISTHOPHER MANUEL LLANOS CAHUANA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'cristhophermanuell@gmail.com';
        $datos->celular = '976414228';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'YENY CREYS MALDONADO VALENCIA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'yenyrock2698@gmail.com';
        $datos->celular = '978567012';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'KELY KARINA PARICAHUA ACHATA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'akely.25@gmail.com ';
        $datos->celular = '960262402';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'RONALD PARQUI ITUSACA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'seth15920@yahoo.es';
        $datos->celular = '970450909';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'ALICIA JOSEFINA QUINO LAYME';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'aliciaqly@gmail.com';
        $datos->celular = '988725957';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'MARLENNY ELYZBETH QUISPE CHIPANA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'marlennyquispechipana8@gmail.com';
        $datos->celular = '925664943';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'LUIS ARMANDO QUISPE TICONA';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'luchino14789@gmail.com';
        $datos->celular = '929607507';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'WENDY MARIBEL RAMOS RAMOS';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'wendymaribelr@gmail.com';
        $datos->celular = '935457915';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'LUDGLENY VELASQUEZ MONTALVO';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'LudludUNAPUNO@gmail.com';
        $datos->celular = '949926064';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'CRISTIAN RONY YAGUNO MAMANI';
        $datos->institucion = 'UNIVERSIDAD NACIONAL DEL ALTIPLANO';
        $datos->email = 'cristianyaguno92@gmail.com';
        $datos->celular = '928202988';
        $datos->pago = '80';
        $datos->tour = '0';
        $datos->save();
        $datos = new Inscritos;
        $datos->nombre = 'MILTON CASTRO TUPIÑO';
        $datos->institucion = 'UNIVERSIDAD DE SAN MARTÍN DE PORRES-LIMA';
        $datos->email = 'mcastu2003@hotmail.com ';
        $datos->celular = '965633776';
        $datos->pago = '150';
        $datos->tour = '0';
        $datos->save();
    }

    public function runningMigration()
    {

        Artisan::call('migrate', array('--path' => 'database/migrations/inscritos', '--force' => true));
        return response()->json('Migrate Confirmat');

    }


}
