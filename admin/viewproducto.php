<?php include_once "includes/header.php"; ?>

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

<?php  

	if (!empty($_GET['idPro'])) {
		$idpr=$_GET['idPro'];
		$sql1 ="SELECT * FROM `producto` WHERE `id`='$idpr' ";
                $consultap = mysqli_query($conexion, $sql1);
		$cnt=1;
	}else{
		$idpr="";
		$cnt="";
	}

?>

<!-- Contenido de la página de inicio -->
<div class="container-fluid">

    <center>
        <!-- Page Heading -->
        <h1 class="h3 mb-4 tituloscafe "> <strong>Detalles del producto</strong> </h1>
        <!-- Button trigger modal -->
    </center>

<!-- asssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssa -->
 
<div class="container">
	<div class="row"  >	
 		<?php
        if($consultap->num_rows === 0) {
        ?>
        <p>no hay datos q mostrar</p>
        <?php
        } else {
            while($rowedit = mysqli_fetch_array($consultap)){
            $idp=$rowedit["id"];
            $nombre = $rowedit["nombre"];
            $categoria = $rowedit["categoria"];
            $descripcion = $rowedit["descripcion"];
            $precio = $rowedit["precio"];
            $presentacion = $rowedit["presentacion"];
            $Stock = $rowedit["Stock"];
            $descuento = $rowedit["descuento"];
            $img1 = $rowedit["img1"];
            $img2 = $rowedit["img2"];
            $img3 = $rowedit["img3"];
            ?>    
        <form style="width: 100%" action="control/producto.php" name="insertproduct" method="post" enctype="multipart/form-data" class="needs-validation" novalidate >

			<div class="form-row" align="center" > 
				<!-- Nombre (producto)-->
				<div class="col-md-6 mb-3">
			      <label for="validationCustom01" class="etiqueta">Nombre del producto</label>
			      <input type="text" class="form-control" id="validationCustom01" name="producto" placeholder="Ingresa el nombre del producto" disabled value=" <?php echo $nombre ?> "  style="text-align: center;">
			      <div class="invalid-feedback">
			        Ingresa el nombre del producto
			      </div>
			    </div>
				<!-- Nombre -->
				<!-- Categoria (categoria)-->
				<div class="col-md-6 mb-3">
			      <label for="validationCustom02" class="etiqueta">Categoria</label>
			      	<select class="form-control" id="validationCustom02" name="categoria"   disabled   style="text-align: center;">
					  	<option value="<?php echo htmlentities($categoria);?>"><?php echo htmlentities($categoria);?>
						</option>
						<?php $query=mysqli_query($conexion,"select * from categoria");
						while($row=mysqli_fetch_array($query)){
							if($categoria==$row['nombre'])
							{
								continue;
							}
							else{
							?>

						<option value="<?php echo $row['nombre'];?>"><?php echo $row['nombre'];?></option>
						<?php }} ?>
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
			      <input type="text" class="form-control" id="validationCustom03" name="presentacion" placeholder="ej. polvo, grano .. etc" disabled value=" <?php echo $presentacion ?> " style="text-align: center;">
			      <div class="invalid-feedback">
			        Ingresa la presentación
			      </div>
			    </div>
				<!-- Nombre -->
				<!-- Categoria (stock)-->
				<div class="col-md-6 mb-3">
			      <label for="validationCustom04" class="etiqueta">Disponibilidad de Producto</label>
			      	<select class="form-control" id="validationCustom04" name="stock"  disabled style="text-align: center;" >
					  	<option value="<?php echo htmlentities($Stock);?>"><?php echo htmlentities($Stock);?>
						</option>
						<?php 
							if($Stock=="En Stock"){
							?>
							<option value="Fuera de Stock">Fuera de Stock</option>
							<?php }  
							else{
							?>
							<option value="En Stock">En Stock</option>
							<?php } ?>
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
				    <textarea class="form-control" id="validationCustom07" rows="4" name="descri"  style="  pointer-events: none;" disabled>
				    	<?php echo htmlentities($descripcion);?>
				    </textarea>
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
					  <input type="text" class="form-control"  id="validationCustom05" name="precio"  disabled value=" <?php echo $precio ?> ">
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
			      		<input type="number" class="form-control"  id="validationCustom06" name="descuento"    value="<?php echo $descuento ?>" disabled style="text-align: center;">
					  <div class="input-group-prepend">
					    <span class="input-group-text">%</span>
					  </div>
					  <div class="invalid-feedback">
				        Ingresa un desceunto, si no hay descuento ingresa 0
				      </div>
					</div> 
			    </div>
				<!-- Categoria -->
				 
			</div>

			 
			<div class="form-row" align="center">
				<!-- img1 (img1)-->
				<div class="col-md-4 mb-3">
			      	<label  class="etiqueta"for="basicinput" >Imagen 01 del producto</label>
			      	<!--  
					<div class="controls">
					<input type="file"   id="productimage1" class="span8 tip" name="img1" disabled value="">
					</div>-->
					<div class="controls">
						<img src="../productimages/<?php echo htmlentities($idp);?>/<?php echo htmlentities($img1);?>" width="100" alt="Sin imagen"><br> 
					<!--  	<a href="updateimg.php?idp=<?php echo $idp;?>">Cambiar imagen</a>-->
					</div>
			    </div>

				<!-- img -->
				<!-- img2 (img2)-->
				<div class="col-md-4 mb-3">
			      	<label class="etiqueta" for="basicinput">Imagen 02 del producto</label>
			      	<!--  
					<div class="controls">
					<input type="file"   id="productimage2" class="span8 tip" name="img2" disabled value="">
					</div>-->
			       	<div class="controls">
						<img src="../productimages/<?php echo htmlentities($idp);?>/<?php echo htmlentities($img2);?>" width="100" alt="Sin imagen"><br> 
					<!--  	<a href="updateimg.php?idp=<?php echo $idp;?>">Cambiar imagen</a>-->
					</div>
			    </div>
				<!-- img -->
				<!-- img2 (img3)-->
				<div class="col-md-4 mb-3">
			      	<label class="etiqueta" for="basicinput">Imagen 03 del producto</label>
			      	<!--  
					<div class="controls">
					<input type="file"   id="productimage3" class="span8 tip" name="img3" disabled value="">
					</div>-->
			      	<div class="controls">
						<img src="../productimages/<?php echo htmlentities($idp);?>/<?php echo htmlentities($img3);?>" width="100" alt="Sin imagen"><br> 
					<!--  	<a href="updateimg.php?idp=<?php echo $idp;?>">Cambiar imagen</a>-->
					</div>
			    </div>
				<!-- img -->
			</div>
		</form>
		 <br><center style="width: 100%" >
			<hr>
			<div class="control-group" >
				<div class="controls">
					<!--  
					<button type="submit" name="editpro" class="botonp botonp1">Editar producto</button>-->
					<a href="editproducto.php?idPro=<?php echo $idp;?>" class="botonp botonp1">Editar producto</a>

					<a href="productos.php" class="botonp botonp5">Regresar</a>
				</div>
			</div></center>
            
            <?php } ?>                 
        <?php }?> <!-- fin del else -->
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
