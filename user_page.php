<?php

    @include 'config.php';

    if (!isset($_COOKIE['visits'])) $_COOKIE['visits'] = 0;
    $visits = $_COOKIE['visits'] + 1;
    setcookie('visits',$visits,time()+3600*24*365);

    session_start();
    if(!isset($_SESSION['user_name'])){
        $username = $_SESSION['user_name'];
        $email = $_SESSION['email'];

        setcookie('username', $username, time()+3600, '/');
        setcookie('email', $email, time()+3600, '/');
        
        if (isset($_COOKIE['username'])) {
            $username = $_COOKIE['username'];
            echo "Username: $username<br>";
        } else {
            echo "Username cookie is not set<br>";
        }
        if (isset($_COOKIE['email'])) {
            $email = $_COOKIE['email'];
            echo "Email: $email<br>";
        } else {
            echo "Email cookie is not set<br>";
        }
        header('location:index.php');
    }
    
    if(isset($_SESSION['user_name'])){
        if((time() - $_SESSION['last_time']) > 600){
            header('location:logout.php');
        }else{
            $_SESSION['last_time'] = time();
        }
    }else{
        header('location:login_form.php');
    }


    //newsletter update codes
    if(isset($_POST['submit'])){

        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $insert = "INSERT INTO newsletter(email) VALUES('$email')";
        mysqli_query($conn, $insert);
        header('location:user_page.php');
    };

    //appointments codes
    if(isset($_POST['submit'])){

        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $number = mysqli_real_escape_string($conn, $_POST['number']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        $insert = "INSERT INTO appointments(name, email, number, message) VALUES('$name','$email','$number','$message')";
        mysqli_query($conn, $insert);
        header('location:user_page.php');
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeliGari-BaZaar</title>

    <!-- swiper cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- fontawesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- header section starts -->
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>TeliGari</span>BaZaar</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#vehicles">vehicle</a>
        <a href="#services">services</a>
        <a href="#features">features</a>
        <a href="#reviews">reviews</a>
        <a href="#contact">contact</a>
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
                    <a href="cart.php">
                    <svg class="svg-snoweb svg-theme-dark" height="20" preserveaspectratio="xMidYMid meet" viewbox="0 0 100 100" width="20" x="0" xmlns="http://www.w3.org/2000/svg" y="0">
                    <path class="svg-fill-primary" d="M67.6,57.5c1.51,0,2.9-.85,3.57-2.21l14.11-28.1c.62-1.24,.55-2.71-.18-3.89-.72-1.18-2.01-1.9-3.4-1.9H30.09l-.77-3.87c-.37-1.88-2.01-3.23-3.92-3.23h-7.1c-2.21,0-4,1.79-4,4s1.79,4,4,4h3.81l.75,3.8c.01,.06,.02,.11,.03,.16l5.17,25.92-6.56,6.56c-2.95,2.9-3,7.65-.11,10.61,.29,.3,.61,.57,.94,.81-.6,1.36-.93,2.86-.93,4.44,0,6.07,4.93,11,11,11s11-4.93,11-11c0-1.04-.15-2.05-.42-3h14.04c-.28,.95-.42,1.96-.42,3,0,6.07,4.93,11,11,11s11-4.93,11-11-4.93-11-11-11H27.96l6.1-6.1h33.54Zm0,14.1c1.65,0,3,1.35,3,3s-1.35,3-3,3-3-1.35-3-3,1.35-3,3-3Zm-35.2,0c1.65,0,3,1.35,3,3s-1.35,3-3,3-3-1.35-3-3,1.35-3,3-3ZM75.22,29.4l-10.09,20.1h-29.45l-4-20.1h43.54Z">
                    </path>
                    <polygon class="svg-fill-primary" opacity=".5" points="75.22 29.4 65.13 49.5 35.68 49.5 31.68 29.4 75.22 29.4">
                    </polygon>
                    </svg>
                    <span>Cart</span>
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

    
    <!-- home section starts -->
    <section class="home" id="home">
        <h1 class="home-parallax" data-speed="2">find your car</h1>
        <img class="home-parallax" data-speed="5" src="images/home-img.png" alt="">
        <a href="explore_cars_user.php" class="btn home-parallax" data-speed="7">explore cars</a>
    </section>
    <!-- home section ends -->

    <!-- icons section starts -->
    <section class="icons-container">
        <div class="icon">
            <i class="fas fa-home"></i>
            <div class="content">
                <h3>150+</h3>
                <p>branches</p>
            </div>
        </div>
        <div class="icon">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>4770+</h3>
                <p>cars sold</p>
            </div>
        </div>
        <div class="icon">
            <i class="fas fa-users"></i>
            <div class="content">
                <h3>590+</h3>
                <p>happy clients</p>
            </div>
        </div>
        <div class="icon">
            <i class="fas fa-car"></i>
            <div class="content">
                <h3>890+</h3>
                <p>new cars</p>
            </div>
        </div>
    </section>
    <!-- icons section ends -->

    <!-- vehicle section starts -->
    
    <section class="vehicles" id="vehicles">
        <h1 class="heading">popular <span>vehicles</span></h1>
        <div class="swiper vehicles-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/car-01.png" alt="">
                    <div class="content">
                        <h3>Nissan GT-R 2023</h3>
                        <div class="price"> <span>price: </span> $113,540/-</div>
                        <p>
                            <b>new</b>
                            <span class="fas fa-circle"></span> 2023
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> Gasoline <br>
                            <span class="fas fa-circle"></span> 330kmph
                        </p>
                        <a href="explore_cars_user.php" class="btn">check out</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-02.png" alt="">
                    <div class="content">
                        <h3>Ferrari LaFerrari 2021</h3>
                        <div class="price"> <span>price: </span> $4,499,998/-</div>
                        <p>
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> Gasoline
                            <span class="fas fa-circle"></span> 352kmph
                        </p>
                        <a href="explore_cars_user.php" class="btn">check out</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-03.png" alt="">
                    <div class="content">
                        <h3>Toyota Innova Crysta VX 2.4 8 STR 2023</h3>
                        <div class="price"> <span>price: </span> $29,150/-</div>
                        <p>
                            <b>new</b>
                            <span class="fas fa-circle"></span> 2023
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> Diesel <br>
                            <span class="fas fa-circle"></span> 128.84kmph
                        </p>
                        <a href="explore_cars_user.php" class="btn">check out</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-04.png" alt="">
                    <div class="content">
                        <h3>Toyota Hilux High 2022</h3>
                        <div class="price"> <span>price: </span> $46,030/-</div>
                        <p>
                            <b>new</b>
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> Manual
                            <span class="fas fa-circle"></span> Diesel
                            <span class="fas fa-circle"></span> 185kmph
                        </p>
                        <a href="explore_cars_user.php" class="btn">check out</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-05.png" alt="">
                    <div class="content">
                        <h3>Chevrolet Camaro 2SS 2022</h3>
                        <div class="price"> <span>price: </span> $42,500/-</div>
                        <p>
                            <b>new</b>
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> Manual
                            <span class="fas fa-circle"></span> Gasoline
                            <span class="fas fa-circle"></span> 165mph
                        </p>
                        <a href="explore_cars_user.php" class="btn">check out</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-06.png" alt="">
                    <div class="content">
                        <h3>Toyota Corolla 2021</h3>
                        <div class="price"> <span>price: </span> $21,710/-</div>
                        <p>
                            <span class="fas fa-circle"></span> 2021
                            <span class="fas fa-circle"></span> manual
                            <span class="fas fa-circle"></span> Diesel
                            <span class="fas fa-circle"></span> 117mph
                        </p>
                        <a href="explore_cars_user.php" class="btn">check out</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-07.png" alt="">
                    <div class="content">
                        <h3>Jeep Compass 2022</h3>
                        <div class="price"> <span>price: </span> $26,020/-</div>
                        <p>
                            <b>new</b>
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> Manual
                            <span class="fas fa-circle"></span> gasoline<br>
                            <span class="fas fa-circle"></span> 160.21kmph
                        </p>
                        <a href="explore_cars_user.php" class="btn">check out</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-08.png" alt="">
                    <div class="content">
                        <h3>Mercedes Benz E Class Expression E 200 2022</h3>
                        <div class="price"> <span>price: </span> $85,620/-</div>
                        <p>
                            <b>new</b>
                            <span class="fas fa-circle"></span> 2022
                            <span class="fas fa-circle"></span> automatic
                            <span class="fas fa-circle"></span> Gasoline<br>
                            <span class="fas fa-circle"></span> 250kmph
                        </p>
                        <a href="explore_cars_user.php" class="btn">check out</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    
    <!-- vehicle section ends -->

    <!-- services section starts -->

    <section class="services" id="services">
        <h1 class="heading"> our <span>services</span> </h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-car"></i>
                <h3>car selling</h3>
                <p>Find Your Perfect Ride, ride Your Car with Pride!</p>
                <a href="explore_cars_user.php" class="btn">check out</a>
            </div>
            <div class="box">
                <i class="fas fa-tools"></i>
                <h3>parts seling</h3>
                <p>Nothing to worry, Teligari-BaZaar is here with everything!</p>
                <a href="car_parts_user.php" class="btn">check out</a>
            </div>
            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>car insurance</h3>
                <p>Protecting What Matters Most, Today and Tomorrow.</p>
                <a href="insurance_form_user.php" class="btn">check out</a>
            </div>
            <div class="box">
                <i class="fas fa-battery"></i>
                <h3>battery replacement</h3>
                <p>Battery? No worry!</p>
                <a href="battery_user.php" class="btn">check out</a>
            </div>
            <div class="box">
                <i class="fas fa-gas-pump"></i>
                <h3>oil change</h3>
                <p>Powering Progress, Fuelling your ride!.</p>
                <a href="fuels_user.php" class="btn">check out</a>
            </div>
            <div class="box">
                <i class="fa-regular fa-user"></i>
                <h3>Hire drivers</h3>
                <p>Connecting Drivers to Opportunities, Guiding the Road to Success.</p>
                <a href="drivers_user.php" class="btn">check out</a>
            </div>
            <div class="box">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Driving lessons</h3>
                <p>Driving Skills Unleashed, Confidence on the Road Achieved!</p>
                <a href="courses_user.php" class="btn">check out</a>
            </div>
            <div class="box">
                <i class="fas fa-headset"></i>
                <h3>24/7 suport</h3>
                <p>Always Here for You, Anytime, Anywhere.</p>
                <a href="#contact" class="btn">check out</a>
            </div>
        </div>
    </section>

    <!-- services section ends -->

    <!-- features section starts -->

    <section class="featured" id="features">
        <h1 class="heading"> <span>featured</span> cars </h1>
        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/car-09.png" alt="">
                    <h3>Tesla Model S 2023</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$94,990/-</div>
                    <a href="explore_cars_user.php" class="btn">check out</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-10.png" alt="">
                    <h3>BMW 7 Series 2023</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$93,290/-</div>
                    <a href="explore_cars_user.php" class="btn">check out</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-11.png" alt="">
                    <h3>Toyota Hilux High 2021</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$42,030/-</div>
                    <a href="explore_cars_user.php" class="btn">check out</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-12.png" alt="">
                    <h3>Lamborghini Autentica</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$500,000/-</div>
                    <a href="explore_cars_user.php" class="btn">check out</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-13.png" alt="">
                    <h3>Lamborghini Aventador Ultimate 2023</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$498,250/-</div>
                    <a href="explore_cars_user.php" class="btn">check out</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-14.png" alt="">
                    <h3>Rolls Royce Spectre 2023</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$400,000/-</div>
                    <a href="explore_cars_user.php" class="btn">check out</a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <div class="swiper featured-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/car-15.png" alt="">
                    <h3>Toyota Prado TX 3.0D 2020</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$142,100/-</div>
                    <a href="explore_cars_user.php" class="btn">check out</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-16.png" alt="">
                    <h3>Porsche Panamera E-Hybrid Sport Turismo 2023</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$113,000/-</div>
                    <a href="explore_cars_user.php" class="btn">check out</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-17.png" alt="">
                    <h3>Audi A8 Hybrid 2022</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$98,900/-</div>
                    <a href="explore_cars_user.php" class="btn">check out</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-18.png" alt="">
                    <h3>Land Rover Range Rover Velar 2023</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$79,200/-</div>
                    <a href="explore_cars_user.php" class="btn">check out</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-19.png" alt="">
                    <h3>Jaguar I Pace EV320 2023</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$79,090/-</div>
                    <a href="explore_cars_user.php" class="btn">check out</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/car-20.png" alt="">
                    <h3>Hyundai Verna SX 1.5 CRDi 2023</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="price">$15,530/-</div>
                    <a href="explore_cars_user.php" class="btn">check out</a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- features section ends -->

    <!-- newsletter section starts -->

     <section class="newsletter">
        <div class="form-box">
            <h3>Subscribe for latest updates</h3>
        <p>Make sure to subscribe to get the latest catelogs, car news, pricing and many more!!!</p>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="enter your email" id="">
            <input type="submit" class="subscribe" name="submit" id="">
        </form>
        </div>
     </section>

    <!-- newsletter section ends -->

    <!-- reviews section starts -->

    <section class="reviews" id="reviews">
        <h1 class="heading">client's <span>review</span> </h1>
        <div class="swiper reviews-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/watson.jpg" alt="">
                    <div class="content">
                        <p>TeliGari-BaZaar was transparent and honest about the car's condition, highlighting both its strengths and any minor imperfections. This level of transparency and integrity instilled trust and confidence in my decision to purchase from him.</p>
                        <h3>Emma Watson</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/stone.jpg" alt="">
                    <div class="content">
                        <p>I highly recommend TeliGari-BaZaar to anyone in search of a reliable and trustworthy car buying experience. their professionalism, knowledge, and exceptional customer service truly set him apart. I am grateful for his assistance and would not hesitate to buy from him again in the future.</p>
                        <h3>Emma Stone</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/robbie.jpg" alt="">
                    <div class="content">
                        <p>The entire buying process was efficient and well-organized. TeliGari-BaZaar handled all the paperwork promptly and accurately, making the transaction seamless. They were accommodating and flexible with scheduling, ensuring that everything was convenient for me.</p>
                        <h3>Margot Robbie</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/tzuyu.jpg" alt="">
                    <div class="content">
                        <p>TeliGari-BaZaar offered the car at a fair and competitive price. I did my research beforehand and their pricing was in line with market value. There were no hidden fees or surprises during the negotiation and I felt that I got a good deal.</p>
                        <h3>Chao Tzuyu</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/tommy.jpg" alt="">
                    <div class="content">
                        <p>TeliGari-BaZaar was attentive, patient and attentive to my needs. They took the time to understand my preferences and requirements, offering valuable advice and guidance. They were always available to answer my questions promptly, making the buying process smooth and stress-free.</p>
                        <h3>Thomas Shelby</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/john_wick.jpg" alt="">
                    <div class="content">
                        <p>I had the pleasure of buying a car from TeliGari-BaZaar and I couldn't be happier with the experience. From start to finish, they were professional, knowledgeable, and went above and beyond to ensure my satisfaction.</p>
                        <h3>Jonathan Wick</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/eminem.jpg" alt="">
                    <div class="content">
                        <p>my experience with TeliGari-BaZaar was exceptional. They demonstrated professionalism, integrity and a genuine commitment to customer satisfaction. I highly recommend them to anyone in search of a reliable and trustworthy car seller.</p>
                        <h3>Marshall Bruce Mathers III</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- reviews section ends -->

    <!-- partners section starts -->

    <section class="partners" id="partners">
        <h1 class="heading">Our <span>partners</span></h1>
        <div class="box-container">
            <div class="img-1">
                <a href="https://www.audi.com/en.html" target="_blank"><img src="images/audi.png" alt=""></a>
                <a href="https://www.nissanusa.com/" target="_blank"><img src="images/nissan.png" alt=""></a>
                <a href="https://www.lamborghini.com/en-en" target="_blank"><img src="images/lamborghini.png" alt=""></a>
                <a href="https://www.mercedes-benz.com/en/" target="_blank"><img src="images/benz.png" alt=""></a>
                <a href="https://www.bmw.com/en/index.html" target="_blank"><img src="images/bmw.png" alt=""></a>
                <a href="https://www.chevrolet.com/" target="_blank"><img src="images/chevrolet.png" alt=""></a>
                <a href="https://www.ferrari.com/en-EN" target="_blank"><img src="images/ferrari.png" alt=""></a>
                <a href="https://www.hyundai.com/worldwide/en/" target="_blank"><img src="images/hyundai.png" alt=""></a>
            <!-- </div>
            <div class="img-2"> -->
                <a href="https://www.jaguar.com/index.html" target="_blank"><img src="images/jaguar.png" alt=""></a>
                <a href="https://www.jeep.com/" target="_blank"><img src="images/jeep.png" alt=""></a>
                <a href="https://www.tesla.com/" target="_blank"><img src="images/tesla.png" alt=""></a>
                <a href="https://www.rolls-roycemotorcars.com/en_GB/home.html" target="_blank"><img src="images/rollsroyce.png" alt=""></a>
                <a href="https://www.porsche.com/" target="_blank"><img src="images/porsche.png" alt=""></a>
                <a href="https://www.landrover.com/market-selector/index.html" target="_blank"><img src="images/landrover.png" alt=""></a>
                <a href="https://www.toyota.com/" target="_blank"><img src="images/toyota.png" alt=""></a>
                <a href="https://www.ford.com/" target="_blank"><img src="images/ford.png" alt=""></a>
            </div>
        </div>
        </div>

    </section>

    <!-- partners section ends -->

    <!-- contact section starts -->

    <section class="contact" id="contact">
        <h1 class="heading"> <span>contact</span> us </h1>
        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14701.594774714187!2d89.4861638008427!3d22.8986608349872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff9bdc23b963af%3A0x3de96c3c04d4890!2sTeligati%2C%20Khulna!5e0!3m2!1sen!2sbd!4v1685313488394!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <form action="" method="POST">
            <h3>get in touch</h3>
                <input type="text" name="name" placeholder="name" class="box">
                <input type="email" name="email" placeholder="email" class="box">
                <input type="phone" name="number" placeholder="number" class="box">
                <textarea placeholder="message" name="message" class="box" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" name="submit" value="send message" class="btn">
        </form>
    </div>
    </section>

    <!-- contact section ends -->

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