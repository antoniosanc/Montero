<?php include_once "includes/header.php"; ?>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<!-- Contenido de la página de inicio -->
<div class="container-fluid">

    <center>
        <!-- Page Heading -->
        <h1 class="h3 mb-4 tituloscafe "> <strong>Agrega un producto nuevo </strong> </h1>
        <!-- Button trigger modal -->
    </center>

<!-- asssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssa -->
 
<div class="container">
	<div class="row"  >		
		<form style="width: 100%" action="control/producto.php" name="insertproduct" method="post" enctype="multipart/form-data" class="needs-validation" novalidate >

			<div class="form-row" align="center">
				<!-- Nombre (producto)-->
				<div class="col-md-6 mb-3">
			      <label for="validationCustom01" class="etiqueta">Nombre del producto</label>
			      <input type="text" class="form-control" id="validationCustom01" name="producto" placeholder="Ingresa el nombre del producto" required>
			      <div class="invalid-feedback">
			        Ingresa el nombre del producto
			      </div>
			    </div>
				<!-- Nombre -->
				<!-- Categoria (categoria)-->
				<div class="col-md-6 mb-3">
			      <label for="validationCustom02" class="etiqueta">Categoria</label>
			      	<select class="form-control" id="validationCustom02" name="categoria"  required>
					  	<option value="">Seleccione categoria</option> 
						<?php $query=mysqli_query($conexion,"select * from categoria");
						while($row=mysqli_fetch_array($query)){?>
						<option value="<?php echo $row['nombre'];?>"><?php echo $row['nombre'];?></option>
						<?php } ?>
					</select>
			      <div class="invalid-feedback">
			        Seleccione una categoria
			      </div>
			    </div>
				<!-- Categoria -->
			</div>

			<div class="form-row" align="center">
				<!-- Nombre (presentacion)-->
				<div class="col-md-6 mb-3">
			      <label for="validationCustom03" class="etiqueta">Presentación del producto</label>
			      <input type="text" class="form-control" id="validationCustom03" name="presentacion" placeholder="ej. polvo, grano .. etc" required>
			      <div class="invalid-feedback">
			        Ingresa la presentación
			      </div>
			    </div>
				<!-- Nombre -->
				<!-- Categoria (stock)-->
				<div class="col-md-6 mb-3">
			      <label for="validationCustom04" class="etiqueta">Disponibilidad de Producto</label>
			      	<select class="form-control" id="validationCustom04" name="stock"  required>
					  	<option value="">Seleccionar</option>
						<option value="En Stock">En Stock</option>
						<option value="Fuera de Stock">Fuera de Stock</option>
					</select>
			      <div class="invalid-feedback">
			        Seleccione una categoria
			      </div>
			    </div>
				<!-- Categoria -->
			</div>

			<!-- Categoria (descri)-->
			<div class="form-row" align="center">
				<div class="col-md-12 mb-3">
				    <label for="validationCustom07" class="etiqueta">Descripción del producto</label>
				    <textarea class="form-control" id="validationCustom07" rows="4" name="descri" required ></textarea>
				     <div class="invalid-feedback">
					        Ingresa una descripción
					  </div>
				  </div>
			</div> 

			<div class="form-row " align="center">
				<!-- Categoria (precio)-->
				<div class="col-md-3 mb-3" style=" margin-left: 10% !important;">
					<label for="validationCustom05" class="etiqueta">Costo del producto</label>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text">$</span>
					  </div>
					  <input type="text" class="form-control"  id="validationCustom05" name="precio"  required>
					  <div class="invalid-feedback">
			        	Ingresa un precio
			      	</div>
					</div>	
				</div>
				<!-- Categoria -->
				<!-- Categoria (descuento)-->
				<div class="col-md-3 mb-3">
			      <label for="validationCustom06" class="etiqueta">Descuento del producto</label>
			      	<div class="input-group mb-3">
			      		<input type="number" class="form-control"  id="validationCustom06" name="descuento"  required>
					  <div class="input-group-prepend">
					    <span class="input-group-text">%</span>
					  </div>
					  <div class="invalid-feedback">
				        Ingresa un desceunto, si no hay descuento ingresa 0
				      </div>
					</div>
			    </div>
				<!-- Categoria -->
				<!-- Categoria (estado)-->
				<div class="col-md-3 mb-3">
			      <label for="validationCustom08" class="etiqueta">Estado del Producto</label>
			      	<select class="form-control" id="validationCustom08" name="estado"  required>
					  	<option value="">Seleccionar</option>
						<option value="activo">Activo</option>
						<option value="inactivo">Inactivo</option>
					</select>
			      <div class="invalid-feedback">
			        Seleccione una categoria
			      </div>
			    </div>
				<!-- Categoria -->
			</div>

			 
			<div class="form-row" align="center">
				<!-- img1 (img1)-->
				<div class="col-md-4 mb-3">
			      	<label  class="etiqueta"for="basicinput" >Imagen 01 del producto</label>
					<div class="controls">
					<input type="file"   id="productimage1" class="span8 tip" name="img1" required>
					</div>
			      <div class="invalid-feedback">
			        Ingresa una imagen
			      </div>
			    </div>
				<!-- img -->
				<!-- img2 (img2)-->
				<div class="col-md-4 mb-3">
			      	<label class="etiqueta" for="basicinput">Imagen 02 del producto</label>
					<div class="controls">
					<input type="file"   id="productimage2" class="span8 tip" name="img2" required>
					</div>
			      <div class="invalid-feedback">
			        Ingresa una imagen
			      </div>
			    </div>
				<!-- img -->
				<!-- img2 (img3)-->
				<div class="col-md-4 mb-3">
			      	<label class="etiqueta" for="basicinput">Imagen 03 del producto</label>
					<div class="controls">
					<input type="file"   id="productimage3" class="span8 tip" name="img3" required>
					</div>
			      <div class="invalid-feedback">
			        Ingresa una imagen
			      </div>
			    </div>
				<!-- img -->
			</div>

			<hr>
			<div class="control-group" align="center">
				<div class="controls">
					<button type="submit" name="newpro" class="botonp botonp1">Cargar Producto</button>
					<a href="productos.php" class="botonp botonp5">Regresar</a>
				</div>
			</div>
		</form> 
	</div>
</div>	 
<br>
<br>
 
<!-- asjhhahshshhsssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss -->

</div>
<!-- /.container-fluid -->

<?php include_once "includes/footer.php"; ?>
<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
	<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
