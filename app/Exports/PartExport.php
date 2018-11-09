<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class PartExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      return DB::table('Inscritos')
              ->where('Inscritos.pago','>',0)
              ->select('Inscritos.nombre','Inscritos.apellido')
              ->get();
    }
}
