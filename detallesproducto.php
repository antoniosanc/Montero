	<?php include('include/header.php') ?>

	<!-- Start All Pages -->
	
		<br><br><br>

	<!-- End All Pages -->
	<?php
        $id=$_GET['id'];
        $sql1 ="SELECT * FROM producto where id=$id";
        $consulta1 = mysqli_query($conexion, $sql1);
        while($row = mysqli_fetch_array($consulta1)){
            
    ?>

	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<img src="productos/<?php echo $row['imagen'];?>" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						<h1><?php echo $row['nombre'] ?></h1>
						<h4>Descripcion del producto:</h4>
						<p> <?php echo $row['descripcion'] ?></p>
						<h4>Precio:</h4>
						<p><?php echo "$".$row['precio'].".00" ?></p>
						<h4>presentacion:</h4>
						<p><?php echo $row['presentacion']."Kg" ?></p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Comprar</a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- End About -->

	<?php } ?>


	<?php include 'include/footer.php' ?>
	
	<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

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
</body>
</html>