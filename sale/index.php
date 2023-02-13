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
  
<div class="dropdown">
  <button class="dropbtn">Add Transaction</button>
  <div class="dropdown-content">
  <a href="add-sale-old.php">Old Customer</a>
  <a href="add-sale-new.php">New Customer</a>
  </div>
</div>
 <table id="table" class="table table-striped" style="width:100%; border: 3px;">
        <thead>
            <tr>
                <th>Transaction No</th>
                <th>Customer Name</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price per unit</th>
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
</main>
 </body>
 </div>
 </html>
 <script src="../assets/js/table.js"></script>
 