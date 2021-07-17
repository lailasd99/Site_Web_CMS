-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 12:33 PM
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
  `description` text NOT NULL,
  `date1` date NOT NULL,
  `date2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `title`, `description`, `date1`, `date2`) VALUES
(13, 'atelier sur le changement climatique 2014', 'La régie autonome de distribution d\'eau et d\'électricité organise les 16 et 17 Mars 2016, un atelier sur le changement climatique et son impact sur le développement de la ville de Marrakech.', '2014-03-16', '2014-03-17'),
(14, 'atelier sur le changement climatique 2016', 'La régie autonome de distribution d\'eau et d\'électricité organise les 16 et 17 Mars 2016, un atelier sur le changement climatique et son impact sur le développement de la ville de Marrakech.', '2016-03-16', '2016-03-17');

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
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `accept` int(11) NOT NULL DEFAULT 0,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `admittedAt` datetime NOT NULL,
  `media` varchar(100) NOT NULL,
  `notif_active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`idArticle`, `title`, `content`, `accept`, `createdAt`, `admittedAt`, `media`, `notif_active`) VALUES
(9, 'Politique de sécurité de l\'information', '<p><strong>Politique Acrr&eacute;ditation ISO 27001</strong></p>', 1, '2020-07-21 13:23:28', '2020-07-21 13:23:00', '1626513538-article (2).jpg', 0),
(10, 'Politique Tahssine', '<p>Politique Tahssine</p>', 1, '2020-07-21 13:23:56', '2020-07-21 13:23:00', '1626513638-article (12).jpg', 0),
(11, 'Communiqué Coronavirus', '<p><strong>Coronavirus COVID-19:</strong></p>\r\n<p><strong>RADEEMA instaure des mesures pr&eacute;ventives pour assurer la continuit&eacute; des services</strong></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Marrakech, 26 Mars 2020</p>\r\n<p>&nbsp;</p>\r\n<p>Suite&nbsp;aux r&eacute;centes &eacute;volutions du Coronavirus Covid-19, et dans le cadre des mesures de pr&eacute;vention et de protection adopt&eacute;es sur le plan national dans le but de lutter contre la propagation de cette &eacute;pid&eacute;mie, la&nbsp;R&eacute;gie Autonome de Distribution d&rsquo;Eau et d&rsquo;&eacute;lectricit&eacute; de Marrakech (RADEEMA)&nbsp;a mis en place, depuis le 23 mars 2020, un dispositif visant &agrave; assurer la continuit&eacute; des services et &agrave; limiter au strict minimum les d&eacute;placements des clients &agrave; ses agences.</p>\r\n<p>&nbsp;</p>\r\n<p>Ainsi, et durant toute la p&eacute;riode de l&rsquo;&eacute;tat d&rsquo;urgence sanitaire, la RADEEMA a d&eacute;cid&eacute; de surseoir certaines activit&eacute;s &agrave; domicile notamment, le relev&eacute; d&rsquo;index des compteurs, la distribution des factures de consommation et l&rsquo;encaissement &agrave; domicile.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Cependant, elle annonce que les interventions planifi&eacute;es pour entretien des r&eacute;seaux, durant cette p&eacute;riode, seront limit&eacute;es aux travaux de maintenance absolument essentiels et urgents. Des &eacute;quipes d&rsquo;intervention permanentes veilleront &agrave; la continuit&eacute; de l&rsquo;alimentation en &eacute;lectricit&eacute; et en eau potable dans les meilleures conditions de qualit&eacute; de service.&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Par ailleurs, soucieuse de la protection de ses clients et ses collaborateurs dans ces circonstances exceptionnelles actuelles, la RADEEMA adopte les mesures barri&egrave;res requises en mati&egrave;re d&rsquo;hygi&egrave;ne de s&eacute;curit&eacute; au niveau de ses agences et points d&rsquo;encaissement notamment, l&rsquo;acc&egrave;s simultan&eacute; &agrave; 5 visiteurs au maximum.</p>\r\n<p>&nbsp;</p>\r\n<p>Cependant, la R&eacute;gie renforce son dispositif &agrave; distance pour la prise en charge de toutes les demandes d&rsquo;intervention ou de r&eacute;clamations de ses clients.&nbsp;Au menu de ces solutions, disponibles 24h/24 et 7j/7&nbsp;: le Centre Relation Client au num&eacute;ro&nbsp;080 2000 123&nbsp;ou&nbsp;05 24 42 43 00,&nbsp;l&rsquo;Agence en ligne sur le Portail&nbsp;www.radeema.ma&nbsp;ainsi que l&rsquo;application&nbsp;RADEEMA&nbsp;Mobile disponible sur Android. Par ailleurs, les clients peuvent &eacute;galement utiliser le e-banking&nbsp;et&nbsp;&nbsp;m-banking&nbsp;sur les portails et les applications mobiles ou dans les&nbsp;guichets automatiques bancaires des banques partenaires.</p>\r\n<p>&nbsp;</p>\r\n<p>Toutes ces mesures repr&eacute;sentent un gage de l&rsquo;implication effective de la&nbsp;RADEEMA&nbsp;au plan d&rsquo;urgence&nbsp;de la sant&eacute; publique, tout en rassurant les citoyens de son engagement &agrave; garantir quotidiennement la continuit&eacute; des prestations, la gestion optimale des r&eacute;seaux et la qualit&eacute; des services&nbsp;rendus aux habitants de la cit&eacute; ocre.</p>', 1, '2020-05-27 13:04:00', '2020-05-27 13:04:00', '1626513652-article (13).jpg', 0),
(13, 'Participation de la RADEEMA à la rencontre de communication.', '<p>Dans le cadre de la rencontre de communication, organis&eacute;e le 28 janvier 2020, autour du programme national d&rsquo;approvisionnement en eau potable et d&rsquo;irrigation 2020 &ndash; 2027, dont le coup d&rsquo;envoi a &eacute;t&eacute; donn&eacute; par Sa Majest&eacute; le Roi Mohammed VI, pour une enveloppe budg&eacute;taire de 115,4 milliards de DH, Le Directeur de la R&eacute;gie par Int&eacute;rim, Monsieur Salah Eddine MOUNTASSIR a pr&eacute;sent&eacute; un expos&eacute; sur &laquo;&nbsp;le traitement et la r&eacute;utilisation des eaux us&eacute;es et son r&ocirc;le dans la pr&eacute;servation des ressources en eaux &agrave; Marrakech&nbsp;&raquo;.</p>\r\n<p>Cette rencontre tenue en pr&eacute;sence des gouverneurs des provinces relevant de la r&eacute;gion, des &eacute;lus, des responsables des services ext&eacute;rieurs, des repr&eacute;sentants de la soci&eacute;t&eacute; civile ainsi que d&rsquo;autres personnalit&eacute;s, a &eacute;t&eacute; marqu&eacute;e par la pr&eacute;sentation d&rsquo;une s&eacute;rie d&rsquo;autres expos&eacute;s exhaustifs concernant, entre autres, &laquo; le d&eacute;veloppement de l&rsquo;offre hydrique &agrave; travers les barrages &raquo;, &laquo; les programmes national et r&eacute;gional sur l&rsquo;&eacute;conomie et la promotion de l&rsquo;eau dans le domaine agricole &raquo;, et &laquo; le programme d&rsquo;approvisionnement en eau potable en milieu rural &raquo;.</p>', 1, '2020-02-03 14:46:38', '2020-02-03 14:46:38', '1626513783-article (5).jpg', 0),
(14, 'Célébration de la Journée Mondiale de la Protection des Données', '<p>Dans le cadre de la continuit&eacute; de ses actions en mati&egrave;re de communication interne et &agrave; l&rsquo;occasion de la Journ&eacute;e Mondiale de la Protection des Donn&eacute;es, la RADEEMA a organis&eacute; le 28 janvier 2020 une conf&eacute;rence en faveur de ses collaborateurs sous th&egrave;me : LA PROTECTION DES DONN&Eacute;ES &Agrave; CARACT&Egrave;RE PERSONNEL: Quels enjeux de conformit&eacute; pour la RADEEMA ?</p>\r\n<p>&nbsp;</p>\r\n<p>Avec l&rsquo;essor des nouvelles technologies, de nombreuses informations personnelles sont enregistr&eacute;es chaque jour dans des fichiers, communiqu&eacute;es &agrave; des tiers et rapproch&eacute;es avec d&rsquo;autres donn&eacute;es &agrave; des fins diverses, d&rsquo;o&ugrave; l&rsquo;importance aujourd&rsquo;hui de sensibiliser les collaborateurs sur la protection de leurs donn&eacute;es personnelles et du respect de leur vie.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Intervenants :</strong></p>\r\n<p>- Mr Zouhir ALMAI</p>\r\n<p>Cofounder &amp; IT, Security, data center expert, Ing&eacute;nieur d&rsquo;&eacute;tat, Executive MBA, certifi&eacute; CISSP | CISM | CRISC | DCIE | DCOM | DCTP | DCA | ISO 27001LA &amp; LI</p>\r\n<p>&nbsp;</p>\r\n<p>- Mr Jaouad BENABBOU</p>\r\n<p>Ing&eacute;nieur d&rsquo;&eacute;tat, PHD en s&eacute;curit&eacute; SI/SDN, certifi&eacute; CISSP | CISM | ISO 27001LA &amp; LI, RSSI de la RADEEMA.</p>', 1, '2020-02-03 14:38:46', '2020-02-03 14:38:46', '1626452943-article (6).jpg', 0),
(15, 'RADEEMA lance la 8ème édition ', '<div>La R&eacute;gie Autonome de Distribution d\'Eau et d\'Electricit&eacute; Marrakech a lanc&eacute;, mardi 24 septembre, la distribution d&rsquo;un pack de 800 de cartables et de fournitures scolaires &agrave; l\'intention de 800 &eacute;coliers &nbsp;dans les quartiers d&eacute;favoris&eacute;s de la cit&eacute; ocre.</div>\r\n<div>&nbsp;</div>\r\n<div>Les &eacute;coles cibl&eacute;es par cette initiative sont : l&rsquo;&eacute;cole Abdel Wahed Marrakchi, l&rsquo;&eacute;cole Mohamed El Bakkal, l&rsquo;&eacute;cole Abdallah Ben Yassin, l&rsquo;&eacute;cole Al Wahda, l&rsquo;&eacute;cole Al Msalla, l&rsquo;&eacute;cole Sidi Youssef Ben Ali,&nbsp;l&rsquo;&eacute;cole&nbsp;Soukaina,&nbsp;l&rsquo;&eacute;cole Chouhadaa,&nbsp;l&rsquo;&eacute;cole Al Inbiath et l\'&eacute;cole Oumnia Bent Wahab.</div>\r\n<div>&nbsp;</div>\r\n<div>Le Directeur G&eacute;n&eacute;ral par Int&eacute;rim, Salaheddine Mountassir, a d&eacute;clar&eacute;, &agrave; travers cette huiti&egrave;me &eacute;dition Cartable pour tous, organis&eacute;e en collaboration avec la Direction Provinciale de l&rsquo;&Eacute;ducation Nationale de Marrakech, que cette initiative s&rsquo;inscrit dans l\'implication dans l\'am&eacute;lioration des conditions de scolarisation.&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Il a affirm&eacute; que la R&eacute;gie effectue &eacute;galement divers autres actions sociales, notamment la campagne de collecte de sang &agrave; laquelle plus de 400 agents ont particip&eacute;, contribuant ainsi &agrave; l\'enrichissement de la R&eacute;serve R&eacute;gionale de cette substance vitale.&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Lien : Pour visualiser les vid&eacute;os cliquez ici.</div>\r\n<div><a href=\"https://www.youtube.com/watch?v=iy-xSLxtuCE\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.youtube.com/watch?v%3Diy-xSLxtuCE&amp;source=gmail&amp;ust=1572090610818000&amp;usg=AFQjCNH12IG-eeOuuOX4WvU5uVa2r5OFmg\">https://www.youtube.com/watch?<wbr />v=iy-xSLxtuCE</a></div>\r\n<div><a href=\"https://www.youtube.com/watch?v=s_hScOKVMK0\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.youtube.com/watch?v%3Ds_hScOKVMK0&amp;source=gmail&amp;ust=1572090610818000&amp;usg=AFQjCNELjPya-iOJit4pstUXganQc6VxEQ\">https://www.youtube.com/watch?<wbr />v=s_hScOKVMK0</a></div>', 1, '2019-10-23 14:44:45', '2019-10-23 14:44:45', '1626453003-article (7).jpg', 0),
(16, 'Journée RADEEMA pour les Donneurs de Sang»', '<div>\r\n<div><strong>Un rendez-vous annuel qui renforce les fondamentaux de l\'esprit de l\'entreprise citoyenne.</strong></div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Dans le cadre de son ouverture continue sur son environnement social, et dans le cadre de son implication dans le succ&egrave;s de toutes les initiatives &agrave; caract&egrave;re humanitaire et social, la R&eacute;gie Autonome de Distribution d\'Eau et d\'Electricit&eacute; Marrakech a ouvert ses portes jeudi 19 juillet 2019 au si&egrave;ge situ&eacute; sur le boulevard Mohammed VI, organisant une journ&eacute;e de Don de Sang et contribuant ainsi largement &agrave; l\'enrichissement de la R&eacute;serve R&eacute;gionale de cette substance vitale.</div>\r\n<div>&nbsp;</div>\r\n<div>La &laquo;Journ&eacute;e des Donneurs de Sang RADEEMA&raquo; portait cette ann&eacute;e le slogan &laquo;Une goutte de votre sang peut sauver une vie&raquo; et a vu la participation de 400 cadres et agents, repr&eacute;sentant toutes les agences commerciales &agrave; Marrakech, ainsi que le corps administratif et technique, apr&egrave;s s\'&ecirc;tre lourdement et spontan&eacute;ment impliqu&eacute;s dans le succ&egrave;s de cet &eacute;v&eacute;nement important. Cette date est devenue un rendez-vous annuel, s\'ajoutant aux initiatives sociales et humanitaires similaires parrain&eacute;es par la R&eacute;gie Autonome de Distribution d\'Eau et d\'Electricit&eacute; Marrakech.</div>\r\n<div>&nbsp;</div>\r\n<div>Pour la &laquo;Journ&eacute;e des Donneurs de Sang RADEEMA&raquo;, cette ann&eacute;e, la R&eacute;gie a allou&eacute; un espace sp&eacute;cial, renforc&eacute; par les &eacute;quipements m&eacute;dicaux n&eacute;cessaires fournis par le Centre R&eacute;gional de la Transfusion Sanguine, parall&egrave;lement &agrave; la supervision effective d&rsquo;une &eacute;quipe m&eacute;dicale int&eacute;gr&eacute;e, qui a permis de cr&eacute;er un mini centre m&eacute;dical respectant les normes &eacute;tablies et permettant aux superviseurs de l\'initiative une organisation bien structur&eacute;e et r&eacute;fl&eacute;chie qui veille &agrave; ce que les donneurs arrivent pendant la journ&eacute;e sans heurts et r&eacute;guli&egrave;rement.</div>\r\n<div>&nbsp;</div>\r\n<div>Il convient de noter que les initiatives &agrave; caract&egrave;re social et humanitaire dont s&rsquo;investit la RADEEMA, s\'inscrivent dans le cadre du programme d\'entreprise citoyenne, qui comprend un ensemble d\'activit&eacute;s et d\'initiatives et de d&eacute;veloppement social.</div>\r\n</div>\r\n<div>&nbsp;</div>\r\n<div>Lien : Pour visualiser la vid&eacute;o cliquez ici.</div>\r\n<div><a href=\"https://www.youtube.com/watch?v=Gmza1Smm2i8\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.youtube.com/watch?v%3DGmza1Smm2i8&amp;source=gmail&amp;ust=1572003542672000&amp;usg=AFQjCNHR5gNXmxUX780574qMQXQhg-J95Q\">https://www.youtube.com/watch?<wbr />v=Gmza1Smm2i8</a></div>', 1, '2019-10-23 14:44:17', '2019-10-23 14:44:17', '1626453103-article (8).jpg', 0),
(17, 'RADEEMA - CIMAT', '<p><strong>une nouvelle &eacute;tape dans le processus de traitement et de valorisation des boues d\'&eacute;puration de Marrakech.</strong></p>\r\n<p>&nbsp;</p>\r\n<div>A rappeler que la station de s&eacute;chage solaire des boues d\'&eacute;puration RADEEMA, mise en service en Mai 2018, constitue une pi&egrave;ce ma&icirc;tresse du processus de traitement et de valorisation adopt&eacute;s par le grand projet de traitement et de r&eacute;utilisation des eaux us&eacute;es de Marrakech, d\'ailleurs enregistr&eacute; par les Nations Unies (UNFCCC), en 2010, comme projet MDP.</div>\r\n<div>Premi&egrave;re de son genre en Afrique et la plus grande &agrave; l\'&eacute;chelle plan&eacute;taire, l\'unit&eacute; de s&eacute;chage solaire de Marrakech permet le traitement de plus de 200 tonnes par jour de boues d\'&eacute;puration, sur une superficie de 10 hectares et pour un investissement de 147 Millions de Dirhams.</div>\r\n<div>Une pur concentr&eacute; d\'innovation, cette usine, &agrave; travers ses 40 serres de 1440 m2 chacune, dont 28 serres pour le s&eacute;chage solaire munies d\'&eacute;quipements de haute pr&eacute;cision pour le retournement et l\'a&eacute;ration des boues, permet de porter &agrave; 80% la siccit&eacute; des boues extraites au lieu de 20% enregistr&eacute;e actuellement &agrave; leurs sortie de la STEP et de r&eacute;aliser une &eacute;conomie de 5 MW par jour d\'&eacute;nergie thermique.</div>', 1, '2019-10-23 14:44:17', '2019-10-23 14:44:17', '1626453045-article (9).jpg', 0),
(18, 'RADEEMA a maintenu pour la 6ème année consécutive sa triple certification', '<p>Triple certifi&eacute;e depuis 2013 par l&rsquo;organisme de certification IMANORpour les activit&eacute;s de distribution d\'&eacute;lectricit&eacute;, d\'eau potable et la gestion d\'assainissement liquide sur l\'ensemble de ses sites, la RADEEMA s&rsquo;est investieau quotidien &agrave; mettre &agrave; l&rsquo;&eacute;preuve son SMI l&rsquo;inscrivant dans une dynamique volontariste de d&eacute;veloppement durable articul&eacute;e autour de la bonne gouvernance, la coh&eacute;sion sociale et l&rsquo;am&eacute;lioration continue des performances. Aujourd&rsquo;hui et apr&egrave;s la migration en 2017 vers les versions 2015 des normes ISO 9001 et 14001 et leur maintien en 2018,&nbsp; la RADEEMA a permis de consolider sa position comme l&rsquo;un des rares &eacute;tablissements publics marocains &agrave; avoir un Syst&egrave;me de Management Int&eacute;gr&eacute; par la Qualit&eacute;, la S&eacute;curit&eacute; et l&rsquo;Environnement r&eacute;pondant aux normes nationales et internationales les plus &eacute;labor&eacute;es.<br />A ce titre et gr&acirc;ce &agrave; ce parcours triomphant de la R&eacute;gie vers l&rsquo;excellence, la RADEEMA s&rsquo;est vue d&eacute;cern&eacute;e trois distinctions internationales successives (International QualitySummitAward) : &agrave; Gen&egrave;ve en Mars 2014, &agrave; New York Juin 2016 et Frankfort en Juin 2017.<br />Dans cette optique, et en confirmation de ses engagements, la RADEEMA continue son d&eacute;veloppement par la programmation d&rsquo;un large programme d&rsquo;investissement, touchant de mani&egrave;re proactive la protection de l&rsquo;environnement et la gestion durable des ressources hydriques. En effet, la R&eacute;gie de Marrakech, pr&eacute;curseur dans son domaine, et &agrave; l&rsquo;instar de son grand projet de traitement et de r&eacute;utilisation des eaux us&eacute;es et de son extension pr&eacute;vue pour 2019, la RADEEMA a mis en place l&rsquo;une des plus grandes usines de s&eacute;chage solaire des boues &agrave; l&rsquo;&eacute;chelle mondiale. Par ailleurs, d&rsquo;autres mutations ont concern&eacute; le renforcement des infrastructures de base et la modernisation des outils de gestion par la d&eacute;mat&eacute;rialisation des d&eacute;marches, optimisant ainsi la relation avec les clients particuliers, investisseurs et l&rsquo;ensemble des parties int&eacute;ress&eacute;es de la R&eacute;gie.<br />Finalement, ces performances et ces certifications t&eacute;moignent, non seulement de la reconnaissance des engagements de la RADEEMA dans son processus de d&eacute;veloppement durable mais constituent&eacute;galement un moteur et un gage pour l&rsquo;am&eacute;lioration et le progr&egrave;s continu des activit&eacute;s de la R&eacute;gie au service de la satisfaction et le confort du citoyen marrakechi.</p>\r\n<p><br />A propos&hellip;</p>\r\n<p>ISO 9001 : 2015&nbsp; certifiant la conformit&eacute; de la RADEEMA selon les exigences normatives relatives &agrave; un syst&egrave;me de management de la qualit&eacute;. Elle prouve l&rsquo;engagement de la R&eacute;gie &agrave; accro&icirc;tre la satisfaction de leurs clients.</p>\r\n<p>ISO 14001 : 2015&nbsp; certifiant la conformit&eacute; de la RADEEMA selon les exigences normatives relatives &agrave; un syst&egrave;me de management environnemental. Elle prouve l&rsquo;engagement de la R&eacute;gie &agrave; am&eacute;liorer sa performance environnementale.</p>\r\n<p>OHSAS 18001 : 2013&nbsp; certifiant la conformit&eacute; de la RADEEMA selon les exigences normatives relatives &agrave; un syst&egrave;me de management de la sant&eacute; et de la s&eacute;curit&eacute; au travail. Elle prouve l&rsquo;engagement de la R&eacute;gie &agrave; optimiser la gestion des risques, diminuer le nombre des accidents du travail et conformer ses pratiques &agrave; la l&eacute;gislation en cours et &agrave; ses &eacute;volutions.</p>', 1, '2018-08-07 14:11:35', '2018-08-07 14:11:35', '1626453161-article (10).jpg', 0),
(19, 'RADEEMA maintient l’accréditation de son laboratoire d’analyse d’eau potable selon ISO/CEI 17025', '<p>Cinq ans apr&egrave;s l&rsquo;obtention de l\'accr&eacute;ditation ISO 17025:2005, par le Minist&egrave;re de l&rsquo;Industrie, du Commerce, de l&rsquo;investissement et de l&rsquo;Economie Num&eacute;rique, pour les activit&eacute;s de son laboratoire d&rsquo;analyse d&rsquo;eau potable, la RADEEMA r&eacute;affirme encore une fois son engagement en maintenant cette distinction pour un autre cycle d\'accr&eacute;ditation. &nbsp;<br />En effet, le maintien de cetteaccr&eacute;ditation, sur avis favorable de la commission d&rsquo;accr&eacute;ditation des laboratoires d&rsquo;analyse relevant du Minist&egrave;re sus cit&eacute;, constitue une &eacute;tape importante dans le processus d&rsquo;am&eacute;lioration continue de la qualit&eacute; des services rendus par la R&eacute;gie aux citoyens de la cit&eacute; ocre et confirme la comp&eacute;tence de son &eacute;quipe ainsi que la validit&eacute; deses m&eacute;thodes d&rsquo;analyses utilis&eacute;es pour statuer sur la qualit&eacute; de l\'eau distribu&eacute;e.<br />A ce titre, les prestations d&rsquo;analyses audit&eacute;es lors de la cinqui&egrave;me &eacute;valuation de surveillance d&rsquo;accr&eacute;ditation, concerne celles relevant du domaine des analyses physico-chimiques sur les eaux potables. Les r&eacute;sultats de cette &eacute;valuation confirment la pr&eacute;sence de la qualit&eacute; exig&eacute;e dans les activit&eacute;s du laboratoire ainsi que dans les proc&eacute;dures, les processus et la conformit&eacute; des r&eacute;sultats.</p>', 1, '2016-08-09 15:35:37', '2016-08-09 15:35:37', '1626452302-article (11).jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`id`, `title`, `description`) VALUES
(2, 'Avis de recrutement 2016', 'Avis de recrutement 2016');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCat` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCat`, `name`) VALUES
(1, 'Espace clientèle'),
(2, 'Espace fournisseurs'),
(3, 'A Propos'),
(4, 'Nos métiers'),
(5, 'Liens Utiles'),
(6, 'Copyrights');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `idCom` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `idArticle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`idCom`, `name`, `email`, `comment`, `createdAt`, `idArticle`) VALUES
(1, 'laila', 'laila@gmail.com', 'test', '2021-07-12 10:29:51', 4),
(2, 'laila', 'laila@gmail.com', 'test', '2021-07-16 12:33:25', 9),
(3, 'ilham', 'df@gmail.com', 'jksd vkdf f', '2021-07-16 12:36:05', 9),
(4, 'edjkjqdqd', 'sdfg@gmail.com', 'lkjhgfds', '2021-07-16 13:35:38', 18),
(5, 'aasdjhf', 'lkjsdf@sdfg.cvb', 'mlkjhgf', '2021-07-16 15:55:53', 9);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `idFile` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `createdAt` datetime DEFAULT current_timestamp(),
  `draft` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `datecom` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`idFile`, `link`, `createdAt`, `draft`, `title`, `datecom`) VALUES
(9, '1626188980-Communiqué CA Décembre 2018.pdf', '2021-07-13 16:09:40', 0, 'Communiqué Conseil d\'Administration Décembre 2018', '2019-01-01'),
(10, '1626189039-communiqué ca Juin 2018 DG_VF_VF (V4).pdf', '2021-07-13 16:10:39', 0, 'Communiqué Conseil d\'Administration Juin 2018', '2018-06-01'),
(11, '1626189065-Comm CA Déc 2017 VS.pdf', '2021-07-13 16:11:05', 0, 'Communiqué Conseil d\'Administration Décembre 2017', '2018-01-01'),
(12, '1626189088-Communiqué 500 VF.pdf', '2021-07-13 16:11:28', 0, 'Communiqué \"Les 500 plus grandes entreprises Marocaines\"', '2017-11-01'),
(13, '1626189120-Communiqué clientèle 2017 (1).pdf', '2021-07-13 16:12:00', 0, 'Communiqué \"L\'excellence opérationnelle au service de la satisfaction des Marrakechis\"', '2017-04-01'),
(14, '1626189160-Communiqué BID2016FR_ARBv5 (1).pdf', '2021-07-13 16:12:40', 0, 'Communiqué \"Le Quality Summit Award - New York\"', '2016-06-01'),
(15, '1626189214-communiqué CA Décembre 2015 (v2).pdf', '2021-07-13 16:13:34', 0, 'Communiqué Conseil d\'Administration Décembre 2015', '2016-06-01'),
(16, '1626189239-COM  Trophé Maroc Tourisme D FR.pdf', '2021-07-13 16:13:59', 0, 'Communiqué \"Trophée Maroc du Tourisme Durable\"', '2016-01-01'),
(17, '1626189265-Communiqué certification QSE.pdf', '2021-07-13 16:14:25', 0, 'Communiqué certification QSE', '2015-11-01'),
(18, '1626189295-Communiqué de presse iso17025 _ 2015.pdf', '2021-07-13 16:14:55', 0, 'Communiqué de presse ISO17025 2015', '2015-11-01'),
(19, '1626189321-communiqué ca Juin 2015ppt.pdf', '2021-07-13 16:15:21', 0, 'Communiqué Conseil d\'Administration Juin 2015', '2015-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `idMenu` int(11) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`idMenu`, `name`) VALUES
(1, 'menu principale'),
(6, 'Menu Footer');

-- --------------------------------------------------------

--
-- Table structure for table `menu_pages`
--

CREATE TABLE `menu_pages` (
  `idMenu` int(11) NOT NULL,
  `idPage` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_pages`
--

INSERT INTO `menu_pages` (`idMenu`, `idPage`, `type`) VALUES
(1, 3, 'categorie'),
(1, 4, 'categorie'),
(1, 36, 'page'),
(1, 37, 'page'),
(1, 38, 'page'),
(6, 5, 'categorie'),
(6, 6, 'categorie');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `idPage` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  `show_in_menu` tinyint(1) DEFAULT NULL,
  `draft` tinyint(1) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedAt` datetime NOT NULL DEFAULT current_timestamp(),
  `content` text NOT NULL,
  `section` int(11) DEFAULT NULL,
  `media` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`idPage`, `title`, `parent_id`, `path`, `show_in_menu`, `draft`, `createdAt`, `updatedAt`, `content`, `section`, `media`) VALUES
(12, 'Régler mes factures', NULL, NULL, 1, 0, '2005-07-21 02:01:15', '2005-07-21 02:01:15', '', 2, ''),
(13, 'Associer mes contrats', NULL, NULL, 1, 0, '2005-07-21 02:01:32', '2005-07-21 02:01:32', '', NULL, ''),
(14, 'Mon compte client', NULL, NULL, 1, 0, '2005-07-21 02:03:57', '2005-07-21 02:03:57', '', 2, ''),
(15, 'Suivi consommation', NULL, NULL, 1, 0, '2005-07-21 02:04:34', '2005-07-21 02:04:34', '', 1, ''),
(16, 'service d\'envoi des factures', NULL, NULL, 1, 0, '2005-07-21 02:07:16', '2005-07-21 02:07:16', '', NULL, ''),
(17, 'Mes réclamations et demandes', NULL, NULL, 1, 0, '2005-07-21 02:07:40', '2005-07-21 02:07:40', '', 1, ''),
(18, 'Ma relation avec la radeema', NULL, NULL, 1, 0, '2005-07-21 02:08:09', '2005-07-21 02:08:09', '', 1, ''),
(20, 'Mot du directeur général', NULL, NULL, 1, 0, '2005-07-21 04:53:07', '2005-07-21 04:53:07', '<p>M. Salah Eddine MOUNTASSIR</p>\r\n<p><strong>Directeur g&eacute;n&eacute;ral P.I. de la RADEEMA</strong></p>\r\n<p>Consciente de l&rsquo;importance capitale que rev&ecirc;t la gestion des m&eacute;tiers de la distribution de l&rsquo;Eau Potable, de l&rsquo;Electricit&eacute;, de l&rsquo;Assainissement Liquide et la protection de l&rsquo;environnement dans la vie quotidienne du citoyen et dans le d&eacute;veloppement &eacute;conomique et social des Collectivit&eacute;s Locales, la R&eacute;gie Autonome de Distribution d&rsquo;Electricit&eacute;&nbsp;et d&rsquo;Eau de Marrakech t&eacute;moigne du fort labeur de ses collaborateurs engag&eacute;s pour assurer le meilleur des services pour les habitants de Marrakech et de ses visiteurs, offrant ainsi les conditions favorables pour l&rsquo;&eacute;panouissement socio-&eacute;conomique et le d&eacute;veloppement durable de la ville, de la R&eacute;gion et du Royaume.</p>\r\n<p>Tout au long des ann&eacute;es 2018 et 2019 et &agrave;&nbsp;travers l&rsquo;ach&egrave;vement et le d&eacute;marrage de grands projets mobilisateurs, nous avons orient&eacute;&nbsp;tous nos programmes et actions pour nourrir notre ambition de positionner la RADEEMA parmi les grandes entreprises du Royaume.</p>\r\n<p>Cette vision conditionn&eacute;e pat le strict respect du Code Marocain de Bonnes Pratiques de Gouvernance, nous a permis de satisfaire les exigences de l&rsquo;ensemble de nos parties int&eacute;ress&eacute;es et d&rsquo;assurer une exploitation optimale de notre infrastructure tout en garantissant son renforcement.</p>\r\n<p>Nous avons &oelig;uvr&eacute;&nbsp;au quotidien &agrave;&nbsp;instaurer une nouvelle culture plus coh&eacute;rente, ax&eacute;e sur le respect de nos valeurs, exigeant de nous une citoyennet&eacute;&nbsp;plus exemplaire et une ligne de conduite marqu&eacute;e par l&rsquo;&eacute;quit&eacute;&nbsp;dans nos d&eacute;cisions, l&rsquo;am&eacute;lioration continue, l&rsquo;&eacute;thique et la transparence dans nos relations.</p>\r\n<p>Cette culture constitue aussi un levier majeur dans la concr&eacute;tisation de nos objectifs visant plus particuli&egrave;rement la g&eacute;n&eacute;ralisation de l&rsquo;acc&egrave;s &agrave;&nbsp;nos services de base, enregistrant une am&eacute;lioration des taux de desserte ainsi que l&rsquo;am&eacute;lioration du rendement de nos r&eacute;seaux. Par ailleurs, nous avons continu&eacute;&nbsp;&agrave;&nbsp;concr&eacute;tiser nos programmes de d&eacute;veloppement par le lancement de nouveaux projets toujours plus respectueux de notre environnement notamment le projet de s&eacute;chage solaire des boues et l&rsquo;extension de la capacit&eacute;&nbsp;de traitement de la STEP de Marrakech et de sa ligne de valorisation de biogaz par la m&eacute;thanisation des boues d&rsquo;&eacute;puration.</p>\r\n<p>Nos engagements ont concern&eacute;&nbsp;&eacute;galement la valorisation des boues d&rsquo;&eacute;puration s&eacute;ch&eacute;es comme combustible de substitution dans l&rsquo;industrie de fabrication du ciment par la signature d&rsquo;un protocole d&rsquo;accord faisant ainsi de ce d&eacute;chet une source d&rsquo;&eacute;nergie alternative.</p>', 3, ''),
(22, 'Nos valeurs', NULL, NULL, 1, 0, '2005-07-21 05:00:37', '2005-07-21 05:00:37', '<p><strong>RADEEMA en bref ...</strong></p>\r\n<p>Le d&eacute;veloppement r&eacute;alis&eacute; tout au long de ces ann&eacute;es aussi bien au niveau des investissements qu&rsquo;au niveau de performances est le signe de la bonne sant&eacute; de notre entreprise. L&rsquo;essor escompt&eacute; &agrave; travers les r&eacute;alisations futures et la taille projet&eacute;e feront certainement de la RADEEMA l&rsquo;entreprise la plus importante dans son secteur d&rsquo;activit&eacute; et par l&agrave;-m&ecirc;me le mod&egrave;le &agrave; suivre.</p>\r\n<p>Les autres activit&eacute;s de la R&eacute;gie connaissent &eacute;galement des niveaux de performances assez remarquables, chacune dans son domaine, maniant habilement l&rsquo;&eacute;quilibre entre l&rsquo;ambition, la s&eacute;r&eacute;nit&eacute;, la s&eacute;curit&eacute; et surtout l&rsquo;enthousiasme.</p>\r\n<p>Ces &eacute;volutions n&rsquo;ont certes pu se concr&eacute;tiser sans la volont&eacute; in&eacute;branlable du top management qui sait surmonter les difficult&eacute;s tout en conjuguant les comp&eacute;tences individuelles et collectives.</p>\r\n<p>Conscient des d&eacute;fis majeurs &agrave; venir, le management a toujours privil&eacute;gi&eacute; la mise en place et l&rsquo;application des valeurs de bonne gestion&nbsp;: responsabilit&eacute; et r&eacute;alisation de soi&nbsp;; travail d&rsquo;&eacute;quipe et solidarit&eacute;&nbsp;; enthousiasme et satisfaction des clients&nbsp;; profitabilit&eacute; et respect de l&rsquo;environnement.</p>\r\n<p>Autant de valeurs qui ont milit&eacute; pour la r&eacute;ussite de nos projets, autant de valeurs qui renforcent notre R&eacute;gie.</p>\r\n<p><a href=\"https://www.radeema.ma/documents/20181/0/Charte+des+valeurs+2016/042e0e6a-015b-4676-85c7-fc2824e19443\">Charte des valeurs</a></p>\r\n<p>&nbsp;</p>', 3, '1626364281-article (13).jpg'),
(23, 'Engagement societal', NULL, NULL, NULL, 0, '2007-07-21 03:58:33', '2007-07-21 03:58:33', '<p><strong>Une responsabilit&eacute; soci&eacute;tale au service du confort des Marrakchis</strong></p>\r\n<p>Dans le but d&rsquo;accompagner l&rsquo;essor de la ville, la RADEEMA a entam&eacute; la r&eacute;alisation d&rsquo;un programme d&rsquo;investissement d&rsquo;envergure d&rsquo;un montant de 1,6 Milliards DH qui s&rsquo;&eacute;tale jusqu&rsquo;&agrave; 2017. Ce programme s&rsquo;inscrivant dans le cadre de la convention, sign&eacute;e le</p>\r\n<p>6 janvier 2014 sous la pr&eacute;sidence effective de Sa Majest&eacute; le Roi Mohamed VI, que Dieu l&rsquo;Assiste, comporte :</p>\r\n<p>Une composante concernant la&nbsp; pr&eacute;servation de l&rsquo;environnement&nbsp; avec une enveloppe de 842&nbsp; Millions DH, incluant&nbsp; essentiellement l&rsquo;extension de la&nbsp; station d&rsquo;&eacute;puration des eaux&nbsp; us&eacute;es, le traitement des boues&nbsp; r&eacute;siduaires, l&rsquo;extension du r&eacute;seau&nbsp; d&rsquo;assainissement, le&nbsp; renouvellement du r&eacute;seau de la&nbsp; m&eacute;dina et la mise en place des&nbsp; collecteurs principaux&nbsp; d&rsquo;assainissement autour de la&nbsp; ville.</p>\r\n<p>Et une deuxi&egrave;me composante&nbsp; relative &agrave; l&rsquo;accompagnement de la&nbsp; mise &agrave; niveau urbaine avec un&nbsp; montant de 758 Millions DH, et ce&nbsp; par notamment de nouveaux&nbsp; r&eacute;servoirs d&rsquo;eau, la mise en place&nbsp; de gros feeders d&rsquo;eau potable&nbsp; autour de la ville, l&rsquo;extension et le&nbsp; renouvellement des r&eacute;seaux d&rsquo;eau&nbsp; et d&rsquo;&eacute;lectricit&eacute;, la construction&nbsp; d&rsquo;un nouveau poste source&nbsp; d&rsquo;&eacute;lectricit&eacute;.</p>', 3, '1626452054-'),
(24, 'Nos métiers', NULL, NULL, NULL, 0, '2007-07-21 04:00:09', '2007-07-21 04:00:09', '<p>Nos Metiers</p>\r\n<p>La Radeema est charg&eacute;e d&rsquo;assurer &agrave; l&rsquo;int&eacute;rieur de son p&eacute;rim&egrave;tre d&rsquo;action les services publics de distribution d&rsquo;eau et d&rsquo;&eacute;lectricit&eacute; ainsi que la gestion du service d&rsquo;assainissement liquide.</p>\r\n<p>Le p&eacute;rim&egrave;tre d&rsquo;intervention de la r&eacute;gie repr&eacute;sente environ 658 km&sup2; et couvre la ville de Marrakech et une partie des communes rurales avoisinantes..</p>\r\n<p style=\"margin: 0px 0px 10px; font-family: Verdana; color: #3c9fdd; font-weight: bold; font-size: 12px; text-align: justify;\">&nbsp;</p>', 4, '1626451994-'),
(26, 'Demarche QSE', NULL, NULL, NULL, 0, '2008-07-21 02:05:45', '2008-07-21 02:05:45', '', 3, ''),
(27, 'Espace Presse', NULL, NULL, NULL, 0, '2008-07-21 02:09:18', '2008-07-21 02:09:18', '<p><strong>RADEEMA presse</strong></p>\r\n<p>Ici vous trouvez les communiqu&eacute;s de presse &agrave; t&eacute;l&eacute;charger :</p>', 3, '1626452121-'),
(28, 'Projets mobilisateurs', NULL, NULL, NULL, 0, '2008-07-21 02:10:30', '2008-07-21 02:10:30', '', 3, ''),
(29, 'Avis d\'appel d\'offre', NULL, NULL, NULL, 0, '2008-07-21 05:26:28', '2008-07-21 05:26:28', '', 5, ''),
(30, 'Résultat d\'appel d\'offre', NULL, NULL, NULL, 0, '2008-07-21 05:26:57', '2008-07-21 05:26:57', '', 5, ''),
(31, 'Demande de Stage', NULL, NULL, NULL, 0, '2008-07-21 05:27:25', '2008-07-21 05:27:25', '', 5, ''),
(32, 'Demande de Branchement', NULL, NULL, NULL, 0, '2008-07-21 05:27:53', '2008-07-21 05:27:53', '', 5, ''),
(33, 'Demande d\'abonnement', NULL, NULL, NULL, 0, '2008-07-21 05:28:12', '2008-07-21 05:28:12', '', 5, ''),
(34, 'FAQ', NULL, NULL, NULL, 0, '2008-07-21 05:28:21', '2008-07-21 05:28:21', '', 5, ''),
(35, 'Mentions légales', NULL, NULL, NULL, 0, '2008-07-21 05:28:49', '2008-07-21 05:28:49', '', 6, ''),
(36, 'Publications', NULL, NULL, NULL, 0, '2009-07-21 02:30:52', '2009-07-21 02:30:52', '', NULL, ''),
(37, 'Galerie', NULL, NULL, NULL, 0, '2009-07-21 02:32:02', '2009-07-21 02:32:02', '', NULL, ''),
(38, 'Contactez-nous', NULL, NULL, NULL, 0, '2009-07-21 02:32:12', '2009-07-21 02:32:12', '', NULL, ''),
(39, 'Eau potable', NULL, NULL, NULL, 0, '2009-07-21 03:16:21', '2009-07-21 03:16:21', '', 4, ''),
(40, 'Electricité', NULL, NULL, NULL, 0, '2009-07-21 03:16:36', '2009-07-21 03:16:36', '', 4, ''),
(41, 'Assainissement liquide', NULL, NULL, NULL, 0, '2009-07-21 03:17:13', '2009-07-21 03:17:13', '', 4, ''),
(42, 'Developpement commercial', NULL, NULL, NULL, 0, '2009-07-21 03:17:38', '2009-07-21 03:17:38', '', 4, ''),
(43, 'STEP', NULL, NULL, NULL, 0, '2009-07-21 03:17:52', '2009-07-21 03:17:52', '', 4, ''),
(44, 'Flux RSS', NULL, NULL, NULL, 0, '2012-07-21 11:30:37', '2012-07-21 11:30:37', '', NULL, ''),
(45, 'Newsletter', NULL, NULL, NULL, 0, '2012-07-21 11:31:12', '2012-07-21 11:31:12', '', NULL, ''),
(46, 'Histoire', NULL, NULL, NULL, 0, '2012-07-21 03:02:56', '2012-07-21 03:02:56', '<p><strong>Un peu d\'Histoire</strong></p>\r\n<p>La soci&eacute;t&eacute; d&rsquo;Electricit&eacute; de Marrakech est constitu&eacute;e le 27 juin 1922.</p>\r\n<p>Le 17 juillet 1964, la ville de Marrakech a sign&eacute; un protocole pour le rachat de la concession, laquelle fut confi&eacute;e &agrave; la Soci&eacute;t&eacute; Marocaine de Distribution (SMD) Le 26 D&eacute;cembre 1970 et suite aux d&eacute;lib&eacute;rations du conseil communal de la vile de Marrakech, il a &eacute;t&eacute; d&eacute;cid&eacute; de cr&eacute;er &agrave; partir du premier janvier 1971, la R&eacute;gie Autonome de Distribution d&rsquo;Eau et d&rsquo;Electricit&eacute; de Marrakech, d&eacute;nomm&eacute;e RADEEMA et ce en en vertu du D&eacute;cret n&deg; 2-64-394 du 29 Septembre 1964 relatif aux R&eacute;gies communales. Le premier janvier 1998, la RADEEMA a pris en charge la gestion du service de l&rsquo;assainissement liquide suite aux d&eacute;lib&eacute;rations de la communaut&eacute; urbaine de Marrakech.</p>\r\n<p>Le 09 Juillet 2010, la RADEEMA est pass&eacute;e au contr&ocirc;le d\'accompagnement en substitution du contr&ocirc;le pr&eacute;alable conform&eacute;ment aux dispositions de l\'article 18 de la loi 69.00.</p>', 3, '1626452143-');

-- --------------------------------------------------------

--
-- Table structure for table `plugins`
--

CREATE TABLE `plugins` (
  `idPlugin` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `idPage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(30, 1),
(31, 2),
(33, 3);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  `visitor` int(11) NOT NULL,
  `day` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `session`, `visitor`, `day`) VALUES
(1, 50, 40, '2021-07-10'),
(2, 90, 85, '2021-07-11'),
(3, 41, 41, '2021-07-12'),
(4, 75, 60, '2021-07-13'),
(5, 78, 40, '2021-07-14'),
(6, 100, 90, '2021-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp(),
  `reset_pswd_token` varchar(20) DEFAULT NULL,
  `reset_token_sent_at` date DEFAULT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `username`, `email`, `password`, `createdAt`, `reset_pswd_token`, `reset_token_sent_at`, `image`) VALUES
(30, 'laila', 'laila.sadelbouyoud@gmail.com', '$2y$10$NHNNATr1XUfVgSYNgdp5Vu8Wglks78.FsdMcYBtTZtc', '2014-07-21 06:02:02', NULL, NULL, ''),
(31, 'test1', 'test@gmail.com', '$2y$10$.xVYPFROhGLNC8ZXvxTmzuqLnSHUxoteht6EDlhM2Kj', '2014-07-21 06:04:44', NULL, NULL, ''),
(33, 'laila', 'laila@gmail.com', '$2y$10$g4LdQm2h/B2sHxvFO5OEOet1iI7BrvyDzFD9lvPmF66nfvqg22nyO', '2014-07-21 06:14:07', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `date_entree` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `date_entree`) VALUES
(365, '::1', '2021-07-08'),
(366, '::1', '2021-07-09'),
(367, '::1', '2021-07-09'),
(368, '::1', '2021-07-09'),
(369, '::1', '2021-07-09'),
(370, '::1', '2021-07-09'),
(371, '::1', '2021-07-09'),
(372, '::1', '2021-07-09'),
(373, '::1', '2021-07-09'),
(374, '::1', '2021-07-09'),
(375, '::1', '2021-07-09'),
(376, '::1', '2021-07-09'),
(377, '::1', '2021-07-09'),
(378, '::1', '2021-07-09'),
(379, '::1', '2021-07-09'),
(380, '::1', '2021-07-09'),
(381, '::1', '2021-07-09'),
(382, '::1', '2021-07-09'),
(383, '::1', '2021-07-09'),
(384, '::1', '2021-07-09'),
(385, '::1', '2021-07-09'),
(386, '::1', '2021-07-09'),
(387, '::1', '2021-07-09'),
(388, '::1', '2021-07-09'),
(389, '::1', '2021-07-09'),
(390, '::1', '2021-07-09'),
(391, '::1', '2021-07-09'),
(392, '::1', '2021-07-09'),
(393, '::1', '2021-07-09'),
(394, '::1', '2021-07-09'),
(395, '::1', '2021-07-09'),
(396, '::1', '2021-07-09'),
(397, '::1', '2021-07-09'),
(398, '::1', '2021-07-09'),
(399, '::1', '2021-07-09'),
(400, '::1', '2021-07-10'),
(401, '::1', '2021-07-10'),
(402, '::1', '2021-07-10'),
(403, '::1', '2021-07-12'),
(404, '::1', '2021-07-12'),
(405, '::1', '2021-07-12'),
(406, '::1', '2021-07-12'),
(407, '::1', '2021-07-12'),
(408, '::1', '2021-07-12'),
(409, '::1', '2021-07-12'),
(410, '::1', '2021-07-12'),
(411, '::1', '2021-07-12'),
(412, '::1', '2021-07-12'),
(413, '::1', '2021-07-12'),
(414, '::1', '2021-07-12'),
(415, '::1', '2021-07-12'),
(416, '::1', '2021-07-12'),
(417, '::1', '2021-07-12'),
(418, '::1', '2021-07-12'),
(419, '::1', '2021-07-12'),
(420, '::1', '2021-07-12'),
(421, '::1', '2021-07-12'),
(422, '::1', '2021-07-12'),
(423, '::1', '2021-07-12'),
(424, '::1', '2021-07-12'),
(425, '::1', '2021-07-12'),
(426, '::1', '2021-07-12'),
(427, '::1', '2021-07-12'),
(428, '::1', '2021-07-12'),
(429, '::1', '2021-07-12'),
(430, '::1', '2021-07-12'),
(431, '::1', '2021-07-12'),
(432, '::1', '2021-07-12'),
(433, '::1', '2021-07-12'),
(434, '::1', '2021-07-12'),
(435, '::1', '2021-07-12'),
(436, '::1', '2021-07-12'),
(437, '::1', '2021-07-12'),
(438, '::1', '2021-07-12'),
(439, '::1', '2021-07-12'),
(440, '::1', '2021-07-12'),
(441, '::1', '2021-07-12'),
(442, '::1', '2021-07-12'),
(443, '::1', '2021-07-12'),
(444, '::1', '2021-07-12'),
(445, '::1', '2021-07-12'),
(446, '::1', '2021-07-12'),
(447, '::1', '2021-07-12'),
(448, '::1', '2021-07-12'),
(449, '::1', '2021-07-12'),
(450, '::1', '2021-07-12'),
(451, '::1', '2021-07-12'),
(452, '::1', '2021-07-12'),
(453, '::1', '2021-07-12'),
(454, '::1', '2021-07-12'),
(455, '::1', '2021-07-12'),
(456, '::1', '2021-07-12'),
(457, '::1', '2021-07-12'),
(458, '::1', '2021-07-12'),
(459, '::1', '2021-07-12'),
(460, '::1', '2021-07-12'),
(461, '::1', '2021-07-12'),
(462, '::1', '2021-07-12'),
(463, '::1', '2021-07-12'),
(464, '::1', '2021-07-12'),
(465, '::1', '2021-07-12'),
(466, '::1', '2021-07-12'),
(467, '::1', '2021-07-12'),
(468, '::1', '2021-07-12'),
(469, '::1', '2021-07-12'),
(470, '::1', '2021-07-12'),
(471, '::1', '2021-07-12'),
(472, '::1', '2021-07-12'),
(473, '::1', '2021-07-12'),
(474, '::1', '2021-07-12'),
(475, '::1', '2021-07-12'),
(476, '::1', '2021-07-12'),
(477, '::1', '2021-07-12'),
(478, '::1', '2021-07-12'),
(479, '::1', '2021-07-12'),
(480, '::1', '2021-07-12'),
(481, '::1', '2021-07-12'),
(482, '::1', '2021-07-12'),
(483, '::1', '2021-07-12'),
(484, '::1', '2021-07-12'),
(485, '::1', '2021-07-12'),
(486, '::1', '2021-07-12'),
(487, '::1', '2021-07-12'),
(488, '::1', '2021-07-12'),
(489, '::1', '2021-07-12'),
(490, '::1', '2021-07-12'),
(491, '::1', '2021-07-12'),
(492, '::1', '2021-07-12'),
(493, '::1', '2021-07-12'),
(494, '::1', '2021-07-12'),
(495, '::1', '2021-07-12'),
(496, '::1', '2021-07-12'),
(497, '::1', '2021-07-12'),
(498, '::1', '2021-07-12'),
(499, '::1', '2021-07-12'),
(500, '::1', '2021-07-12'),
(501, '::1', '2021-07-12'),
(502, '::1', '2021-07-12'),
(503, '::1', '2021-07-12'),
(504, '::1', '2021-07-12'),
(505, '::1', '2021-07-12'),
(506, '::1', '2021-07-12'),
(507, '::1', '2021-07-12'),
(508, '::1', '2021-07-12'),
(509, '::1', '2021-07-12'),
(510, '::1', '2021-07-12'),
(511, '::1', '2021-07-12'),
(512, '::1', '2021-07-12'),
(513, '::1', '2021-07-12'),
(514, '::1', '2021-07-12'),
(515, '::1', '2021-07-12'),
(516, '::1', '2021-07-12'),
(517, '::1', '2021-07-12'),
(518, '127.0.0.1', '2021-07-13'),
(519, '::1', '2021-07-13'),
(520, '::1', '2021-07-13'),
(521, '::1', '2021-07-13'),
(522, '::1', '2021-07-13'),
(523, '::1', '2021-07-13'),
(524, '::1', '2021-07-13'),
(525, '::1', '2021-07-13'),
(526, '::1', '2021-07-13'),
(527, '::1', '2021-07-13'),
(528, '::1', '2021-07-13'),
(529, '::1', '2021-07-13'),
(530, '::1', '2021-07-13'),
(531, '::1', '2021-07-13'),
(532, '::1', '2021-07-13'),
(533, '::1', '2021-07-13'),
(534, '::1', '2021-07-13'),
(535, '::1', '2021-07-13'),
(536, '::1', '2021-07-13'),
(537, '::1', '2021-07-13'),
(538, '::1', '2021-07-13'),
(539, '::1', '2021-07-13'),
(540, '::1', '2021-07-13'),
(541, '::1', '2021-07-13'),
(542, '::1', '2021-07-13'),
(543, '::1', '2021-07-13'),
(544, '::1', '2021-07-13'),
(545, '::1', '2021-07-13'),
(546, '::1', '2021-07-13'),
(547, '::1', '2021-07-13'),
(548, '::1', '2021-07-13'),
(549, '::1', '2021-07-13'),
(550, '::1', '2021-07-13'),
(551, '::1', '2021-07-13'),
(552, '::1', '2021-07-13'),
(553, '::1', '2021-07-13'),
(554, '::1', '2021-07-13'),
(555, '::1', '2021-07-13'),
(556, '::1', '2021-07-13'),
(557, '::1', '2021-07-13'),
(558, '::1', '2021-07-13'),
(559, '::1', '2021-07-13'),
(560, '::1', '2021-07-13'),
(561, '::1', '2021-07-13'),
(562, '::1', '2021-07-13'),
(563, '::1', '2021-07-13'),
(564, '::1', '2021-07-13'),
(565, '::1', '2021-07-13'),
(566, '::1', '2021-07-13'),
(567, '::1', '2021-07-13'),
(568, '::1', '2021-07-13'),
(569, '::1', '2021-07-14'),
(570, '::1', '2021-07-14'),
(571, '::1', '2021-07-14'),
(572, '::1', '2021-07-14'),
(573, '::1', '2021-07-14'),
(574, '::1', '2021-07-14'),
(575, '::1', '2021-07-14'),
(576, '::1', '2021-07-14'),
(577, '::1', '2021-07-14'),
(578, '::1', '2021-07-14'),
(579, '::1', '2021-07-14'),
(580, '::1', '2021-07-14'),
(581, '::1', '2021-07-14'),
(582, '::1', '2021-07-14'),
(583, '::1', '2021-07-14'),
(584, '::1', '2021-07-14'),
(585, '::1', '2021-07-15'),
(586, '::1', '2021-07-15'),
(587, '::1', '2021-07-15'),
(588, '::1', '2021-07-15'),
(589, '::1', '2021-07-15'),
(590, '::1', '2021-07-15'),
(591, '::1', '2021-07-15'),
(592, '::1', '2021-07-16'),
(593, '::1', '2021-07-16'),
(594, '::1', '2021-07-16'),
(595, '::1', '2021-07-16'),
(596, '::1', '2021-07-16'),
(597, '::1', '2021-07-16'),
(598, '::1', '2021-07-16'),
(599, '::1', '2021-07-16'),
(600, '::1', '2021-07-16'),
(601, '::1', '2021-07-16'),
(602, '::1', '2021-07-16'),
(603, '::1', '2021-07-16'),
(604, '::1', '2021-07-16'),
(605, '::1', '2021-07-16'),
(606, '::1', '2021-07-16'),
(607, '::1', '2021-07-16'),
(608, '::1', '2021-07-16'),
(609, '::1', '2021-07-17'),
(610, '::1', '2021-07-17'),
(611, '::1', '2021-07-17');

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
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCat`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`idCom`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`idFile`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`idMenu`);

--
-- Indexes for table `menu_pages`
--
ALTER TABLE `menu_pages`
  ADD KEY `fk_menuid` (`idMenu`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`idPage`),
  ADD KEY `fk_idpage` (`parent_id`);

--
-- Indexes for table `plugins`
--
ALTER TABLE `plugins`
  ADD PRIMARY KEY (`idPlugin`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `archives`
--
ALTER TABLE `archives`
  MODIFY `idArchive` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `idCom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `idFile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `idPage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `plugins`
--
ALTER TABLE `plugins`
  MODIFY `idPlugin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=612;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `archives`
--
ALTER TABLE `archives`
  ADD CONSTRAINT `fk_idfile` FOREIGN KEY (`idFile`) REFERENCES `files` (`idFile`);

--
-- Constraints for table `menu_pages`
--
ALTER TABLE `menu_pages`
  ADD CONSTRAINT `fk_menuid` FOREIGN KEY (`idMenu`) REFERENCES `menus` (`idMenu`);

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `fk_idpage` FOREIGN KEY (`parent_id`) REFERENCES `pages` (`idPage`);

--
-- Constraints for table `roles_of_users`
--
ALTER TABLE `roles_of_users`
  ADD CONSTRAINT `fk_idrole` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`),
  ADD CONSTRAINT `fk_iduser` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `e_daily` ON SCHEDULE EVERY 1 DAY STARTS '2021-07-12 00:00:00' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'Saves total number of sessions then clears the table each day' DO BEGIN
        INSERT INTO stats (session, visitor)
          SELECT COUNT(*), COUNT( DISTINCT ip)
            FROM visitors;
        DELETE FROM visitors;
      END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
