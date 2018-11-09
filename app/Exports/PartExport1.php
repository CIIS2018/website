<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class PartExport1 implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      return DB::table('pagos')
              ->join('alumnos', 'alumnos.id', '=', 'pagos.idAlum')
              ->where('pagos.monto','<',50)
              ->where('alumnos.tipo','=',1)
              ->select('alumnos.nombres','alumnos.apellidos')
              ->get();
    }
}
