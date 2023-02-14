<?php
$page = 'purchase Transaction';
include '../db_conn.php';
?>

<?php include '../includes/head.php'; ?> 

<main>
  
<div>
         <a href="index.php"><button>back</button></a>
    </div>
    
  <form class="row g-3" action="create.php" method="post">
  <div class="col-md-6">
  <label for="inputAddress" class="form-label">Supplier</label>
    <select name="supplier" id="supplier" class="form-select" required>
    <option disabled hidden value="" selected>--</option>
    <?php
    $squery = mysqli_query(
        $conn,
        "select * from supplier where del_status != 'deleted'"
    );
    while ($row = mysqli_fetch_array($squery)) { ?>
    <option value=<?php echo $row['supplier_code']; ?>><?php echo $row[
    'company_name'
]; ?></option>
        <?php }
    ?>
    </select>
  </div>

  <div class="col-md-6">
  </div>

  <div class="col-md-6">
  <label for="inputAddress" class="form-label">Item Name</label>
    <select name="item" id="item" class="form-select" required>
    <option disabled hidden value="" selected>--</option>
    <?php
    $squery = mysqli_query(
        $conn,
        "select * from items where del_status != 'deleted'"
    );
    while ($row = mysqli_fetch_array($squery)) { ?>
    <option value=<?php echo $row['name'] .
        ',' .
        $row['barcode']; ?>><?php echo $row['name']; ?></option>
        <?php }
    ?>
    </select>
  </div>

  <div class="col-6">
    <label class="form-label">Product Code</label>
    <input type="text" class="form-control" id="barcode" name="barcode"  hidden required>
    <label class="form-control" id="barcode2">--</label>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Quantity</label>
    <input type="number"  class="form-control" id="quantity" name="quantity" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Price per unit</label>
    <input type="number" step=0.01 class="form-control" id="price" name="price" required>
  </div>

  <div class="col-md-12">
    <label for="" class="form-label">Product Description</label>
    <textarea  class="form-control" id="details" name="details" required></textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>
</main>
 </body>
 </html>
 <script>

    $("#item").change(function() {
let item = document.getElementById("item");
let value = item.value;
let arry = value.split(",");
let barcode = arry[1];
document.getElementById("barcode").value = barcode;
document.getElementById("barcode2").innerHTML = barcode
    })
 </script>
 <script src="../assets/js/table.js"></script>