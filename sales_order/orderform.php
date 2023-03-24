<!-- <?php
   
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>sales</title>
    <form action="db/sales.php" method="post">
        <div class="form-group col-md-6">
            <label>CUSTOMERS NAME</label>
            <input type="text" name= "name" class="form-control" placeholder="FULL NAME">
        </div> -->
        <!-- <div class="form-group col-md-6">
            <label>DATE</label>
            <input type="date" name= "orderdate" class="form-control"  placeholder=" Order-DATE">
        </div>
        <div class="form-group col-md-6">
            <label for="inputAddress">Address</label>
            <input type="text" name="adrress" class="form-control" id="inputAddress" placeholder="adrress">
        </div> 
        <div class="form-group col-md-6">
            <label> PhoneNumber</label>
            <input type="number" name="phonenumber" class="form-control" placeholder="number">
        </div> -->
        <!-- <div class="form-group col-md-6">
             <label>Email</label>
             <input type="varchar" name= "email" class="form-control" placeholder="email">
        </div> -->
        <!-- <div class="form-group col-md-6">
            <label for="inputEmail4">productname</label>
            <input type="text" name="productname" class="form-control"  placeholder="productname">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">price</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="price">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">unit</label>
            <input type="number" name="unit" class="form-control" id="unit" placeholder="unit">
        </div>
        
        <div class="form-group col-md-6">
            <label for="inputAddress">subtotal</label>
            <input type="number" name="subtotal" class="form-control" id="subtotal" placeholder="sub_total">
        </div>
  
        <div class="form-group col-md-6">
            <label for="inputCity">GRAND TOTAL</label>
            <input type="Number" name= "grand" class="form-control" id="Total Value">
        </div> -->

        <!-- <button type="submit" class="btn btn-primary">order</button>
    </form> -->


<body>
</body>
</html>
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
    <div class="title">Registration</div>
    <div class="content">
      <form action="db/sales.php" method="post">
        <div class="user-details">
          <div class="input-box">
          <label>CUSTOMERS NAME</label>
            <input type="text" name= "name" class="form-control" placeholder="FULL NAME">
          </div>
          <div class="input-box">
          <label>DATE</label>
            <input type="date" name= "orderdate" class="form-control"  placeholder=" Order-DATE">
          </div>
          <div class="input-box">
          <label for="inputAddress">Address</label>
            <input type="text" name="adrress" class="form-control" id="inputAddress" placeholder="adrress">
          </div>
          <div class="input-box">
          <label> PhoneNumber</label>
            <input type="number" name="phonenumber" class="form-control" placeholder="number">
          </div>
          <div class="input-box">
          <label>Email</label>
             <input type="varchar" name= "email" class="form-control" placeholder="email">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>