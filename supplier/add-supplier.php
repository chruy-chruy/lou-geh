<?php 
$page = 'Supplier';
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

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>

</form>
  </div>
 </body>
 </html>
 <script src="../assets/js/table.js"></script>