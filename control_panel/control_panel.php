<?php

@include '../config.php';

session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:index.php');
}
?>

<!-- HTML code to display the battery data -->
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel!</title>

    <!-- swiper cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- fontawesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="control_panel.css">
</head>
<body>

<!-- header section starts -->
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="../admin_page.php" class="logo"><span>TeliGari</span>BaZaar</a>

    <nav class="navbar">
        <a href="../admin_page.php#home">home</a>
        <a href="../admin_page.php#vehicles">vehicle</a>
        <a href="../admin_page.php#services">services</a>
        <a href="../admin_page.php#features">features</a>
        <a href="../admin_page.php#reviews">reviews</a>
        <a href="../admin_page.php#contact">contact</a>
    </nav>
    <div id="profile-btn" class="profile-btn-container">
        <div class="btn-wrapper">
        <button class="btn">
            <span>
                <?php
                    echo $_SESSION['admin_name'];
                ?>
            </span>
        </button>
        <div class="dropdown">
            <ul>
                <li>
                    <a href="#">
                    <svg class="svg-snoweb svg-theme-dark" height="20" preserveaspectratio="xMidYMid meet" viewbox="0 0 100 100" width="20" x="0" xmlns="http://www.w3.org/2000/svg" y="0">
                    <path class="svg-fill-primary" d="M50,8.9h-.13c-5.55,.03-10.76,2.23-14.67,6.18-3.9,3.96-6.03,9.19-6,14.75,.03,5.55,2.23,10.76,6.18,14.67,3.92,3.87,9.11,6,14.62,6h.13c5.55-.03,10.76-2.23,14.67-6.18,3.87-3.93,6-9.12,6-14.63v-.12c-.07-11.4-9.4-20.67-20.8-20.67Zm8.4,29.09c-2.22,2.24-5.18,3.49-8.33,3.51-3.12,.01-6.12-1.19-8.36-3.41-2.24-2.21-3.49-5.17-3.51-8.32s1.19-6.12,3.41-8.36c2.21-2.24,5.17-3.49,8.39-3.51,3.24,0,6.18,1.32,8.31,3.44,2.14,2.12,3.47,5.06,3.49,8.29,.02,3.15-1.19,6.12-3.4,8.36Z">
                    </path>
                    <path class="svg-fill-primary" d="M61.8,29.63c.02,3.15-1.19,6.12-3.4,8.36-2.22,2.24-5.18,3.49-8.33,3.51-3.12,.01-6.12-1.19-8.36-3.41-2.24-2.21-3.49-5.17-3.51-8.32s1.19-6.12,3.41-8.36c2.21-2.24,5.17-3.49,8.39-3.51,3.24,0,6.18,1.32,8.31,3.44,2.14,2.12,3.47,5.06,3.49,8.29Z" isolation="isolate" opacity=".5">
                    </path>
                    <path class="svg-fill-primary" d="M50.02,53.6h-.04c-18.12,.06-32.92,14.86-32.98,32.98,0,1.2,.47,2.35,1.31,3.2,.85,.84,1.99,1.32,3.19,1.32h57c1.2,0,2.34-.48,3.19-1.32,.84-.85,1.31-2,1.31-3.2-.06-18.12-14.86-32.92-32.98-32.98Zm-23.58,28.5c2.16-11.05,11.91-19.45,23.56-19.5,11.65,.05,21.4,8.45,23.56,19.5H26.44Z">
                    </path>
                    <path class="svg-fill-primary" d="M73.56,82.1H26.44c2.16-11.05,11.91-19.45,23.56-19.5,11.65,.05,21.4,8.45,23.56,19.5Z" isolation="isolate" opacity=".5">
                    </path>
                    </svg>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                    <svg class="svg-snoweb svg-theme-dark" height="20" preserveaspectratio="xMidYMid meet" viewbox="0 0 100 100" width="20" x="0" xmlns="http://www.w3.org/2000/svg" y="0">
                    <path class="svg-fill-primary" d="M78.38,40.12c-.21-.05-.41-.13-.59-.24-1.04-.63-1.38-1.98-.79-2.97,2.04-3.29,2.04-7.37,0-10.65-1.42-2.3-3.65-3.9-6.28-4.51-2.63-.62-5.34-.17-7.58,1.22-.18,.11-.38,.19-.59,.25-.57,.14-1.16,.05-1.67-.25-.5-.3-.86-.78-1.01-1.38-.93-3.57-3.73-6.37-7.3-7.3-5.44-1.41-11.02,1.86-12.44,7.3,0,.01-.01,.02-.01,.03-.05,.21-.13,.41-.24,.59-.31,.51-.79,.86-1.36,1.01-.57,.14-1.16,.05-1.61-.22-3.29-2.04-7.37-2.04-10.66,0-4.73,2.94-6.19,9.18-3.28,13.86,.11,.18,.19,.38,.25,.59,.29,1.18-.42,2.37-1.63,2.68-3.57,.93-6.37,3.73-7.3,7.3-.69,2.64-.3,5.38,1.08,7.73,1.37,2.35,3.59,4.02,6.25,4.72,.21,.05,.41,.13,.59,.24,.51,.31,.86,.79,1.01,1.36,.14,.57,.05,1.16-.22,1.61-2.04,3.29-2.04,7.37,0,10.66,2.94,4.73,9.18,6.18,13.85,3.28,.19-.11,.39-.19,.6-.25,.57-.14,1.16-.05,1.67,.25,.5,.3,.86,.78,1.01,1.38,.93,3.57,3.73,6.37,7.3,7.3,.86,.22,1.72,.33,2.57,.33,4.53,0,8.68-3.05,9.88-7.66,.05-.21,.13-.41,.24-.59,.63-1.04,1.98-1.38,2.97-.79,3.29,2.04,7.37,2.04,10.66,0,2.29-1.42,3.89-3.66,4.5-6.28,.62-2.63,.17-5.34-1.22-7.57-.11-.19-.19-.39-.25-.6-.14-.57-.05-1.16,.25-1.67,.3-.5,.78-.86,1.38-1.01,3.57-.93,6.37-3.73,7.3-7.3,1.41-5.44-1.86-11.02-7.33-12.45Zm-.41,10.43c-.2,.78-.81,1.38-1.55,1.57-2.64,.67-4.86,2.32-6.26,4.66-1.4,2.34-1.8,5.09-1.13,7.73,.24,.96,.63,1.89,1.17,2.8,.3,.48,.39,1.04,.26,1.59-.13,.54-.46,1.01-.93,1.3-.69,.42-1.54,.42-2.27-.03-4.83-2.89-11.1-1.32-14,3.5-.51,.86-.89,1.78-1.13,2.72-.31,1.18-1.51,1.89-2.68,1.58-.77-.2-1.38-.81-1.57-1.55-.67-2.64-2.32-4.86-4.66-6.26-1.6-.96-3.4-1.45-5.21-1.45-.84,0-1.68,.11-2.52,.32-.97,.24-1.89,.63-2.8,1.17-.98,.61-2.28,.31-2.89-.67-.43-.69-.43-1.54,.03-2.27,1.4-2.34,1.81-5.08,1.15-7.72-.66-2.65-2.31-4.87-4.65-6.28-.86-.51-1.78-.89-2.72-1.13-.57-.15-1.05-.51-1.35-1.02-.29-.5-.38-1.1-.23-1.66,.2-.78,.81-1.38,1.55-1.57,5.45-1.38,8.77-6.93,7.39-12.39-.24-.97-.63-1.89-1.17-2.8-.61-.98-.31-2.28,.67-2.89,.69-.43,1.54-.42,2.27,.03,2.34,1.4,5.08,1.81,7.72,1.15,2.65-.66,4.87-2.31,6.28-4.65,.51-.85,.89-1.77,1.13-2.73,.15-.57,.51-1.04,1.02-1.34,.5-.29,1.1-.38,1.66-.23,.78,.2,1.38,.81,1.57,1.55,.67,2.64,2.32,4.86,4.66,6.26,2.34,1.4,5.09,1.8,7.73,1.13,.96-.24,1.89-.63,2.8-1.17,.48-.3,1.04-.39,1.59-.26,.54,.13,1.01,.46,1.3,.93,.43,.69,.43,1.54-.03,2.27-2.89,4.83-1.32,11.1,3.5,14,.86,.51,1.79,.89,2.72,1.13,1.18,.31,1.88,1.51,1.58,2.68Z">
                    </path>
                    <path class="svg-fill-primary" d="M76.39,47.87c-.93-.24-1.86-.62-2.72-1.13-4.82-2.9-6.39-9.17-3.5-14,.46-.73,.46-1.58,.03-2.27-.29-.47-.76-.8-1.3-.93-.55-.13-1.11-.04-1.59,.26-.91,.54-1.84,.93-2.8,1.17-2.64,.67-5.39,.27-7.73-1.13-2.34-1.4-3.99-3.62-4.66-6.26-.19-.74-.79-1.35-1.57-1.55-.56-.15-1.16-.06-1.66,.23-.51,.3-.87,.77-1.02,1.34-.24,.96-.62,1.88-1.13,2.73-1.41,2.34-3.63,3.99-6.28,4.65-2.64,.66-5.38,.25-7.72-1.15-.73-.45-1.58-.46-2.27-.03-.98,.61-1.28,1.91-.67,2.89,.54,.91,.93,1.83,1.17,2.8,1.38,5.46-1.94,11.01-7.39,12.39-.74,.19-1.35,.79-1.55,1.57-.15,.56-.06,1.16,.23,1.66,.3,.51,.78,.87,1.35,1.02,.94,.24,1.86,.62,2.72,1.13,2.34,1.41,3.99,3.63,4.65,6.28,.66,2.64,.25,5.38-1.15,7.72-.46,.73-.46,1.58-.03,2.27,.61,.98,1.91,1.28,2.89,.67,.91-.54,1.83-.93,2.8-1.17,.84-.21,1.68-.32,2.52-.32,1.81,0,3.61,.49,5.21,1.45,2.34,1.4,3.99,3.62,4.66,6.26,.19,.74,.8,1.35,1.57,1.55,1.17,.31,2.37-.4,2.68-1.58,.24-.94,.62-1.86,1.13-2.72,2.9-4.82,9.17-6.39,14-3.5,.73,.45,1.58,.45,2.27,.03,.47-.29,.8-.76,.93-1.3,.13-.55,.04-1.11-.26-1.59-.54-.91-.93-1.84-1.17-2.8-.67-2.64-.27-5.39,1.13-7.73,1.4-2.34,3.62-3.99,6.26-4.66,.74-.19,1.35-.79,1.55-1.57,.3-1.17-.4-2.37-1.58-2.68Zm-26.39,16.83c-8.11,0-14.7-6.59-14.7-14.7s6.59-14.7,14.7-14.7,14.7,6.59,14.7,14.7-6.59,14.7-14.7,14.7Z" opacity=".5">
                    </path>
                    <path class="svg-fill-primary" d="M50,35.3c-8.11,0-14.7,6.59-14.7,14.7s6.59,14.7,14.7,14.7,14.7-6.59,14.7-14.7-6.59-14.7-14.7-14.7Zm0,21.4c-3.69,0-6.7-3.01-6.7-6.7s3.01-6.7,6.7-6.7,6.7,3.01,6.7,6.7-3.01,6.7-6.7,6.7Z">
                    </path>
                    </svg>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="../logout.php">
                    <svg class="svg-snoweb svg-theme-dark" height="20" preserveaspectratio="xMidYMid meet" viewbox="0 0 100 100" width="20" x="0" xmlns="http://www.w3.org/2000/svg" y="0">
                    <path class="svg-fill-primary" d="M42.9,82.5h-14.3c-8.105,0-14.7-6.595-14.7-14.7V32.2c0-8.106,6.595-14.7,14.7-14.7h14.3c8.105,0,14.7,6.594,14.7,14.7v3.5c0,2.209-1.791,4-4,4s-4-1.791-4-4v-3.5c0-3.694-3.005-6.7-6.7-6.7h-14.3c-3.694,0-6.7,3.006-6.7,6.7v35.6c0,3.694,3.006,6.7,6.7,6.7h14.3c3.694,0,6.7-3.006,6.7-6.7v-3.5c0-2.209,1.791-4,4-4s4,1.791,4,4v3.5c0,8.105-6.595,14.7-14.7,14.7Z" opacity=".5">
                    </path>
                    <path class="svg-fill-primary" d="M67.8,68.3c-1.023,0-2.048-.391-2.828-1.172-1.562-1.562-1.562-4.095,0-5.656l7.471-7.472H32.2c-2.209,0-4-1.791-4-4s1.791-4,4-4h40.242l-7.471-7.471c-1.562-1.562-1.562-4.095,0-5.657,1.561-1.562,4.096-1.562,5.656,0l14.295,14.295c.016,.015,.03,.03,.045,.045l.003,.003c.36,.371,.635,.795,.822,1.247,.197,.473,.307,.993,.307,1.538s-.109,1.064-.307,1.538c-.188,.451-.462,.875-.822,1.247h0l-.002,.003c-.015,.015-.029,.03-.045,.045l-14.295,14.295c-.78,.781-1.805,1.172-2.828,1.172Z">
                    </path>
                    </svg>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </div>
</header>
    <!-- header section ends  -->

    
    <h1>Control Panel!</h1>
    <div class="add-container">
        <div class="options">
            <a href="add_cars.php">
            <div class="btn">
                <h2>+ Add CARS</h2>
            </div>
            </a>
            <a href="add_car_parts.php">
            <div class="btn">
                <h2>+ Add CAR Parts</h2>
            </div>
            </a>
            <a href="add_fuels.php">
            <div class="btn">
                <h2>+ Add Fuels</h2>
            </div>
            </a>
            <a href="add_batteries.php">
            <div class="btn">
                <h2>+ Add Batteries</h2>
            </div>
            </a>
            <a href="add_courses.php">
            <div class="btn">
                <h2>+ Add Courses</h2>
            </div>
            </a>
            <a href="add_drivers.php">
            <div class="btn">
                <h2>+ Add Drivers</h2>
            </div>
            </a>
            <a href="add_faq.php">
            <div class="btn">
                <h2>+ Add FAQ</h2>
            </div>
            </a>
            <a href="../registration.php">
            <div class="btn">
                <h2>+ Add USER</h2>
            </div>
            </a>
        </div>
    </div>

    <h1>Show Database Data</h1>
    <div class="show-container">
        <div class="options">
            <a href="appointments.php">
                <div class="btn">
                    <h2>Appointments</h2>
                </div>
            </a>
            <a href="insurance.php">
                <div class="btn">
                    <h2>Insurance form</h2>
                </div>
            </a>
            <a href="Subscribers.php">
                <div class="btn">
                    <h2>Newsletter subscribers</h2>
                </div>
            </a>
            <a href="All_users.php">
                <div class="btn">
                    <h2>All users</h2>
                </div>
            </a>
        </div>
    </div>
    

    <!-- footer section starts -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Our branches</h3>
                <a href="#"><i class="fas fa-map-marker-alt"></i> India  </a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> Bangladesh </a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> United States </a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> United Kingdom </a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> Canada </a>
                <a href="#"><i class="fas fa-map-marker-alt"></i> Australia </a>
            </div>
            <div class="box">
                <h3>Quick links</h3>
                <a href="#home"><i class="fas fa-arrow-right"></i> home </a>
                <a href="#services"><i class="fas fa-arrow-right"></i> services </a>
                <a href="#features"><i class="fas fa-arrow-right"></i> featured </a>
                <a href="#reviews"><i class="fas fa-arrow-right"></i> reviews </a>
                <a href="#vehicles"><i class="fas fa-arrow-right"></i> vehicles </a>
                <a href="#contact"><i class="fas fa-arrow-right"></i> contact </a>
            </div>
            <div class="box">
                <h3>Our Contacts</h3>
                <a href="#"><i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"><i class="fas fa-phone"></i> +880-456-7890 </a>
                <a href="#"><i class="fas fa-envelope"></i> teligaribazaar@gmail.com </a>
                <a href="https://goo.gl/maps/TYBkx1Zyn6mCJZJL7"><i class="fas fa-map-marker-alt"></i> Teligati, Khulna</a>
            </div>
            <div class="box">
                <h3>Our Socials</h3>
                <a href="https://www.facebook.com/Mar4KoV"><i class="fab fa-facebook-f"></i> facebook </a>
                <a href="https://twitter.com/_su_mit_77"><i class="fab fa-twitter"></i> twitter </a>
                <a href="https://www.instagram.com/su._.mit_____/"><i class="fab fa-instagram"></i> instagram </a>
                <a href="https://www.linkedin.com/in/sumitdas77/"><i class="fab fa-linkedin"></i> linkedin </a>
                <a href="https://www.pinterest.com/sumitsd123471/"><i class="fab fa-pinterest"></i> pinterest </a>
            </div>
        </div>

        <div class="credit">Created by Sumit Das | all rights reserved!</div>

    </section>

    <!-- footer section ends -->

    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- custom js link  -->
    <script src="after_login.js"></script>
</body>
</html>
