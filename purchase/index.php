<?php 
$page = 'Inventory Report';
include "../db_conn.php";
if(isset($_GET['message'])){
      $message = $_GET['message'];
      echo "<script type='text/javascript'>alert('$message');</script>";
    
    }
    if(isset($_GET['date_from']) && isset($_GET['date_to'])){
        ;
        
                    
                if($_GET['date_to'] == null){
                    $date_from = $_GET['date_from'];
                    $date_to = $_GET['date_to'];
                }else{
                    $date_from = $_GET['date_from'];
                    $date_to = $_GET['date_to'];
                }
            
        }else{
            $date_from ;
            $date_to;
        }
        
          function asPesos($value) {
            if ($value<0) return "-".asPesos(-$value);
            return  number_format($value, 0);
            }
 ?>

<?php include "../includes/head.php";?>
<style>
button {
    padding: 10px;
    background-color: transparent;
    background-repeat: no-repeat;
    cursor: pointer;
    border-radius: 10px;
    border: none;
    background-color: #1f9103;
    color: rgb(241, 241, 241);

}

.hidden-print {
    /* text-align: center; */
    float: left;
    position: fixed;
    margin-left: 100px;
    overflow: visible;
}
</style>
<main>
    <div class="card">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0">Inventory Product</h5>
            <div>
                <form action="index.php">
                    <input type="date" type="date" onchange="dateFilter()" name="date_from" id=""
                        value="<?php echo $date_from ?>"> —
                    <input type="date" name="date_to" id="" onchange="dateFilter()" value="<?php echo $date_to ?>">
                    <button hidden type="submit" id="submit" class="btn btn-primary"></button>
                </form>
            </div>
            <div>
                <form action="print.php" method="post" target="_blank">
                    <input hidden type="date" type="date" onchange="dateFilter()" name="date_from" id=""
                        value="<?php echo $date_from ?>">
                    <input hidden type="date" name="date_to" id="" onchange="dateFilter()"
                        value="<?php echo $date_to ?>">
                    <button class="Button Button--outline" onclick="printDiv()"><i class="gg-printer"></i></button>
                </form>
            </div>
        </div>

        <div class="card-body">
            <table id="table" class="table">
                <thead>
                    <tr>
                        <th>Product Sale No.</th>
                        <th>Product</th>
                        <th>Product Code</th>
                        <th>Qty</th>
                        <th>Selling Price</th>
                        <th>Total Price</th>
                        <th>Date Order</th>
                        <th>Order No.</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php  if(isset($_GET['date_from']) && isset($_GET['date_to'])){
                        if($_GET['date_to'] == null){
                            $date_from = $_GET['date_from'];
                            $date_to =date("Y-m-d");
                        }else{
                            $date_from = $_GET['date_from'];
                            $date_to = $_GET['date_to'];
                        }
                    
                    $squery =  mysqli_query($conn,"SELECT * FROM product_sale WHERE created_at >= '$date_from' and created_at <= '$date_to  23:59:59.999'");
        while ($row = mysqli_fetch_array($squery)) {
          ?>

                    <tr>
                        <td><?php echo $row['product_sale_number'] ?></td>
                        <td><?php echo $row['product_name'] ?></td>
                        <td><?php echo $row['item_number'] ?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['total_price'] ?></td>
                        <td><?php echo date("l, F j Y g:i A", strtotime($row['created_at'])) ?></td>
                        <td><?php echo $row['transaction_number'] ?></td>
                        <td>
                            <div class="btn btn-secondary btn-sm" data-toggle="modal"
                                data-target="#view_<?php echo $row['product_sale_number'] ?>">View</div>
                        </td>
                    </tr>
                    <?php  include "modal-view.php"; ?>
                    <?php }} else{
                        $date_from;
                        $date_to;
                        $squery =  mysqli_query($conn,"SELECT * FROM product_sale");
        while ($row = mysqli_fetch_array($squery)) {
?>
                    <tr>
                        <td><?php echo $row['product_sale_number'] ?></td>
                        <td><?php echo $row['product_name'] ?></td>
                        <td><?php echo $row['item_number'] ?></td>
                        <td><?php echo $row['quantity'] ?></td>
                        <td><?php echo $row['price'] ?></td>
                        <td><?php echo $row['total_price'] ?></td>
                        <td><?php echo date("l, F j Y g:i A", strtotime($row['created_at'])) ?></td>
                        <td><?php echo $row['transaction_number'] ?></td>
                        <td>
                            <div class="btn btn-secondary btn-sm" data-toggle="modal"
                                data-target="#view_<?php echo $row['product_sale_number'] ?>">View</div>
                        </td>
                    </tr>
                    <?php  include "modal-view.php"; ?>
                    <?php }} ?>
                </tbody>

            </table>
        </div>
    </div>
    </div>
</main>
</body>

</html>
<script>
function dateFilter() {
    document.getElementById("submit").click()

}
</script>
<script src="../assets/js/table.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>