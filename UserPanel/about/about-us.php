<?php
include_once '../includeFile/header.php'; 
ch_title("About Us");
$con = connect();

if(!isset($_SESSION['user']['email'])){
    header('location: ../login/login.php');
}
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <?php
        include_once '../includeFile/navbar.php'; 
        include_once '../includeFile/sidebar.php';
        ?>
        <div class="content-wrapper">
    <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>About Us</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../ngo/list_of_ngo.php">Home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </div>
                        
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><b>Card title</b></h5>

                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                        </p>
                        <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        
                    </div>
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