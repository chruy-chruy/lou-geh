<?php 
$page = 'Category';
include "../db_conn.php";
 ?>

<?php include "../includes/head.php";?>

<main>

    <a class="btn btn-secondary btn-sm mb-3" href="index.php">Back</a>

    <div class="card col-lg-5 col-md-12">
        <div class="card-body">
            <form class="row g-3" action="update.php" method="post">
                <div class="col-6">
                    <?php $id = $_GET['id'];
   $squery =  mysqli_query($conn, "SELECT * from category Where category_id = $id");
         while ($row = mysqli_fetch_array($squery)) {
           ?>
                    <label class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name'] ?>"
                        required>
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['category_id'] ?>"
                        hidden required>
                </div>
        </div>
        <?php }?>
        <div class="card-footer py-3 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Update</button>
            <a href="delete.php?id=<?php echo $id ?>"><button type="button" class="btn btn-danger">Delete</button></a>

            </form>
        </div>
    </div>
</main>
</body>

</html>