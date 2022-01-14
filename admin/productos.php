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
    <?php  require_once "includes/modal/productosMod.php"; ?> 
    <div class="container-fluid">
	 
		<center>
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-dark "> <strong>Productos</strong> </h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#addmodal">
          <i class="fas fa-cart-plus fa-lg"></i>
        </button> 

    </center><br>
	
    <!-- tabla -->
    <div class="card shadow mb-4" id="tabla" >
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Productos registrados</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $sql1 ="SELECT * FROM producto ";
                $consultap = mysqli_query($conexion, $sql1);
                if($consultap->num_rows === 0) {
                ?>
                <p>no hay datos q mostrar</p>
                <?php
                } else {
                ?>
                <table class="table table-bordered" id="datatableid" width="100%" cellspacing="0">
                    <thead style="background-color: #000; color: #fff">
                        <tr>
                            
                            <th scope="col">Clave</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">descripcion</th>
                            <th scope="col">precio</th>
                            <th scope="col">Stock</th>
                            <th scope="col">imagen</th>
                            <th scope="col">estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <?php
                    if($consultap){
                        //$contador=0;
                        foreach($consultap as $row) {
                            //$contador++;
                    ?>
                    <tbody>
                        <tr>  
                        <!-- <td> <?php echo $contador; ?> </td>-->
                        <td> <?php echo $row['id']; ?> </td>
                        <td> <?php echo $row['nombre']; ?> </td>
                        <td> <?php echo $row['categoria']; ?> </td>
                        <td> <?php echo strip_tags(substr($row['descripcion'],0,40)); ?> </td>
                        <td> <?php echo $row['precio']; ?> </td>
                        <td> <?php echo $row['Stock']; ?> </td>
                        <td> <img src="../productos/<?php echo  $row['imagen'];?>" width="70px"> </td>
                        <td> <?php echo $row['estado']; ?> </td>

                        <td align="center">
                            <button type="button" class="btn btn-info btn-circle editbtn"><i class="fas fa-edit"></i></button>
                            <button type="button" class="btn btn-danger btn-circle deletebtn"> <i class='fas fa-trash-alt'></i></button>
                        </td>
                        </tr>
                    </tbody>

                    <?php           
                        }
                    }else{
                        echo "No Record Found";
                    }
                    ?>
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

