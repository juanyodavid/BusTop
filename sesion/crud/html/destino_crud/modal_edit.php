<?php  require_once ("conexion.php"); ?>
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
							
						<label>Destino</label>
							<input type="text" name="cliente_edit"  id="cliente_edit" class="form-control" required>
							<input type="hidden" name="edit_id" id="edit_id" >
						</div>
						<div class="form-group">
							<label>Rutas</label>
							<input type="text" name="ruci_edit" id="ruci_edit" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Precio (en guaranies)</label>
							<input type="number" name="origen_edit" id="origen_edit" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Fecha de salida</label>
							<input type="date" name="destino_edit" id="destino_edit" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Hora de salida</label>
							<input type="time" name="asiento_edit" id="asiento_edit" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Bus</label>
							<select
							 type="number" step="any" name="vehi_edit" id="vehi_edit" class="form-control" required>
        						<?php
        				         $query2 =mysqli_query($con,"SELECT * FROM bus");
         						 while ($valores = mysqli_fetch_array($query2)) {
          							echo '<option value="'.$valores[id_bus].'">'.$valores[chapa].'</option>';
          						}
          						?>
      						</select>
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