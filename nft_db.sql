-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Pi 15.Dec 2023, 14:57
-- Verzia serveru: 10.4.24-MariaDB
-- Verzia PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `nft_db`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `page_name` varchar(90) NOT NULL,
  `url` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`id`, `page_name`, `url`) VALUES
(1, 'Home', 'index.php'),
(2, 'Explore', 'explore.php'),
(3, 'Create Yours', 'create.php');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `nft`
--

CREATE TABLE `nft` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `royalties` float NOT NULL,
  `image_num` varchar(4) NOT NULL,
  `ends_in` date NOT NULL,
  `approved` int(1) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `nft`
--

INSERT INTO `nft` (`id`, `title`, `description`, `price`, `royalties`, `image_num`, `ends_in`, `approved`, `users_id`) VALUES
(1, 'Ignac', 'Lorem Ipsum has been the industry\'s standard dummy text ever, when an unknown printer took a galley of type.', 5.5, 15, '01', '2023-12-31', 1, 2),
(2, 'Dolly doll', 'Lorem Ipsum has been the industry\'s standard dummy text ever, when an unknown printer took a galley of type.', 2.2, 10, '02', '2024-02-01', 1, 1),
(3, 'Uragan', 'Lorem Ipsum has been the industry\'s standard dummy text ever, when an unknown printer took a galley of type.', 2, 10, '03', '2023-12-28', 1, 3),
(4, 'Lopata', 'Lorem Ipsum has been the industry\'s standard dummy text ever, when an unknown printer took a galley of type.', 6, 5, '04', '2024-01-10', 1, 1),
(5, 'Monkey', 'Lorem Ipsum has been the industry\'s standard dummy text ever, when an unknown printer took a galley of monkey.', 1.9, 7, '02', '2024-01-18', 1, 3),
(6, 'Donkey', 'Lorem Ipsum has been the industry\'s standard dummy text ever, when an unknown printer took a galley of donkey.', 7.2, 1, '02', '2023-12-22', 1, 1),
(7, 'Tauron', 'Lorem Ipsum has been the industry\'s standard dummy.', 0.06, 3, '03', '2023-12-31', 1, 4),
(8, 'Poplepetko', 'Lorem Ipsum has been the industry\'s standard dummy.', 5, 10, '04', '2023-12-30', 0, 4),
(9, 'Monster', 'The concept of puzzle games dates back to ancient times, with puzzles and brain teasers being a part of human history.', 0.9, 3, '01', '2023-12-31', 0, 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `sellers`
--

CREATE TABLE `sellers` (
  `id` int(11) NOT NULL,
  `earnings_eth` float NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `sellers`
--

INSERT INTO `sellers` (`id`, `earnings_eth`, `users_id`) VALUES
(1, 8, 3),
(2, 12.5, 2),
(3, 4.24, 4),
(4, 7, 2),
(5, 16.24, 1),
(6, 16.9, 6),
(7, 2.08, 8),
(8, 11.2, 7),
(9, 10.12, 5),
(10, 14.9, 8);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(90) NOT NULL,
  `user_image_num` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `username`, `user_image_num`) VALUES
(1, 'Jozefine Musimskola', '01'),
(2, 'Jozefko Uragán', '02'),
(3, 'Anna Maricka', '01'),
(4, 'Katka Matka', '01'),
(5, 'Janko Hraško', '03'),
(6, 'Uragán Matesko', '02'),
(7, 'Ignac Bezof', '03'),
(8, 'Ladislav Bush', '02');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `nft`
--
ALTER TABLE `nft`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nft_users_idx` (`users_id`);

--
-- Indexy pre tabuľku `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sellers_users1_idx` (`users_id`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `nft`
--
ALTER TABLE `nft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `nft`
--
ALTER TABLE `nft`
  ADD CONSTRAINT `fk_nft_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Obmedzenie pre tabuľku `sellers`
--
ALTER TABLE `sellers`
  ADD CONSTRAINT `fk_sellers_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
