<?php
	if (empty($_POST['cliente_add'])){
		$errors[] = "Ingresa el nombre del producto.";
	} 
	elseif (!empty($_POST['cliente_add'])){
	require_once ("../../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) editor_nombre
   	$cliente = mysqli_real_escape_string($con,(strip_tags($_POST["cliente_add"],ENT_QUOTES)));
	$ruci = mysqli_real_escape_string($con,(strip_tags($_POST["ruci_add"],ENT_QUOTES)));
	$origen = mysqli_real_escape_string($con,(strip_tags($_POST["origen_add"],ENT_QUOTES)));
	$destino = mysqli_real_escape_string($con,(strip_tags($_POST["destino_add"],ENT_QUOTES)));
	$asiento = mysqli_real_escape_string($con,(strip_tags($_POST["asiento_add"],ENT_QUOTES)));
	$vehi = mysqli_real_escape_string($con,(strip_tags($_POST["vehi_add"],ENT_QUOTES)));
	

	// REGISTER data into database
    $sql = "INSERT INTO destino(id_destino, destino, rutas,precio, salida_dia, salida_hora, id_bus) VALUES (NULL,'$cliente','$ruci','$origen','$destino','$asiento','$vehi')";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "Carga exitosa.";
    } 
		else {
        $errors[] = "Carga fallida.";        }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>Concretada.</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
?>