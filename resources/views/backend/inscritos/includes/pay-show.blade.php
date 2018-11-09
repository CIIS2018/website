<!-- ADD PAY MODAL -->
<div class="modal fade" id="editPayModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="editPayModalLabel">Editar el pago</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method='POST' action="" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nameEditPay" class="form-control-label">Nombre de la persona</label>
                            <input type="text" name="nameEditPay" class="form-control" disabled>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="lastnameEditPay" class="form-control-label">Apellido de la persona</label>
                            <input type="text" name="lastnameEditPay" class="form-control" disabled>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="payEditPay" class="form-control-label">Pago de la persona</label>
                            <input type="text" name="payEditPay" class="form-control">
                        </div>
                      
                    </div>
                    
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit" id="editar_inscrito_pay">Editar Pago</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>