@extends('backend.layouts.app')

@section('title',"Sistema de Reporte de Estudiantes Registrados")

@section('after-styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">
@endsection

@section('header')
    @include('backend.inscritos.includes.header')
@endsection

@section('content')
    
    
    <!-- dependences -->
    <section id="inscritos">
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
                            <h4>Lista de inscritos</h4>
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
                            <th>Codigo</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($inscritos as $key => $inscrito)
                            <tr>
                                <td>{{$inscrito->id}}</td>
                                <td style="text-transform: uppercase">{{$inscrito->nombre}}</td>
                                <td style="text-transform: uppercase">{{$inscrito->apellido}}</td>
                                <td>{{$inscrito->email}}</td>
                                <td>{{$inscrito->codigo}}</td>
                                <td>
                                    <button type="button" href="details.html" class="btn btn-outline-primary btn-sm">
                                        <i class="fa fa-eye"></i></button>
                                    <button type="button" href="details.html" class="btn btn-outline-warning btn-sm">
                                        <i class="fa fa-pencil"></i></button>
                                    <button type="button" href="details.html" data-id="{{$inscrito->id}}" class="btn btn-outline-success btn-sm confirmate-student">
                                        Email
                                    </button>
                                </td>
                            </tr>
                            
                            
                            {{--<div class="modal" id="myModal{{$student->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
            
                                        <div class="modal-header">
                                            <h4 class="modal-title">Imagen de la inscripcion</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
            
                                        <div class="modal-body">
                                            <img src="/public/uploads/voucher/{{$student->imagen}}" width="100%"   alt="">
                                        </div>
            
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
        
                                    </div>
                                </div>
                            </div>--}}
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
            });
            console.log()
        })

        $(".confirmate-student").on("click", function (e) {
            let idStudent = $(this).data("id");
            console.log(idStudent)
            swal('Enviando correo');
            swal.showLoading();
            $.ajax({
                url: '/admin/registrados/confirmar/' + idStudent,
                type: 'GET',
                success: function (data) {
                    swal.hideLoading();
                    console.log('correo enviado', data);
                    if (data.status === 'OK') {
                        swal({
                            type: 'success',
                            title: 'Correo Enviado',
                        });
                    }
                },
                error: function (e) {
                    console.log(e);
                    swal({
                        type: 'error',
                        title: 'Correo No Enviado',
                    });
                }
            })

        })
    </script>


@endsection

@section('modal')
    @include('backend.inscritos.includes.register')
@endsection