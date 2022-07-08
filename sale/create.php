<?php 

include "../db_conn.php";
$customer = ($_POST['customer']);
$item = ucwords($_POST['item']);
$quantity = ucwords($_POST['quantity']);
$price = ucwords($_POST['price']);
$total2 = ucwords($_POST['total2']);
$sql = "INSERT INTO `sale_transaction`(`customer_name`, `item_name`, `quantity`, `price`, `total`) 
VALUES ('$customer','$item','$quantity','$price','$total2')";
mysqli_query($conn, $sql);

 header("location:index.php?message=Create Succes");
?>