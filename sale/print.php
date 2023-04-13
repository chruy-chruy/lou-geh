<?php
include '../db_conn.php';
$date_from = $_POST['date_from'];
$date_to = $_POST['date_to'];
function asPesos($value) {
    if ($value<0) return "-".asPesos(-$value);
    return  number_format($value, 0);
    } 
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
        }

        #customers td,
        th {
            border: 1px solid #b1b1b1;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #108b47;
            color: white;
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        button {
            padding: 15px;
            background-color: transparent;
            background-repeat: no-repeat;
            cursor: pointer;
            border-radius: 50%;
            border: none;
            background-color: #1f9103;
            color: rgb(241, 241, 241);

        }
        .total_sale{
            text-align:right;
        }

        .hidden-print {
            /* text-align: center; */
            float: left;
            position: fixed;
            margin-left: 100px;
            overflow: visible;
        }


        /* print btn */
        .gg-printer {
            background:
                linear-gradient(to left,
                    currentColor 5px, transparent 0) no-repeat 0 10px/6px 2px,
                linear-gradient(to left,
                    currentColor 5px, transparent 0) no-repeat 14px 10px/6px 2px,
                linear-gradient(to left,
                    currentColor 5px, transparent 0) no-repeat 4px 4px/2px 2px;
            box-sizing: border-box;
            position: relative;
            display: block;
            transform: scale(var(--ggs, 1));
            width: 24px;
            height: 14px;
            border: 2px solid transparent;
            border-bottom: 0;
            box-shadow:
                inset 0 2px 0,
                inset 2px 2px 0,
                inset -2px 2px 0,
                inset -2px 2px 0
        }

        .gg-printer::after,
        .gg-printer::before {
            content: "";
            display: block;
            box-sizing: border-box;
            position: absolute;
            width: 12px;
            border: 2px solid;
            left: 4px
        }

        .gg-printer::before {
            height: 6px;
            top: -4px
        }

        .gg-printer::after {
            height: 8px;
            top: 8px
        }

        /* print */

        @media print {
            @page {
                size: A4;
            }

            .hidden-print,
            .hidden-print * {
                display: none !important;
            }

            body {
                -webkit-print-color-adjust: exact;
            }

            table {
                page-break-inside: avoid;
            }

            #customers {
                width: 100%;
            }

            #printableTable {
                background-color: white;
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
                margin: 0;
                font-size: 14px;
                line-height: 18px;
            }

        }
    </style>
</head>

<body>
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
                            $date_from = $date_from;
                            $date_to =date("Y-m-d");
                        }else{
                            $date_from =$date_from;
                            $date_to = $date_to;
                        }

                        $squery =  mysqli_query($conn, "SELECT * from sale_transaction WHERE created_at BETWEEN '$date_from' AND '$date_to' ");
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
                ?>      <tr>
                <td><?php echo $row['transaction_no'] ?></td>
                <td><?php echo $row['customer_name'] ?></td>
                <td><?php echo $row['created_at'] ?></td>
                <td><?php echo $row['sold_by'] ?></td>
                <td><?php echo '₱'. asPesos($row['total']) ?></td> 
            </tr>


                   <?php }} ?>
            <?php if(isset($date_from) && isset($date_to)){
                        if($date_to == null){
                            $date_from =$date_from;
                            $date_to =date("Y-m-d");
                        }else{
                            $date_from =$date_from;
                            $date_to = $date_to;
                        }
                        $total =  mysqli_query($conn, "SELECT SUM(total) as total from sale_transaction WHERE created_at BETWEEN '$date_from' AND '$date_to' ");
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