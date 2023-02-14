

            <!-- Sidebar -->
            <nav class="nav bg-white">
              <ul class="nav__list">
                  <li class="nav__link nav__logo">
                  <!-- <i class='bx bxs-shopping-bags'></i> -->
                    Lou Geh Supermarket
                  </li>

                  <li class="nav__link <?php if ($page == 'Dashboard') {
                      echo 'nav__active';
                  } ?>">
                  <a href="../dashboard/">
                  <i class='bx bxs-tachometer'></i>
                  <span>Dashboard</span>
                    </a>
                  </li>

                    <li class="nav__link <?php if ($page == 'Customer') {
                        echo 'nav__active';
                    } ?>">
                    <a href="../customers/">
                    <i class='bx bx-id-card'></i>
                    <span>Customers</span>
                    </a>
                    </li>

                    <li class="nav__link <?php if (
                        $page == 'Sale Transaction'
                    ) {
                        echo 'nav__active';
                    } ?>">
                    <a href="../sale/">
                    <i class='bx bxs-store'></i>
                    <span>Sale</span>
                    </a>
                    </li> 
                    
                   <li class="nav__link">
                   <a href="../log-out.php" class="">
                    <i class='bx bxs-log-out'></i>
                    <span>Logout</span>
                    </a>  
                   </li>  
    
              </ul>
            </nav>

        