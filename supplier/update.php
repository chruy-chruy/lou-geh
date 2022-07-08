<?php 

include "../db_conn.php";
$name = ucwords($_POST['name']);
$company_name = ucwords($_POST['company_name']);
$contact_number = ucwords($_POST['contact_number']);
$address = ucwords($_POST['address']);
$id = $_GET['id'];


$sql = "UPDATE `supplier` SET 
`name`='$name',
`company_name`='$company_name',
`contact_number`='$contact_number',
`address`='$address' 
Where supplier_code = '$id'";
mysqli_query($conn, $sql);

header("location:index.php?message=updated");
?>
