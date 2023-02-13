<?php 
$page = 'Supplier';
include "../db_conn.php";
 ?>
<?php include "../includes/head.php";?> 

<main>

        <div class="card">
          <div class="card-body">
          <a class="btn btn-secondary btn-sm" href="index.php">Back</a>
      
      <form class="row g-3" action="update.php?id=<?php echo $_GET['id']?>" method="post">
      <?php $id = $_GET['id'];
      $squery =  mysqli_query($conn, "SELECT * from supplier Where supplier_code = '$id'");
            while ($row = mysqli_fetch_array($squery)) {
              ?> 
      <label class="form-label">Supplier Code : <?php echo $_GET['id'];?></label>
      <div class="col-6">
        <label class="form-label">Supplier Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'] ?>" required>
      </div>
    
      <div class="col-md-6">
        <label for="" class="form-label">Company Name</label>
        <input type="text"  class="form-control" id="company_name" name="company_name" value="<?php echo $row['company_name'] ?>" required>
      </div>
    
      <div class="col-md-6">
        <label for="" class="form-label">Contact Number</label>
        <input type="number"  class="form-control" id="contact_number" name="contact_number" value="<?php echo $row['contact_number'] ?>" required>
      </div>
    
      <div class="col-md-6">
        <label for="" class="form-label">Address</label>
        <input class="form-control" id="address" name="address" value="<?php echo $row['address'] ?>" required>
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
          Are you sure you want to delete <b> <?php echo $row['company_name'] ?></b>?
          </div>
          <div class="modal-footer">
          <a href="delete.php?id=<?php echo $row['supplier_code'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
          </div>

          <div class="card-footer py-3">
          <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Delete
    </button>
      </div>
    
    </form>
          </div>
        </div>
</main>
 </body>
 </html>
 <?php }?>
 <script src="../assets/js/table.js"></script>