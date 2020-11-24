SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darosa`
--
CREATE DATABASE IF NOT EXISTS `darosa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `darosa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nm_user` varchar(45) NOT NULL,
  `tel_user` varchar(45) NOT NULL,
  `email_user` varchar(45) NOT NULL,
  `create_dt` datetime DEFAULT NULL,
  `update_dt` datetime DEFAULT NULL,
  `delete_dt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `nm_user`, `tel_user`, `email_user`, `create_dt`, `update_dt`, `delete_dt`) VALUES
(1, 'Rubens', '3299-1735', 'Rubens@teste.com.br', '2020-11-22 23:19:50', '2020-11-22 23:39:57', '2020-11-22 23:40:25'),
(2, 'Weslley', '99122-1789', 'Weslley@teste.com', '2020-11-22 23:19:50', '2020-11-22 23:40:17', NULL),
(3, 'Gabriel', '99815-7868', 'gabriel@teste.com', '2020-11-22 23:19:50', '2020-11-22 23:39:40', NULL),
(4, 'Kevin', '3222-8942', 'kevin@teste.com', '2020-11-22 23:38:03', NULL, '2020-11-22 23:46:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
