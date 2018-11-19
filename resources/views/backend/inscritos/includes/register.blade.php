<!-- ADD INSCRITO MODAL -->
<div class="modal fade" id="addInscritoModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addInscritoModalLabel">Agregar una Inscripcion</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method='POST' action="{{route('report.inscritos')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name" class="form-control-label">Nombre de la persona</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname" class="form-control-label">Apellido de la persona</label>
                            <input type="text" name="lastname" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="dni" class="form-control-label">Dni de la persona</label>
                            <input type="text" name="dni" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone" class="form-control-label">Celular de la persona</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="code" class="form-control-label">Codigo de la persona</label>
                            <input type="text" name="code" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="city" class="form-control-label">Ciudad de la persona</label>
                            <input type="text" name="city" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="institute" class="form-control-label">Instituci贸n de la persona</label>
                            <input type="text" name="institute" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email" class="form-control-label">Email de la persona</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="pay" class="form-control-label">Pago de la persona</label>
                            <input type="text" name="pay" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mode" class="form-control-label">Modo de pago</label>
                                 <select class="form-control" name="mode">
                            <option value="miriam" selected>Miriam</option>
                            <option value="web">Web</option>
                            </select>
                        </div>
                    </div>

    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="type" class="form-control-label">Tipo de Inscripcion </label>
                        <select class="form-control" name="type" id="texto_test">
                            {{-- <option value="" selected disabled hidden>Escoger tipo de inscripcion</option> --}}
                            <option selected>Escoger </option>
                            <option value="profesional" >Profesional</option>
                            <option value="estudiante">Estudiante</option>
				<option value="egresado_esis">Egresado Esis</option>
			<option value="beca">Beca</option>
			<option value="semibeca_profesional">Semibeca profesional</option>
			<option value="semibeca_estudiante">Semibeca estudiante</option>
			<option value="docente_esis">Docente esis</option>
                            <option value="estudiante_esis">Estudiante esis</option>
                            <option value="delegacion1" >Delegaci贸n 80</option>
                            <option value="delegacion2" >Delegaci贸n 85</option>
                            <option value="delegacion3" >Delegaci贸n 90</option>
                            <option value="delegacion4" >Delegaci贸n 95</option>
 <option value="agosto" >Promo agosto</option>
 <option value="organizador" >Organizador</option>
<option value="profesional-UNA-delegacion" >Profesional UNA delegeacion</option>
<option value="da馻do" >Carnet perdido</option>


                        </select>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="descount" class="form-control-label">Tipo de Descuento</label>
                        <select class="form-control" name="descount">
                            <option selected>Descuento</option>
                            <option value="beca">Beca</option>
                            <option value="semibeca">Semibeca</option>
                        </select>
                        </div>
                    </div>                
                    

 <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="monto" class="form-control-label" style="color:red">Monto que pago</label>
                            <input type="text" name="monto" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="vuelto" class="form-control-label" style="color:red">Vuelto de la persona</label>
<input type="text" name="vuelto" class="form-control" disabled>
                                                             </select>
                        </div>
                    </div>

                    

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary" type="submit">Agregar Inscrito</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>