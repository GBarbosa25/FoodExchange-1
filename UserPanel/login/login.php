<?php
include '../db/connect.php';
if(isset($_SESSION['user']['email'])){

    header('location: ../ngo/list_of_ngo.php');

}

include_once '../includeFile/header.php'; 
ch_title("Login");
 

// include_once '../db/connect.php';

?>
<body class="hold-transition login-page" style="background-image: url('../../UserPanel/dist/img/foodexchange.jpg'); width: 100%;
   background-size: 100%;
    position: relative;">
    <div class="login-box">
       
        <!-- /.login-logo -->
        <div class="card">
            
            <div class="card-body login-card-body">
                <div class="login-logo">
                    <a href="../../index.php"><b>Food</b>Exchange</a>
                </div>
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="" method="POST">
                    <?php 
                    include_once 'login_script.php';
                    ?>
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
                    <div class="row">
                      
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
                <!-- /.social-auth-links -->

                <!-- <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>-->
                <p class="mb-0">
                    <a href="../register/register.php" class="text-center">Be a Volunteer Here</a>
                </p> 
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
  <?php 
  include_once '../includeFile/footer.php';
  ?>