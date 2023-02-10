<?php 

include "../db_conn.php";
$customer = ($_POST['customer']);
$item_name = ucwords($_POST['item_name']);
$quantity = ucwords($_POST['quantity']);
$price = ucwords($_POST['price']);
$total2 = ucwords($_POST['total2']);
$sold_by = ucwords($_POST['sold_by']);

$sql = "INSERT INTO `sale_transaction`(`customer_name`, `item_name`, `quantity`, `price`, `total`, `sold_by`) 
VALUES ('$customer','$item_name','$quantity','$price','$total2','$sold_by')";
mysqli_query($conn, $sql);

 header("location:index.php?message=Create Succes");
?>