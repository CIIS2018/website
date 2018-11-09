<!-- ADD INSCRITO MODAL -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" media="all" />
<div class="modal fade" id="showInscritoModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="showInscritoModalLabel">Visualizar detalles</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <div class="form-row">
                            <div class="form-group col-6">
                                    <label for="nameShow" class="form-control-label" >Nombre de la persona</label>
                                    <input type="text" name="nameShow" class="form-control" disabled>
                            </div>
                            <div class="form-group col-6">
                                    <label for="lastnameShow" class="form-control-label" >Apellido de la persona</label>
                                    <input type="text" name="lastnameShow" class="form-control" disabled>
                            </div>
                    </div>

                    <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="dniShow" class="form-control-label">Dni de la persona</label>
                                <input type="text" name="dniShow" class="form-control" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="codeShow" class="form-control-label">Codigo de la persona</label>
                                <input type="text" name="codeShow" class="form-control" disabled>
                            </div>
                    </div>

                    <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="phoneShow" class="form-control-label">Celular de la persona</label>
                                    <input type="text" name="phoneShow" class="form-control" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="cityShow" class="form-control-label">Ciudad de la persona</label>
                                    <input type="text" name="cityShow" class="form-control" disabled>
                            </div>
                    </div>

                     <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="instituteShow" class="form-control-label">Institución de la persona</label>
                        <input type="text" name="instituteShow" class="form-control" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="emailShow" class="form-control-label">Email de la persona</label>
                        <input type="text" name="emailShow" class="form-control" disabled>
                            </div>
                    </div>

                    <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="payShow" class="form-control-label">Pago de la persona</label>
                                    <input type="text" name="payShow" class="form-control" disabled>
                            </div>
                            <div class="form-group col-md-6">
                                    <label for="modeShow" class="form-control-label">Modo de pago</label>
                                    <select class="form-control" name="modeShow" disabled>
                                        <option value="miriam" selected>Miriam</option>
                                        <option value="web">Web</option>
                                    </select>
                            </div>
                    </div>

                    
                    <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label for="typeShow" class="form-control-label">Tipo de Inscripcion</label>
				<input type="text" name="typeShow" class="form-control" disabled>
                                                                </div>
                            <div class="form-group col-md-6">
                                    <label for="descountShow" class="form-control-label">Tipo de Descuento</label>
                        <select class="form-control" name="descountShow" disabled>
                            <option selected>Descuento</option>
                            <option value="beca">Beca</option>
                            <option value="semibeca">Semibeca</option>
                        </select>
                            </div>
                    </div>                    
                    
                    
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>