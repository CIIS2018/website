@extends('backend.layouts.app')

@section('title',"Sistema de Reporte de Estudiantes Registrados")

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
                                <td>
                                   
                                <button type="button" data-id="{{$lista->id}}" data-toggle="modal" data-target="#showInscritoTallerModal" class="btn btn-outline-primary btn-sm read-inscrito-modal">
                                        <i class="fa fa-eye"></i></button>
                                <button type="button"  data-id="{{$lista->id}}" data-toggle="modal" data-target="#editInscritoTallerModal" class="btn btn-outline-warning btn-sm edit-inscrito-modal" >
                                        <i class="fa fa-pencil"></i></button>
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
    
    
    <script src="https://unpkg.com/sweetalert2@7.20.3/dist/sweetalert2.all.js"></script>
    <script>
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