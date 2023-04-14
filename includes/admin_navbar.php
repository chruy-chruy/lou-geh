<!-- Sidebar -->
<nav class="nav bg-white">
    <ul class="nav__list">
        <li class="nav__link nav__logo">
            <img src="../assets/images/logo.png" alt="">
            <span>SAVESEGROW POS</span>
        </li>

        <!-- <li class="nav__link <?php if ($page == 'Dashboard') {echo 'nav__active';} ?>">
                  <a href="../dashboard/">
                  <i class='bx bxs-tachometer'></i>
                  <span>Dashboard</span>
                    </a>
                  </li> -->

        <li class="nav__link <?php if ($page == 'POS') {echo 'nav__active';} ?>">
            <a href="../pos/">
                <i class='bx bxs-tachometer'></i>
                <span>POS</span>
            </a>
        </li>

        <li class="nav__link <?php if ($page == 'Sale Transaction') {echo 'nav__active';} ?>">
            <a href="../sale/">
                <i class='bx bxs-store'></i>
                <span>Sales Report</span>
            </a>
        </li>

        <li class="nav__link <?php if ($page == 'Inventory Report') {echo 'nav__active';} ?>">
            <a href="../purchase/">
                <i class='bx bxs-cart-alt'></i>
                <span>Inventory Report</span>
            </a>
        </li>

        <li class="nav__link <?php if ($page == 'Product List') {echo 'nav__active';} ?>">
            <a href="../products/">
                <i class='bx bxs-package'></i>
                <span>Product List</span>
            </a>
        </li>

        <!-- <li class="nav__link <?php if ($page == 'Supplier') {echo 'nav__active';} ?>">
                    <a href="../suppliers/">
                    <i class='bx bxs-group'></i>
                    <span>Suppliers</span>
                    </a>  
                    </li>


                    <li class="nav__link <?php if ($page == 'Customer') {echo 'nav__active';} ?>">
                    <a href="../customers/">
                    <i class='bx bx-id-card'></i>
                    <span>Customers</span>
                    </a>
                    </li> -->


        <li class="nav__link <?php if ($page == 'User') {echo 'nav__active';}  ?>">
            <a href="../users/">
                <i class='bx bxs-user-account'></i>
                <span>Users</span>
            </a>
        </li>

        <div class="nav__link nav__user mt-auto p-3 mb-3">
            Welcome : <br> <span class="mx-auto"><?php echo $_SESSION['fullName'] . " (".$_SESSION['role'].")";?></span>
        </div>


        <li class="nav__link">
            <a href="../log-out.php" class="">
                <i class='bx bxs-log-out'></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>
</nav>