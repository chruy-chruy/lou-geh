<?php 

include "../db_conn.php";
$name = ucwords($_POST['name']);
$company_name = ucwords($_POST['company_name']);
$contact_number = ucwords($_POST['contact_number']);
$address = ucwords($_POST['address']);
$code =  uniqid();


$sql = "INSERT INTO `supplier`(`supplier_code`, `name`, `company_name`, `contact_number`, `address`)
 VALUES ('$code','$name','$company_name','$contact_number','$address')";

mysqli_query($conn, $sql);
header("location:index.php?message=Create Succes");
?>