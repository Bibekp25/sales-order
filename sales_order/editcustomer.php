<?php
   include('connect.php'); // connection 
   $id=$_GET['sales_id']; 
   $query=mysqli_query($conn, "SELECT * FROM sales LEFT JOIN contacts ON sales.sales_id=contacts.sales_id where sales.sales_id=$id");
   $row=mysqli_fetch_array($query);
?>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> -->
<!-- Required meta tags -->
<!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>sales</title>
<body>
    <form action="db/detailedit.php" method="post">
        <div class="form-group col-md-6">
            <input type="hidden" id="sales_id" name="sales_id" value="<?php  echo $row['sales_id']?>">
            <input type="hidden" id="contact_id" name="contact_id" value="<?php  echo $row['contact_id']?>">

            <label>CUSTOMERS NAME</label>
            <input type="text" name= "name" class="form-control" placeholder="FULL NAME" value="<?php  echo $row['customers_name']?>">
        </div>
            <div class="form-group col-md-6">
            <label>DATE</label>
            <input type="date" name= "orderdate" class="form-control"  placeholder=" Order-DATE" value="<?php  echo $row['order_date']?>">
        </div>
            <div class="form-group col-md-6">
            <label for="inputAddress">Address</label>
            <input type="text" name="adrress" class="form-control" id="inputAddress" placeholder="adrress" value="<?php  echo $row['customers_address']?>">
        </div> 
        <div class="form-group col-md-6">
            <label> PhoneNumber</label>
            <input type="number" name="phonenumber" class="form-control" placeholder="number" value="<?php  echo $row['phone_number']?>">
        </div>
            <div class="form-group col-md-6">
            <label>Email</label>
            <input type="varchar" name= "email" class="form-control" placeholder="email" value="<?php  echo $row['customers_emails']?>">
        </div>
        <button type="submit" class="btn btn-primary">update</button>
    </form>

</body>
</html>

</html> -->
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="order.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">EDIT</div>
    <div class="content">
      <form action="db/detailedit.php" method="post">
      <input type="hidden" id="sales_id" name="sales_id" value="<?php  echo $row['sales_id']?>">
            <input type="hidden" id="contact_id" name="contact_id" value="<?php  echo $row['contact_id']?>">
        <div class="user-details">
          <div class="input-box">
          <label>CUSTOMERS NAME</label>
            <input type="text" name= "name" class="form-control" placeholder="FULL NAME" value="<?php  echo $row['customers_name']?>">
          </div>
          <div class="input-box">
          <label>DATE</label>
            <input type="date" name= "orderdate" class="form-control"  placeholder=" Order-DATE" value="<?php  echo $row['order_date']?>">
          </div>
          <div class="input-box">
          <label for="inputAddress">Address</label>
            <input type="text" name="adrress" class="form-control" id="inputAddress" placeholder="adrress" value="<?php  echo $row['customers_address']?>">
          </div>
          <div class="input-box">
          <label> PhoneNumber</label>
            <input type="number" name="phonenumber" class="form-control" placeholder="number" value="<?php  echo $row['phone_number']?>">
          </div>
          <div class="input-box">
          <label>Email</label>
            <input type="varchar" name= "email" class="form-control" placeholder="email" value="<?php  echo $row['customers_emails']?>">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="UPDATE">
        </div>
      </form>
    </div>
  </div>

</body>
</html>