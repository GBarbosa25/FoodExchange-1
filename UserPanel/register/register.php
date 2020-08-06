<?php
include '../db/connect.php';
include_once '../includeFile/header.php'; 
ch_title("Registration");

?>
<body class="hold-transition register-page" style="background-image: url('../../UserPanel/dist/img/foodexchange.jpg'); width: 100%;
    background-size: 100%;
    position: relative;" >
<div class="register-box">
  

  <div class="card">
    
    <div class="card-body register-card-body">
      <div class="register-logo">
        <a href="../../index.php"><b>Food</b>Exchange</a>
      </div>
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="POST" enctype="multipart/form-data">
        <?php
        include_once 'register_script.php'; 
        ?>
        <div class="form-group">
            <select class="form-control" name="role" id="role">
                <option value=""></option>
                <option value="restaurant/company">Restaurant/Company</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="input-group mb-3" id="file_div">
          <input type="file" class="form-control" name="image" id="image">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-file-upload"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="full_name"  id="full_name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" id="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="retype_password" id="retype_password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <textarea class="form-control" rows="3" placeholder="Enter ..." name="address" id="address"></textarea>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-address-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="tel" class="form-control" placeholder="Phone Number" name="phone" id="phone">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3" id="manager_name_div">
          <input type="text" class="form-control" placeholder="Manager Name" name="manager_name" id="manager_name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3" id="site_link_div">
          <input type="text" class="form-control" placeholder="Site Link" name="site_link" id="site_link">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-link"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     

      <a href="../login/login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<?php 
  include_once '../includeFile/footer.php';
  ?>
