<?php
require_once "../../conexion.php";


    if(isset($_POST['insertdata'])){
        $nom = $_POST['nombre'];
        $categoria = $_POST['categoria'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $presentacion = $_POST['presentacion'];
        $stock = $_POST['stock'];
        $descuento = $_POST['descuento'];
        $imagen = $_FILES ['archivo']['name'];
        $guardado =$_FILES['archivo']['tmp_name'];

        

    if (file_exists('../../productos/')) {

    if (move_uploaded_file($guardado, '../../productos/'.$imagen)) {

        $query = "INSERT INTO `producto` (`nombre`, `categoria`, `descripcion`, `precio`, `presentacion`, `Stock`, `descuento`, `imagen`) VALUES  ( '$nom','$categoria','$descripcion','$precio','$presentacion','$stock','$descuento','$imagen')";
        $query_run = mysqli_query($conexion, $query);

        if($query_run)
        { 
            header('Location: ../productos.php');
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

        $query = "DELETE FROM categoria WHERE id='$id'";
        $query_run = mysqli_query($conexion, $query);

        if($query_run)
        {
            header("Location:../categoria.php");
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