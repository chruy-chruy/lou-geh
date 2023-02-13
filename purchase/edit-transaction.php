<?php 
$page = 'purchase Transaction';
include "../db_conn.php";
 ?>

<?php include "../includes/head.php";?> 

    <main>
    <div class="card">
      <div class="card-body">
         <a class="btn btn-secondary btn-sm" href="index.php">Back</a>
    
  <label class="form-label">Transaction Number : <?php echo $_GET['id'];?></label>
  <form class="row g-3" action="update.php?id=<?php echo $_GET['id'];?>" method="post">
  <div class="col-md-6">
  <?php $id = $_GET['id'];
  $squery =  mysqli_query($conn, "SELECT * from purchase_transaction Where transaction_no = $id");
        while ($row = mysqli_fetch_array($squery)) {
            $code =$row['supplier_code'];
            $squery2 =  mysqli_query($conn, "SELECT * from supplier Where supplier_code = '$code'");
            while ($row2 = mysqli_fetch_array($squery2)) {
          ?>  
  <label class="form-label">Supplier</label>
    <select name="supplier" id="supplier" class="form-select" required>
    <option selected value=<?php echo $row2['supplier_code'] ?>><?php echo $row2['name']?></option>

    </select>
  </div>

  <div class="col-md-6">
  <label class="form-label">Date</label>
  <input type="date" class="form-control" id="date" name="date" value="<?php echo $row['date'] ?>" required>
  </div>

  <div class="col-6">
    <label class="form-label">Item Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['item_name'] ?>" required>
  </div>

  <div class="col-6">
    <label class="form-label">Brand Name</label>
    <input type="text" class="form-control" id="brand" name="brand" value="<?php echo $row['brand'] ?>" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Quantity</label>
    <input type="number"  class="form-control" id="quantity" name="quantity" value="<?php echo $row['quantity'] ?>" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Price per unit</label>
    <input type="number" step=0.01 class="form-control" id="price" name="price" value="<?php echo $row['price'] ?>" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Total Cost</label>
    <input type="number" step=0.01 class="form-control" id="total" name="total" value="<?php echo $row['total_cost'] ?>" hidden required>
    <label class="form-control" id="total2"><?php echo $row['total_cost'] ?></label>
  </div>

  <div class="col-md-12">
    <label for="" class="form-label">Product Description</label>
    <textarea  class="form-control" id="details" name="details" rows=8 required><?php echo $row['details'] ?></textarea>
  </div>

  
  </div>

  <div class="card-footer py-3">
  <div class="col-6">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Delete
</button>
  </div>   
 
</form>
  </div>



  <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete 
      Transaction Number : <?php echo $row['transaction_no'] ?>?
      </div>
      <div class="modal-footer">
      <a href="delete.php?id=<?php echo $row['transaction_no'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
      </div>
    </main>
 </body>
 </html>
 <?php }}?>
 <script src="../assets/js/table.js"></script>
 <script src="../assets/js/script_purchase.js"></script>
