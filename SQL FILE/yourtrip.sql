-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 18 mars 2022 à 14:24
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `yourtrip`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `fullname`, `password`, `user_type`) VALUES
(1, 'admin1', 'admin1admin1', '1');

-- --------------------------------------------------------

--
-- Structure de la table `flights`
--

CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `airlines` varchar(255) NOT NULL,
  `flight_no` varchar(255) NOT NULL,
  `depart_city` varchar(255) NOT NULL,
  `arrival_city` varchar(255) NOT NULL,
  `departure` date NOT NULL,
  `return` date NOT NULL,
  `departure_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `type_flight` varchar(20) DEFAULT NULL,
  `class` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `flights`
--

INSERT INTO `flights` (`id`, `airlines`, `flight_no`, `depart_city`, `arrival_city`, `departure`, `return`, `departure_time`, `arrival_time`, `type_flight`, `class`, `price`) VALUES
(2, 'Casa Air Service', 'CA-404', 'Rabat', 'Berlin', '2022-03-20', '2022-04-10', '05:45:00', '12:12:30', '', 'Economy', 1800),
(4, 'RAM Cargo', 'RAM-111', 'Rabat', 'Seville', '2022-04-04', '2022-04-10', '02:00:00', '11:20:30', '', 'First', 1400),
(5, 'Royal Air Maroc Express', 'REX-2204', 'FEZ', 'Marseille', '2022-03-31', '2022-04-10', '17:00:00', '00:00:00', '', 'First', 1200),
(7, 'Casa Air Service', 'CS-111', 'Marakech', 'Madrid', '2022-04-01', '0000-00-00', '23:00:00', '06:33:00', '', 'First', 100);

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passportid` int(11) NOT NULL,
  `airlines` varchar(255) NOT NULL,
  `flight_no` varchar(255) NOT NULL,
  `depart_city` varchar(255) NOT NULL,
  `arrival_city` varchar(255) NOT NULL,
  `departure` date NOT NULL,
  `departure_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `price` float NOT NULL,
  `userid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `firstname`, `lastname`, `email`, `passportid`, `airlines`, `flight_no`, `depart_city`, `arrival_city`, `departure`, `departure_time`, `arrival_time`, `price`, `userid`) VALUES
(1, 'Sifaw', 'Boumezough', 'sifawbozezeze@gmail.com', 2222, 'Royal Air Maroc', 'RA-303', 'Casablanca', 'Paris', '2022-03-27', '08:45:00', '14:12:30', 1000, '4'),
(4, 'Sifaw', 'Boumezough', 'sifawboumezough9@gmail.com', 3444, 'Royal Air Maroc', 'RA-303', 'Midelt', 'Paris', '2022-03-27', '08:45:00', '14:12:30', 1000, '4'),
(19, 'Sifaw', 'Boumezough', 'sifawboumezough9@gmail.com', 4444, 'Casa Air Service', 'CA-404', 'Midelt', 'Berlin', '2022-03-20', '05:45:00', '12:12:30', 1800, '6'),
(24, 'Sifaw', 'Boumezough', 'sifawbozezeze@gmail.com', 1111, 'Casa Air Service', 'CA-404', 'Rabat', 'Berlin', '2022-03-20', '05:45:00', '12:12:30', 1800, '4'),
(27, 'Sifaw', 'Boumezough', 'sifawbozezeze@gmail.com', 55555, 'Casa Air Service', 'CA-404', 'Rabat', 'Berlin', '2022-03-20', '05:45:00', '12:12:30', 1800, '4'),
(39, 'Sifaw', 'Boumezough', 'sifawbozezeze@gmail.com', 3737373, 'Casa Air Service', 'CA-404', 'Rabat', 'Berlin', '2022-03-20', '05:45:00', '12:12:30', 1800, '4'),
(53, 'Sifaw', 'Boumezough', 'sifawbozezeze@gmail.com', 59595, 'Casa Air Service', 'CA-404', 'Rabat', 'Berlin', '2022-03-20', '05:45:00', '12:12:30', 1800, '4');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `passporid` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `user_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `passporid`, `birthdate`, `user_type`) VALUES
(4, 'Sifaw Boumezough', NULL, '$2y$10$bZWf5tbMB.Vf9lEfxX9r7uuLULhyG.4EJ39W8l08g2Jt6yOa8/I6W', 'Sifaw Boumezough', '2022-03-07', 0),
(5, 'test', NULL, '$2y$10$91B5BACfND6bEOqpVzCvIOQIWD0mMBS6InUxU/nMu3cfZIwMiHcx6', 'test', '2022-03-07', 0),
(6, 'test test', NULL, '$2y$10$mcSCscxT4LLOhUAMBJueS.FcXpihAKMTWdW03CcEdg7Bip9qXySmW', '2425', '2022-03-22', 0),
(7, 'sifaw', NULL, '$2y$10$SSG6727RHsZmpFcVNggny.dr6LquWg0R.Y5kXBvCtN694jQUFMJNi', '4444', '2022-03-16', 0),
(8, 'sifaw', NULL, '$2y$10$F7N.WX2pKRADmrm2TL4lJOP4BfZHF/W3UrjzQl3YoF5XjEC/0pyfS', '4444', '2022-03-16', 0),
(9, 'sifaw', NULL, '$2y$10$LAmV9yAmBJVLTcjycSLoZOAXUgh6/aDrbHTogaQ45zxlF1ucf8.6q', '4444', '2022-03-16', 0),
(10, 'x x', NULL, '$2y$10$rK.PgrDfematrPbSMBFD/ulIYd/stmbG0KpkTbDrSF3bg6vJlX8OG', '4444', '2022-03-29', 0),
(11, 'x x', NULL, '$2y$10$V2RFv0hkfWeQi9Gnq33cSO5bJr53KSmgE71lWY82VBTkG99Bx3W6C', '4444', '2022-03-29', 0),
(12, 'sifaw', NULL, '$2y$10$mTXrOLPKFIp0CXxD9STIyePhnSdCczZGO2/S9j5htcGr4oAwwS87y', '4444', '2022-03-16', 0),
(13, 'user01', NULL, '$2y$10$PT36MEmr/QGfszlqB6/XSOAg5KAgZiVbehimBv77ygbA9QOZxvDjK', '4444', '2022-03-17', 0),
(14, 'yussef', NULL, '$2y$10$rf1VxGBtKR/ZZT6uqe6cyenA9P3ppUWjg2uNgZa2fqoqu8wwQ7Fru', '21515', '2022-03-07', 0),
(16, 'qwdqwd', 'TEST', '$2y$10$kpWGfSpT0f9e2OBdX5S/c.vZMYDOiRVHdVbMcNSotLjSFFbP1ebXe', '1242425252521', '2022-03-31', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
