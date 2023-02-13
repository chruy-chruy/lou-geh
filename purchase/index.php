<?php 
$page = 'purchase Transaction';
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
    <a class="btn btn-primary" href="add-transaction.php">Purchase Item</a>
    </div>
   
 <div class="card-body">
 <table id="table" class="table table-responsive">
        <thead>
            <tr>
                <th>Purchase Id</th>
                <th>Suplier</th>
                <th>Item Name</th>
                <th>Product Description</th>
                <th>quantity</th>
                <th>Cost per unit</th>
                <th>Total Cost</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
        <?php $squery =  mysqli_query($conn, "SELECT * from purchase_transaction Where del_status != 'deleted'");
        while ($row = mysqli_fetch_array($squery)) {
            $code =$row['supplier_code'];
            $squery2 =  mysqli_query($conn, "SELECT * from supplier Where supplier_code = '$code'");
            while ($row2 = mysqli_fetch_array($squery2)) {
          ?>
 
            <tr>
            <td><?php echo $row['transaction_no'] ?></td>
            <td><?php echo $row2['company_name'] ?></td>
            <td><?php echo $row['item_name'] ?></td>
            <td><?php echo $row['details'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['total_cost'] ?></td>
            <td>
              <a href="edit-transaction.php?id=<?php echo $row['transaction_no'] ?>">
              <div class="btn btn-secondary btn-sm">View</div>
              </a>
        </td>
            </tr>
            <?php } }?>
            </tbody>
         
    </table>
 </div>
    </div>
   </main>
 </body>
 </div>
 </html>
 <script src="../assets/js/table.js"></script>