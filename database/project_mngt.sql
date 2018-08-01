-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 01, 2018 at 09:22 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_mngt`
--

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE `charges` (
  `id` int(11) NOT NULL,
  `amount_needed` int(11) NOT NULL DEFAULT '0',
  `amount_given` int(11) NOT NULL DEFAULT '0',
  `cleared` enum('yes','no') NOT NULL DEFAULT 'no',
  `project` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `milestone`
--

CREATE TABLE `milestone` (
  `milestone_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text,
  `status` enum('not started','running','finished') NOT NULL DEFAULT 'not started',
  `proportion` varchar(5) NOT NULL DEFAULT '0%',
  `project` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milestone`
--

INSERT INTO `milestone` (`milestone_id`, `title`, `description`, `status`, `proportion`, `project`) VALUES
('MILE1', 'Site Survey', 'Surveying the site and coming up with possible designs on how to lay down the network infrastructure.', 'finished', '10', 'PROJ1'),
('MILE10', 'Milestone 1 for the gate project', 'Description of milestone 1 of that project', 'finished', '10', 'PROJ3'),
('MILE11', 'Milestone 2 for the gate project', 'Description of milestone 2 of that project', 'finished', '25', 'PROJ3'),
('MILE12', 'Milestone 3 for the gate project', 'Description of milestone 3 of that project', 'finished', '30', 'PROJ3'),
('MILE13', 'Milestone 4 for the gate project', 'Description of milestone 4 of that project', 'finished', '35', 'PROJ3'),
('MILE14', 'Milestone 1 for the Mahiakalo project', 'Description of milestone 1 of that project', 'running', '35', 'PROJ4'),
('MILE15', 'Milestone 2 for Mahiakalo Project', 'Description of milestone 2 of that project', 'not started', '35', 'PROJ4'),
('MILE16', 'Milestone 3 for Mahiakalo Project', 'Description of milestone 3 of that project', 'not started', '30', 'PROJ4'),
('MILE17', 'Milestone 1 for the bridge project', 'Description of milestone 1 for that project', 'finished', '33', 'PROJ5'),
('MILE18', 'Milestone 2 for the bridge project', 'Description of milestone 2 for that project', 'finished', '33', 'PROJ5'),
('MILE19', 'Milestone 3 for Bridge project', 'Description of milestone 3 of that project', 'finished', '33', 'PROJ5'),
('MILE2', 'Laying down the network', 'Installing wired connections in the offices.', 'running', '30', 'PROJ1'),
('MILE20', 'Milestone 1 for the Bhukhungu Project', 'Description for milestone 1 of that project', 'running', '18', 'PROJ9'),
('MILE21', 'Milestone 2 for the Bhukhungu Project', 'Description for milestone 2 of that project', 'not started', '22', 'PROJ9'),
('MILE22', 'Milestone 3 for the Bhukhungu Project', 'Description for milestone 3 of that project', 'not started', '20', 'PROJ9'),
('MILE23', 'Milestone 4 for the Bhukhungu Project', 'Description for milestone 4 of that project', 'not started', '40', 'PROJ9'),
('MILE3', 'Setting up modern computers and other accessories', NULL, 'not started', '30', 'PROJ1'),
('MILE4', 'Software Installation', 'Installing new modern software and upgrading the old ones to meet the current standards. ', 'not started', '30', 'PROJ1'),
('MILE5', 'Digging the road', 'digging and flattening the road to prepare it for construction of the super highway', 'finished', '10', 'PROJ2'),
('MILE6', 'Laying down the 1st layer', 'making and placing layer 1 of the road', 'finished', '20', 'PROJ2'),
('MILE7', 'Layign down the 2nd layer', 'making and placing layer 2 of the road', 'running', '20', 'PROJ2'),
('MILE8', 'Laying down the 3rd layer', 'making and placing layer 3 of the road', 'not started', '20', 'PROJ2'),
('MILE9', 'Fishing Construction', 'finishing up the roading and painting it', 'not started', '10', 'PROJ2'),
('PROJ24', 'School Planning', 'Coming up with a design of how the school will look like', 'not started', '5', 'PROJ7'),
('PROJ25', 'Laying Foundation', 'Laying foundation of the all the classes', 'not started', '20', 'PROJ7');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` enum('not started','running','finished') NOT NULL DEFAULT 'not started',
  `supervisor` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `title`, `description`, `start_date`, `end_date`, `status`, `supervisor`, `amount`) VALUES
('PROJ1', 'Digitizing County Offices with modern IT infrastructure ', 'Involves installing a secure network in the county offices, strong internet access, modern accessories, software etc.', '2018-05-01', '2019-01-31', 'running', 'SUP4', 6000000),
('PROJ2', 'Constructing Kakamega-Kisumu Road', 'creating a super highway from Kakamega to Kisumu town. this is to ease transportation between these two towns and the towns along that route.', '2018-06-04', '2018-12-28', 'running', 'SUP2', 18000000),
('PROJ3', 'General Hospital Gate', 'creating a classic entrance to the hospital to make it of standard', '2016-01-01', '2017-12-01', 'finished', 'SUP3', 3000000),
('PROJ4', 'Building Mahiakhalo Secondary School', 'building a school for the mahiakhalo people that is well furnished and of standard', '2017-07-03', '2020-07-31', 'running', 'SUP3', 8000000),
('PROJ5', 'Building new and Fixing old Bridges', 'fixing the old bridges and making new and strong ones.', '2013-04-22', '2017-08-11', 'finished', 'SUP2', 7000000),
('PROJ7', 'School Building', 'Building MMUST Primary School', '2018-08-01', '2020-01-31', 'not started', 'SUP5', 3000000),
('PROJ9', 'Bhukhungu Stadium Renovation', 'renovating bhukhungu stadium and finishing it up to make it a national sport center', '2018-04-02', '2019-11-29', 'running', 'SUP5', 45000000);

-- --------------------------------------------------------

--
-- Stand-in structure for view `project_view`
-- (See below for the actual view)
--
CREATE TABLE `project_view` (
`title` varchar(100)
,`description` text
,`start_date` date
,`end_date` date
,`status` enum('not started','running','finished')
,`fname` varchar(10)
,`mname` varchar(10)
,`lname` varchar(10)
,`supervisor` varchar(20)
,`organization` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `supervisor_id` varchar(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `mname` varchar(10) DEFAULT NULL,
  `lname` varchar(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`supervisor_id`, `fname`, `mname`, `lname`, `title`, `organization`, `phone`, `email`) VALUES
('SUP1', 'Kelvin', 'Wamae', 'Ng\'ang\'a', 'Engineer', 'Kelv Constructions', '07322322', 'kelvin@gmail.com'),
('SUP2', 'Emily', 'Nyambura', 'Ndutire', 'Engineer', 'Emmies Constructions', '+254712121212', 'emmy@emmiesconstruction.com'),
('SUP3', 'Chrisphine', 'Ouma', 'Odipo', 'Engineer', 'Christops Construction Limited', '+254711122233', 'info@christopsconstruction.co.ke'),
('SUP4', 'Miriam', '', 'Matu', 'Software Developer', 'Nimo Technologies', '+24572223456', 'info@nimotech.co.ke'),
('SUP5', 'Zachary', 'Macharia', 'Gachohi', 'Architect', 'Mashville Designers', '+254711121212', 'zackmashville@gmail.com');

-- --------------------------------------------------------

--
-- Structure for view `project_view`
--
DROP TABLE IF EXISTS `project_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `project_view`  AS  select `projects`.`title` AS `title`,`projects`.`description` AS `description`,`projects`.`start_date` AS `start_date`,`projects`.`end_date` AS `end_date`,`projects`.`status` AS `status`,`supervisor`.`fname` AS `fname`,`supervisor`.`mname` AS `mname`,`supervisor`.`lname` AS `lname`,`supervisor`.`title` AS `supervisor`,`supervisor`.`organization` AS `organization` from (`projects` join `supervisor`) where (`projects`.`supervisor` = `supervisor`.`supervisor_id`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `milestone` (`project`);

--
-- Indexes for table `milestone`
--
ALTER TABLE `milestone`
  ADD PRIMARY KEY (`milestone_id`),
  ADD KEY `project` (`project`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD UNIQUE KEY `title` (`title`),
  ADD KEY `supervisor` (`supervisor`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`supervisor_id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `charges`
--
ALTER TABLE `charges`
  ADD CONSTRAINT `charges_ibfk_1` FOREIGN KEY (`project`) REFERENCES `projects` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `milestone`
--
ALTER TABLE `milestone`
  ADD CONSTRAINT `milestone_ibfk_1` FOREIGN KEY (`project`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`supervisor`) REFERENCES `supervisor` (`supervisor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
