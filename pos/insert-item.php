<?php 

include "../db_conn.php";
$product_name = ($_POST['name']);
$item_number = ucwords($_POST['item_number']);
$selling_price = ucwords($_POST['selling_price']);
$stock = ucwords($_POST['stock']);
$quantity = ucwords($_POST['quantity']);
$total = $quantity*$selling_price;



// insert to pos
$sql = "INSERT INTO `pos`(`item_number`, `product_name`, `quantity`, `price`, `total_price`) 
VALUES ('$item_number','$product_name','$quantity ','$selling_price','$total')";
mysqli_query($conn, $sql);

//deduct quantity from products
$sql2 = "UPDATE `items` SET `quantity`= items.quantity-$quantity 
WHERE item_number = $item_number";
mysqli_query($conn, $sql2);

//insert to items
// $sql2 = "INSERT INTO `items`(`name`, `details`, `quantity`, `price`, `brand`, `selling_price`, `revenue`) 
// VALUES ('$name','$details','$quantity','$price','$brand','$selling_price','$revenue')";

//  mysqli_query($conn, $sql2);
 header("location:index.php");
?>