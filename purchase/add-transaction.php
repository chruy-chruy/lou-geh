<?php
$page = 'purchase Transaction';
include '../db_conn.php';
?>

<?php include '../includes/head.php'; ?> 

<main>
<a class="btn btn-secondary btn-sm mb-3" href="index.php">Back</a>

  <div class="card">
    <div class="card-body">
      
  <form class="row g-3" action="create.php" method="post">
  <div class="col-md-6">
  <label for="inputAddress" class="form-label">Supplier</label>
    <select name="supplier" id="supplier" class="form-select" required>
    <option disabled hidden value="" selected>Select</option>
    <?php
    $squery = mysqli_query($conn, 'select * from supplier');
    while ($row = mysqli_fetch_array($squery)) { ?>
    <option value=<?php echo $row['supplier_code']; ?>><?php echo $row[
    'company_name'
]; ?></option>
        <?php }
    ?>
    </select>
  </div>

  <div class="col-md-6">
  <label class="form-label">Delivery Date</label>
  <input type="date" class="form-control" id="date" name="date" required>
  </div>

  <div class="col-6">
    <label class="form-label">Product Name</label>
    <input type="text" class="form-control" id="item" name="item" required>
  </div>

  <div class="col-6">
    <label class="form-label">Brand Name</label>
    <input type="text" class="form-control" id="brand" name="brand" required>
  </div>

  <div class="col-md-4">
    <label for="" class="form-label">Quantity</label>
    <input type="number"  class="form-control" id="quantity" name="quantity" required>
  </div>

  <div class="col-md-4">
    <label for="" class="form-label">Price Per Unit</label>
    <input type="number" step=0.01 class="form-control" id="price" name="price" required>
  </div>

  <div class="col-md-4">
    <label for="" class="form-label">Total Cost</label>
    <input type="number" step=0.01 class="form-control" id="total" name="total" hidden required>
    <label class="form-control bg-light" id="total2">0</label>
  </div>

  <div class="col-md-12">
    <label for="" class="form-label">Add Description</label>
    <textarea  class="form-control" id="details" name="details" rows=8 required></textarea>
  </div>

   
    </div>

    <div class="card-footer py-3 d-flex justify-content-end">
    <button type="submit" class="btn btn-primary">Purchase</button>

</form>
    </div>
  </div>
</main>
 </body>
 </html>
 <script src="../assets/js/table.js"></script>
 <script src="../assets/js/script_purchase.js"></script>