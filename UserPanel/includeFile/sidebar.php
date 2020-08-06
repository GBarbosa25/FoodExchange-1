
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../dist/img/logo.png" alt="Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Food Exchange</span>
    </a>

    <!-- Sidebar -->
    <?php 
    if ($_SESSION['user']['role'] == 'restaurant/company') {
    ?>
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['user']['full_name'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
             
              <li class="nav-item">
                <a href="../ngo/list_of_ngo.php" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <!-- <p>List of NGO’s </p> -->
                  <p> NGOs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href='../location/location.php' class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>NGOs Location</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <?php
    }
    elseif ($_SESSION['user']['role'] == 'user' ) {
    ?>
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $_SESSION['user']['file'] ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['user']['full_name'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="../ngo/list_of_ngo.php" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>NGO's </p>
                </a>
              </li>
               <li class="nav-item">
                <a href="../company/list_of_restaurant.php" class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>Restaurants</p>
                </a>
              </li>
              <li class="nav-item">
                <a href='../location/location.php' class="nav-link">
                  <i class="fas fa-list-alt nav-icon"></i>
                  <p>NGOs Location</p>
                </a>
              </li>
              
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <?php  
    } 
    ?>
    <!-- /.sidebar -->
  </aside>
