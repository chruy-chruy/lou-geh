<?php 
$page = 'Delivery Transaction';
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
           <!-- <div class="dropdown">
  <button class="dropbtn">Add Item</button>
  <div class="dropdown-content">
  <a href="add-item-old-supplier.php">Old Supplier</a>
  <a href="">New Supplier</a>
  </div>
</div> -->
<a  href="add-transaction.php"><button class="dropbtn">Add Transaction</button></a>
    </div>
    <div class="table_item" style=" position: relative;
  left: 250px;
  width: 80%;
  height: 90%;
  border: 3px;
  top:50px;
  ">
 <table id="table" class="table table-striped" style="width:100%; border: 3px;">
        <thead>
            <tr>
                <th>Transaction No</th>
                <th>Suplier</th>
                <th>Item Name</th>
                <th>barcode</th>
                <th>Product Description</th>
                <th>quantity</th>
                <th>Cost per unit</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
        <?php $squery =  mysqli_query($conn, "SELECT * from delivery_transaction Where del_status != 'deleted'");
        while ($row = mysqli_fetch_array($squery)) {
            $code =$row['supplier_code'];
            $squery2 =  mysqli_query($conn, "SELECT * from supplier Where supplier_code = '$code'");
            while ($row2 = mysqli_fetch_array($squery2)) {
          ?>
 
            <tr>
            <td><?php echo $row['transaction_no'] ?></td>
            <td><?php echo $row2['company_name'] ?></td>
            <td><?php echo $row['item_name'] ?></td>
            <td><?php echo $row['barcode'] ?></td>
            <td><?php echo $row['details'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><a href="edit-transaction.php?id=<?php echo $row['transaction_no'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></i></a></td>
            </tr>
            <?php } }?>
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