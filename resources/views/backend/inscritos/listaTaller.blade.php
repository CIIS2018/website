@extends('backend.layouts.app')

@section('title',"Sistema de Reporte de Estudiantes Registrados Talleres")

@section('after-styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">
@endsection

@section('header')
<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1><i class="fa fa-pencil"></i> Reporte de Inscritos Taller</h1>
            </div>
        </div>
    </div>
</header>
<section id="actions" class="py-4 mb-4 bg-faded">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addInscritoTallerModal">
                    <i class="fa fa-plus"></i> Agregar inscripcion</a>
            </div>
            <div class="col-md-6 offset-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar en los inscritos...">
                    <span class="input-group-btn">
                <button class="btn btn-primary">Buscar</button>
            </span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
    
    
    <!-- dependences -->
    <section id="inscritosTaller">
        <div class="container">
            <!-- Errors-->
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <li>UN ERROR A OCURRIDO NO REGISTRADO</li>
                    </ul>
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <ul>
                        <li>REGISTRADO</li>
                    </ul>
                </div>
            @endif
            <div class="row">
                
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Lista de inscritos Taller</h4>
                        </div>
                    </div>
                    <br>
                    <table id="studentTable" class="table table-striped table-bordered dt-responsive small" style="width: 100%">
                        <thead class="thead-inverse">
                        <tr>
                            <th>ID#</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Taller</th>
                            <th>Costo</th>
                            <th>Accion</th>
<th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listas as $key => $lista)
                            <tr>
                                <td>{{$lista->id}}</td>
                                <td style="text-transform: uppercase">{{$lista->nombre}}</td>
                                <td style="text-transform: uppercase">{{$lista->apellido}}</td>
                                <td>{{$lista->taller}}</td>
                                <td>{{$lista->precio}}</td>
<td>{{$lista->celular}}</td>
                                <td>
                                   
                                <button type="button" data-id="{{$lista->id}}" data-toggle="modal" data-target="#showInscritoTallerModal" class="btn btn-outline-primary btn-sm read-inscrito-modal">
                                        <i class="fa fa-eye"></i></button>
                                <button type="button"  data-id="{{$lista->id}}" data-toggle="modal" data-target="#editInscritoTallerModal" class="btn btn-outline-warning btn-sm edit-inscrito-modal" >
                                        <i class="fa fa-pencil"></i></button>
 <a class="btn btn-primary btn-xs" href="{{url("/admin/reporte/taller/imprimir/{$lista->id}")}}" ><span class="glyphicon glyphicon-pencil"></span>Imprimir</a>


                                </td>
                            </tr>
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
    
    
    
    <script>

        $(document).ready(function () {
            var studentTable = $('#studentTable').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis'],
                language: {
                    "search":'Buscar'
                }
            });

            studentTable.buttons().container()
                .appendTo('#studentTable_wrapper .col-md-6:eq(0)');
            console.log()
        })

$("[name='taller']").on('change', function() {
            var taller=this.value;
            var tipo=$("[name='inscripcion']").val();
            console.log(tipo);
            if(taller==='Diseño e impresion 3D'){	
                if(tipo==='inscrito CIIS'){
                    $("[name='precio']").val('100');
                }
                else if(tipo==='No inscrito CIIS'){
                    $("[name='precio']").val('90');
                }	
                else if(tipo==='estudiante ESIS'){
                    $("[name='precio']").val('80');
                }
                else{

                }

            }
            else if(valor==='estudiante_esis'){
                $("[name='payEdit']").val('50');
            }
            else if(valor==='profesional'){
                $("[name='payEdit']").val('150');
            }
	    else if(valor==='egresado_esis'){
                $("[name='payEdit']").val('120');
            }
		else if(valor==='beca'){
                $("[name='payEdit']").val('0');
            }
		else if(valor==='semibeca_profesional'){
                $("[name='payEdit']").val('75');
            }
		else if(valor==='semibeca_estudiante'){
                $("[name='payEdit']").val('50');
            }
		else if(valor==='docente_esis'){
                $("[name='payEdit']").val('100');
            }

            else if(valor==='delegacion1'){
                $("[name='payEdit']").val('80');
            }
            else if(valor==='delegacion2'){
                $("[name='payEdit']").val('85');
            }
            else if(valor==='delegacion3'){
                $("[name='payEdit']").val('90');
            }
            else if(valor==='delegacion4'){
                $("[name='payEdit']").val('95');
            }
else if(valor==='agosto'){
                $("[name='payEdit']").val('80');
            }

            else{

            }
        })


            $(".read-inscrito-modal").on("click",function (e) {
            let id = $(this).data("id");
            console.log(id)
            swal({
                type: 'info',
                title: 'Cargando ...',
                showCancelButton: false,
                showConfirmButton: false
            });
            swal.showLoading();
            $.ajax({
                url: '/admin/reporte/taller/mostrar/' + id,
                type: 'GET',
                success: function (data) {
                    $("[name='nombreShow']").val(data.nombre)
                    $("[name='apellidoShow']").val(data.apellido)
                    $("[name='celularShow']").val(data.celular)
                    $("[name='institucionShow']").val(data.institucion)
                    $("[name='tallerShow']").val(data.taller)
                    $("[name='precioShow']").val(data.precio)
$("[name='cobradorShow']").val(data.last_user_modificied)
                    $("[name='inscripcionShow']").val(data.tipo_inscripcion)
                    swal({
                        type: 'success',
                        title: 'Datos cargados',
                        showCancelButton: false,
                        showConfirmButton: false
                    });
                    swal.close();
                    swal.hideLoading();
                    console.log(data)
                    $('#showInscritoTallerModal').modal('show')
                },
                error: function (e) {
                    console.log(e);
                    swal({
                        type: 'error',
                        title: 'Un error a ocurrido',
                    });
                }
            })
        })
        //aqui la funcion editar
        $(".edit-inscrito-modal").on("click",function (e) {
            let id = $(this).data("id");
            console.log(id)
            swal({
                type: 'info',
                title: 'Cargando ...',
                showCancelButton: false,
                showConfirmButton: false
            });
            $.ajax({
                url: '/admin/reporte/taller/mostrar/' + id,
                type: 'GET',
                success: function (data) {
                    $('#editInscritoTallerModal form').attr('action','/admin/reporte/taller/' + data.id);
                    $("[name='nombreEdit']").val(data.nombre)
                    $("[name='apellidoEdit']").val(data.apellido)
                    $("[name='celularEdit']").val(data.celular)
                    $("[name='institucionEdit']").val(data.institucion)
                    $("[name='tallerEdit']").val(data.taller)
                    $("[name='precioEdit']").val(data.precio)
                    $("[name='inscripcionEdit']").val(data.tipo_inscripcion)
$("[name='cobradorEdit']").val(data.last_user_modificied)
                    swal({
                        type: 'success',
                        title: 'Datos cargados',
                        showCancelButton: false,
                        showConfirmButton: false
                    });
                    swal.hideLoading();
                    swal.close();
                    console.log(data)
                    $('#editInscritoTallerModal').modal('show')
                },
                error: function (e) {
                    console.log(e);
                    swal({
                        type: 'error',
                        title: 'Un error a ocurrido',
                    });
                }
            })
        })

    </script>
    

@endsection

@section('modal')
    @include('backend.inscritos.includes.registerTaller')
    @include('backend.inscritos.includes.showtaller')
    @include('backend.inscritos.includes.editTaller')
@endsection