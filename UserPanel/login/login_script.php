<?php 

if (isset($_POST['submit'])) {
    error_reporting(0);
    include '../db/connect.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = mysqli_query($con,"select * from user where email ='$email'");
    while ($row = mysqli_fetch_assoc($select)) {
        $password_d = $row['password'];
        if (password_verify($password,$password_d)) {
            $_SESSION['user'] = $row;
        }
    }

    if (isset($_SESSION['user']['email'])) {
        echo "<script>window.location='../ngo/list_of_ngo.php'</script>";
        // header('location:../ngo/list_of_ngo.php');
        //  ob_end_flush();
    }
    else {
        echo 'error in login';
    }
    
}

?>