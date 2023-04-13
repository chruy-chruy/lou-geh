<?php
  $product_sale_number =  $row['product_sale_number'];
  $sql = "SELECT * FROM product_sale WHERE product_sale_number = $product_sale_number";
  $sale_query = mysqli_query($conn, $sql);
  $product_sale = mysqli_fetch_array($sale_query);
  ?>
<link rel="stylesheet" href="../assets/css/receipt.css" />
<!-- The Modal -->
<div class="modal fade" id="view_<?php echo $row['product_sale_number'] ?>" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable  modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalScrollableTitle">Product Sale Number :
                    <span style="color: green; font-weight: bold;"><?php echo $row['product_sale_number'] ?></span>
                </h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-start text-black p-4">
                <h6 class="modal-title mb-4" id="exampleModalLabel">
                    <?php echo date("l, F j Y g:i A", strtotime($row['created_at']));?>
                </h6>
                <p class="mb-0" style="color: #35558a;">Product Sale</p>
                <hr class="mt-2 mb-4"
                    style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">

                <?php
                        $sql = mysqli_query($conn,"SELECT * from `product_sale` WHERE product_sale_number = $product_sale_number;");
                        while ($row = mysqli_fetch_array($sql)) { ?>
                <div class="d-flex justify-content-between">
                    <p class="fw-bold mb-0"><?php echo $row['product_name'];?>(Qty:<?php echo $row['quantity'];?>)</p>
                    <p class="text-muted mb-0 small"><?php echo '₱'.  asPesos($row['price']);?></p>
                </div>
                <div class="d-flex justify-content-between pb-1">
                    <p class="small mb-0">Sub Total</p>
                    <p class="fw-bold mb-0"><?php echo '₱'. asPesos($row['total_price'])?></p>
                </div>
                <?php }?>
                <hr class="mt-2 mb-4"
                    style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">
                <br>
                <p class="fw-bold" style="text-align:center;"><strong>Thank you!
                        <br>
                        We care. We grow
                    </strong> </p>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>