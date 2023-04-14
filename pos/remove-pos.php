<?php 

include "../db_conn.php";
$item_number = $_POST['item_number'];
$pos_id = $_POST['pos_id'];


$pos = mysqli_fetch_assoc(mysqli_query($conn,"SELECT quantity FROM `pos` WHERE item_number = $item_number"));
$quantity = $pos['quantity'];
echo " pos_id: ".$pos_id.
" item_number: ".$item_number. 
" quantity pos: ".$quantity;


// update product
$sql =  "UPDATE `items` SET `quantity`= items.quantity+$quantity WHERE item_number = $item_number";
mysqli_query($conn, $sql); 
// dlete pos
$sql2 = "DELETE FROM `pos` WHERE pos_id = $pos_id";
mysqli_query($conn, $sql2); 
    
header("location:index.php?message=Remove Product Succes!");
?>