	<?php 
		include ('include/header.php');
		$db  = new Database();
		$con = $db->conectar();

		$productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

		$lista_carrito = array();

		print_r($_SESSION);

		if ($productos != null) {
			foreach ($productos as $clave => $cantidad){

				$sql = $con->prepare("SELECT `id`, `nombre`, `precio`, `descuento`, $cantidad AS `cantidad` FROM producto WHERE id=?");
				$sql->execute([$clave]);
				$lista_carrito[] = $sql->fetch(PDO::FETCH_ASSOC);
			}
		}
    ?>
<br><br><br><br><br>

	<div class="container" style="padding-bottom: 200px;">
		<table id="table_id" class="table table-bordered table-striped table-hover" >
        <thead >
            <tr>
                <th>Producto</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr >
                <?php if($lista_carrito == null){
		    		echo '<tr><td colspan="5"><b>Lista vacia</b></td></tr>';
		    	}else{
		    		$total = 0;
		    		foreach($lista_carrito as $producto){
		    			$id = $producto['id'];
		    			$nombre = $producto['nombre'];
		    			$precio = $producto['precio'];
		    			$descuento = $producto['descuento'];
		    			$precio_des = $precio - (($precio * $descuento) / 100);
		    			$subtotal = $cantidad * $precio_des;
		    			$total += $subtotal;
		    	?>
                <td><?php echo $nombre; ?></td>
                <td class="text-center"><?php echo MONEDA.number_format($precio_des, 2, '.',','); ?></td>
                <td class="text-center"><?php echo $cantidad; ?></td>
                <td class="text-center">
                	<div id="subtotal_<?php echo $id;?>" name="subtotal[]"><?php echo MONEDA.number_format($subtotal, 2, '.',','); ?></div>
                </td>
                <td><a href="#" id="eliminar" data-bs-id="<?php echo $id;?>" data-bs-tootle="modal" data-bs-target="eliminaModal" style="color: red;"><i class="fas fa-trash-alt" ></i></a>
                </td>
            <?php } ?>
            </tr>
        </tbody>
        <tfood>
            <tr>
                <td colspan="3" class="text-right"><b>Total</b></td>
                <td colspan="1" class="text-center"><b><?php echo MONEDA.number_format($total, 2, '.',','); ?></b></td>
            </tr>
        </tfood>
    <?php } ?>
    </table>
	</div>


	</body>

	<?php include 'include/footer.php' ?>
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