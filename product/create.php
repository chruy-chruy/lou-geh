<?php 

include "../db_conn.php";
$supplier = ($_POST['supplier']);
$name = ucwords($_POST['name']);
$barcode = ucwords($_POST['barcode']);
$details = ucwords($_POST['details']);
$quantity = ucwords($_POST['quantity']);
$price = ucwords($_POST['price']);
//insert to delivery transaction
$sql = "INSERT INTO `delivery_transaction`(`supplier_code`, `item_name`, `barcode`, `details`, `quantity`, `price`) 
VALUES ('$supplier','$name','$barcode','$details','$quantity','$price')";
mysqli_query($conn, $sql);

//insert to items
$sql2 = "INSERT INTO `items`(`name`, `barcode`, `details`, `quantity`, `price`) 
VALUES ('$name','$barcode','$details','$quantity','$price')";

 mysqli_query($conn, $sql2);
 header("location:index.php?message=Create Succes");
?>