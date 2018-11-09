<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use App\Alumno;
use Maatwebsite\Excel\Concerns\FromCollection;

class Part2Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      return DB::table('pagos')
              ->join('alumnos', 'alumnos.id', '=', 'pagos.idAlum')
              ->where('alumnos.tipo','=',3)
              ->select('alumnos.nombres','alumnos.apellidos','alumnos.correo','alumnos.celular','alumnos.correo','alumnos.ciudad','pagos.monto','pagos.created_at','pagos.updated_at')
              ->get();
    }
}
