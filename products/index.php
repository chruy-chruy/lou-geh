<?php
$page = 'Item';
include '../db_conn.php';
if (isset($_GET['message'])) {
    $message = $_GET['message'];
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
 
<?php include '../includes/head.php'; ?> 
 
<main>
  
<div class="card">
<div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0">Products</h5>
<a class="btn btn-primary" href="add-product.php">Add Product</a>
    </div>

<div class="card-body">
<table id="table" class="table table-responsive">
        <thead>
            <tr>
                <th>Item Number</th>
                <th>Name</th>
                <th>Brand</th>
                <th>Quantity</th>
                <th>Cost Per Unit</th>
                <th>Selling Price</th>
                <th>Revenue</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
        <?php
        $squery = mysqli_query(
            $conn,
            "SELECT * from items Where del_status != 'deleted'"
        );
        while ($row = mysqli_fetch_array($squery)) { ?>
            <tr <?php if ($row['quantity'] <= 0) {
                echo "style='color:red;'";
            } ?>>
            <td><?php echo $row['item_number']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['brand']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td ><?php echo $row['price']; ?></td>
            <td><?php echo $row['selling_price']; ?></td>
            <td><?php echo $row['revenue']; ?></td>
            <td>
              <a href="edit-product.php?id=<?php echo $row['item_number']; ?>">
                <div class="btn btn-secondary btn-sm">View</div>
              </a>
            </td>
            </tr>
            <?php }
        ?>
            </tbody>
         
    </table>
</div>
</div>
</main>
 </body>
 </div>
 </html>
 <script src="../assets/js/table.js"></script>