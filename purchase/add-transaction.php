<?php 
$page = 'purchase Transaction';
include "../navbar.php";
include "../db_conn.php";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
     <link rel="stylesheet" href="../assets/css/style.css" />
     <title>Document</title>
 </head>
 <body>
    <div style=" position: relative;
  left: 250px;
  margin: auto;
  border: 3px;
  ">
         <a href="index.php"><button>back</button></a>
    </div>
    <div class="table_item" style=" position: relative;
  left: 250px;
  width: 80%;
  height: 90%;
  border: 3px;
  top:50px;
  "
  >
  <form class="row g-3" action="create.php" method="post">
  <div class="col-md-6">
  <label for="inputAddress" class="form-label">Supplier</label>
    <select name="supplier" id="supplier" class="form-select" required>
    <option disabled hidden value="" selected>--</option>
    <?php
                    $squery =  mysqli_query($conn, "select * from supplier");
                    while ($row = mysqli_fetch_array($squery)) {
    ?>
    <option value=<?php echo $row['supplier_code'] ?>><?php echo $row['company_name'] ?></option>
        <?php }?>
    </select>
  </div>

  <div class="col-md-6">
  <label class="form-label">Date</label>
  <input type="date" class="form-control" id="date" name="date" required>
  </div>

  <div class="col-6">
    <label class="form-label">Item Name</label>
    <input type="text" class="form-control" id="item" name="item" required>
  </div>

  <div class="col-6">
    <label class="form-label">Brand Name</label>
    <input type="text" class="form-control" id="brand" name="brand" required>
  </div>

  <!-- <div class="col-6">
    <label class="form-label">Barcode</label>
    <input type="text" class="form-control" id="barcode" name="barcode" hidden required>
    <label class="form-control" id="barcode2"></label>
  </div> -->

  <div class="col-md-6">
    <label for="" class="form-label">Quantity</label>
    <input type="number"  class="form-control" id="quantity" name="quantity" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Price per unit</label>
    <input type="number" step=0.01 class="form-control" id="price" name="price" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Total Cost</label>
    <input type="number" step=0.01 class="form-control" id="total" name="total" hidden required>
    <label class="form-control" id="total2">0</label>
  </div>

  <div class="col-md-12">
    <label for="" class="form-label">Description</label>
    <textarea  class="form-control" id="details" name="details" rows=8 required></textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>
  </div>
 </body>
 </html>
 <script>
//   const barcode = Date.now();
//   document.getElementById("barcode").value = barcode;
//   const barcode2 = barcode;
// document.getElementById("barcode2").innerHTML = barcode2;
//     $(document).ready(function () {
//         $("#supplier").change(function() {


//           })
                
// });
 </script>
 <script src="../assets/js/table.js"></script>
 <script src="../assets/js/script_purchase.js"></script>