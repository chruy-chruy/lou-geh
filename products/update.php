<?php 

include "../db_conn.php";
$name = ucwords($_POST['name']);
$details = ucwords($_POST['details']);
$quantity = ucwords($_POST['quantity']);
$price = ucwords($_POST['price']);
$brand = ucwords($_POST['brand']);
$selling_price = ucwords($_POST['selling_price']);
$revenue = ucwords($_POST['revenue']);
$id = $_GET['id'];


$sql = "UPDATE `items` SET 
`name`='$name',
`details`='$details',
`quantity`='$quantity',
`price`='$price',
`brand`='$brand',
`selling_price`='$selling_price',
`revenue`='$revenue'
Where item_number = $id";
mysqli_query($conn, $sql);

header("location:index.php?message=updated");
?>
