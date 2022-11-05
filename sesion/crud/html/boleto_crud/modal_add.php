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
							<label>Cédula</label>
							<input type="number" name="cria_add"  id="cria_add" class="form-control" required>
							
						</div>
                       
						 <div class="form-group">
							<label>Nombre</label>
							<input type="text" name="pelaje_add"  id="pelaje_add" class="form-control" required>
						</div>
                        <div class="form-group">
							<label>Apellido</label>
							<input type="text" name="carimbo_add"  id="carimbo_add" class="form-control" required>
							
						</div>
                        <div class="form-group">
							<label>Estado</label><br>
                            
                            <label class="radio-inline" ><input type="radio" name="fecha_add" id="fecha_add" value="0" required>Reservado</label>
                            <label class="radio-inline" ><input type="radio" name="fecha_add" id="fecha_add" value="1" required>Comprado</label>
                            
             
							
						</div>
                      	<div class="form-group">
							<label>Asiento</label>
							<input type="number" name="raza_add"  id="raza_add" class="form-control" required>
        						
						</div>
						
						 <div class="form-group">
							<label>Obs</label>
                            
                            <input type="text" name="estado_add" id="estado_add" class="form-control"  required>
						</div>
                        <div class="form-group">
							<label>Destino</label>
							<select name="padre_add"  id="padre_add" class="form-control" required>
        						<?php
        				         $query2 =mysqli_query($con,"SELECT * FROM destino");
         						 while ($valores = mysqli_fetch_array($query2)) {
         						 	if ($valores['estado']==1) {
         						 	
          							echo '<option value="'.$valores[id_destino].'">'.$valores[destino].' - '.$valores[precio].' gs - '.$valores[salida_dia].' - '.$valores[salida_hora].'</option>';
          						}}
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