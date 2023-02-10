<?php 

include "../db_conn.php";
$supplier = ($_POST['supplier']);
$item = ucwords($_POST['item']);
$details = ucwords($_POST['details']);
$quantity = ucwords($_POST['quantity']);
$price = ucwords($_POST['price']);
$brand = ucwords($_POST['brand']);
$total = ucwords($_POST['total']);
$date = ucwords($_POST['date']);

//insert to purchase transaction
$sql = "INSERT INTO `purchase_transaction`(`supplier_code`, `item_name`, `details`, `quantity`, `price`, `date`, `total_cost`, `brand`) 
VALUES ('$supplier','$item','$details','$quantity','$price','$date','$total','$brand')";
mysqli_query($conn, $sql);

// //insert to items
// $sql2 = "INSERT INTO `items`(`name`, `barcode`, `details`, `quantity`, `price`) 
// VALUES ('$name','$barcode','$details','$quantity','$price')";

//  mysqli_query($conn, $sql2);
 header("location:index.php?message=Create Succes");
?>