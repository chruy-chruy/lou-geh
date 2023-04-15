<?php 

include "../db_conn.php";
$name = ucwords($_POST['name']);


$sql = "INSERT INTO `category`(`name`)
 VALUES ('$name')";

mysqli_query($conn, $sql);
header("location:index.php?message=Create Succes");
?>