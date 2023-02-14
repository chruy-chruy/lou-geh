<?php
include '../db_conn.php';
$sql =
    "SELECT count(supplier_code) as total_supplier FROM supplier where del_status != 'deleted'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['total_supplier'];

?>
