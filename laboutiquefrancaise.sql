-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 03 août 2021 à 15:36
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
-- Base de données :  `laboutiquefrancaisee`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D4E6F81A76ED395` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `address`
--

INSERT INTO `address` (`id`, `user_id`, `name`, `firstname`, `lastname`, `company`, `address`, `postal`, `city`, `country`, `phone`) VALUES
(5, 4, 'Maison', 'Faouzi', 'Dakir', 'Blablabla', 'Chaussée de Gand, 397', '1080', 'Bruxelles', 'BE', '0484861688'),
(6, 5, 'Chaussée de Gand', 'Faouzi', 'Dakir', 'Blablabla', '397', '1080', 'Bruxelles', 'BE', '0484861688'),
(7, 5, 'Travail', 'Faouzi', 'Dakir', 'Blablabla', '397 Chaussée de gand', '1080', 'Bruxelles', 'BE', '0484861688'),
(8, 8, 'Chaussée de Gand', 'Faouzi', 'Dakir', 'Blablabla', '397', '1080', 'Bruxelles', 'BE', '0484861688');

-- --------------------------------------------------------

--
-- Structure de la table `carrier`
--

DROP TABLE IF EXISTS `carrier`;
CREATE TABLE IF NOT EXISTS `carrier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `carrier`
--

INSERT INTO `carrier` (`id`, `name`, `description`, `price`) VALUES
(1, 'Colissimo', 'Profitez du bon transport', 990),
(2, 'Mondial Relay', 'Pas cher', 400);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Manteaux'),
(2, 'Bonnets'),
(3, 'Echarpes'),
(4, 'T-shirts');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210227141825', '2021-02-27 14:23:45', 328),
('DoctrineMigrations\\Version20210227145528', '2021-02-27 14:56:04', 37),
('DoctrineMigrations\\Version20210309180344', '2021-03-09 18:05:08', 476),
('DoctrineMigrations\\Version20210309181624', '2021-03-09 18:16:39', 272),
('DoctrineMigrations\\Version20210318165129', '2021-03-18 16:52:26', 437),
('DoctrineMigrations\\Version20210326172245', '2021-03-26 17:28:34', 616),
('DoctrineMigrations\\Version20210326174553', '2021-03-26 17:54:26', 276),
('DoctrineMigrations\\Version20210328161821', '2021-03-28 16:18:54', 637),
('DoctrineMigrations\\Version20210405143901', '2021-04-05 14:39:26', 573),
('DoctrineMigrations\\Version20210405165315', '2021-04-05 16:53:25', 47),
('DoctrineMigrations\\Version20210412135313', '2021-04-12 13:53:45', 1536),
('DoctrineMigrations\\Version20210512133709', '2021-05-12 13:37:30', 937),
('DoctrineMigrations\\Version20210512141015', '2021-05-12 14:10:41', 64),
('DoctrineMigrations\\Version20210514140005', '2021-05-14 14:01:43', 418);

-- --------------------------------------------------------

--
-- Structure de la table `header`
--

DROP TABLE IF EXISTS `header`;
CREATE TABLE IF NOT EXISTS `header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `btn_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `header`
--

INSERT INTO `header` (`id`, `title`, `content`, `btn_title`, `btn_url`, `illustration`) VALUES
(1, 'Nouvelle collection', 'Découvrez notre collection hiver 2020 crée par nos artisans', 'Découvrir', '/nos-produits', '3d5043bc9edb2d0c4ac5e57e8d8fc9edc736d998.jpg'),
(2, 'Derniers arrivages', 'Ne manquez rien !', 'Voir', '/nos-produits', '791ca6ac12c9d0e2aab1558313cb655df539f161.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `carrier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_price` double NOT NULL,
  `delivery` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F5299398A76ED395` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order`
--

INSERT INTO `order` (`id`, `user_id`, `created_at`, `carrier_name`, `carrier_price`, `delivery`, `reference`, `stripe_session_id`, `state`) VALUES
(1, 5, '2021-03-29 18:54:53', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '', NULL, 0),
(2, 5, '2021-03-29 18:55:35', 'Colissimo', 9.9, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397<br/>1080 Bruxelles<br/>BE', '', NULL, 0),
(3, 5, '2021-04-05 15:06:08', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b276077267', NULL, 0),
(4, 5, '2021-04-05 15:08:16', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b27e09ed01', NULL, 0),
(5, 5, '2021-04-05 15:12:19', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397<br/>1080 Bruxelles<br/>BE', '05042021-606b28d3596aa', NULL, 0),
(6, 5, '2021-04-05 15:14:37', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b295d48946', NULL, 0),
(7, 5, '2021-04-05 15:17:32', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b2a0caf6ff', NULL, 0),
(8, 5, '2021-04-05 15:18:12', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b2a340e190', NULL, 0),
(9, 5, '2021-04-05 15:18:28', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b2a445c2fe', NULL, 0),
(10, 5, '2021-04-05 15:19:21', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b2a7998dd0', NULL, 0),
(11, 5, '2021-04-05 15:19:50', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b2a9612385', NULL, 0),
(12, 5, '2021-04-05 15:20:24', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b2ab8b9e76', NULL, 0),
(13, 5, '2021-04-05 15:22:50', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b2b4a89f57', NULL, 0),
(14, 5, '2021-04-05 15:28:57', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b2cb91c887', NULL, 0),
(15, 5, '2021-04-05 15:37:04', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b2ea03efde', NULL, 0),
(16, 5, '2021-04-05 15:40:47', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b2f7f63793', NULL, 0),
(17, 5, '2021-04-05 15:45:09', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b3085b3db6', NULL, 0),
(18, 5, '2021-04-05 15:46:07', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b30bf6e9c1', NULL, 0),
(19, 5, '2021-04-05 15:46:25', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b30d12e2b2', NULL, 0),
(20, 5, '2021-04-05 15:46:29', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b30d52e98c', NULL, 0),
(21, 5, '2021-04-05 15:46:39', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b30df466e5', NULL, 0),
(22, 5, '2021-04-05 15:46:47', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b30e7a45f9', NULL, 0),
(23, 5, '2021-04-05 15:46:56', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b30f096353', NULL, 0),
(24, 5, '2021-04-05 15:47:31', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b3113a23ab', NULL, 0),
(25, 5, '2021-04-05 15:47:45', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b312148a76', NULL, 0),
(26, 5, '2021-04-05 15:49:10', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b3176153c3', NULL, 0),
(27, 5, '2021-04-05 17:02:34', 'Colissimo', 9.9, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '05042021-606b42aab83f1', 'cs_test_b1vAEEMqzVZYLAQUjJKqDFkw8qtQqa7TTbbdDYUW4UnhFoVycc5lwiohpB', 0),
(28, 5, '2021-04-06 18:53:05', 'Colissimo', 9.9, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '06042021-606cae11cc946', 'cs_test_b1qyfgYANCZ39FMwdnrLiWD4YGZtGy5T2nDOhBTP0E6y8qDFdQSoeV1EM6', 0),
(29, 5, '2021-04-06 18:55:45', 'Mondial Relay', 4, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '06042021-606caeb1ddb4a', 'cs_test_b1WyCmeecFnpozCrDRwnxYB1xFjZGcfKNkQg5SKgnUOALqhnHrofVGfTBp', 0),
(30, 5, '2021-04-06 19:55:23', 'Mondial Relay', 400, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '06042021-606cbcabd4b2d', NULL, 0),
(31, 5, '2021-04-06 19:55:59', 'Mondial Relay', 400, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '06042021-606cbccf8be7a', NULL, 0),
(32, 5, '2021-04-08 18:24:13', 'Mondial Relay', 400, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '08042021-606f4a4dc8997', NULL, 0),
(33, 5, '2021-04-08 19:03:33', 'Mondial Relay', 400, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397<br/>1080 Bruxelles<br/>BE', '08042021-606f53854e17e', 'cs_test_b1vgLQREavdacPsIMwUs6pGIgF0vVK9hbb9nVcf42rHfpnLEBAqfqlGr7t', 0),
(34, 8, '2021-04-11 15:07:34', 'Mondial Relay', 400, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397<br/>1080 Bruxelles<br/>BE', '11042021-607310b67273c', 'cs_test_b1Yt9bcLtOp2AnuM3o2tU4jL0VDenniHJclQnSdIMiR617kC7TkKuxEapS', 0),
(35, 5, '2021-04-12 14:34:43', 'Mondial Relay', 400, 'Faouzi Dakir<br/>0484861688<br/>Blablabla<br/>397 Chaussée de gand<br/>1080 Bruxelles<br/>BE', '12042021-60745a83173e7', 'cs_test_b1FRgcLeDYBz29VyKM7vY2bMjWUDhaWReIgFnbJyWCDH99qElUPOGS0axc', 3);

-- --------------------------------------------------------

--
-- Structure de la table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `my_order_id` int(11) NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_845CA2C1BFCDF877` (`my_order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `order_details`
--

INSERT INTO `order_details` (`id`, `my_order_id`, `product`, `quantity`, `price`, `total`) VALUES
(1, 1, 'Bonnet Rouge', 1, 900, 900),
(2, 2, 'Bonnet Rouge', 1, 900, 900),
(3, 2, 'Manteau de la dame', 1, 15000, 15000),
(4, 3, 'Le bonnet du skieur', 1, 1500, 1500),
(5, 3, 'Belle écharpe', 1, 1600, 1600),
(6, 4, 'Le bonnet du skieur', 1, 1500, 1500),
(7, 4, 'Belle écharpe', 1, 1600, 1600),
(8, 5, 'Le bonnet du skieur', 1, 1500, 1500),
(9, 5, 'Belle écharpe', 1, 1600, 1600),
(10, 6, 'Le bonnet du skieur', 1, 1500, 1500),
(11, 6, 'Belle écharpe', 1, 1600, 1600),
(12, 7, 'Le bonnet du skieur', 1, 1500, 1500),
(13, 7, 'Belle écharpe', 1, 1600, 1600),
(14, 8, 'Le bonnet du skieur', 1, 1500, 1500),
(15, 8, 'Belle écharpe', 1, 1600, 1600),
(16, 9, 'Le bonnet du skieur', 1, 1500, 1500),
(17, 9, 'Belle écharpe', 1, 1600, 1600),
(18, 10, 'Le bonnet du skieur', 1, 1500, 1500),
(19, 10, 'Belle écharpe', 1, 1600, 1600),
(20, 11, 'Le bonnet du skieur', 1, 1500, 1500),
(21, 11, 'Belle écharpe', 1, 1600, 1600),
(22, 12, 'Le bonnet du skieur', 1, 1500, 1500),
(23, 12, 'Belle écharpe', 1, 1600, 1600),
(24, 13, 'Le bonnet du skieur', 1, 1500, 1500),
(25, 13, 'Belle écharpe', 1, 1600, 1600),
(26, 14, 'Le bonnet du skieur', 1, 1500, 1500),
(27, 14, 'Belle écharpe', 1, 1600, 1600),
(28, 15, 'Le bonnet du skieur', 1, 1500, 1500),
(29, 15, 'Belle écharpe', 1, 1600, 1600),
(30, 16, 'Le bonnet du skieur', 1, 1500, 1500),
(31, 16, 'Belle écharpe', 1, 1600, 1600),
(32, 17, 'Le bonnet du skieur', 1, 1500, 1500),
(33, 18, 'Le bonnet du skieur', 1, 1500, 1500),
(34, 19, 'Le bonnet du skieur', 1, 1500, 1500),
(35, 20, 'Le bonnet du skieur', 1, 1500, 1500),
(36, 21, 'Le bonnet du skieur', 1, 1500, 1500),
(37, 22, 'Le bonnet du skieur', 1, 1500, 1500),
(38, 23, 'Le bonnet du skieur', 1, 1500, 1500),
(39, 24, 'Le bonnet du skieur', 1, 1500, 1500),
(40, 25, 'Le bonnet du skieur', 1, 1500, 1500),
(41, 26, 'Le bonnet du skieur', 1, 1500, 1500),
(42, 27, 'Le bonnet du skieur', 1, 1500, 1500),
(43, 28, 'Bonnet Rouge', 1, 900, 900),
(44, 29, 'Bonnet Rouge', 1, 900, 900),
(45, 30, 'Bonnet Rouge', 1, 900, 900),
(46, 31, 'Bonnet Rouge', 1, 900, 900),
(47, 32, 'Bonnet Rouge', 1, 900, 900),
(48, 33, 'Bonnet Rouge', 1, 900, 900),
(49, 33, 'Belle écharpe', 1, 1600, 1600),
(50, 34, 'Bonnet Rouge', 1, 900, 900),
(51, 35, 'Bonnet Rouge', 1, 900, 900);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `illustration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `is_best` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D34A04AD12469DE2` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `slug`, `illustration`, `subtitle`, `description`, `price`, `is_best`) VALUES
(2, 2, 'Bonnet Rouge', 'bonnet-rouge', '92f738b7612bb32f2d8d8e87d8649514d041f393.jpg', 'Le bonnet parfait pour l\'hiver', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', 900, 1),
(3, 2, 'Le bonnet du skieur', 'le-bonnet-du-skieur', 'a6273110522bc8ee1019d3e4fb1aa9a8fe664d47.jpg', 'Le bonnet pour le ski', 'making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1500, 0),
(4, 3, 'Belle écharpe', 'belle-echarpe', 'ed6365011bca411e31c528c9778ac41965da305a.jpg', 'L\'écharpe du dimanche', 'Ao contrário da crença popular, o Lorem Ipsum não é simplesmente texto aleatório. Tem raízes numa peça de literatura clássica em Latim, de 45 AC, tornando-o com mais de 2000 anos. Richard McClintock, um professor de Latim no Colégio Hampden-Sydney, na Virgínia, procurou uma das palavras em Latim mais obscuras (consectetur) numa passagem Lorem Ipsum, e atravessando as cidades do mundo na literatura clássica, descobriu a sua origem. Lorem', 1600, 0),
(5, 3, 'L\'écharpe du bourge', 'lecharpe-du-bourge', 'af9c7e5d0d67b7c3592bbbdf712d64a94947f4c3.jpg', 'Magnifique écharpe', 'pela injecção de humor, ou de palavras aleatórias que nem sequer parecem suficientemente credíveis. Se vai usar uma passagem do Lorem Ipsum, deve', 2000, 0),
(6, 1, 'Manteau de la dame', 'manteau-de-la-dame', '899d2a3387921badbc7f794de7ee103ec17acc19.jpg', 'Manteau pour se la péter', 'O pedaço mais habitual do Lorem Ipsum usado desde os anos 1500 é reproduzido abaixo para os interessados. As secções 1.10.32 e 1.10.33 do \"de Finibus Bonorum et Malorum\" do Cícero também estão reproduzidos na sua forma original, acompanhados pela sua tradução em Inglês, versões da tradução de 1914 por H. Rackham.', 15000, 1),
(7, 1, 'Manteau random', 'manteau-random', '500e0e24e1bab0bc694203b09ed35b6b4ae3174d.jpg', 'Plutot joli', 'O pedaço mais habitual do Lorem Ipsum usado desde os anos 1500 é reproduzido abaixo para os interessados. As secções 1.10.32 e 1.10.33 do \"de Finibus Bonorum et Malorum\" do Cícero também estão reproduzidos na sua forma original, acompanhados pela sua tradução em Inglês, versões da tradução de 1914 por H. Rackham.', 15000, 0),
(8, 4, 'T-shirt basique', 't-shirt-basique', '7396e531305e59c6ea89196d97b11de3b7ae2630.jpg', 'Couleur blanc', 'definido, como necessário, fazendo com que este seja o primeiro verdadeiro gerador na Internet. Usa um dicionário de 200 palavras em Latim, combinado com uma dúzia de modelos de frases, para gerar Lorem Ipsum que pareçam razoáveis. Desta forma, o Lorem Ipsum gerado é sempre livre de repetição, ou de injecção humorística, etc.', 2000, 1),
(9, 4, 'T-shirt manches longues', 't-shirt-manches-longues', '9091b56862555cd32f661202eb28a651aa90f156.jpg', 'Couleur noire', 'definido, como necessário, fazendo com que este seja o primeiro verdadeiro gerador na Internet. Usa um dicionário de 200 palavras em Latim, combinado com uma dúzia de modelos de frases, para gerar Lorem Ipsum que pareçam razoáveis. Desta forma, o Lorem Ipsum gerado é sempre livre de repetição, ou de injecção humorística, etc.', 1400, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reset_password`
--

DROP TABLE IF EXISTS `reset_password`;
CREATE TABLE IF NOT EXISTS `reset_password` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B9983CE5A76ED395` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reset_password`
--

INSERT INTO `reset_password` (`id`, `user_id`, `token`, `created_at`) VALUES
(5, 8, '609e9324af55f', '2021-05-14 15:11:32'),
(6, 8, '609fbba500e4c', '2021-05-15 12:16:37');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `firstname`, `lastname`) VALUES
(4, 'user2@hotmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$U1VyYkw5cVgyMEhuTVJVcA$kcQCl/eVpaSKiHnVmULm8El2V+8mDWbiHYpwkhlFXAg', 'Faouzi', 'Dakir'),
(5, 'user@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$d3BzOTBTN0VTamNPaVB5Tg$b/m3TTWOqbZzs0bTj7Dh9ayoW6mQcoge9cIuYoLpF+I', 'Faouzi', 'Dakir'),
(8, 'admin@hotmail.com', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$ZGlGMXMzcy4wZDJaUFQ3cQ$2HCILNR1N/ckcUrVWdWjSuIfySKecs9eVR/JzQr92v8', 'Faouzi', 'Dakir');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_D4E6F81A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_F5299398A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `FK_845CA2C1BFCDF877` FOREIGN KEY (`my_order_id`) REFERENCES `order` (`id`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `reset_password`
--
ALTER TABLE `reset_password`
  ADD CONSTRAINT `FK_B9983CE5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
