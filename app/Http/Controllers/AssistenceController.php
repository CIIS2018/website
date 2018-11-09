<?php

namespace App\Http\Controllers;

use App\Assistence;
use Illuminate\Http\Request;
use App\Students;
use App\Schedules;
use Illuminate\Support\Carbon;
use DateTimeZone;
use App\Inscritos;
class AssistenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

   public function student(Request $request)
    {
        //
        $id = $request->id;
        //$horario = $request->horario;
        $student = Inscritos::find($id);
        if(count($student) === 0) return response()->json([
            'status'=>'error',
            'estudiante'=>'desconocido',
            'turno'=>'desconocido',
            'message'=>'Estudiante no ha sido encontrado',
        ],401);
        $getData = Carbon::now(new DateTimeZone('America/Lima'));
        $hour = $getData->hour;
        if($hour >  7 && $hour < 13){
            $horario = 2;
        }else if($hour > 13 && $hour < 22){
            $horario = 1;
        }else {
            return response()->json([
                'status'=>'error',
                'estudiante'=> $student->nombre ,
                'turno'=> "No permitido",
                'message'=>'Horario no permitido',
            ],421 );
        }
        $schedule = Schedules::find($horario);

        
        //if(count($schedule) === 0) return response()->json('Horario no encontrado',401);
        $student_assistence = Assistence::where('students_id','=',$student->id)
                                            ->whereDate('date_assistence',Carbon::today())
                                            ->where('schedules_id','=',$horario)
                                            ->orderBy('date_assistence', 'desc')
                                            ->count();

        //return response()->json($student_assistence);
        if($student_assistence) {
            
            return response()->json([
                'status'=>'warning',
                'estudiante'=>$student->nombre ,
                'turno'=>$schedule->name,
                'message'=>'Estudiante ya ha sido registrado',
            ],421 );
        }

        try{
            $student->schedules()->attach(
                $schedule->id,
                ['date_assistence' => Carbon::now(new DateTimeZone('America/Lima'))]
            );
            return response()->json([
                'status'=>'success',
                'estudiante'=>$student->nombre ,
                'turno'=>$schedule->name,
                'message'=>'Estudiante registrado en la asistencia',
            ],200 );;
        }catch (\Exception $e){
            return response()->json([
                'status'=>'error',
                'message'=>'Un error ha ocurrido',
            ],500 );
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assitence  $assitence
     * @return \Illuminate\Http\Response
     */
    public function show(Assitence $assitence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assitence  $assitence
     * @return \Illuminate\Http\Response
     */
    public function edit(Assitence $assitence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assitence  $assitence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assitence $assitence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assitence  $assitence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assitence $assitence)
    {
        //
    }
}
