<!-- ADD INSCRITO MODAL -->
<div class="modal fade" id="addInscritoConcursoModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addInscritoConcursoModalLabel">Agregar una Inscripcion Concurso</h5>
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
                        <input type="text" name="institucion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tipoconcurso" class="form-control-label">Tipo de Concurso</label>
                        <select class="form-control" name="concurso">
                            <option selected>concurso</option>
                            <option value="Conocimientos">Concurso de Conocimientos</option>
                            <option value="Robotica">Concurso de Robotica</option>
                            <option value="Programacion">Concurso de Programacion</option>
                        </select>
                    </div>
        
                    <div class="form-group">
                        <label for="pay" class="form-control-label">Pago de la persona</label>
                        <input type="text" name="precio" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tipoincripcion" class="form-control-label">Tipo de Inscripcion</label>
                        <select class="form-control" name="tipoinscripcion">
                            <option selected>Modo de Inscripcion</option>
                            <option value="Inscrito CIIS">Inscrito CIIS</option>
                            <option value="No Inscript CIIS">No inscrito CIIS</option>
                            <option value="Estudiante ESIS">Estudiante ESIS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="integrantes" class="form-control-label">Integrantes del Equipo</label>
                        <textarea type="text" name="integrantes" class="form-control"></textarea>
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