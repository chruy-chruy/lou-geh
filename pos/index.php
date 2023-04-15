<?php
$page = 'POS'; ?>
<?php include '../includes/head.php';
  include "../db_conn.php"; 
  function asPesos($value) {
    if ($value<0) return "-".asPesos(-$value);
    return '₱' . number_format($value, 2);
    } 
    
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<main>
    <div style="position:absolute"><span id="datetime"></span></div>
    <script src="../assets/js/time.js"></script> <?php 
if (isset($_GET['message'])) {
     $message = $_GET['message'];?>
    <div class="alert-boxs success_alert"><?php echo $message ?></div>
    <script>
    $("div.success_alert").fadeIn(300).delay(2000).fadeOut(400);
    </script>
    <?php } ?>
    <div class="row mt-4 g-3">
        <div class="col-lg-7 col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div style="font-weight: bold;padding: 5px; font-size:20px;">
                        Products
                        <input class="searchp" type='text' id='searchp' placeholder="Search Product" />
                    </div>
                </div>
                <div class="card-body table-responsive" style="max-width: 100%; height: 700px; overflow: auto;">
                    <div class="row g-3 mb-3">
                        <?php $squery = mysqli_query($conn,"SELECT * from items Where del_status != 'deleted'");
                        while ($row = mysqli_fetch_array($squery)) { ?>
                        <div class="col-lg-3 col-md-6 show">
                            <div class="card dashboard__card">
                                <!-- Trigger/Open The Modal -->
                                <button class="products button1" data-toggle="modal"
                                    data-target="#edit_<?php echo $row['item_number'];?>">
                                    <div class="card-body">
                                        <div class="row products_list"
                                            style="font-weight: bold;  font-family: Poppins, sans-serif">
                                            <?php echo $row['name'];?>
                                        </div>
                                    </div>
                                </button>
                                <?php  include "modal-product.php"; ?>
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
                <div class="card-body" style="height: 700px; overflow: auto; width:100%; font-size: 15px">
                    <table class="table table-responsive" id="table">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Price</th>
                                <th scope="col">Total</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $squery = mysqli_query($conn,"SELECT * from pos");
                            while ($row = mysqli_fetch_array($squery)) { ?>
                            <tr>
                                <td><?php echo $row['product_name']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo asPesos($row['price']); ?></td>
                                <td><?php echo asPesos($row['total_price']); ?></td>
                                <td>
                                    <!-- edit -->
                                    <a href="" data-toggle="modal" data-target="#edit_<?php echo $row['pos_id']; ?>"><i
                                            class="fa-regular fa-pen-to-square" style="color: #052c6b;"></i></i></a>
                                    <!-- delete -->
                                    <a href="" data-toggle="modal"
                                        data-target="#delete_<?php echo $row['pos_id']; ?>"><i class="fa-solid fa-trash"
                                            style="color: #d3523c;"></i></a>
                                </td>
                            </tr>
                            <?php  include "modal-delete.php"; ?>
                            <?php  include "modal-edit.php"; ?>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="footer" style=" padding: 10px">
                <div style="float: right;">
                    <span>Total:</span>
                    <span id="total" style="color: green; font-weight: bold; font-size: 25px">
                        <?php $squery = mysqli_query($conn,"SELECT sum(total_price) as total FROM pos");
                 while ($row = mysqli_fetch_array($squery)) {
                   echo asPesos($row['total']); ?>
                    </span>
                </div>
                <div>
                    <?php if($row['total'] > 0) {?>
                    <button type="submit" class="btn btn-primary" data-toggle="modal"
                        data-target="#order">ORDER</button>
                    <?php } else{?>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#order"
                        disabled>ORDER</button>
                    <?php }?>
                    <?php  include "modal-order.php"; ?>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <?php }?>
</main>
</body>

</html>
<script src="../assets/js/script_pos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>