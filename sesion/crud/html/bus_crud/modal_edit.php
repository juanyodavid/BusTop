<div id="editProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="edit_product" id="edit_product">
					<div class="modal-header">						
						<h4 class="modal-title">Editar</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Chapa</label>
							<input type="text"   name="cliente_edit"  id="cliente_edit" class="form-control" required>
							<input type="hidden" name="edit_id" id="edit_id" >

						</div>
						<div class="form-group">
							<label>Nivel de confort</label>
							<input type="text"   name="ruci_edit" id="ruci_edit" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Cupo de pasajeros</label><br>
							

                            <label class="hide" ><input type="radio" name="origen_edit" id="origen_edit" value="0" required>Reservado</label>
                            <label class="radio-inline" ><input type="radio" name="origen_edit" id="origen_edit" value="42" required>42 Pasajeros</label>
<!--                             <label class="radio-inline" ><input type="radio" name="origen_edit" id="origen_edit" value="1" required>Comprado</label>
 -->                            
             
						</div>
						<div class="form-group">
							<label>Año de fabricación</label>
							<input type="year"   name="destino_edit" id="destino_edit" class="form-control" required>
						</div>
									
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>