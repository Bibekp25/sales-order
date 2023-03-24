<?php
        include '../connect.php';
      
        if (isset($_POST['sales_id'])){
                
                $contact_id=$_POST['contact_id'];
                $sales_id=$_POST['sales_id'];
                /////////////variable fro sales
                $name=$_POST['name'];
                $orderdate=$_POST['orderdate'];
                $adrress=$_POST['adrress'];
                $grand=$_POST['grand'];
                ////variable for contact
                $phonenumber=$_POST['phonenumber'];
                $email=$_POST['email'];
                //////query to update
                $sql= "UPDATE `sales` SET `customers_name`='$name',`order_date`='$orderdate',`customers_address`='$adrress',`grand_total`='$grand' WHERE sales_id=$sales_id";
                /////query to update
                $result=mysqli_query($conn,$sql);
                $sql1= "UPDATE `contacts` SET `customers_emails`='$email',`phone_number`='$phonenumber' WHERE sales_id=$sales_id";
                /////query to update
                $result=mysqli_query($conn,$sql1);
 
                header("location:../orderpage.php?sales_id=".$sales_id."");
        }
?>
         