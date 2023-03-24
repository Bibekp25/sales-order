<?php
include "connect.php";
// sql to delete a record
if (isset($_GET['order_id'])){
      $order_id = $_GET['order_id'];
      $sales_id = $_GET['sales_id'];
      $sub_total = $_GET['sub_total'];
      
      $sql1="SELECT grand_total FROM sales WHERE sales_id= $sales_id";
      $result=$conn->query($sql1);
      while($row=$result-> fetch_assoc()){
        $grandtotal= $row["grand_total"] - $sub_total;
      }

      $sql="DELETE FROM `orders` WHERE `order_id`=$order_id";
      mysqli_query($conn, $sql);


      $sql3=  "UPDATE sales set grand_total= $grandtotal WHERE sales_id= $sales_id ";
      mysqli_query($conn, $sql3);

      $conn->close();
      header("location:orderpage.php?sales_id=".$sales_id."");


}
?>