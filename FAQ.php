<?php

@include 'config.php';

// Retrieve faq data from the database
$sql = "SELECT * FROM faq";
$result = $conn->query($sql);

// Store the battery data in an array
$faq = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $faq[] = $row;
    }
}

$conn->close();

session_start();
if(!isset($_SESSION['user_name'])){
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
    <title>FAQ</title>

    <!-- swiper cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- fontawesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="teligari_controller.css">
</head>
<body>

<!-- header section starts -->
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="user_page.php" class="logo"><span>TeliGari</span>BaZaar</a>

    <nav class="navbar">
        <a href="user_page.php#home">home</a>
        <a href="user_page.php#vehicles">vehicle</a>
        <a href="user_page.php#services">services</a>
        <a href="user_page.php#features">features</a>
        <a href="user_page.php#contact">contact</a>
        <a href="user_page.php#reviews">reviews</a>
    </nav>
    <div id="profile-btn" class="profile-btn-container">
        <div class="btn-wrapper">
        <button class="btn">
            <span>
                <?php
                    echo $_SESSION['user_name'];
                ?>
            </span>
        </button>
        <div class="dropdown">
            <ul>
                <li>
                    <a href="profile_user.php">
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
                    <a href="">
                    <svg class="svg-snoweb svg-theme-dark" height="20" preserveaspectratio="xMidYMid meet" viewbox="0 0 100 100" width="20" x="0" xmlns="http://www.w3.org/2000/svg" y="0">
                    <path class="svg-fill-primary" d="M71.1,16.4h-5.07c-.62-1.82-1.65-3.49-3.07-4.87-2.37-2.32-5.5-3.55-8.76-3.53h-8.5c-5.44,0-10.06,3.52-11.73,8.4h-5.07c-6.89,0-12.5,5.61-12.5,12.5v50.7c0,6.84,5.56,12.4,12.4,12.4h42.4c6.77,0,12.32-5.46,12.4-12.3V28.9c0-6.89-5.61-12.5-12.5-12.5Zm-25.4-.4h8.6c1.16,0,2.25,.44,3.07,1.25,.84,.82,1.32,1.92,1.33,3.15,0,2.48-2.02,4.5-4.5,4.5h-8.4c-2.48,0-4.5-2.02-4.5-4.5,0-2.43,1.97-4.4,4.4-4.4Zm29.9,63.65c-.03,2.41-2,4.35-4.45,4.35H28.8c-2.43,0-4.4-1.97-4.4-4.4V28.9c0-2.48,2.02-4.5,4.5-4.5h5.07c1.67,4.93,6.34,8.5,11.83,8.5h8.4c5.49,0,10.16-3.57,11.83-8.5h5.07c2.48,0,4.5,2.02,4.5,4.5v50.75Z">
                    </path>
                    <path class="svg-fill-primary" d="M71.1,24.4h-5.07c-1.67,4.93-6.34,8.5-11.83,8.5h-8.4c-5.49,0-10.16-3.57-11.83-8.5h-5.07c-2.48,0-4.5,2.02-4.5,4.5v50.7c0,2.43,1.97,4.4,4.4,4.4h42.35c2.45,0,4.42-1.94,4.45-4.35V28.9c0-2.48-2.02-4.5-4.5-4.5Zm-5.57,28.43l-16.9,16.9c-.78,.78-1.81,1.17-2.83,1.17s-2.03-.38-2.81-1.15l-8.5-8.41c-1.57-1.55-1.59-4.08-.04-5.65,1.56-1.57,4.09-1.59,5.66-.03l5.67,5.6,14.09-14.09c1.56-1.56,4.1-1.56,5.66,0,1.56,1.56,1.56,4.1,0,5.66Z" opacity=".5">
                    </path>
                    </svg>
                        <span>Wishlist</span>
                    </a>
                </li>
                <li>
                    <a href="FAQ.php">
                    <svg class="svg-snoweb svg-theme-dark" height="20" preserveaspectratio="xMidYMid meet" viewbox="0 0 100 100" width="20" x="0" xmlns="http://www.w3.org/2000/svg" y="0">
                    <path class="svg-fill-primary" d="M75,15.7H25c-6.12,0-11.1,4.98-11.1,11.1v28.6c0,6.12,4.98,11.1,11.1,11.1h10.3v13.8c0,1.62,.97,3.08,2.47,3.7,.49,.2,1.01,.3,1.53,.3,1.04,0,2.06-.41,2.83-1.17l16.63-16.63h16.24c6.12,0,11.1-4.98,11.1-11.1V26.8c0-6.12-4.98-11.1-11.1-11.1Zm3.1,39.7c0,1.71-1.39,3.1-3.1,3.1h-17.9c-1.06,0-2.08,.42-2.83,1.17l-10.97,10.97v-8.14c0-2.21-1.79-4-4-4h-14.3c-1.71,0-3.1-1.39-3.1-3.1V26.8c0-1.71,1.39-3.1,3.1-3.1h50c1.71,0,3.1,1.39,3.1,3.1v28.6Z">
                    </path>
                    <path class="svg-fill-primary" d="M75,23.7H25c-1.71,0-3.1,1.39-3.1,3.1v28.6c0,1.71,1.39,3.1,3.1,3.1h14.3c2.21,0,4,1.79,4,4v8.14l10.97-10.97c.75-.75,1.77-1.17,2.83-1.17h17.9c1.71,0,3.1-1.39,3.1-3.1V26.8c0-1.71-1.39-3.1-3.1-3.1Zm-39.2,21.4c-2.21,0-4.05-1.79-4.05-4s1.74-4,3.95-4h.1c2.21,0,4,1.79,4,4s-1.79,4-4,4Zm17.03-1.17c-.75,.74-1.78,1.17-2.83,1.17s-2.08-.43-2.83-1.17c-.74-.74-1.17-1.78-1.17-2.83,0-.26,.03-.52,.08-.78s.13-.51,.23-.75,.22-.47,.36-.69c.15-.22,.32-.42,.5-.61,.75-.74,1.78-1.17,2.83-1.17s2.08,.43,2.83,1.17c.74,.75,1.17,1.78,1.17,2.83s-.43,2.08-1.17,2.83Zm15.39-2.05c-.05,.26-.13,.51-.23,.75-.1,.24-.22,.47-.36,.69-.15,.22-.32,.42-.5,.61-.75,.74-1.78,1.17-2.83,1.17s-2.09-.43-2.83-1.17c-.18-.19-.35-.39-.5-.61-.14-.22-.26-.45-.36-.69-.1-.24-.18-.49-.23-.75-.06-.26-.08-.52-.08-.78s.02-.52,.08-.78c.05-.26,.13-.51,.23-.75,.1-.24,.22-.47,.36-.69,.15-.22,.32-.42,.5-.61,.75-.74,1.78-1.17,2.83-1.17s2.08,.43,2.83,1.17c.18,.19,.35,.39,.5,.61,.14,.22,.26,.45,.36,.69,.1,.24,.18,.49,.23,.75,.05,.26,.08,.52,.08,.78s-.03,.52-.08,.78Z" opacity=".5">
                    </path>
                    </svg>
                    <span>FAQ</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
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

    
    <h1>Frequently asked Questions!</h1>
    
    <div class="faq-container">
    <?php foreach ($faq as $faq): ?>
        <div class="qs">
            <div class="content">
                <h3><?php echo $faq['qs']; ?></h3>
                <h4><?php echo $faq['ans']; ?></h4>
            </div>
        </div>
            <?php endforeach; ?>
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
