-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 06:40 PM
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
-- Table structure for table `agences`
--

CREATE TABLE `agences` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `link` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `info` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agences`
--

INSERT INTO `agences` (`id`, `name`, `adresse`, `link`, `phone`, `info`) VALUES
(1, 'Gueliz', 'Boulevard Mohammed VI', 'https://www.google.com/maps/dir/\'\'/agences+radeema/@31.6270866,-8.0144781,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0xdafee92c9ffa123:0x605c54fe95dfd0b9!2m2!1d-8.0152536!2d31.6277132', '080 2000 123', '<p>Lundi-Vendredi 8h10-15h50 Samedi 09h00-13h00</p>'),
(2, 'MASSIRA', 'MASSIRA', 'https://www.google.com/maps/place/RADEEMA+Massira/@31.6285055,-8.0636084,17z/data=!4m5!3m4!1s0xdafe946f2898e41:0x8102c0b6cae2b5bb!8m2!3d31.628574!4d-8.0607974', '080 2000 123', 'Lundi-Vendredi 8h10-15h50\r\nSamedi 09h00-13h00'),
(3, 'AZLI', 'Azli Sud I', 'https://www.google.com/maps/place/RADEEMA/@31.6177727,-8.0547414,17z/data=!4m7!1m4!3m3!1s0xdafe93167bd550f:0x6161656aced2f9dc!2sRADEEMA!3b1!3m1!1s0xdafe93167bd550f:0x6161656aced2f9dc', '080 2000 123', 'Lundi-Vendredi 8h10-15h50\r\nSamedi 09h00-13h00'),
(4, 'M’HAMID', 'M’HAMID', '', '080 2000 123', 'Lundi-Vendredi 8h10-15h50\r\nSamedi 09h00-13h00'),
(5, 'ARSET LAMAACH', 'ARSET LAMAACH', 'https://www.google.com/maps/place/Radeema+ARSET+LAMAACH/@31.6189307,-7.991674,17z/data=!4m5!3m4!1s0xdafee4574e9ac2b:0x66825d7c908b89c4!8m2!3d31.6189307!4d-7.9894853', '080 2000 123', 'Lundi-Vendredi 8h10-15h50\r\nSamedi 09h00-13h00'),
(6, 'AGDAL', 'AGDAL', 'https://www.google.com/maps/place/La+RADEEMA,+Marrakech+40000/@31.6174862,-7.9748737,15z/data=!4m13!1m7!3m6!1s0xdafee3193ceb7ef:0x1d188f3a32316439!2sLa+RADEEMA,+Marrakech+40000!3b1!8m2!3d31.6139775!4d', '080 2000 123', 'Lundi-Vendredi 8h10-15h50\r\nSamedi 09h00-13h00');

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `date1` date NOT NULL,
  `date2` date DEFAULT NULL,
  `title_ar` varchar(150) DEFAULT NULL,
  `description_ar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id`, `title`, `description`, `date1`, `date2`, `title_ar`, `description_ar`) VALUES
(13, 'atelier sur le changement climatique 2014', '<p>La r&eacute;gie autonome de distribution d\'eau et d\'&eacute;lectricit&eacute; organise les 16 et 17 Mars 2014, un atelier sur le changement climatique et son impact sur le d&eacute;veloppement de la ville de Marrakech</p>', '2014-03-16', '2014-03-17', 'ورشة حول التغير المناخي 2014', '<div class=\"J0lOec\"><span class=\"VIiyi\" lang=\"ar\"><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">تنظم هيئة توزيع المياه والكهرباء المستقلة يومي 16 و 17 مارس 2014 ، ورشة عمل حول تغير المناخ وأثره على تطوير مدينة مراكش</span></span></div>\r\n<div class=\"UdTY9 BwTYAc Yb6eTe\" aria-hidden=\"true\" data-location=\"2\">&nbsp;</div>'),
(14, 'atelier sur le changement climatique 2016', '<p>La r&eacute;gie autonome de distribution d\'eau et d\'&eacute;lectricit&eacute; organise les 16 et 17 Mars 2016, un atelier sur le changement climatique et son impact sur le d&eacute;veloppement de la ville de Marrakech.</p>', '2016-03-16', '2016-03-17', 'ورشة حول التغير المناخي 2016', '<p>تنظم هيئة توزيع المياه والكهرباء المستقلة يومي 16 و 17 مارس 2016 ، ورشة عمل حول تغير المناخ وأثره على تطوير مدينة مراكش &nbsp;</p>');

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
  `notif_active` int(11) NOT NULL DEFAULT 0,
  `title_ar` varchar(150) NOT NULL,
  `content_ar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`idArticle`, `title`, `content`, `accept`, `createdAt`, `admittedAt`, `media`, `notif_active`, `title_ar`, `content_ar`) VALUES
(9, 'Politique de sécurité de l\'information', '', 1, '2020-07-21 13:23:28', '2020-07-21 13:23:00', '1626513538-article (2).jpg', 0, 'سياسة أمن المعلومات ', ''),
(10, 'Politique Tahssine', '<p>Politique Tahssine</p>', 1, '2020-07-21 13:23:56', '2020-07-21 13:23:00', '1626513638-article (12).jpg', 0, 'سياسة تحسين ', ''),
(11, 'Communiqué Coronavirus', '<p><strong>Coronavirus COVID-19:</strong></p>\r\n<p><strong>RADEEMA instaure des mesures pr&eacute;ventives pour assurer la continuit&eacute; des services</strong></p>\r\n<p>&nbsp;</p>\r\n<p>Marrakech, 26 Mars 2020</p>\r\n<p>&nbsp;</p>\r\n<p>Suite&nbsp;aux r&eacute;centes &eacute;volutions du Coronavirus Covid-19, et dans le cadre des mesures de pr&eacute;vention et de protection adopt&eacute;es sur le plan national dans le but de lutter contre la propagation de cette &eacute;pid&eacute;mie, la&nbsp;R&eacute;gie Autonome de Distribution d&rsquo;Eau et d&rsquo;&eacute;lectricit&eacute; de Marrakech (RADEEMA)&nbsp;a mis en place, depuis le 23 mars 2020, un dispositif visant &agrave; assurer la continuit&eacute; des services et &agrave; limiter au strict minimum les d&eacute;placements des clients &agrave; ses agences.</p>\r\n<p>Ainsi, et durant toute la p&eacute;riode de l&rsquo;&eacute;tat d&rsquo;urgence sanitaire, la RADEEMA a d&eacute;cid&eacute; de surseoir certaines activit&eacute;s &agrave; domicile notamment, le relev&eacute; d&rsquo;index des compteurs, la distribution des factures de consommation et l&rsquo;encaissement &agrave; domicile.&nbsp;</p>\r\n<p>Cependant, elle annonce que les interventions planifi&eacute;es pour entretien des r&eacute;seaux, durant cette p&eacute;riode, seront limit&eacute;es aux travaux de maintenance absolument essentiels et urgents. Des &eacute;quipes d&rsquo;intervention permanentes veilleront &agrave; la continuit&eacute; de l&rsquo;alimentation en &eacute;lectricit&eacute; et en eau potable dans les meilleures conditions de qualit&eacute; de service.&nbsp;</p>\r\n<p>Par ailleurs, soucieuse de la protection de ses clients et ses collaborateurs dans ces circonstances exceptionnelles actuelles, la RADEEMA adopte les mesures barri&egrave;res requises en mati&egrave;re d&rsquo;hygi&egrave;ne de s&eacute;curit&eacute; au niveau de ses agences et points d&rsquo;encaissement notamment, l&rsquo;acc&egrave;s simultan&eacute; &agrave; 5 visiteurs au maximum.</p>\r\n<p>Cependant, la R&eacute;gie renforce son dispositif &agrave; distance pour la prise en charge de toutes les demandes d&rsquo;intervention ou de r&eacute;clamations de ses clients.&nbsp;Au menu de ces solutions, disponibles 24h/24 et 7j/7&nbsp;: le Centre Relation Client au num&eacute;ro&nbsp;080 2000 123&nbsp;ou&nbsp;05 24 42 43 00,&nbsp;l&rsquo;Agence en ligne sur le Portail&nbsp;www.radeema.ma&nbsp;ainsi que l&rsquo;application&nbsp;RADEEMA&nbsp;Mobile disponible sur Android. Par ailleurs, les clients peuvent &eacute;galement utiliser le e-banking&nbsp;et&nbsp;&nbsp;m-banking&nbsp;sur les portails et les applications mobiles ou dans les&nbsp;guichets automatiques bancaires des banques partenaires.</p>\r\n<p>Toutes ces mesures repr&eacute;sentent un gage de l&rsquo;implication effective de la&nbsp;RADEEMA&nbsp;au plan d&rsquo;urgence&nbsp;de la sant&eacute; publique, tout en rassurant les citoyens de son engagement &agrave; garantir quotidiennement la continuit&eacute; des prestations, la gestion optimale des r&eacute;seaux et la qualit&eacute; des services&nbsp;rendus aux habitants de la cit&eacute; ocre.</p>', 1, '2020-05-27 13:04:00', '2020-05-27 13:04:00', '1626513652-article (13).jpg', 0, 'بيان صحفي لفيروس كورونا ', '<p>فيروس كورونا COVID-19:</p>\r\n<p>تنفذ RADEEMA تدابير وقائية لضمان استمرارية الخدمات مراكش ،</p>\r\n<p>&nbsp;</p>\r\n<p>26 مارس 2020</p>\r\n<p>&nbsp;</p>\r\n<p>بعد التطورات الأخيرة في فيروس كورونا Covid-19 ، وكجزء من تدابير الوقاية والحماية المعتمدة على الصعيد الوطني من أجل مكافحة انتشار هذا الوباء ، تم إنشاء هيئة التوزيع الذاتي للمياه والكهرباء بمراكش (RADEEMA) ، منذ ذلك الحين 23 مارس 2020 ، نظام يضمن استمرارية الخدمات ويحد من سفر العملاء إلى وكالاته إلى الحد الأدنى الصارم.</p>\r\n<p>وهكذا ، وطوال فترة الطوارئ الصحية ، قررت RADEEMA تعليق بعض الأنشطة في المنزل ، ولا سيما قراءة العداد وتوزيع فواتير الاستهلاك والتحصيل المنزلي.</p>\r\n<p>ومع ذلك ، تعلن أن التدخلات المخطط لها لصيانة الشبكة ، خلال هذه الفترة ، ستقتصر على أعمال الصيانة الضرورية والعاجلة. ستعمل فرق التدخل الدائم على ضمان استمرارية إمدادات الكهرباء ومياه الشرب في ظل أفضل ظروف الخدمة.</p>\r\n<p>بالإضافة إلى ذلك ، نظرًا لقلقها بشأن حماية عملائها وموظفيها في هذه الظروف الاستثنائية الحالية ، تتبنى RADEEMA تدابير الحاجز المطلوبة من حيث الصحة والسلامة على مستوى فروعها ونقاط التجميع على وجه الخصوص ، والوصول المتزامن إلى 5 زوار كحد أقصى.</p>\r\n<p>ومع ذلك ، تعمل الوكالة على تعزيز نظام التحكم عن بعد لتولي مسؤولية جميع طلبات التدخل أو الشكاوى الواردة من عملائها. في قائمة هذه الحلول ، المتوفرة على مدار 24 ساعة في اليوم ، 7 أيام في الأسبوع: مركز علاقات العملاء على الرقم 080 2000123 أو 05 24 42 43 00 ، الوكالة عبر الإنترنت على البوابة www.radeema.ma وكذلك RADEEMA تطبيق جوال متوفر على أندرويد. بالإضافة إلى ذلك ، يمكن للعملاء أيضًا استخدام الخدمات المصرفية الإلكترونية والخدمات المصرفية عبر الهاتف المحمول على البوابات وتطبيقات الهاتف المحمول أو في أجهزة الصراف الآلي للبنوك الشريكة.</p>\r\n<div class=\"J0lOec\"><span class=\"VIiyi\" lang=\"ar\"><span class=\"JLqJ4b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">كل هذه الإجراءات تمثل تعهدًا بالمشاركة الفعالة لـ RADEEMA في خطة طوارئ الصحة العامة ، مع طمأنة المواطنين بالتزامها بضمان استمرارية الخدمات ، والإدارة المثلى للشبكات وجودة الخدمات على أساس يومي. سكان المدينة المغرة.</span></span></div>\r\n<div class=\"UdTY9 qhIQqf Yb6eTe\" aria-hidden=\"true\" data-location=\"2\">&nbsp;</div>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>'),
(13, 'Participation de la RADEEMA à la rencontre de communication autour du programme d’approvisionnement en eau potable', '<p>Dans le cadre de la rencontre de communication, organis&eacute;e le 28 janvier 2020, autour du programme national d&rsquo;approvisionnement en eau potable et d&rsquo;irrigation 2020 &ndash; 2027, dont le coup d&rsquo;envoi a &eacute;t&eacute; donn&eacute; par Sa Majest&eacute; le Roi Mohammed VI, pour une enveloppe budg&eacute;taire de 115,4 milliards de DH, Le Directeur de la R&eacute;gie par Int&eacute;rim, Monsieur Salah Eddine MOUNTASSIR a pr&eacute;sent&eacute; un expos&eacute; sur &laquo;&nbsp;le traitement et la r&eacute;utilisation des eaux us&eacute;es et son r&ocirc;le dans la pr&eacute;servation des ressources en eaux &agrave; Marrakech&nbsp;&raquo;.</p>\r\n<p>Cette rencontre tenue en pr&eacute;sence des gouverneurs des provinces relevant de la r&eacute;gion, des &eacute;lus, des responsables des services ext&eacute;rieurs, des repr&eacute;sentants de la soci&eacute;t&eacute; civile ainsi que d&rsquo;autres personnalit&eacute;s, a &eacute;t&eacute; marqu&eacute;e par la pr&eacute;sentation d&rsquo;une s&eacute;rie d&rsquo;autres expos&eacute;s exhaustifs concernant, entre autres, &laquo; le d&eacute;veloppement de l&rsquo;offre hydrique &agrave; travers les barrages &raquo;, &laquo; les programmes national et r&eacute;gional sur l&rsquo;&eacute;conomie et la promotion de l&rsquo;eau dans le domaine agricole &raquo;, et &laquo; le programme d&rsquo;approvisionnement en eau potable en milieu rural &raquo;.</p>', 1, '2020-02-03 14:46:38', '2020-02-03 14:46:38', '1626513783-article (5).jpg', 0, 'مشاركة راديما في لقاء التواصل حول برنامج تزويد مياه الشرب', '<p>في إطار الاجتماع التوعوي الذي نُظم في 28 يناير 2020 م حول البرنامج الوطني لإمداد مياه الشرب والري 2020-2027 ، والذي أطلقه جلالة الملك محمد السادس ، بميزانية قدرها 115.4 مليار درهم ، أعلن مدير دائرة المياه والصرف الصحي. قدم مؤقت ريجي السيد صلاح الدين منتصر عرضا عن \"معالجة وإعادة استخدام مياه الصرف الصحي ودورها في الحفاظ على الموارد المائية في مراكش\".</p>\r\n<div class=\"J0lOec\"><span class=\"VIiyi\" lang=\"ar\"><span class=\"JLqJ4b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">عقد هذا الاجتماع بحضور ولاة ولاة الإقليم ، والمسؤولين المنتخبين ، ورؤساء الدوائر الخارجية ، وممثلي المجتمع المدني والشخصيات الأخرى ، وتميز بتقديم سلسلة من العروض الأخرى. و \"تطوير إمدادات المياه من خلال السدود\" و \"البرامج الوطنية والإقليمية حول الاقتصاد وتعزيز المياه في القطاع الزراعي\" و \"برنامج تزويد المياه بمياه الشرب في المناطق الريفية\".</span></span></div>\r\n<div class=\"UdTY9 qhIQqf Yb6eTe\" aria-hidden=\"true\" data-location=\"2\">&nbsp;</div>'),
(14, 'Célébration de la Journée Mondiale de la Protection des Données', '<p>Dans le cadre de la continuit&eacute; de ses actions en mati&egrave;re de communication interne et &agrave; l&rsquo;occasion de la Journ&eacute;e Mondiale de la Protection des Donn&eacute;es, la RADEEMA a organis&eacute; le 28 janvier 2020 une conf&eacute;rence en faveur de ses collaborateurs sous th&egrave;me : LA PROTECTION DES DONN&Eacute;ES &Agrave; CARACT&Egrave;RE PERSONNEL: Quels enjeux de conformit&eacute; pour la RADEEMA ?</p>\r\n<p>&nbsp;</p>\r\n<p>Avec l&rsquo;essor des nouvelles technologies, de nombreuses informations personnelles sont enregistr&eacute;es chaque jour dans des fichiers, communiqu&eacute;es &agrave; des tiers et rapproch&eacute;es avec d&rsquo;autres donn&eacute;es &agrave; des fins diverses, d&rsquo;o&ugrave; l&rsquo;importance aujourd&rsquo;hui de sensibiliser les collaborateurs sur la protection de leurs donn&eacute;es personnelles et du respect de leur vie.</p>\r\n<p>&nbsp;</p>\r\n<p><strong>Intervenants :</strong></p>\r\n<p>- Mr Zouhir ALMAI</p>\r\n<p>Cofounder &amp; IT, Security, data center expert, Ing&eacute;nieur d&rsquo;&eacute;tat, Executive MBA, certifi&eacute; CISSP | CISM | CRISC | DCIE | DCOM | DCTP | DCA | ISO 27001LA &amp; LI</p>\r\n<p>&nbsp;</p>\r\n<p>- Mr Jaouad BENABBOU</p>\r\n<p>Ing&eacute;nieur d&rsquo;&eacute;tat, PHD en s&eacute;curit&eacute; SI/SDN, certifi&eacute; CISSP | CISM | ISO 27001LA &amp; LI, RSSI de la RADEEMA.</p>', 1, '2020-02-03 14:38:46', '2020-02-03 14:38:46', '1626452943-article (6).jpg', 0, 'الاحتفال باليوم العالمي لحماية البيانات ', '<p>كجزء من استمرارية إجراءاتها فيما يتعلق بالاتصالات الداخلية وبمناسبة اليوم العالمي لحماية البيانات ، نظمت RADEEMA في 28 يناير 2020 مؤتمراً لصالح موظفيها تحت شعار: حماية البيانات الشخصية: ما هي قضايا الامتثال من أجل RADEEMA؟</p>\r\n<p>مع ظهور التقنيات الجديدة ، يتم تسجيل قدر كبير من المعلومات الشخصية كل يوم في ملفات ، وإرسالها إلى أطراف ثالثة والتوفيق بينها وبين البيانات الأخرى لأغراض مختلفة ، ومن هنا تأتي أهمية اليوم لتوعية الموظفين بحماية بياناتهم الشخصية واحترامها لحياتهم.</p>\r\n<p><strong> المتدخلين:</strong></p>\r\n<p>- السيد زهير الماي<span class=\"VIiyi\" lang=\"ar\"><span class=\"JLqJ4b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">.</span></span></p>\r\n<p>مؤسس مشارك وتقنية معلومات ، أمن ، مركز بيانات خبير ، مهندس ، ماجستير في إدارة الأعمال التنفيذية ، معتمد من CISSP | CISM | CRISC | DCIE | DCOM | DCTP | DCA | ISO 27001LA &amp; LI</p>\r\n<p>- السيد جواد بن عبو<span class=\"VIiyi\" lang=\"ar\"><span class=\"JLqJ4b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">.</span></span></p>\r\n<div class=\"J0lOec\"><span class=\"VIiyi\" lang=\"ar\"><span class=\"JLqJ4b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">مهندس ، حاصل على درجة الدكتوراه في أمن IS / SDN ، ومعتمد من CISSP | CISM | ISO 27001LA &amp; LI ، RSSI الخاص بـ RADEEMA.</span></span></div>\r\n<div class=\"UdTY9 qhIQqf Yb6eTe\" aria-hidden=\"true\" data-location=\"2\">&nbsp;</div>'),
(15, 'RADEEMA lance la 8ème édition \"Cartable pour tous \"', '<div>La R&eacute;gie Autonome de Distribution d\'Eau et d\'Electricit&eacute; Marrakech a lanc&eacute;, mardi 24 septembre, la distribution d&rsquo;un pack de 800 de cartables et de fournitures scolaires &agrave; l\'intention de 800 &eacute;coliers &nbsp;dans les quartiers d&eacute;favoris&eacute;s de la cit&eacute; ocre.</div>\r\n<div>&nbsp;</div>\r\n<div>Les &eacute;coles cibl&eacute;es par cette initiative sont : l&rsquo;&eacute;cole Abdel Wahed Marrakchi, l&rsquo;&eacute;cole Mohamed El Bakkal, l&rsquo;&eacute;cole Abdallah Ben Yassin, l&rsquo;&eacute;cole Al Wahda, l&rsquo;&eacute;cole Al Msalla, l&rsquo;&eacute;cole Sidi Youssef Ben Ali,&nbsp;l&rsquo;&eacute;cole&nbsp;Soukaina,&nbsp;l&rsquo;&eacute;cole Chouhadaa,&nbsp;l&rsquo;&eacute;cole Al Inbiath et l\'&eacute;cole Oumnia Bent Wahab.</div>\r\n<div>&nbsp;</div>\r\n<div>Le Directeur G&eacute;n&eacute;ral par Int&eacute;rim, Salaheddine Mountassir, a d&eacute;clar&eacute;, &agrave; travers cette huiti&egrave;me &eacute;dition Cartable pour tous, organis&eacute;e en collaboration avec la Direction Provinciale de l&rsquo;&Eacute;ducation Nationale de Marrakech, que cette initiative s&rsquo;inscrit dans l\'implication dans l\'am&eacute;lioration des conditions de scolarisation.&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Il a affirm&eacute; que la R&eacute;gie effectue &eacute;galement divers autres actions sociales, notamment la campagne de collecte de sang &agrave; laquelle plus de 400 agents ont particip&eacute;, contribuant ainsi &agrave; l\'enrichissement de la R&eacute;serve R&eacute;gionale de cette substance vitale.&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Lien : Pour visualiser les vid&eacute;os cliquez ici.</div>\r\n<div><a href=\"https://www.youtube.com/watch?v=iy-xSLxtuCE\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.youtube.com/watch?v%3Diy-xSLxtuCE&amp;source=gmail&amp;ust=1572090610818000&amp;usg=AFQjCNH12IG-eeOuuOX4WvU5uVa2r5OFmg\">https://www.youtube.com/watch?<wbr />v=iy-xSLxtuCE</a></div>\r\n<div><a href=\"https://www.youtube.com/watch?v=s_hScOKVMK0\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.youtube.com/watch?v%3Ds_hScOKVMK0&amp;source=gmail&amp;ust=1572090610818000&amp;usg=AFQjCNELjPya-iOJit4pstUXganQc6VxEQ\">https://www.youtube.com/watch?<wbr />v=s_hScOKVMK0</a></div>', 1, '2019-10-23 14:44:45', '2019-10-23 14:44:45', '1626453003-article (7).jpg', 0, 'RADEEMA تطلق الإصدار الثامن من ', '<p>أطلقت هيئة التوزيع الذاتي للمياه والكهرباء بمراكش ، الثلاثاء 24 سبتمبر ، توزيع حزمة من 800 حقيبة مدرسية ومستلزمات مدرسية على 800 تلميذ في الأحياء المحرومة من المدينة المغرة.</p>\r\n<p>المدارس المستهدفة بهذه المبادرة هي: مدرسة عبد الواحد المراكشي ، ومدرسة محمد البقال ، ومدرسة عبد الله بن ياسين ، ومدرسة الوحدة ، ومدرسة المصلى ، ومدرسة سيدي يوسف بن علي ، ومدرسة سكينة ، ومدرسة الشهداء ، ومدرسة الإنبياث ، و مدرسة أمنية بنت وهاب.</p>\r\n<p>صرح المدير العام بالإنابة صلاح الدين منتصر ، من خلال هذه النسخة الثامنة من \"حقيبة مدرسية للجميع\" ، التي تم تنظيمها بالتعاون مع المديرية الجهوية للتربية الوطنية في مراكش ، أن هذه المبادرة جزء من المشاركة في تحسين ظروف التعليم.</p>\r\n<p>وأكد أن الوكالة تقوم أيضًا بالعديد من الأنشطة الاجتماعية الأخرى ، لا سيما حملة جمع الدم التي شارك فيها أكثر من 400 وكيل ، مما يساهم في إثراء الاحتياطي الإقليمي لهذه المادة الحيوية.</p>\r\n<div class=\"J0lOec\"><span class=\"VIiyi\" lang=\"ar\"><span class=\"JLqJ4b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">الرابط: لمشاهدة الفيديو اضغط هنا.</span></span></div>\r\n<div class=\"UdTY9 qhIQqf Yb6eTe\" aria-hidden=\"true\" data-location=\"2\">\r\n<div><a href=\"https://www.youtube.com/watch?v=iy-xSLxtuCE\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.youtube.com/watch?v%3Diy-xSLxtuCE&amp;source=gmail&amp;ust=1572090610818000&amp;usg=AFQjCNH12IG-eeOuuOX4WvU5uVa2r5OFmg\">https://www.youtube.com/watch?<wbr />v=iy-xSLxtuCE</a></div>\r\n<div><a href=\"https://www.youtube.com/watch?v=s_hScOKVMK0\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.youtube.com/watch?v%3Ds_hScOKVMK0&amp;source=gmail&amp;ust=1572090610818000&amp;usg=AFQjCNELjPya-iOJit4pstUXganQc6VxEQ\">https://www.youtube.com/watch?<wbr />v=s_hScOKVMK0</a></div>\r\n</div>'),
(16, 'Journée RADEEMA pour les Donneurs de Sang', '<div>\r\n<div><strong>Un rendez-vous annuel qui renforce les fondamentaux de l\'esprit de l\'entreprise citoyenne.</strong></div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>Dans le cadre de son ouverture continue sur son environnement social, et dans le cadre de son implication dans le succ&egrave;s de toutes les initiatives &agrave; caract&egrave;re humanitaire et social, la R&eacute;gie Autonome de Distribution d\'Eau et d\'Electricit&eacute; Marrakech a ouvert ses portes jeudi 19 juillet 2019 au si&egrave;ge situ&eacute; sur le boulevard Mohammed VI, organisant une journ&eacute;e de Don de Sang et contribuant ainsi largement &agrave; l\'enrichissement de la R&eacute;serve R&eacute;gionale de cette substance vitale.</div>\r\n<div>&nbsp;</div>\r\n<div>La &laquo;Journ&eacute;e des Donneurs de Sang RADEEMA&raquo; portait cette ann&eacute;e le slogan &laquo;Une goutte de votre sang peut sauver une vie&raquo; et a vu la participation de 400 cadres et agents, repr&eacute;sentant toutes les agences commerciales &agrave; Marrakech, ainsi que le corps administratif et technique, apr&egrave;s s\'&ecirc;tre lourdement et spontan&eacute;ment impliqu&eacute;s dans le succ&egrave;s de cet &eacute;v&eacute;nement important. Cette date est devenue un rendez-vous annuel, s\'ajoutant aux initiatives sociales et humanitaires similaires parrain&eacute;es par la R&eacute;gie Autonome de Distribution d\'Eau et d\'Electricit&eacute; Marrakech.</div>\r\n<div>&nbsp;</div>\r\n<div>Pour la &laquo;Journ&eacute;e des Donneurs de Sang RADEEMA&raquo;, cette ann&eacute;e, la R&eacute;gie a allou&eacute; un espace sp&eacute;cial, renforc&eacute; par les &eacute;quipements m&eacute;dicaux n&eacute;cessaires fournis par le Centre R&eacute;gional de la Transfusion Sanguine, parall&egrave;lement &agrave; la supervision effective d&rsquo;une &eacute;quipe m&eacute;dicale int&eacute;gr&eacute;e, qui a permis de cr&eacute;er un mini centre m&eacute;dical respectant les normes &eacute;tablies et permettant aux superviseurs de l\'initiative une organisation bien structur&eacute;e et r&eacute;fl&eacute;chie qui veille &agrave; ce que les donneurs arrivent pendant la journ&eacute;e sans heurts et r&eacute;guli&egrave;rement.</div>\r\n<div>&nbsp;</div>\r\n<div>Il convient de noter que les initiatives &agrave; caract&egrave;re social et humanitaire dont s&rsquo;investit la RADEEMA, s\'inscrivent dans le cadre du programme d\'entreprise citoyenne, qui comprend un ensemble d\'activit&eacute;s et d\'initiatives et de d&eacute;veloppement social.</div>\r\n</div>\r\n<div>&nbsp;</div>\r\n<div>Lien : Pour visualiser la vid&eacute;o cliquez ici.</div>\r\n<div><a href=\"https://www.youtube.com/watch?v=Gmza1Smm2i8\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.youtube.com/watch?v%3DGmza1Smm2i8&amp;source=gmail&amp;ust=1572003542672000&amp;usg=AFQjCNHR5gNXmxUX780574qMQXQhg-J95Q\">https://www.youtube.com/watch?<wbr />v=Gmza1Smm2i8</a></div>', 1, '2019-10-23 14:44:17', '2019-10-23 14:44:17', '1626453103-article (8).jpg', 0, 'يوم راديما للمتبرعين بالدم', '<p><strong>لقاء سنوي يعزز أساسيات روح المواطنة المؤسسية.</strong></p>\r\n<p>في إطار انفتاحها المستمر على بيئتها الاجتماعية ، وكجزء من مشاركتها في نجاح جميع المبادرات الإنسانية والاجتماعية ، افتتحت الوكالة المستقلة لتوزيع الماء و الكهرباء بمراكش أبوابها يوم الخميس 19 يوليو 2019 في المقر الرئيسي الواقع في شارع محمد السادس ، تنظيم يوم للتبرع بالدم وبالتالي المساهمة بشكل كبير في إثراء الاحتياطي الإقليمي لهذه المادة الحيوية.</p>\r\n<p>حمل \"يوم راديما للتبرع بالدم\" هذا العام شعار \"قطرة من دمك تنقذ حياة\" وشهد مشاركة 400 مدير ووكيل يمثلون جميع الوكالات التجارية في مراكش وكذلك الهيئة الإدارية والفنية ، بعد أن شارك بشكل كبير وعفوي في نجاح هذا الحدث المهم. أصبح هذا التاريخ بمثابة اجتماع سنوي ، بالإضافة إلى مبادرات اجتماعية وإنسانية مماثلة برعاية الوكالة المستقلة لتوزيع الماء و الكهرباء بمراكش.</p>\r\n<p>في \"يوم RADEEMA للتبرع بالدم\" ، هذا العام ، خصصت الوكالة مساحة خاصة ، معززة بالمعدات الطبية اللازمة التي يوفرها المركز الإقليمي لنقل الدم ، جنبًا إلى جنب مع الإشراف الفعال من فريق طبي متكامل ، مما جعل من الممكن إنشاء مركز طبي صغير يحترم المعايير المعمول بها ويسمح لمشرفي المبادرة بتنظيم جيد ومدروس يضمن وصول المتبرعين خلال اليوم بسلاسة وبشكل منتظم.</p>\r\n<p>وتجدر الإشارة إلى أن المبادرات ذات الطابع الاجتماعي والإنساني التي تستثمر فيها RADEEMA هي جزء من برنامج مواطنة الشركات ، والذي يتضمن مجموعة من الأنشطة والمبادرات والتنمية الاجتماعية.</p>\r\n<p>الرابط: لمشاهدة الفيديو اضغط هنا.</p>\r\n<p><a href=\"https://www.youtube.com/watch?v=Gmza1Smm2i8\" target=\"_blank\" rel=\"noopener\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.youtube.com/watch?v%3DGmza1Smm2i8&amp;source=gmail&amp;ust=1572003542672000&amp;usg=AFQjCNHR5gNXmxUX780574qMQXQhg-J95Q\">https://www.youtube.com/watch?<wbr />v=Gmza1Smm2i8</a></p>'),
(17, 'RADEEMA - CIMAT', '<p><strong>une nouvelle &eacute;tape dans le processus de traitement et de valorisation des boues d\'&eacute;puration de Marrakech.</strong></p>\r\n<p>&nbsp;</p>\r\n<div>A rappeler que la station de s&eacute;chage solaire des boues d\'&eacute;puration RADEEMA, mise en service en Mai 2018, constitue une pi&egrave;ce ma&icirc;tresse du processus de traitement et de valorisation adopt&eacute;s par le grand projet de traitement et de r&eacute;utilisation des eaux us&eacute;es de Marrakech, d\'ailleurs enregistr&eacute; par les Nations Unies (UNFCCC), en 2010, comme projet MDP.</div>\r\n<div>Premi&egrave;re de son genre en Afrique et la plus grande &agrave; l\'&eacute;chelle plan&eacute;taire, l\'unit&eacute; de s&eacute;chage solaire de Marrakech permet le traitement de plus de 200 tonnes par jour de boues d\'&eacute;puration, sur une superficie de 10 hectares et pour un investissement de 147 Millions de Dirhams.</div>\r\n<div>Une pur concentr&eacute; d\'innovation, cette usine, &agrave; travers ses 40 serres de 1440 m2 chacune, dont 28 serres pour le s&eacute;chage solaire munies d\'&eacute;quipements de haute pr&eacute;cision pour le retournement et l\'a&eacute;ration des boues, permet de porter &agrave; 80% la siccit&eacute; des boues extraites au lieu de 20% enregistr&eacute;e actuellement &agrave; leurs sortie de la STEP et de r&eacute;aliser une &eacute;conomie de 5 MW par jour d\'&eacute;nergie thermique.</div>', 1, '2019-10-23 14:44:17', '2019-10-23 14:44:17', '1626453045-article (9).jpg', 0, 'راديما - سيمات ', '<p><strong>مرحلة جديدة في عملية معالجة واستعادة حمأة الصرف الصحي في مراكش.</strong></p>\r\n<p>يجب أن نتذكر أن محطة تجفيف حمأة مياه الصرف الصحي الشمسية RADEEMA ، التي تم تشغيلها في مايو 2018 ، هي جزء أساسي من عملية المعالجة والاستعادة التي اعتمدها مشروع معالجة مياه الصرف الصحي وإعادة استخدامها في مراكش ، وهي مسجلة أيضًا من قبل الأمم المتحدة ( UNFCCC) في عام 2010 كمشروع آلية التنمية النظيفة.</p>\r\n<p>وحدة التجفيف الشمسي في مراكش هي الأولى من نوعها في إفريقيا والأكبر على نطاق الكواكب ، وتسمح بمعالجة أكثر من 200 طن يوميًا من حمأة الصرف الصحي ، على مساحة 10 هكتارات وباستثمار 147. مليون درهم.</p>\r\n<p><span class=\"VIiyi\" lang=\"ar\"><span class=\"JLqJ4b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">مركز نقي للابتكار ، هذا المصنع ، من خلال 40 صوبة زجاجية تبلغ مساحتها 1440 مترًا مربعًا لكل منها ، بما في ذلك 28 صوبة للتجفيف الشمسي ومجهزة بمعدات عالية الدقة لتقليب الحمأة وتهويتها ، يسمح بزيادة جفاف الحمأة المستخرجة إلى 80٪ بدلاً من ذلك. من 20٪ المسجلة حاليًا عند خروجها من محطة معالجة مياه الصرف الصحي وتحقيق وفورات قدرها 5 ميجاوات يوميًا من الطاقة الحرارية.</span></span></p>\r\n<p>&nbsp;</p>'),
(18, 'RADEEMA a maintenu pour la 6ème année consécutive sa triple certification', '<p>Triple certifi&eacute;e depuis 2013 par l&rsquo;organisme de certification IMANORpour les activit&eacute;s de distribution d\'&eacute;lectricit&eacute;, d\'eau potable et la gestion d\'assainissement liquide sur l\'ensemble de ses sites, la RADEEMA s&rsquo;est investieau quotidien &agrave; mettre &agrave; l&rsquo;&eacute;preuve son SMI l&rsquo;inscrivant dans une dynamique volontariste de d&eacute;veloppement durable articul&eacute;e autour de la bonne gouvernance, la coh&eacute;sion sociale et l&rsquo;am&eacute;lioration continue des performances. Aujourd&rsquo;hui et apr&egrave;s la migration en 2017 vers les versions 2015 des normes ISO 9001 et 14001 et leur maintien en 2018,&nbsp; la RADEEMA a permis de consolider sa position comme l&rsquo;un des rares &eacute;tablissements publics marocains &agrave; avoir un Syst&egrave;me de Management Int&eacute;gr&eacute; par la Qualit&eacute;, la S&eacute;curit&eacute; et l&rsquo;Environnement r&eacute;pondant aux normes nationales et internationales les plus &eacute;labor&eacute;es.<br />A ce titre et gr&acirc;ce &agrave; ce parcours triomphant de la R&eacute;gie vers l&rsquo;excellence, la RADEEMA s&rsquo;est vue d&eacute;cern&eacute;e trois distinctions internationales successives (International QualitySummitAward) : &agrave; Gen&egrave;ve en Mars 2014, &agrave; New York Juin 2016 et Frankfort en Juin 2017.<br />Dans cette optique, et en confirmation de ses engagements, la RADEEMA continue son d&eacute;veloppement par la programmation d&rsquo;un large programme d&rsquo;investissement, touchant de mani&egrave;re proactive la protection de l&rsquo;environnement et la gestion durable des ressources hydriques. En effet, la R&eacute;gie de Marrakech, pr&eacute;curseur dans son domaine, et &agrave; l&rsquo;instar de son grand projet de traitement et de r&eacute;utilisation des eaux us&eacute;es et de son extension pr&eacute;vue pour 2019, la RADEEMA a mis en place l&rsquo;une des plus grandes usines de s&eacute;chage solaire des boues &agrave; l&rsquo;&eacute;chelle mondiale. Par ailleurs, d&rsquo;autres mutations ont concern&eacute; le renforcement des infrastructures de base et la modernisation des outils de gestion par la d&eacute;mat&eacute;rialisation des d&eacute;marches, optimisant ainsi la relation avec les clients particuliers, investisseurs et l&rsquo;ensemble des parties int&eacute;ress&eacute;es de la R&eacute;gie.<br />Finalement, ces performances et ces certifications t&eacute;moignent, non seulement de la reconnaissance des engagements de la RADEEMA dans son processus de d&eacute;veloppement durable mais constituent&eacute;galement un moteur et un gage pour l&rsquo;am&eacute;lioration et le progr&egrave;s continu des activit&eacute;s de la R&eacute;gie au service de la satisfaction et le confort du citoyen marrakechi.</p>\r\n<p><br />A propos&hellip;</p>\r\n<p>ISO 9001 : 2015&nbsp; certifiant la conformit&eacute; de la RADEEMA selon les exigences normatives relatives &agrave; un syst&egrave;me de management de la qualit&eacute;. Elle prouve l&rsquo;engagement de la R&eacute;gie &agrave; accro&icirc;tre la satisfaction de leurs clients.</p>\r\n<p>ISO 14001 : 2015&nbsp; certifiant la conformit&eacute; de la RADEEMA selon les exigences normatives relatives &agrave; un syst&egrave;me de management environnemental. Elle prouve l&rsquo;engagement de la R&eacute;gie &agrave; am&eacute;liorer sa performance environnementale.</p>\r\n<p>OHSAS 18001 : 2013&nbsp; certifiant la conformit&eacute; de la RADEEMA selon les exigences normatives relatives &agrave; un syst&egrave;me de management de la sant&eacute; et de la s&eacute;curit&eacute; au travail. Elle prouve l&rsquo;engagement de la R&eacute;gie &agrave; optimiser la gestion des risques, diminuer le nombre des accidents du travail et conformer ses pratiques &agrave; la l&eacute;gislation en cours et &agrave; ses &eacute;volutions.</p>', 1, '2018-08-07 14:11:35', '2018-08-07 14:11:35', '1626453161-article (10).jpg', 0, 'حافظت راديما للسنة السادسة على التوالي على شهادتها الثلاثية ', '<p>حصلت على اعتماد ثلاثي منذ عام 2013 من قبل هيئة إصدار الشهادات IMANOR لأنشطة توزيع الكهرباء ومياه الشرب وإدارة الصرف الصحي السائل في جميع مواقعها ، استثمرت RADEEMA يوميًا في تحديث اختبار SMI الخاص بها وتسجيلها في ديناميكية استباقية للتنمية المستدامة تتمحور حول الحوكمة الرشيدة والتماسك الاجتماعي والتحسين المستمر للأداء. اليوم وبعد الانتقال في عام 2017 إلى إصدارات 2015 من معايير ISO 9001 و 14001 وصيانتها في 2018 ، جعلت RADEEMA من الممكن ترسيخ مكانتها كواحدة من المؤسسات العامة المغربية النادرة التي لديها نظام إدارة متكامل بالجودة ، السلامة والبيئة تلبي المعايير الوطنية والدولية الأكثر تفصيلاً.</p>\r\n<p>على هذا النحو وبفضل رحلة R&eacute;gie المظفرة نحو التميز ، تم منح RADEEMA ثلاث جوائز دولية متتالية (جائزة قمة الجودة الدولية): في جنيف في مارس 2014 ، في نيويورك في يونيو 2016 وفرانكفورت في يونيو 2017.</p>\r\n<p>مع وضع هذا في الاعتبار ، وتأكيدًا لالتزاماتها ، تواصل RADEEMA تطويرها من خلال برمجة برنامج استثماري كبير ، مما يؤثر بشكل استباقي على حماية البيئة والإدارة المستدامة لموارد المياه. في الواقع ، R&eacute;gie de Marrakech ، رائدة في مجالها ، ومثل مشروعها الرئيسي لمعالجة مياه الصرف الصحي وإعادة استخدامها والتوسع المخطط له لعام 2019 ، أنشأت RADEEMA واحدة من أكبر محطات تجفيف الحمأة الشمسية في جميع أنحاء العالم. بالإضافة إلى ذلك ، تتعلق التغييرات الأخرى بتعزيز البنية التحتية الأساسية وتحديث أدوات الإدارة من خلال إزالة الطابع المادي للإجراءات ، وبالتالي تحسين العلاقة مع العملاء الأفراد والمستثمرين وجميع الأطراف المهتمة في R&eacute;gie.</p>\r\n<p>أخيرًا ، تشهد هذه العروض وهذه الشهادات ، ليس فقط على الاعتراف بالتزامات RADEEMA في عملية التنمية المستدامة الخاصة بها ، ولكن أيضًا تشكل قوة دافعة وتعهدًا بالتحسين والتقدم المستمر لأنشطة R&eacute;gie في خدمة الرضا. راحة مواطن مراكش.</p>\r\n<p>في ما يخص&hellip;</p>\r\n<p>شهادة ISO 9001: 2015 لمطابقة RADEEMA وفقًا للمتطلبات المعيارية المتعلقة بنظام إدارة الجودة. إنه يثبت التزام R&eacute;gie بزيادة رضا العملاء.</p>\r\n<p>شهادة ISO 14001: 2015 لمطابقة RADEEMA وفقًا للمتطلبات المعيارية المتعلقة بنظام الإدارة البيئية. إنه يثبت التزام R&eacute;gie بتحسين أدائها البيئي.</p>\r\n<p><span class=\"VIiyi\" lang=\"ar\"><span class=\"JLqJ4b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">شهادة OHSAS 18001: 2013 لمطابقة RADEEMA وفقًا للمتطلبات المعيارية المتعلقة بنظام إدارة الصحة والسلامة المهنية. إنه يثبت التزام R&eacute;gie بتحسين إدارة المخاطر وتقليل عدد حوادث العمل والامتثال لممارساتها مع التشريعات الحالية وتطوراتها.</span></span></p>'),
(19, 'RADEEMA maintient l’accréditation de son laboratoire d’analyse d’eau potable selon ISO/CEI 17025', '<p>Cinq ans apr&egrave;s l&rsquo;obtention de l\'accr&eacute;ditation ISO 17025:2005, par le Minist&egrave;re de l&rsquo;Industrie, du Commerce, de l&rsquo;investissement et de l&rsquo;Economie Num&eacute;rique, pour les activit&eacute;s de son laboratoire d&rsquo;analyse d&rsquo;eau potable, la RADEEMA r&eacute;affirme encore une fois son engagement en maintenant cette distinction pour un autre cycle d\'accr&eacute;ditation. &nbsp;<br />En effet, le maintien de cetteaccr&eacute;ditation, sur avis favorable de la commission d&rsquo;accr&eacute;ditation des laboratoires d&rsquo;analyse relevant du Minist&egrave;re sus cit&eacute;, constitue une &eacute;tape importante dans le processus d&rsquo;am&eacute;lioration continue de la qualit&eacute; des services rendus par la R&eacute;gie aux citoyens de la cit&eacute; ocre et confirme la comp&eacute;tence de son &eacute;quipe ainsi que la validit&eacute; deses m&eacute;thodes d&rsquo;analyses utilis&eacute;es pour statuer sur la qualit&eacute; de l\'eau distribu&eacute;e.<br />A ce titre, les prestations d&rsquo;analyses audit&eacute;es lors de la cinqui&egrave;me &eacute;valuation de surveillance d&rsquo;accr&eacute;ditation, concerne celles relevant du domaine des analyses physico-chimiques sur les eaux potables. Les r&eacute;sultats de cette &eacute;valuation confirment la pr&eacute;sence de la qualit&eacute; exig&eacute;e dans les activit&eacute;s du laboratoire ainsi que dans les proc&eacute;dures, les processus et la conformit&eacute; des r&eacute;sultats.</p>', 1, '2016-08-09 15:35:37', '2016-08-09 15:35:37', '1626452302-article (11).jpg', 0, 'راديما تحافظ على اعتماد معمل تحليل مياه الشرب وفقًا لمعيار ISO/CEI 17025', '<p>بعد خمس سنوات من الحصول على اعتماد ISO 17025: 2005 ، من قبل وزارة الصناعة والتجارة والاستثمار والاقتصاد الرقمي ، لأنشطة مختبر تحليل مياه الشرب ، تؤكد راديما مرة أخرى التزامها بالحفاظ على هذا التميز لدورة اعتماد أخرى. في الواقع ، يعد الحفاظ على هذا الاعتماد ، بناءً على رأي إيجابي من لجنة اعتماد مختبرات التحليل التابعة للوزارة المذكورة أعلاه ، خطوة مهمة في عملية التحسين المستمر لجودة الخدمات التي تقدمها الإدارة للمواطنين. تؤكد كفاءة فريقها وكذلك صحة طرق التحليل المستخدمة لتحديد جودة المياه الموزعة. على هذا النحو ، فإن خدمات التحليل التي تم تدقيقها خلال التقييم الخامس لرصد الاعتماد تتعلق بتلك المتعلقة بمجال التحليلات الفيزيائية والكيميائية لمياه الشرب. تؤكد نتائج هذا التقييم وجود الجودة المطلوبة في أنشطة المختبر وكذلك في الإجراءات والعمليات ومطابقة النتائج.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `title_ar` varchar(150) DEFAULT NULL,
  `description_ar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`id`, `title`, `description`, `title_ar`, `description_ar`) VALUES
(2, 'Avis de recrutement 2016', '<p>Avis de recrutement 2016</p>', 'إشعار التوظيف 2016', '<div class=\"J0lOec\"><span class=\"VIiyi\" lang=\"ar\"><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">إشعار التوظيف 2016</span></span></div>\r\n<div class=\"UdTY9 BwTYAc Yb6eTe\" aria-hidden=\"true\" data-location=\"2\">&nbsp;</div>');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idCat` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `content` text DEFAULT NULL,
  `name_ar` varchar(100) DEFAULT NULL,
  `content_ar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCat`, `name`, `content`, `name_ar`, `content_ar`) VALUES
(1, 'Espace clientèle', '<p><strong>Notre relation avec les Clients</strong></p>\n<p>Pr&eacute;occup&eacute;e par l\'am&eacute;lioration continue de la qualit&eacute; des services assur&eacute;s, la RADEEMA attache du prix &agrave; mettre &agrave; la disposition de ses clients le meilleur service pour r&eacute;pondre de la mani&egrave;re la plus am&eacute;lior&eacute;e et la plus fid&egrave;le &agrave; leurs besoins et attentes.</p>\n<p>Notre volont&eacute; r&eacute;side dans la concr&eacute;tisation du droit &agrave; l\'information et la cr&eacute;ation d\'une relation transparente et simple entre la RADEEMA et sa client&egrave;le.</p>\n<p>C\'est dans cette optique que ce espace clients, outil simple d\'usage, clair et explicite a &eacute;t&eacute; d&eacute;velopp&eacute; pour orienter l\'internaute dans ses d&eacute;marches et r&eacute;pondre &agrave; ses questions.</p>\n<p>Cet espace relate toutes les d&eacute;marches commerciales permettant d\'informer le client sur les modalit&eacute;s de branchement, d\'abonnement, les structures tarifaires, les canaux de paiement ainsi qu\'un ensemble d\'astuces et de contacts utiles.</p>', 'فضاء الزبناء', '<p><strong>علاقتنا مع العملاء</strong></p>\n<p><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"2\">نظرًا لقلقها بشأن التحسين المستمر لجودة الخدمات المقدمة ، تولي RADEEMA أهمية كبيرة لتزويد عملائها بأفضل خدمة للاستجابة بأفضل الطرق وأكثرها وفاءً باحتياجاتهم وتوقعاتهم.</span>&nbsp;</p>\n<p><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"4\">تكمن إرادتنا في إعمال الحق في المعلومات وإنشاء علاقة شفافة وبسيطة بين RADEEMA وعملائها.</span></p>\n<p><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"6\">ومن هذا المنطلق ، تم تطوير منطقة العميل هذه ، وهي أداة سهلة الاستخدام وواضحة&nbsp; لتوجيه مستخدمي الإنترنت في إجراءاتهم والإجابة على أسئلتهم.</span></p>\n<div class=\"J0lOec\"><span class=\"VIiyi\" lang=\"ar\"><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"8\">تصف هذه المساحة جميع الإجراءات التجارية التي تتيح إبلاغ العميل بشروط الاتصال والاشتراك وهياكل التعريفة وقنوات الدفع بالإضافة إلى مجموعة من النصائح وجهات الاتصال المفيدة.</span></span></div>\n<div class=\"UdTY9 qhIQqf Yb6eTe\" aria-hidden=\"true\" data-location=\"2\">&nbsp;</div>\n<p>&nbsp;</p>'),
(2, 'Espace fournisseurs', '<p><strong>ICE RADEEMA : 001644268000015</strong></p>\n<p>&nbsp;</p>\n<p><strong>Notre relation avec les fournisseurs</strong></p>\n<p>Pour la facilitation de l&rsquo;acc&egrave;s &agrave; l&rsquo;information, un espace a &eacute;t&eacute; mis &agrave; votre disposition : Fournisseurs, Entrepreneurs, Hommes d&rsquo;art, Bureaux d&rsquo;&eacute;tudes...etc pour vous communiquer le programme pr&eacute;visionnel de l\'ann&eacute;e en cours, les appels d\'offres lanc&eacute;s par la RADEEMA et de vous renseigner sur les r&eacute;sultats d&eacute;finitifs y aff&eacute;rents prononc&eacute;s par la commission des appels d&rsquo;offres.</p>\n<p>Vous trouverez &eacute;galement dans cet espace un menu d&eacute;di&eacute; aux &laquo; Offres de service &raquo; o&ugrave; nous vous invitons &agrave; nous communiquer vos services et activit&eacute;s ayant trait aux domaines d&rsquo;action de la R&eacute;gie.</p>', 'فضاء المموّنين', '<p><strong><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">ICE RADEEMA: 001644268000015</span> </strong></p>\n<p><strong><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">علاقتنا مع الموردين </span></strong></p>\n<p><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">لتسهيل الوصول إلى المعلومات ، تم توفير مساحة لك: الموردون ورجال الأعمال ورجال الفن ومكاتب التصميم وما إلى ذلك لإبلاغ البرنامج المؤقت للعام الحالي. حول النتائج النهائية ذات الصلة المعلنة من قبل لجنة المناقصات.&nbsp;</span></p>\n<div class=\"J0lOec\"><span class=\"VIiyi\" lang=\"ar\"><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"6\">ستجد أيضًا في هذه المساحة قائمة مخصصة لـ \"عروض الخدمة\" حيث ندعوك لإبلاغنا بخدماتك وأنشطتك المتعلقة بمجالات عمل الوكالة .</span></span></div>\n<div class=\"UdTY9 qhIQqf Yb6eTe\" aria-hidden=\"true\" data-location=\"2\">&nbsp;</div>\n<p>&nbsp;</p>'),
(3, 'A Propos', '', 'تعرف علينا', NULL),
(4, 'Nos métiers', '', 'مهاراتنا', NULL),
(5, 'Liens Utiles', '', 'روابط مفيدة \n', NULL),
(6, 'Découvrir RADEEMA', '', 'إكتشف وكالتنا', NULL),
(7, 'Espace Grands Comptes', '<p><strong>Notre relation avec les Grands comptes &amp; Institutionnels</strong></p>\n<p>Pr&eacute;occup&eacute;e par l\'am&eacute;lioration continue de la qualit&eacute; des services assur&eacute;s, la RADEEMA attache du prix &agrave; mettre &agrave; la disposition de ses clients le meilleur service pour r&eacute;pondre de la mani&egrave;re la plus am&eacute;lior&eacute;e et la plus fid&egrave;le &agrave; leurs besoins et attentes.</p>\n<p>Notre volont&eacute; r&eacute;side dans la concr&eacute;tisation du droit &agrave; l\'information et la cr&eacute;ation d\'une relation transparente et simple entre la RADEEMA et sa client&egrave;le.</p>\n<p>C\'est dans cette optique que ce espace clients, outil simple d\'usage, clair et explicite a &eacute;t&eacute; d&eacute;velopp&eacute; pour orienter l\'internaute dans ses d&eacute;marches et r&eacute;pondre &agrave; ses questions.</p>\n<p>Cet espace relate toutes les d&eacute;marches commerciales permettant d\'informer le client sur les modalit&eacute;s de branchement, d\'abonnement, les structures tarifaires, les canaux de paiement ainsi qu\'un ensemble d\'astuces et de contacts utiles.</p>', 'فضاء الجماعات الترابية', '<p><strong><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">علاقتنا مع الحسابات والمؤسسات الرئيسية</span> </strong></p>\n<p><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">نظرًا لقلقها بشأن التحسين المستمر لجودة الخدمات المقدمة ، تولي RADEEMA أهمية كبيرة لتزويد عملائها بأفضل خدمة للاستجابة بأفضل الطرق وأكثرها وفاءً باحتياجاتهم وتوقعاتهم.&nbsp;</span></p>\n<p><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">تكمن إرادتنا في إعمال الحق في المعلومات وإنشاء علاقة شفافة وبسيطة بين RADEEMA وعملائها. </span></p>\n<p><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"0\">ومن هذا المنطلق ، تم تطوير منطقة العميل هذه ، وهي أداة سهلة الاستخدام وواضحة وواضحة لتوجيه مستخدمي الإنترنت في إجراءاتهم والإجابة على أسئلتهم. </span></p>\n<div class=\"J0lOec\"><span class=\"VIiyi\" lang=\"ar\"><span class=\"JLqJ4b ChMk0b\" data-language-for-alternatives=\"ar\" data-language-to-translate-into=\"fr\" data-phrase-index=\"8\">تصف هذه المساحة جميع الإجراءات التجارية التي تتيح إبلاغ العميل بشروط الاتصال والاشتراك وهياكل التعريفة وقنوات الدفع بالإضافة إلى مجموعة من النصائح وجهات الاتصال المفيدة.</span></span></div>\n<div class=\"UdTY9 qhIQqf Yb6eTe\" aria-hidden=\"true\" data-location=\"2\">&nbsp;</div>'),
(8, 'Espace RH', NULL, 'فضاء الموارد البشرية', NULL),
(9, 'Développement Durable', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://localhost/radeema/upload/Developpement durable image 1 (1).png\" alt=\"\" width=\"500\" height=\"573\" /></p>\n<p style=\"text-align: center;\"><img src=\"http://localhost/radeema/upload/Developpement durable image v3.png\" alt=\"\" width=\"500\" height=\"619\" /></p>\n<p style=\"text-align: center;\"><img src=\"http://localhost/radeema/upload/Developpement durable image 3.png\" alt=\"\" width=\"500\" height=\"564\" /></p>\n<p style=\"text-align: center;\"><img src=\"http://localhost/radeema/upload/Projets.png\" alt=\"\" width=\"500\" height=\"504\" /></p>\n<p style=\"text-align: center;\"><img src=\"http://localhost/radeema/upload/Projets 1.png\" alt=\"\" width=\"500\" height=\"638\" /></p>\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://localhost/radeema/upload/Projets 2.png\" alt=\"\" width=\"500\" height=\"642\" /></p>', 'فضاء التنمية المستدامة', '<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://localhost/radeema/upload/Developpement durable image 1 (1).png\" alt=\"\" width=\"500\" height=\"573\" /></p>\n<p style=\"text-align: center;\"><img src=\"http://localhost/radeema/upload/Developpement durable image v3.png\" alt=\"\" width=\"500\" height=\"619\" /></p>\n<p style=\"text-align: center;\"><img src=\"http://localhost/radeema/upload/Developpement durable image 3.png\" alt=\"\" width=\"500\" height=\"564\" /></p>\n<p style=\"text-align: center;\"><img src=\"http://localhost/radeema/upload/Projets.png\" alt=\"\" width=\"500\" height=\"504\" /></p>\n<p style=\"text-align: center;\"><img src=\"http://localhost/radeema/upload/Projets 1.png\" alt=\"\" width=\"500\" height=\"638\" /></p>\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"http://localhost/radeema/upload/Projets 2.png\" alt=\"\" width=\"500\" height=\"642\" /></p>');

-- --------------------------------------------------------

--
-- Table structure for table `category_pages`
--

CREATE TABLE `category_pages` (
  `idPage` int(11) NOT NULL,
  `idCat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_pages`
--

INSERT INTO `category_pages` (`idPage`, `idCat`) VALUES
(38, 6),
(27, 3),
(33, 5),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(68, 1),
(74, 2),
(76, 2),
(78, 2),
(84, 7),
(87, 7),
(88, 7),
(79, 9),
(80, 9),
(81, 9),
(82, 9),
(83, 9),
(24, 4),
(42, 4),
(40, 4),
(39, 4),
(43, 4),
(41, 4),
(22, 3),
(20, 3),
(23, 3),
(28, 3),
(46, 3),
(26, 3),
(31, 5),
(35, 6),
(69, 1),
(70, 1),
(34, 5),
(34, 1),
(85, 7),
(86, 7),
(44, 6),
(45, 6),
(29, 5),
(30, 5),
(75, 2),
(67, 1),
(77, 2),
(32, 5);

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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `idFaq` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`idFaq`, `question`, `answer`) VALUES
(4, 'jkjnlms', '<p>,l,cl lnnfxm mndc,lnb lcnl</p>'),
(5, 'ff', '<p>ff</p>');

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
  `datecom` date DEFAULT NULL,
  `Plugin` int(11) DEFAULT NULL,
  `num` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`idFile`, `link`, `createdAt`, `draft`, `title`, `datecom`, `Plugin`, `num`) VALUES
(9, '1626188980-Communiqué CA Décembre 2018.pdf', '2021-07-13 16:09:40', 0, 'Communiqué Conseil d\'Administration Décembre 2018', '2019-01-01', 1, NULL),
(10, '1626189039-communiqué ca Juin 2018 DG_VF_VF (V4).pdf', '2021-07-13 16:10:39', 0, 'Communiqué Conseil d\'Administration Juin 2018', '2018-06-01', 1, NULL),
(11, '1626189065-Comm CA Déc 2017 VS.pdf', '2021-07-13 16:11:05', 0, 'Communiqué Conseil d\'Administration Décembre 2017', '2018-01-01', 1, NULL),
(12, '1626189088-Communiqué 500 VF.pdf', '2021-07-13 16:11:28', 0, 'Communiqué \"Les 500 plus grandes entreprises Marocaines\"', '2017-11-01', 1, NULL),
(13, '1626189120-Communiqué clientèle 2017 (1).pdf', '2021-07-13 16:12:00', 0, 'Communiqué \"L\'excellence opérationnelle au service de la satisfaction des Marrakechis\"', '2017-04-01', 1, NULL),
(14, '1626189160-Communiqué BID2016FR_ARBv5 (1).pdf', '2021-07-13 16:12:40', 0, 'Communiqué \"Le Quality Summit Award - New York\"', '2016-06-01', 1, NULL),
(15, '1626189214-communiqué CA Décembre 2015 (v2).pdf', '2021-07-13 16:13:34', 0, 'Communiqué Conseil d\'Administration Décembre 2015', '2016-06-01', 1, NULL),
(16, '1626189239-COM  Trophé Maroc Tourisme D FR.pdf', '2021-07-13 16:13:59', 0, 'Communiqué \"Trophée Maroc du Tourisme Durable\"', '2016-01-01', 1, NULL),
(17, '1626189265-Communiqué certification QSE.pdf', '2021-07-13 16:14:25', 0, 'Communiqué certification QSE', '2015-11-01', 1, NULL),
(18, '1626189295-Communiqué de presse iso17025 _ 2015.pdf', '2021-07-13 16:14:55', 0, 'Communiqué de presse ISO17025 2015', '2015-11-01', 1, NULL),
(19, '1626189321-communiqué ca Juin 2015ppt.pdf', '2021-07-13 16:15:21', 0, 'Communiqué Conseil d\'Administration Juin 2015', '2015-06-01', NULL, NULL),
(23, '1627045058-Autorisation de prélèvement bancaire-RADEEMA.doc', '2021-07-23 13:57:38', 0, 'Autorisation de prélèvement bancaire-RADEEMA', '0000-00-00', 4, 'FO N°98-2015'),
(24, '1627046051-Autorisation de prélèvement bancaire-RADEEMA (1).doc', '2021-07-23 14:14:11', 0, 'Autorisation d\'abonnement du propriétaire-RADEEMA', '0000-00-00', 4, 'FO N°99-2015'),
(28, '1627389752-Communiqué CA Décembre  2020 VF.pdf', '2021-07-27 13:42:32', 0, 'Communiqué Conseil d\'Administration Décembre 2020', '0000-00-00', 7, ''),
(31, '1627391571-flashInfo Octobre 2020.pdf', '2021-07-27 14:12:51', 0, 'RADEEMA Flash Info Octobre 2020', NULL, 7, NULL),
(32, '1627391614-flashInfo Certifications 2020.pdf', '2021-07-27 14:13:34', 0, 'Spécial Numéro : Certification & Accréditation 2020', NULL, 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `link`) VALUES
(1, '1627473658-9.jpg'),
(3, '1627473860-11.jpg'),
(4, '1627473910-GK3A9849.jpg'),
(5, '1627473922-GK3A9944.jpg'),
(6, '1627474032-DJI_0001-2.jpg'),
(7, '1627474041-GK3A0038.jpg'),
(8, '1627474068-atlas1.jpg'),
(9, '1627474075-IMG_0288.jpg'),
(10, '1627474099-IMG_0271.jpg'),
(11, '1627474104-1.jpg'),
(12, '1627474123-IMG_0290.jpg');

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
  `media` varchar(150) NOT NULL,
  `title_ar` varchar(100) DEFAULT NULL,
  `content_ar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`idPage`, `title`, `parent_id`, `path`, `show_in_menu`, `draft`, `createdAt`, `updatedAt`, `content`, `section`, `media`, `title_ar`, `content_ar`) VALUES
(12, 'Régler mes factures', NULL, NULL, 1, 0, '2005-07-21 02:01:15', '2005-07-21 02:01:15', '', 1, '', 'ادفع فواتيري ', ''),
(13, 'Associer mes contrats', NULL, NULL, 1, 0, '2005-07-21 02:01:32', '2005-07-21 02:01:32', '', 1, '', '0', '0'),
(14, 'Mon compte client', NULL, NULL, 1, 0, '2005-07-21 02:03:57', '2005-07-21 02:03:57', '', 1, '', '0', '0'),
(15, 'Suivi consommation', NULL, NULL, 1, 0, '2005-07-21 02:04:34', '2005-07-21 02:04:34', '', 1, '', 'تتبع استهلاكي', ''),
(16, 'service d\'envoi des factures', NULL, NULL, 1, 0, '2005-07-21 02:07:16', '2005-07-21 02:07:16', '', 1, '', '0', '0'),
(17, 'Mes réclamations et demandes', NULL, NULL, 1, 0, '2005-07-21 02:07:40', '2005-07-21 02:07:40', '', 1, '', '0', '0'),
(18, 'Ma relation avec la radeema', NULL, NULL, 1, 0, '2005-07-21 02:08:09', '2005-07-21 02:08:09', '', 1, '', '0', '0'),
(20, 'Mot du directeur général', NULL, NULL, 1, 0, '2005-07-21 04:53:07', '2005-07-21 04:53:07', '<p>M. Salah Eddine MOUNTASSIR</p>\r\n<p><strong>Directeur g&eacute;n&eacute;ral P.I. de la RADEEMA</strong></p>\r\n<p>Consciente de l&rsquo;importance capitale que rev&ecirc;t la gestion des m&eacute;tiers de la distribution de l&rsquo;Eau Potable, de l&rsquo;Electricit&eacute;, de l&rsquo;Assainissement Liquide et la protection de l&rsquo;environnement dans la vie quotidienne du citoyen et dans le d&eacute;veloppement &eacute;conomique et social des Collectivit&eacute;s Locales, la R&eacute;gie Autonome de Distribution d&rsquo;Electricit&eacute;&nbsp;et d&rsquo;Eau de Marrakech t&eacute;moigne du fort labeur de ses collaborateurs engag&eacute;s pour assurer le meilleur des services pour les habitants de Marrakech et de ses visiteurs, offrant ainsi les conditions favorables pour l&rsquo;&eacute;panouissement socio-&eacute;conomique et le d&eacute;veloppement durable de la ville, de la R&eacute;gion et du Royaume.</p>\r\n<p>Tout au long des ann&eacute;es 2018 et 2019 et &agrave;&nbsp;travers l&rsquo;ach&egrave;vement et le d&eacute;marrage de grands projets mobilisateurs, nous avons orient&eacute;&nbsp;tous nos programmes et actions pour nourrir notre ambition de positionner la RADEEMA parmi les grandes entreprises du Royaume.</p>\r\n<p>Cette vision conditionn&eacute;e pat le strict respect du Code Marocain de Bonnes Pratiques de Gouvernance, nous a permis de satisfaire les exigences de l&rsquo;ensemble de nos parties int&eacute;ress&eacute;es et d&rsquo;assurer une exploitation optimale de notre infrastructure tout en garantissant son renforcement.</p>\r\n<p>Nous avons &oelig;uvr&eacute;&nbsp;au quotidien &agrave;&nbsp;instaurer une nouvelle culture plus coh&eacute;rente, ax&eacute;e sur le respect de nos valeurs, exigeant de nous une citoyennet&eacute;&nbsp;plus exemplaire et une ligne de conduite marqu&eacute;e par l&rsquo;&eacute;quit&eacute;&nbsp;dans nos d&eacute;cisions, l&rsquo;am&eacute;lioration continue, l&rsquo;&eacute;thique et la transparence dans nos relations.</p>\r\n<p>Cette culture constitue aussi un levier majeur dans la concr&eacute;tisation de nos objectifs visant plus particuli&egrave;rement la g&eacute;n&eacute;ralisation de l&rsquo;acc&egrave;s &agrave;&nbsp;nos services de base, enregistrant une am&eacute;lioration des taux de desserte ainsi que l&rsquo;am&eacute;lioration du rendement de nos r&eacute;seaux. Par ailleurs, nous avons continu&eacute;&nbsp;&agrave;&nbsp;concr&eacute;tiser nos programmes de d&eacute;veloppement par le lancement de nouveaux projets toujours plus respectueux de notre environnement notamment le projet de s&eacute;chage solaire des boues et l&rsquo;extension de la capacit&eacute;&nbsp;de traitement de la STEP de Marrakech et de sa ligne de valorisation de biogaz par la m&eacute;thanisation des boues d&rsquo;&eacute;puration.</p>\r\n<p>Nos engagements ont concern&eacute;&nbsp;&eacute;galement la valorisation des boues d&rsquo;&eacute;puration s&eacute;ch&eacute;es comme combustible de substitution dans l&rsquo;industrie de fabrication du ciment par la signature d&rsquo;un protocole d&rsquo;accord faisant ainsi de ce d&eacute;chet une source d&rsquo;&eacute;nergie alternative.</p>', 3, '', 'كلمة المدير العام', ''),
(22, 'Nos valeurs', NULL, NULL, 1, 0, '2005-07-21 05:00:37', '2005-07-21 05:00:37', '<p><strong>RADEEMA en bref ...</strong></p>\r\n<p>Le d&eacute;veloppement r&eacute;alis&eacute; tout au long de ces ann&eacute;es aussi bien au niveau des investissements qu&rsquo;au niveau de performances est le signe de la bonne sant&eacute; de notre entreprise. L&rsquo;essor escompt&eacute; &agrave; travers les r&eacute;alisations futures et la taille projet&eacute;e feront certainement de la RADEEMA l&rsquo;entreprise la plus importante dans son secteur d&rsquo;activit&eacute; et par l&agrave;-m&ecirc;me le mod&egrave;le &agrave; suivre.</p>\r\n<p>Les autres activit&eacute;s de la R&eacute;gie connaissent &eacute;galement des niveaux de performances assez remarquables, chacune dans son domaine, maniant habilement l&rsquo;&eacute;quilibre entre l&rsquo;ambition, la s&eacute;r&eacute;nit&eacute;, la s&eacute;curit&eacute; et surtout l&rsquo;enthousiasme.</p>\r\n<p>Ces &eacute;volutions n&rsquo;ont certes pu se concr&eacute;tiser sans la volont&eacute; in&eacute;branlable du top management qui sait surmonter les difficult&eacute;s tout en conjuguant les comp&eacute;tences individuelles et collectives.</p>\r\n<p>Conscient des d&eacute;fis majeurs &agrave; venir, le management a toujours privil&eacute;gi&eacute; la mise en place et l&rsquo;application des valeurs de bonne gestion&nbsp;: responsabilit&eacute; et r&eacute;alisation de soi&nbsp;; travail d&rsquo;&eacute;quipe et solidarit&eacute;&nbsp;; enthousiasme et satisfaction des clients&nbsp;; profitabilit&eacute; et respect de l&rsquo;environnement.</p>\r\n<p>Autant de valeurs qui ont milit&eacute; pour la r&eacute;ussite de nos projets, autant de valeurs qui renforcent notre R&eacute;gie.</p>\r\n<p><a href=\"https://www.radeema.ma/documents/20181/0/Charte+des+valeurs+2016/042e0e6a-015b-4676-85c7-fc2824e19443\">Charte des valeurs</a></p>\r\n<p>&nbsp;</p>', 3, '', 'قيمنا', ''),
(23, 'Engagement societal', NULL, NULL, NULL, 0, '2007-07-21 03:58:33', '2007-07-21 03:58:33', '<p><strong>Une responsabilit&eacute; soci&eacute;tale au service du confort des Marrakchis</strong></p>\r\n<p>Dans le but d&rsquo;accompagner l&rsquo;essor de la ville, la RADEEMA a entam&eacute; la r&eacute;alisation d&rsquo;un programme d&rsquo;investissement d&rsquo;envergure d&rsquo;un montant de 1,6 Milliards DH qui s&rsquo;&eacute;tale jusqu&rsquo;&agrave; 2017. Ce programme s&rsquo;inscrivant dans le cadre de la convention, sign&eacute;e le</p>\r\n<p>6 janvier 2014 sous la pr&eacute;sidence effective de Sa Majest&eacute; le Roi Mohamed VI, que Dieu l&rsquo;Assiste, comporte :</p>\r\n<p>Une composante concernant la&nbsp; pr&eacute;servation de l&rsquo;environnement&nbsp; avec une enveloppe de 842&nbsp; Millions DH, incluant&nbsp; essentiellement l&rsquo;extension de la&nbsp; station d&rsquo;&eacute;puration des eaux&nbsp; us&eacute;es, le traitement des boues&nbsp; r&eacute;siduaires, l&rsquo;extension du r&eacute;seau&nbsp; d&rsquo;assainissement, le&nbsp; renouvellement du r&eacute;seau de la&nbsp; m&eacute;dina et la mise en place des&nbsp; collecteurs principaux&nbsp; d&rsquo;assainissement autour de la&nbsp; ville.</p>\r\n<p>Et une deuxi&egrave;me composante&nbsp; relative &agrave; l&rsquo;accompagnement de la&nbsp; mise &agrave; niveau urbaine avec un&nbsp; montant de 758 Millions DH, et ce&nbsp; par notamment de nouveaux&nbsp; r&eacute;servoirs d&rsquo;eau, la mise en place&nbsp; de gros feeders d&rsquo;eau potable&nbsp; autour de la ville, l&rsquo;extension et le&nbsp; renouvellement des r&eacute;seaux d&rsquo;eau&nbsp; et d&rsquo;&eacute;lectricit&eacute;, la construction&nbsp; d&rsquo;un nouveau poste source&nbsp; d&rsquo;&eacute;lectricit&eacute;.</p>', 3, '', 'الإلتزام المجتمعي', ''),
(24, 'Nos métiers', NULL, NULL, NULL, 0, '2007-07-21 04:00:09', '2007-07-21 04:00:09', '<p>Nos Metiers</p>\r\n<p>La Radeema est charg&eacute;e d&rsquo;assurer &agrave; l&rsquo;int&eacute;rieur de son p&eacute;rim&egrave;tre d&rsquo;action les services publics de distribution d&rsquo;eau et d&rsquo;&eacute;lectricit&eacute; ainsi que la gestion du service d&rsquo;assainissement liquide.</p>\r\n<p>Le p&eacute;rim&egrave;tre d&rsquo;intervention de la r&eacute;gie repr&eacute;sente environ 658 km&sup2; et couvre la ville de Marrakech et une partie des communes rurales avoisinantes..</p>\r\n<p style=\"margin: 0px 0px 10px; font-family: Verdana; color: #3c9fdd; font-weight: bold; font-size: 12px; text-align: justify;\">&nbsp;</p>', 4, '', 'مهاراتنا', ''),
(26, 'Demarche QSE', NULL, NULL, NULL, 0, '2008-07-21 02:05:45', '2008-07-21 02:05:45', '', 3, '', 'إجراءات الجودة-الامان-البيئة', ''),
(27, 'Espace Presse', NULL, NULL, NULL, 0, '2008-07-21 02:09:18', '2008-07-21 02:09:18', '<p><strong>RADEEMA presse</strong></p>\r\n<p>Ici vous trouvez les communiqu&eacute;s de presse &agrave; t&eacute;l&eacute;charger :</p>', 3, '', 'فضاء الصحافة', ''),
(28, 'Projets mobilisateurs', NULL, NULL, NULL, 0, '2008-07-21 02:10:30', '2008-07-21 02:10:30', '', 3, '', 'المشاريع الضخمة', ''),
(29, 'Avis d\'appel d\'offre', NULL, NULL, NULL, 0, '2008-07-21 05:26:28', '2008-07-21 05:26:28', '', 5, '', 'تقديم العروض', ''),
(30, 'Résultat d\'appel d\'offre', NULL, NULL, NULL, 0, '2008-07-21 05:26:57', '2008-07-21 05:26:57', '', 5, '', 'نتائج العروض', ''),
(31, 'Demande de Stage', NULL, NULL, NULL, 0, '2008-07-21 05:27:25', '2008-07-21 05:27:25', '', 5, '', 'طلب تدريب', ''),
(32, 'Demande de Branchement', 18, NULL, NULL, 0, '2008-07-21 05:27:53', '2008-07-21 05:27:53', '<h2><span style=\"color: #ff9900;\">Pour votre branchement provisoire:</span></h2>\r\n<p>Ce type de branchement est destin&eacute; &agrave; l&rsquo;alimentation en eau ou en &eacute;lectricit&eacute; des chantiers des nouveaux projets durant la p&eacute;riode des travaux ou &agrave; l&rsquo;occasion d&rsquo;un &eacute;v&egrave;nement (tournage d&rsquo;un film, festival ou autres manifestations autoris&eacute;es). Il n&rsquo;est accord&eacute; qu&rsquo;aux entreprises charg&eacute;es de la r&eacute;alisation du projet et apr&egrave;s accord de la Direction G&eacute;n&eacute;rale.</p>\r\n<p>N.B. : Pour les puissances ne d&eacute;passant pas 60 KVA, l&rsquo;alimentation provisoire en &eacute;lectricit&eacute; sera assur&eacute;e en basse tension si nos &eacute;quipements existants le permettent. Le cas &eacute;ch&eacute;ant, l&rsquo;alimentation se fera en moyenne tension, et dans ce cas le poste MT/BT. sera install&eacute; soit par la RADEEMA en location, soit par le client lui-m&ecirc;me.</p>\r\n<p class=\"label label-info\">Pi&egrave;ces &agrave; fournir.</p>\r\n<div>\r\n<p class=\"label label-inverse\">Pi&egrave;ces communes :</p>\r\n<p><strong>&diams; Demande de branchement ou pr&eacute; imprim&eacute; sign&eacute; par le client avec les caract&eacute;ristiques techniques du branchement (calibre, puissance..) ;</strong></p>\r\n<p><strong>&diams; Photocopie de la carte d&rsquo;identit&eacute; (CIN) pour les personnes physiques;</strong></p>\r\n<p><strong>&diams; Statut de l&rsquo;entreprise ou registre du commerce et attestation de d&eacute;l&eacute;gation de signature pour les personnes morales;</strong></p>\r\n<p><strong>&diams; Acte de propri&eacute;t&eacute; ou autorisation l&eacute;galis&eacute;e du propri&eacute;taire si le demandeur n&rsquo;est pas le propri&eacute;taire;</strong></p>\r\n<p><strong>&diams; Autorisation de construire ;</strong></p>\r\n<p><strong>&diams; Plan de situation ;</strong></p>\r\n<p><strong>&diams; Jeu de plans approuv&eacute;s par les autorit&eacute;s comp&eacute;tentes.</strong></p>\r\n<p class=\"label\">Pour un branchement Basse Tension :</p>\r\n<p><strong>&diams; Certificat de garantie du disjoncteur diff&eacute;rentiel (mod&egrave;le agr&eacute;&eacute;);</strong></p>\r\n<p class=\"label\">Pour un raccordement Moyenne Tension :</p>\r\n<p><strong>&diams; Demande formul&eacute;e par &eacute;crit avec puissance du ou des transformateurs &agrave; installer;</strong></p>\r\n<p><strong>&diams; Plan de masse avec emplacement exact du poste;</strong></p>\r\n<p><strong>&diams; Jeu de Plans des &eacute;quipements du poste &eacute;tablis par une entreprise agr&eacute;&eacute;e par la RADEEMA.</strong></p>\r\n<p class=\"label\">Pour un branchement eau (gros calibre) :</p>\r\n<p><strong>&diams; Fiche technique des besoins journaliers en eau(m3/j).</strong></p>\r\n<p class=\"label\">Frais &agrave; la charge du client :</p>\r\n<p><strong>&diams; Participation &agrave; l&rsquo;infrastructure;</strong></p>\r\n<p><strong>&diams; Co&ucirc;t de branchement ou de raccordement et frais d&rsquo;extension s&rsquo;il y a lieu;</strong></p>\r\n<p><strong>&diams; Peines et soins sur travaux.</strong></p>\r\n</div>\r\n<h2><span style=\"color: #ff9900;\">Pour votre branchement d&eacute;finitif:</span></h2>\r\n<p>Ce type de branchement ou raccordement est destin&eacute; &agrave; l&rsquo;alimentation en eau potable, en &eacute;lectricit&eacute; ou en assainissement d&rsquo;une construction &agrave; l&rsquo;int&eacute;rieur d&rsquo;un lotissement, d&rsquo;une unit&eacute; industrielle, ou l&rsquo;alimentation d&rsquo;un immeuble.</p>\r\n<p>Pour les constructions particuliaire ou dans un lotissement, la demande se fait au niveau de l&rsquo;agence de rattachement du client par contre pour l&rsquo;unit&eacute; industrielle et les grands projets en g&eacute;n&eacute;ral, la demande se fait &agrave; l&rsquo;agence du si&egrave;ge (av. Mohamed VI &ndash; BP 520 &ndash; gu&eacute;liz) ou bien par courrier port&eacute; et d&eacute;pos&eacute; au bureau d&rsquo;ordre de la Direction G&eacute;n&eacute;rale.</p>\r\n<div class=\"t_title\">\r\n<p class=\"label label-info\">Pi&egrave;ces &agrave; fournir.</p>\r\n</div>\r\n<div>\r\n<p class=\"label label-inverse\">Pi&egrave;ces communes :</p>\r\n<p><strong>&diams; Demande de branchement ou pr&eacute; imprim&eacute; sign&eacute; par le client avec les caract&eacute;ristiques techniques du branchement (calibre, puissance..) ;</strong></p>\r\n<p><strong>&diams; Photocopie de la carte d&rsquo;identit&eacute; (CIN) pour les personnes physiques;</strong></p>\r\n<p><strong>&diams; Statut de l&rsquo;entreprise ou registre du commerce et attestation de d&eacute;l&eacute;gation de signature pour les personnes morales;</strong></p>\r\n<p><strong>&diams; Acte de propri&eacute;t&eacute; ou autorisation l&eacute;galis&eacute;e du propri&eacute;taire si le demandeur n&rsquo;est pas le propri&eacute;taire;</strong></p>\r\n<p><strong>&diams; Autorisation de construire ;</strong></p>\r\n<p><strong>&diams; Plan de situation ;</strong></p>\r\n<p><strong>&diams; Jeu de plans approuv&eacute;s par les autorit&eacute;s comp&eacute;tentes.</strong></p>\r\n<p class=\"label\">Pour un branchement Basse Tension :</p>\r\n<p><strong>&diams; Certificat de garantie du disjoncteur diff&eacute;rentiel (mod&egrave;le agr&eacute;&eacute;);</strong></p>\r\n<p class=\"label\">Pour un raccordement Moyenne Tension :</p>\r\n<p><strong>&diams; Demande formul&eacute;e par &eacute;crit avec puissance du ou des transformateurs &agrave; installer;</strong></p>\r\n<p><strong>&diams; Plan de masse avec emplacement exact du poste;</strong></p>\r\n<p><strong>&diams; Jeu de Plans des &eacute;quipements du poste &eacute;tablis par une entreprise agr&eacute;&eacute;e par la RADEEMA.</strong></p>\r\n<p class=\"label\">Pour un branchement eau (gros calibre) :</p>\r\n<p><strong>&diams; Fiche technique des besoins journaliers en eau(m3/j).</strong></p>\r\n<p class=\"label\">Pour un branchement assainissement :</p>\r\n<p><strong>&diams; Plan de la position de la sortie de l&rsquo;&eacute;gout Eaux Us&eacute;es (EU) sur fa&ccedil;ade s&rsquo;il n&rsquo;est pas indiqu&eacute; sur le jeu de plans.</strong></p>\r\n<p class=\"label\">Pour l&rsquo;Unit&eacute; industrielle : pi&egrave;ces &agrave; renseigner sans l&eacute;galisation :</p>\r\n<p><strong>&diams; Pi&egrave;ces justifiant les pouvoirs conf&eacute;r&eacute;s &agrave; la personne (si le signataire n&rsquo;est pas lui m&ecirc;me le g&eacute;rant)</strong></p>\r\n<p><strong>&diams; Fiche de renseignements techniques sur les caract&eacute;ristiques physico-chimiques des eaux rejet&eacute;es dans le r&eacute;seau.</strong></p>\r\n<p><strong>&diams; Dossiers des pr&eacute;traitements pr&eacute;conis&eacute;s en cas de rejets industriels.</strong></p>\r\n<p class=\"label\">Frais &agrave; la charge du client :</p>\r\n<p><strong>&diams; Participation &agrave; l&rsquo;infrastructure;</strong></p>\r\n<p><strong>&diams; Co&ucirc;t de branchement ou de raccordement et frais d&rsquo;extension s&rsquo;il y a lieu;</strong></p>\r\n<p><strong>&diams; Peines et soins sur travaux.</strong></p>\r\n</div>\r\n<p>NB. : En cas d&rsquo;un nouveau branchement dans une zone &eacute;quip&eacute;e, les diff&eacute;rentes participations sont &agrave; r&eacute;gler par le promoteur selon les sp&eacute;cifications du cahier de charges du projet.</p>\r\n<p>En cas de modification apr&egrave;s r&eacute;ception des travaux d\'&eacute;quipement, l&rsquo;&eacute;cart est &agrave; la charge du client.</p>', 5, '', 'طلب الربط', ''),
(33, 'Demande d\'Abonnement', 18, NULL, NULL, 0, '2008-07-21 05:28:12', '2008-07-21 05:28:12', '<p><strong>Pour votre abonnement</strong></p>\r\n<p>Vous ne pouvez &eacute;tablir votre demande d&rsquo;abonnement en &eacute;lectricit&eacute; ou en eau que si les branchements de votre logement ou de votre local sont d&eacute;j&agrave; r&eacute;alis&eacute;s y compris celui de l\'assainissement liquide et que vos arri&eacute;r&eacute;s (le cas &eacute;ventuel) relatifs &agrave; tout autre abonnement sont acquitt&eacute;s.</p>\r\n<div id=\"EABT\" class=\"t_title\">\r\n<h2 class=\"portlet-msg-info\"><span style=\"color: #ff9900;\"><strong><span id=\"dnn_ctr1651_dnnTITLE_lblTitle\" class=\"Head\">Abonnement en Eau/ Electricit&eacute; BT</span></strong></span></h2>\r\n</div>\r\n<div class=\"t_title\">\r\n<div class=\"portlet-msg-info\"><em><strong>Pi&egrave;ces &agrave; fournir.</strong></em></div>\r\n</div>\r\n<p>Cette demande doit se faire &agrave; l&rsquo;agence du si&egrave;ge de la R.A.D.E.E.MA (gu&eacute;liz)</p>\r\n<p><strong>Pi&egrave;ces:</strong></p>\r\n<p><strong>&diams; Demande d&rsquo;abonnement en pr&eacute;cisant la puissance &agrave; souscrire;</strong></p>\r\n<p><strong>&diams; Une photocopie de la CIN de g&eacute;rant;</strong></p>\r\n<p><strong>&diams; Statut ou registre du commerce et d&eacute;l&eacute;gation de signature pour les soci&eacute;t&eacute;s.</strong></p>\r\n<div class=\"portlet-msg-alert\">\r\n<p><strong>Frais &agrave; la charge du client :</strong></p>\r\n<p><strong>&raquo; Frais de cautionnement (pour les personnes physiques);</strong></p>\r\n<p><strong>&raquo; Frais de timbre.</strong></p>\r\n</div>\r\n<div>\r\n<p><strong>Cas d&rsquo;une personne physique : (propri&eacute;taire ou locataire) :</strong></p>\r\n<p><strong>&diams; Demande d&rsquo;abonnement sign&eacute;e par le client;</strong></p>\r\n<p><strong>&diams; Photocopie de la (CIN) ou carte de s&eacute;jour ou passeport (pour les &eacute;trangers);</strong></p>\r\n<p><strong>&diams; Titre de propri&eacute;t&eacute; pour les propri&eacute;taires ou une copie du contrat de bail ou bien une autorisation l&eacute;galis&eacute;e par le propri&eacute;taire en cas de location;</strong></p>\r\n<p><strong>&diams; Permis d&rsquo;habiter ou autorisation administrative d&eacute;livr&eacute;e par les autorit&eacute;s comp&eacute;tentes ou certificat de conformit&eacute; pour les constructions destin&eacute;es &agrave; autre usage que l\'habitation conform&eacute;ment &agrave; la r&eacute;glementation en vigueur (Article 55 de la loi 12/90 de l&rsquo;urbanisme) pour tout nouvel abonnement;</strong></p>\r\n<p><strong>&diams; Registre du commerce pour les locaux &agrave; usage commercial;</strong></p>\r\n<p><strong>&diams; Derni&egrave;re facture de consommation pour les cas de r&eacute;abonnement.</strong></p>\r\n<div class=\"portlet-msg-alert\">\r\n<p><strong>Frais &agrave; la charge du client :</strong></p>\r\n<p><strong>&raquo; Frais de pose et d&eacute;pose du compteur;</strong></p>\r\n<p><strong>&raquo; Co&ucirc;t de la Police d&rsquo;abonnement;</strong></p>\r\n<p><strong>&raquo; Provision (avance sur consommation) pour les personnes physiques;</strong></p>\r\n<p><strong>&raquo; Frais de timbres.</strong></p>\r\n</div>\r\n<p>Cas d&rsquo;une Administration, Collectivit&eacute; locale et Etablissement public<strong>&nbsp;:</strong></p>\r\n<p><strong>&diams; Demande par lettre sign&eacute;e et cachet&eacute;e par le repr&eacute;sentant l&eacute;gal de l&rsquo;administration.</strong></p>\r\n<p><strong>Cas d&rsquo;une personne morale &laquo; Soci&eacute;t&eacute; &raquo; :</strong></p>\r\n<p><strong>&diams; Photocopie de la (CIN) ou carte de s&eacute;jour ou passeport (pour les &eacute;trangers) du repr&eacute;sentant l&eacute;gal de la soci&eacute;t&eacute; (g&eacute;rant);</strong></p>\r\n<p><strong>&diams; Pi&egrave;ces justifiant les pouvoirs conf&eacute;r&eacute;s &agrave; la personne (si le signataire n\'est pas lui m&ecirc;me le g&eacute;rant);</strong></p>\r\n<p><strong>&diams; Statut de la soci&eacute;t&eacute;.</strong></p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<div id=\"MT\" class=\"t_title\">\r\n<h2 class=\"portlet-msg-info\"><span style=\"color: #ff9900;\"><strong><span id=\"dnn_ctr1651_dnnTITLE_lblTitle\" class=\"Head\">Abonnement Electricit&eacute; MT</span></strong></span></h2>\r\n</div>\r\n<p>Ce type d&rsquo;abonnement ne peut &ecirc;tre accord&eacute; qu&rsquo;apr&egrave;s r&eacute;alisation des travaux de raccordement au r&eacute;seau MT, &eacute;quipement du poste MT/BT et acquittement de tous les frais d&rsquo;&eacute;quipement et de r&eacute;ception des travaux du poste MT/BT. Cette demande doit se faire &agrave; l&rsquo;agence du si&egrave;ge de la R.A.D.E.E.MA sis avenue Mohamed VI</p>\r\n<div class=\"t_title\">\r\n<div class=\"portlet-msg-info\"><em><strong>Pi&egrave;ces &agrave; fournir.</strong></em></div>\r\n</div>\r\n<div>\r\n<p><strong>&diams; Demande d&rsquo;abonnement en pr&eacute;cisant la puissance &agrave; souscrire;</strong></p>\r\n<p><strong>&diams; Une photocopie de la CIN de g&eacute;rant;</strong></p>\r\n<p><strong>&diams; Statut ou registre du commerce et d&eacute;l&eacute;gation de signature pour les soci&eacute;t&eacute;s.</strong></p>\r\n<div class=\"portlet-msg-alert\">\r\n<p><strong>Frais &agrave; la charge du client :</strong></p>\r\n<p><strong>&raquo; Frais de cautionnement (pour les personnes physiques et morales);</strong></p>\r\n<p><strong>&raquo; Frais de timbre.</strong></p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div id=\"ABTPROV\" class=\"t_title\">\r\n<h2 class=\"portlet-msg-info\"><span style=\"color: #ff9900;\"><strong><span id=\"dnn_ctr1651_dnnTITLE_lblTitle\" class=\"Head\">Abonnement sp&eacute;cial (provisoir)</span></strong></span></h2>\r\n</div>\r\n<p>Ces abonnements provisoires sont accord&eacute;s &agrave; titre exceptionnel (par exemple en cas des travaux de chantier, tournage d&rsquo;un film, festival ou autres manifestations autoris&eacute;es..) C\'est un contrat &eacute;tabli entre vous &laquo; client &raquo; et la RADEEMA pour une dur&eacute;e maximale d&rsquo;une ann&eacute;e. La reconduction de ces abonnements n&rsquo;est accord&eacute;e que pour les chantiers non achev&eacute;s et sur demande &eacute;crite du client pour une dur&eacute;e maximale d&rsquo;une ann&eacute;e et apr&egrave;s accord de la Direction G&eacute;n&eacute;rale.</p>\r\n<div class=\"t_title\">\r\n<div class=\"portlet-msg-info\"><em><strong>Pi&egrave;ces &agrave; fournir.</strong></em></div>\r\n</div>\r\n<div>\r\n<p><strong>&diams; Demande &eacute;crite &agrave; pr&eacute;senter &agrave; la Direction G&eacute;n&eacute;rale pour accord;</strong></p>\r\n<p><strong>&diams; Photocopie de la (CIN) ou tout autre pi&egrave;ce d&rsquo;identit&eacute; (permis, passeport );</strong></p>\r\n<p><strong>&diams; Autorisation de construire pour le chantier;</strong></p>\r\n<p><strong>&diams; Contrat reliant l&rsquo;entreprise et le ma&icirc;tre d&rsquo;ouvrage;</strong></p>\r\n<p><strong>&diams; Mandat ou procuration du (ou des) g&eacute;rants pour repr&eacute;senter la soci&eacute;t&eacute; (autorisation de signer le contrat d&rsquo;abonnement) pour les chantiers des travaux g&eacute;r&eacute;s par l&rsquo;entreprise;</strong></p>\r\n<p><strong>&diams; Pi&egrave;ce justifiant les pouvoirs conf&eacute;r&eacute;s &agrave; la personne (si le signataire n&rsquo;est pas le g&eacute;rant);</strong></p>\r\n<p><strong>&diams; Statut de la soci&eacute;t&eacute;;</strong></p>\r\n<p><strong>&diams; Signature de bon de r&eacute;siliation par le client (r&eacute;siliation qui prendra effet d&egrave;s l&rsquo;ach&egrave;vement de la dur&eacute;e contractuelle).</strong></p>\r\n<div class=\"portlet-msg-alert\">\r\n<p><strong>Frais &agrave; la charge du client :</strong></p>\r\n<p><strong>&raquo; Frais de pose et d&eacute;pose du compteur;</strong></p>\r\n<p><strong>&raquo; Co&ucirc;t de la Police d&rsquo;abonnement;</strong></p>\r\n<p><strong>&raquo; Provision (avance sur consommation) pour les personnes physiques;</strong></p>\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n<div id=\"Prov\" class=\"t_title\">\r\n<h2 class=\"portlet-msg-info\" style=\"text-align: center;\"><strong><span id=\"dnn_ctr1651_dnnTITLE_lblTitle\" class=\"Head\">Provisions</span></strong></h2>\r\n<h2 class=\"portlet-msg-info\"><span style=\"color: #99cc00;\"><strong><span class=\"Head\">Provision Eau Potable:</span></strong></span></h2>\r\n<p><span style=\"color: #000000;\"><span class=\"Head\">En application des dispositions de l&rsquo;article 8 des conditions g&eacute;n&eacute;rales de l&rsquo;abonnement eau, vous &ecirc;tes redevable d&rsquo;un d&eacute;p&ocirc;t de garantie : provision proportionnelle au calibre de votre compteur d&eacute;taill&eacute;e comme suit :</span></span></p>\r\n<table id=\"cssTable\" class=\"tabl\" style=\"width: 605px;\" border=\"1\" width=\"605\" cellspacing=\"1\" cellpadding=\"1\">\r\n<tbody>\r\n<tr>\r\n<th style=\"width: 296px; text-align: center;\">Calibre du compteur</th>\r\n<th style=\"width: 296px; text-align: center;\">Montant provision</th>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 296px; text-align: center;\">15 mm</td>\r\n<td style=\"width: 296px; text-align: center;\">734,00</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 296px; text-align: center;\">20 mm</td>\r\n<td style=\"width: 296px; text-align: center;\">1467,00</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 296px; text-align: center;\">30 mm</td>\r\n<td style=\"width: 296px; text-align: center;\">4401,00</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 296px; text-align: center;\">40 mm</td>\r\n<td style=\"width: 296px; text-align: center;\">14670,00</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 296px; text-align: center;\">50 mm</td>\r\n<td style=\"width: 296px; text-align: center;\">44010,00</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 296px; text-align: center;\">60 mm</td>\r\n<td style=\"width: 296px; text-align: center;\">44010,00</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 296px; text-align: center;\">80 mm</td>\r\n<td style=\"width: 296px; text-align: center;\">73350,00</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 296px; text-align: center;\">100 mm</td>\r\n<td style=\"width: 296px; text-align: center;\">146700,00</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 296px; text-align: center;\">150 mm</td>\r\n<td style=\"width: 296px; text-align: center;\">293400,00</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>\r\n</div>\r\n<h2><span style=\"color: #99cc00;\">Provision &eacute;lectricit&eacute; Moyenne Tension:</span></h2>\r\n<p>En application de la note de service n&deg; 74/2006 du 20 mars 2006, vous &ecirc;tes redevable d&rsquo;une provision (avance sur consommation) lors de la souscription de votre contrat d&rsquo;abonnement.</p>\r\n<p>Cette provision est &eacute;gale : 0,25 x Cg x PS x T.HP</p>\r\n<div>\r\n<p><strong>&raquo; Cg = consommation annuelle garantie par KVA de puissance souscrite soit : 600 KWh par KVA souscrit;</strong></p>\r\n<p><strong>&raquo; PS = puissance souscrite par le client;</strong></p>\r\n<p><strong>&raquo; T.HP = tarif heure pleine.</strong></p>\r\n<p>&nbsp;</p>\r\n</div>\r\n<h2><span style=\"color: #99cc00;\">Provision &eacute;lectricit&eacute; Basse Tension:</span></h2>\r\n<p>En application des dispositions de l&rsquo;article 11 des conditions g&eacute;n&eacute;rales d&rsquo;abonnement &eacute;lectricit&eacute;, il est stipul&eacute; que &laquo; &hellip;Les nouveaux abonn&eacute;s seront tenus, de verser &agrave; la r&eacute;gie une provision lors de la signature de la police d&rsquo;abonnement&raquo;. Le montant de la provision est d&eacute;taill&eacute; dans le tableau ci-dessous :</p>\r\n<p>N .B. : Le montant de la provision P pour le compteur provisoire est calcul&eacute; comme suit</p>\r\n<p><strong>P Provisoire = P d&eacute;finitive x 2</strong></p>\r\n<p>Actuellement les montants des Provisions en vigueur selon l\'usage sont comme suit :</p>\r\n<table class=\"tabl\" style=\"height: 568px; width: 652px;\" border=\"1\" width=\"652\" cellspacing=\"1\" cellpadding=\"1\">\r\n<tbody>\r\n<tr style=\"height: 18px;\">\r\n<th style=\"width: 71px; height: 18px; text-align: center;\">&nbsp;</th>\r\n<th style=\"width: 278px; height: 18px; text-align: center;\" colspan=\"3\">B1 (127-220)</th>\r\n<th style=\"width: 285px; height: 18px; text-align: center;\" colspan=\"3\">B2 (220-380)</th>\r\n</tr>\r\n<tr style=\"height: 36px;\">\r\n<th style=\"width: 71px; height: 36px; text-align: center;\">USAGE</th>\r\n<th style=\"width: 88px; height: 36px; text-align: center;\">Montant provision</th>\r\n<th style=\"width: 72px; height: 36px; text-align: center;\">NBR FILS</th>\r\n<th style=\"width: 108px; height: 36px; text-align: center;\">PROVISION EN DH</th>\r\n<th style=\"width: 92px; height: 36px; text-align: center;\">AMPERAGE</th>\r\n<th style=\"width: 67px; height: 36px; text-align: center;\">NBR FILS</th>\r\n<th style=\"width: 116px; height: 36px; text-align: center;\">PROVISION EN DH</th>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">10</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">2</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">119,39</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">10</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">2</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">196,95</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">15</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">2</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">172,71</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">15</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">2</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">289,04</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">20</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">2</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">226,03</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">20</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">2</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">381,14</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">15</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">497,43</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">15</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">833,22</td>\r\n</tr>\r\n<tr style=\"height: 10px;\">\r\n<td style=\"text-align: center; width: 71px; height: 10px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 10px;\">20</td>\r\n<td style=\"text-align: center; width: 72px; height: 10px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 10px;\">651,34</td>\r\n<td style=\"text-align: center; width: 92px; height: 10px;\">20</td>\r\n<td style=\"text-align: center; width: 67px; height: 10px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 10px;\">1 099,08</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">25</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">805,25</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">25</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">1 364,92</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">30</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">959,16</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">30</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">1 630,76</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">50</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">1 586,40</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">50</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">2 705,74</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">60</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">1 894,22</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">60</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">3 237,43</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">75</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">2 355,95</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">75</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">4 034,96</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">90</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">2 817,67</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">90</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">4 832,49</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">100</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">3 125,49</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">100</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">5 364,18</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">120</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">3 745,11</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">120</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">6 431,54</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">150</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">4 668,57</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">150</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">8 026,60</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">200</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">6 207,67</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">200</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">10 685,04</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">225</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">6 977,22</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">225</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">12 014,26</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">300</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">9 285,86</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">300</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">16 001,92</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">E ou UD</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">400</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">12 364,06</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">400</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">21 318,80</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">FM</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">15</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">1 344,34</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">15</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">2 296,08</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">FM</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">20</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">1 780,56</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">20</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">3 049,55</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">FM</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">25</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">2 216,77</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">25</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">3 803,01</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">FM</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">30</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">2 652,99</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">30</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">4 556,71</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">FM</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">50</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">4 409,45</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">50</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">7 581,92</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">FM</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">60</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">5 281,88</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">60</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">9 088,84</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">FM</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">75</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">6 590,52</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">75</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">11 349,22</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">FM</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">90</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">7 899,16</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">90</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">13 610,61</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">FM</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">100</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">8 771,59</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">100</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">15 116,53</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">FM</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">120</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">10 520,43</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">120</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">18 134,36</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"text-align: center; width: 71px; height: 18px;\">FM</td>\r\n<td style=\"text-align: center; width: 88px; height: 18px;\">150</td>\r\n<td style=\"text-align: center; width: 72px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 108px; height: 18px;\">13 137,72</td>\r\n<td style=\"text-align: center; width: 92px; height: 18px;\">150</td>\r\n<td style=\"text-align: center; width: 67px; height: 18px;\">4</td>\r\n<td style=\"text-align: center; width: 116px; height: 18px;\">22 655,13</td>\r\n</tr>\r\n</tbody>\r\n</table>', 5, '', 'طلب الإشتراك', ''),
(34, 'FAQ', NULL, NULL, NULL, 0, '2008-07-21 05:28:21', '2008-07-21 05:28:21', '', 5, '', 'سؤال و جواب', ''),
(35, 'Mentions légales', NULL, NULL, NULL, 0, '2008-07-21 05:28:49', '2008-07-21 05:28:49', '', 6, '', 'الإشعارات القانونية', ''),
(36, 'Publications', NULL, NULL, NULL, 0, '2009-07-21 02:30:52', '2009-07-21 02:30:52', '', NULL, '', 'منشورات', ''),
(37, 'Galerie', NULL, NULL, NULL, 0, '2009-07-21 02:32:02', '2009-07-21 02:32:02', '', NULL, '', 'رواق الميديا', ''),
(38, 'Contactez-nous', NULL, NULL, NULL, 0, '2009-07-21 02:32:12', '2009-07-21 02:32:12', '', NULL, '', 'إتصل بنا', ''),
(39, 'Eau potable', NULL, NULL, NULL, 0, '2009-07-21 03:16:21', '2009-07-21 03:16:21', '', 4, '', 'توزيع مياه الشرب', ''),
(40, 'Electricité', NULL, NULL, NULL, 0, '2009-07-21 03:16:36', '2009-07-21 03:16:36', '', 4, '', 'توزيع الكهرباء', ''),
(41, 'Assainissement liquide', NULL, NULL, NULL, 0, '2009-07-21 03:17:13', '2009-07-21 03:17:13', '', 4, '', 'خدمة و معالجة مياه الصرف الصحي', ''),
(42, 'Developpement commercial', NULL, NULL, NULL, 0, '2009-07-21 03:17:38', '2009-07-21 03:17:38', '', 4, '', 'التنمية التجارية', ''),
(43, 'STEP', NULL, NULL, NULL, 0, '2009-07-21 03:17:52', '2009-07-21 03:17:52', '', 4, '', 'معالجة المياه العادمة', ''),
(44, 'Flux RSS', NULL, NULL, NULL, 0, '2012-07-21 11:30:37', '2012-07-21 11:30:37', '', NULL, '', 'خدمة RSS', ''),
(45, 'Newsletter', NULL, NULL, NULL, 0, '2012-07-21 11:31:12', '2012-07-21 11:31:12', '', NULL, '', 'الرسائل الإخبارية', ''),
(46, 'Histoire', NULL, NULL, NULL, 0, '2012-07-21 03:02:56', '2012-07-21 03:02:56', '<p><strong>Un peu d\'Histoire</strong></p>\r\n<p>La soci&eacute;t&eacute; d&rsquo;Electricit&eacute; de Marrakech est constitu&eacute;e le 27 juin 1922.</p>\r\n<p>Le 17 juillet 1964, la ville de Marrakech a sign&eacute; un protocole pour le rachat de la concession, laquelle fut confi&eacute;e &agrave; la Soci&eacute;t&eacute; Marocaine de Distribution (SMD) Le 26 D&eacute;cembre 1970 et suite aux d&eacute;lib&eacute;rations du conseil communal de la vile de Marrakech, il a &eacute;t&eacute; d&eacute;cid&eacute; de cr&eacute;er &agrave; partir du premier janvier 1971, la R&eacute;gie Autonome de Distribution d&rsquo;Eau et d&rsquo;Electricit&eacute; de Marrakech, d&eacute;nomm&eacute;e RADEEMA et ce en en vertu du D&eacute;cret n&deg; 2-64-394 du 29 Septembre 1964 relatif aux R&eacute;gies communales. Le premier janvier 1998, la RADEEMA a pris en charge la gestion du service de l&rsquo;assainissement liquide suite aux d&eacute;lib&eacute;rations de la communaut&eacute; urbaine de Marrakech.</p>\r\n<p>Le 09 Juillet 2010, la RADEEMA est pass&eacute;e au contr&ocirc;le d\'accompagnement en substitution du contr&ocirc;le pr&eacute;alable conform&eacute;ment aux dispositions de l\'article 18 de la loi 69.00.</p>', 3, '', 'تاريخنا', '');
INSERT INTO `pages` (`idPage`, `title`, `parent_id`, `path`, `show_in_menu`, `draft`, `createdAt`, `updatedAt`, `content`, `section`, `media`, `title_ar`, `content_ar`) VALUES
(67, 'Actes Administratifs', NULL, NULL, NULL, 0, '2021-07-20 12:40:39', '2021-07-20 12:40:39', '<p>Ce type de branchement ou raccordement est destin&eacute; &agrave; l&rsquo;alimentation en eau potable, en &eacute;lectricit&eacute; ou en assainissement d&rsquo;une construction &agrave; l&rsquo;int&eacute;rieur d&rsquo;un lotissement, d&rsquo;une unit&eacute; industrielle, ou l&rsquo;alimentation d&rsquo;un immeuble.</p>\r\n<p>Pour les constructions particuliaire ou dans un lotissement, la demande se fait au niveau de l&rsquo;agence de rattachement du client par contre pour l&rsquo;unit&eacute; industrielle et les grands projets en g&eacute;n&eacute;ral, la demande se fait &agrave; l&rsquo;agence du si&egrave;ge (av. Mohamed VI &ndash; BP 520 &ndash; gu&eacute;liz) ou bien par courrier port&eacute; et d&eacute;pos&eacute; au bureau d&rsquo;ordre de la Direction G&eacute;n&eacute;rale.</p>\r\n<div class=\"t_title\">\r\n<p class=\"label label-info\">Pi&egrave;ces &agrave; fournir.</p>\r\n</div>\r\n<div>\r\n<p class=\"label label-inverse\">Pi&egrave;ces communes :</p>\r\n<p><strong>&diams; Demande de branchement ou pr&eacute; imprim&eacute; sign&eacute; par le client avec les caract&eacute;ristiques techniques du branchement (calibre, puissance..) ;</strong></p>\r\n<p><strong>&diams; Photocopie de la carte d&rsquo;identit&eacute; (CIN) pour les personnes physiques;</strong></p>\r\n<p><strong>&diams; Statut de l&rsquo;entreprise ou registre du commerce et attestation de d&eacute;l&eacute;gation de signature pour les personnes morales;</strong></p>\r\n<p><strong>&diams; Acte de propri&eacute;t&eacute; ou autorisation l&eacute;galis&eacute;e du propri&eacute;taire si le demandeur n&rsquo;est pas le propri&eacute;taire;</strong></p>\r\n<p><strong>&diams; Autorisation de construire ;</strong></p>\r\n<p><strong>&diams; Plan de situation ;</strong></p>\r\n<p><strong>&diams; Jeu de plans approuv&eacute;s par les autorit&eacute;s comp&eacute;tentes.</strong></p>\r\n<p class=\"label\">Pour un branchement Basse Tension :</p>\r\n<p><strong>&diams; Certificat de garantie du disjoncteur diff&eacute;rentiel (mod&egrave;le agr&eacute;&eacute;);</strong></p>\r\n<p class=\"label\">Pour un raccordement Moyenne Tension :</p>\r\n<p><strong>&diams; Demande formul&eacute;e par &eacute;crit avec puissance du ou des transformateurs &agrave; installer;</strong></p>\r\n<p><strong>&diams; Plan de masse avec emplacement exact du poste;</strong></p>\r\n<p><strong>&diams; Jeu de Plans des &eacute;quipements du poste &eacute;tablis par une entreprise agr&eacute;&eacute;e par la RADEEMA.</strong></p>\r\n<p class=\"label\">Pour un branchement eau (gros calibre) :</p>\r\n<p><strong>&diams; Fiche technique des besoins journaliers en eau(m3/j).</strong></p>\r\n<p class=\"label\">Pour un branchement assainissement :</p>\r\n<p><strong>&diams; Plan de la position de la sortie de l&rsquo;&eacute;gout Eaux Us&eacute;es (EU) sur fa&ccedil;ade s&rsquo;il n&rsquo;est pas indiqu&eacute; sur le jeu de plans.</strong></p>\r\n<p class=\"label\">Pour l&rsquo;Unit&eacute; industrielle : pi&egrave;ces &agrave; renseigner sans l&eacute;galisation :</p>\r\n<p><strong>&diams; Pi&egrave;ces justifiant les pouvoirs conf&eacute;r&eacute;s &agrave; la personne (si le signataire n&rsquo;est pas lui m&ecirc;me le g&eacute;rant)</strong></p>\r\n<p><strong>&diams; Fiche de renseignements techniques sur les caract&eacute;ristiques physico-chimiques des eaux rejet&eacute;es dans le r&eacute;seau.</strong></p>\r\n<p><strong>&diams; Dossiers des pr&eacute;traitements pr&eacute;conis&eacute;s en cas de rejets industriels.</strong></p>\r\n<p class=\"label\">Frais &agrave; la charge du client :</p>\r\n<p><strong>&diams; Participation &agrave; l&rsquo;infrastructure;</strong></p>\r\n<p><strong>&diams; Co&ucirc;t de branchement ou de raccordement et frais d&rsquo;extension s&rsquo;il y a lieu;</strong></p>\r\n<p><strong>&diams; Peines et soins sur travaux.</strong></p>\r\n</div>\r\n<p>NB. : En cas d&rsquo;un nouveau branchement dans une zone &eacute;quip&eacute;e, les diff&eacute;rentes participations sont &agrave; r&eacute;gler par le promoteur selon les sp&eacute;cifications du cahier de charges du projet.</p>\r\n<p>En cas de modification apr&egrave;s r&eacute;ception des travaux d\'&eacute;quipement, l&rsquo;&eacute;cart est &agrave; la charge du client.</p>', 1, '', 'عقود', ''),
(68, 'Localiser nos Agences', NULL, NULL, NULL, 0, '2021-07-20 12:41:14', '2021-07-20 12:41:14', '', 1, '', '0', '0'),
(69, 'Contacter note Centre d\'Appel', NULL, NULL, NULL, 0, '2021-07-20 12:41:56', '2021-07-20 12:41:56', '', 1, '', 'الإتصال بمركز الزبناء', ''),
(70, 'Guide Client', NULL, NULL, NULL, 0, '2021-07-20 12:42:22', '2021-07-20 12:42:22', '', 1, '', 'دليل الزبون', ''),
(71, 'Demande de Domiciliation Bancaire', 18, NULL, NULL, 0, '2021-07-20 12:48:30', '2021-07-20 12:48:30', '', 1, '', '0', '0'),
(72, 'Résiliation', 18, NULL, NULL, 0, '2021-07-20 14:35:14', '2021-07-20 14:35:14', '<h3><span style=\"color: #ff9900;\">Est-il possible de r&eacute;cup&eacute;rer mon d&eacute;p&ocirc;t de garantie?</span></h3>\r\n<div id=\"id_div_82\">\r\n<p>Au moment de la r&eacute;siliation de votre contrat d&rsquo;abonnement, le montant de votre d&eacute;p&ocirc;t de garantie (provision) est automatiquement d&eacute;duit de la facture d&rsquo;arr&ecirc;t de compte. Il n&rsquo;est rembours&eacute; (en totalit&eacute; ou partiellement) que si le solde est cr&eacute;diteur. Dans le cas contraire (solde d&eacute;biteur), le client doit payer la diff&eacute;rence.</p>\r\n<h3><span style=\"color: #ff9900;\">Quels sont les pi&egrave;ces &agrave; fournir pour un nouveau contrat (R&eacute;abonnement ou changement du contractant) ?</span></h3>\r\n<p><span style=\"text-decoration: underline;\"><strong>Cas d&rsquo;une personne physique : (propri&eacute;t&eacute; ou locataire)</strong></span></p>\r\n<div>\r\n<p>&diams; Demande d&rsquo;abonnement sign&eacute;e par le client ;</p>\r\n<p>&diams; Photocopie de la (CIN) ou carte de s&eacute;jour ou passeport (pour les &eacute;trangers) ;</p>\r\n<p>&diams; Acte de propri&eacute;t&eacute; pour les propri&eacute;taires ou une copie du contrat de bail ou bien une autorisation l&eacute;galis&eacute;e du propri&eacute;taire en cas de location ;</p>\r\n<p>&diams; Registre du commerce pour les locaux &agrave; usage commercial ;</p>\r\n<p>&diams; Derni&egrave;re facture de consommation pour les cas de r&eacute;abonnement.</p>\r\n</div>\r\n<p><span style=\"text-decoration: underline;\"><strong>Cas d&rsquo;une personne morale &laquo; Soci&eacute;t&eacute; &raquo;, il faut pr&eacute;voir &eacute;galement les documents suivants :</strong></span></p>\r\n<div>\r\n<p>&diams; Photocopie de la (CIN) ou carte de s&eacute;jour ou passeport (pour les &eacute;trangers) du repr&eacute;sentant l&eacute;gal de la soci&eacute;t&eacute; (g&eacute;rant) ;</p>\r\n<p>&diams; Pi&egrave;ces justifiant les pouvoirs conf&eacute;r&eacute;s &agrave; la personne (si le signature est diff&eacute;rent du g&eacute;rant) ;</p>\r\n<p>&diams; Statut de la soci&eacute;t&eacute;</p>\r\n</div>\r\n<p><span style=\"text-decoration: underline;\"><strong>Cas d&rsquo;une Administration, Collectivit&eacute; locales et Etablissement publics :</strong></span></p>\r\n<div>\r\n<p>&diams; Demande par lettre sign&eacute;e et cachet&eacute;e du repr&eacute;sentant l&eacute;gal de l&rsquo;administration</p>\r\n</div>\r\n<h3><span style=\"color: #ff9900;\"><strong>A quoi correspond le montant qui est pay&eacute; &agrave; la souscription d&rsquo;un abonnement ?</strong></span></h3>\r\n<p>Le montant pay&eacute; &agrave; la souscription d&rsquo;un abonnement correspond au</p>\r\n<div>\r\n<p>&diams; D&eacute;p&ocirc;t de garantie,</p>\r\n<p>&diams; Frais de pose et d&eacute;pose du compteur et v&eacute;rification de l\'installation</p>\r\n<p>&diams; Frais de contrat,</p>\r\n</div>\r\n<p>Les frais de timbre sont vers&eacute;s au tr&eacute;sor de l&rsquo;Etat en conformit&eacute; avec la l&eacute;gislation en vigueur.</p>\r\n<h3><span style=\"color: #ff9900;\"><strong>le d&eacute;p&ocirc;t de garantie d&eacute;pos&eacute; lors de la demande d&rsquo;abonnement est trop cher !</strong></span></h3>\r\n<p>Les montants r&eacute;clam&eacute;s aux clients sont conformes aux dispositions r&eacute;glementaires (cahier des charges). Le montant du d&eacute;p&ocirc;t de garantie (provision) varie selon calibre du compteur et selon votre type d&rsquo;usage : Domestique, industriel, Pr&eacute;f&eacute;rentiel &hellip; etc.</p>\r\n</div>', NULL, '', 'إلغاء عقد', ''),
(73, 'Les formulaires', 18, NULL, NULL, 0, '2021-07-20 14:35:46', '2021-07-20 14:35:46', '', NULL, '', 'الإستمارات', ''),
(74, 'Appel d\'offres', NULL, NULL, NULL, 0, '2021-07-20 14:50:30', '2021-07-20 14:50:30', '', NULL, '', '0', '0'),
(75, 'Résultats A.O.', NULL, NULL, NULL, 0, '2021-07-20 14:51:05', '2021-07-20 14:51:05', '', NULL, '', 'نتائج العروض', ''),
(76, 'Offres de Service', NULL, NULL, NULL, 0, '2021-07-20 14:51:37', '2021-07-20 14:51:37', '', NULL, '', '0', '0'),
(77, 'Programme Prévisionnel', NULL, NULL, NULL, 0, '2021-07-20 14:52:10', '2021-07-20 14:52:10', '', NULL, '', 'البرنامج الإستثماري', ''),
(78, 'Règlement marchés publics', NULL, NULL, NULL, 0, '2021-07-20 14:52:38', '2021-07-20 14:52:38', '', NULL, '', '0', '0'),
(79, 'Marrakech cité de renouveau permanent', NULL, NULL, NULL, 0, '2021-07-20 14:54:05', '2021-07-20 14:54:05', '', NULL, '', 'مراكش الحاضرة المتجددة', ''),
(80, 'Adhésion au plan Maroc Vert', NULL, NULL, NULL, 0, '2021-07-20 14:54:44', '2021-07-20 14:54:44', '', NULL, '', 'الانضمام إلى خطة المغرب الأخضر', ''),
(81, 'Programmes sociaux', NULL, NULL, NULL, 0, '2021-07-20 14:55:07', '2021-07-20 14:55:07', '', NULL, '', 'الأعمال الاجتماعية', ''),
(82, 'Valorisation des eaux épurées', NULL, NULL, NULL, 0, '2021-07-20 14:57:14', '2021-07-20 14:57:14', '', NULL, '', 'تقييم المياه المعالجة', ''),
(83, 'Elimination de la pollution de l\'air', NULL, NULL, NULL, 0, '2021-07-20 14:57:54', '2021-07-20 14:57:54', '', NULL, '', 'القضاء على تلوث الهواء', ''),
(84, 'Guide promoteur', NULL, NULL, NULL, 0, '2021-07-20 15:03:11', '2021-07-20 15:03:11', '', NULL, '', '0', '0'),
(85, 'Paiement en ligne', NULL, NULL, NULL, 0, '2021-07-20 15:05:11', '2021-07-20 15:05:11', '', NULL, '', 'الدفع عبر الإنترنت', ''),
(86, 'Vos démarches en ligne', NULL, NULL, NULL, 0, '2021-07-20 15:09:20', '2021-07-20 15:09:20', '', NULL, '', 'خطواتك على الأنترنيت', ''),
(87, 'Agence grand compte', NULL, NULL, NULL, 0, '2021-07-20 15:20:49', '2021-07-20 15:20:49', '', NULL, '', '0', '0'),
(88, 'Contacter le CRC', NULL, NULL, NULL, 0, '2021-07-20 15:21:07', '2021-07-20 15:21:07', '', NULL, '', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `plugins`
--

CREATE TABLE `plugins` (
  `idPlugin` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `idPage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plugins`
--

INSERT INTO `plugins` (`idPlugin`, `name`, `idPage`) VALUES
(3, 'Formulaire d\'authentification', 13),
(3, 'Formulaire d\'authentification', 14),
(3, 'Formulaire d\'authentification', 16),
(3, 'Formulaire d\'authentification', 17),
(3, 'Formulaire d\'authentification', 71),
(5, 'localisation des agences', 68),
(8, 'Galerie', 37),
(2, 'Formulaire de contact', 38),
(1, 'Table de PDF téléchargeable', 27),
(6, 'Rapports et Publications', 36),
(7, 'Flash info et Communiqués', 36),
(3, 'Formulaire d\'authentification', 15),
(4, 'les formulaires', 73),
(9, 'faq', 34),
(3, 'Formulaire d\'authentification', 33);

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
(6, 100, 90, '2021-07-15'),
(7, 54, 50, '2021-07-16'),
(8, 30, 30, '2021-07-17'),
(9, 65, 24, '2021-07-18'),
(10, 45, 42, '2021-07-19'),
(11, 50, 21, '2021-07-20'),
(12, 75, 60, '2021-07-21'),
(13, 80, 75, '2021-07-22'),
(14, 98, 98, '2021-07-23');

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
  `image` varchar(150) NOT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `adress` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `username`, `email`, `password`, `createdAt`, `reset_pswd_token`, `reset_token_sent_at`, `image`, `tel`, `adress`) VALUES
(30, 'laila', 'laila.sadelbouyoud@gmail.com', '$2y$10$NHNNATr1XUfVgSYNgdp5Vu8Wglks78.FsdMcYBtTZtc', '2014-07-21 06:02:02', NULL, NULL, '', NULL, NULL),
(31, 'test1', 'test@gmail.com', '$2y$10$.xVYPFROhGLNC8ZXvxTmzuqLnSHUxoteht6EDlhM2Kj', '2014-07-21 06:04:44', NULL, NULL, '', NULL, NULL),
(33, 'laila', 'laila@gmail.com', '$2y$10$hEhfHhdkJVmPvnFr4SiigOx8widFtPXjFNNY9ANiSSSSD/YR4pNGe', '2014-07-21 06:14:07', NULL, NULL, '', '0644215487', 'adresse 1 marrakech 55');

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
(611, '::1', '2021-07-17'),
(612, '::1', '2021-07-19'),
(613, '::1', '2021-07-19'),
(614, '::1', '2021-07-19'),
(615, '::1', '2021-07-19'),
(616, '::1', '2021-07-19'),
(617, '::1', '2021-07-19'),
(618, '::1', '2021-07-19'),
(619, '::1', '2021-07-19'),
(620, '::1', '2021-07-19'),
(621, '::1', '2021-07-19'),
(622, '::1', '2021-07-19'),
(623, '::1', '2021-07-19'),
(624, '::1', '2021-07-19'),
(625, '::1', '2021-07-19'),
(626, '::1', '2021-07-19'),
(627, '::1', '2021-07-19'),
(628, '::1', '2021-07-19'),
(629, '::1', '2021-07-19'),
(630, '::1', '2021-07-19'),
(631, '::1', '2021-07-19'),
(632, '::1', '2021-07-19'),
(633, '::1', '2021-07-19'),
(634, '::1', '2021-07-19'),
(635, '::1', '2021-07-19'),
(636, '::1', '2021-07-19'),
(637, '::1', '2021-07-19'),
(638, '::1', '2021-07-19'),
(639, '::1', '2021-07-19'),
(640, '::1', '2021-07-19'),
(641, '::1', '2021-07-19'),
(642, '::1', '2021-07-19'),
(643, '::1', '2021-07-19'),
(644, '::1', '2021-07-19'),
(645, '::1', '2021-07-19'),
(646, '::1', '2021-07-20'),
(647, '::1', '2021-07-20'),
(648, '::1', '2021-07-20'),
(649, '::1', '2021-07-20'),
(650, '::1', '2021-07-20'),
(651, '::1', '2021-07-20'),
(652, '::1', '2021-07-20'),
(653, '::1', '2021-07-23'),
(654, '::1', '2021-07-23'),
(655, '::1', '2021-07-23'),
(656, '::1', '2021-07-23'),
(657, '::1', '2021-07-23'),
(658, '::1', '2021-07-23'),
(659, '::1', '2021-07-23'),
(660, '::1', '2021-07-23'),
(661, '::1', '2021-07-23'),
(662, '::1', '2021-07-23'),
(663, '::1', '2021-07-23'),
(664, '::1', '2021-07-23'),
(665, '::1', '2021-07-23'),
(666, '::1', '2021-07-26'),
(667, '::1', '2021-07-26'),
(668, '::1', '2021-07-26'),
(669, '::1', '2021-07-27'),
(670, '::1', '2021-07-27'),
(671, '::1', '2021-07-27'),
(672, '::1', '2021-07-27'),
(673, '::1', '2021-07-27'),
(674, '::1', '2021-07-27'),
(675, '::1', '2021-07-27'),
(676, '::1', '2021-07-27'),
(677, '::1', '2021-07-27'),
(678, '::1', '2021-07-27'),
(679, '::1', '2021-07-27'),
(680, '::1', '2021-07-27'),
(681, '::1', '2021-07-27'),
(682, '::1', '2021-07-27'),
(683, '::1', '2021-07-27'),
(684, '::1', '2021-07-27'),
(685, '::1', '2021-07-27'),
(686, '::1', '2021-07-27'),
(687, '::1', '2021-07-27'),
(688, '::1', '2021-07-27'),
(689, '::1', '2021-07-27'),
(690, '::1', '2021-07-27'),
(691, '::1', '2021-07-27'),
(692, '::1', '2021-07-27'),
(693, '::1', '2021-07-27'),
(694, '::1', '2021-07-27'),
(695, '::1', '2021-07-27'),
(696, '::1', '2021-07-27'),
(697, '::1', '2021-07-28'),
(698, '::1', '2021-07-28'),
(699, '::1', '2021-07-28'),
(700, '::1', '2021-07-28'),
(701, '::1', '2021-07-28'),
(702, '::1', '2021-07-28'),
(703, '::1', '2021-07-28'),
(704, '::1', '2021-07-28'),
(705, '::1', '2021-07-28'),
(706, '::1', '2021-07-28'),
(707, '::1', '2021-07-28'),
(708, '::1', '2021-07-28'),
(709, '::1', '2021-07-28'),
(710, '::1', '2021-07-28'),
(711, '::1', '2021-07-28'),
(712, '::1', '2021-07-28'),
(713, '::1', '2021-07-28'),
(714, '::1', '2021-07-28'),
(715, '::1', '2021-07-28'),
(716, '::1', '2021-07-28'),
(717, '::1', '2021-07-28'),
(718, '::1', '2021-07-28'),
(719, '::1', '2021-07-28'),
(720, '::1', '2021-07-28'),
(721, '::1', '2021-07-28'),
(722, '::1', '2021-07-28'),
(723, '::1', '2021-07-28'),
(724, '::1', '2021-07-28'),
(725, '::1', '2021-07-28'),
(726, '::1', '2021-07-28'),
(727, '::1', '2021-07-28'),
(728, '::1', '2021-07-28'),
(729, '::1', '2021-07-28'),
(730, '::1', '2021-07-28'),
(731, '::1', '2021-07-28'),
(732, '::1', '2021-07-28'),
(733, '::1', '2021-07-28'),
(734, '::1', '2021-07-29'),
(735, '::1', '2021-07-29'),
(736, '::1', '2021-07-29'),
(737, '::1', '2021-07-29'),
(738, '::1', '2021-07-29'),
(739, '::1', '2021-07-29'),
(740, '::1', '2021-07-29'),
(741, '::1', '2021-07-29'),
(742, '::1', '2021-07-29'),
(743, '::1', '2021-07-29'),
(744, '::1', '2021-07-29'),
(745, '::1', '2021-07-29'),
(746, '::1', '2021-07-29'),
(747, '::1', '2021-07-29'),
(748, '::1', '2021-07-29'),
(749, '::1', '2021-07-29'),
(750, '::1', '2021-07-29'),
(751, '::1', '2021-07-29'),
(752, '::1', '2021-07-29'),
(753, '::1', '2021-07-29'),
(754, '::1', '2021-07-29'),
(755, '::1', '2021-07-29'),
(756, '::1', '2021-07-29'),
(757, '::1', '2021-07-29'),
(758, '::1', '2021-07-29'),
(759, '::1', '2021-07-29'),
(760, '::1', '2021-07-29'),
(761, '::1', '2021-07-29'),
(762, '::1', '2021-07-29'),
(763, '::1', '2021-07-29'),
(764, '::1', '2021-07-29'),
(765, '::1', '2021-07-29'),
(766, '::1', '2021-07-29'),
(767, '::1', '2021-07-29'),
(768, '::1', '2021-07-29'),
(769, '::1', '2021-07-29'),
(770, '::1', '2021-07-29'),
(771, '::1', '2021-07-29'),
(772, '::1', '2021-07-29'),
(773, '::1', '2021-07-29'),
(774, '::1', '2021-07-29'),
(775, '::1', '2021-07-29'),
(776, '::1', '2021-07-29'),
(777, '::1', '2021-07-29'),
(778, '::1', '2021-07-29'),
(779, '::1', '2021-07-29'),
(780, '::1', '2021-07-29'),
(781, '::1', '2021-07-29'),
(782, '::1', '2021-07-29'),
(783, '::1', '2021-07-29'),
(784, '::1', '2021-07-29'),
(785, '::1', '2021-07-29'),
(786, '::1', '2021-07-29'),
(787, '::1', '2021-07-29'),
(788, '::1', '2021-07-29'),
(789, '::1', '2021-07-29'),
(790, '::1', '2021-07-29'),
(791, '::1', '2021-07-29'),
(792, '::1', '2021-07-29'),
(793, '::1', '2021-07-29'),
(794, '::1', '2021-07-29'),
(795, '::1', '2021-07-31'),
(796, '::1', '2021-08-02'),
(797, '::1', '2021-08-02'),
(798, '::1', '2021-08-02'),
(799, '::1', '2021-08-02'),
(800, '::1', '2021-08-02'),
(801, '::1', '2021-08-02'),
(802, '::1', '2021-08-02'),
(803, '::1', '2021-08-02'),
(804, '::1', '2021-08-02'),
(805, '::1', '2021-08-02'),
(806, '::1', '2021-08-02'),
(807, '::1', '2021-08-02'),
(808, '::1', '2021-08-02'),
(809, '::1', '2021-08-02'),
(810, '::1', '2021-08-02'),
(811, '::1', '2021-08-02'),
(812, '::1', '2021-08-02'),
(813, '::1', '2021-08-02'),
(814, '::1', '2021-08-02'),
(815, '::1', '2021-08-02'),
(816, '::1', '2021-08-02'),
(817, '::1', '2021-08-02'),
(818, '::1', '2021-08-02'),
(819, '::1', '2021-08-02'),
(820, '::1', '2021-08-02'),
(821, '::1', '2021-08-02'),
(822, '::1', '2021-08-02'),
(823, '::1', '2021-08-03'),
(824, '::1', '2021-08-03'),
(825, '::1', '2021-08-03'),
(826, '::1', '2021-08-03'),
(827, '::1', '2021-08-03'),
(828, '::1', '2021-08-03'),
(829, '::1', '2021-08-03'),
(830, '::1', '2021-08-03'),
(831, '::1', '2021-08-03'),
(832, '::1', '2021-08-03'),
(833, '::1', '2021-08-03'),
(834, '::1', '2021-08-03'),
(835, '::1', '2021-08-03'),
(836, '::1', '2021-08-03'),
(837, '::1', '2021-08-03'),
(838, '::1', '2021-08-03'),
(839, '::1', '2021-08-03'),
(840, '::1', '2021-08-03'),
(841, '::1', '2021-08-03'),
(842, '::1', '2021-08-03'),
(843, '::1', '2021-08-03'),
(844, '::1', '2021-08-03'),
(845, '::1', '2021-08-03'),
(846, '::1', '2021-08-03'),
(847, '::1', '2021-08-03'),
(848, '::1', '2021-08-03'),
(849, '::1', '2021-08-03'),
(850, '::1', '2021-08-03'),
(851, '::1', '2021-08-03'),
(852, '::1', '2021-08-03'),
(853, '::1', '2021-08-03'),
(854, '::1', '2021-08-03'),
(855, '::1', '2021-08-03'),
(856, '::1', '2021-08-03'),
(857, '::1', '2021-08-03'),
(858, '::1', '2021-08-03'),
(859, '::1', '2021-08-03'),
(860, '::1', '2021-08-03'),
(861, '::1', '2021-08-03'),
(862, '::1', '2021-08-03'),
(863, '::1', '2021-08-03'),
(864, '::1', '2021-08-03'),
(865, '::1', '2021-08-03'),
(866, '::1', '2021-08-03'),
(867, '::1', '2021-08-03'),
(868, '::1', '2021-08-03'),
(869, '::1', '2021-08-03'),
(870, '::1', '2021-08-03'),
(871, '::1', '2021-08-05'),
(872, '::1', '2021-08-05'),
(873, '::1', '2021-08-05'),
(874, '::1', '2021-08-05'),
(875, '::1', '2021-08-05'),
(876, '::1', '2021-08-05'),
(877, '::1', '2021-08-05'),
(878, '::1', '2021-08-05'),
(879, '::1', '2021-08-05'),
(880, '::1', '2021-08-05'),
(881, '::1', '2021-08-05'),
(882, '::1', '2021-08-05'),
(883, '::1', '2021-08-05'),
(884, '::1', '2021-08-05'),
(885, '::1', '2021-08-05'),
(886, '::1', '2021-08-05'),
(887, '::1', '2021-08-05'),
(888, '::1', '2021-08-05'),
(889, '::1', '2021-08-05'),
(890, '::1', '2021-08-05'),
(891, '::1', '2021-08-05'),
(892, '::1', '2021-08-05'),
(893, '::1', '2021-08-05'),
(894, '::1', '2021-08-05'),
(895, '::1', '2021-08-05'),
(896, '::1', '2021-08-05'),
(897, '::1', '2021-08-05'),
(898, '::1', '2021-08-05'),
(899, '::1', '2021-08-05'),
(900, '::1', '2021-08-05'),
(901, '::1', '2021-08-05'),
(902, '::1', '2021-08-05'),
(903, '::1', '2021-08-05'),
(904, '::1', '2021-08-05'),
(905, '::1', '2021-08-05'),
(906, '::1', '2021-08-05'),
(907, '::1', '2021-08-05'),
(908, '::1', '2021-08-05'),
(909, '::1', '2021-08-05'),
(910, '::1', '2021-08-05'),
(911, '::1', '2021-08-05'),
(912, '::1', '2021-08-05'),
(913, '::1', '2021-08-05'),
(914, '::1', '2021-08-05'),
(915, '::1', '2021-08-05'),
(916, '::1', '2021-08-05'),
(917, '::1', '2021-08-05'),
(918, '::1', '2021-08-05'),
(919, '::1', '2021-08-05'),
(920, '::1', '2021-08-05'),
(921, '::1', '2021-08-05'),
(922, '::1', '2021-08-05'),
(923, '::1', '2021-08-05'),
(924, '::1', '2021-08-05'),
(925, '::1', '2021-08-05'),
(926, '::1', '2021-08-05'),
(927, '::1', '2021-08-05'),
(928, '::1', '2021-08-05'),
(929, '::1', '2021-08-05'),
(930, '::1', '2021-08-05'),
(931, '::1', '2021-08-05'),
(932, '::1', '2021-08-05'),
(933, '::1', '2021-08-05'),
(934, '::1', '2021-08-05'),
(935, '::1', '2021-08-05'),
(936, '::1', '2021-08-05'),
(937, '::1', '2021-08-05'),
(938, '::1', '2021-08-05'),
(939, '::1', '2021-08-05'),
(940, '::1', '2021-08-05'),
(941, '::1', '2021-08-05'),
(942, '::1', '2021-08-05'),
(943, '::1', '2021-08-05'),
(944, '::1', '2021-08-05'),
(945, '::1', '2021-08-06'),
(946, '::1', '2021-08-06'),
(947, '::1', '2021-08-06'),
(948, '::1', '2021-08-06'),
(949, '::1', '2021-08-06'),
(950, '::1', '2021-08-06'),
(951, '::1', '2021-08-06'),
(952, '::1', '2021-08-06'),
(953, '::1', '2021-08-06'),
(954, '::1', '2021-08-06'),
(955, '::1', '2021-08-06'),
(956, '::1', '2021-08-06'),
(957, '::1', '2021-08-06'),
(958, '::1', '2021-08-06'),
(959, '::1', '2021-08-06'),
(960, '::1', '2021-08-06'),
(961, '::1', '2021-08-06'),
(962, '::1', '2021-08-06'),
(963, '::1', '2021-08-06'),
(964, '::1', '2021-08-06'),
(965, '::1', '2021-08-06'),
(966, '::1', '2021-08-06'),
(967, '::1', '2021-08-06'),
(968, '::1', '2021-08-06'),
(969, '::1', '2021-08-06'),
(970, '::1', '2021-08-06'),
(971, '::1', '2021-08-06'),
(972, '::1', '2021-08-06'),
(973, '::1', '2021-08-06'),
(974, '::1', '2021-08-06'),
(975, '::1', '2021-08-06'),
(976, '::1', '2021-08-06'),
(977, '::1', '2021-08-06'),
(978, '::1', '2021-08-06'),
(979, '::1', '2021-08-06'),
(980, '::1', '2021-08-06'),
(981, '::1', '2021-08-06'),
(982, '::1', '2021-08-06'),
(983, '::1', '2021-08-06'),
(984, '::1', '2021-08-06'),
(985, '::1', '2021-08-06'),
(986, '::1', '2021-08-06'),
(987, '::1', '2021-08-06'),
(988, '::1', '2021-08-06'),
(989, '::1', '2021-08-06'),
(990, '::1', '2021-08-06'),
(991, '::1', '2021-08-06'),
(992, '::1', '2021-08-06'),
(993, '::1', '2021-08-06'),
(994, '::1', '2021-08-06'),
(995, '::1', '2021-08-06'),
(996, '::1', '2021-08-06'),
(997, '::1', '2021-08-06'),
(998, '::1', '2021-08-06'),
(999, '::1', '2021-08-06'),
(1000, '::1', '2021-08-06'),
(1001, '::1', '2021-08-06'),
(1002, '::1', '2021-08-06'),
(1003, '::1', '2021-08-06'),
(1004, '::1', '2021-08-06'),
(1005, '::1', '2021-08-06'),
(1006, '::1', '2021-08-06'),
(1007, '::1', '2021-08-06'),
(1008, '::1', '2021-08-06'),
(1009, '::1', '2021-08-06'),
(1010, '::1', '2021-08-06'),
(1011, '::1', '2021-08-06'),
(1012, '::1', '2021-08-06'),
(1013, '::1', '2021-08-06'),
(1014, '::1', '2021-08-06'),
(1015, '::1', '2021-08-06'),
(1016, '::1', '2021-08-06'),
(1017, '::1', '2021-08-06'),
(1018, '::1', '2021-08-06'),
(1019, '::1', '2021-08-06'),
(1020, '::1', '2021-08-06'),
(1021, '::1', '2021-08-06'),
(1022, '::1', '2021-08-06'),
(1023, '::1', '2021-08-06'),
(1024, '::1', '2021-08-06'),
(1025, '::1', '2021-08-06'),
(1026, '::1', '2021-08-06'),
(1027, '::1', '2021-08-06'),
(1028, '::1', '2021-08-06'),
(1029, '::1', '2021-08-06'),
(1030, '::1', '2021-08-06'),
(1031, '::1', '2021-08-06'),
(1032, '::1', '2021-08-06'),
(1033, '::1', '2021-08-06'),
(1034, '::1', '2021-08-06'),
(1035, '::1', '2021-08-06'),
(1036, '::1', '2021-08-06'),
(1037, '::1', '2021-08-06'),
(1038, '::1', '2021-08-06'),
(1039, '::1', '2021-08-06'),
(1040, '::1', '2021-08-06'),
(1041, '::1', '2021-08-06'),
(1042, '::1', '2021-08-06'),
(1043, '::1', '2021-08-06'),
(1044, '::1', '2021-08-06'),
(1045, '::1', '2021-08-06'),
(1046, '::1', '2021-08-06'),
(1047, '::1', '2021-08-06'),
(1048, '::1', '2021-08-06'),
(1049, '::1', '2021-08-06'),
(1050, '::1', '2021-08-06'),
(1051, '::1', '2021-08-06'),
(1052, '::1', '2021-08-06'),
(1053, '::1', '2021-08-06'),
(1054, '::1', '2021-08-06'),
(1055, '::1', '2021-08-06'),
(1056, '::1', '2021-08-06'),
(1057, '::1', '2021-08-06'),
(1058, '::1', '2021-08-06'),
(1059, '::1', '2021-08-06'),
(1060, '::1', '2021-08-06'),
(1061, '::1', '2021-08-06'),
(1062, '::1', '2021-08-06'),
(1063, '::1', '2021-08-06'),
(1064, '::1', '2021-08-06'),
(1065, '::1', '2021-08-06'),
(1066, '::1', '2021-08-06'),
(1067, '::1', '2021-08-06'),
(1068, '::1', '2021-08-06'),
(1069, '::1', '2021-08-06'),
(1070, '::1', '2021-08-06'),
(1071, '::1', '2021-08-06'),
(1072, '::1', '2021-08-06'),
(1073, '::1', '2021-08-06'),
(1074, '::1', '2021-08-06'),
(1075, '::1', '2021-08-06'),
(1076, '::1', '2021-08-06'),
(1077, '::1', '2021-08-06'),
(1078, '::1', '2021-08-06'),
(1079, '::1', '2021-08-06'),
(1080, '::1', '2021-08-06'),
(1081, '::1', '2021-08-06'),
(1082, '::1', '2021-08-06'),
(1083, '::1', '2021-08-06'),
(1084, '::1', '2021-08-06'),
(1085, '::1', '2021-08-06'),
(1086, '::1', '2021-08-06'),
(1087, '::1', '2021-08-06'),
(1088, '::1', '2021-08-06'),
(1089, '::1', '2021-08-06'),
(1090, '::1', '2021-08-06'),
(1091, '::1', '2021-08-06'),
(1092, '::1', '2021-08-06'),
(1093, '::1', '2021-08-06'),
(1094, '::1', '2021-08-06'),
(1095, '::1', '2021-08-06'),
(1096, '::1', '2021-08-06'),
(1097, '::1', '2021-08-06'),
(1098, '::1', '2021-08-06'),
(1099, '::1', '2021-08-06'),
(1100, '::1', '2021-08-06'),
(1101, '::1', '2021-08-06'),
(1102, '::1', '2021-08-06'),
(1103, '::1', '2021-08-06'),
(1104, '::1', '2021-08-06'),
(1105, '::1', '2021-08-06'),
(1106, '::1', '2021-08-06'),
(1107, '::1', '2021-08-06'),
(1108, '::1', '2021-08-06'),
(1109, '::1', '2021-08-06'),
(1110, '::1', '2021-08-06'),
(1111, '::1', '2021-08-06'),
(1112, '::1', '2021-08-06'),
(1113, '::1', '2021-08-06'),
(1114, '::1', '2021-08-06'),
(1115, '::1', '2021-08-06'),
(1116, '::1', '2021-08-06'),
(1117, '::1', '2021-08-06'),
(1118, '::1', '2021-08-06'),
(1119, '::1', '2021-08-06'),
(1120, '::1', '2021-08-06'),
(1121, '::1', '2021-08-06'),
(1122, '::1', '2021-08-06'),
(1123, '::1', '2021-08-07'),
(1124, '::1', '2021-08-07'),
(1125, '::1', '2021-08-07'),
(1126, '::1', '2021-08-07'),
(1127, '::1', '2021-08-07'),
(1128, '::1', '2021-08-07'),
(1129, '::1', '2021-08-07'),
(1130, '::1', '2021-08-07'),
(1131, '::1', '2021-08-07'),
(1132, '::1', '2021-08-07'),
(1133, '::1', '2021-08-07'),
(1134, '::1', '2021-08-07'),
(1135, '::1', '2021-08-07'),
(1136, '::1', '2021-08-07'),
(1137, '::1', '2021-08-07'),
(1138, '::1', '2021-08-07'),
(1139, '::1', '2021-08-07'),
(1140, '::1', '2021-08-07'),
(1141, '::1', '2021-08-07'),
(1142, '::1', '2021-08-07'),
(1143, '::1', '2021-08-07'),
(1144, '::1', '2021-08-07'),
(1145, '::1', '2021-08-07'),
(1146, '::1', '2021-08-07'),
(1147, '::1', '2021-08-07'),
(1148, '::1', '2021-08-07'),
(1149, '::1', '2021-08-07'),
(1150, '::1', '2021-08-07'),
(1151, '::1', '2021-08-07'),
(1152, '::1', '2021-08-07'),
(1153, '::1', '2021-08-07'),
(1154, '::1', '2021-08-09'),
(1155, '::1', '2021-08-09'),
(1156, '::1', '2021-08-09'),
(1157, '::1', '2021-08-09'),
(1158, '::1', '2021-08-09'),
(1159, '::1', '2021-08-09'),
(1160, '::1', '2021-08-09'),
(1161, '::1', '2021-08-09'),
(1162, '::1', '2021-08-09'),
(1163, '::1', '2021-08-09'),
(1164, '::1', '2021-08-09'),
(1165, '::1', '2021-08-09'),
(1166, '::1', '2021-08-09'),
(1167, '::1', '2021-08-09'),
(1168, '::1', '2021-08-09'),
(1169, '::1', '2021-08-09'),
(1170, '::1', '2021-08-09'),
(1171, '::1', '2021-08-09'),
(1172, '::1', '2021-08-09'),
(1173, '::1', '2021-08-09'),
(1174, '::1', '2021-08-09'),
(1175, '::1', '2021-08-09'),
(1176, '::1', '2021-08-09'),
(1177, '::1', '2021-08-09'),
(1178, '::1', '2021-08-09'),
(1179, '::1', '2021-08-09'),
(1180, '::1', '2021-08-09'),
(1181, '::1', '2021-08-09'),
(1182, '::1', '2021-08-09'),
(1183, '::1', '2021-08-09'),
(1184, '::1', '2021-08-09'),
(1185, '::1', '2021-08-09'),
(1186, '::1', '2021-08-09'),
(1187, '::1', '2021-08-09'),
(1188, '::1', '2021-08-09'),
(1189, '::1', '2021-08-09'),
(1190, '::1', '2021-08-09'),
(1191, '::1', '2021-08-09'),
(1192, '::1', '2021-08-09'),
(1193, '::1', '2021-08-09'),
(1194, '::1', '2021-08-09'),
(1195, '::1', '2021-08-09'),
(1196, '::1', '2021-08-09'),
(1197, '::1', '2021-08-09'),
(1198, '::1', '2021-08-09'),
(1199, '::1', '2021-08-09'),
(1200, '::1', '2021-08-09'),
(1201, '::1', '2021-08-09'),
(1202, '::1', '2021-08-09'),
(1203, '::1', '2021-08-09'),
(1204, '::1', '2021-08-09'),
(1205, '::1', '2021-08-09'),
(1206, '::1', '2021-08-09'),
(1207, '::1', '2021-08-09'),
(1208, '::1', '2021-08-09'),
(1209, '::1', '2021-08-09'),
(1210, '::1', '2021-08-09'),
(1211, '::1', '2021-08-09'),
(1212, '::1', '2021-08-09'),
(1213, '::1', '2021-08-09'),
(1214, '::1', '2021-08-09'),
(1215, '::1', '2021-08-09'),
(1216, '::1', '2021-08-09'),
(1217, '::1', '2021-08-09'),
(1218, '::1', '2021-08-09'),
(1219, '::1', '2021-08-09'),
(1220, '::1', '2021-08-09'),
(1221, '::1', '2021-08-09'),
(1222, '::1', '2021-08-09'),
(1223, '::1', '2021-08-09'),
(1224, '::1', '2021-08-09'),
(1225, '::1', '2021-08-09'),
(1226, '::1', '2021-08-09'),
(1227, '::1', '2021-08-09'),
(1228, '::1', '2021-08-09'),
(1229, '::1', '2021-08-09'),
(1230, '::1', '2021-08-09'),
(1231, '::1', '2021-08-09'),
(1232, '::1', '2021-08-09'),
(1233, '::1', '2021-08-09'),
(1234, '::1', '2021-08-09'),
(1235, '::1', '2021-08-09'),
(1236, '::1', '2021-08-09'),
(1237, '::1', '2021-08-09'),
(1238, '::1', '2021-08-09'),
(1239, '::1', '2021-08-09'),
(1240, '::1', '2021-08-09'),
(1241, '::1', '2021-08-09'),
(1242, '::1', '2021-08-09'),
(1243, '::1', '2021-08-09'),
(1244, '::1', '2021-08-09'),
(1245, '::1', '2021-08-09'),
(1246, '::1', '2021-08-09'),
(1247, '::1', '2021-08-09'),
(1248, '::1', '2021-08-09'),
(1249, '::1', '2021-08-09'),
(1250, '::1', '2021-08-09'),
(1251, '::1', '2021-08-09'),
(1252, '::1', '2021-08-09'),
(1253, '::1', '2021-08-09'),
(1254, '::1', '2021-08-09'),
(1255, '::1', '2021-08-09'),
(1256, '::1', '2021-08-09'),
(1257, '::1', '2021-08-09'),
(1258, '::1', '2021-08-09'),
(1259, '::1', '2021-08-11'),
(1260, '::1', '2021-08-11'),
(1261, '::1', '2021-08-11'),
(1262, '::1', '2021-08-11'),
(1263, '::1', '2021-08-11'),
(1264, '::1', '2021-08-11'),
(1265, '::1', '2021-08-11'),
(1266, '::1', '2021-08-11'),
(1267, '::1', '2021-08-11'),
(1268, '::1', '2021-08-11'),
(1269, '::1', '2021-08-11'),
(1270, '::1', '2021-08-11'),
(1271, '::1', '2021-08-11'),
(1272, '::1', '2021-08-11'),
(1273, '::1', '2021-08-11'),
(1274, '::1', '2021-08-11'),
(1275, '::1', '2021-08-11'),
(1276, '::1', '2021-08-11'),
(1277, '::1', '2021-08-11'),
(1278, '::1', '2021-08-11'),
(1279, '::1', '2021-08-11'),
(1280, '::1', '2021-08-11'),
(1281, '::1', '2021-08-11'),
(1282, '::1', '2021-08-11'),
(1283, '::1', '2021-08-11'),
(1284, '::1', '2021-08-11'),
(1285, '::1', '2021-08-11'),
(1286, '::1', '2021-08-11'),
(1287, '::1', '2021-08-11'),
(1288, '::1', '2021-08-11'),
(1289, '::1', '2021-08-11'),
(1290, '::1', '2021-08-11'),
(1291, '::1', '2021-08-11'),
(1292, '::1', '2021-08-11'),
(1293, '::1', '2021-08-11'),
(1294, '::1', '2021-08-11'),
(1295, '::1', '2021-08-11'),
(1296, '::1', '2021-08-11'),
(1297, '::1', '2021-08-11'),
(1298, '::1', '2021-08-11'),
(1299, '::1', '2021-08-11'),
(1300, '::1', '2021-08-11'),
(1301, '::1', '2021-08-11'),
(1302, '::1', '2021-08-11'),
(1303, '::1', '2021-08-11'),
(1304, '::1', '2021-08-11'),
(1305, '::1', '2021-08-11'),
(1306, '::1', '2021-08-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agences`
--
ALTER TABLE `agences`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`idFaq`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`idFile`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `agences`
--
ALTER TABLE `agences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `idCom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `idFaq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `idFile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `idPage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1307;

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
