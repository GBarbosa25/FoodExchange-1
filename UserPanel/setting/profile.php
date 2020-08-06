<?php
include '../db/connect.php';
if(!isset($_SESSION['user']['email'])){
  header('location: ../login/login.php');
}
include_once '../includeFile/header.php'; 
ch_title("Profile");



?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
        include_once '../includeFile/navbar.php'; 
        include_once '../includeFile/sidebar.php'
        ?>
        <?php
          if($_SESSION['user']['role'] == 'restaurant/company'){
        ?>
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../ngo/list_of_ngo.php">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                    
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
    <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- /.col -->
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile</a></li>
                      <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="col-12">
                            <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">User Profile</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                  
                                  <?php
                                  $id = $_SESSION['user']['id'];
                                  $query = mysqli_query($con,"select * from user where id = '$id'");
                                  $row = mysqli_fetch_assoc($query);
                                  ?>
                                    <tr>
                                      <th>Restaurant/Company</th>
                                      <td><?php echo $row['full_name']?></td> 
                                    </tr>
                                    <tr>
                                      <th>Email</th>
                                      <td><?php echo $row['email']?></td> 
                                    </tr>
                                    <tr>
                                      <th>Address</th>
                                      <td><?php echo $row['address']?></td> 
                                    </tr>
                                    <tr>
                                      <th>Phone</th>
                                      <td><?php echo $row['phone']?></td> 
                                    </tr>
                                    <tr>
                                      <th>Manager Name</th>
                                      <td><?php echo $row['manager_name']?></td> 
                                    </tr>
                                    <tr>
                                      <th>Site Link</th>
                                      <td><?php echo $row['site_link']?></td> 
                                    </tr>  
                                </table>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.post -->

                        <!-- Post -->
                  
                        <!-- /.post -->
                      </div>
                      <!-- /.tab-pane -->
                      <!-- /.tab-pane -->

                      <div class="tab-pane" id="settings">
                        <form class="form-horizontal" method="POST">
                        <?php
                            include_once 'update_profile.php'; 
                        ?>

                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter Restaurant/Company Name" value="<?php echo $row['full_name']?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="address" name="address" placeholder="Enter Address"><?php echo $row['address']?></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                              <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="<?php echo $row['phone']?>">  
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Manager Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="manager_name" name="manager_name" placeholder="Enter Manager Name" value="<?php echo $row['manager_name']?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">Site Link</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="site_link" name="site_link" placeholder="Enter Site Link" value="<?php echo $row['site_link']?>">
                            </div>
                          </div>
                         
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-danger" name="submit_rc" id="submit_rc">Update</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        </div>
        <?php    
        }
        elseif ($_SESSION['user']['role'] == 'user') {
        ?>
         <div class="content-wrapper">
    <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../ngo/list_of_ngo.php">Home</a></li>
                            <li class="breadcrumb-item active">User Profile</li>
                        </ol>
                    </div>
                    
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
    <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- /.col -->
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profile</a></li>
                      <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update</a></li>
                    </ul>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="activity">
                        <!-- Post -->
                        <div class="col-12">
                            <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">User Profile</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                  
                                  <?php
                                  $id = $_SESSION['user']['id'];
                                  $query = mysqli_query($con,"select * from user where id = '$id'");
                                  $row = mysqli_fetch_assoc($query);
                                  ?>
                                    <tr>
                                      <th>Picture</th>
                                      <td><img src="<?php echo $row['file'] ?>" style="width: 10%;height: 20%" /></td> 
                                    </tr>
                                    <tr>
                                      <th>User Name</th>
                                      <td><?php echo $row['full_name']?></td> 
                                    </tr>
                                    <tr>
                                      <th>Email</th>
                                      <td><?php echo $row['email']?></td> 
                                    </tr>
                                    <tr>
                                      <th>Address</th>
                                      <td><?php echo $row['address']?></td> 
                                    </tr>
                                    <tr>
                                      <th>Phone</th>
                                      <td><?php echo $row['phone']?></td> 
                                    </tr>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.post -->

                        <!-- Post -->
                  
                        <!-- /.post -->
                      </div>
                      <!-- /.tab-pane -->
                      <!-- /.tab-pane -->

                      <div class="tab-pane" id="settings">
                        <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                        <?php
                            include_once 'update_user_profile.php'; 
                        ?>
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Choose Image</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control" id="image" name="image" placeholder="Enter User Name" >
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter User Name" value="<?php echo $row['full_name']?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" id="address" name="address" placeholder="Enter Address"><?php echo $row['address'];?></textarea>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10">
                              <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="<?php echo $row['phone']?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                              <button type="submit" class="btn btn-danger" name="submit" id="submit">Update</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                  </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        </div>
        <?php
        }
        ?>
        <?php
        include '../includeFile/footer_main.php' 
        ?>
    </div>

    


<?php 
  include_once '../includeFile/footer.php';
?>