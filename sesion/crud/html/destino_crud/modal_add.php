<?php  require_once ("conexion.php"); ?>
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
							<label>Destino</label>
							<input type="text" step="any" name="cliente_add"  id="cliente_add" class="form-control" required>
							
						</div>
						<div class="form-group">
							<label>Rutas</label>
							<input type="text" step="any" name="ruci_add" id="ruci_add" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Precio (en guaranies)</label>
							<input type="number" step="any" name="origen_add" id="origen_add" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Fecha de salida</label>
							<input type="date" step="any" name="destino_add" id="destino_add" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Hora de salida</label>
							<input type="time"  name="asiento_add" id="asiento_add" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Bus</label>
							<select
							 type="number" step="any" name="vehi_add" id="vehi_add" class="form-control" required>
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
						<input type="submit" class="btn btn-success" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>