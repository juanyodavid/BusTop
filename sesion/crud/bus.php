<?php session_start();
    if(isset($_SESSION['usuario'])){
    }else{
        header ('location: login.php');
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>BOLETT</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/custom.css"><!-- hasta aca carga las librerias -->
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2> <b>Buses</b></h2>
					</div>
					<div class="col-sm-6">
                        <a href="../cerrar.php" class="btn btn-danger" data-toggle="modal"><i class="material-icons">power_settings_new</i> <span>Cerrar sesión</span></a>
						<a href="../principal.php" class="btn btn-warning" data-toggle="modal"><i class="material-icons">keyboard_backspace</i> <span>Atrás</span></a>
                        <a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar</span>
                        </a>
					</div>
                </div>
            </div>
			<div class='col-sm-3 pull-right'>
				<div id="custom-search-input">
                            <div class="input-group col-md-12">
                                <input type="text" class="form-control" placeholder="Buscar"  id="q" onkeyup="load(1);" />
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="button" onclick="load(1);">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                </div>
			</div>
		      <div class='col-sm-4-8 '>
                <a href="boleto.php" class="btn btn-light" role="button">Boletos</a>
                <a href="destino.php" class="btn btn-light" role="button">Destinos</a>         
               
            </div>
			<div class='clearfix'></div>
			<hr>
			<div id="loader"></div><!-- Carga de datos ajax aqui -->
			<div id="resultados"></div><!-- Carga de datos ajax aqui -->
			<div class='outer_div'></div><!-- Carga de datos ajax aqui -->
        </div>
    </div>
	<!-- Edit Modal HTML -->
	<?php include("html/bus_crud/modal_add.php");?>
	<!-- Edit Modal HTML -->
	<?php include("html/bus_crud/modal_edit.php");?>
	<!-- Delete Modal HTML -->
	<?php include("html/bus_crud/modal_delete.php");?>
	<script src="js/bus_script.js"></script>
</body>
</html>