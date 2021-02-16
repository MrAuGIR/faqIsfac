-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 16 fév. 2021 à 12:38
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hackathon`
--

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id` int NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `reponse` longtext NOT NULL,
  `date` datetime DEFAULT NULL,
  `importance` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id`, `question`, `reponse`, `date`, `importance`) VALUES
(1, 'Le protocole en vigueur à compter du 1er février 2021 est-il applicable sur l’ensemble du territoire ?', 'Le protocole sanitaire, en vigueur à compter du 1er février 2021, s’applique sur tout le territoire métropolitain. À compter du 18 janvier 2021, il a été complété par des mesures supplémentaires en ce qui concerne la restauration scolaire et par la suspension, jusqu’à nouvel ordre, des activités physiques et sportives en espace clos. A compter du 1er février 2021, la distanciation de 2 mètres entre groupes à la cantine et le port de masque \"grand public\" de catégorie 1 sont désormais requis et l’aération des locaux est renforcée.', '2021-02-16 00:00:00', 0),
(2, 'Quel protocole est applicable dans les départements-régions d’outre-mer et les collectivités d’outre-mer ?', 'Au regard d’une propagation du virus plus faible dans certains territoires d’outre-mer, le protocole sanitaire applicable en école et établissement scolaire demeure celui en vigueur le 29 octobre 2020, conformément à l’article 55 du décret n°2020-1310 du 29 octobre 2020. Toutefois, en raison d’une situation sanitaire évolutive due notamment à la circulation des différentes variantes, il est très fortement recommandé d’appliquer les consignes valables en métropole même si elles ne sont pas réglementairement obligatoires (limitation du brassage notamment lors de la restauration, limitation des activités physiques et sportives dans les espaces clos). Par ailleurs, conformément au décret n° 2021-152 du 12 février 2021 modifiant les décrets n° 2020-1262 du 16 octobre 2020 et n° 2020-1310 du 29 octobre 2020, le port du masque chirurgical ou grand public ayant une capacité de filtration de 90% (ancien masque grand public de catégorie 1) est désormais obligatoire pour les élèves en école élémentaire. Des mesures restrictives spécifiques peuvent être prises localement par les Préfets, auxquelles il convient de se conformer.', '2021-02-15 00:00:00', 0),
(3, 'Quelles sont les règles applicables pendant les horaires de couvre-feu ?', 'L’accueil des usagers dans les établissements scolaires dans le cadre des activités d’enseignement et des activités périscolaires fait l’objet de dérogations aux règles du couvre-feu. Ainsi, les activités peuvent se poursuivre au-delà de l’horaire du couvre-feu et les déplacements entre l’établissement et le domicile sont autorisés. Le couvre-feu à 18 heures n’implique donc pas d’ajustement des emplois du temps.\r\nDeux types d’attestation nominative peuvent être présentés aux forces de l’ordre par les parents accompagnant ou allant chercher leur enfant :\r\nune attestation temporaire papier ou numérique qui peut être rapidement établie par le parent ou le responsable de l’élève, dans laquelle le motif \"Déplacements entre le domicile et le lieu d’exercice de l’activité professionnelle ou le lieu d’enseignement et de formation, déplacements professionnels ne pouvant être différés\" a été coché et indiquant simplement la date et l’heure du déplacement ;\r\n OU une attestation permanente établie par le parent, revêtue du nom, de l’adresse et du cachet de l’école ou de l’établissement d’accueil de l’enfant. Une pièce d’identité pourra également leur être demandée. Ces attestations peuvent être imprimées ou téléchargées sur le site du ministère de l’intérieur ou via l’application \"Tous Anti Covid\".', '2021-02-14 00:00:00', 0),
(4, 'Les mineurs sont-ils autorisés à se rendre seuls dans leur établissement scolaire ?', 'Les mineurs sont autorisés à sortir seuls. Ils bénéficient des mêmes dérogations à l’interdiction de déplacement que les majeurs, à ceci près que leur attestation dérogatoire de déplacement s’ils sont appelés à se déplacer au-delà de l’heure du couvre-feu doit en outre être signée par le titulaire de l’autorité parentale.\r\nLes mineurs peuvent se déplacer durant les horaires de couvre-feu pour regagner leur domicile après une activité scolaire ou périscolaire. S’offrent alors deux possibilités :\r\nIls peuvent produire une attestation de déplacement avec motif \"Déplacements entre le domicile et le (…) lieu d’enseignement et de formation\". L’attestation est signée par un responsable légal.\r\nIls peuvent présenter leur carnet de correspondance pour les déplacements aux heures d’ouverture et de fermeture des établissements scolaires.', '2021-02-13 00:00:00', 0),
(5, 'Mon enfant doit-il se rendre à son école ou établissement scolaire alors même que j’ai la possibilité de le garder en assurant les cours à la maison ?', 'Oui, sauf motif d’absence dûment justifié ou dans l’hypothèse où la classe ou l’école ou l’établissement fait l’objet d’une mesure de fermeture portée à la connaissance des familles, les enfants doivent se rendre à leur école ou dans leur établissement scolaire.\r\nDans les lycées, dans lesquels un enseignement à distance ou des travaux personnels peuvent être mis en place, les élèves peuvent toutefois être invités à travailler à leur domicile selon des modalités dont les élèves sont informés.', '2021-02-12 00:00:00', 0),
(6, 'Les personnels doivent-ils porter des masques ?', 'Le port d’un masque est obligatoire pour les personnels, tant dans les espaces clos que dans les espaces extérieurs. Compte tenu de l’apparition de variants du SARS-CoV-2 potentiellement plus transmissibles, seuls les masques chirurgicaux ou les masques \"grand public\" ayant une capacité de filtration de 90% (ancien masque grand public de catégorie 1) peuvent être portés1.\r\nLe Ministère de l’éducation nationale met à la disposition de ses personnels des masques \"grand public\" ayant une capacité de filtration de 90%. Il appartient aux collectivités territoriales de procéder à l’équipement des personnels relevant de leur périmètre.\r\n1Conformément aux dispositions de l’annexe 1 du décret du 29 octobre 2020, le masque doit notamment présenter une efficacité de filtration vers l\'extérieur des particules de 3 micromètres émises supérieure à 90 %.', '2021-02-11 00:00:00', 0),
(7, 'Quel est le niveau de protection du masque fourni par le ministère de l’Éducation nationale ?', 'Dans son avis du 17 septembre 2020 et du 20 janvier 2021, le Haut conseil de la santé publique (HCSP) souligne que les masques grand public de catégorie 1 répondant aux spécifications de l’Afnor (tels que ceux que le Ministère de l’éducation nationale fournit à ses agents) garantissent un niveau de filtration élevé et sont suffisamment protecteurs dans le contexte scolaire. La seule circonstance qu’un enseignant porterait un masque de ce type et non un masque chirurgical ne doit donc en aucun cas conduire à considérer que ce personnel est insuffisamment protégé, y compris s’il est au contact d’un enfant de moins de 11 ans ne portant pas le masque.', '2021-02-10 00:00:00', 0),
(8, 'Les élèves doivent-ils porter des masques ?', 'Compte tenu de l’apparition de variantes du SARS-CoV-2 potentiellement plus transmissibles, seuls les masques chirurgicaux ou les masques grand public ayant une capacité de filtration de 90 % (ancien masque grand public de catégorie 1) peuvent être portés1.\r\nConcernant les enfants en situation de handicap, ceux-ci sont couverts par la dérogation générale au port du masque, fixée à l’article 2 du décret du 29 octobre 2020. Dans le certificat qu’il établit, le médecin se prononce, dans le respect du secret médical et sans avoir à en indiquer la nature, sur l’existence d’une situation de handicap justifiant qu’il soit dérogé à l’obligation de port du masque, conformément aux dispositions du décret du 29 octobre 2020. A compter du 2 novembre 2020, un délai d’une semaine pour présenter ce certificat au chef d’établissement ou au directeur d’école est donné aux représentants légaux des élèves concernés. Le cas échéant, et à l’initiative du chef d’établissement ou du directeur d’école, le médecin scolaire du secteur peut être sollicité pour établir ce certificat. L’avis du médecin référent détermine alors les conditions du port du masque pour les élèves présentant des pathologies particulières.\r\nIl appartient aux parents de fournir des masques à leurs enfants. Le ministère dote chaque école, collège et lycée en masques \"grand public\" de catégorie 1 afin qu’ils puissent être fournis aux élèves qui n’en disposeraient pas.\r\n1 Conformément aux dispositions de l’annexe 1 du décret du 29 octobre 2020, le masque doit notamment présenter une efficacité de filtration vers l\'extérieur des particules de 3 micromètres émises supérieure à 90 %.', '2021-02-09 00:00:00', 0),
(9, 'Comment poser son masque lorsqu’il n’est pas utilisé ?', 'Lorsque le masque n’est pas utilisé, les élèves et les personnels doivent porter une attention particulière à la manière dont ils enlèvent et entreposent leur masque en vue d’une réutilisation future.\r\nLe masque peut être suspendu à une accroche isolée ou replié sans contact entre extérieur et l’intérieur du masque et placé dans une pochette individuelle.', '2021-02-07 00:00:00', 0),
(10, 'Les élèves allergiques peuvent-ils être dispensés du port du masque ?', 'Les autorités sanitaires (avis du Haut Conseil de la Santé publique sur les masques dans le cadre de la lutte contre la propagation du virus SARS-CoV-2 du 29 octobre 2020) considèrent qu’il n’existe pas de contre-indications documentées, dermatologiques, pneumologiques, ORL et phoniatriques ou psychiatriques, au port de masque quel que soit son type (masque à usage médical, masque grand public en tissu réutilisable).\r\nPar ailleurs l’article 36 du décret n° 2020-1310 du 29 octobre 2020 prescrivant les mesures générales nécessaires pour faire face à l’épidémie de covid-19 dans le cadre de l’état d’urgence sanitaire prévoit que \"II. Portent un masque de protection : (…) 3° Les élèves des écoles élémentaires ; 4° Les collégiens, les lycéens et les usagers des établissements mentionnés aux articles 34 et 35 ; (…)\". L’article 2 du même décret prévoit toutefois que personnes en situation de handicap munies d\'un certificat médical peuvent ne pas porter le masque.\r\nLe port du masque s’impose donc à tous dans les écoles et les établissements scolaires dans le cadre d’une démarche de protection des personnels, des élèves et de leur famille à laquelle tous les membres de la communauté éducative doivent concourir.', '2021-02-07 00:00:00', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
