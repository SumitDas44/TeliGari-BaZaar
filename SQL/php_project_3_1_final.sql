-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 08:43 PM
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
(8, 'H.M. Fahad', 'fahad@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'user');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
