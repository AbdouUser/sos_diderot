-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 13 mai 2019 à 01:44
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sos`
--

-- --------------------------------------------------------

--
-- Structure de la table `calendar`
--

DROP TABLE IF EXISTS `calendar`;
CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `day` int(11) NOT NULL,
  `hour` int(11) NOT NULL,
  `isHere` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6EA9A146AA9E377A` (`date`)
) ENGINE=InnoDB AUTO_INCREMENT=325 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `calendar`
--

INSERT INTO `calendar` (`id`, `date`, `day`, `hour`, `isHere`) VALUES
(1, NULL, 0, 0, 1),
(2, NULL, 1, 0, 0),
(3, NULL, 2, 0, 0),
(4, NULL, 3, 0, 0),
(5, NULL, 4, 0, 0),
(6, NULL, 5, 0, 0),
(7, NULL, 0, 1, 0),
(8, NULL, 1, 1, 0),
(9, NULL, 2, 1, 0),
(10, NULL, 3, 1, 0),
(11, NULL, 4, 1, 0),
(12, NULL, 5, 1, 0),
(13, NULL, 0, 2, 0),
(14, NULL, 1, 2, 0),
(15, NULL, 2, 2, 0),
(16, NULL, 3, 2, 0),
(17, NULL, 4, 2, 0),
(18, NULL, 5, 2, 0),
(19, NULL, 0, 3, 0),
(20, NULL, 1, 3, 0),
(21, NULL, 2, 3, 0),
(22, NULL, 3, 3, 0),
(23, NULL, 4, 3, 0),
(24, NULL, 5, 3, 0),
(25, NULL, 0, 4, 0),
(26, NULL, 1, 4, 0),
(27, NULL, 2, 4, 0),
(28, NULL, 3, 4, 0),
(29, NULL, 4, 4, 0),
(30, NULL, 5, 4, 0),
(31, NULL, 0, 5, 0),
(32, NULL, 1, 5, 0),
(33, NULL, 2, 5, 0),
(34, NULL, 3, 5, 0),
(35, NULL, 4, 5, 0),
(36, NULL, 5, 5, 0),
(37, NULL, 0, 6, 0),
(38, NULL, 1, 6, 0),
(39, NULL, 2, 6, 0),
(40, NULL, 3, 6, 0),
(41, NULL, 4, 6, 0),
(42, NULL, 5, 6, 0),
(43, NULL, 0, 7, 0),
(44, NULL, 1, 7, 0),
(45, NULL, 2, 7, 0),
(46, NULL, 3, 7, 0),
(47, NULL, 4, 7, 0),
(48, NULL, 5, 7, 0),
(49, NULL, 0, 8, 0),
(50, NULL, 1, 8, 0),
(51, NULL, 2, 8, 0),
(52, NULL, 3, 8, 0),
(53, NULL, 4, 8, 0),
(54, NULL, 5, 8, 0),
(55, NULL, 0, 0, 1),
(56, NULL, 1, 0, 0),
(57, NULL, 2, 0, 0),
(58, NULL, 3, 0, 0),
(59, NULL, 4, 0, 0),
(60, NULL, 5, 0, 0),
(61, NULL, 0, 1, 0),
(62, NULL, 1, 1, 1),
(63, NULL, 2, 1, 0),
(64, NULL, 3, 1, 0),
(65, NULL, 4, 1, 0),
(66, NULL, 5, 1, 0),
(67, NULL, 0, 2, 0),
(68, NULL, 1, 2, 0),
(69, NULL, 2, 2, 0),
(70, NULL, 3, 2, 0),
(71, NULL, 4, 2, 0),
(72, NULL, 5, 2, 0),
(73, NULL, 0, 3, 0),
(74, NULL, 1, 3, 0),
(75, NULL, 2, 3, 0),
(76, NULL, 3, 3, 0),
(77, NULL, 4, 3, 0),
(78, NULL, 5, 3, 0),
(79, NULL, 0, 4, 0),
(80, NULL, 1, 4, 0),
(81, NULL, 2, 4, 0),
(82, NULL, 3, 4, 0),
(83, NULL, 4, 4, 0),
(84, NULL, 5, 4, 0),
(85, NULL, 0, 5, 0),
(86, NULL, 1, 5, 0),
(87, NULL, 2, 5, 0),
(88, NULL, 3, 5, 0),
(89, NULL, 4, 5, 0),
(90, NULL, 5, 5, 0),
(91, NULL, 0, 6, 0),
(92, NULL, 1, 6, 0),
(93, NULL, 2, 6, 0),
(94, NULL, 3, 6, 0),
(95, NULL, 4, 6, 0),
(96, NULL, 5, 6, 0),
(97, NULL, 0, 7, 0),
(98, NULL, 1, 7, 0),
(99, NULL, 2, 7, 0),
(100, NULL, 3, 7, 0),
(101, NULL, 4, 7, 0),
(102, NULL, 5, 7, 0),
(103, NULL, 0, 8, 0),
(104, NULL, 1, 8, 0),
(105, NULL, 2, 8, 0),
(106, NULL, 3, 8, 0),
(107, NULL, 4, 8, 0),
(108, NULL, 5, 8, 0),
(109, NULL, 0, 0, 0),
(110, NULL, 1, 0, 0),
(111, NULL, 2, 0, 0),
(112, NULL, 3, 0, 0),
(113, NULL, 4, 0, 0),
(114, NULL, 5, 0, 0),
(115, NULL, 0, 1, 0),
(116, NULL, 1, 1, 0),
(117, NULL, 2, 1, 0),
(118, NULL, 3, 1, 0),
(119, NULL, 4, 1, 0),
(120, NULL, 5, 1, 0),
(121, NULL, 0, 2, 0),
(122, NULL, 1, 2, 0),
(123, NULL, 2, 2, 0),
(124, NULL, 3, 2, 0),
(125, NULL, 4, 2, 0),
(126, NULL, 5, 2, 0),
(127, NULL, 0, 3, 0),
(128, NULL, 1, 3, 0),
(129, NULL, 2, 3, 0),
(130, NULL, 3, 3, 0),
(131, NULL, 4, 3, 0),
(132, NULL, 5, 3, 0),
(133, NULL, 0, 4, 0),
(134, NULL, 1, 4, 0),
(135, NULL, 2, 4, 0),
(136, NULL, 3, 4, 0),
(137, NULL, 4, 4, 0),
(138, NULL, 5, 4, 0),
(139, NULL, 0, 5, 0),
(140, NULL, 1, 5, 0),
(141, NULL, 2, 5, 0),
(142, NULL, 3, 5, 0),
(143, NULL, 4, 5, 0),
(144, NULL, 5, 5, 0),
(145, NULL, 0, 6, 0),
(146, NULL, 1, 6, 0),
(147, NULL, 2, 6, 0),
(148, NULL, 3, 6, 0),
(149, NULL, 4, 6, 0),
(150, NULL, 5, 6, 0),
(151, NULL, 0, 7, 0),
(152, NULL, 1, 7, 0),
(153, NULL, 2, 7, 0),
(154, NULL, 3, 7, 0),
(155, NULL, 4, 7, 0),
(156, NULL, 5, 7, 0),
(157, NULL, 0, 8, 0),
(158, NULL, 1, 8, 0),
(159, NULL, 2, 8, 0),
(160, NULL, 3, 8, 0),
(161, NULL, 4, 8, 0),
(162, NULL, 5, 8, 0),
(163, NULL, 0, 0, 0),
(164, NULL, 1, 0, 1),
(165, NULL, 2, 0, 0),
(166, NULL, 3, 0, 0),
(167, NULL, 4, 0, 0),
(168, NULL, 5, 0, 0),
(169, NULL, 0, 1, 0),
(170, NULL, 1, 1, 1),
(171, NULL, 2, 1, 0),
(172, NULL, 3, 1, 0),
(173, NULL, 4, 1, 0),
(174, NULL, 5, 1, 0),
(175, NULL, 0, 2, 0),
(176, NULL, 1, 2, 0),
(177, NULL, 2, 2, 0),
(178, NULL, 3, 2, 0),
(179, NULL, 4, 2, 0),
(180, NULL, 5, 2, 0),
(181, NULL, 0, 3, 0),
(182, NULL, 1, 3, 0),
(183, NULL, 2, 3, 0),
(184, NULL, 3, 3, 0),
(185, NULL, 4, 3, 0),
(186, NULL, 5, 3, 0),
(187, NULL, 0, 4, 0),
(188, NULL, 1, 4, 0),
(189, NULL, 2, 4, 0),
(190, NULL, 3, 4, 0),
(191, NULL, 4, 4, 0),
(192, NULL, 5, 4, 0),
(193, NULL, 0, 5, 0),
(194, NULL, 1, 5, 0),
(195, NULL, 2, 5, 0),
(196, NULL, 3, 5, 0),
(197, NULL, 4, 5, 0),
(198, NULL, 5, 5, 0),
(199, NULL, 0, 6, 0),
(200, NULL, 1, 6, 0),
(201, NULL, 2, 6, 0),
(202, NULL, 3, 6, 0),
(203, NULL, 4, 6, 0),
(204, NULL, 5, 6, 0),
(205, NULL, 0, 7, 0),
(206, NULL, 1, 7, 0),
(207, NULL, 2, 7, 0),
(208, NULL, 3, 7, 0),
(209, NULL, 4, 7, 0),
(210, NULL, 5, 7, 0),
(211, NULL, 0, 8, 0),
(212, NULL, 1, 8, 0),
(213, NULL, 2, 8, 0),
(214, NULL, 3, 8, 0),
(215, NULL, 4, 8, 0),
(216, NULL, 5, 8, 0),
(217, NULL, 0, 0, 0),
(218, NULL, 1, 0, 1),
(219, NULL, 2, 0, 0),
(220, NULL, 3, 0, 0),
(221, NULL, 4, 0, 0),
(222, NULL, 5, 0, 0),
(223, NULL, 0, 1, 0),
(224, NULL, 1, 1, 1),
(225, NULL, 2, 1, 0),
(226, NULL, 3, 1, 0),
(227, NULL, 4, 1, 0),
(228, NULL, 5, 1, 0),
(229, NULL, 0, 2, 0),
(230, NULL, 1, 2, 0),
(231, NULL, 2, 2, 0),
(232, NULL, 3, 2, 0),
(233, NULL, 4, 2, 0),
(234, NULL, 5, 2, 0),
(235, NULL, 0, 3, 0),
(236, NULL, 1, 3, 0),
(237, NULL, 2, 3, 0),
(238, NULL, 3, 3, 0),
(239, NULL, 4, 3, 0),
(240, NULL, 5, 3, 0),
(241, NULL, 0, 4, 0),
(242, NULL, 1, 4, 0),
(243, NULL, 2, 4, 0),
(244, NULL, 3, 4, 0),
(245, NULL, 4, 4, 0),
(246, NULL, 5, 4, 0),
(247, NULL, 0, 5, 0),
(248, NULL, 1, 5, 0),
(249, NULL, 2, 5, 0),
(250, NULL, 3, 5, 0),
(251, NULL, 4, 5, 0),
(252, NULL, 5, 5, 0),
(253, NULL, 0, 6, 0),
(254, NULL, 1, 6, 0),
(255, NULL, 2, 6, 0),
(256, NULL, 3, 6, 0),
(257, NULL, 4, 6, 0),
(258, NULL, 5, 6, 0),
(259, NULL, 0, 7, 0),
(260, NULL, 1, 7, 0),
(261, NULL, 2, 7, 0),
(262, NULL, 3, 7, 0),
(263, NULL, 4, 7, 0),
(264, NULL, 5, 7, 0),
(265, NULL, 0, 8, 0),
(266, NULL, 1, 8, 0),
(267, NULL, 2, 8, 0),
(268, NULL, 3, 8, 0),
(269, NULL, 4, 8, 0),
(270, NULL, 5, 8, 0),
(271, NULL, 0, 0, 1),
(272, NULL, 1, 0, 1),
(273, NULL, 2, 0, 0),
(274, NULL, 3, 0, 0),
(275, NULL, 4, 0, 1),
(276, NULL, 5, 0, 0),
(277, NULL, 0, 1, 1),
(278, NULL, 1, 1, 1),
(279, NULL, 2, 1, 0),
(280, NULL, 3, 1, 0),
(281, NULL, 4, 1, 0),
(282, NULL, 5, 1, 0),
(283, NULL, 0, 2, 1),
(284, NULL, 1, 2, 0),
(285, NULL, 2, 2, 0),
(286, NULL, 3, 2, 0),
(287, NULL, 4, 2, 0),
(288, NULL, 5, 2, 0),
(289, NULL, 0, 3, 1),
(290, NULL, 1, 3, 0),
(291, NULL, 2, 3, 0),
(292, NULL, 3, 3, 1),
(293, NULL, 4, 3, 1),
(294, NULL, 5, 3, 0),
(295, NULL, 0, 4, 1),
(296, NULL, 1, 4, 1),
(297, NULL, 2, 4, 0),
(298, NULL, 3, 4, 1),
(299, NULL, 4, 4, 1),
(300, NULL, 5, 4, 0),
(301, NULL, 0, 5, 1),
(302, NULL, 1, 5, 1),
(303, NULL, 2, 5, 0),
(304, NULL, 3, 5, 0),
(305, NULL, 4, 5, 1),
(306, NULL, 5, 5, 0),
(307, NULL, 0, 6, 1),
(308, NULL, 1, 6, 1),
(309, NULL, 2, 6, 0),
(310, NULL, 3, 6, 0),
(311, NULL, 4, 6, 1),
(312, NULL, 5, 6, 0),
(313, NULL, 0, 7, 0),
(314, NULL, 1, 7, 1),
(315, NULL, 2, 7, 0),
(316, NULL, 3, 7, 0),
(317, NULL, 4, 7, 0),
(318, NULL, 5, 7, 0),
(319, NULL, 0, 8, 0),
(320, NULL, 1, 8, 0),
(321, NULL, 2, 8, 0),
(322, NULL, 3, 8, 0),
(323, NULL, 4, 8, 0),
(324, NULL, 5, 8, 0);

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `day` int(11) NOT NULL,
  `hour` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_10C31F86AA9E377A` (`date`),
  KEY `IDX_10C31F86CB944F1A` (`student_id`),
  KEY `IDX_10C31F86D4D57CD` (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`id`, `date`, `student_id`, `staff_id`, `day`, `hour`) VALUES
(1, NULL, 1, 8, 1, 7),
(2, NULL, 1, 8, 4, 6),
(3, NULL, 1, 8, 3, 4);

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `psw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ufr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `service` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `university` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`id`, `email`, `name`, `first_name`, `psw`, `ufr`, `service`, `job`, `university`) VALUES
(7, 'user@gmail.com', 'user', 'user', '$2y$13$n47wsA6XzbdY2cJuj8ZU0uBm7WSpU3yIBqmhmTHEWFZ7PZo3Kn8KG', 'inf', 'Social', 'secrétaire', 'Université Paris Diderot'),
(8, 'userb@gmail.com', 'userB', 'userB', '$2y$13$D9YDpOOdPPUtKjw1zS2hCOPbgZKmvxI5RB0Z4BJma7H1lHt4fX.ea', 'phy', 'Scolarité', 'Professeur', 'Institut de Physique du Globe de Paris'),
(9, 'userbbb@gmail.com', 'userbbb', 'userbbb', '$2y$13$Sz4kd02UW84xEaRAqzw0Cutha33RdQFmbn0xpZ.gTTCLaZWloTx6S', 'inf', 'Scolarité', 'Professeur', 'Université Paris Diderot');

-- --------------------------------------------------------

--
-- Structure de la table `staff_calendar`
--

DROP TABLE IF EXISTS `staff_calendar`;
CREATE TABLE IF NOT EXISTS `staff_calendar` (
  `staff_id` int(11) DEFAULT NULL,
  `calendar_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `IDX_4CF701E8A40A2C8` (`calendar_id`),
  KEY `IDX_4CF701E8D4D57CD` (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=327 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `staff_calendar`
--

INSERT INTO `staff_calendar` (`staff_id`, `calendar_id`, `id`) VALUES
(8, 271, 273),
(8, 272, 274),
(8, 273, 275),
(8, 274, 276),
(8, 275, 277),
(8, 276, 278),
(8, 277, 279),
(8, 278, 280),
(8, 279, 281),
(8, 280, 282),
(8, 281, 283),
(8, 282, 284),
(8, 283, 285),
(8, 284, 286),
(8, 285, 287),
(8, 286, 288),
(8, 287, 289),
(8, 288, 290),
(8, 289, 291),
(8, 290, 292),
(8, 291, 293),
(8, 292, 294),
(8, 293, 295),
(8, 294, 296),
(8, 295, 297),
(8, 296, 298),
(8, 297, 299),
(8, 298, 300),
(8, 299, 301),
(8, 300, 302),
(8, 301, 303),
(8, 302, 304),
(8, 303, 305),
(8, 304, 306),
(8, 305, 307),
(8, 306, 308),
(8, 307, 309),
(8, 308, 310),
(8, 309, 311),
(8, 310, 312),
(8, 311, 313),
(8, 312, 314),
(8, 313, 315),
(8, 314, 316),
(8, 315, 317),
(8, 316, 318),
(8, 317, 319),
(8, 318, 320),
(8, 319, 321),
(8, 320, 322),
(8, 321, 323),
(8, 322, 324),
(8, 323, 325),
(8, 324, 326);

-- --------------------------------------------------------

--
-- Structure de la table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ine` int(11) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `formation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `university` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B723AF337EE1FA43` (`ine`),
  UNIQUE KEY `UNIQ_B723AF33E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `student`
--

INSERT INTO `student` (`id`, `ine`, `name`, `first_name`, `email`, `password`, `formation`, `university`) VALUES
(1, 123456789, 'mohamed', 'dodaf', 'moh@gmail.com', '$2y$13$vUTwuxqTw6nmoH2CuY/8PeQCSpHom2GkX2YoRMaFwiNDoAQrMfYVa', 'Licence 3 informatique', 'Paris 7 diderot'),
(3, 123456, 'mohamed', 'dsfd', 'mohaxoy98@gmail.com', '$2y$13$Cc/JSse1O.tVMBBr8oIlp.YOGlMzmKWF1fd3w4DL8j6r8T6x2uUqW', 'non renseigné', 'non renseigné'),
(4, 1234567898, 'Souissi', 'Mohamed', 'koutkot@gmail.com', '$2y$13$gMkeQfvukEMfToR7ZxB2t.1qye/w.qHRiu9Rn3XepY5YA4pc663Pa', 'Licence 3 informatique', 'Paris 7 diderot'),
(7, 987654321, 'mohamed', 'dagadaf', 'ok@gmail.com', '$2y$13$EkDE7WzGkhOQeZ.TKksyZOFGwWerym4LPd/Mhqj5Kqhm66jGBfWgu', 'non renseigné', 'non renseigné');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `rdv`
--
ALTER TABLE `rdv`
  ADD CONSTRAINT `FK_10C31F86CB944F1A` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `FK_10C31F86D4D57CD` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);

--
-- Contraintes pour la table `staff_calendar`
--
ALTER TABLE `staff_calendar`
  ADD CONSTRAINT `FK_4CF701E8A40A2C8` FOREIGN KEY (`calendar_id`) REFERENCES `calendar` (`id`),
  ADD CONSTRAINT `FK_4CF701E8D4D57CD` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
