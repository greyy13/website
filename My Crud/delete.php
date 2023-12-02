<?php
include "dbcon.php";
$id = $_GET["Customer_Id"];
$sql = "DELETE FROM customer_table WHERE Customer_Id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  echo "Record deleted successfully";
  header("Location: index.php");
} else {
  echo "Failed: " . mysqli_error($conn);
}
