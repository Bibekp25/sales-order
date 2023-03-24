<!doctype html>
<html lang="en">
  <head  class="text-bg-secondary p-3">
<body>
  
</body>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>HOME Page</title>
    <div class="d-flex" id="wrapper">
   
        <!-- Sidebar -->
        <div  class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>ORDER DETAILS</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="index.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>DASHBOARD</a>
                <a href="orderform.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>CREATE SALES</a>
                <a href="editcustomer.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>ORDERFROM</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>CONTACT INFO</a>
                <a href="loginform.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>                  
        </div>
</head>
  
  <body >
    <div class="position-absolute top-0 start-50 translate-middle-x fw-bolder text-bg-secondary w-50 p-3 ">
       <?php
      include('connect.php'); // connection 
    
      $id=$_GET['sales_id'];
      

      $sql1="SELECT * FROM sales LEFT JOIN contacts ON sales.sales_id=contacts.sales_id where sales.sales_id= $id";
      if($result1=$conn->query($sql1)){
        while ($row1=$result1-> fetch_assoc()) {
            echo"<a href='editcustomer.php?sales_id=".$row1['sales_id']."'>EDIT CUSTOMER DEATILS</a>";
            echo" 
              <h6>CUSTOMER NAME:".$row1['customers_name']."</h6>
              <h6>ORDER DATE:".$row1['order_date']."</h6>
              <h6>CUSTOMER ADDRESS:".$row1['customers_address']."</h6>
              <h6>PHONE NUMBER:".$row1['phone_number']."</h6>
              <h6>E-MAIL:".$row1['customers_emails']."</h6>
              <h5>GRAND TOTAL:".$row1['grand_total']."</h5>
            ";
            echo"<a href='additem.php?sales_id=".$row1['sales_id']."'>ADD ITEM</a>";
          
        }
      }else{
        echo 'failed';
      }     
    ?>
      
    </div>
    <div  class="position-absolute top-50 start-50 translate-middle " >
              <table  class="table table-hover table-dark text">
          <thead>
            <tr>
              <th scope="col">ORDER_ID</th>
              <th scope="col">PRODUCTS_NAME</th>
              <th scope="col">PRODUCTS_PRICE</th>
              <th scope="col">PRODUCTS_UNITS</th>
              <th scope="col">SUB_TOTAL</th>
              <th scope="col" >EDIT</th>
              <th scope="col">DELETE</th>
            </tr>
          </thead>
        </div>
<?php
    $sub_total=0;
    
      $sql="SELECT*FROM orders WHERE sales_id= $id";
      $result=$conn->query($sql);
      while ($row=$result-> fetch_assoc()) {
        echo "<tr>
                  <td>" . $row['order_id'] . "</td>
                  <td>" . $row['product_name'] . "</td>
                  <td>" . $row['price_products'] . "</td>
                  <td>" . $row['product_units'] . "</td>
                  <td>".$row['sub_total']."</td>
                  <td ><a href='edit.php?order_id=" . $row['order_id']." '>EDIT</a></td>
                  <td><a href='deleteitem.php?order_id=" . $row["order_id"]."&sub_total=" . $row["sub_total"]."&sales_id=" . $row["sales_id"]."'>DELETE</a></td>
              </tr> ";

        }
      
?>
</div>   
    
  </table>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>
  </body>
</html>