<?php 
$page = 'Sale Transaction';
include "../db_conn.php";
 ?>
 
<?php include "../includes/head.php";?> 
 
<main>
  
<div>
         <a href="index.php"><button>back</button></a>
    </div>
  <form class="row g-3" action="create2.php" method="post">
  <label style="position: relative; left: 480px;">Customer Details</label>
  <div class="col-6">
    <label class="form-label">Customer Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Contact Number</label>
    <input type="number"  class="form-control" id="contact_number" name="contact_number" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Address</label>
    <textarea name="address" class="form-control"  id="address" required></textarea>
  </div>
  <div class="col-md-6">
  </div>
  
  <label style="position: relative; left: 500px;">Item Details</label>

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
</main>
 </body>
 </html>
 <script src="../assets/js/script_sales.js"></script>
 <script src="../assets/js/table.js"></script>