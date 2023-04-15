<?php 
$page = 'Category';
include "../db_conn.php";
 ?>

<?php include "../includes/head.php";?>

<main>

    <a class="btn btn-secondary btn-sm mb-3" href="index.php">Back</a>

    <div class="card col-lg-5 col-md-12">
        <div class="card-body">
            <form class="row g-3" action="create.php" method="post">
                <div class="col-6">
                    <label class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
        </div>

        <div class="card-footer py-3 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Add</button>

            </form>
        </div>
    </div>
</main>
</body>

</html>