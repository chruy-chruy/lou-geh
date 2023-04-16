<?php 

include "../db_conn.php";
$product_name = $_POST['name'];
$item_number = $_POST['item_number'];
$selling_price = $_POST['selling_price'];
$stock = $_POST['stock'];
$quantity = $_POST['quantity'];
$pos_id = $_POST['pos_id'];
$total = $quantity*$selling_price;

$pos = mysqli_fetch_assoc(mysqli_query($conn,"SELECT quantity FROM `pos` WHERE item_number = $item_number"));

echo " product_name: ".$product_name .
" item_number: ".$item_number .
" selling_price: ".$selling_price .
" stock: ".$stock .
" quantity: ".$quantity .
" total: ".$total.
" pos_id: ".$pos_id.
" pos_quantity: ".$pos["quantity"];


if($quantity == $pos["quantity"]){
    header("location:index.php?message=Update Succes");
}
else if($stock < $quantity){
 header("location:index.php?error=Invalid Quantity");
}
else if($quantity <= 0){
    header("location:index.php?error=Invalid Quantity");
}
else if($stock >= $quantity){

$update_stocks = $quantity - $pos["quantity"];
// update product
$sql =  "UPDATE `items` SET `quantity`= items.quantity-$update_stocks WHERE item_number = $item_number";
mysqli_query($conn, $sql); 
// update pos
$sql2 = "UPDATE `pos` SET `quantity`='$quantity', `total_price`='$total' WHERE pos_id = $pos_id";
mysqli_query($conn, $sql2); 
    
header("location:index.php?message=Update Product Succes!");
}


?>