-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 22 mai 2020 à 21:24
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `short_info` varchar(500) DEFAULT NULL,
  `date_event` date DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `long_info` varchar(1000) DEFAULT NULL,
  `image` varchar(50) NOT NULL,
  `type_event` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id_user`, `id_event`, `short_info`, `date_event`, `title`, `long_info`, `image`, `type_event`) VALUES
(1, 6, 'L\'organisation d\'une fête à l\'occasion ', '2020-04-08', 'Sin Hogar day ', 'une organisation d\'une fête à l\'occasion d\'un an aprés la création de  l\'association Sin Hogar sur le terrain ajouter une nouvelle ', 'pictures\\port.PNG', 'public'),
(5, 9, 'aaaaaa', '2020-05-13', 'bbbbbb', 'aaaaaaaaa', 'pictures\\port.PNG', 'public\r\n'),
(3, 10, 'start you day', '2020-05-13', 'Do not worry', 'Having home is the best feeling of all ', 'pictures/pays.jpg', 'public'),
(5, 12, 'dgshsd', '2020-05-07', 'daaaaaaaaaaate date date ', 'dhshdjshd', '', 'public');

-- --------------------------------------------------------

--
-- Structure de la table `homeless`
--

CREATE TABLE `homeless` (
  `id_homeless` int(11) NOT NULL,
  `name_homeless` varchar(30) DEFAULT NULL,
  `last_name_homeless` varchar(30) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `situation` varchar(255) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `age_homeless` int(20) DEFAULT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `mail_browser` varchar(40) NOT NULL,
  `lastName_browser` varchar(30) NOT NULL,
  `firstName_browser` varchar(30) DEFAULT NULL,
  `contents` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`mail_browser`, `lastName_browser`, `firstName_browser`, `contents`) VALUES
('laildjs@', 'CHATER', 'Laila', 'ahejdyeuryshdget'),
('laildjs@', 'skljkdl', 'dkskjd', 'dlkskkkkkkkkk'),
('laildjs@', 'skljkdl', 'dkskjd', 'dlkskkkkkkkkk'),
('laildjs@', 'skljkdl', 'dkskjd', 'dlkskkkkkkkkk'),
('laildjs@', 'skljkdl', 'dkskjd', 'dlkskkkkkkkkk'),
('laildjs@', 'skljkdl', 'dkskjd', 'dlkskkkkkkkkk'),
('laildjs@', 'skljkdl', 'dkskjd', 'dlkskkkkkkkkk'),
('laildjs@', 'skljkdl', 'dkskjd', 'kkkkkkkkkkkkkkkkkkkk'),
('laildjs@', 'dksjd', 'ldksjd', 'we are waiting for your comments to proceed further');

-- --------------------------------------------------------

--
-- Structure de la table `ordernum`
--

CREATE TABLE `ordernum` (
  `id_order` int(30) NOT NULL,
  `id_user` int(30) NOT NULL,
  `date_order` date NOT NULL,
  `total_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `orderproducts`
--

CREATE TABLE `orderproducts` (
  `id_order` int(30) NOT NULL,
  `id_product` int(30) NOT NULL,
  `quantity_purchased` int(30) NOT NULL,
  `price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `new_price` decimal(6,2) NOT NULL,
  `date_publication` date NOT NULL,
  `quantity` int(20) DEFAULT NULL,
  `name_product` varchar(80) NOT NULL,
  `image_product` varchar(50) NOT NULL,
  `old_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_user`, `id_product`, `new_price`, `date_publication`, `quantity`, `name_product`, `image_product`, `old_price`) VALUES
(1, 1, '7.00', '2020-05-13', 5, 'T-shirt', 'pictures/product1.png', '10.00'),
(3, 2, '8.00', '2020-05-13', 7, 'PULL', 'pictures/product2.png', '13.00'),
(1, 3, '3.00', '2020-05-13', 11, 'Cap', 'pictures/product3.PNG', '7.00'),
(1, 5, '1.00', '2020-05-13', 6, 'Bib Mask', 'pictures/Product4.PNG', '2.00'),
(1, 6, '8.00', '2020-05-13', 15, 'CUB', 'pictures/product5.PNG', '13.00'),
(3, 7, '5.00', '2020-05-13', 16, 'Cold Hat', 'pictures/product7.PNG', '10.00'),
(1, 8, '10.00', '2020-05-13', 7, 'Sports Bag', 'pictures/product6.PNG', '15.00'),
(3, 9, '4.00', '2020-05-13', 11, 'Back Protection Phone', 'pictures/product9.PNG', '8.00'),
(1, 10, '3.00', '2020-05-13', 4, 'Shoping Bag', 'pictures/product10.PNG', '5.00'),
(1, 11, '8.00', '2020-05-13', 16, 'School Bag', 'pictures/product11.PNG', '13.00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(30) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `passWord` varchar(30) DEFAULT NULL,
  `profile` varchar(30) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `id_Admin` tinyint(1) DEFAULT 0,
  `mail` varchar(30) DEFAULT NULL,
  `cin` varchar(30) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `date_birth` date DEFAULT NULL,
  `Username` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `name`, `last_name`, `gender`, `passWord`, `profile`, `phone_number`, `id_Admin`, `mail`, `cin`, `country`, `city`, `address`, `date_birth`, `Username`) VALUES
(390, NULL, NULL, NULL, NULL, 'donateur', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(446, NULL, NULL, NULL, NULL, 'donateur', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(448, NULL, NULL, NULL, NULL, 'donateur', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(450, NULL, NULL, NULL, NULL, 'donateur', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(454, NULL, NULL, NULL, NULL, 'donateur', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(455, NULL, NULL, NULL, NULL, 'donateur', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(456, NULL, NULL, NULL, NULL, 'donateur', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(464, NULL, NULL, NULL, 'abc', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'admin'),
(465, NULL, NULL, NULL, 'user', 'Adherent', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `homeless`
--
ALTER TABLE `homeless`
  ADD PRIMARY KEY (`id_homeless`);

--
-- Index pour la table `ordernum`
--
ALTER TABLE `ordernum`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD PRIMARY KEY (`id_product`,`id_order`),
  ADD KEY `id_order` (`id_order`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `homeless`
--
ALTER TABLE `homeless`
  MODIFY `id_homeless` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `ordernum`
--
ALTER TABLE `ordernum`
  MODIFY `id_order` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `ordernum`
--
ALTER TABLE `ordernum`
  ADD CONSTRAINT `ordernum_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Contraintes pour la table `orderproducts`
--
ALTER TABLE `orderproducts`
  ADD CONSTRAINT `orderproducts_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `ordernum` (`id_order`),
  ADD CONSTRAINT `orderproducts_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
