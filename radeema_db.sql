-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 06:13 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radeema_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `dateEvenement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

CREATE TABLE `archives` (
  `idArchive` int(11) NOT NULL,
  `idFile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `idArticle` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `accept` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `admittedAt` datetime NOT NULL,
  `media` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`idArticle`, `title`, `content`, `accept`, `createdAt`, `admittedAt`, `media`) VALUES
(4, 'un peu d\'histoire', '<p>La soci&eacute;t&eacute; d&rsquo;Electricit&eacute; de Marrakech est constitu&eacute;e le 27 juin 1922.</p>\r\n\r\n<p>Le 17 juillet 1964, la ville de Marrakech a sign&eacute; un protocole pour le rachat de la concession, laquelle fut confi&eacute;e &agrave; la Soci&eacute;t&eacute; Marocaine de Distribution (SMD) Le 26 D&eacute;cembre 1970 et suite aux d&eacute;lib&eacute;rations du conseil communal de la vile de Marrakech, il a &eacute;t&eacute; d&eacute;cid&eacute; de cr&eacute;er &agrave; partir du premier janvier 1971, la R&eacute;gie Autonome de Distribution d&rsquo;Eau et d&rsquo;Electricit&eacute; de Marrakech, d&eacute;nomm&eacute;e RADEEMA et ce en en vertu du D&eacute;cret n&deg; 2-64-394 du 29 Septembre 1964 relatif aux R&eacute;gies communales. Le premier janvier 1998, la RADEEMA a pris en charge la gestion du service de l&rsquo;assainissement liquide suite aux d&eacute;lib&eacute;rations de la communaut&eacute; urbaine de Marrakech.</p>\r\n\r\n<p>Le 09 Juillet 2010, la RADEEMA est pass&eacute;e au contr&ocirc;le d&#39;accompagnement en substitution du contr&ocirc;le pr&eacute;alable conform&eacute;ment aux dispositions de l&#39;article 18 de la loi 69.00.</p>\r\n', 1, '2026-06-21 11:08:01', '0000-00-00 00:00:00', '1625151719-radeema_005.jpg'),
(5, 'test1', '<p>gggggggggggggbbb</p>\r\n', 1, '2026-06-21 01:10:38', '0000-00-00 00:00:00', 'e-invest_radeema.png'),
(6, 'Communiqué coronavirus', '', 0, '2028-06-21 04:11:13', '0000-00-00 00:00:00', ''),
(7, 'Mot du Directeur Général', '<p>Consciente de l&rsquo;importance capitale que rev&ecirc;t la gestion des m&eacute;tiers de la distribution de l&rsquo;Eau Potable, de l&rsquo;Electricit&eacute;, de l&rsquo;Assainissement Liquide et la protection de l&rsquo;environnement dans la vie quotidienne du citoyen et dans le d&eacute;veloppement &eacute;conomique et social des Collectivit&eacute;s Locales, la R&eacute;gie Autonome de Distribution d&rsquo;Electricit&eacute;&nbsp;et d&rsquo;Eau de Marrakech t&eacute;moigne du fort labeur de ses collaborateurs engag&eacute;s pour assurer le meilleur des services pour les habitants de Marrakech et de ses visiteurs, offrant ainsi les conditions favorables pour l&rsquo;&eacute;panouissement socio-&eacute;conomique et le d&eacute;veloppement durable de la ville, de la R&eacute;gion et du Royaume.</p>\r\n\r\n<p>Tout au long des ann&eacute;es 2018 et 2019 et &agrave;&nbsp;travers l&rsquo;ach&egrave;vement et le d&eacute;marrage de grands projets mobilisateurs, nous avons orient&eacute;&nbsp;tous nos programmes et actions pour nourrir notre ambition de positionner la RADEEMA parmi les grandes entreprises du Royaume.</p>\r\n\r\n<p>Cette vision conditionn&eacute;e pat le strict respect du Code Marocain de Bonnes Pratiques de Gouvernance, nous a permis de satisfaire les exigences de l&rsquo;ensemble de nos parties int&eacute;ress&eacute;es et d&rsquo;assurer une exploitation optimale de notre infrastructure tout en garantissant son renforcement.</p>\r\n\r\n<p>Nous avons &oelig;uvr&eacute;&nbsp;au quotidien &agrave;&nbsp;instaurer une nouvelle culture plus coh&eacute;rente, ax&eacute;e sur le respect de nos valeurs, exigeant de nous une citoyennet&eacute;&nbsp;plus exemplaire et une ligne de conduite marqu&eacute;e par l&rsquo;&eacute;quit&eacute;&nbsp;dans nos d&eacute;cisions, l&rsquo;am&eacute;lioration continue, l&rsquo;&eacute;thique et la transparence dans nos relations.</p>\r\n\r\n<p>Cette culture constitue aussi un levier majeur dans la concr&eacute;tisation de nos objectifs visant plus particuli&egrave;rement la g&eacute;n&eacute;ralisation de l&rsquo;acc&egrave;s &agrave;&nbsp;nos services de base, enregistrant une am&eacute;lioration des taux de desserte ainsi que l&rsquo;am&eacute;lioration du rendement de nos r&eacute;seaux. Par ailleurs, nous avons continu&eacute;&nbsp;&agrave;&nbsp;concr&eacute;tiser nos programmes de d&eacute;veloppement par le lancement de nouveaux projets toujours plus respectueux de notre environnement notamment le projet de s&eacute;chage solaire des boues et l&rsquo;extension de la capacit&eacute;&nbsp;de traitement de la STEP de Marrakech et de sa ligne de valorisation de biogaz par la m&eacute;thanisation des boues d&rsquo;&eacute;puration.</p>\r\n\r\n<p>Nos engagements ont concern&eacute;&nbsp;&eacute;galement la valorisation des boues d&rsquo;&eacute;puration s&eacute;ch&eacute;es comme combustible de substitution dans l&rsquo;industrie de fabrication du ciment par la signature d&rsquo;un protocole d&rsquo;accord faisant ainsi de ce d&eacute;chet une source d&rsquo;&eacute;nergie alternative.</p>\r\n', 0, '2028-06-21 04:12:07', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `idFile` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `createdAt` datetime NOT NULL,
  `draft` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`idFile`, `link`, `createdAt`, `draft`, `title`) VALUES
(1, 'Array', '2030-06-21 02:10:46', 1, 'commun'),
(2, '60dc69f5630891.37884607.pdf', '2030-06-21 02:56:21', 1, 'test'),
(3, '60dc6a61924fd1.86485708.jpg', '2030-06-21 02:58:09', 1, 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `idMedia` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `alt` varchar(60) NOT NULL,
  `description` varchar(500) NOT NULL,
  `createdAt` datetime NOT NULL,
  `idArticle` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`idMedia`, `link`, `alt`, `description`, `createdAt`, `idArticle`, `type`) VALUES
(1, 'upload/thumbnails/article1.jpg', 'histoire de la radeema', '', '2021-06-28 16:31:01', 4, 'thumbnail'),
(2, 'upload/thumbnails/article1.jpg', 'histoire de la radeema', '', '2021-06-28 16:31:01', 5, 'main');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `idPage` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  `show_in_menu` tinyint(1) NOT NULL,
  `draft` tinyint(1) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `idmedia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`idPage`, `title`, `parent_id`, `path`, `show_in_menu`, `draft`, `createdAt`, `updatedAt`, `idmedia`) VALUES
(6, 'faq', NULL, NULL, 0, 1, '2021-06-21 01:20:50', '2021-06-21 01:20:50', NULL),
(7, 'about', NULL, NULL, 1, 0, '2021-06-21 06:28:27', '2021-06-21 06:28:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL,
  `title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`idRole`, `title`) VALUES
(1, 'admin général'),
(2, 'admin secondaire'),
(3, 'rédacteur');

-- --------------------------------------------------------

--
-- Table structure for table `roles_of_users`
--

CREATE TABLE `roles_of_users` (
  `idUser` int(11) NOT NULL,
  `idRole` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles_of_users`
--

INSERT INTO `roles_of_users` (`idUser`, `idRole`) VALUES
(29, 1),
(30, 2),
(31, 2),
(35, 2),
(36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(11) NOT NULL,
  `sessions` int(11) NOT NULL,
  `visitors` int(11) NOT NULL,
  `day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL,
  `reset_pswd_token` varchar(20) DEFAULT NULL,
  `reset_token_sent_at` date DEFAULT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `username`, `email`, `password`, `createdAt`, `reset_pswd_token`, `reset_token_sent_at`, `image`) VALUES
(29, 'lkefk', 'ldkf@c.com', '$2y$10$0POERkW0DcxWQx8K2GxUO.ecmZb8b5lL6/Z94MUA8Wp', '2025-06-21 03:26:19', NULL, NULL, ''),
(30, 'laila', 'laila.sadelbouyoud@gmail.com', '$2y$10$NHNNATr1XUfVgSYNgdp5Vu8Wglks78.FsdMcYBtTZtc', '2023-06-21 01:11:56', NULL, NULL, ''),
(31, 'test1', 'test@gmail.com', '$2y$10$.xVYPFROhGLNC8ZXvxTmzuqLnSHUxoteht6EDlhM2Kj', '2023-06-21 01:12:34', NULL, NULL, ''),
(33, 'laila', 'laila@gmail.com', '$2y$10$g4LdQm2h/B2sHxvFO5OEOet1iI7BrvyDzFD9lvPmF66nfvqg22nyO', '2025-06-21 03:26:13', NULL, NULL, ''),
(35, 'laila', 'klefd@s.s', '$2y$10$hVaxUxtDWCysaDGG3mOTde3wSe9qKjfOpvCUF.8OvxJarO0wyy3sG', '2025-06-21 03:25:30', NULL, NULL, ''),
(36, 'jkzs', 'srfdfg@dgfg.f', '$2y$10$S8fqNRhX2Vhlx5MLdRbI9ehCc.3peT7gc2dHIUIjZezMkELhArRj.', '2025-06-21 03:26:25', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`) VALUES
(1, '127.0.0.1'),
(2, '127.0.0.1'),
(3, '127.0.0.1'),
(4, '127.0.0.1'),
(5, '::1'),
(6, '::1'),
(7, '::1'),
(8, '::1'),
(9, '127.0.0.1'),
(10, '::1'),
(11, '::1'),
(12, '::1'),
(13, '::1'),
(14, '::1'),
(15, '127.0.0.1'),
(16, '::1'),
(17, '::1'),
(18, '::1'),
(19, '::1'),
(20, '::1'),
(21, '::1'),
(22, '::1'),
(23, '::1'),
(24, '::1'),
(25, '::1'),
(26, '127.0.0.1'),
(27, '::1'),
(28, '::1'),
(29, '127.0.0.1'),
(30, '::1'),
(31, '::1'),
(32, '::1'),
(33, '::1'),
(34, '::1'),
(35, '127.0.0.1'),
(36, '127.0.0.1'),
(37, '::1'),
(38, '127.0.0.1'),
(39, '::1'),
(40, '::1'),
(41, '127.0.0.1'),
(42, '::1'),
(43, '::1'),
(44, '::1'),
(45, '::1'),
(46, '::1'),
(47, '127.0.0.1'),
(48, '127.0.0.1'),
(49, '::1'),
(50, '127.0.0.1'),
(51, '::1'),
(52, '::1'),
(53, '127.0.0.1'),
(54, '::1'),
(55, '::1'),
(56, '::1'),
(57, '::1'),
(58, '::1'),
(59, '127.0.0.1'),
(60, '127.0.0.1'),
(61, '::1'),
(62, '::1'),
(63, '::1'),
(64, '127.0.0.1'),
(65, '127.0.0.1'),
(66, '::1'),
(67, '127.0.0.1'),
(68, '::1'),
(69, '::1'),
(70, '127.0.0.1'),
(71, '::1'),
(72, '::1'),
(73, '::1'),
(74, '::1'),
(75, '::1'),
(76, '::1'),
(77, '::1'),
(78, '::1'),
(79, '::1'),
(80, '::1'),
(81, '::1'),
(82, '::1'),
(83, '127.0.0.1'),
(84, '::1'),
(85, '127.0.0.1'),
(86, '::1'),
(87, '::1'),
(88, '::1'),
(89, '::1'),
(90, '::1'),
(91, '::1'),
(92, '127.0.0.1'),
(93, '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`idArchive`),
  ADD KEY `fk_idfile` (`idFile`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`idArticle`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`idFile`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`idMedia`),
  ADD KEY `fk_idart` (`idArticle`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`idPage`),
  ADD KEY `fk_idmedia` (`idmedia`),
  ADD KEY `fk_idpage` (`parent_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `roles_of_users`
--
ALTER TABLE `roles_of_users`
  ADD KEY `fk_iduser` (`idUser`),
  ADD KEY `fk_idrole` (`idRole`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `idArchive` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `idFile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `idMedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `idPage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `archives`
--
ALTER TABLE `archives`
  ADD CONSTRAINT `fk_idfile` FOREIGN KEY (`idFile`) REFERENCES `files` (`idFile`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `fk_idart` FOREIGN KEY (`idArticle`) REFERENCES `articles` (`idArticle`);

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `fk_idmedia` FOREIGN KEY (`idmedia`) REFERENCES `media` (`idMedia`),
  ADD CONSTRAINT `fk_idpage` FOREIGN KEY (`parent_id`) REFERENCES `pages` (`idPage`);

--
-- Constraints for table `roles_of_users`
--
ALTER TABLE `roles_of_users`
  ADD CONSTRAINT `fk_idrole` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`),
  ADD CONSTRAINT `fk_iduser` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
