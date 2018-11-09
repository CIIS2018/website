<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exports\PartExport;
use App\Exports\Part1Export;
use App\Exports\Part2Export;
use App\Exports\PartExport1;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ExportController extends Controller
{
  public function index()
  {
      return view('backend.excel.reportes_excel');
  }
  public function export()
  {
      return Excel::download(new PartExport, 'InscritosInternos.xlsx');
  }
  public function export01()
  {
      return Excel::download(new PartExport1, 'DeudoresInternos.xlsx');
  }
  public function export1()
  {
      return Excel::download(new Part1Export, 'InscritosExternos.xlsx');
  }
  public function export2()
  {
      return Excel::download(new Part2Export, 'InscritosProfesionales.xlsx');
  }
}
