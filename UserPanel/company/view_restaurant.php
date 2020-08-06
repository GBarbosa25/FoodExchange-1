<?php
include '../db/connect.php';
if(!isset($_SESSION['user']['email'])){
  header('location: ../login/login.php');
}
include_once '../includeFile/header.php'; 
ch_title("List Of Restaurants");
?>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
        include_once '../includeFile/navbar.php'; 
        include_once '../includeFile/sidebar.php';
        ?>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>View Restaurants</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../company/list_of_restaurant.php">Home</a></li>
                                <li class="breadcrumb-item active">View Restaurants</li>
                            </ol>
                        </div>
                        
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">View Restaurants</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                  
                                  <?php
                                  $id = $_GET['id'];
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
            </div>
            
        </div>
        <?php
        include '../includeFile/footer_main.php' 
        ?>
    </div>
<?php 
  include_once '../includeFile/footer.php';
?>