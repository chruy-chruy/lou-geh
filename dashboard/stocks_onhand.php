<?php
include '../db_conn.php';
$sql =
    "SELECT sum(quantity) as stocks_onhand   FROM items WHERE del_status != 'deleted'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['stocks_onhand'];

?>
