<!-- ADD INSCRITO MODAL -->
<div class="modal fade" id="editInscritoConcursoModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editInscritoConcursoModalLabel">Editar una Inscripcion Concurso</h5>
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
                        <label for="typeEdit" class="form-control-label">Concurso de Inscripcion</label>
                        <select class="form-control" name="concursoEdit">
                            <option value="Conocimientos">Concurso de Conocimientos</option>
                            <option value="Robotica">Concurso de Robotica</option>
                            <option value="Programacion">Concurso de Programacion</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cityEdit" class="form-control-label">Precio</label>
                        <input type="text" name="precioEdit" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="tipoincripcion" class="form-control-label">Tipo de Inscripcion</label>
                        <select class="form-control" name="tipoinscripcionEdit">
                            <option value="Inscrito CIIS">Inscrito CIIS</option>
                            <option value="No Inscript CIIS">No inscrito CIIS</option>
                            <option value="Estudiante ESIS">Estudiante ESIS</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="integrantesEdit" class="form-control-label">Integrantes de Equipo</label>
                        <textarea type="text" name="integrantesEdit" class="form-control"></textarea>
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