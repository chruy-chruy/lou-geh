<?php 

include "../db_conn.php";
$name = ucwords($_POST['name']);
$contact_number = ucwords($_POST['contact_number']);
$address = ucwords($_POST['address']);
$id = $_GET['id'];


$sql = "UPDATE `customer` SET 
`name`='$name',
`contact_number`='$contact_number',
`address`='$address' 
Where customer_number = '$id'";
mysqli_query($conn, $sql);

header("location:index.php?message=updated");
?>
