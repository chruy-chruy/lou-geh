<?php 
session_start();
include "../db_conn.php";
$total = $_POST['total'];
$amount = $_POST['amount'];
$print = $_POST['print'];
$change = $amount-$total;

if ($_POST['customer'])
{$customer = ucwords($_POST['customer']);}
else $customer = "Walk-In";

$sold_by = $_SESSION['fullName']." (". $_SESSION['role'].") ";

// $pos = mysqli_fetch_assoc(mysqli_query($conn,"SELECT quantity FROM `pos` WHERE item_number = $item_number"));
// $quantity = $pos['quantity'];

//create order number or sale transaction
$sql = "INSERT INTO `sale_transaction`(`customer_name`, `amount`, `total`, `change`, `sold_by`) 
VALUES ('$customer','$amount','$total','$change','$sold_by')";
mysqli_query($conn, $sql);
$last_id = mysqli_insert_id($conn);


// $result = mysqli_fetch_assoc($squery);
// echo $result['transaction_no'];

// insert pos products using while loop to product_sale table from pos
$squery = mysqli_query($conn,"SELECT * from `pos`");
                        while ($row = mysqli_fetch_array($squery)) {
                            $item_number = $row['item_number'];
                            $product_name = $row['product_name'];
                            $quantity = $row['quantity'];
                            $price = $row['price'];
                            $total_price = $row['total_price'];
                            
                            $sql = "INSERT INTO `product_sale`(`transaction_number`, `item_number`, `product_name`, `quantity`, `price`, `total_price`) 
                                                            VALUES ('$last_id','$item_number',' $product_name','$quantity',' $price',' $total_price')";
                            mysqli_query($conn, $sql);  

                        }

//truncate or Clear POS table 
$squery = mysqli_query($conn,"TRUNCATE `pos`");

echo 
" total: ".$total. 
" amount: ".$amount. 
" customer: ".$customer. 
" change: ".$change. 
" print: ".$print;


if($print == 'on'){
    // header("location:receipt.php?transaction_id=$last_id");
?>
<script>
var printWindow = window.open('./receipt.php?transaction_id=<?php echo $last_id;?>');
back();

function back() {
    window.location.replace("index.php?message=Success Order!");
}
</script>
<?php }else{
    header("location:index.php?message=Success Order!");
}?>