<?php
    $id =  $_GET['id'];
   
    //Servidor, Usuario, Contraseña BD
    $connection = mysqli_connect("Nada","que","ver","aquí");
    $query = "DELETE FROM product WHERE id like $id";
    $result = mysqli_query($connection, $query);
    if(!$result){
        echo '<script language="javascript">alert("No se eliminó el producto, intentelo de nuevo más tarde");</script>';
    }else{
        header("Location: admin.php");
    }
?>