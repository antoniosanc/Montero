<?php include('include/header.php') ?>

	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Nuestros Productos</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
		<!-- Start productos -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">Todo</button>
							<?php 
			                    $sql1 = "SELECT * FROM `categoria` " ;
			                    $consulta1 = mysqli_query($conexion, $sql1);
			                    while($row = mysqli_fetch_array($consulta1)){
			                    $categoria = $row['nombre'];
			         			$categoria=str_replace(" ",'',$categoria);
			                ?>
								
								<button data-filter=".<?php echo $categoria; ?>"><?php echo $row['nombre'];?></button>

							<?php } ?>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				<?php 
			         $sql1 = "SELECT * FROM `producto` " ;
			         $consulta1 = mysqli_query($conexion, $sql1);
			         while($row = mysqli_fetch_array($consulta1)){
			         $categoria = $row['categoria'];
			         $categoria=str_replace(" ",'',$categoria);
							
			    ?>
				<div class="col-lg-4 col-md-6 special-grid <?php echo $categoria;?> ">
					<div class="gallery-single fix">
						<a href="detallesproducto.php?id=<?php echo $row['id'];?>"><img src="productos/<?php echo $row['imagen'];?>" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4><?php echo $row['nombre']; ?></h4>
							<p><?php echo strip_tags(substr($row['descripcion'],0,40)); ?></p>
							<h5><?php echo "$".$row['precio']; ?></h5></h5>
						</div>
						</a>
					</div>
				</div>
			    <?php } ?>
			</div>
		</div>
	</div>
	<!-- End Menu -->


	<?php include 'include/footer.php' ?>
	
	

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