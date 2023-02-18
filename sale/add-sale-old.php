<?php
$page = 'Sale Transaction';
include '../db_conn.php';
?>

<?php include '../includes/head.php'; ?> 


    <main>
<a class="btn btn-secondary btn-sm mb-3" href="index.php">Back</a>
<div class="card">
  <div class="card-body">
    
  <form class="row g-3" action="create.php" method="post">
  <div class="col-md-6">
  <label for="inputAddress" class="form-label">Customer</label>
    <select name="customer" id="customer" class="form-select" required>
    <option disabled hidden value="" selected>Select</option>
    <?php
    $squery = mysqli_query(
        $conn,
        "SELECT * from customer Where del_status != 'deleted'"
    );
    while ($row = mysqli_fetch_array($squery)) { ?>
    <option value=<?php echo $row['name']; ?>><?php echo $row[
    'name'
]; ?></option>
        <?php }
    ?>
    </select>
  </div>

  <div class="col-md-6">
  <label for="inputAddress" class="form-label">Product Name</label>
    <select name="item" id="item" class="form-select" required>
    <option disabled hidden value="" selected>Select</option>
    <?php
    $squery = mysqli_query(
        $conn,
        "SELECT * from items Where del_status != 'deleted' AND quantity > 0"
    );
    while ($row = mysqli_fetch_array($squery)) { ?>
    <option value=<?php echo $row['item_number']; ?>><?php echo $row[
    'name'
]; ?></option>
    <?php }
    ?>
    </select>
  </div>

  <input type="text"  class="form-control" id="item_name" name="item_name" hidden required>
  <input type="text"  class="form-control" id="item_number" name="item_number" hidden required>
  <input type="text"  class="form-control" id="sold_by" name="sold_by" value="<?php 
  echo $_SESSION['fullName']." (". $_SESSION['role'].")"; ?>" hidden required>

  <div class="col-md-6">
    <label for="" class="form-label">Stocks Available</label>
     <input type="number" step=0.01 class="form-control" id="stocks" name="stocks" hidden> 
    <label for=""  id="stocks2" class="form-control bg-light">0</label>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Quantity</label>
    <input type="number"  class="form-control" id="quantity" name="quantity" required>
    <span class="error-msg"></span>
  </div>
  
  <div class="col-md-6">
    <label for="" class="form-label">Price</label>
     <input type="number" step=0.01 class="form-control" id="price" name="price" hidden> 
    <label for=""  id="price2" class="form-control bg-light">0</label>
  </div>


  <div class="col-md-6">
    <label for="" class="form-label">Total Amount</label>
     <input type="number" step=0.01 class="form-control" id="total2" name="total2" hidden> 
    <label for=""  id="total" class="form-control bg-light">0</label>
  </div>

  </div>
  <div class="card-footer py-3 d-flex justify-content-between">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
    </main>
 <script src="../assets/js/script_sales.js"></script>
 </body>
 </html>
 