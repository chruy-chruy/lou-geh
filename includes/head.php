<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- FAVICON -->
     <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">

     <!-- JQUERY -->
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

     <!-- CSS -->
     <link rel="stylesheet" href="../assets/css/style.css" />

     <!-- BOXICONS -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

     <!-- BOOTSTRAP 5 -->
     <link rel="stylesheet" href="../assets/css/bootstrap.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

     <!-- DATATABLES-->
     <link rel="stylesheet" href="../assets/css/dataTables.bootstrap5.min.css"> 
     <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

     <title>SAVESEGROW Point of Sale System</title>
 </head>
 
 <body>
<!-- view user privacy -->
<?php
session_start();
if (isset($_SESSION['id'])) {
    if ($_SESSION['role'] == 'Admin') {
        include 'admin_navbar.php';
    } elseif ($_SESSION['role'] == 'Inventory Staff') {
        include 'inventory_staff_navbar.php';
    } elseif ($_SESSION['role'] == 'Sales Staff') {
        include 'sales_staff_navbar.php';
    } else {
        echo 'invalid role';
    }
} elseif (!isset($_SESSION['id'])) {
    header('Location: ../index.php');
    exit();
} else {
    echo 'Session Error';
}
?>
<?php include 'header.php'; ?> 

