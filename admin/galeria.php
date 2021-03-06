<?php include_once "includes/header.php"; 
$permiso = "productos"; //cambiar el nombre
    $sqlper = mysqli_query($conexion, 
      "SELECT `estado` FROM `detalle_permisos` WHERE `nom_permiso`='$permiso' && `id_usuario` = '$idusuario'");
    $per = $sqlper->fetch_assoc();
    if(isset($per['estado']) && $per['estado']=='no' && $id != 1 ){
        ?>
        <script type="text/javascript">
          alertify.alert().set({'startMaximized':true, 'message':'<center><b><font size="7" color="red"> Sin permiso para esta seccion</font></b><br><img src="img/alto.png" width="30%" alt=""></center>',
          'onok': function(){ window.location.href = "index.php"; }}).show();
        </script>
        <?php 
    }?>

<!-- Contenido de la página de inicio -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?php  require_once "includes/modal/galeriaMod.php"; ?> 
    <div class="container-fluid">
	 
		<center>
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-dark "> <strong>Galeria</strong> </h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#addmodal">
          <i class="fas fa-cart-plus fa-lg"></i>
        </button> 

    </center><br>
	

     <!-- tabla -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Imagenes de galeria</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $sql1 ="SELECT * FROM galeria ";
                $consultap = mysqli_query($conexion, $sql1);
                if($consultap->num_rows === 0) {
                ?>
                <p>no hay datos q mostrar</p>
                <?php
                } else {
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead style="background-color: #000; color:#fff;" >
                        <th scope="col">Clave</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Fecha</th>
                            <th>Acciones</th>
                    </thead>
                    <tbody>
                        <?php
                         
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $idga=$rowedit["id"];
                        $ruta = $rowedit["ruta"];
                        $fecha = $rowedit["fecha"];
                         
                        ?>    
                        <tr >
                        <td> <?php echo $idga; ?> </td>
                        <td align="center"> <img src="../galeria/<?php echo  $ruta;?>" width="100px"> </td>
                        <td> <?php echo $fecha; ?> </td>
                        <td align="center">
                            <button type="button" class="btn btn-info btn-circle editbtn"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger btn-circle deletebtn"> <i class='fas fa-trash-alt'></i></button>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php }?> <!-- fin del else -->
            </div>
        </div>
    </div>
    <!-- Fin de la tabla  -->    

    </div>
    <!-- /.container-fluid -->

<?php include_once "includes/footer.php"; ?>
<script type="text/javascript" src="js/productos.js"></script>
