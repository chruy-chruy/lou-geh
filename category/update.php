<?php 
include "../db_conn.php";
$name = ucwords($_POST['name']);
$id = $_POST['id'];


$sql = "UPDATE `category` SET 
`name`='$name'
Where category_id = '$id'";
mysqli_query($conn, $sql);

header("location:index.php?message=updated");
?>