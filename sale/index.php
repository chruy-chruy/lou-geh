<?php 
$page = 'Sale Transaction';
include "../db_conn.php";
if(isset($_GET['message'])){
    $message = $_GET['message'];
    echo "<script type='text/javascript'>alert('$message');</script>";
  
  }
 ?>

<?php include "../includes/head.php";?> 

<main>
  <div class="card">
  <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0">Sale</h5>
  
<div class="dropdown">
  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    New Transaction
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="add-sale-old.php">Old Customer</a></li>
    <li><a class="dropdown-item" href="add-sale-new.php">New Customer</a></li>
  </ul>
</div>
    </div>
    <div class="card-body">
      

 <table id="table" class="table table-responsive" >
        <thead>
            <tr>
                <th>Transaction No.</th>
                <th>Customer Name</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price Per Unit</th>
                <th>Total Price</th>
                <th>Date</th>
                <th>Sold By</th>
            </tr>
        </thead>
        <tbody>
        <?php
                    $squery =  mysqli_query($conn, "SELECT * from sale_transaction");
                    while ($row = mysqli_fetch_array($squery)) {
                    ?>
            <tr>
            <td><?php echo $row['transaction_no'] ?></td>
            <td><?php echo $row['customer_name'] ?></td>
            <td><?php echo $row['item_name'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['total'] ?></td>
            <td><?php echo date("l, F j Y g:i A", strtotime($row["created_at"])); ?></td>
            <td><?php echo $row['sold_by'] ?></td>
            </tr> <?php }?>
            </tbody>
           
    </table>
    </div>
  </div>
</main>
 </body>
 </div>
 </html>
 <script src="../assets/js/table.js"></script>
 