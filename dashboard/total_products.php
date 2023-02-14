<?php
include '../db_conn.php';
$sql =
    "SELECT count(quantity) as total_products FROM items where del_status != 'deleted'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['total_products'];

?>
