<?php include_once "includes/header.php";
    require("../conexion.php");

$id = $_GET['id'];
$sqlpermisos = mysqli_query($conexion, "SELECT * FROM permisos");
?>

<div class="row">
    <div class="col-md-11 mx-auto">
        <div class="card">
            <div class="card-header bg-warning text-white">
               <center>  Permisos
           <div >
            <a  href="colaboradores.php"><i class="fas fa-arrow-circle-left"></i></a></div></center>
            </div>

            <div class="card-body">
                <?php 
                    if(isset($_GET['m']) && $_GET['m'] == 'si') { ?>
                        <script type="text/javascript">
                            alertify.alert('Mensaje', 'Permisos actualizados correctamente', function() { window.location.href = "colaboradores.php"; } );
                    </script>
                    <?php }?>
                <form method="post" action="control/actualizarpermiso.php">

                    <input type="text" name="usuario" value=" <?php echo  $id;?> " hidden >
                    <?php 
                        while ($row = mysqli_fetch_assoc($sqlpermisos)) { 
                           $id_per= $row['id'];
                           $nom_per= $row['nombre'];
                           $consult = $mysqli->query("SELECT  `estado`  FROM `detalle_permisos` WHERE `id_usuario`='$id' && `nom_permiso`= '$nom_per'");
                            $register = $consult->fetch_assoc();
                            if(isset($register['estado']) && $register['estado']=='si' ){
                                $valor="checked";
                            }else{
                                $valor="";
                            } 
                    ?>
                        <div class="form-check form-check-inline m-4">
                            <label for="permisos" class="p-2 text-uppercase">
                                <?php echo $nom_per;?>
                            </label>
                            <input type="checkbox" name="<?php echo $id_per;?>" 
                               <?php echo $valor;?> />
                        </div>
                    <?php } ?>


                    <button class="btn btn-primary btn-block" type="submit">Modificar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include_once "includes/footer.php"; ?>