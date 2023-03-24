<?php
        include '../connect.php';
      
        if (isset($_POST['order_id'])){
                
                $order_id=$_POST['order_id'];
                $sales_id=$_POST['sales_id'];
                /////////////variable fro orders
                $productname=$_POST['productname'];
                $price=$_POST['price'];
                $unit=$_POST['unit'];
                $prevsubtotal=$_POST['sub_total'];
                $subtotal=$price*$unit;

                $sql1="SELECT grand_total FROM sales WHERE sales_id= $sales_id";
                $result=$conn->query($sql1);
                while($row=$result-> fetch_assoc()){
                $grandtotal= $row["grand_total"]+$subtotal-$prevsubtotal;
                }
                //////query to update
                $sql= "UPDATE `orders` SET `price_products`='$price',`product_units`='$unit',`product_name`='$productname',`sub_total`='$subtotal' WHERE order_id='$order_id'";
                $result1=mysqli_query($conn,$sql);

                
                $sql3=  "UPDATE sales set grand_total= $grandtotal WHERE sales_id= $sales_id ";
                mysqli_query($conn, $sql3);
                
                header("location:../orderpage.php?sales_id=".$sales_id."");
                // echo $prevsubtotal;
                // echo $subtotal;

        }
?>
            