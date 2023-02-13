<?php 
$page = 'Supplier';
include "../db_conn.php";
if(isset($_GET['message'])){
    $message = $_GET['message'];
    echo "<script type='text/javascript'>alert('$message');</script>";
  
  }
 ?>

<?php include "../includes/head.php";?> 
   <main>
    <div class="card">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0">Suppliers</h5>
            <a class="btn btn-primary" href="add-supplier.php">Add Supplier</a>
        </div>
        <div class="card-body">
    
    <table id="table" class="table table-responsive" style="width:100%;">
           <thead>
               <tr>
                   <th>Supplier Code</th>
                   <th>Supplier's Name</th>
                   <th>Company Name</th>
                   <th>Contact Number</th>
                   <th>Address</th>
                   <th>Action</th>
               </tr>
           </thead>
           <tbody>
           <?php
                       $squery =  mysqli_query($conn, "SELECT * from supplier Where del_status != 'deleted'");
                       while ($row = mysqli_fetch_array($squery)) {
   
                       ?>
               <tr>
               <td><?php echo $row['supplier_code'] ?></td>
               <td><?php echo $row['name'] ?></td>
               <td><?php echo $row['company_name'] ?></td>
               <td><?php echo $row['contact_number'] ?></td>
               <td><?php echo $row['address'] ?></td>
               <td>
                    <a href="edit-supplier.php?id=<?php echo $row['supplier_code'] ?>">
                    <button class="btn btn-secondary btn-sm">View</button>
                    </a>
                </td>
               </tr> <?php }?>
               </tbody>
             
       </table>
        </div>
    </div>
   </main>
 </body>
 </div>
 </html>
 <script src="../assets/js/table.js"></script>
 