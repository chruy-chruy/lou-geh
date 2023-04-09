  <!-- The Modal -->
  <div class="modal fade" id="edit_<?php echo $row['item_number'];?>">
      <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title" style="color: green; font-weight: bold;">
                      <?php echo $row['name'];?></h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">

                  <form name="modal" method="post" action="insert-item.php" style="font-size: 18px;">


                      <div class="col-12">
                          <label class="form-label" style="color: black; font-weight: bold;">Product Code :
                              <?php echo $row['item_number'];?></label>
                          <input hidden type="text" id="item_number" name="item_number"
                              value="<?php echo $row['item_number'];?>" required>
                          <input hidden type="text" id="name" name="name" value="<?php echo $row['name'];?>" required>
                      </div>

                      <div class="col-12">
                          <label class="form-label" style="color: black; font-weight: bold;">Price :
                             <?php echo asPesos($row['selling_price']);?> </label>
                          <input hidden type="text" id="selling_price" name="selling_price"
                              value="<?php echo $row['selling_price'];?>" required>
                      </div>

                      <div class="col-12">
                          <label class="form-label" style="color: black; font-weight: bold; "> Stock Left :</label>
                          <span style="color:red;font-weight: bold;"><?php echo $row['quantity'];?></span>
                          <input hidden type="text" id="stock" name="stock" value="<?php echo $row['quantity'];?>"
                              required>
                      </div>

                      <div class="col-12">
                          <label class="form-label" style="color: black; font-weight: bold;"> Quantity :</label>
                          <br>
                          <input type="number" id="quantity" name="quantity" style=" width: 100%; text-align:center;"
                              required autofocus>
                      </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              </form>
          </div>
      </div>
  </div>