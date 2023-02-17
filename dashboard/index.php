<?php
$page = 'Dashboard'; ?>
<?php include '../includes/head.php'; ?> 
<?php include 'total_products.php'; ?>
<?php include 'total_users.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<main>



<div class="row g-3 mb-3">
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-5 d-flex align-items-center">
            <i class='bx bx-money fs-1'></i>
          </div>
        <div class="col d-flex flex-column align-items-end justify-content-center">
          <p class="card-text fs-4 m-0 fw-bold">₱ <?php include 'total_sales.php'; ?> </p>
          <p class="m-0">Sales</p>
        </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-5 d-flex align-items-center">
            <i class='bx bxs-package fs-1'></i>
          </div>
        <div class="col d-flex flex-column align-items-end justify-content-center">
          <p class="card-text fs-4 m-0 fw-bold"><?php echo $products_available; ?> </p>
          <p class="m-0">Products Available</p>
        </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-5 d-flex align-items-center">
            <i class='bx bxs-box fs-1'></i>
          </div>
        <div class="col d-flex flex-column align-items-end justify-content-center">
          <p class="card-text fs-4 m-0 fw-bold"><?php include 'stocks_onhand.php'; ?> </p>
          <p class="m-0">Stocks</p>
        </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-5 d-flex align-items-center">
            <i class='bx bxs-badge-dollar fs-1'></i>
          </div>
        <div class="col d-flex flex-column align-items-end justify-content-center">
          <p class="card-text fs-4 m-0 fw-bold"><?php include 'unit_solds.php'; ?> </p>
          <p class="m-0">Products Sold</p>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row g-3">
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-5 d-flex align-items-center">
            <i class='bx bxs-group fs-1'></i>
          </div>
        <div class="col d-flex flex-column align-items-end justify-content-center">
          <p class="card-text fs-4 m-0 fw-bold"><?php include 'total_customer.php'; ?> </p>
          <p class="m-0">Customers</p>
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-5 d-flex align-items-center">
            <i class='bx bxs-group fs-1'></i>
          </div>
        <div class="col d-flex flex-column align-items-end justify-content-center">
          <p class="card-text fs-4 m-0 fw-bold"><?php include 'total_supplier.php'; ?> </p>
          <p class="m-0">Suppliers</p>
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-5 d-flex align-items-center">
            <i class='bx bxs-user-account fs-1'></i>
          </div>
        <div class="col d-flex flex-column align-items-end justify-content-center">
          <p class="card-text fs-4 m-0 fw-bold"><?php echo $total_sales_staff; ?> </p>
          <p class="m-0">Sales Staff</p>
        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-5 d-flex align-items-center">
            <i class='bx bxs-user-account fs-1'></i>
          </div>
        <div class="col d-flex flex-column align-items-end justify-content-center">
          <p class="card-text fs-4 m-0 fw-bold"><?php echo $total_inventory_staff; ?> </p>
          <p class="m-0">Inventory Staff</p>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4 g-3">
  <div class="col-lg-7 col-md-12">
  <div class="card">
    <div class="card-header">
    <h6 class="m-2">Recent Sales Transactions</h6>
    </div>
    <div class="card-body table-responsive">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Transaction #</th>
      <th scope="col">Customer</th>
      <th scope="col">Product</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
        <?php
        $squery = mysqli_query(
            $conn,
            'SELECT * from sale_transaction ORDER by transaction_no desc LIMIT 10'
        );
        while ($row = mysqli_fetch_array($squery)) { ?>
            <tr>
            <td><?php echo $row['transaction_no']; ?></td>
            <td><?php echo $row['customer_name']; ?></td>
            <td><?php echo $row['item_name']; ?></td>
            <td><?php echo date(
                'l, F j Y g:i A',
                strtotime($row['created_at'])
            ); ?></td>
            </tr> <?php }
        ?>
            </tbody>
</table>
    </div>
  </div>
  </div>

  <div class="col-lg-5 col-md-12">
    <div class="card">
      <div class="card-body">
        <canvas id="myChart"></canvas>
      </div>
    </div>
  </div>
</div>

</main>
</body>
</html>

<script src="../assets/js/script_dashboard.js"></script>

