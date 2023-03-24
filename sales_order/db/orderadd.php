<?php
  ///////connection
  include '../connect.php';
  $productname=$_POST['productname'];
  $price=$_POST['price'];
  $unit=$_POST['unit'];
  $subtotal=$price*$unit;
  $salesid=$_POST['sales_id'];
  /////for contact
 
  $sql1="SELECT grand_total FROM sales WHERE sales_id= $salesid";
  $result=$conn->query($sql1);
  while($row=$result-> fetch_assoc()){
    $grandtotal= $row["grand_total"]+$subtotal;
  }
  
  
  $sql2=  "INSERT INTO orders(sales_id,price_products,product_units,product_name,sub_total) 
  VALUES ('$salesid', '$price', '$unit',  '$productname','$subtotal')";
  mysqli_query($conn, $sql2);

  $sql3=  "UPDATE sales set grand_total= $grandtotal WHERE sales_id= $salesid ";
  mysqli_query($conn, $sql3);
 


  

header("location:../orderpage.php?sales_id=".$salesid."");
?>