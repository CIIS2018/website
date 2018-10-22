@extends('backend.layouts.app')

@section('title',"Sistema de Reporte de Estudiantes Registrados")

@section('after-styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap4.min.css">
@endsection

@section('header')
    @include('backend.includes.header')
@endsection

@section('content')
    <!-- Errors-->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <!-- dependences -->
    <section id="dependences">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h4>Estudiantes Registrados</h4>
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
                            <th>Imagen</th>
                            <th>Celular</th>
                            <th>QR</th>
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
                                <td> <button class="image-student" data-toggle="modal" data-target="#myModal{{$student->id}}">Ver Imagen</button></td>
                                <td>{{$student->celular}}</td>
                                <td><button>Ver QR</button></td>
                                <td><button class="confirmate-student" data-id="{{$student->id}}">Confirmar</button></td>

                            </tr>


                            <div class="modal" id="myModal{{$student->id}}">
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
                            </div>
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
    <script type="text/javascript">

        $(document).ready(function () {
            var studentTable = $('#studentTable').DataTable({
                lengthChange: false,
            });
            console.log()
        })
        
        
        $(".confirmate-student").on("click",function (e) {
            let idStudent = $(this).data("id");
            console.log(idStudent)
            $.ajax({
                url: '/admin/registrados/confirmar/' + idStudent,
                type: 'GET',
                success: function (data) {
                    console.log('correo enviado',data);
                },
                error: function (e) {
                    console.log(e);
                }
            })
            
        })
    </script>


@endsection