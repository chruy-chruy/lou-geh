<?php
include '../db_conn.php';

$id = $_GET['id'];
$squery = mysqli_query(
    $conn,
    "UPDATE `purchase_transaction` SET `del_status`='deleted' Where transaction_no = $id"
);

header('location:index.php?message=Deleted');
?>
