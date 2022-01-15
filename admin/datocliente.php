<?php include_once "includes/header.php"; ?>
<?php 
	
	if (!isset($_GET['idus'])) {
		        ?>
        <script type="text/javascript">
          alertify.alert().set({'startMaximized':true, 'message':'<center><b><font size="7" color="red"> Sin permiso para esta seccion</font></b><br><img src="img/alto.png" width="30%" alt=""></center>',
          'onok': function(){ window.location.href = "index.php"; }}).show();
        </script>
        <?php
	}
		$id=$_GET['idus'];
		$sql1 ="SELECT * FROM cliente WHERE id = '$id'";

		$sql2 ="SELECT usuario FROM cliente WHERE id = '$id'";
			$sqlnom_us = mysqli_query($conexion,$sql2);
			$nom_us = $sqlnom_us->fetch_assoc();
			$nomUs=$nom_us['usuario'];
?>
<!-- Contenido de la página de inicio -->
<div class="container-fluid">

    <!-- Page Heading -->
     
    <div class="titu">
	    <h1>Datos del usuario: <?php echo $nomUs; ?> </h1>
	</div>
	 
     
    	<div class="titu"><h2>Datos de la Cuenta</h2></div>
    	<!-- tabla cuanta -->
    	<div class="table-responsive">
                <?php
                $sql1 ="SELECT * FROM cliente WHERE id = '$id' ";
                $consultap = mysqli_query($conexion, $sql1);
                if($consultap->num_rows === 0) {
                ?>
                <p>no hay datos q mostrar</p>
                <?php
                } else {
                ?>
                <table class="table table-bordered " width="100%" cellspacing="0">
                    <thead >
                        <tr style="color: #fff; background: #000;" align="center">
                            <th scope="col">Clave</th>
                            <th scope="col">Nombre usuario</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Contacto</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php
                        $contador=0;
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $idus=$rowedit["id"];
                        $nomus = $rowedit["usuario"];
                        $correous = $rowedit["correo"];
                        $claveus = $rowedit["clave"];
                        $tel = $rowedit["telefono"];
                        $es = $rowedit["estado"];

                        ?>    
                        <tr style="color: #000; background: #F0F8FF;" align="center">
                        <td><?php echo $idus; ?></td>
                        <td><?php echo $nomus; ?></td>
                        <td><?php echo $correous; ?></td>
                        <td><?php echo $claveus; ?></td>
                        <td><?php echo $tel; ?></td>                 
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php }?> <!-- fin del else -->
        </div>
		<!-- Fin de la tabla cuenta -->
         
    	<div class="titu"><h2>Datos generales</h2></div>
  
        <br>
        <!-- botones -->
        <center>
        <div class="container">
        	<?php 
        		if ($es=='activo') {
        			?>
        			 
        			<button type="button" class="btn btn-info btn-lg" onclick="window.location.href = 'clientes.php';">Regresar  <i class="fas fa-backward"></i></button>

					<button type="button" class="btn btn-outline-danger btn-lg"	onclick="inactivo('<?php echo $nomUs; ?>')">Negar <i class="fas fa-user-times"></i></button>
        			<?php
        		} 
        			?><?php
        		
        		if ($es=='inactivo') {
        			?><button type="button" class="btn btn-outline-success btn-lg" onclick="activo('<?php echo $nomUs; ?>')">Permitir <i class="far fa-thumbs-up"></i></button>

        		<button type="button" class="btn btn-info btn-lg" onclick="window.location.href = 'clientes.php';">Regresar  <i class="fas fa-backward"></i></button>
				<?php
        		} 
    	 
        	 ?>
		</div>
		</center>
		<!-- botones -->
    	 
    	<!--  
    	<div class="parents">
     
		    <div class="child">
		    	 
		    </div>
		     <div class="child">
		     <div class="titu">
		 		
		    </div>
		    </div>
		</div>
     -->
</div>
<!-- /.container-fluid -->
<script type="text/javascript">
	function activo(id) {
		var usuario = id;
		var es = "activo";
		alertify.confirm('Conceder permiso', 'Deseas aceptar al usuario: '+''+usuario, 
				function(){ 
					var dataen = 'us='+usuario+'&estado='+es;
		            $.ajax({
		                type:'POST',
		                url:'control/validarUs.php',
		                data:dataen,
		                success:function(r){
		                    if (r=1) {
		                        window.location.href = 'clientes.php';
		                    }else{
		                        alertify.error("fallo el servidor");
		                    }
		                }
		            });
					}
                , function(){ alertify.error('Operacion cancelada')});
	}

	function inactivo(id) {
		var usuario = id;
		var es = "inactivo";
		alertify.confirm('Negar permiso', 'Deseas negar el permiso al usuario: '+''+usuario, 
				function(){ 
					var dataen = 'us='+usuario+'&estado='+es;
		            $.ajax({
		                type:'POST',
		                url:'control/validarUs.php',
		                data:dataen,
		                success:function(r){
		                    if (r=1) {
		                        window.location.href = 'clientes.php';
		                    }else{
		                        alertify.error("fallo el servidor");
		                    }
		                }
		            });
				}
                , function(){ alertify.error('Operacion cancelada')});
	}
</script>

<?php include_once "includes/footer.php"; ?>

