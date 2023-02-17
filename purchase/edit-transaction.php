<?php 
$page = 'purchase Transaction';
include "../db_conn.php";
 ?>

<?php include "../includes/head.php";?> 

    <main>
<a class="btn btn-secondary btn-sm mb-3" href="index.php">Back</a>

    <div class="card">
      <div class="card-body">
    
  <label class="form-label fw-bold mb-3">Transaction Number : <?php echo $_GET['id'];?></label>
  <form class="row g-3" action="update.php?id=<?php echo $_GET['id'];?>" method="post">
 
  <?php $id = $_GET['id'];
  $squery =  mysqli_query($conn, "SELECT p.*,s.name from purchase_transaction p JOIN supplier s   Where transaction_no = $id");
        while ($row = mysqli_fetch_array($squery)) {
          ?>  
        
  <div class="col-md-6">
  <label class="form-label">Supplier</label>
    <select name="supplier" id="supplier" class="form-select" required>
    <option selected value=<?php echo $row['supplier_code'] ?>><?php echo $row['name']?></option>
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
    <label for="" class="form-label">Price Per Unit</label>
    <input type="number" step=0.01 class="form-control" id="price" name="price" value="<?php echo $row['price'] ?>" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Total Cost</label>
    <input type="number" step=0.01 class="form-control" id="total" name="total" value="<?php echo $row['total_cost'] ?>" hidden required>
    <label class="form-control bg-light" id="total2"><?php echo $row['total_cost'] ?></label>
  </div>

  <div class="col-md-6">
  <label class="form-label">Status</label>
    <select name="status" id="status" class="form-select" required>
    <option selected hidden value=<?php echo $row['status'] ?>><?php echo $row['status']?></option>
    <option value='Pending'>Pending</option>
    <option value='Received'>Received</option> 
    <option value='Cancelled'>Cancelled</option>
    </select>
  </div>

  <div class="col-md-12">
    <label for="" class="form-label">Product Description</label>
    <textarea  class="form-control" id="details" name="details" rows=8 required><?php echo $row['details'] ?></textarea>
  </div>

  
  </div>

  <div class="card-footer py-3 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary me-2">Update</button>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Delete
</button>  
 
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
      <b>Transaction Number : <?php echo $row['transaction_no'] ?></b>?
      </div>
      <div class="modal-footer">
      <a href="delete.php?id=<?php echo $row['transaction_no'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
      </div>
    </main>
 </body>
 </html>
 <?php }?>
 <script src="../assets/js/table.js"></script>
 <script src="../assets/js/script_purchase.js"></script>
