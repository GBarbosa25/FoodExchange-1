<?php 
ob_start();
// include_once '../db/connect.php';
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">

    </ul>
  <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">      
                <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fas fa-cog"></i>
                   
                </a>
                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">Setting</span>
                    <div class="dropdown-divider"></div>
                    <a href="../setting/profile.php" class="dropdown-item">
                        <i class="fas fa-user mr-2"></i> Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="../logout/logout.php" class="dropdown-item">
                        <i class="fas fa-sign-out-alt"></i> logout
                    </a>   
                </div>
          </li>
                
      </ul>  
</nav>