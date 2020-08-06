<?php
if (isset($_POST['submit'])) {
    $file_tmp =$_FILES['image']['tmp_name'];
    $file = $_FILES['image']['name'];
    $full_name= $_POST['full_name'];
    $address= $_POST['address'];
    $phone= $_POST['phone'];
    $query = mysqli_query($con,"select * from user where id = '".$_SESSION['user']['id']."'");
    $row = mysqli_fetch_assoc($query);
    $old_file = $row['file'];
    //  echo '<pre>'.print_r($old_file,true).'</pre>';
    // echo $old_file;
    $location ='../../UserPanel/dist/img/userpic/';
    $path =$location.$file;
    rename($old_file,$path);
    if (move_uploaded_file($file_tmp,$path)) {
        $update = mysqli_query($con,"update user set file='$path' ,full_name='$full_name', address='$address', phone='$phone' where id ='".$_SESSION['user']['id']."'");
        if ($update) {
            $_SESSION['user']['full_name'] = $_POST['full_name'];
            $_SESSION['user']['file'] = $path;
            echo "<script>window.location='profile.php'</script>";
            // header('location:profile.php');
        }
        else {
            echo '<script>swal("Error","Your Account not updated","error")</script>';

        }
    }
}
?>