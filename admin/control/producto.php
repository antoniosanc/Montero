<?php
require_once "../../conexion.php";
 

    if(isset($_POST['newpro'])){
        $producto=$_POST['producto'];
        $categoria=$_POST['categoria'];
        $presentacion=$_POST['presentacion'];
        $stock=$_POST['stock'];
        $descri=$_POST['descri'];
        $precio=$_POST['precio'];
        $descuento=$_POST['descuento'];
        $productimage1=$_FILES["img1"]["name"];
        $productimage2=$_FILES["img2"]["name"];
        $productimage3=$_FILES["img3"]["name"];
        //for getting product id
        $query=mysqli_query($conexion,"select max(id) as pid from producto");
            $result=mysqli_fetch_array($query);
             $productid=$result['pid']+1;
            $dir="../../productimages/$productid";
        if(!is_dir($dir)){
                mkdir("../../productimages/".$productid);
            }
            move_uploaded_file($_FILES["img1"]["tmp_name"],"../../productimages/$productid/".$_FILES["img1"]["name"]);
            move_uploaded_file($_FILES["img2"]["tmp_name"],"../../productimages/$productid/".$_FILES["img2"]["name"]);
            move_uploaded_file($_FILES["img3"]["tmp_name"],"../../productimages/$productid/".$_FILES["img3"]["name"]);

        $sql=mysqli_query($conexion,"INSERT INTO `producto`( `nombre`, `categoria`, `descripcion`, `precio`, `presentacion`, `Stock`, `descuento`, `img1`, `img2`, `img3`) 
            VALUES ('$producto','$categoria','$descri','$precio','$presentacion','$stock','$descuento','$productimage1','$productimage2','$productimage3')");

            if ($sql) {
            header("Location: ../productos.php?resnew=si");
            }else{
                header("Location: ../productos.php?resnew=no");
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