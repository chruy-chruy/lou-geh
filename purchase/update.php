<?php 

include "../db_conn.php";
$supplier = ($_POST['supplier']);
$name = ucwords($_POST['name']);
$details = ucwords($_POST['details']);
$quantity = ucwords($_POST['quantity']);
$price = ucwords($_POST['price']);
$brand = ucwords($_POST['brand']);
$total = ucwords($_POST['total']);
$date = ucwords($_POST['date']);
$id = $_GET['id'];

//update to purchase transaction
$sql = "UPDATE `purchase_transaction` SET 
`supplier_code`='$supplier',
`item_name`='$name',
`details`='$details',
`quantity`='$quantity',
`price`='$price',
`date`='$date',
`brand`='$brand',
`total_cost`='$total'
Where transaction_no = $id";
mysqli_query($conn, $sql);

header("location:index.php?message=updated");
?>