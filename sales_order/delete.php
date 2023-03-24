<?php
include "connect.php";
// sql to delete a record
if (isset($_GET['id'])){
    $id = $_GET['id'];

$sql = "DELETE FROM sales WHERE sales_id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
header("location:index.php?sales=success");
?>