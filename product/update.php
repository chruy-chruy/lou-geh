<?php 

include "../db_conn.php";
$name = ucwords($_POST['name']);
$details = ucwords($_POST['details']);
$quantity = ucwords($_POST['quantity']);
$price = ucwords($_POST['price']);
$id = $_GET['id'];


$sql = "UPDATE `items` SET 
`name`='$name',
`details`='$details',
`quantity`='$quantity',
`price`='$price' 
Where item_number = $id";
mysqli_query($conn, $sql);

header("location:index.php?message=updated");
?>
