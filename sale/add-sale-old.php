<?php 
$page = 'Sale Transaction';
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
  <label for="inputAddress" class="form-label">Customer</label>
    <select name="customer" id="customer" class="form-select" required>
    <option disabled hidden value="" selected>--</option>
    <?php
                    $squery =  mysqli_query($conn, "SELECT * from customer Where del_status != 'deleted'");
                    while ($row = mysqli_fetch_array($squery)) {
    ?>
    <option value=<?php echo $row['name'] ?>><?php echo $row['name'] ?></option>
        <?php }?>
    </select>
  </div>

  <div class="col-md-6">
  <label for="inputAddress" class="form-label">Product Name</label>
    <select name="item" id="item" class="form-select" required>
    <option disabled hidden value="" selected>--</option>
    <?php
                    $squery =  mysqli_query($conn, "SELECT * from items Where del_status != 'deleted'");
                    while ($row = mysqli_fetch_array($squery)) {
    ?>
    <option value=<?php echo $row['item_number']?>><?php echo $row['name'] ?></option>
    <?php }?>
    </select>
  </div>

  <input type="text"  class="form-control" id="item_name" name="item_name" hidden required>
  <input type="text"  class="form-control" id="item_number" name="item_number" hidden required>
  <input type="text"  class="form-control" id="sold_by" name="sold_by" value="<?php echo $_SESSION['username'] ?>" hidden required>

  <div class="col-md-6">
    <label for="" class="form-label">Quantity</label>
    <input type="number"  class="form-control" id="quantity" name="quantity" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Selling Price</label>
     <input type="number" step=0.01 class="form-control" id="price" name="price" hidden> 
    <label for=""  id="price2" class="form-control">0</label>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Total Price</label>
     <input type="number" step=0.01 class="form-control" id="total2" name="total2" hidden> 
    <label for=""  id="total" class="form-control">0</label>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>
  </div>
 </body>
 </html>
 <script src="../assets/js/table.js"></script>
 <script src="../assets/js/script_sales.js"></script>