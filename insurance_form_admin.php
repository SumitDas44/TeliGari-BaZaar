<?php

    @include 'config.php';
    if(isset($_POST['submit'])){

        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $dob = mysqli_real_escape_string($conn, $_POST['dob']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $accident = mysqli_real_escape_string($conn, $_POST['accident']);
        $vin = mysqli_real_escape_string($conn, $_POST['vin']);
        $driver = mysqli_real_escape_string($conn, $_POST['driver']);
        $car = mysqli_real_escape_string($conn, $_POST['car']);
        $coverage = mysqli_real_escape_string($conn, $_POST['coverage_expiration']);
        $tbp = mysqli_real_escape_string($conn, $_POST['to_be_paid']);
  
        $insert = "INSERT INTO insurance(fname, lname, dob, address, email, accident, phone, vin, driver, car, coverage_expiration, to_be_paid) VALUES('$fname','$lname','$dob','$address','$email','$accident','$phone','$vin','$driver','$car','$coverage','$tbp')";
        mysqli_query($conn, $insert);
        header('location:admin_page.php');
            
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Form</title>

    <!-- swiper cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- fontawesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- insurance form starts -->

    <div class="insurance-form-container">
        <form action="" method="post">
            <h3>Apply for car insurance!</h3>
            <input type="text" required name="fname" placeholder="Enter your first name" class="box">
            <input type="text" required name="lname" placeholder="Enter your last name" class="box">
            <p>Enter your Date of Birth:</p>
            <input type="date" required name="dob" placeholder="Enter your date of birth" class="box">
            <input type="text" required name="address" placeholder="Enter your current address" class="box">
            <input type="text" required name="phone" placeholder="Enter your phone number" class="box">
            <input type="email" required name="email" placeholder="Enter your email" class="box">
            <input type="text" required name="accident" placeholder="have you been involved in any accident before?" class="box">
            <input type="text" required name="vin" placeholder="VIN of vehicle" class="box">
            <input type="text" required name="driver" placeholder="Name of the driver" class="box">
            <input type="text" required name="car" placeholder="car name & model" class="box">
            <p>Insurance coverage expiration date?</p>
            <input type="date" required name="coverage_expiration" placeholder="Enter your date of birth" class="box">
            <input type="text" required name="to_be_paid" placeholder="total payments coverage" class="box">
            <input type="submit" name="submit" value="apply" class="btn">
        </form>
    </div>
    
    <!-- insurance form ends -->

        
</body>
</html>