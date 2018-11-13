<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" media="all" />


<!-- ADD INSCRITO MODAL -->
<div class="modal fade" id="addInscritoTallerModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addInscritoTallerModalLabel">Agregar una Inscripcion Taller</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method='POST'  enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        
                        <div class="form-group col-4">
                            <h5>Buscador por DNI</h5>
                        </div>
                        <div class="form-group col-4">
                            <input type="text" name="search-person-code" class="form-control">
                        </div>
                        <div class="form-group col-4">
                            <button class="btn btn-primary" type="button" id="search-person">Buscar Persona</button>
                        </div>
                    </div>
    
                    <hr />
                    <div class="form-group">
                        <label for="name" class="form-control-label">Nombre de la persona</label>
                        <input type="text" name="nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="form-control-label">Apellido de la persona</label>
                        <input type="text" name="apellido" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="cell" class="form-control-label">celular</label>
                        <input type="text" name="celular" class="form-control">
                    </div>
    
                    <div class="form-group">
                        <label for="institute" class="form-control-label">Institución de la persona</label>
                        <input type="text" name="instituto" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tipotaller" class="form-control-label">Tipo de Taller</label>
                        <select class="form-control" name="taller">
                            <option selected>Taller</option>
                            <option value="Diseño e impresión 3D">Diseño e impresión 3D</option>
                            <option value="Drones DJI">Drones DJI</option>
                            <option value="SNAPR móvil con GPS y Magnetometro">SNAPR móvil con GPS y Magnetometro</option>
                            <option value="Introducción a la Robótica">Introducción a la robótica</option>
                            <option value="Machine Learning con Python">Machine Learning con python</option>
                            <option value="CONSTRUCTING COOL APPLICATIONS IN THE DOMAIN OF IoT AND BLOCKCHAIN">CONSTRUCTING COOL APPLICATIONS IN THE DOMAIN OF IoT AND BLOCKCHAIN</option>
                            <option value="INTRODUCTION DU DIGITAL GEOMETRY AND SOME OPEN QUESTIONS
">INTRODUCTION DU DIGITAL GEOMETRY AND SOME OPEN QUESTIONS
</option>
                            <option value="Instalación y configuración de camara de videovigilancia">Instalación y configuración de cámara de videovigilancia</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="inscripciontaller" class="form-control-label">Tipo de inscripcion</label>
                        <select class="form-control" name="inscripcion">
                            <option selected>Tipo de inscripcion</option>
                            <option value="inscrito CIIS">inscrito CIIS</option>
                            <option value="No inscrito CIIS">No inscrito CIIS</option>
                            <option value="estudiante ESIS">estudiante ESIS</option>
                        </select>
                    </div>
        
                    <div class="form-group">
                        <label for="pay" class="form-control-label">Pago de la persona</label>
                        <input type="text" name="precio" class="form-control">
                    </div>
                    
                    
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit">Agregar Persona</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

    $("#search-person").on("click",function (e) {
        let id = $('[name="search-person-code"]').val()
        
        console.log(id)
        if(id==''){

            swal({
                type: 'warning',
                title: 'Completa el id',
            });
            return ;
        }
        swal({
            type: 'info',
            title: 'Cargando ...',
            showCancelButton: false,
            showConfirmButton: false
        });
        swal.showLoading();
        $.ajax({
            url: '/admin/reporte/registrados/buscar?code=' + id,
            type: 'GET',
            success: function (data) {
                $("[name='nombre']").val(data.nombre)
                $("[name='apellido']").val(data.apellido)
                $("[name='celular']").val(data.celular)
                $("[name='instituto']").val(data.institucion)
                swal({
                    type: 'success',
                    title: 'Datos cargados',
                    showCancelButton: false,
                    showConfirmButton: false
                });
                swal.close();
                swal.hideLoading();
                console.log(data)
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