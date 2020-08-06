<?php

if (isset($_POST['submit_rc'])) {
    $full_name= $_POST['full_name'];
    $address= $_POST['address'];
    $phone= $_POST['phone'];
    $manager_name=$_POST['manager_name'];
    $site_lnk= $_POST['site_link'];

    $update = mysqli_query($con,"update user set full_name='$full_name', address='$address', phone='$phone', manager_name='$manager_name',site_link='$site_lnk' where id ='".$_SESSION['user']['id']."'");
    if ($update) {
        $_SESSION['user']['full_name'] = $_POST['full_name'];
        echo "<script>window.location='profile.php'</script>";
        // header('location:profile.php');
    }
    else {
        echo '<script>swal("Error","Your Account not updated","error")</script>';

    }
}


?>