<?php 
    require_once "../conexion.php";
    session_start();
    if ( $_POST['tipo']=='si' ) {
    //si es administrador
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' AND clave = '$clave' ");       
            $resultado = mysqli_num_rows($query);
            if ($resultado > 0) {
                $dato = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['id'] = $dato['id'];
                $_SESSION['nombre'] = $dato['nombre'];
                $_SESSION['us'] = $dato['usuario'];
                $_SESSION['correo'] = $dato['correo'];
                $_SESSION['clave'] = $dato['clave'];
                $alert = 1;
                echo $alert;

            } else {       
                $alert = 2;
                session_destroy();
                echo $alert;
            }
    //fin de si es administador     
    }else{
        $correo = $_POST['correo'];
        $clave = $_POST['clave'];
        $query = mysqli_query($conexion, "SELECT * FROM cliente WHERE correo = '$correo' AND clave = '$clave' ");       
            $resultado = mysqli_num_rows($query);
            if ($resultado > 0) {
                $dato = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['id'] = $dato['id'];
                $_SESSION['nombre'] = $dato['nombre'];
                $_SESSION['us'] = $dato['usuario'];
                $_SESSION['correo'] = $dato['correo'];
                $_SESSION['clave'] = $dato['clave'];
                $_SESSION['telefono'] = $dato['telefono'];
                $_SESSION['estado'] = $dato['estado'];
                $alert = 4;
                echo $alert;

            } else {       
                $alert = 2;
                session_destroy();
                echo $alert;
            }
    }

?>