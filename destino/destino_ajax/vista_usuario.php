<?php
	
	/* Connect To Database*/
require_once ("../conexion.php");// conecta con la base de datos


// Esto evaluará a TRUE así que el texto se imprimirá.

    $test = 'salida_dia DESC';

$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';// en la variable accion se pregunta si se realizo alguna accion
if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));
    
    


	$tables="destino";
	$campos="*";
	$sWhere=" destino.destino LIKE '%".$query."%'"; // los ampersand hacen que sea una busqueda en toda la palabra y no solo el inicio
	$sWhere.=" order by destino.".$test;
	
	
	
	include 'pagination.php'; //include pagination file
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = intval($_REQUEST['per_page']); //how much records you want to show
	$adjacents  = 4; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	//Count the total number of row in your table
	$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
	if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
	else {echo mysqli_error($con);}
	$total_pages = ceil($numrows/$per_page);
	//main query to fetch the data
	$query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
	//loop through fetched data
	if ($numrows>0){
		
	?>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class='text-center'>Destino </th>
						<th class='text-center'>Rutas </th>
						<th class='text-center'>Precio </th>
						<th class='text-center'>Día de salida </th>
						<th class='text-center'>Hora de salida</th>
						<th class='text-center'>Bus</th>
						
					
					</tr>
				</thead>
				<tbody>	
						<?php 
						$finales=0;
						while($row = mysqli_fetch_array($query)){	
							$estado=$row['estado'];
							if ($estado==1) {
							$compra_id=$row['id_destino'];
							$nombre=$row['destino'];
							$ruci=$row['rutas'];
							$observacion=$row['precio'];
							$origen=$row['salida_dia'];
							$destino=$row['salida_hora'];						
							$asiento=$row['id_bus'];						
												
							$finales++;
						?>	
						<tr >
							<td class='text-center'><?php echo $nombre;?></td>
							<td class='text-center'><?php echo $ruci;?></td>
							<td class='text-center'><?php echo $observacion.' Gs'.'';?></td>
							<td class='text-center'><?php echo $origen;?></td>
							<td class='text-center'><?php echo $destino;?></td>
							<td class='text-center'><?php   $query2 =mysqli_query($con,"SELECT  chapa FROM bus WHERE id_bus =".$asiento."");
         						 while ($valores = mysqli_fetch_array($query2)) {echo $valores['chapa'];	}
          						?></td>
							
						<?php }}?>
						<tr>
							<td colspan='10'> 
								<?php 
									$inicios=$offset+1;
									$finales+=$inicios -1;
									
									echo paginate( $page, $total_pages, $adjacents);
								?>
							</td>
						</tr>
				</tbody>			
			</table>
		</div>	

	
	
	<?php	
	}	
}
?>          