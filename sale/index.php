<?php 
$page = 'Sale Transaction';
include "../db_conn.php";
date_default_timezone_set('Asia/Singapore');
if(isset($_GET['message'])){
    $message = $_GET['message'];
    echo "<script type='text/javascript'>alert('$message');</script>";
  }

//   if(($_GET['date_from'] && $_GET['date_to']) !== null){
//     $date_from = $_GET['date_from'];
//     $date_to = $_GET['date_to'];
//   }
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
    $date_from;
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
            <h5 class="m-0">Sale</h5>
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
                    <button class="btn btn-primary" onclick="printDiv()">
                    <!-- <i class="gg-printer"></i> -->
                    PRINT
                </button>
                </form>
            </div>
        </div>
        <div class="card-body">


            <table id="table" class="table table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th>Transaction No.</th>
                        <th>Customer</th>
                        <th>Total Price</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(isset($_GET['date_from']) && isset($_GET['date_to'])){
                        if($_GET['date_to'] == null){
                            $date_from = $_GET['date_from'];
                            $date_to = date("Y-m-d");
                          
                        }else{
                            $date_from = $_GET['date_from'];
                            $date_to = $_GET['date_to'];
                        }

                        $squery =  mysqli_query($conn, "SELECT * from sale_transaction WHERE created_at BETWEEN '$date_from' AND '$date_to 23:59:59.999' ");
                        while ($row = mysqli_fetch_array($squery)) {
                            ?>
                    <tr>
                        <td><?php echo $row['transaction_no'] ?></td>
                        <td><?php echo $row['customer_name'] ?></td>
                        <td><?php echo $row['total'] ?></td>
                        <td><?php echo date("l, F j Y g:i A", strtotime($row["created_at"])); ?></td>
                        <td>
                            <div class="btn btn-secondary btn-sm" data-toggle="modal"
                                data-target="#view_<?php echo $row['transaction_no'] ?>">View</div>
                        </td>
                    </tr>
                    <?php  include "modal-view.php"; ?>
                    <?php }} else{
                        $date_from;
                        $date_to;

                           $squery =  mysqli_query($conn, "SELECT * from sale_transaction");
                    while ($row = mysqli_fetch_array($squery)) {
                    ?>
                    <tr>
                        <td><?php echo $row['transaction_no'] ?></td>
                        <td><?php echo $row['customer_name'] ?></td>
                        <td><?php echo $row['total'] ?></td>
                        <td><?php echo date("l, F j Y g:i A", strtotime($row["created_at"])); ?></td>
                        <td>
                            <div class="btn btn-blue btn-sm" data-toggle="modal"
                                data-target="#view_<?php echo $row['transaction_no'] ?>">View</div>
                        </td>
                    </tr>
                    <?php  include "modal-view.php"; ?>
                    <?php }} ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
</body>
</div>
<script>
function dateFilter() {
    document.getElementById("submit").click()

}
</script>

</html>
<script src="../assets/js/table.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>