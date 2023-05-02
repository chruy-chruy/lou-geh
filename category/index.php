<?php 
$page = 'Category';
include "../db_conn.php";
include "../includes/head.php";
if(isset($_GET['message'])){
    $message = $_GET['message'];
    echo "<script type='text/javascript'>alert('$message');</script>";
  
  }
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<main>
    <div class="card">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0">Category</h5>
            <a class="btn btn-primary" href="add.php">Add</a>
        </div>

        <div class="card-body">
            <table id="table" class="table table-responsive" style="width:100%;">
                <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       $sql =  mysqli_query($conn, "SELECT * from category Where del_status != 'deleted'");
                       while ($row = mysqli_fetch_array($sql)) {
   
                       ?>
                    <tr>
                        <td><?php echo $row['category_id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['created_at'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['category_id'] ?>">
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

</html>
<script src="../assets/js/table.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>