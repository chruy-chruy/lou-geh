<?php 
$page = 'Customer';
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
            <h5 class="m-0">Customers</h5>
<a class="btn btn-primary" href="add-customer.php">Add Customer</a>
    </div>
  
 <div class="card-body">
 <table id="table" class="table" style="width: 100%">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact Number</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
                    $squery =  mysqli_query($conn, "SELECT * from customer Where del_status != 'deleted'");
                    while ($row = mysqli_fetch_array($squery)) {

                    ?>
            <tr>
            <td><?php echo $row['customer_number'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['contact_number'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><a href="edit-customer.php?id=<?php echo $row['customer_number'] ?>">
            <div class="btn btn-secondary btn-sm">View</div>
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
 