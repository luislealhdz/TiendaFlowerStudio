<?php
    $id =  $_GET['id'];
   
    //Servidor, Usuario, Contraseña BD
    $connection = mysqli_connect("Nada","que","ver","aquí");
    $query = "DELETE FROM product_order WHERE id like $id";
    $result = mysqli_query($connection, $query);
    if(!$result){
        echo '<script language="javascript">alert("Algo salió mal, intentalo de nuevo");</script>';
    }else{
        header("Location: orders.php");
    }
?>