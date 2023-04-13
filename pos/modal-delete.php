  <!-- The Modal -->
  <div class="modal fade" id="delete_<?php echo $row['pos_id'];?>">
      <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                 <h4>Remove <?php echo $row['product_name'];?></h4>
                 <h4 class="modal-title" style="color: red; font-weight: bold;">
                  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></h4>
                 <h4 class="modal-title" style="color: red; font-weight: bold;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">

                  <form name="modal" method="post" action="remove-pos.php" style="font-size: 18px;">


                      <div class="col-12">
                          <input hidden type="text" id="item_number" name="item_number"
                              value="<?php echo $row['item_number'];?>" required>
                          <input hidden type="text" id="name" name="name" value="<?php echo $row['product_name'];?>"
                              required>
                          <input hidden type="text" id="pos_id" name="pos_id" value="<?php echo $row['pos_id'];?>"
                              required>
                      </div>
                      <div class="col-12">
                          <label class="form-label" style="color: black; font-weight: bold;">Are you sure want to
                              remove </label>
                              <br>
                          <span style="color: red; font-weight: bold;"><?php echo $row['product_name'];?>
                              Product Code:<?php echo $row['item_number'];?></label></span>?
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