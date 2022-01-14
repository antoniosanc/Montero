<?php include('include/header.php') ?>

	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Galeria</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
				<?php 
                    $sql1 = "SELECT * FROM `galeria` " ;
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

<?php include('include/footer.php') ?>
	
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