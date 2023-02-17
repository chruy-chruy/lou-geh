<?php
include '../db_conn.php';
$squery = mysqli_query(
    $conn,
    "SELECT year(created_at) as 'year',month(created_at) as 'month',sum(total) as 'total' from sale_transaction group by year(created_at),month(created_at)order by year(created_at),month(created_at)"
);
// while ($row = mysqli_fetch_array($squery)) {
//     $result =  ;
// }
$result = [];
while ($row = mysqli_fetch_array($squery)) {
    array_push($result, [
        'year' => $row['year'],
        'month' => $row['month'],
        'total' => $row['total'],
    ]);
}

echo json_encode($result);
?>
