<?php
$page = 'POS'; ?>
<?php include '../includes/head.php';
  include "../db_conn.php"; ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
<main>

    <div class="row mt-4 g-3">

        <div class="col-lg-7 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <h6 class="m-2" style="font-weight: bold;">Products</h6>
                </div>
                <div class="card-body table-responsive" style="max-width: 100%; height: 700px; overflow: auto;">
                    <div class="row g-3 mb-3">
                        <?php $squery = mysqli_query($conn,"SELECT * from items Where del_status != 'deleted'");
                        while ($row = mysqli_fetch_array($squery)) { ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="card dashboard__card">
                                <!-- Trigger/Open The Modal -->
                                <button class="products button1" data-toggle="modal"
                                    data-target="#edit_<?php echo $row['item_number'];?>">
                                    <div class="card-body">
                                        <div class="row" style="font-weight: bold;  font-family: Poppins, sans-serif">
                                            <?php echo $row['name'];?>
                                        </div>
                                    </div>
                                </button>
                                <?php  include "modal.php"; ?>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <div class="col-lg-5 col-md-12">
            <div class="card">
                <div class="card-body" style="height: 700px; overflow: auto;">
                    <table class="table table-responsive" id="table">
                        <thead>
                            <tr>
                                <th scope="col">Product Code</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $squery = mysqli_query($conn,"SELECT * from pos");
                            while ($row = mysqli_fetch_array($squery)) { ?>
                            <tr>
                                <td><?php echo $row['item_number']; ?></td>
                                <td><?php echo $row['product_name']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td>&#8369;<?php echo $row['price']; ?></td>
                                <td>&#8369;<?php echo $row['total_price']; ?></td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="footer" style=" padding: 10px">
                <div style="float: right;">
                    <span>Total:</span>
                    <span id="total" style="color: green; font-weight: bold; font-size: 25px"><?php
                 $squery = mysqli_query($conn,"SELECT sum(total_price) as total FROM pos");
                 while ($row = mysqli_fetch_array($squery)) {
                   echo $row['total']; 
                 }
                 
          ?></span>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">ORDER</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</main>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>