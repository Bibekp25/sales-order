<?php
    include '../connect.php';
    $contactid=$_POST['contactid'];
    $salesid=$_POST['salesid'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['email'];

    $sql=" SELECT*FROM sales";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) 
    {
        // OUTPUT DATA OF EACH ROW
        while($row = $result->fetch_assoc())
        {
            echo "Roll No: " .
                $row["Roll_No"]. " - Name: " .
                $row["Name"]. " | City: " . 
                $row["City"]. " | Age: " . 
                $row["Age"]. "<br>";
        }
    } 
    else {
        echo "0 results";
    }
  
   $conn->close();
  
?>
    header("location:../index.php?contact=success");
?>