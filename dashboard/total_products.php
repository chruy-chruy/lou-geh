<?php
include '../db_conn.php';
$sql =
    "SELECT count(quantity) as total_products FROM items where del_status != 'deleted' AND quantity > 0";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$products_available = $row['total_products'];

$sql =
    "SELECT count(quantity) as total_products FROM items where del_status != 'deleted' AND quantity <= 0";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$products_unavailable = $row['total_products'];

?>
