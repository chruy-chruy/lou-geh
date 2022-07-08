<?php 
$page = 'Customer';
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
  <form class="row g-3" action="update.php?id=<?php echo $_GET['id']?>" method="post">
  <?php $id = $_GET['id'];
  $squery =  mysqli_query($conn, "SELECT * from customer Where customer_number = '$id'");
        while ($row = mysqli_fetch_array($squery)) {
          ?> 

  <div class="col-6">
    <label class="form-label">Customer Name</label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'] ?>" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Contact Number</label>
    <input type="number"  class="form-control" id="contact_number" name="contact_number" value="<?php echo $row['contact_number'] ?>" required>
  </div>

  <div class="col-md-6">
    <label for="" class="form-label">Address</label>
    <textarea name="address" class="form-control"  id="address" required><?php echo $row['address'] ?></textarea>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Delete
</button>
  </div>
</form>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Delete</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete Customer <b> <?php echo $row['name'] ?></b>?
      </div>
      <div class="modal-footer">
      <a href="delete.php?id=<?php echo $row['customer_number'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div>
 </body>
 </html>
 <?php }?>
 <script src="../assets/js/table.js"></script>