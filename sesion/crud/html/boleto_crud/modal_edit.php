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
					
                       
						<div class="form-group">
							<label>Cédula</label>
							<input type="number" name="cria_edit"  id="cria_edit" class="form-control" required>
							<input type="hidden" name="edit_id" id="edit_id" >
						</div>
                       
						 <div class="form-group">
							<label>Nombre</label>
							<input type="text" name="pelaje_edit"  id="pelaje_edit" class="form-control" required>
        						
			
						</div>
                        
                        <div class="form-group">
							<label>Apellido</label>
							<input type="text" name="carimbo_edit"  id="carimbo_edit" class="form-control" required>
							
						</div>
                        <div class="form-group">
							<label>Estado</label><br>
                            
                            <label class="hide" ><input type="radio" name="fecha_edit" id="fecha_edit" value="0" required>Reservado</label>
                            <label class="radio-inline" ><input type="radio" name="fecha_edit" id="fecha_edit" value="0" required>Reservado</label>
                            <label class="radio-inline" ><input type="radio" name="fecha_edit" id="fecha_edit" value="1" required>Comprado</label>
                            
             
							
						</div>
                      	<div class="form-group">
							<label>Asiento</label>
							<input type="number" name="raza_edit"  id="raza_edit" class="form-control" required>
        						
						</div>
						
						 <div class="form-group">
							<label>Obs</label>
                            
                            <input type="text" name="estado_edit" id="estado_edit" class="form-control"  required>
						</div>
                        <div class="form-group">
							<label>Destino</label>
							<select name="padre_edit"  id="padre_edit" class="form-control" required>
        						<?php
        				         $query2 =mysqli_query($con,"SELECT * FROM destino");
         						 while ($valores = mysqli_fetch_array($query2)) {
         						 	if ($valores['estado']==1) {
         						 	
          							echo '<option value="'.$valores[id_destino].'">'.$valores[destino].' - '.$valores[precio].' gs - '.$valores[salida_dia].' - '.$valores[salida_hora].'</option>';
          						}}
          						?>
      						</select>				
						</div>
						                         			
					</div></div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Guardar">
					</div>

				</form>
			</div>
		</div>
	</div>