<?php

    @include 'config.php';

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
    <div id="login-btn">
        <button class="btn">
            <a href="login_form.php">login</a>
        </button>
        <i class="far fa-user"></i>
    </div>
</header>
    <!-- header section ends  -->

    <!-- home section starts -->
    <section class="home" id="home">
        <h1 class="home-parallax" data-speed="2">find your car</h1>
        <img class="home-parallax" data-speed="5" src="images/home-img.png" alt="">
        <a href="login_form.php" class="btn home-parallax" data-speed="7">explore cars</a>
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
                        <a href="login_form.php" class="btn">check out</a>
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
                        <a href="login_form.php" class="btn">check out</a>
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
                        <a href="login_form.php" class="btn">check out</a>
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
                        <a href="login_form.php" class="btn">check out</a>
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
                        <a href="login_form.php" class="btn">check out</a>
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
                        <a href="login_form.php" class="btn">check out</a>
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
                        <a href="login_form.php" class="btn">check out</a>
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
                        <a href="login_form.php" class="btn">check out</a>
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
                <a href="login_form.php" class="btn">read more</a>
            </div>
            <div class="box">
                <i class="fas fa-tools"></i>
                <h3>parts seling</h3>
                <p>Nothing to worry, Teligari-BaZaar is here with everything!</p>
                <a href="login_form.php" class="btn">read more</a>
            </div>
            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>car insurance</h3>
                <p>Protecting What Matters Most, Today and Tomorrow.</p>
                <a href="login_form.php" class="btn">read more</a>
            </div>
            <div class="box">
                <i class="fas fa-battery"></i>
                <h3>battery replacement</h3>
                <p>Battery? No worry!</p>
                <a href="login_form.php" class="btn">read more</a>
            </div>
            <div class="box">
                <i class="fas fa-gas-pump"></i>
                <h3>oil change</h3>
                <p>Powering Progress, Fuelling your ride!.</p>
                <a href="login_form.php" class="btn">read more</a>
            </div>
            <div class="box">
                <i class="fa-regular fa-user"></i>
                <h3>Hire drivers</h3>
                <p>Connecting Drivers to Opportunities, Guiding the Road to Success.</p>
                <a href="login_form.php" class="btn">read more</a>
            </div>
            <div class="box">
                <i class="fa-solid fa-graduation-cap"></i>
                <h3>Driving lessons</h3>
                <p>Driving Skills Unleashed, Confidence on the Road Achieved!</p>
                <a href="login_form.php" class="btn">read more</a>
            </div>
            <div class="box">
                <i class="fas fa-headset"></i>
                <h3>24/7 suport</h3>
                <p>Always Here for You, Anytime, Anywhere.</p>
                <a href="login_form.php" class="btn">read more</a>
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
                    <a href="login_form.php" class="btn">check out</a>
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
                    <a href="login_form.php" class="btn">check out</a>
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
                    <a href="login_form.php" class="btn">check out</a>
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
                    <a href="login_form.php" class="btn">check out</a>
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
                    <a href="login_form.php" class="btn">check out</a>
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
                    <a href="login_form.php" class="btn">check out</a>
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
                    <a href="login_form.php" class="btn">check out</a>
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
                    <a href="login_form.php" class="btn">check out</a>
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
                    <a href="login_form.php" class="btn">check out</a>
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
                    <a href="login_form.php" class="btn">check out</a>
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
                    <a href="login_form.php" class="btn">check out</a>
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
                    <a href="login_form.php" class="btn">check out</a>
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
        <form action="">
            <input type="email" name="" placeholder="enter your email" id="">
            <input type="submit" class="subscribe" name="" id="">
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
        <form action="">
            <h3>get in touch</h3>
                <input type="text" placeholder="name" class="box">
                <input type="email" placeholder="email" class="box">
                <input type="number" placeholder="number" class="box">
                <textarea placeholder="message" class="box" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
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
    <script src="script.js"></script>
</body>
</html>