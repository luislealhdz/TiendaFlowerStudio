<?php
    $product_name = $_POST['product_name'];
    $images = $_POST['images'];
    $prize = $_POST['prize'];

    //Servidor, Usuario, Contraseña BD
    $connection = mysqli_connect("localhost:33068","hungrystudent","12345","flowers");
    $query = "INSERT INTO product (product_name, images, prize) VALUES ('$product_name','$images','$prize')";
    $result = mysqli_query($connection, $query);
    if(!$result){
        echo '<script language="javascript">alert("No se inserto el producto, intentelo de nuevo más tarde");</script>';
    }else{
        header("Location: admin.php");
    }
?>
