-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 02:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_project_3.1_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(32) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`name`, `email`, `number`, `message`) VALUES
('Sumit Das', 'sumit.sd123471@gmail.com', 1775919428, 'I\'d like to visit your showroom and do a test drive of a car. Is that possible?'),
('amit das', 'amit@gmail.com', 1700000000, 'I want to buy some car parts. Where is your physical shop?');

-- --------------------------------------------------------

--
-- Table structure for table `battery`
--

CREATE TABLE `battery` (
  `name` varchar(255) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `price` varchar(32) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `battery`
--

INSERT INTO `battery` (`name`, `capacity`, `price`, `details`, `image`) VALUES
('Energizer', '74 Amps. 12 Volts', '$260', 'Filled, charged and instantly ready to use, Maintenance-free', 'battery-01.png'),
('Bosch', '35 Amps. 28 Volts', '$75', 'Performance range with Silver alloy technology, Bosch S5 Batteries are powered with advanced silver alloy technology.', 'battery-02.png'),
('Bosch', '45 Amps. 12 Volts', '$80', 'Performance range with Silver alloy technology, Bosch S5 Batteries are powered with advanced silver alloy technology.', 'battery-03.png'),
('Platinum', '70 Amps. 12 Volts', '$175', 'A brand-new, unused, unopened and undamaged item in original retail packaging.', 'battery-04.png'),
('Super sm', '55 Amps. 12 Volts', '$120', 'Super small car batteries often utilize advanced technologies such as lithium-ion or lithium-polymer chemistry, which offer higher energy density and longer lifespan compared to traditional lead-acid batteries.', 'battery-05.png'),
('DieHard', '30 Amps. 12 Volts', '$60', 'Spill proff, sealed, valve regulated and vibration resistant.', 'battery-06.png'),
('Tudor', '74 Amps. 12 Volts', '$130', 'Tudor car batteries are trusted by car owners and mechanics for their durability, dependability, and ability to provide the necessary power to start the engine and operate the electrical systems of a vehicle.', 'battery-07.png'),
('Panasonic', '49 Amps. 12 Volts', '$95', 'With a focus on longevity and dependability, Panasonic car batteries are a trusted choice for automotive applications. ', 'battery-08.png'),
('Exide', '50 Amps. 12 Volts', '$105', 'Exide car batteries often use lead-acid technology, which has been widely used in the automotive industry for many years.', 'battery-09.png');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `feature1` varchar(255) NOT NULL,
  `feature2` varchar(255) NOT NULL,
  `feature3` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`make`, `model`, `year`, `price`, `feature1`, `feature2`, `feature3`, `image`) VALUES
('Nissan', 'GT-R', 2023, '$113,540', '3.8L Twin-Turbo V6', 'Mileage In City 14.2 L/100km', 'Body Type Coupe', 'car-01.png'),
('Ferrari', 'LaFerrari', 2021, '$4,499,998', '6.3 L F140 FE V12', 'Turbocharged', 'Body Type Coupe', 'car-02.png'),
('Toyota', 'Innova Crysta VX 2.4 8 STR', 2023, '$29,150', '2393 cc', 'Diesel Engine', 'Body Type MUV', 'car-03.png'),
('Toyota', 'Hilux High', 2022, '$46,030', '2.8 L Diesel Engine', 'Mileage In City 8 kmpl', 'Pickup Truck', 'car-04.png'),
('Chevrolet', 'Camaro 2SS', 2022, '$42,500', '6.2L V8', 'Mileage In City 16 MPG', 'Gasoline Engine', 'car-05.png'),
('Toyota', 'Corolla', 2021, '$21,710', '1800 CC', 'Mileage In City 31 MPG', 'Petrol Engine', 'car-06.png'),
('Jeep', 'Compass', 2022, '$26,020', '2.4-liter Inline-4 Gas', 'Turbocharged', 'Body Type SUV', 'car-07.png'),
('Mercedes Benz', 'E Class Expression E 200', 2022, '$85,620', '2.0 L in-line 6 cylinder', 'Turbocharged', 'Mileage In City 16 MPG', 'car-08.png'),
('Tesla', 'Model S', 2023, '$94,990', 'Electric', 'Mileage In City 124 MPGE', 'Body Type Hatchback', 'car-09.png'),
('BMW', '7 Series', 2023, '$93,290', '3.0L Turbo Inline-6 Gas', 'Mileage In City 25 MPG', 'Body Type Sedan', 'car-10.png'),
('Toyota', 'Hilux High', 2021, '$42,030', 'Displacement (Cc) 2.7 L', 'Mileage In City 7.8 kmpl', 'Diesel Engine', 'car-11.png'),
('Lamborghini', 'Autentica', 2022, '$500,000', '6.5L V12 Gas', 'Engine Power 769 hp @ 8400 rpm', 'Body Type Convertible', 'car-12.png'),
('Lamborghini', 'Aventador Ultimate', 2023, '$498,250', '6.5L V12 Gas', 'Engine Power 769 hp @ 8400 rpm', 'Body Type Coupe', 'car-13.png'),
('Rolls Royce', 'Spectre', 2023, '$400,000', 'Electric', 'Charger Yes 260 miles Range', 'Body Type Coupe', 'car-14.png'),
('Toyota', 'Prado TX 3.0D', 2020, '$142,100', 'Displacement(Cc) 2982 cc', 'Fuel Type Diesel', 'Body Type SUV', 'car-15.png'),
('Porsche', 'Panamera E-Hybrid Sport Turismo', 2023, '$113,000', '2.9L Twin-Turbo V6 Plug-in Hybrid', 'Mileage In City 123 mpg', 'Body Type Wagon', 'car-16.png'),
('Audi', 'A8 Hybrid', 2022, '$98,900', '3.0-liter Turbo V6 Plug-in Hybrid', 'Fuel Type Diesel', 'Body Type Sedan', 'car-17.png'),
('Land Rover', 'Range Rover Velar P400 HST', 2023, '$79,200', '3.0L Turbo Inline-6 Gas', 'Mileage In City 19 MPG', 'Body Type SUV', 'car-18.png'),
('Jaguar', 'I Pace EV320', 2023, '$79,090', 'AWD 236 kW (321 hp)', 'Fuel Type Diesel', 'Body Type SUV', 'car-19.png'),
('Hyundai', 'Verna SX 1.5 CRDi', 2023, '$15,530', '1.5 l U2 CRDi', 'Mileage In City 15 MPG', 'Fuel Type Diesel', 'car-20.png');

-- --------------------------------------------------------

--
-- Table structure for table `car_parts`
--

CREATE TABLE `car_parts` (
  `name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_parts`
--

INSERT INTO `car_parts` (`name`, `state`, `price`, `details`, `image`) VALUES
('Engine Components', 'Latest', '$2.5k - $29k', 'This includes items like engines, cylinder heads, pistons, crankshafts, camshafts, and valves.', 'parts-01.png'),
('Transmission and Drivetrain Parts', 'Pre-owned & Brand New', '$100 - $5k', 'Transmission assemblies, gearboxes, differentials, drive shafts, and axles are in demand.', 'parts-02.png'),
('Suspension and Steering Components', 'Pre-owned', '$2k - $35k', 'Shocks, struts, control arms, tie rods, ball joints, and steering racks are commonly sold parts.', 'parts-03.png'),
('Electrical and Ignition Parts', 'Refurbished', '$1k - $15k', 'Alternators, starters, spark plugs, ignition coils, wiring harnesses, and various sensors can be sold.', 'parts-04.png'),
('Body and Exterior Parts', 'Refurbished', '$1.2k - $25k', 'Bumpers, fenders, hoods, doors, mirrors, grilles, headlights, and taillights are frequently sought-after parts.', 'parts-05.png'),
('Exhaust System Parts', 'Latest', '$800 - $30k', 'Catalytic converters, mufflers, exhaust pipes, and headers have value due to their precious metal content.', 'parts-06.png'),
('Brake Components', 'Brand New', '$2.5k - $28k', 'Brake pads, rotors, calipers, brake lines, and master cylinders are commonly replaced parts.', 'parts-07.png'),
('Cooling System Parts', 'Refurbished', '$400 - $21k', 'Radiators, water pumps, thermostat housings, hoses, and fans can be sold.', 'parts-08.png'),
('Wheels and Tires', 'Pre-owned & Refurbished', '$250 - $17k', 'Rims and tires, especially if they are in good condition or part of a sought-after set, can fetch a good price.', 'parts-09.png');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course` varchar(32) NOT NULL,
  `requirement1` varchar(255) NOT NULL,
  `requirement2` varchar(255) NOT NULL,
  `requirement3` varchar(255) NOT NULL,
  `requirement4` varchar(255) NOT NULL,
  `fee` varchar(32) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course`, `requirement1`, `requirement2`, `requirement3`, `requirement4`, `fee`, `details`, `image`) VALUES
('Drive Wise', 'Age: 16 & up', 'Verified ID required', 'Parental Consent required', 'Medical conditions must be verified', '$150', 'This course is designed for individuals with little or no driving experience and covers fundamental driving skills and knowledge.', 'course-01.png'),
('Be a Pro', 'Age: 18 & up', 'Verified NID required', '', 'Medical conditions must be verified', '$350', 'An intermediate driving course, which builds upon the basics and focuses on advanced driving techniques and maneuvers.', 'course-02.png'),
('Become a Master', 'Age: 21 & up', 'Verified NID required', '', 'Medical conditions must be verified', '$650', 'Intensive driving courses, also known as accelerated or crash courses, provide a condensed learning experience over a shorter period.', 'course-03.png');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `qs` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`qs`, `ans`) VALUES
('What types of vehicles do you sell?', 'Answer: We offer a wide range of vehicles, including sedans, SUVs, trucks, and sports cars.'),
('Are your vehicles new or used?', 'Answer: We have both new and used vehicles available for purchase.'),
('Can I schedule a test drive?', 'Answer: Yes, we encourage you to schedule a test drive of any vehicle you are interested in. Please contact our sales team to arrange a convenient time.'),
('Do you offer financing options?', 'Answer: Yes, we provide financing options through partnerships with various financial institutions. Our finance team can assist you in finding the best option to suit your needs.'),
('What is the process for trading in my current vehicle?', 'Answer: We accept trade-ins. Our experienced appraisers will assess the value of your vehicle and provide you with an offer that can be applied toward the purchase of a new vehicle from us.'),
('Do you provide vehicle maintenance and service?', 'Answer: Yes, we have a dedicated service center staffed with certified technicians who can handle all your maintenance and service needs, including regular inspections, oil changes, tire rotations, and more.'),
('What warranty options are available for your vehicles?', 'Answer: Our new vehicles come with manufacturer warranties. Additionally, we offer extended warranty options for both new and used vehicles, providing you with added peace of mind.'),
('Are your vehicles inspected for quality and safety?', 'Answer: Yes, all our vehicles go through a rigorous inspection process to ensure they meet our high standards for quality and safety before being offered for sale.'),
('Can I customize or add accessories to the vehicles?', 'Answer: Yes, we offer a range of accessories and customization options to personalize your vehicle. Our team can assist you in selecting and installing the desired accessories.'),
('Do you offer extended warranty plans?', 'Answer: Yes, we offer extended warranty plans that provide additional coverage beyond the standard warranty. These plans can be tailored to suit your specific needs.');

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE `fuel` (
  `name` varchar(255) NOT NULL,
  `compatibility` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`name`, `compatibility`, `price`, `details`, `image`) VALUES
('Castrol', 'jet, diesel and racing engines', '$27.49/litre', '1.4X superior sludge protection compared to tough industry standards, as measured in the Sequence VH Sludge test vs. API SP test limits. Advanced protection against viscosity and thermal breakdown.', 'fuel-01.png'),
('MoBil', 'Caterpillar, Cummins, Detroit, Mack, Mercedes Benz, Renault', '$21.51/litre', 'High output, low emission diesel engines significantly increase the demands on engine lubricants. Advanced detergency/dispersancy.', 'fuel-02.png'),
('LiquiMoly', 'Has the right moto oil to match every vehicle in the world.', '$48.28/litre', 'High-tech low-friction motor oil based on synthetic technology. Outstanding protection against wear, reduces oil and fuel consumption and ensures fast oil penetration of the engine.', 'fuel-03.png'),
('Valvoline', 'Mercedes Benz, Volkswagen, Porsche and BMW', '$31.73/litre', 'Excellent low and high tempearture performance. Outstanding protection against wear, reduces oil and fuel consumption and ensures fast oil penetration of the engine.', 'fuel-04.png'),
('Delo', 'naturally aspirated and turbocharged four-stroke diesel engines and four-stroke gasoline engines.', '$16.72/litre', 'Performance improvements are the result of ISOSYN Advanced Technology - the combination of Chevrons industry leading formulation experience and unique, high performace additive chemistry.', 'fuel-05.png'),
('Total QUARTZ', 'BMW, Mercedez Benz, Volkswagen, Hyundai-kai and low SaPS motors', '$31.24/litre', 'high-performance synthetic motor oil is recommended for both premium gasoline and diesel engines. When you need extended drain intervals and optimal engine protection for your high-performance engine, this is the oil for you!', 'fuel-06.png');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `accident` varchar(255) NOT NULL,
  `phone` int(32) NOT NULL,
  `vin` varchar(255) NOT NULL,
  `driver` varchar(255) NOT NULL,
  `car` varchar(255) NOT NULL,
  `coverage_expiration` varchar(255) NOT NULL,
  `to_be_paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`fname`, `lname`, `dob`, `address`, `email`, `accident`, `phone`, `vin`, `driver`, `car`, `coverage_expiration`, `to_be_paid`) VALUES
('Sumit', 'Das', '1999-07-17', '173, East Goran, Road #08, Khilgaon, Dhaka', 'sumit.sd123471@gmail.com', 'no', 1775919428, 'JH4KA4630JC008595', 'Sumit Das', 'Tesla Model S', '2033-06-10', '50,000$'),
('Amit ', 'Das', '2006-06-24', '173, East Goran, Road #08, Khilgaon, Dhaka', 'amit.d1cey47@gmail.com', 'no', 1851441493, '4T1BG22K8VU176482', 'Amit Das', 'Audi A8', '2038-06-10', '80,000$'),
('Shikha', 'Das', '1978-06-30', '173, East Goran, Road #08, Khilgaon, Dhaka', 'shikha@gmail.com', 'no', 1851441493, '1GNDX03E8WD341403', 'Shikha Das', 'Toyota Corolla', '2043-06-10', '30,000$');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`email`) VALUES
('sumit.sd123471@gmail.com'),
('sumit.js@gmail.com'),
('amit@gmail.com'),
('sumit.sd123471@gmail.com'),
('amit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(2, 'Sumit Das', 'sumit.sd123471@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'admin'),
(4, 'Sumit2', 'das1909044@stud.kuet.ac.bd', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'user'),
(5, 'Sumit3', 'sumit.jx@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'user'),
(6, 'Abdullah Abid', 'xyz@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'user'),
(7, 'Rakib Bin Mahbub Talukdar', 'xyz1@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'user'),
(8, 'H.M. Fahad', 'fahad@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'user'),
(9, 'Sumaiya Alam Ananna', 'ananna@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
