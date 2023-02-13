<?php 
$page = 'Supplier';
include "../db_conn.php";
 ?>

<?php include "../includes/head.php";?> 

<main>
  
<div class="card">
     <div class="card-body">
     <a class="btn btn-secondary btn-sm" href="index.php">Back</a>
  
  <form class="row g-3" action="create.php" method="post">


  <div class="col-6">
    <label class="form-label">Supplier Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Company Name</label>
    <input type="text"  class="form-control" id="company_name" name="company_name" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Contact Number</label>
    <input type="number"  class="form-control" id="contact_number" name="contact_number" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Address</label>
    <input class="form-control" id="address" name="address" required>
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
 <script src="../assets/js/table.js"></script>