<?php
include "../db_conn.php";

$id= $_GET['id'];
$squery = mysqli_query($conn,"UPDATE `category` SET `del_status`='deleted' Where category_id = $id");


header("location:index.php?message=Deleted");
?>