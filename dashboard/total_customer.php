<?php
include '../db_conn.php';
$sql =
    "SELECT count(customer_number) as total_customer FROM customer where del_status != 'deleted'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['total_customer'];

?>