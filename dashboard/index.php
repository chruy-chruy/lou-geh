<?php
$page = 'Dashboard'; ?>

<?php include '../includes/head.php'; ?> 

<main>
stocks onhand : <?php include 'stocks_onhand.php'; ?> 
<br>
total sales : <?php include 'total_sales.php'; ?> 
<br>
product sold : <?php include 'unit_solds.php'; ?> 
<br>
total product : <?php include 'total_products.php'; ?> 
<br>
total supplier : <?php include 'total_supplier.php'; ?> 
<br>
total user : <?php include 'total_users.php'; ?> 
<br>
total Inventory Staff : <?php echo $total_inventory_staff; ?> 
<br>
total Sales Staff : <?php echo $total_sales_staff; ?> 
</main>

</body>
</html>