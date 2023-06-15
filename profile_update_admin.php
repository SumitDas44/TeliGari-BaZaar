<?php
    session_start();

    //report all PHP errors
    error_reporting(E_ALL);

    if(isset($_POST['update'])){

        @include 'config.php';
        
        $new_name = $_POST['update_name'];
        $new_email = $_POST['update_email'];
        $new_pass = md5($_POST['update_password']);

        if((!empty($new_name) && !empty($new_email)) && !empty($new_pass)){

            $loggedInUser = $_SESSION['admin_name'];
            $sql = "UPDATE user_form SET name = '$new_name', email = '$new_email', password='$new_pass' WHERE name = '$loggedInUser'";
            $results = mysqli_query($conn,$sql);

            header('location:profile_admin.php?success=userUpdated');
            exit;
        }else{
            header('location:profile_admin.php?error=emptyNameAndEmail');
            exit;
        }
        //print_r($new_name);
        //print_r($new_email);
    }
?>