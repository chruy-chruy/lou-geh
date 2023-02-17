<?php
include '../db_conn.php';

$item_number = $_GET['item_number'];
$sql = "SELECT * FROM items WHERE item_number='$item_number' AND del_status != 'deleted'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo $row['selling_price'] .
    ',' .
    $row['name'] .
    ',' .
    $row['item_number'] .
    ',' .
    $row['quantity'];
?>
