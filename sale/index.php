<?php 
$page = 'Sale Transaction';
include "../navbar.php";
include "../db_conn.php";
if(isset($_GET['message'])){
    $message = $_GET['message'];
    echo "<script type='text/javascript'>alert('$message');</script>";
  
  }
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
 <style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 5px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}

</style>
 <body>
    <div style=" position: relative;
  left: 250px;
  margin: auto;
  border: 3px;
  ">
<div class="dropdown">
  <button class="dropbtn">Add Transaction</button>
  <div class="dropdown-content">
  <a href="add-sale-old.php">Old Customer</a>
  <a href="add-sale-new.php">New Customer</a>
  </div>
</div>
    </div>
    <div class="table_item" style=" position: relative;
  left: 250px;
  width: 80%;
  height: 90%;
  border: 3px;
  top:50px;
  "
  >
 <table id="table" class="table table-striped" style="width:100%; border: 3px;">
        <thead>
            <tr>
                <th>Transaction No</th>
                <th>Customer Name</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price per unit</th>
                <th>Total Price</th>
                <th>Date</th>
                <th>Sold By</th>
            </tr>
        </thead>
        <tbody>
        <?php
                    $squery =  mysqli_query($conn, "SELECT * from sale_transaction");
                    while ($row = mysqli_fetch_array($squery)) {
                    ?>
            <tr>
            <td><?php echo $row['transaction_no'] ?></td>
            <td><?php echo $row['customer_name'] ?></td>
            <td><?php echo $row['item_name'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['total'] ?></td>
            <td><?php echo date("l, F j Y g:i A", strtotime($row["created_at"])); ?></td>
            <td><?php echo $row['sold_by'] ?></td>
            </tr> <?php }?>
            </tbody>
           
        <!-- <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot> -->
    </table>
 </body>
 </div>
 </html>
 <script src="../assets/js/table.js"></script>
 