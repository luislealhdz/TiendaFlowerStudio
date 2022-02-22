<?php
    $ordered_product = $_POST['ordered_product'];
    $name_buyer = $_POST['name_buyer'];
    $phone_buyer = $_POST['phone_buyer'];
    $recipient_name = $_POST['recipient_name'];
    $recipient_phone = $_POST['recipient_phone'];
    $address = $_POST['address'];
    $postal_code = $_POST['postal_code'];
    $date = $_POST['date'];
    $hour = $_POST['hour'];

    //Servidor, Usuario, Contraseña BD
    $connection = mysqli_connect("localhost:33068","hungrystudent","12345","flowers");
    $query = "INSERT INTO product_order (
        ordered_product,
        name_buyer, 
        phone_buyer, 
        recipient_name, 
        recipient_phone, 
        address, 
        postal_code, 
        date, 
        hour
    ) VALUES (
        '$ordered_product',
        '$name_buyer',
        '$phone_buyer',
        '$recipient_name',
        '$recipient_phone',
        '$address',
        '$postal_code',
        '$date',
        '$hour')";
    $result = mysqli_query($connection, $query);
    if(!$result){
        echo '<script language="javascript">alert("No se inserto el producto, intentelo de nuevo más tarde");</script>';
    }else{
        header("Location: pay-product.php");
    }
?>