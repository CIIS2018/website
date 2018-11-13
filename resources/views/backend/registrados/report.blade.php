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
            console.log()
 studentTable.buttons().container()
        .appendTo('#studentTable_wrapper .col-md-6:eq(0)');
            console.log()


        })
        
        $(".image-student-modal").on('click',function (e) {

            let id = $(this).data("id");
            console.log(id)
            swal({
                type: 'info',
                title: 'Cargando ...',
                showCancelButton: false,
                showConfirmButton: false
            });
            $.ajax({
                url: '/admin/reporte/registrados/mostrar/' + id,
                type: 'GET',
                success: function (data) {

                    console.log(data);

                    $('#modal-student-img-src').attr('src', '/public/uploads/voucher/' + data.imagen);
                    swal({
                        type: 'success',
                        title: 'Datos cargados',
                        showCancelButton: false,
                        showConfirmButton: false
                    });
                    swal.hideLoading();
                    swal.close();
                    console.log(data)
                    $('#modal-student-img').modal('show')
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
        
        $(".confirmate-student").on("click",function (e) {
            let idStudent = $(this).data("id");
            swal('Enviando correo');
            swal.showLoading();
            $.ajax({
                url: '/admin/registrados/confirmar/' + idStudent,
                type: 'GET',
                success: function (data) {
                    swal.hideLoading();
                    switch(data.status){
                        case 'OK': {
                            swal({
                                type: 'success',
                                title: 'Correo Enviado',
                            });
                            break;
                        }
                        case 'NOT_EMAIL':{
                            swal({
                                type: 'warning',
                                title: 'Se guardo en inscritos pero no envio email',
                            });
                            break;

                        }
                        case 'ERROR': {
                            swal({
                                type: 'warning',
                                title: 'Correo No Enviado',
                            });
                            break;

                        }
                        case 'EXIST': {
                            swal({
                                type: 'warning',
                                title: 'El estudiante ya esta en inscritos',
                            });
                            break;

                        }
                        default: {
                            swal({
                                type: 'error',
                                title: 'Error Desconocido',
                            });
                            break;
                        }
                    }
                },
                error: function (e) {
                    console.log('no enviado',e);
                    console.log(' ASD ASD ASD NO ENVIO');

                    swal({
                        type: 'error',
                        title: 'Correo No Enviado',
                    });
                }
            })
            
        })


        $(".edit-registrado-modal").on("click",function (e) {
            let id = $(this).data("id");
            console.log(id)
            swal({
                type: 'info',
                title: 'Cargando ...',
                showCancelButton: false,
                showConfirmButton: false
            });
            $.ajax({
                url: '/admin/reporte/registrados/mostrar/' + id,
                type: 'GET',
                success: function (data) {
                    
                    console.log(data);
                    
                    $('#editRegistradosModal form').attr('action','/admin/reporte/registrados/'+data.id);
                    $("[name='nameEdit']").val(data.nombre)
                    $("[name='lastnameEdit']").val(data.apellido)
                    $("[name='cityEdit']").val(data.ciudad)
                    $("[name='celularEdit']").val(data.celular)
                    $("[name='dniEdit']").val(data.dni)
                    $("[name='typeEdit']").val(data.tipo_inscripcion)
                    $("[name='emailEdit']").val(data.email)
                    $("[name='payEdit']").val(data.pago)
                    $("[name='instituteEdit']").val(data.instituto)

                    elementDynamically.getDebt(data)
                    elementDynamically.getUser(data.user)

                    swal({
                        type: 'success',
                        title: 'Datos cargados',
                        showCancelButton: false,
                        showConfirmButton: false
                    });
                    swal.hideLoading();
                    swal.close();
                    console.log(data)
                    $('#editRegistradosModal').modal('show')
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
        
        $('.registered-pago').on('click',function (e) {

            const { id } = this.dataset;
            
            swal({
                type: 'info',
                title: 'Cargando ...',
                showCancelButton: false,
                showConfirmButton: false
            });
            swal.showLoading();
            $.ajax({
                url: '/admin/reporte/registrados/mostrar/' + id,
                type: 'GET',
                success: function (data) {
                    $('#editPayModal form').attr('action','/admin/reporte/registrados/'+data.id+'/pago');
                    $("[name='nameEditPay']").val(data.nombre)
                    $("[name='lastnameEditPay']").val(data.apellido)
                    $("[name='payEditPay']").val(data.pago)
                    swal({
                        type: 'success',
                        title: 'Datos cargados',
                        showCancelButton: false,
                        showConfirmButton: false
                    });
                    swal.close();
                    swal.hideLoading();
                    console.log(data, 'xd')
                    $('#editPayModal').modal('show')
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
        
        const elementDynamically = function () {
           
            const getDebt = function (data) {
                const debt = document.getElementById('deuda-modal');
                if(debt != null){
                    debt.parentNode.removeChild(debt);
                }

                if(data.tipo_inscripcion === 'estudiante_esis'){
                    const debtTotal = 50 - data.pago;
                    const elem = document.createElement('h6');
                    elem.setAttribute('id','deuda-modal')
                    elem.textContent = 'Deuda ' + debtTotal;
                    document.querySelector("[name='payEdit']").parentNode.append(elem)
                }
            }
            
            const getUser = function (user) {
                const userDivModal = document.getElementById('div-user-modal');
                if(userDivModal != null){
                    userDivModal.parentNode.removeChild(userDivModal);

                }
                if(user) {
                    const { name, email } = user;
                    const userDiv = document.createElement('div');
                    userDiv.setAttribute('id','div-user-modal')
                    const nameElem = document.createElement('h5');
                    nameElem.textContent = 'Ultimo usuario que modifico ' + name + ' con email ' + email;
                    userDiv.appendChild(nameElem);
                    document.querySelector("#editar_registrado").parentNode.parentNode.append(userDiv)
                }
            }
            return {
                getDebt,
                getUser
            }
            
        }()
    </script>


@endsection

@section('modal')
    @include('backend.inscritos.includes.pay-show')
    @include('backend.registrados.includes.edit')
    @include('backend.registrados.includes.show-image')
@endsection