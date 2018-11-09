<!-- ADD INSCRITO MODAL -->
<div class="modal fade" id="editInscritoTallerModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editInscritoTallerModalLabel">Editar una Inscripcion Taller</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method='POST' action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nameEdit" class="form-control-label">Nombre de la persona</label>
                        <input type="text" name="nombreEdit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lastnameEdit" class="form-control-label">Apellido de la persona</label>
                        <input type="text" name="apellidoEdit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="dniEdit" class="form-control-label">Celular de la persona</label>
                        <input type="text" name="celularEdit" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="phoneEdit" class="form-control-label">Institución de la persona</label>
                        <input type="text" name="institucionEdit" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="typeEdit" class="form-control-label">Taller de Inscripcion</label>
                        <select class="form-control" name="tallerEdit">
                        <option value="Diseño e impresion 3D">Diseño e impresion 3D</option>
                            <option value="Drones DJI">Drones DJI</option>
                            <option value="SNAPR movil con GPS y Magnetometro">SNAPR movil con GPS y Magnetometro</option>
                            <option value="Introduccion a la Robotica">Introduccion a la robotica</option>
                            <option value="Machine Learning con Python">Machine Learning con python</option>
                            <option value="Brasil">ciencias de la computacion(brasil)</option>
                            <option value="Frances">ciencias de la computacion(frances)</option>
                            <option value="Instalacion y configuracion de camara de videovigilancia">Instalacion y configuracion de camara de videovigilancia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cityEdit" class="form-control-label">Precio</label>
                        <input type="text" name="precioEdit" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="inscripciontaller" class="form-control-label">Tipo de inscripcion</label>
                        <select class="form-control" name="inscripcionEdit">
                            <option value="inscrito CIIS">inscrito CIIS</option>
                            <option value="No inscrito CIIS">No inscrito CIIS</option>
                            <option value="estudiante ESIS">estudiante ESIS</option>
                        </select>
                    </div>
                
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit">Editar Inscrito</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>