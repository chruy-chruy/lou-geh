

            <!-- Sidebar -->
            <nav class="nav bg-white">
              <ul class="nav__list">
                  <li class="nav__link nav__logo">
                    <span>Lou Geh Supermarket</span>
                  </li>


                  <li class="nav__link <?php if ($page == 'Dashboard') {
                      echo 'nav__active';
                  } ?>">
                  <a href="../dashboard/">
                  <i class='bx bxs-tachometer'></i>
                  <span>Dashboard</span>
                    </a>
                  </li>

                  <li class="nav__link <?php if (
                       $page == 'purchase Transaction'
                   ) {
                       echo 'nav__active';
                   } ?>">
                   <a href="../purchase/">
                    <i class='bx bxs-cart-alt'></i>
                    <span>Purchase</span>
                    </a>
                   </li>

                  <li class="nav__link <?php if ($page == 'Item') {
                        echo 'nav__active';
                    } ?>">
                    <a href="../products/">
                    <i class='bx bxs-package'></i>
                    <span>Products</span>
                    </a>
                    </li>

                    <li class="nav__link <?php if ($page == 'Supplier') {
                        echo 'nav__active';
                    } ?>">
                    <a href="../suppliers/">
                    <i class='bx bxs-group'></i>
                    <span>Suppliers</span>
                    </a>  
                    </li>

                    <div class="nav__link nav__user mt-auto p-3 mb-3">
                      Logged in: <br> <span class="mx-auto"><?php echo $_SESSION['fullName']; ?></span>
                    </div>
                    
                   <li class="nav__link">
                   <a href="../log-out.php" class="">
                    <i class='bx bxs-log-out'></i>
                    <span>Logout</span>
                    </a>  
                   </li>  
    
              </ul>
            </nav>

        