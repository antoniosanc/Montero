<?php
require_once "../../conexion.php";


    if(isset($_POST['insertdata'])){
        
        $imagen = $_FILES ['archivo']['name'];
        $guardado =$_FILES['archivo']['tmp_name'];
        $fecha = date("Y/m/d");

        

    if (file_exists('../../galeria/')) {

    if (move_uploaded_file($guardado, '../../galeria/'.$imagen)) {

        $query = "INSERT INTO `galeria`( `ruta`, `fecha`) VALUES   ('$imagen','$fecha')";
        $query_run = mysqli_query($conexion, $query);

        if($query_run)
        { 
            header('Location: ../galeria.php');
        }
        else
        {
            echo '<script> alert("Data Not Saved"); </script>';
        }

        }
    }

    }

    if(isset($_POST['deletedata'])){
        $id = $_POST['delete_id'];

        $query = "DELETE FROM galeria WHERE id='$id'";
        $query_run = mysqli_query($conexion, $query);

        if($query_run)
        {
            header("Location:../galeria.php");
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }

    if(isset($_POST['updatedata'])){   
        $id = $_POST['update_id'];
        
        $name = $_POST['name'];
        $des = $_POST['des'];

        $query = "UPDATE categoria SET nombre='$name', descripcion='$des' WHERE id='$id'";
        $query_run = mysqli_query($conexion, $query);

        if($query_run){
            header("Location:../categoria.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }

?>