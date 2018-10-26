<!-- ADD INSCRITO MODAL -->
<div class="modal fade" id="editInscritoModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editInscritoModalLabel">Editar una Inscripcion</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method='POST' action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nameEdit" class="form-control-label">Nombre de la persona</label>
                        <input type="text" name="nameEdit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lastnameEdit" class="form-control-label">Apellido de la persona</label>
                        <input type="text" name="lastnameEdit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="dniEdit" class="form-control-label">Dni de la persona</label>
                        <input type="text" name="dniEdit" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="phoneEdit" class="form-control-label">Celular de la persona</label>
                        <input type="text" name="phoneEdit" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="codeEdit" class="form-control-label">Codigo de la persona</label>
                        <input type="text" name="codeEdit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="cityEdit" class="form-control-label">Ciudad de la persona</label>
                        <input type="text" name="cityEdit" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="instituteEdit" class="form-control-label">Institución de la persona</label>
                        <input type="text" name="instituteEdit" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="emailEdit" class="form-control-label">Email de la persona</label>
                        <input type="text" name="emailEdit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="payEdit" class="form-control-label">Pago de la persona</label>
                        <input type="text" name="payEdit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="modeEdit" class="form-control-label">Modo de pago</label>
                        <select class="form-control" name="modeEdit">
                            <option value="miriam" selected>Miriam</option>
                            <option value="web">Web</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="typeEdit" class="form-control-label">Tipo de Inscripcion</label>
                        <select class="form-control" name="typeEdit">
                            <option value="profesional" >Profesional</option>
                            <option value="estudiante">Estudiante</option>
                            <option value="esis">Esis</option>
                            <option value="delegacion" selected>Delegación</option>
                        
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="descountEdit" class="form-control-label">Tipo de Descuento</label>
                        <select class="form-control" name="descountEdit">
                            <option selected>Descuento</option>
                            <option value="beca">Beca</option>
                            <option value="semibeca">Semibeca</option>
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