-- Host: localhost
-- Generation Time: May 23, 2017 at 01:58 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tgregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(50) NOT NULL,
  `fullname` text NOT NULL,
  `email` text NOT NULL,
  'password' text NOT NULL,
  `dob` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`,`firstname`, `surname`, `email`,`dob`,`gender`, `user`) VALUES
('patient1','Jean','Kyalo','jean@gmail.com','10/12/2000', 'male', 'patient'),
('pat2','Olivia','Njeri','oliv12@gmail.com','01/01/2004', 'female', 'doctor'),
('','', '', '', '','','',''),
('mov','Moliv','Njeru','njeri@gmail.com','07/10/1999', 'female', 'dcotor');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;