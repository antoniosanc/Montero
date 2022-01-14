<?php 
    include_once "includes/header.php";
    $permiso = "clientes"; //cambiar el nombre
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
    }

?>

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Contenido de la página de inicio -->
<div class="container-fluid">

    <center>
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-dark "> <strong>Clientes Registrados</strong> </h1>
        <!-- Button trigger modal -->
    </center>

     <!-- tabla -->
    <div class="card shadow mb-4" id="tabla" >
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Clientes</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php
                $sql1 ="SELECT * FROM cliente ";
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
                            <th scope="col">Usuario</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $contador=0;
                        while($rowedit = mysqli_fetch_array($consultap)){
                        $idus=$rowedit["id"];
                        $nomus = $rowedit["nom_us"];
                        $correous = $rowedit["correo"];
                        $claveus = $rowedit["clave"];
                        $tel = $rowedit["telefono"];
                        $estado = $rowedit["estado"];
                        $contador++;
                         if ($estado=="activo") {
                            $es="<font color='green'><b>Activo</b></font>";
                          }else if($estado=="inactivo"){
                            $es="<font color='red'><b>Inactivo</b></font>";
                          }else{
                            $es="<font color='#9A7D0A '><b>En espera</b></font>";
                          }
                        ?>    
                        <tr >
                        <td><?php echo $idus; ?></td>
                        <td><?php echo $nomus; ?></td>
                        <td><?php echo $correous; ?></td>
                        <td><?php echo $claveus; ?></td>
                        <td><?php echo $tel; ?></td>
                        <td><?php echo $es; ?></td>
                        <td align="center">
                        <!-- onsubmit="return agregarProducto();" 
                        class="btn btn-danger"><i class='fas fa-trash-alt'></i>
                        -->
                        <a href="usRespuesta.php?idus=<?php echo $idus?>&correo=<?php echo $correous?>&clave=<?php echo $claveus?>" class="btn btn-info btn-circle"><i class="fas fa-envelope-open-text fa-lg" title="Datos"></i> </a>
 
                        <a class="btn btn-danger btn-circle" onclick="return alertify.confirm('¿Estás seguro de eliminar a <?php echo $nomus; ?>?', 
                            function(){
                              alertify.success('confirmed');
                              window.location.href = 'control/cliente.php?id=<?php echo $idus; ?>';
                            }).autoOk(5);" ><i class='fas fa-trash-alt'></i></a>



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

