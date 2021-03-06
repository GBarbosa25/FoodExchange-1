<?php
include '../db/connect.php';
if(!isset($_SESSION['user']['email'])){
    header('location: ../login/login.php');
}
include_once '../includeFile/header.php'; 
ch_title("List Of NGO");



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
                            <h1>How to use the chatbot</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="../ngo/list_of_ngo.php">Home</a></li>
                                <li class="breadcrumb-item active">List Of NGO's</li>
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
                            <h3 class="card-title">how to use the chatbot</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">

                                <tbody>
                        <p>OPEN YOUR TELEGRAM APP OR WEBSITE</p><BR>
                        <p>ADD @suedyy_bot as your friend </p><BR>
                        <p>then type hi or hello in the conversation</p><BR>
                        <p>and you will be ready to book a volunteer day</p>
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