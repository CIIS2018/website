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