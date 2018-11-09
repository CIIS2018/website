<!-- ADD INSCRITO MODAL -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" media="all" />


<div class="modal fade" id="editRegistradosModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editRegistradosModalLabel">Editar un registrado</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method='POST' action="" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="nameEdit" class="form-control-label">Nombre de la persona</label>
                            <input type="text" name="nameEdit" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label for="lastnameEdit" class="form-control-label">Apellido de la persona</label>
                            <input type="text" name="lastnameEdit" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="dniEdit" class="form-control-label">Dni de la persona</label>
                            <input type="text" name="dniEdit" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label for="celularEdit" class="form-control-label">Celular de la persona</label>
                            <input type="text" name="celularEdit" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        
                        <div class="form-group col-6">
                            <label for="cityEdit" class="form-control-label">Ciudad de la persona</label>
                            <input type="text" name="cityEdit" class="form-control">
                        </div>
    
                        <div class="form-group col-6">
                            <label for="payEdit" class="form-control-label">Pago de la persona</label>
                            <input type="text" name="payEdit" class="form-control">
                        </div>
                    </div>
                    
                    
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="instituteEdit" class="form-control-label">Institución de la persona</label>
                            <input type="text" name="instituteEdit" class="form-control">
                        </div>
                        <div class="form-group col-6">
                            <label for="emailEdit" class="form-control-label">Email de la persona</label>
                            <input type="text" name="emailEdit" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-6">
                            <label for="typeEdit" class="form-control-label">Tipo de Inscripcion</label>
                            <select class="form-control" name="typeEdit" >
                                
                                <option selected>Escoger </option>
                                <option value="profesional" >Profesional</option>
                                <option value="estudiante">Estudiante</option>
                                <option value="egresado_esis">Egresado Esis</option>
                                <option value="beca">Beca</option>
                                <option value="semibeca_profesional">Semibeca profesional</option>
                                <option value="semibeca_estudiante">Semibeca estudiante</option>
                                <option value="docente_esis">Docente Esis</option>
                                <option value="estudiante_esis">Estudiante Esis</option>
                                <option value="delegacion1" >Delegación 80</option>
                                <option value="delegacion2" >Delegación 85</option>
                                <option value="delegacion3" >Delegación 90</option>
                                <option value="delegacion4" >Delegación 95</option>
                            
                            </select>
                        
                        </div>
                        
                    </div>
                    
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit" id="editar_registrado">Editar Registrado</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>