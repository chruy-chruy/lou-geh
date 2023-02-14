<?php
include '../db_conn.php';
$sql = 'SELECT sum(quantity) as unit_sold FROM sale_transaction';
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['unit_sold'];

?>
