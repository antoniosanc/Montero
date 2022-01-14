<?php 
	require_once "../../conexion.php";
	
	if (!empty($_POST["usuario"])) {

		 $id_us=$_POST["usuario"];
		 
		$sql = mysqli_query($conexion, "SELECT * FROM `detalle_permisos` 
												WHERE `id_usuario`= '$id_us'");
		$existe = mysqli_fetch_all($sql);
		$sqlpermisos = mysqli_query($conexion, "SELECT * FROM permisos");
		while ($row = mysqli_fetch_assoc($sqlpermisos)) { 
           $id_per= trim($row['id']);
           $nom_per= trim($row['nombre']);
           if (!empty($_POST[$id_per])) {
           	 $estado="si";
           }else{
			$estado="no";
           }
           if (empty($existe)) {
           		$sql = mysqli_query($conexion, "INSERT INTO `detalle_permisos`(`nom_permiso`, `estado`, `id_usuario`) VALUES ('$nom_per','$estado','$id_us')");
           }else{
           		$sql = mysqli_query($conexion, "UPDATE `detalle_permisos` SET 
           				`nom_permiso`='$nom_per',
           				`estado`='$estado' 
           					WHERE `id_usuario`='$id_us' && `nom_permiso`='$nom_per'");
           }
       }
       if ($sql == 1) {
                header("Location: ../rol.php?id=".$id_user."&m=si");
            } else {
                header("Location: ../rol.php?id=".$id_user."&m=no");
            }
	}else{
		
	}

?>
