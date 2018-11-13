@extends('backend.layouts.app')

@section('title',"Sistema de Reporte de Inscritos en Tour")

@section('after-styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">
    
@endsection

@section('header')
    @include('backend.includes.header')
@endsection

@section('content')
    <!-- Errors-->

    
    <!-- dependences -->
    <section id="dependences">
        <div class="container">
    
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <li>UN ERROR A OCURRIDO </li>
                    </ul>
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <ul>
                        <li>DATOS ACTUALIZADOS CORRECTAMENTE</li>
                    </ul>
                </div>
            @endif
            
            
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Personas inscritas en Tour</h4>
                        </div>
                    </div>
                    <br>
                    <table id="studentTable" class="table table-striped table-bordered dt-responsive small" style="width: 100%">
                        <thead class="thead-inverse">
                        <tr>
                            <th>ID#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>DNI</th>
                            <th>Tipo Inscripcion</th>
<th>Pago</th>
                            <th>Imagen</th>
                            <th>Pago</th>
                            <th>Confirmar</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $key => $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td style="text-transform: uppercase">{{$student->nombre}}</td>
                                <td>{{$student->apellido}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->dni}}</td>
                                <td>{{$student->tipo_inscripcion}}</td>
<td>{{$student->pago}}</td>
                                <td> <button class="image-student-modal btn btn-warning btn-xs" data-toggle="modal" data-id="{{$student->id}}">Ver Imagen</button></td>
                                <td><button class="edit-registrado-modal btn btn-primary btn-xs" data-id="{{$student->id}}"><i class="fa fa-pencil"></i></button></td>
                                <td><button class="confirmate-student btn btn-success btn-xs" data-id="{{$student->id}}">Confirmar</button></td>

                            </tr>


                            {{----}}
                        @endforeach
                        
                        
                        </tbody>
                    </table>
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
    
    <script type="text/javascript">
        


        $(document).ready(function () {
            var studentTable = $('#studentTable').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis'],
                language: {
                    "search":'Buscar'
                }
            });
            studentTable
                .buttons()
                .container()
                .appendTo('#studentTable_wrapper .col-md-6:eq(0)');

        })

    </script>


@endsection

@section('modal')
    @include('backend.inscritos.includes.pay-show')
    @include('backend.registrados.includes.edit')
    @include('backend.registrados.includes.show-image')
@endsection