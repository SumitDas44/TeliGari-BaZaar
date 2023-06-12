<?php

    @include 'config.php';
    if(isset($_POST['submit'])){

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);
        $cpass = md5($_POST['cpassword']);
        $user_type = $_POST['user_type'];

        $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            $error[] = 'user already exists!';
        }else{
            if($pass != $cpass){
                $error[] = 'password not matched!';
            }else{
                $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
                mysqli_query($conn, $insert);
                header('location:login_form.php');
            }
        }

    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <!-- swiper cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- fontawesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Registration form starts -->

    <div class="registration-form-container">
        <form action="" method="post">
            <h3>Register Now!</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <input type="text" required name="name" placeholder="Enter your name" class="box">
            <input type="email" required name="email" placeholder="Enter your email" class="box">
            <input type="password" required name="password" placeholder="Enter your password" class="box">
            <input type="password" required name="cpassword" placeholder="Confirm your password" class="box">
            <select name="user_type" id="" class="box">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <p>Already have an account? <a href="login_form.php">click here!</a></p>
            <input type="submit" name="submit" value="register" class="btn">
        </form>
    </div>
    
    <!-- Registration form ends -->

        
</body>
</html>