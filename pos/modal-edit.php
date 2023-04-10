  <!-- The Modal -->
  <div class="modal fade" id="edit_<?php echo $row['pos_id'];?>">
      <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title" style="color: green; font-weight: bold;">
                      <?php echo $row['product_name'];?></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">

                  <form name="modal" method="post" action="update-item.php" style="font-size: 18px;">


                      <div class="col-12">
                          <label class="form-label" style="color: black; font-weight: bold;">Product Code :
                              <?php echo $row['item_number'];?></label>
                          <input hidden type="text" id="item_number" name="item_number"
                              value="<?php echo $row['item_number'];?>" required>
                          <input hidden type="text" id="name" name="name" value="<?php echo $row['product_name'];?>"
                              required>
                          <input hidden type="text" id="pos_id" name="pos_id" value="<?php echo $row['pos_id'];?>"
                              required>
                      </div>

                      <div class="col-12">
                          <label class="form-label" style="color: black; font-weight: bold;">Price :
                              <?php echo asPesos($row['price']);?> </label>
                          <input hidden type="text" id="selling_price" name="selling_price"
                              value="<?php echo $row['price'];?>" required>
                      </div>

                      <?php $item_number = $row['item_number'];
                      $squery2 = mysqli_query($conn,"SELECT quantity FROM `items` WHERE item_number = $item_number");
                 while ($product = mysqli_fetch_array($squery2)) { ?>
                      <div class="col-12">
                          <label class="form-label" style="color: black; font-weight: bold; "> Stock Left :</label>
                          <span
                              style="color:red;font-weight: bold;"><?php echo $product['quantity']+$row['quantity'];?></span>
                          <input hidden type="text" id="stock" name="stock" value="<?php echo $product['quantity'];?>"
                              required>
                      </div>
                      <?php }?>
                      <div class="col-12">
                          <label class="form-label" style="color: black; font-weight: bold;"> Quantity :</label>
                          <br>
                          <input class="modal-input" type="number" id="quantity" name="quantity"
                              value="<?php echo $row['quantity'];?>" style="width: 100%; text-align:center;" required>
                      </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              </form>
          </div>
      </div>
  </div>