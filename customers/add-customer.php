<?php 
$page = 'Customer';
include "../db_conn.php";
 ?>

<?php include "../includes/head.php";?> 

<main>

<a class="btn btn-secondary btn-sm mb-3" href="index.php">Back</a>
  
<div class="card">
  <div class="card-body">
    
    <form class="row g-3" action="create.php" method="post">
  
  
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
  
    
  </div>

  <div class="card-footer py-3 d-flex justify-content-end">
      <button type="submit" class="btn btn-primary">Add</button>
  </form>
  </div>
</div>
</main>
 </body>
 </html>
 <script src="../assets/js/table.js"></script>