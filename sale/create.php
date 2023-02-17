<?php

include '../db_conn.php';
$customer = $_POST['customer'];
$item_name = ucwords($_POST['item_name']);
$item_number = $_POST['item_number'];
$quantity = ucwords($_POST['quantity']);
$price = ucwords($_POST['price']);
$total2 = ucwords($_POST['total2']);
$sold_by = ucwords($_POST['sold_by']);

$deducted = $sql = "INSERT INTO `sale_transaction`(`customer_name`, `item_name`, `quantity`, `price`, `total`, `sold_by`) 
VALUES ('$customer','$item_name','$quantity','$price','$total2','$sold_by')";
mysqli_query($conn, $sql);

$sql = "UPDATE `items` SET `quantity`= items.quantity-$quantity 
WHERE item_number = $item_number";
mysqli_query($conn, $sql);

header('location:index.php?message=Create Succes');
?>
