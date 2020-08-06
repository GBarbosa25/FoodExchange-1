<?php 
if (isset($_POST['submit'])) {
    
    if(empty($_POST['role']) || empty($_POST['full_name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['retype_password']) || empty($_POST['address']) || empty($_POST['phone'])){
        echo '<script>swal("Error","All Feild Mandantory","error")</script>';
    }
    else {
        
        $role = $_POST['role'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file = $_FILES['image']['name']; 
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $password =password_hash( $_POST['password'],PASSWORD_BCRYPT);
        $retype_password = $_POST['retype_password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $manager_name = $_POST['manager_name'];
        $site_link = $_POST['site_link'];
        $location ='../../UserPanel/dist/img/userpic/';

        // echo 'Role:'.$role.'full name:'.$full_name.'email:'.$email.'password:'.$password.'R password:'.$retype_password.'Address:'.$address.'phone:'.$phone.'manager name:'.$manager_name.'site link:'.$site_link;
        if ($file == "") {
            if(password_verify($retype_password,$password)){
                $query = mysqli_query($con,"insert into user(role,full_name,email,password,address,phone,manager_name,site_link) values('$role','$full_name','$email','$password','$address','$phone','$manager_name','$site_link')");
                if ($query) {
                    echo '<script>swal("Thankyou","Your Restaurant/Company Account Registrated","success")</script>';
                }
                else {
                    echo '<script>swal("Error","Error in  Restaurant/Company Form","error")</script>';
                }
            }
            else {
                echo '<script>swal("Error","Password Not Match","error")</script>';
            }
        }
        else {
                if (move_uploaded_file($file_tmp,$location.$file)) {
                    if(password_verify($retype_password,$password)){
                    $query = mysqli_query($con,"insert into user(role,file,full_name,email,password,address,phone) values('$role','$location$file','$full_name','$email','$password','$address','$phone')");
                    if ($query) {
                        echo '<script>swal("Thankyou","Your User Account Registrated","success")</script>';
                    }
                    else {
                        echo '<script>swal("Error","Error in  User Form","error")</script>';   
                    }
                }
                else {
                    echo '<script>swal("Error","Password Not Match","error")</script>';
                }
                
            }
            else {
                echo '<script>swal("Error","Error in Image uploading","error")</script>';
            }
            
        }
    }
}
?> 