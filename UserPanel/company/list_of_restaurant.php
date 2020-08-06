<?php
include '../db/connect.php';
if ($_SESSION['user']['role'] == 'user' ) {
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
                            <h1>List of Restaurants</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../ngo/list_of_ngo.php">Home</a></li>
                                <li class="breadcrumb-item active">List Of Restaurants</li>
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
                            <h3 class="card-title">List of Restaurants</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Restaurant/Company Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $a = 1;
                                $query = mysqli_query($con,"select * from user where role='restaurant/company'");
                                while($row = mysqli_fetch_assoc($query)){
                                    echo'
                                    <tr>    
                                        <td>'.$a++.'</td>
                                        <td>'.$row['full_name'].'</td>
                                        <td> <a href="../company/view_restaurant.php?id='.$row['id'].'"><i class="fas fa-eye"></i></a></td>
                                    </tr>
                                    ';
                                } 
                                ?>
                                </tbody>
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
    # code...

include_once '../includeFile/footer.php';
}
else {
    header('location:../ngo/list_of_ngo.php');
} 
?>