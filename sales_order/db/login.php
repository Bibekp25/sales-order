<?php
include '../connect.php';
if (isset($_POST['submit'])) {
     $email = $_POST['email'];
      $password = $_POST['password'];
     $sql = "SELECT * FROM `login` WHERE `email` = '$email' AND `password` = '$password'";
     $result = mysqli_query($conn, $sql);
     if (mysqli_num_rows($result) > 0) {
      header("location:../index.php");

     exit();
     } else {
      header("location:../loginform.php?login=failed");

        }
       mysqli_close($conn);
}
?>