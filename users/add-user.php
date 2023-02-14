<?php 
$page = 'User';
include "../db_conn.php";

if(isset($_GET['message'])){
    $message = $_GET['message'];
    echo "<script type='text/javascript'>alert('$message');</script>";
  
  }
 ?>
 
 <?php include "../includes/head.php";?> 

    <main>
      <div class="card">
        <div class="card-body">
          
         <a class="btn btn-secondary btn-sm" href="index.php">Back</a>
    
    <form class="row g-3" action="create.php" method="post">
  
  
    <div class="col-6">
      <label class="form-label">Full Name</label>
      <input type="text" class="form-control" id="name" name="name" 
      <?php if (isset($_GET['name'])) { ?>  value = "<?php echo $_GET['name']; ?>" <?php } ?>
      required>
    </div>
  
    <div class="col-md-6">
      <label for="" class="form-label">Username</label>
      <input type="text"  class="form-control" id="user_name" name="user_name" required>
      <?php if (isset($_GET['message'])) { ?>
                  <p class="error-message" style="margin-bottom: 15px; color :red ;"><?php echo $_GET['message']; ?></p>
      <?php } ?>
    </div>
  
  
    <div class="col-md-6">
      <label for="" class="form-label">Password</label>
      <input type="text"  class="form-control" id="password" name="password" 
      <?php if (isset($_GET['password'])) { ?>  value = "<?php echo $_GET['password']; ?>" <?php } ?>
      required>
    </div>
  
    <div class="col-md-6">
      <label for="" class="form-label">Role</label>
      <select name="role" id="role" class="form-select" required> 
      <option value="" selected disabled hidden>--</option>
    <option value="Inventory Staff" >Inventory Staff</option>
    <option value="Sales Staff" >Sales Staff</option>
    <option value="Admin">Admin</option>
  </select>
    </div>
  
     
        </div>

        <div class="card-footer py-3">
        <button type="submit" class="btn btn-primary">Submit</button>
  
  </form>
        </div>
      </div>
    </main>
 </body>
 </html>
 <script src="../assets/js/table.js"></script>