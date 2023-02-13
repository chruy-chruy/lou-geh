<?php 

include "../db_conn.php";
$name = ucwords($_POST['name']);
$contact_number = ucwords($_POST['contact_number']);
$address = ucwords($_POST['address']);
echo $name;

$sql = "INSERT INTO `customer`(`name`, `contact_number`, `address`)
 VALUES ('$name','$contact_number','$address')";

mysqli_query($conn, $sql);
header("location:index.php?message=Create Succes");
?>