<?php
	if (empty($_POST['cria_add'])){
		$errors[] = "Ingresa el nombre del producto.";
	} 
	elseif (!empty($_POST['cria_add'])){
	require_once ("../../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) editor_nombre
	$cria = mysqli_real_escape_string($con,(strip_tags($_POST["cria_add"],ENT_QUOTES)));
	$carimbo = mysqli_real_escape_string($con,(strip_tags($_POST["carimbo_add"],ENT_QUOTES)));
	$fecha = mysqli_real_escape_string($con,(strip_tags($_POST["fecha_add"],ENT_QUOTES)));
	$estado = mysqli_real_escape_string($con,(strip_tags($_POST["estado_add"],ENT_QUOTES)));
	$padre = mysqli_real_escape_string($con,(strip_tags($_POST["padre_add"],ENT_QUOTES)));
	$raza = mysqli_real_escape_string($con,(strip_tags($_POST["raza_add"],ENT_QUOTES)));
	$pelaje = mysqli_real_escape_string($con,(strip_tags($_POST["pelaje_add"],ENT_QUOTES)));
	

	// REGISTER data into database
    $sql = "INSERT INTO boleto(id_boleto, doc_pas , apellido, estado, obs,id_destino, asiento, nombre) VALUES (NULL,'$cria','$carimbo','$fecha','$estado','$padre','$raza','$pelaje')";
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