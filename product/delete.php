<?php
include "../db_conn.php";

$id= $_GET['id'];
$squery = mysqli_query($conn,"UPDATE `items` SET `del_status`='deleted' Where item_number = $id");


header("location:index.php?message=Deleted");
?>