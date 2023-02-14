<?php
include '../db_conn.php';
$sql = 'SELECT sum(total) as total_sales FROM sale_transaction';
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['total_sales'];

?>
