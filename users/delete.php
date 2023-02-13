<?php
include "../db_conn.php";

$id= $_GET['id'];
$squery = mysqli_query($conn,"UPDATE `user` SET `del_status`='deleted' Where id = '$id'");


header("location:index.php?message=Deleted");
?>