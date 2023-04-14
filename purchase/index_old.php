<?php 
$page = 'Inventory Report';
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
            <h5 class="m-0">Purchase</h5>
    <a class="btn btn-primary" href="add-transaction.php">Purchase Product</a>
    </div>
   
 <div class="card-body">
 <table id="table" class="table">
        <thead>
            <tr>
                <th>Purchase ID</th>
                <th>Suplier</th>
                <th>Item Name</th>
                <th>Product Description</th>
                <th>Quantity</th>
                <th>Cost per unit</th>
                <th>Total Cost</th>
                <th>Schedule Date</th>
                <th>Date Delivered</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
        <?php $squery =  mysqli_query($conn, "SELECT p.*,s.company_name from purchase_transaction p JOIN supplier s Where s.supplier_code=p.supplier_code AND p.del_status != 'deleted'");
        while ($row = mysqli_fetch_array($squery)) {
          ?>
 
            <tr>
            <td><?php echo $row['transaction_no'] ?></td>
            <td><?php echo $row['company_name'] ?></td>
            <td><?php echo $row['item_name'] ?></td>
            <td><?php echo $row['details'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['total_cost'] ?></td>
            <td><?php echo $row['date'] ?></td>
            <td><?php echo $row['date_delivered'] ?></td>
            <td>
              <?php if($row['status'] == 'Pending'){ ?>
            <span class="badge bg-primary">Pending</span>
                <?php } else if($row['status'] == 'Received'){?>
            <span class="badge bg-success">Received</span>
            <?php } else if($row['status'] == 'Cancelled'){?>
            <span class="badge bg-danger">Cancelled</span>
            <?php }?>
            <td>
              <a href="edit-transaction.php?id=<?php echo $row['transaction_no'] ?>">
              <div class="btn btn-secondary btn-sm">View</div>
              </a>
        </td>
            </tr>
            <?php }?>
            </tbody>
         
    </table>
 </div>
    </div>
   </main>
 </body>
 </div>
 </html>
 <script src="../assets/js/table.js"></script>