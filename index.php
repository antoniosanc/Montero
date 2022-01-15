<?php include('include/header.php') ?>
	
	
	<!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="images/montero.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Tostadora de Cafe <br> Montero</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="productos.php">Nuestros Productos</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/cafe.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Tostadora de Cafe <br> Montero</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="productos.php">Nuestros Productos</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="images/cafetos.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Tostadora de Cafe <br> Montero</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="productos.php">Nuestros Productos</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">

				<div class=" col-sm-12 text-center">
					<div class="inner-column">
						<h1>Bienvenido a <span>Tostadora Montero</span></h1>
						
						<p>En <span>Tostadora Montero</span> ofrecemos el mejor café de veracruz, sándwiches, pasteles y variedad de insumos listos para su consumo que podemos ofrecer. Nuestros ingredientes se obtienen de la manera más local posible y si siente que su taza de la mañana ha sido un poco deslucida, venga y pruebe una taza hecha a mano en Tostadora Montero.
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead ">
						"Si no existiera el café, muchas cosas jamás habrian sido hechas, dichas ni pensadas "
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
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
						<a href="detallesproducto.php?id=<?php echo $row['id'];?>">
							<img src="productos/<?php echo $row['img1'];?>" class="img-fluid" alt="Image">
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
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Galeria</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					<?php 
	                    $sql1 = "SELECT * FROM galeria ORDER BY fecha DESC  " ;
	                    $consulta1 = mysqli_query($conexion, $sql1);
	                    while($row = mysqli_fetch_array($consulta1)){
	                ?>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="galeria/<?php echo $row['ruta'];?>">
							<img class="img-fluid" src="galeria/<?php echo $row['ruta'];?>" alt="Gallery Images">
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	

	
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