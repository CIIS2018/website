@extends('backend.layouts.app')

@section('title',"Sistema de Reporte en Excel")

@section('after-styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" media="all"/>

@endsection

@section('header')
    
    <header id="main-header" class="py-2 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1><i class="fa fa-pencil"></i> Reporte en Excel</h1>
                </div>
            </div>
        </div>
    </header>
    
    
    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-faded">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 offset-md-6">
                    <div class="input-group">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('content')
    
    
    <!-- dependences -->
    <section id="inscritos">
        <div class="container">
            <!-- Errors-->
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <li>UN ERROR A OCURRIDO</li>
                    </ul>
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <ul>
                        <li>CORRECTO</li>
                    </ul>
                </div>
            @endif
            <div class="row">
                
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Report en Excel</h4>
                        </div>
                    </div>
                    <br>
    
                    <div class="card">
                        <div class="card-header">
                            <h6>Inscripcion</h6>
                        </div>
                    </div>
                    <br>
                    
                    <div class="row">
                        <div class="col-6">
                            <label for="typeEdit" class="form-control-label">Ordenar Por:</label>
                            <select class="form-control" name="typeEdit">
                                <option selected disabled>Orden</option>
                                <option value="">Nombre</option>
                                <option value="">Apellido</option>
                                <option value="">Dni</option>
                                <option value="">Codigo</option>
                                <option value="">Ciudad</option>
                                <option value="">Institucion</option>
                                <option value="">Email</option>
                                <option value="">Celular</option>
                                <option value="">Tipo de Inscripcion</option>
                                <option value="">Tipo de descuento</option>
                                <option value="">Persona de cobro</option>
                            </select>
                        
                        </div>
    
                        <div class="col-6">
                            
                            <button class="btn btn-primary" type="button">Aceptar</button>

                        </div>
                    
                    </div>
                   
                    <br>
    
                    <div class="card">
                        <div class="card-header">
                            <h6>Asistencia</h6>
                        </div>
                    </div>
                    <br>
    
    
                    <div class="row">
                        <div class="col-6">
                            <label for="porcentage" class="form-control-label">Porcentaje de asistencia</label>
    
                            <input class="form-control" id="porcentage" type="number">
        
                        </div>
        
                        <div class="col-6">
    
                            <button class="btn btn-primary" type="button" id="assistence-search">Aceptar</button>
        
                        </div>
    
                    </div>
    
                    <br>
                    
                    <div class="card">
                        <div class="card-header">
                            <h6>Taller</h6>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('after-scripts')
    
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
    
    
    
    <script src="https://unpkg.com/sweetalert2@7.20.3/dist/sweetalert2.all.js"></script>

    <script>
        
        $('#assistence-search').on('click',function () {
            
            let porcentage = $('#porcentage').val();
            
            document.location = `http/admin/reporte/consulta/excel/asistencia?porcentage=${porcentage}`
            
        })
        
    </script>
    
    
@endsection
