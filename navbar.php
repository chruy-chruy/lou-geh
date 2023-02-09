<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: ../index.php");
    exit();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--=============== CSS ===============-->
   
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!--=============== MAIN JS ===============-->

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Lou Geh SuperMarket</title>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>

<body>
<!--Main Navigation-->
<header>
<div  style=" position: relative;">
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
              <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">

                  <a href="../Home/" class="list-group-item list-group-item-action py-2 ripple
                  <?php if ($page == 'Home') {echo 'active';} ?>">
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Home</span>
                    </a>

                    <a href="../sale/" class="list-group-item list-group-item-action py-2 ripple
                    <?php if ($page == 'Sale Transaction') {echo 'active';} ?>"><i
                        class="fas fa-lock fa-fw me-3"></i><span>Sale Transaction</span>
                    </a>

                    <a href="../delivery/" class="list-group-item list-group-item-action py-2 ripple
                    <?php if ($page == 'Delivery Transaction') {echo 'active';} ?>"><i
                        class="fas fa-lock fa-fw me-3"></i><span>Delivery Transaction</span>
                    </a>

                    <a href="../product/" class="list-group-item list-group-item-action py-2 ripple
                    <?php if ($page == 'Item') {echo 'active';} ?>"><i
                        class="fas fa-lock fa-fw me-3"></i><span>Product</span>
                    </a>

                    <a href="../customer/" class="list-group-item list-group-item-action py-2 ripple
                    <?php if ($page == 'Customer') {echo 'active';} ?>"><i
                      class="fas fa-lock fa-fw me-3"></i><span>Customer</span>
                    </a>

                    <a href="../supplier/" class="list-group-item list-group-item-action py-2 ripple
                    <?php if ($page == 'Supplier') {echo 'active';} ?>"><i
                      class="fas fa-lock fa-fw me-3"></i><span>Supplier</span>
                    </a>  

                    <a href="../user/" class="list-group-item list-group-item-action py-2 ripple 
                    <?php if ($page == 'User') {echo 'active';}  ?>" 
                    <?php if ($_SESSION['role'] != 'Admin') {echo 'hidden';}  ?>>
                    <i class="fas fa-lock fa-fw me-3"></i><span>User</span>
                    </a>    
                    
                    <a href="../log-out.php" class="list-group-item list-group-item-action py-2 ripple"><i
                      class="fas fa-lock fa-fw me-3"></i><span>Logout</span>
                    </a>    
    
                </div>
              </div>
            </nav>
            <!-- Sidebar -->

            <!-- Navbar -->
            <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
              <!-- Container wrapper -->
              <div class="container-fluid">
                <!-- Brand -->
                <a class="navbar-brand" href="#">
                LOU GEH SUPERMARKET
                </a>
              </div>
              <!-- Container wrapper -->
            </nav>
            <!-- Navbar -->
          </header>
          <!--Main Navigation-->

          <!--Main layout-->
          <main style="margin-top: 58px;">
            <div class="container pt-4"></div>
          </main>
          <!--Main layout-->
          </body>
</div>
</html>

          <style>
              body {
background-color: white;
}
@media (min-width: 991.98px) {
main {
padding-left: 240px;
}
}

/* Sidebar */
.sidebar {
position: fixed;
top: 0;
bottom: 0;
left: 0;
padding: 58px 0 0; /* Height of navbar */
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
width: 240px;
z-index: 600;
}

@media (max-width: 991.98px) {
.sidebar {
width: 100%;
}
}
.sidebar .active {
border-radius: 5px;
box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
}

.sidebar-sticky {
position: relative;
top: 0;
height: calc(100vh - 48px);
padding-top: 0.5rem;
overflow-x: hidden;
overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}
</style>
<style>


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>