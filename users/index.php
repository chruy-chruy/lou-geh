<?php 
$page = 'User';
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
            <h5 class="m-0">Users</h5>
<a class="btn btn-primary" href="add-user.php">Add User</a>
    </div>
   
<div class="card-body">
<table id="table" class="table table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>User Password</th>
                <th>Full Name</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $squery =  mysqli_query($conn, "SELECT * from user Where del_status != 'deleted'");
         while ($row = mysqli_fetch_array($squery)) {
        ?>
            <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['password'] ?></td>
            <td><?php echo $row['fullName'] ?></td>
            <td><?php echo $row['role'] ?></td>
            <td>
                <a href="edit-user.php?id=<?php echo $row['id'] ?>">
                    <div class="btn btn-secondary btn-sm">View</div>
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
 