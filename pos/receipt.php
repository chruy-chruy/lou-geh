<?php
session_start();
include "../db_conn.php";
$transaction_id = $_GET['transaction_id'];function asPesos($value) {
    if ($value<0) return "-".asPesos(-$value);
    return  number_format($value, 0);
    } 
$sql = "SELECT * FROM sale_transaction WHERE transaction_no = $transaction_id";
$sale_query = mysqli_query($conn, $sql);
$sale_transaction = mysqli_fetch_array($sale_query);
$sold_by = $_SESSION['fullName'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice POS</title>
    <link rel="stylesheet" href="../assets/css/receipt.css" />
</head>

<body>
    <div id="invoice-POS">

        <center id="top">
            <img id="logo" src="../assets/images/logo.png" alt="Logo">
            <div class="info">
                <h2>SAVESEGROW POS</h2>
            </div>
            <!--End Info-->
        </center>
        <!--End InvoiceTop-->

        <div id="mid">
            <div class="info">
                <p>
                    Malandag Public Market, Sampaguita St., Cor. Molave St, Malungon, Sarangani
                    savesegrow@gmail.com
                    09123456789
                </p>
            </div>

            <p>
                Transaction No: <?php echo $sale_transaction['transaction_no'];?>
                <br>
                Date:<?php echo date("Y/m/d");?>
                <br>
                Customer: <?php echo $sale_transaction['customer_name'];?>
                <br>
                Cashier: <?php echo $sold_by;?>
            </p>
        </div>
        <!--End Invoice Mid-->

        <div id="bot">

            <div id="table">
                <table>
                    <thead>
                        <tr class="tabletitle">
                            <td class="item">
                                <h2>Item</h2>
                            </td>
                            <td class="item2">
                                <h2>Qty</h2>
                            </td>
                            <td class="item2">
                                <h2>Price</h2>
                            </td>
                            <td class="Rate">
                                <h2>Sub Total</h2>
                            </td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $squery = mysqli_query($conn,"SELECT * from `product_sale` WHERE transaction_number = $transaction_id;");
                        while ($row = mysqli_fetch_array($squery)) { ?>
                        <tr class="service">
                            <td class="tableitem">
                                <p class="itemtext"><?php echo $row['product_name'];?></p>
                            </td>
                            <td class="tableitem">
                                <p class="itemtext2"><?php echo $row['quantity'];?></p>
                            </td>
                            <td class="tableitem">
                                <p class="itemtext2"><?php echo asPesos($row['price']);?></p>
                            </td>
                            <td class="tableitem">
                                <p class="itemtext3"><?php echo asPesos($row['total_price']);?></p>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>

                    <!-- <tr class="tabletitle">
                        <td></td>
                        <td class="Rate">
                            <h2>tax</h2>
                        </td>
                        <td class="payment">
                            <h2>$419.25</h2>
                        </td>
                    </tr> -->

                    <tr class="total">
                        <td></td>
                        <td></td>
                        <td>
                            <h2>Total</h2>
                        </td>
                        <td class="payment">
                            <h2><?php echo '₱'. asPesos($sale_transaction['total']);?></h2>
                        </td>
                    </tr>
                    <tr class="total">
                        <td></td>
                        <td></td>
                        <td>
                            <h2>Amount Tendered</h2>
                        </td>
                        <td class="payment">
                            <h2><?php echo '₱'. asPesos($sale_transaction['amount']);?></h2>
                        </td>
                    </tr>
                    <tr class="total" style="  border-bottom: 1px solid #eee;">
                        <td></td>
                        <td></td>
                        <td>
                            <h2>Change</h2>
                        </td>
                        <td class="payment">
                            <h2><?php echo '₱'. asPesos($sale_transaction['change']);?></h2>
                        </td>
                    </tr>
                </table>
            </div>
            <!--End Table-->

            <div id="footer">
                <p class="footer-p"><strong>Thank you for buying!
                        <br>
                        We care. We grow
                    </strong> </p>
            </div>

        </div>
        <!--End InvoiceBot-->
    </div>
    <!--End Invoice-->

    <button style=" margin-top: 5mm;" id="btnPrint" class="hidden-print">Print</button>
    <a href="index.php"><button style=" margin-top: 5mm;" id="btnBack" class="hidden-print">Done</button></a>
</body>
<script>
const $btnPrint = document.querySelector("#btnPrint");
$btnPrint.addEventListener("click", () => {
    window.print();
});
</script>

</html>