$(function() {
			load(1);// este es el buscador de la variable
		});
		function load(page){// significa que se ejecuta al ser llamado este archivo ya que se ejecuta la funcion
			var query=$("#q").val(); // la variable "query" es el buscador y se llama #q (buscar en lote.php)
			var per_page=10; // declara esta variable con un valor de 10
			var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
			$("#loader").fadeIn('slow');
			$.ajax({
				url:'ajax/compra_ajax/vista_usuario.php ',
// <?php if (isset($_GET['var'])) {echo'ajax/lote_ajax/vista_usuario.php?var=4';} ?>
				data: parametros,
				 beforeSend: function(objeto){
				$("#loader").html("Cargando...");
			  },
				success:function(data){
					$(".outer_div").html(data).fadeIn('slow');
					$("#loader").html("");
				}
			})
		}
		$('#editProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var cliente_add = button.data('cliente_add') // crea la variable lote_add y la informacion lo guarda en el boton.data (LOTE_ADD)
		  $('#cliente_edit').val(cliente_add) //al editar en la posicion de lote add va a aparecer la que se cargo en lote_add
            // esto mismo sucede con las otras variables por eso no funcionaba fecha
		  var ruci_add = button.data('ruci_add') 
		  $('#ruci_edit').val(ruci_add)

		  var origen_add = button.data('origen_add') 
		  $('#origen_edit').val(origen_add)
		  
		  var destino_add = button.data('destino_add') 
		  $('#destino_edit').val(destino_add)
		  var asiento_add = button.data('asiento_add') 
		  $('#asiento_edit').val(asiento_add)
		  var vehi_add = button.data('vehi_add') 
		  $('#vehi_edit').val(vehi_add)
		  var iva_add = button.data('iva_add') 
		  $('#iva_edit').val(iva_add)
		  var ivatot_add = button.data('ivatot_add') 
		  $('#ivatot_edit').val(ivatot_add)
		  var agente_add = button.data('agente_add') 
		  $('#agente_edit').val(agente_add)
		  var importe_add = button.data('importe_add') 
		  $('#importe_edit').val(importe_add)
		  var fecha_add = button.data('fecha_add') 
		  $('#fecha_edit').val(fecha_add)
            
            var empresa_add = button.data('empresa_add') 
		  $('#empresa_edit').val(empresa_add)
            
		   var id = button.data('id') 
		  $('#edit_id').val(id)
		})
		
		$('#deleteProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('id') 
		  $('#delete_id').val(id)
		})
		
		
		$( "#edit_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/compra_ajax/editar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#editProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});
		
		
		$( "#add_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/compra_ajax/guardar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#addProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});


	
		$( "#delete_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
			$.ajax({
					type: "POST",
					url: "ajax/compra_ajax/eliminar_producto.php",
					data: parametros,
					 beforeSend: function(objeto){
						$("#resultados").html("Enviando...");
					  },
					success: function(datos){
					$("#resultados").html(datos);
					load(1);
					$('#deleteProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});
