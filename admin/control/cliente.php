<?php 
	require_once "../../conexion.php";


 

if(!empty($_GET['id'])){
    $idcol = $_GET['id'];

    $sql = mysqli_query($conexion, "DELETE FROM `cliente` WHERE `id`='$idcol'");
     
     if ($sql == 1) {
                header("Location: ../clientes.php");
            } else {
                header("Location: ../clientes.php");
            }
     
}


?>

