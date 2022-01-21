	<?php 
		 
		require ('include/header.php');


        $id=isset($_GET['id']) ?  $_GET['id'] : '';
        $token=isset($_GET['token']) ?  $_GET['token'] : '';

        if($id =='' || $token == ''){
        	echo '<br><br><br><div class="alert alert-"> Error al prosesar la petición</div>';
        	exit;
        }else{
        	$token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

        	if($token_tmp ==  $token){

        	} else {
        		echo '<br><br><br><div class="alert alert-"> Error al prosesar la petición</div>';
        	exit;
        	}
        }

        $sql1 ="SELECT * FROM producto where id=$id";
        $consulta1 = mysqli_query($conexion, $sql1);
        while($row = mysqli_fetch_array($consulta1)){
        	$img1 = $row['img1'];
        	$img2 = $row['img2'];
        	$img3= $row['img3'];
        	$nombre = $row['nombre'];
        	$descripcion = $row['descripcion'];
        	$precio = $row['precio'];
        	$descuento = $row['descuento'];
        	$presentacion = $row['presentacion'];
        	$precio_des = $precio -(($precio * $descuento) / 100);

            
    ?>
    <link rel="stylesheet" type="text/css" href="css/carrusel.css">

	<br><br><br><br><br><br>

	<!-- detalles -->
	<div class="container">
		<div class="row">
			<div class="col-md-6 order-md-1 text-center">

				<div class="carousel-frame">
					  <div class="carousel-slide">
					  	<!-- <img src="productimages/1/p3.png" width="300px" height="400px"> -->
					    <img src="productimages/1/p1.png" width="300px" height="400px">
					    <img src="productimages/1/p2.png" width="300px" height="400px">
					    <img src="productimages/1/p3.png" width="300px" height="400px">
					  </div>
					  <i class="carousel-prev fas fa-chevron-left"></i>
					  <i class="carousel-next fas fa-chevron-right"></i>
					  <ol class="carousel-dots">
					    <li></li>
					    <li></li>
					    <li></li>
					  </ol>
				</div>




			</div>
			<div class="col-md-6 order-md-2">
				<div class="inner-column text-center">
						<h1><?php echo $nombre; ?></h1>
						<?php if($descuento > 0){ ?>

							<p><h4><del><?php echo MONEDA.number_format($precio, 2, '.',',')?></del></h4></p>
							<p><h2><?php echo MONEDA.number_format($precio_des, 2, '.',',')?><small class="text-success"> <?php echo $descuento;?>% descuento. </small></h2></p>

						<?php }else{ ?>

						<p><?php echo MONEDA.number_format($precio, 2, '.',',')?></p>
						<?php } ?>

						<h4>Descripcion del producto:</h4>
						<p> <?php echo $descripcion;?></p>
						
						<h4>presentacion:</h4>
						<p><?php echo $presentacion."Kg"; ?></p>

						<div class="d-grid gap-3 col-10 mx-auto">
							<button class="btn btn-lg btn-circle btn-outline-new-white" href="#">Comprar</button>
							<button class="btn btn-lg btn-circle btn-outline-new-white" type="button" onclick="addProducto(<?php echo $id;?>, '<?php echo $token_tmp; ?>')">Agregar al carrito</button>
						</div>
						
					</div>
			</div>
		</div>
	</div>

	<?php } ?>

	
	

	</body>
<br><br><br><br>
	<?php include 'include/footer.php' ?>
    <script>
            function addProducto(id, token) {
	            let url = 'classes/carrito.php'
	            let formData = new FormData()
	            formData.append('id', id)
	            formData.append('token', token)

	            fetch(url, {
	                method: 'POST',
	                body: formData,
	                mode: 'cors'
	            }).then(response => response.json())
	            .then(data =>{
	                if(data.ok){
	                    let elemento = document.getElementById("num_cart")
	                    elemento.innerHTML = data.numero;
	                    alert("Agregado al carrito");
	                }
	            })
	        }
	        
    </script>

	<!-- carrusel -->
	<script src="https://kit.fontawesome.com/42e3e833b9.js" crossorigin="anonymous"></script>
	<script src="js/carrusel.js"></script>
	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>

</html>