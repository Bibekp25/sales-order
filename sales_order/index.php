<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <title>HOME PAGE</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>JG LABO</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>DASHBOARD</a>
                <a href="orderform.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>CREATE SALES</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>ORDERFROM</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-shopping-cart me-2"></i>CONTACT INFO</a>
                <a href="loginform.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
                        
        </div>
            
        </div>
        <div class="mx-auto" style="width: 900px;">
            <table class="table table-hover table-dark text">
          <thead>
            <tr>
            <th scope="col">SALE_ID</th>
            <th scope="col">CUSTOMER_NAME</th>
            <th scope="col">ORDER_DATE</th>
            <th scope="col">CUSTOMER_ADDRESS</th>
            <th scope="col">GRAND_TOTAL</th>
            <th scope="col">DETAILS</th>
            <th scope="col">DELETE</th>
          </tr>
          </thead>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
            <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
            <h2 class="fs-2 m-0">Dashboard</h2> 
          </div>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
  <?php
  $conn= mysqli_connect("localhost", "root", "", "sales_order_managment");

  $sql=" SELECT*FROM sales";
  $result=$conn->query($sql);
  // if($result->num_rows>0) {
    while ($row=$result-> fetch_assoc()) {
      echo "<tr>
                <td>" . $row["sales_id"] . "</td>
                <td>"  . $row["customers_name"] . "</td>
                <td>" . $row["order_date"] . "</td>
                <td>" . $row["customers_address"] . "</td>
                <td>" . $row["grand_total"] . "</td>
                <td> 
                  <a href='orderpage.php?sales_id=" .$row["sales_id"]."'> DETAILS </a>
                  
                </td>
                <td><a href='delete.php?id=" .$row["sales_id"]."'> DELETE </a> </td>
            </tr> ";
            
      
    }
    
$sql2="INSERT sub_total from order INTO grand_total";
$result7=$conn->query($sql2);
if($result7=$conn->query($sql2)){
while ($row=mysqli_fetch_array($result7)) {
echo $row['grand_total'];
}
}
  // }
  // else {
  //   echo "no result";
  // }
  $conn-> close();


  ?>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>