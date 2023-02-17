<?php

include '../db_conn.php';
$item_name = ucwords($_POST['item_name']);
$quantity = ucwords($_POST['quantity']);
$price = ucwords($_POST['price']);
$total2 = ucwords($_POST['total2']);
$sold_by = ucwords($_POST['sold_by']);
$item_number = $_POST['item_number'];

$name = ucwords($_POST['name']);
$contact_number = ucwords($_POST['contact_number']);
$address = ucwords($_POST['address']);
echo $name;

$sql = "INSERT INTO `customer`(`name`, `contact_number`, `address`)
 VALUES ('$name','$contact_number','$address')";

mysqli_query($conn, $sql);

//insert into sale transaction
$sql2 = "INSERT INTO `sale_transaction`(`customer_name`, `item_name`, `quantity`, `price`, `total`, `sold_by`)
VALUES ('$name','$item_name','$quantity','$price','$total2','$sold_by')";
mysqli_query($conn, $sql2);

$sql3 = "UPDATE `items` SET `quantity`= items.quantity-$quantity 
WHERE item_number = $item_number";
mysqli_query($conn, $sql3);

header('location:index.php?message=Create Succes');
?>
