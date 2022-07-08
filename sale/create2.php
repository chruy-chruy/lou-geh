<?php 

include "../db_conn.php";
$item = ucwords($_POST['item']);
$quantity = ucwords($_POST['quantity']);
$price = ucwords($_POST['price']);
$total2 = ucwords($_POST['total2']);
$name = ucwords($_POST['name']);
$contact_number = ucwords($_POST['contact_number']);
$address = ucwords($_POST['address']);
echo $name;

$sql = "INSERT INTO `customer`(`name`, `contact_number`, `address`)
 VALUES ('$name','$contact_number','$address')";

mysqli_query($conn, $sql);

//insert into sale transaction
$sql2 = "INSERT INTO `sale_transaction`(`customer_name`, `item_name`, `quantity`, `price`, `total`) 
VALUES ('$name','$item','$quantity','$price','$total2')";
mysqli_query($conn, $sql2);

 header("location:index.php?message=Create Succes");
?>