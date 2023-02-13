<?php 
$page = 'Item';
include "../db_conn.php";
 ?>

<?php include "../includes/head.php";?> 

    <main>
       <div class="card">
        <div class="card-body">
        <a class="btn btn-secondary btn-sm" href="index.php">Back</a>
   
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
   </div>
 
   <div class="col-6">
     <label class="form-label">Item Name</label>
     <input type="text" class="form-control" id="name" name="name" required>
   </div>
 
   <div class="col-6">
     <label class="form-label">Brand Name</label>
     <input type="text" class="form-control" id="brand" name="brand" required>
   </div>
 
   <div class="col-md-6">
     <label for="" class="form-label">Quantity</label>
     <input type="number"  class="form-control" id="quantity" name="quantity" required>
   </div>
 
   <div class="col-md-6">
     <label for="" class="form-label">Price per unit</label>
     <input type="number" step=0.01 class="form-control" id="price" name="price" required>
   </div>
 
   <div class="col-md-6">
     <label for="" class="form-label">Selling Price</label>
     <input type="number" step=0.01 class="form-control" id="selling_price" name="selling_price" required>
   </div>
 
   <div class="col-md-6">
     <label for="" class="form-label">Expected Revenue</label>
     <input type="number" step=0.01 class="form-control" id="revenue" name="revenue" hidden required>
     <label class="form-control" id="revenue2">0</label>
   </div>
 
   <div class="col-md-12">
     <label for="" class="form-label">Product Description</label>
     <textarea  class="form-control" id="details" name="details" required></textarea>
   </div>
 
   
        </div>

        <div class="card-footer py-3">
     <button type="submit" class="btn btn-primary">Submit</button>
 
 </form>
        </div>
       </div>
    </main>
 </body>
 </html>
 <script src="../assets/js/script_product.js"></script>
 <script src="../assets/js/table.js"></script>