<div id="addProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="add_product" id="add_product">
					<div class="modal-header">						
						<h4 class="modal-title">Agregar</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Chapa</label>
							<input type="text" step="any" name="cliente_add"  id="cliente_add" class="form-control" required>
							
						</div>
						<div class="form-group">
							<label>Nivel de confort</label>
							<input type="text" step="any" name="ruci_add" id="ruci_add" class="form-control" required>
						</div>
						<div class="form-group">
						<label>Cupo de pasajeros</label><br>
                            <label class="radio-inline" ><input type="radio" name="origen_add" id="origen_add" value="42" required>42 Pasajeros</label>
<!--                             <label class="radio-inline" ><input type="radio" name="origen_add" id="origen_add" value="42" required>42 Pasajeros</label>
 -->                        
						</div>
						<div class="form-group">
							<label>Año de fabricación</label>
							<input type="year" step="any" name="destino_add" id="destino_add" class="form-control" required>
						</div>
					
										
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>