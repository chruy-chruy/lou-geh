<?php 

include "../db_conn.php";
$supplier = ($_POST['supplier']);
$name = ucwords($_POST['name']);
$details = ucwords($_POST['details']);
$quantity = ucwords($_POST['quantity']);
$price = ucwords($_POST['price']);
$id = $_GET['id'];

//update to delivery transaction
$sql = "UPDATE `delivery_transaction` SET 
`supplier_code`='$supplier',
`item_name`='$name',
`details`='$details',
`quantity`='$quantity',
`price`='$price' 
Where transaction_no = $id";
mysqli_query($conn, $sql);

header("location:index.php?message=updated");
?>