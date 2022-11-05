<?php
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
	$cliente = mysqli_real_escape_string($con,(strip_tags($_POST["cliente_edit"],ENT_QUOTES)));
	$ruci = mysqli_real_escape_string($con,(strip_tags($_POST["ruci_edit"],ENT_QUOTES)));
	$origen = mysqli_real_escape_string($con,(strip_tags($_POST["origen_edit"],ENT_QUOTES)));
	$destino = mysqli_real_escape_string($con,(strip_tags($_POST["destino_edit"],ENT_QUOTES)));
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
    $sql = "UPDATE bus SET chapa='".$cliente."',nivel='".$ruci."',cant_pas='".$origen."',anho='".$destino."'WHERE id_bus='".$id."' ";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "Actualización exitosa.";
    } else {
        $errors[] = "Actualización fallida.";
    }
		
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