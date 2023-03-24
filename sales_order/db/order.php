<?php
    include '../connect.php';
    $productname=$_POST['productname'];
    $price=$_POST['price'];
    $unit=$_POST['unit'];
    $subtotal=$_POST['subtotal'];
    $sql= "INSERT INTO orders(product_name,price_products,product_units,sub_total) 
    VALUES ('$productname',  '$price', $unit ,'$subtotal');";

    mysqli_query($conn, $sql);

    header("location:../index.php?order=success");
?>