<?php
$page = 'Dashboard'; ?>
<?php include '../includes/head.php'; ?> 
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<main>

<div>
  <canvas id="myChart"></canvas>
</div>

<div class="row g-3 mb-3">
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Sales</h5>
        <p class="card-text fs-4">₱ <?php include 'total_sales.php'; ?> </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Products</h5>
        <p class="card-text fs-4"><?php include 'total_products.php'; ?> </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Stocks</h5>
        <p class="card-text fs-4"><?php include 'stocks_onhand.php'; ?> </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Products Sold</h5>
        <p class="card-text fs-4"><?php include 'unit_solds.php'; ?> </p>
      </div>
    </div>
  </div>
</div>

<div class="row g-3">
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Customers</h5>
        <p class="card-text fs-4"><?php include 'total_customer.php'; ?> </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Suppliers</h5>
        <p class="card-text fs-4"><?php include 'total_supplier.php'; ?> </p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Sales Staff</h5>
        <p class="card-text fs-4"><?php
        include 'total_users.php';
        echo $total_sales_staff;
        ?></p>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Inventory Staff</h5>
        <p class="card-text fs-4"><?php
        include 'total_users.php';
        echo $total_inventory_staff;
        ?></p>
      </div>
    </div>
  </div>
</div>

</main>
</body>
</html>

<script src="../assets/js/script_dashboard.js"></script>

