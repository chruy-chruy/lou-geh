<?php 
$page = 'Item';
include "../db_conn.php";
 ?>

<?php include "../includes/head.php";?>

<main>
    <a class="btn btn-secondary btn-sm mb-3" href="index.php">Back</a>

    <div class="card">
        <div class="card-body">

            <form class="row g-3" action="create.php" method="post">
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Supplier</label>
                    <input type="text" class="form-control" id="supplier" name="supplier" required>
                </div>

                <div class="col-6">
                    <label class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="col-6">
                    <label class="form-label">Brand Name</label>
                    <input type="text" class="form-control" id="brand" name="brand" required>
                </div>

                <div class="col-md-6">
                    <label for="" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" required>
                </div>

                <div class="col-md-4">
                    <label for="" class="form-label">Price Per Unit</label>
                    <input type="number" step=0.01 class="form-control" id="price" name="price" required>
                </div>

                <div class="col-md-4">
                    <label for="" class="form-label">Selling Price</label>
                    <input type="number" step=0.01 class="form-control" id="selling_price" name="selling_price"
                        required>
                </div>

                <div class="col-md-4">
                    <label for="" class="form-label">Expected Revenue</label>
                    <input type="number" step=0.01 class="form-control" id="revenue" name="revenue" hidden required>
                    <label class="form-control bg-light" id="revenue2">0</label>
                </div>

                <div class="col-md-12">
                    <label for="" class="form-label">Product Description</label>
                    <textarea class="form-control" id="details" name="details" required></textarea>
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
<script src="../assets/js/script_product.js"></script>
<script src="../assets/js/table.js"></script>