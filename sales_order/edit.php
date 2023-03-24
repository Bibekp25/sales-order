<?php
   include('connect.php'); // connection 
   $id=$_GET['order_id']; 
   $query=mysqli_query($conn, "select *from `orders` where order_id ='$id'");
   $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="order.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
    
    <form action="db/orderedit.php" method="post">
    <div class="container">
    <div class="title">Registration</div>
        <div class="form-row">

           <div class="form-group col-md-6">
                <input type="hidden" id="order_id" name="order_id" value="<?php  echo $row['order_id']?>">
                <input type="hidden" id="sales_id" name="sales_id" value="<?php  echo $row['sales_id']?>">
                <input type="hidden" id="sub_total" name="sub_total" value="<?php  echo $row['sub_total']?>">
                <label for="inputEmail4">productname</label>
                <input type="text" name="productname" class="form-control" value="<?php  echo $row['product_name']?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">price</label>
                <input type="number" name="price" class="form-control" id="price" value="<?php  echo $row['price_products']?>">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">unit</label>
                <input type="number" name="unit" class="form-control" id="unit" value="<?php echo $row['product_units']?>">
            </div>
        </div>
        <!-- <div class="form-group">
            <label for="inputAddress">subtotal</label>
            <input type="number" name="subtotal" class="form-control" id="subtotal" value="<?php  echo $row['sub_total']?>">
        </div> -->
        <div class="form-row">
            <button type="submit" class="btn btn-primary">update</button>

        </div>
    </form>
    


 <body>
 </body>
 </html>
