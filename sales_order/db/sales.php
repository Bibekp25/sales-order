<?php
  ///////connection
  include '../connect.php';
  /////for sales
  $name=$_POST['name'];
  $orderdate=$_POST['orderdate'];
  $adrress=$_POST['adrress'];
  // $grand=$_POST['grand'];
  /////sfor order
  // $productname=$_POST['productname'];
  // $price=$_POST['price'];
  // $unit=$_POST['unit'];
  // $subtotal=['subtotal'];
  $phonenumber=$_POST['phonenumber'];
  $email=$_POST['email'];
  /////query for sales
  $sql= "INSERT INTO sales(customers_name,order_date,customers_address, grand_total) 
  VALUES ('$name', ' $orderdate', '$adrress',  '0' );";

  mysqli_query($conn, $sql);
  $sql1="SELECT sales_id FROM sales order by sales_id DESC limit 1";
  $result=$conn->query($sql1);
  while($row=$result-> fetch_assoc()){
    $salesid= $row["sales_id"];
  }
  
  // $sql2=  "INSERT INTO orders(sales_id,price_products,product_units,product_name,sub_total) 
  // VALUES ('$salesid', '$price', '$unit',  '$productname', '$price'*'$unit' );";
  // mysqli_query($conn, $sql2);
  
 $sql4= "INSERT INTO contacts(sales_id,phone_number,customers_emails) 
 VALUES (' $salesid', '$phonenumber',  '$email');";
   mysqli_query($conn, $sql4);

  

header("location:../index.php?sales=success");
?>