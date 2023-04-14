<?php
include '../db_conn.php';
$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];
date_default_timezone_set('Asia/Singapore');
function asPesos($value) {
    if ($value<0) return "-".asPesos(-$value);
    return  number_format($value, 0);
    } 
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <link rel="stylesheet" href="../assets/css/print.css">
</head>

<body>
    <img class="logo" src="../assets/images/logo.png" alt="">
    <h5> Malandag Public Market, Sampaguita St.
        <br> Cor. Molave St, Malungon, Sarangani
        <br>
        savesegrow@gmail.com
        <br>
        09123456789
    </h5>
    <h1>Sales Report</h1>
    <div id="printBtn" class="hidden-print">
        <button class="Button Button--outline" onclick="printDiv()"><i class="gg-printer"></i></button>
    </div>
    <div id="printableTable">
        <table id="customers">
            <thead>
                <tr>
                    <th>Pos No.</th>
                    <th>Customer Name</th>
                    <th>Date Order</th>
                    <th>Sold By</th>
                    <th>Total Price</th>
                </tr>
            </thead>
            <tbody>
                <?php      
            if(isset($date_from) && isset($date_to)){
                             if($date_to == null){
                                  $date_from =$_POST['date_from'];
                                    $date_to =date("Y-m-d");
                            }else{
                                 $date_from =$_POST['date_from'];
                                $date_to = $_POST['date_to'];
                        }

                        $squery =  mysqli_query($conn, "SELECT * from sale_transaction WHERE created_at BETWEEN '$date_from' AND '$date_to  23:59:59.999' ");
                        while ($row = mysqli_fetch_array($squery)) {
                            ?>
                <tr>
                    <td><?php echo $row['transaction_no'] ?></td>
                    <td><?php echo $row['customer_name'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                    <td><?php echo $row['sold_by'] ?></td>
                    <td><?php echo '₱'. asPesos($row['total']) ?></td>
                </tr>
                <?php }}else{
                        $date_from;
                        $date_to;

                           $squery =  mysqli_query($conn, "SELECT * from sale_transaction");
                    while ($row = mysqli_fetch_array($squery)) {
                ?> <tr>
                    <td><?php echo $row['transaction_no'] ?></td>
                    <td><?php echo $row['customer_name'] ?></td>
                    <td><?php echo $row['created_at'] ?></td>
                    <td><?php echo $row['sold_by'] ?></td>
                    <td><?php echo '₱'. asPesos($row['total']) ?></td>
                </tr>


                <?php }} ?>
                <?php if(isset($date_from) && isset($date_to)){
                        if($date_to == null){
                            $date_from;
                            $date_to = date("Y-m-d");
                    }else{
                         $date_from;
                        $date_to;
                        }
                        $total =  mysqli_query($conn, "SELECT SUM(total) as total from sale_transaction WHERE created_at BETWEEN '$date_from' AND '$date_to  23:59:59.999' ");
            while ($row = mysqli_fetch_array($total)) { ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total_sale">Total</td>
                    <td><?php echo '₱'. asPesos($row['total']) ?></td>
                </tr>
                <?php }}else{
                        $date_from;
                        $date_to;
                        $total =  mysqli_query($conn, "SELECT SUM(total) as total from sale_transaction");
                        while ($row = mysqli_fetch_array($total)) {?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="total_sale">Total</td>
                    <td><?php echo '₱'. asPesos($row['total']) ?></td>
                </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>
    <script>
    function printDiv() {
        window.print();
    }
    </script>
</body>

</html>