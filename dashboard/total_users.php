<?php
include '../db_conn.php';
$sql =
    "SELECT count(id) as total_users FROM user where del_status != 'deleted'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['total_users'];

$sql =
    "SELECT count(id) as total_inventory_staff FROM user where del_status != 'deleted' AND role ='Inventory Staff'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_inventory_staff = $row['total_inventory_staff'];

$sql =
    "SELECT count(id) as total_sales_staff FROM user where del_status != 'deleted' AND role ='Sales Staff'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$total_sales_staff = $row['total_sales_staff'];
?>
