<?php
include "../db_conn.php";

$id= $_GET['id'];
$squery = mysqli_query($conn,"UPDATE `customer` SET `del_status`='deleted' Where customer_number = $id");


header("location:index.php?message=Deleted");
?>