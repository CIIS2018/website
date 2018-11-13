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
                            <th>Instituci�n</th>
			    <th>Tipo</th>
                            <th>Pago</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($inscritos as $key => $inscrito)
                            <tr>
                                <td>{{$inscrito->id}}</td>
                                <td style="text-transform: uppercase">{{$inscrito->nombre}}</td>
                                <td style="text-transform: uppercase">{{$inscrito->apellido}}</td>
                                <td>{{$inscrito->institucion}}</td>
				<td>{{$inscrito->tipo_inscripcion}}</td>

                                <td>{{$inscrito->pago}}</td>
				
                                <td>
                                    <button type="button" data-id="{{$inscrito->id}}" class="btn btn-outline-primary btn-sm read-inscrito-modal">
                                        <i class="fa fa-eye"></i></button>
                                    <button type="button" data-id="{{$inscrito->id}}"  class="btn btn-outline-warning btn-sm edit-inscrito-modal">
                                        <i class="fa fa-pencil"></i></button>
 <a class="btn btn-primary btn-xs" href="{{action('InscritosController@imprimir', $inscrito->id)}}" ><span class="glyphicon glyphicon-pencil"></span>Imprimir</a>

                                    <button type="button" data-id="{{$inscrito->id}}" class="btn btn-outline-success btn-sm confirmate-student">
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
$( "[name='monto']" ).keyup(function() {
  $monto=this.value;
	$tipo=$("[name='pay']").val();
$vuelto=$monto-$tipo;
	 $("[name='vuelto']").val($vuelto);
});

        $("[name='typeEdit']").on('change', function() {
            var valor=this.value;
            console.log(valor);
            // var cien=100;
            if(valor==='estudiante'){
                $("[name='payEdit']").val('100');
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


        $('#texto_test').on('change', function() {
//   alert( this.value );
            var valor=this.value;
            console.log(valor);
            if(valor==='estudiante'){
                $("[name='pay']").val('100');
            }
            else if(valor==='estudiante_esis'){
                $("[name='pay']").val('50');
            }
            else if(valor==='profesional'){
                $("[name='pay']").val('150');
            }
else if(valor==='egresado_esis'){
                $("[name='pay']").val('120');
            }
else if(valor==='beca'){
                $("[name='pay']").val('0');
            }
else if(valor==='semibeca_profesional'){
                $("[name='pay']").val('75');
            }

else if(valor==='semibeca_estudiante'){
                $("[name='pay']").val('50');
            }

else if(valor==='docente_esis'){
                $("[name='pay']").val('100');
            }

            else if(valor==='delegacion1'){
                $("[name='pay']").val('80');
            }
            else if(valor==='delegacion2'){
                $("[name='pay']").val('85');
            }
            else if(valor==='delegacion3'){
                $("[name='pay']").val('90');
            }
            else if(valor==='delegacion4'){
                $("[name='pay']").val('95');
            }
 else if(valor==='agosto'){
                $("[name='pay']").val('80');
            }

            else{

            }

$monto=$("[name='monto']").val();
	$tipo=$("[name='pay']").val();
$vuelto=$monto-$tipo;
	 $("[name='vuelto']").val($vuelto);

	

});

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


        $(".confirmate-student").on("click", function (e) {
            let idStudent = $(this).data("id");
            console.log(idStudent)
            swal('Enviando correo');
            swal.showLoading();
            $.ajax({
                url: '/admin/inscritos/confirmar/' + idStudent,
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
                url: '/admin/reporte/inscritos/mostrar/' + id,
                type: 'GET',
                success: function (data) {
                    $("[name='nameShow']").val(data.nombre)
                    $("[name='lastnameShow']").val(data.apellido)
                    $("[name='cityShow']").val(data.ciudad)
                    $("[name='codeShow']").val(data.codigo)
                    $("[name='descountShow']").val(data.descuento)
                    $("[name='dniShow']").val(data.dni)
                    $("[name='modeShow']").val(data.modo_pago)
                    $("[name='typeShow']").val(data.tipo_inscripcion)
                    $("[name='emailShow']").val(data.email)
                    $("[name='phoneShow']").val(data.celular)
                    $("[name='payShow']").val(data.pago)
                    $("[name='instituteShow']").val(data.institucion)
                    elementDynamically.getUser(data.user)

                    swal({
                        type: 'success',
                        title: 'Datos cargados',
                        showCancelButton: false,
                        showConfirmButton: false
                    });
                    swal.close();
                    swal.hideLoading();
                    console.log(data)
                    $('#showInscritoModal').modal('show')
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
                url: '/admin/reporte/inscritos/mostrar/' + id,
                type: 'GET',
                success: function (data) {
                    $('#editInscritoModal form').attr('action','/admin/reporte/inscritos/'+data.id);
                    $("[name='nameEdit']").val(data.nombre)
                    $("[name='lastnameEdit']").val(data.apellido)
                    $("[name='cityEdit']").val(data.ciudad)
                    $("[name='codeEdit']").val(data.codigo)
                    $("[name='descountEdit']").val(data.descuento)
                    $("[name='dniEdit']").val(data.dni)
                    $("[name='modeEdit']").val(data.modo_pago)
                    $("[name='typeEdit']").val(data.tipo_inscripcion)
                    $("[name='emailEdit']").val(data.email)
                    $("[name='phoneEdit']").val(data.celular)
                    $("[name='payEdit']").val(data.pago)
                    $("[name='instituteEdit']").val(data.institucion)
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
                    $('#editInscritoModal').modal('show')
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

            const getUser = function (user) {
                const userDivModal = document.getElementById('div-user-modal');
                if(userDivModal != null){
                    userDivModal.parentNode.removeChild(userDivModal);

                }
                if(user) {
                    const { name, email } = user;
                    console.log(name, email)
                    const userDiv = document.createElement('div');
                    userDiv.setAttribute('id','div-user-modal')
                    const nameElem = document.createElement('h5');
                    nameElem.textContent = 'Ultimo usuario que modifico ' + name + ' con email ' + email;
                    userDiv.appendChild(nameElem);
                    document.querySelector("#editar_inscrito").parentNode.parentNode.append(userDiv)
                }
            }
            return {
                getUser
            }

        }()

    </script>


@endsection

@section('modal')
    @include('backend.inscritos.includes.register')
    @include('backend.inscritos.includes.show')
    @include('backend.inscritos.includes.edit')

@endsection