  <!-- The Modal -->
  <div class="modal fade" id="order">
      <div class="modal-dialog modal-dialog-centered modal-sm">
          <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                  <h4 class="modal-title" style="color: green; font-weight: bold;">Payment Transaction</h4>
                  <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
              </div>

              <!-- Modal body -->
              <div class="modal-body">

                  <form name="modal" method="post" action="order.php" style="font-size: 18px;">


                      <div class="col-12">
                          <label class="form-label" style="color: black; font-weight: bold;">Total Payment:
                              <span style="font-size: 20px;"><?php echo asPesos($row['total']); ?></span></label>
                          <input hidden type="text" id="total" name="total" value="<?php echo$row['total']?>" required>
                      </div>
                      <div class="col-12">
                          <label class="form-label" style="color: black; font-weight: bold;"> Customer Name :</label>
                          <br>
                          <input class="modal-input" type="text" id="customer" name="customer" placeholder="Optional"
                              style=" width: 100%; text-align:center;">
                      </div>

                      <div class="col-12">
                          <label class="form-label" style="color: black; font-weight: bold;"> Amount :</label>
                          <br>
                          <input class="modal-input" type="number" id="amount" name="amount"
                              style=" width: 100%; text-align:center;" required>
                      </div> 
                      <div class="col-12">
                      <label class="form-label" style="font-size:15px;"> Print Receipt? 
                      <input type="checkbox" name="print" class="checkmarkss" style=" transform : scale(1.2);"></label>
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