<?php
include "../db_conn.php";

$id= $_GET['id'];
$squery = mysqli_query($conn,"UPDATE `supplier` SET `del_status`='deleted' Where supplier_code = '$id'");


header("location:index.php?message=Deleted");
?>