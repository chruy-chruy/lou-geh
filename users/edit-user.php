<?php 
$page = 'User';
include "../db_conn.php";
 ?>
 
<?php include "../includes/head.php";?> 
 
    <main>
<a class="btn btn-secondary btn-sm mb-3" href="index.php">Back</a>

      <div class="card">
        <div class="card-body">
          
<form class="row g-3" action="update.php?id=<?php echo $_GET['id']?>" method="post">
<?php $id = $_GET['id'];
$squery =  mysqli_query($conn, "SELECT * from user Where id = '$id'");
      while ($row = mysqli_fetch_array($squery)) {
        ?> 


<div class="col-md-6">
  <label for="" class="form-label">Full Name</label>
  <input type="text"  class="form-control" id="company_name" name="name" value="<?php echo $row['fullName'] ?>" required>
</div>

<div class="col-md-6">
  <label for="" class="form-label">Username</label>
  <input type="text"  class="form-control" id="contact_number" name="user_name" value="<?php echo $row['username'] ?>" required>
</div>

<div class="col-md-6">
  <label for="" class="form-label">Password</label>
  <input class="form-control" id="text" name="password" value="<?php echo $row['password'] ?>" required>
</div>

<div class="col-md-6">
  <label for="" class="form-label">Role</label>
  <select name="role" id="role" class="form-select" required>
  <option hidden value="<?php echo $row['role'] ?>" selected><?php echo $row['role'] ?></option> 
  <option value="Inventory Staff" >Inventory Staff</option>
    <option value="Sales Staff" >Sales Staff</option>
    <option value="Admin">Admin</option>
</select>
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
    Are you sure you want to delete <b> <?php echo $row['username'] ?></b>?
    </div>
    <div class="modal-footer">
    <a href="delete.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
    </div>
  </div>
</div>
</div>
        </div>
 
        <div class="card-footer py-3 d-flex justify-content-end">
  <button type="submit" class="btn btn-primary me-2">Update</button>
  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Delete
</button>

</form>
        </div>
      </div>
    </main>
 </body>
 </html>
 <?php }?>
 <script src="../assets/js/table.js"></script>