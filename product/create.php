<?php 

include "../db_conn.php";
$supplier = ($_POST['supplier']);
$name = ucwords($_POST['name']);
$details = ucwords($_POST['details']);
$quantity = ucwords($_POST['quantity']);
$price = ucwords($_POST['price']);
$brand = ucwords($_POST['brand']);
$selling_price = ucwords($_POST['selling_price']);
$revenue = ucwords($_POST['revenue']);

// //insert to purchase transaction
// $sql = "INSERT INTO `purchase_transaction`(`supplier_code`, `item_name`, `barcode`, `details`, `quantity`, `price`) 
// VALUES ('$supplier','$name','$barcode','$details','$quantity','$price')";
// mysqli_query($conn, $sql);

//insert to items
$sql2 = "INSERT INTO `items`(`name`, `details`, `quantity`, `price`, `brand`, `selling_price`, `revenue`) 
VALUES ('$name','$details','$quantity','$price','$brand','$selling_price','$revenue')";

 mysqli_query($conn, $sql2);
 header("location:index.php?message=Create Succes");
?>