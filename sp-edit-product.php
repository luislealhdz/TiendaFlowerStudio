<?php
    $id =  $_POST['id'];
    $product_name = $_POST['product_name'];
    $images = $_POST['images'];
    $prize = $_POST['prize'];

    //Servidor, Usuario, Contraseña BD
    $connection = mysqli_connect("Nada","que","ver","aquí");
    $query = "UPDATE product SET product_name='$product_name', images='$images', prize='$prize' WHERE id like $id";
    $result = mysqli_query($connection, $query);
    if(!$result){
        echo '<script language="javascript">alert("No se actualizo el producto, intentelo de nuevo más tarde");</script>';
    }else{
        header("Location: admin.php");
    }
?>