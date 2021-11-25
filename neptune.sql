-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 24 nov. 2021 à 17:32
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
-- Base de données : `neptune`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

DROP TABLE IF EXISTS `chambres`;
CREATE TABLE IF NOT EXISTS `chambres` (
  `id_cham` int NOT NULL AUTO_INCREMENT,
  `capacite` int NOT NULL,
  `exposition` varchar(20) DEFAULT NULL,
  `douche` int NOT NULL DEFAULT '0',
  `etage` int NOT NULL,
  `tarif_id` int DEFAULT NULL,
  `avatar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cham`),
  KEY `tarif_id` (`tarif_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`id_cham`, `capacite`, `exposition`, `douche`, `etage`, `tarif_id`, `avatar`) VALUES
(1, 2, 'port', 0, 1, 2, 'chambre2p.jpg'),
(2, 4, 'rempart', 0, 1, 5, 'chambre4r.jpg'),
(3, 2, 'port', 0, 1, 2, 'chambre2p.jpg'),
(4, 2, 'rempart', 1, 3, 1, 'chambre2r.jpg'),
(5, 2, 'port', 0, 2, 3, 'chambre2p.jpg'),
(6, 3, 'rempart', 0, 2, 4, 'chambre3r.jpg'),
(7, 3, 'port', 0, 2, 4, 'chambre3p.jpg'),
(8, 2, 'rempart', 1, 2, 3, 'chambre2r.jpg'),
(9, 2, 'port', 0, 3, 1, 'chambre2p.jpg'),
(10, 2, 'rempart', 0, 3, 2, 'chambre2r.jpg'),
(11, 2, 'port', 0, 3, 2, 'chambre2p.jpg'),
(12, 4, 'port', 1, 3, 5, 'chambre4p.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `civilite` varchar(20) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(70) NOT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `codePostal` varchar(10) DEFAULT NULL,
  `ville` varchar(200) DEFAULT NULL,
  `pays_id` int DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pays_id` (`pays_id`)
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `civilite`, `nom`, `prenom`, `adresse`, `codePostal`, `ville`, `pays_id`, `email`, `pass`) VALUES
(1, 'Mademoiselle', 'DUMAS', 'Sandrine', '5 allée des Tilleuls', '75010', 'PARIS', 1, 'Sandrine.DUMAS@gmail.com', 'CLIENT'),
(2, 'Monsieur', 'MORIN', 'Karl', 'North avenue 44', 'TW9 3', 'KEW', 2, 'Karl.MORIN@gmail.com', 'CLIENT'),
(3, 'Madame', 'MORIN', 'Joélle', '34 rue Saint Denis', '67000', 'STRASBOURG', 1, 'Joélle.MORIN@gmail.com', 'CLIENT'),
(4, 'Mademoiselle', 'GAGNERON', 'Aurélie', '4 rue Laénnec', '01200', 'MONTANGES', 1, 'Aurélie.GAGNERON@gmail.com', 'CLIENT'),
(5, 'Madame', 'DULLAC', 'Martine', '4 allée André Malraux', '14100', 'LISIEUX', 1, 'Martine.DULLAC@gmail.com', 'CLIENT'),
(6, 'Madame', 'DUPRE', 'Stéphanie', '87 rue Ernest Renan', '35480', 'GUIPRY', 1, 'Stéphanie.DUPRE@gmail.com', 'CLIENT'),
(7, 'Monsieur', 'BRIGAND', 'Maurice', '2 rue Louis Blériot', '35360', 'MONTAUBAN DE BRETAGNE', 1, 'Maurice.BRIGAND@gmail.com', 'CLIENT'),
(8, 'Monsieur', 'VAN ELIT', 'Gérard', '27 rue Ambroise', '1000', 'BRUXELLES', 3, 'Gérard.VAN ELIT@gmail.com', 'CLIENT'),
(9, 'Monsieur', 'DESROSIERS', 'Antoine', '2 allée Antoinette', '53200', 'AZE', 1, 'Antoine.DESROSIERS@gmail.com', 'CLIENT'),
(10, 'Mademoiselle', 'DULLAC', 'Martine', '17 avenue Albert Camus', '35200', 'MARSEILLE', 1, 'Martine.DULLAC@gmail.com', 'CLIENT'),
(11, 'Monsieur', 'LELONG', 'Magloire', '11 rue Paul Bert', '1000', 'BRUXELLES', 3, 'Magloire.LELONG@gmail.com', 'CLIENT'),
(12, 'Monsieur', 'MALPAS', 'Julien', '16 rue Gambetta', '29000', 'BREST', 1, 'Julien.MALPAS@gmail.com', 'CLIENT'),
(13, 'Monsieur', 'BRIGAND', 'Maurice', '46 rue Emile Zola', '30000', 'NIMES', 1, 'Maurice.BRIGAND@gmail.com', 'CLIENT'),
(14, 'Madame', 'DESBOIS', 'Delphine', '8 Square des Ormeaux', '36000', 'CHATEAUROUX', 1, 'Delphine.DESBOIS@gmail.com', 'CLIENT'),
(15, 'Mademoiselle', 'DUMARC', 'Sandrine', '31 rue André Desilles', '33000', 'BORDEAUX', 1, 'Sandrine.DUMARC@gmail.com', 'CLIENT'),
(16, 'Monsieur', 'TAILLARD', 'Julien', 'La Chesnaie', '5570', 'WANCENNES', 3, 'Julien.TAILLARD@gmail.com', 'CLIENT'),
(17, 'Madame', 'LEGOFF', 'Franéoise', '11 rue des Peupliers', '29000', 'BREST', 1, 'Franéoise.LEGOFF@gmail.com', 'CLIENT'),
(18, 'Monsieur', 'BOURGE', 'Nicolas', 'Le Chéne Tord', '92340', 'BOURG LA REINE', 1, 'Nicolas.BOURGE@gmail.com', 'CLIENT'),
(19, 'Madame', 'FRALIN', 'Emmanuelle', '4 rue Rabelais', '78650', 'BEYNES', 1, 'Emmanuelle.FRALIN@gmail.com', 'CLIENT'),
(20, 'Mademoiselle', 'GARCIA', 'Mary', 'New road east 22', 'PO2 7', 'PORTSMOUTH', 2, 'Mary.GARCIA@gmail.com', 'CLIENT'),
(21, 'Monsieur', 'FOULON', 'Yann', '7 Allée de Bréquigny', '72000', 'LE MANS', 1, 'Yann.FOULON@gmail.com', 'CLIENT'),
(22, 'Monsieur', 'FOURET', 'Samuel', '45 rue de lIse', '22000', 'SAINT BRIEUC', 1, 'Samuel.FOURET@gmail.com', 'CLIENT'),
(23, 'Mademoiselle', 'GARRET', 'Guénola', '8 Square de Londres', '53000', 'LAVAL', 1, 'Guénola.GARRET@gmail.com', 'CLIENT'),
(24, 'Madame', 'JAMOTEAU', 'Fabienne', '2 rue Saint Michel', '44000', 'NANTES', 1, 'Fabienne.JAMOTEAU@gmail.com', 'CLIENT'),
(25, 'Monsieur', 'ROUSSEAU', 'Damien', '1 Square du Douro', '02400', 'NOGENTEL', 1, 'Damien.ROUSSEAU@gmail.com', 'CLIENT'),
(26, 'Monsieur', 'AUBIER', 'Barnab', 'Les Ruelles', '35235', 'THORIGNE FOUILLARD', 1, 'Barnab.AUBIER@gmail.com', 'CLIENT'),
(27, 'Monsieur', 'HILARY', 'Lionel', '18 rue des Camélias', '54300', 'LUNEVILLE', 1, 'Lionel.HILARY@gmail.com', 'CLIENT'),
(28, 'Madame', 'COIGNE', 'Katell', '11 rue de la Mare', '01100', 'APREMONT', 1, 'Katell.COIGNE@gmail.com', 'CLIENT'),
(29, 'Monsieur', 'LINIZAN', 'Gérald', '19 rue Mozart', '35830', 'BETTON', 1, 'Gérald.LINIZAN@gmail.com', 'CLIENT'),
(30, 'Monsieur', 'AUDUREAU', 'Manuel', '34 rue de Verdun', '34000', 'MONTPELLIER', 1, 'Manuel.AUDUREAU@gmail.com', 'CLIENT'),
(31, 'Monsieur', 'HERFROY', 'Sylvain', '2 rue Launay', '12200', 'SAVIGNAC', 1, 'Sylvain.HERFROY@gmail.com', 'CLIENT'),
(32, 'Monsieur', 'COUPPE', 'Maxime', '42 rue César', '06000', 'NICE', 1, 'Maxime.COUPPE@gmail.com', 'CLIENT'),
(33, 'Monsieur', 'COULAIN', 'John', 'Porstmouth Street 23', 'SW1X', 'LONDON', 2, 'John.COULAIN@gmail.com', 'CLIENT'),
(34, 'Madame', 'LEDUC', 'Christine', 'Villa des Résédas', '75003', 'PARIS', 1, 'Christine.LEDUC@gmail.com', 'CLIENT'),
(35, 'Monsieur', 'MOREAU', 'Ludovic', '11 rue du Hétre', '35480', 'GUIPRY', 1, 'Ludovic.MOREAU@gmail.com', 'CLIENT'),
(36, 'Mademoiselle', 'RACAPE', 'Sylvie', '8 Square du Douro', '02100', 'GRICOURT', 1, 'Sylvie.RACAPE@gmail.com', 'CLIENT'),
(37, 'Monsieur', 'MALOUIN', 'Herv', '33 allée du Lac Onéga', '35200', 'MARSEILLE', 1, 'Herv.MALOUIN@gmail.com', 'CLIENT'),
(38, 'Madame', 'QUERE', 'Maryvonne', '28 rue de vern', '02000', 'URCEL', 1, 'Maryvonne.QUERE@gmail.com', 'CLIENT'),
(39, 'Monsieur', 'ROULIER', 'Jean Paul', '6 avenue du Canada', '35200', 'RENNES', 1, 'Jean Paul.ROULIER@gmail.com', 'CLIENT'),
(40, 'Mademoiselle', 'SEVEZAN', 'Michelle', 'Albert road north 6', 'S0145', 'SOUTHAMPTON', 2, 'Michelle.SEVEZAN@gmail.com', 'CLIENT'),
(41, 'Monsieur', 'LESTER', 'Ted', 'Beechin wood lane 6', 'TN158', 'PLATT', 2, 'Ted.LESTER@gmail.com', 'CLIENT'),
(42, 'Madame', 'MONTEREL', 'Sonia', 'Castle Road 3', 'SW1B', 'LONDON', 2, 'Sonia.MONTEREL@gmail.com', 'CLIENT'),
(43, 'Monsieur', 'GICQUEL', 'Bruno', '64 rue Albert Camus', '25230', 'DASLE', 1, 'Bruno.GICQUEL@gmail.com', 'CLIENT'),
(44, 'Mademoiselle', 'COUPPEY', 'Corinne', 'Roding lane north 54', 'IG88', 'LONDON', 2, 'Corinne.COUPPEY@gmail.com', 'CLIENT'),
(45, 'Madame', 'CADOREL', 'Louise', '23 route de Lorient', '03500', 'MONTORD', 1, 'Louise.CADOREL@gmail.com', 'CLIENT'),
(46, 'Monsieur', 'VIGNER', 'Jean Luc', '43 rue Etienne Pinault', '13000', 'MARSEILLE', 1, 'Jean Luc.VIGNER@gmail.com', 'CLIENT'),
(47, 'Madame', 'COUSTOM', 'Colleen', 'Dapholdils Street 4', 'BD1', 'MARSH', 2, 'Colleen.COUSTOM@gmail.com', 'CLIENT'),
(48, 'Mademoiselle', 'LEBLE', 'Séverine', '65 rue des Foss', '75012', 'PARIS', 1, 'Séverine.LEBLE@gmail.com', 'CLIENT'),
(49, 'Monsieur', 'LEGOFF', 'Pierre', 'Gand Platze 4', '8000', 'ZURICH', 4, 'Pierre.LEGOFF@gmail.com', 'CLIENT'),
(50, 'Monsieur', 'LESCOUARN', 'Claude', '22 allée de Varsovie', '35200', 'RENNES', 1, 'Claude.LESCOUARN@gmail.com', 'CLIENT'),
(51, 'Monsieur', 'AUDUREAU', 'Gildas', 'Les Ruelles', '04500', 'RIEZ', 1, 'Gildas.AUDUREAU@gmail.com', 'CLIENT'),
(52, 'Monsieur', 'BOURGE', 'Manuel', '34 rue de Verdun', '92500', 'RUEIL MALMAISON', 1, 'Manuel.BOURGE@gmail.com', 'CLIENT'),
(53, 'Monsieur', 'BRIGAND', 'Nicolas', 'Le Chéne Tord', '1000', 'LAUSANNE', 4, 'Nicolas.BRIGAND@gmail.com', 'CLIENT'),
(54, 'Monsieur', 'BRIGAND', 'Maurice', '2 rue Louis Blériot', '59000', 'LILLE', 1, 'Maurice.BRIGAND@gmail.com', 'CLIENT'),
(55, 'Monsieur', 'CADOREL', 'Maurice', 'Emilian Strasse 67', '8000', 'ZURICH', 4, 'Maurice.CADOREL@gmail.com', 'CLIENT'),
(56, 'Monsieur', 'COIGNE', 'Ludovic', '23 route de Lorient', '35700', 'RENNES', 1, 'Ludovic.COIGNE@gmail.com', 'CLIENT'),
(57, 'Monsieur', 'COULARON', 'Killian', '11 rue de la Mare', '35250', 'ST MEDARD/ILLE', 1, 'Killian.COULARON@gmail.com', 'CLIENT'),
(58, 'Monsieur', 'MARTIN', 'Peter', 'Upper new road 56', 'SO303', 'SOUTHAMPTON', 2, 'Peter.MARTIN@gmail.com', 'CLIENT'),
(59, 'Monsieur', 'COUPPEY', 'Maxime', '42 rue César', '01000', 'BOURG EN BRESSE', 1, 'Maxime.COUPPEY@gmail.com', 'CLIENT'),
(60, 'Monsieur', 'COUSSOT', 'Corentin', 'New george street 1', 'PL11', 'PLYMOUTH', 2, 'Corentin.COUSSOT@gmail.com', 'CLIENT'),
(61, 'Monsieur', 'DAUMAS', 'Colin', '4 allée du Dauphin', '35000', 'RENNES', 1, 'Colin.DAUMAS@gmail.com', 'CLIENT'),
(62, 'Monsieur', 'DESBOIS', 'Stéphane', '5 allée des Tilleuls', '75005', 'PARIS', 1, 'Stéphane.DESBOIS@gmail.com', 'CLIENT'),
(63, 'Monsieur', 'DESROSIERS', 'Didier', '8 Square des Ormeaux', '91100', 'CORBEIL ESSONNES', 1, 'Didier.DESROSIERS@gmail.com', 'CLIENT'),
(64, 'Monsieur', 'DULLAC', 'Antoine', '2 allée Antoinette', '35520', 'GUICHEN', 1, 'Antoine.DULLAC@gmail.com', 'CLIENT'),
(65, 'Monsieur', 'DULLAC', 'Martin', '4 allée André Malraux', '35150', 'CORPS NUDS', 1, 'Martin.DULLAC@gmail.com', 'CLIENT'),
(66, 'Monsieur', 'DUMARC', 'Martin', '17 avenue Albert Camus', '37220', 'TROGUES', 1, 'Martin.DUMARC@gmail.com', 'CLIENT'),
(67, 'Monsieur', 'DUMAS', 'Stéphane', '31 rue André Desilles', '35000', 'RENNES', 1, 'Stéphane.DUMAS@gmail.com', 'CLIENT'),
(68, 'Monsieur', 'LOUMAS', 'Geoffroy', '5 allée des Tilleuls', '75001', 'PARIS', 1, 'Geoffroy.LOUMAS@gmail.com', 'CLIENT'),
(69, 'Monsieur', 'DESPRE', 'Stéphane', '87 rue Ernest Renan', '14400', 'CUSSY', 1, 'Stéphane.DESPRE@gmail.com', 'CLIENT'),
(70, 'Monsieur', 'COULON', 'Yann', '7 Allée de Bréquigny', '92400', 'COURBEVOIE', 1, 'Yann.COULON@gmail.com', 'CLIENT'),
(71, 'Monsieur', 'LOURET', 'Samuel', '45 rue de lIse', '14000', 'CAEN', 1, 'Samuel.LOURET@gmail.com', 'CLIENT'),
(72, 'Monsieur', 'GRALIN', 'Emmanuel', '4 rue Rabelais', '35250', 'ST MEDARD/ILLE', 1, 'Emmanuel.GRALIN@gmail.com', 'CLIENT'),
(73, 'Monsieur', 'SAGER', 'Aurélien', '4 rue Laénnec', '37150', 'CHENONCEAUX', 1, 'Aurélien.SAGER@gmail.com', 'CLIENT'),
(74, 'Monsieur', 'GRANDOLE', 'Paul', 'North down crescent 9', 'PL22', 'PLYMOUTH', 2, 'Paul.GRANDOLE@gmail.com', 'CLIENT'),
(75, 'Monsieur', 'BARRET', 'Gweltaz', '8 Square de Londres', '33000', 'BORDEAUX', 1, 'Gweltaz.BARRET@gmail.com', 'CLIENT'),
(76, 'Monsieur', 'PIGEON', 'Bruno', '64 rue Albert Camus', '35230', 'CREVIN', 1, 'Bruno.PIGEON@gmail.com', 'CLIENT'),
(77, 'Monsieur', 'GEFFROY', 'Laurent', '2 rue Launay', '35850', 'GEVEZE', 1, 'Laurent.GEFFROY@gmail.com', 'CLIENT'),
(78, 'Monsieur', 'JULIEN', 'Lionel', '18 rue des Camélias', '43000', 'POLIGNAC', 1, 'Lionel.JULIEN@gmail.com', 'CLIENT'),
(79, 'Monsieur', 'FRAME', 'Charly', 'Pine view 10', 'TN158', 'PLATT', 2, 'Charly.FRAME@gmail.com', 'CLIENT'),
(80, 'Monsieur', 'LEGORGE', 'Sébastien', '65 rue des Foss', '35850', 'GEVEZE', 1, 'Sébastien.LEGORGE@gmail.com', 'CLIENT'),
(81, 'Monsieur', 'DURAND', 'Christian', 'Villa des Résédas', '35830', 'PARIS', 1, 'Christian.DURAND@gmail.com', 'CLIENT'),
(82, 'Monsieur', 'FERNIER', 'Thierry', '23 rue Barthou', '8957', 'MESSINES', 3, 'Thierry.FERNIER@gmail.com', 'CLIENT'),
(83, 'Monsieur', 'DEGOUIS', 'Franéois', '11 rue des Peupliers', '75001', 'PARIS', 1, 'Franéois.DEGOUIS@gmail.com', 'CLIENT'),
(84, 'Monsieur', 'SERFE', 'Pierre', '11 lot des Peupliers', '1000', 'LAUSANNE', 4, 'Pierre.SERFE@gmail.com', 'CLIENT'),
(85, 'Monsieur', 'DULONG', 'Magloire', '11 rue Paul Bert', '27000', 'EVREUX', 1, 'Magloire.DULONG@gmail.com', 'CLIENT'),
(86, 'Monsieur', 'MESCOUARN', 'Claude', '22 allée de Varsovie', '27100', 'VAL DE REUIL', 1, 'Claude.MESCOUARN@gmail.com', 'CLIENT'),
(87, 'Monsieur', 'INIZAN', 'Gérald', '19 rue Mozart', '75001', 'PARIS', 1, 'Gérald.INIZAN@gmail.com', 'CLIENT'),
(88, 'Monsieur', 'FALOUIN', 'Herv', '33 allée du Lac Onéga', '27200', 'VERNON', 1, 'Herv.FALOUIN@gmail.com', 'CLIENT'),
(89, 'Monsieur', 'MOBAL', 'Jude', 'Row lane 23', 'PL52', 'PLYMOUTH', 2, 'Jude.MOBAL@gmail.com', 'CLIENT'),
(90, 'Monsieur', 'MONTHUREL', 'Simon', '3 Quai Chateaubriand', '67500', 'HAGUENAU', 1, 'Simon.MONTHUREL@gmail.com', 'CLIENT'),
(91, 'Monsieur', 'POREL', 'Ludovic', '11 rue du Hétre', '14250', 'BROUAY', 1, 'Ludovic.POREL@gmail.com', 'CLIENT'),
(92, 'Monsieur', 'NOUE', 'Herv', '44 rue Saint Denis', '27300', 'BERNAY', 1, 'Herv.NOUE@gmail.com', 'CLIENT'),
(93, 'Monsieur', 'CHARLES', 'Julien', '44 rue Saint Denis', '35000', 'RENNES', 1, 'Julien.CHARLES@gmail.com', 'CLIENT'),
(94, 'Monsieur', 'BERDIER', 'Marc', '28 rue de vern', '35000', 'RENNES', 1, 'Marc.BERDIER@gmail.com', 'CLIENT'),
(95, 'Monsieur', 'BADELOIS', 'Sylvain', '8 Square du Douro', '35200', 'RENNES', 1, 'Sylvain.BADELOIS@gmail.com', 'CLIENT'),
(96, 'Monsieur', 'ROULLER', 'Jean Paul', '6 avenue du Canada', '35200', 'RENNES', 1, 'Jean Paul.ROULLER@gmail.com', 'CLIENT'),
(97, 'Monsieur', 'MONTVOL', 'Damien', '1 Square du Douro', '35200', 'RENNES', 1, 'Damien.MONTVOL@gmail.com', 'CLIENT'),
(98, 'Monsieur', 'VERSER', 'Martin', 'Clare hill 8', 'KT109', 'LONDON', 2, 'Martin.VERSER@gmail.com', 'CLIENT'),
(99, 'Monsieur', 'MAILLARD', 'Julien', 'La Chesnaie', '33150', 'CENON', 1, 'Julien.MAILLARD@gmail.com', 'CLIENT'),
(100, 'Monsieur', 'BANELIER', 'Gérard', '27 rue Ambroise', '6978', 'GANDRIA', 4, 'Gérard.BANELIER@gmail.com', 'CLIENT'),
(101, 'Monsieur', 'BIHAN', 'Martin', 'Eastend avenue 43', 'OX2', 'TUSMORE', 2, 'Martin.BIHAN@gmail.com', 'CLIENT'),
(102, 'Monsieur', 'AUDUREAU', 'Barnab', 'Les Ruelles', '35235', 'THORIGNE FOUILLARD', 1, 'Barnab.AUDUREAU@gmail.com', 'CLIENT'),
(103, 'Monsieur', 'BOURGE', 'Manuel', '34 rue de Verdun', '72150', 'COURDEMANCHE', 1, 'Manuel.BOURGE@gmail.com', 'CLIENT'),
(104, 'Monsieur', 'BRIGAND', 'Nicolas', 'Les Mélézes', '1875', 'MORGINS', 4, 'Nicolas.BRIGAND@gmail.com', 'CLIENT'),
(105, 'Monsieur', 'BRIGAND', 'Maurice', '2 rue Louis Blériot', '35360', 'MONTAUBAN DE BRETAGNE', 1, 'Maurice.BRIGAND@gmail.com', 'CLIENT'),
(106, 'Monsieur', 'CADOREL', 'Maurice', '46 rue Emile Zola', '35170', 'BRUZ', 1, 'Maurice.CADOREL@gmail.com', 'CLIENT'),
(107, 'Monsieur', 'COIGNE', 'Louis', '23 route de Lorient', '78250', 'MEULAN', 1, 'Louis.COIGNE@gmail.com', 'CLIENT'),
(108, 'Monsieur', 'COULARON', 'Killian', '11 rue de la Mare', '54000', 'NANCY', 1, 'Killian.COULARON@gmail.com', 'CLIENT'),
(109, 'Monsieur', 'COUPPLE', 'John', 'Sunnyside road north 23', 'N99', 'LONDON', 2, 'John.COUPPLE@gmail.com', 'CLIENT'),
(110, 'Monsieur', 'COUPPEY', 'Maxime', '42 rue César', '92300', 'LEVALLOIS PERRET', 1, 'Maxime.COUPPEY@gmail.com', 'CLIENT'),
(111, 'Monsieur', 'BOURN', 'Peter', 'Lichfield drive 5', 'LE84', 'BLABY', 2, 'Peter.BOURN@gmail.com', 'CLIENT'),
(112, 'Monsieur', 'DAUMAS', 'Pol', '4 allée du Dauphin', '29100', 'DOUARNENEZ', 1, 'Pol.DAUMAS@gmail.com', 'CLIENT'),
(113, 'Monsieur', 'DESBOIS', 'Stéphane', '5 allée des Tilleuls', '1200', 'GENEVE', 4, 'Stéphane.DESBOIS@gmail.com', 'CLIENT'),
(114, 'Monsieur', 'DESROSIERS', 'Donatien', '8 Square des Ormeaux', '44150', 'ANCENIS', 1, 'Donatien.DESROSIERS@gmail.com', 'CLIENT'),
(115, 'Monsieur', 'DULLAC', 'Antoine', '2 allée Antoinette', '66150', 'ARLES SUR TECH', 1, 'Antoine.DULLAC@gmail.com', 'CLIENT'),
(116, 'Monsieur', 'DULLAC', 'Karim', '4 allée André Malraux', '14200', 'HEROUVILLE SAINT CLAIR', 1, 'Karim.DULLAC@gmail.com', 'CLIENT'),
(117, 'Monsieur', 'DUMARC', 'Martin', '17 avenue Albert Camus', '92200', 'NEUILLY SUR SEINE', 1, 'Martin.DUMARC@gmail.com', 'CLIENT'),
(118, 'Monsieur', 'DUMMORE', 'Sam', 'Albert road north 7', 'SO303', 'SOUTHAMPTON', 2, 'Sam.DUMMORE@gmail.com', 'CLIENT'),
(119, 'Monsieur', 'LOUMAS', 'Erwann', '5 allée des Tilleuls', '75001', 'PARIS', 1, 'Erwann.LOUMAS@gmail.com', 'CLIENT'),
(120, 'Monsieur', 'DESPRE', 'Stéphane', '87 rue Ernest Renan', '22100', 'LANVALLAY', 1, 'Stéphane.DESPRE@gmail.com', 'CLIENT'),
(121, 'Monsieur', 'COULON', 'Yann', '7 Allée de Bréquigny', '78350', 'JOUY EN JOSAS', 1, 'Yann.COULON@gmail.com', 'CLIENT'),
(122, 'Monsieur', 'LOURET', 'Samuel', '45 rue de lIse', '35150', 'CORPS NUDS', 1, 'Samuel.LOURET@gmail.com', 'CLIENT'),
(123, 'Monsieur', 'GRALIN', 'Emmanuel', '4 rue Rabelais', '72150', 'BRIVES', 1, 'Emmanuel.GRALIN@gmail.com', 'CLIENT'),
(124, 'Monsieur', 'SAGER', 'Aurélien', '4 rue Laénnec', '85100', 'LES SABLES DOLONNE', 1, 'Aurélien.SAGER@gmail.com', 'CLIENT'),
(125, 'Monsieur', 'GRADOLE', 'Aston', 'Little town square 22', 'BD1', 'MARSH', 2, 'Aston.GRADOLE@gmail.com', 'CLIENT'),
(126, 'Monsieur', 'BARRET', 'Gurvan', '8 Square de Londres', '26000', 'VALENCE', 1, 'Gurvan.BARRET@gmail.com', 'CLIENT'),
(127, 'Monsieur', 'PIGEON', 'Bruno', '64 rue Albert Camus', '35510', 'CHATEAUGIRON', 1, 'Bruno.PIGEON@gmail.com', 'CLIENT'),
(128, 'Monsieur', 'GEFFROY', 'Lillian', '2 rue Launay', '11000', 'CARCASSONNE', 1, 'Lillian.GEFFROY@gmail.com', 'CLIENT'),
(129, 'Monsieur', 'JULIEN', 'Lionel', '18 rue des Camélias', '63000', 'CLERMONT FERRAND', 1, 'Lionel.JULIEN@gmail.com', 'CLIENT'),
(130, 'Monsieur', 'FOSTER', 'Michael', 'Tudor Court north 2', 'NW10', 'LONDON', 2, 'Michael.FOSTER@gmail.com', 'CLIENT'),
(131, 'Monsieur', 'LEGORGE', 'Steven', '65 rue des Foss', '35400', 'PARAME', 1, 'Steven.LEGORGE@gmail.com', 'CLIENT'),
(132, 'Monsieur', 'DURAND', 'Christian', 'Villa des Résédas', '35830', 'BETTON', 1, 'Christian.DURAND@gmail.com', 'CLIENT'),
(133, 'Monsieur', 'FERNER', 'Tod', 'North avenue 4', 'PO29', 'PORTSMOUTH', 2, 'Tod.FERNER@gmail.com', 'CLIENT'),
(134, 'Monsieur', 'DEGOUIS', 'Franéois', '11 rue des Peupliers', '75001', 'PARIS', 1, 'Franéois.DEGOUIS@gmail.com', 'CLIENT'),
(135, 'Monsieur', 'SCIONS', 'Pierre', '23 lot des Peupliers', '1200', 'GENEVE', 4, 'Pierre.SCIONS@gmail.com', 'CLIENT'),
(136, 'Monsieur', 'DULONG', 'Florent', '11 rue Paul Bert', '26100', 'ROMANS SUR ISERE', 1, 'Florent.DULONG@gmail.com', 'CLIENT'),
(137, 'Monsieur', 'MESCOUARN', 'Claude', '22 allée de Varsovie', '27400', 'CANAPPEVILLE', 1, 'Claude.MESCOUARN@gmail.com', 'CLIENT'),
(138, 'Monsieur', 'INIZAN', 'Gérald', '19 rue Mozart', '750016', 'PARIS', 1, 'Gérald.INIZAN@gmail.com', 'CLIENT'),
(139, 'Monsieur', 'FALOUIN', 'Herv', '33 allée du Lac Onéga', '03100', 'MONTLUCON', 1, 'Herv.FALOUIN@gmail.com', 'CLIENT'),
(140, 'Monsieur', 'MOBAL', 'Justin', 'All Road south 12', 'SO303', 'SOUTHAMPTON', 2, 'Justin.MOBAL@gmail.com', 'CLIENT'),
(141, 'Madame', 'MONTHUREL', 'Simone', '3 Quai Chateaubriand', '37000', 'TOURS', 1, 'Simone.MONTHUREL@gmail.com', 'CLIENT'),
(142, 'Madame', 'POREL', 'Lucie', '11 rue du Hétre', '85000', 'LA ROCHE SUR YON', 1, 'Lucie.POREL@gmail.com', 'CLIENT'),
(143, 'Mademoiselle', 'NOUE', 'Hermine', '44 rue Saint Denis', '10300', 'SAINTE SAVINE', 1, 'Hermine.NOUE@gmail.com', 'CLIENT'),
(144, 'Mademoiselle', 'CHARLES', 'Joélle', '44 rue Saint Denis', '10200', 'DOLANCOURT', 1, 'Joélle.CHARLES@gmail.com', 'CLIENT'),
(145, 'Mademoiselle', 'BERDIER', 'Maryvonne', '28 rue de vern', '10100', 'CRANCEY', 1, 'Maryvonne.BERDIER@gmail.com', 'CLIENT'),
(146, 'Mademoiselle', 'BADELOIS', 'Sylvie', '8 Square du Douro', '35200', 'RENNES', 1, 'Sylvie.BADELOIS@gmail.com', 'CLIENT'),
(147, 'Mademoiselle', 'ROULLER', 'Jeannette', '6 avenue du Canada', '35200', 'RENNES', 1, 'Jeannette.ROULLER@gmail.com', 'CLIENT'),
(148, 'Mademoiselle', 'MONTVOL', 'Doris', '1 Square du Douro', '35200', 'RENNES', 1, 'Doris.MONTVOL@gmail.com', 'CLIENT'),
(149, 'Mademoiselle', 'VOUCHER', 'Martine', 'Queen Mary Road 43', 'PL11', 'PLYMOUTH', 2, 'Martine.VOUCHER@gmail.com', 'CLIENT'),
(150, 'Mademoiselle', 'MAILLARD', 'Julie', 'La Chesnaie', '06000', 'NICE', 1, 'Julie.MAILLARD@gmail.com', 'CLIENT'),
(151, 'Mademoiselle', 'BANELIER', 'Géraldine', '27 rue Ambroise', '35170', 'BRUZ', 1, 'Géraldine.BANELIER@gmail.com', 'CLIENT'),
(152, 'Mademoiselle', 'BIHAN', 'Juliette', '43 rue Etienne Pinault', '35000', 'RENNES', 1, 'Juliette.BIHAN@gmail.com', 'CLIENT'),
(153, 'Mademoiselle', 'BADELOIS', 'Sylvie', '9 Square du Douro', '35200', 'RENNES', 1, 'Sylvie.BADELOIS@gmail.com', 'CLIENT'),
(154, 'Mademoiselle', 'ROULLER', 'Judith', '7 avenue du Canada', '35200', 'RENNES', 1, 'Judith.ROULLER@gmail.com', 'CLIENT'),
(155, 'Mademoiselle', 'MONTVOL', 'Damiana', '2 Square du Douro', '35200', 'RENNES', 1, 'Damiana.MONTVOL@gmail.com', 'CLIENT'),
(156, 'Mademoiselle', 'VYRSER', 'Julia', 'Queen Street 9', 'OX2', 'TUSMORE', 2, 'Julia.VYRSER@gmail.com', 'CLIENT'),
(157, 'Mademoiselle', 'MAILLARD', 'Julie', 'La Chesnaie', '35235', 'THORIGNE FOUILLARD', 1, 'Julie.MAILLARD@gmail.com', 'CLIENT'),
(158, 'Mademoiselle', 'BANELIER', 'Garance', '28 rue Ambroise', '1200', 'GENEVE', 4, 'Garance.BANELIER@gmail.com', 'CLIENT'),
(160, '', 'ADMIN', 'ADMIN', NULL, NULL, NULL, NULL, 'admin@gmail.com', 'ADMIN');

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Prix` float NOT NULL,
  `Description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `info`
--

INSERT INTO `info` (`ID`, `Nom`, `Prix`, `Description`) VALUES
(1, 'Chambre 1 à 2 personnes', 80, 'Découvrez votre chambre tout confort pour un séjour en toute sécurité !<br />\r\nNous vous proposons différentes chambres pour une ou deux personnes:\r\n<br /><br />\r\n- Chambre double à lit King Size Bed (180 cm)<br />\r\n- Chambre twin à deux Single Bed (90cm)\r\n<br /><br />\r\nToutes nos chambres sont rénovées et climatisées. La salle de bain privative est séparée des WC. Vous trouverez à votre arrivée une bouteille d\'eau et un plateau de courtoisie à votre disposition, coffre fort et mini frigo !\r\n<br /><br />\r\nNous avons des chambres vue, sur le port de plaisance et la piscine, le port arrière ou sur cour.<br />\r\nRéservation d\'une vue selon disponibilité.'),
(2, 'Chambre 3 personnes.', 100, 'Venez découvrir votre chambre familiale pour votre merveilleux séjour !<br /><br />\r\n\r\nChambre entièrement rénovée et climatisée, vous y trouverez tout le confort pour votre famille. La chambre est composée de deux lits : un grand lit en 140cm et un lit en 90 cm.<br />\r\nVous pourrez passer un séjour en famille sur les plages de Montpellier.<br />\r\nToute l\'équipe de l\'Hotel The Originals Montpellier Sud Neptune vous accueille avec sourire et chaleur.'),
(3, 'Chambre 4 personnes.', 90, 'Vous voyagez avec votre famille?<br /> L\'Hotel The Originals Montpellier Sud Neptune vous accueille à deux pas de Montpellier et des grands axes routiers, loin de la circulation et au bord de mer.<br />\r\nBénéficiez de notre tarif exclusif pour nos familles. Celle-ci comprend une chambre avec le wifi gratuit dans tout l\'établissement ainsi que le petit déjeuner buffet à volonté au prix de 68 € ');

-- --------------------------------------------------------

--
-- Structure de la table `infochambre`
--

DROP TABLE IF EXISTS `infochambre`;
CREATE TABLE IF NOT EXISTS `infochambre` (
  `info_id` int NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `titre` varchar(255) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `infochambre`
--

INSERT INTO `infochambre` (`info_id`, `description`, `titre`) VALUES
(1, 'Exposition port <br/>\r\nSans douche <br/>\r\nAu premier étage <br/>\r\nPrix 49€', 'Chambre pour 2 personnes'),
(2, 'Exposition rempart<br/>\r\nSans douche <br/>\r\nAu premier étage <br/>\r\nPrix 68 €\r\n', 'Chambres pour 4 personnes'),
(3, 'Exposition port<br/>\r\nSans douche <br/>\r\nAu premier étage <br/>\r\nPrix 49 €', 'Chambres pour 2 personnes'),
(4, 'Exposition rempart<br/>\r\nAvec douche <br/>\r\nAu troisième étage <br/>\r\nPrix 38 €', 'Chambres pour 2 personnes'),
(5, 'Exposition port <br/>\r\nSans douche <br/>\r\nAu deuxième étage <br/> \r\nPrix 53 €', 'Chambres pour 2 personnes'),
(6, 'Exposition rempart <br/>\r\nSans douche <br/>\r\nAu deuxième étage <br/> \r\nPrix 58 €', 'Chambres pour 3 personnes'),
(7, 'Exposition port<br/>\r\nSans douche <br/>\r\nAu deuxième étage <br/> \r\nPrix 58 €', 'Chambre pour 3 personnes'),
(8, 'Exposition rempart <br/>\r\nAvec douche <br/>\r\nAu deuxième étage <br/> \r\nPrix 53 €', 'Chambre pour 2 personnes'),
(9, 'Exposition port<br/>\r\nSans douche <br/>\r\nAu troisième étage <br/> \r\nPrix 38 €', 'Chambre pour 2 personnes'),
(10, 'Exposition rempart <br/>\r\nSans douche <br/>\r\nAu troisième étage <br/> \r\nPrix 49 €', 'Chambre pour 2 personnes'),
(11, 'Exposition port <br/>\r\nSans douche <br/>\r\nAu troisème étage <br/> \r\nPrix 49 €', 'Chambre pour 2 personnes'),
(12, 'Exposition port <br/>\r\nAvec douche <br/>\r\nAu troisième étage <br/> \r\nPrix 68 €', 'Chambre pour 4 personnes');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`) VALUES
(1, 'France'),
(2, 'Grande-Bretagne'),
(3, 'Belgique'),
(4, 'Suisse');

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

DROP TABLE IF EXISTS `planning`;
CREATE TABLE IF NOT EXISTS `planning` (
  `id_res` int NOT NULL AUTO_INCREMENT,
  `chambre_id` int NOT NULL,
  `jour` datetime NOT NULL,
  `acompte` int NOT NULL DEFAULT '0',
  `paye` int NOT NULL DEFAULT '0',
  `client_id` int NOT NULL,
  PRIMARY KEY (`chambre_id`,`jour`,`client_id`),
  KEY `client_id` (`client_id`),
  KEY `2` (`id_res`)
) ENGINE=InnoDB AUTO_INCREMENT=275 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `planning`
--

INSERT INTO `planning` (`id_res`, `chambre_id`, `jour`, `acompte`, `paye`, `client_id`) VALUES
(1, 1, '2020-10-02 19:30:00', 0, 0, 13),
(2, 1, '2020-10-04 00:00:00', 0, 0, 30),
(3, 1, '2020-10-08 00:00:00', 0, 0, 46),
(4, 1, '2020-10-09 00:00:00', 1, 0, 43),
(5, 1, '2020-10-11 00:00:00', 0, 0, 53),
(6, 1, '2020-10-12 00:00:00', 0, 0, 53),
(7, 1, '2020-10-18 00:00:00', 0, 0, 92),
(8, 1, '2020-10-21 00:00:00', 1, 1, 103),
(9, 1, '2020-10-23 00:00:00', 0, 0, 113),
(10, 1, '2020-10-26 00:00:00', 0, 0, 71),
(11, 1, '2020-10-27 00:00:00', 0, 0, 79),
(12, 1, '2020-10-29 00:00:00', 0, 0, 92),
(13, 1, '2021-03-19 00:00:00', 0, 0, 92),
(14, 1, '2021-03-20 00:00:00', 0, 0, 106),
(15, 1, '2021-04-24 00:00:00', 0, 0, 113),
(16, 1, '2021-04-25 00:00:00', 1, 0, 59),
(17, 1, '2021-04-28 00:00:00', 0, 0, 88),
(18, 1, '2021-06-02 00:00:00', 0, 0, 21),
(19, 1, '2021-07-01 00:00:00', 1, 1, 119),
(20, 1, '2021-07-02 00:00:00', 0, 0, 138),
(21, 1, '2021-07-03 00:00:00', 0, 1, 130),
(22, 1, '2021-07-04 00:00:00', 0, 0, 147),
(23, 1, '2021-07-05 00:00:00', 0, 0, 34),
(24, 1, '2021-07-06 00:00:00', 0, 0, 34),
(25, 1, '2021-07-07 00:00:00', 0, 0, 34),
(26, 1, '2021-07-20 00:00:00', 0, 1, 106),
(27, 1, '2021-07-21 00:00:00', 0, 1, 103),
(29, 1, '2021-08-05 00:00:00', 0, 0, 151),
(30, 1, '2021-08-06 00:00:00', 0, 0, 152),
(31, 1, '2021-08-07 00:00:00', 0, 0, 152),
(272, 1, '2023-07-28 20:15:00', 0, 1, 144),
(271, 2, '0000-00-00 00:00:00', 0, 0, 13),
(32, 2, '2020-10-01 00:00:00', 0, 0, 14),
(33, 2, '2020-10-02 00:00:00', 1, 0, 22),
(34, 2, '2020-10-04 00:00:00', 1, 0, 31),
(35, 2, '2020-10-08 00:00:00', 1, 0, 47),
(36, 2, '2020-10-12 00:00:00', 0, 0, 58),
(37, 2, '2020-10-21 00:00:00', 1, 1, 104),
(38, 2, '2020-10-24 00:00:00', 0, 0, 118),
(39, 2, '2020-10-27 00:00:00', 1, 0, 80),
(40, 2, '2020-10-28 00:00:00', 1, 0, 89),
(41, 2, '2021-07-01 00:00:00', 0, 0, 120),
(42, 2, '2021-07-02 00:00:00', 1, 1, 139),
(43, 2, '2021-07-04 00:00:00', 1, 1, 148),
(44, 2, '2021-07-05 00:00:00', 0, 0, 131),
(45, 2, '2021-07-20 00:00:00', 0, 1, 107),
(46, 2, '2021-07-21 00:00:00', 0, 1, 104),
(48, 2, '2021-08-09 00:00:00', 1, 0, 44),
(49, 2, '2021-08-20 00:00:00', 1, 1, 107),
(50, 2, '2021-08-25 00:00:00', 0, 0, 60),
(51, 2, '2021-08-26 00:00:00', 0, 0, 72),
(47, 2, '2022-10-29 21:18:00', 0, 1, 2),
(54, 3, '0000-00-00 00:00:00', 0, 0, 3),
(52, 3, '2020-10-01 00:00:00', 1, 1, 15),
(53, 3, '2020-10-02 00:00:00', 0, 0, 23),
(55, 3, '2020-10-04 00:00:00', 1, 0, 32),
(56, 3, '2020-10-05 00:00:00', 1, 0, 35),
(57, 3, '2020-10-06 00:00:00', 1, 0, 40),
(58, 3, '2020-10-07 00:00:00', 1, 0, 41),
(59, 3, '2020-10-08 00:00:00', 1, 0, 41),
(60, 3, '2020-10-09 00:00:00', 1, 0, 45),
(61, 3, '2020-10-11 00:00:00', 0, 0, 54),
(62, 3, '2020-10-12 00:00:00', 0, 0, 54),
(63, 3, '2020-10-18 00:00:00', 1, 0, 99),
(64, 3, '2020-10-20 00:00:00', 1, 1, 100),
(65, 3, '2020-10-21 00:00:00', 1, 1, 105),
(66, 3, '2020-10-24 00:00:00', 0, 0, 114),
(67, 3, '2020-10-25 00:00:00', 1, 0, 61),
(68, 3, '2020-10-29 00:00:00', 1, 0, 93),
(69, 3, '2021-07-02 00:00:00', 0, 0, 140),
(70, 3, '2021-07-03 00:00:00', 1, 1, 132),
(71, 3, '2021-07-18 00:00:00', 1, 0, 99),
(72, 3, '2021-07-19 00:00:00', 0, 1, 100),
(73, 3, '2021-07-20 00:00:00', 0, 1, 100),
(74, 3, '2021-07-21 00:00:00', 0, 1, 105),
(75, 3, '2021-07-27 00:00:00', 0, 0, 81),
(76, 3, '2021-07-29 00:00:00', 0, 1, 93),
(77, 3, '2021-08-01 00:00:00', 1, 1, 121),
(78, 3, '2021-08-04 00:00:00', 1, 1, 149),
(79, 3, '2021-08-05 00:00:00', 1, 1, 153),
(80, 3, '2021-08-06 00:00:00', 1, 1, 158),
(81, 3, '2021-08-19 00:00:00', 1, 1, 100),
(82, 3, '2021-08-23 00:00:00', 0, 0, 114),
(83, 3, '2021-08-26 00:00:00', 1, 0, 73),
(84, 3, '2021-08-28 00:00:00', 1, 0, 90),
(85, 4, '2020-10-01 00:00:00', 0, 0, 4),
(86, 4, '2020-10-02 00:00:00', 0, 0, 4),
(87, 4, '2020-10-07 00:00:00', 1, 0, 43),
(88, 4, '2020-10-08 00:00:00', 0, 0, 48),
(89, 4, '2020-10-11 00:00:00', 0, 0, 55),
(90, 4, '2020-10-12 00:00:00', 0, 0, 55),
(91, 4, '2020-10-19 00:00:00', 1, 1, 102),
(92, 4, '2020-10-20 00:00:00', 0, 0, 108),
(93, 4, '2020-10-27 00:00:00', 0, 0, 62),
(94, 4, '2020-10-28 00:00:00', 0, 0, 74),
(95, 4, '2020-10-29 00:00:00', 1, 0, 94),
(96, 4, '2021-03-09 00:00:00', 1, 0, 46),
(97, 4, '2021-04-21 00:00:00', 1, 1, 106),
(98, 4, '2021-04-23 00:00:00', 0, 0, 115),
(99, 4, '2021-04-24 00:00:00', 0, 0, 115),
(100, 4, '2021-04-25 00:00:00', 0, 0, 62),
(101, 4, '2021-04-26 00:00:00', 0, 0, 62),
(102, 4, '2021-07-01 00:00:00', 0, 0, 122),
(103, 4, '2021-07-03 00:00:00', 0, 0, 122),
(104, 4, '2021-07-05 00:00:00', 1, 1, 154),
(105, 4, '2021-07-15 00:00:00', 1, 0, 36),
(106, 4, '2021-07-20 00:00:00', 0, 1, 108),
(107, 4, '2021-08-02 00:00:00', 0, 0, 122),
(108, 4, '2021-08-03 00:00:00', 0, 0, 4),
(109, 4, '2021-08-19 00:00:00', 0, 1, 102),
(110, 4, '2021-08-21 00:00:00', 0, 1, 106),
(111, 4, '2021-08-29 00:00:00', 0, 1, 94),
(112, 5, '2020-10-01 00:00:00', 0, 0, 16),
(113, 5, '2020-10-02 00:00:00', 0, 0, 16),
(114, 5, '2020-10-03 00:00:00', 0, 0, 16),
(115, 5, '2020-10-04 00:00:00', 0, 0, 16),
(116, 5, '2020-10-05 00:00:00', 0, 0, 37),
(117, 5, '2020-10-06 00:00:00', 0, 0, 37),
(118, 5, '2020-10-07 00:00:00', 1, 0, 44),
(119, 5, '2020-10-08 00:00:00', 1, 0, 49),
(120, 5, '2020-10-09 00:00:00', 1, 0, 47),
(121, 5, '2020-10-10 00:00:00', 1, 0, 5),
(122, 5, '2020-10-11 00:00:00', 0, 0, 56),
(123, 5, '2020-10-18 00:00:00', 0, 0, 96),
(124, 5, '2020-10-19 00:00:00', 1, 1, 104),
(125, 5, '2020-10-20 00:00:00', 1, 1, 109),
(126, 5, '2020-10-21 00:00:00', 1, 1, 107),
(127, 5, '2020-10-23 00:00:00', 0, 0, 116),
(128, 5, '2020-10-25 00:00:00', 1, 0, 63),
(129, 5, '2020-10-26 00:00:00', 0, 0, 74),
(130, 5, '2020-10-27 00:00:00', 0, 0, 74),
(131, 5, '2020-10-28 00:00:00', 0, 0, 74),
(132, 5, '2020-10-29 00:00:00', 0, 0, 95),
(133, 5, '2021-04-03 00:00:00', 0, 0, 133),
(134, 5, '2021-04-05 00:00:00', 0, 0, 155),
(135, 5, '2021-04-18 00:00:00', 0, 0, 96),
(136, 5, '2021-04-19 00:00:00', 0, 1, 104),
(137, 5, '2021-04-20 00:00:00', 0, 1, 109),
(138, 5, '2021-04-29 00:00:00', 0, 1, 95),
(139, 5, '2021-07-01 00:00:00', 1, 1, 123),
(140, 5, '2021-07-02 00:00:00', 0, 0, 133),
(141, 5, '2021-08-04 00:00:00', 0, 0, 133),
(142, 5, '2021-08-06 00:00:00', 0, 0, 155),
(143, 5, '2021-08-07 00:00:00', 0, 0, 133),
(144, 5, '2021-08-21 00:00:00', 0, 1, 107),
(145, 6, '2020-10-01 00:00:00', 1, 0, 6),
(146, 6, '2020-10-02 00:00:00', 1, 0, 24),
(147, 6, '2020-10-08 00:00:00', 0, 0, 50),
(148, 6, '2020-10-09 00:00:00', 1, 0, 48),
(149, 6, '2020-10-20 00:00:00', 0, 0, 110),
(150, 6, '2020-10-21 00:00:00', 1, 1, 18),
(151, 6, '2020-10-25 00:00:00', 1, 0, 64),
(152, 6, '2020-10-27 00:00:00', 1, 0, 82),
(153, 6, '2021-04-01 00:00:00', 1, 1, 124),
(28, 6, '2021-04-08 19:10:00', 1, 1, 1),
(154, 6, '2021-04-20 00:00:00', 0, 1, 110),
(155, 6, '2021-04-21 00:00:00', 0, 1, 135),
(156, 6, '2021-08-02 00:00:00', 1, 1, 141),
(157, 7, '2020-10-01 00:00:00', 1, 1, 18),
(158, 7, '2020-10-02 00:00:00', 1, 1, 18),
(159, 7, '2020-10-03 00:00:00', 0, 0, 7),
(160, 7, '2020-10-07 00:00:00', 1, 0, 45),
(161, 7, '2020-10-08 00:00:00', 1, 0, 51),
(162, 7, '2020-10-09 00:00:00', 1, 0, 49),
(163, 7, '2020-10-19 00:00:00', 1, 1, 105),
(164, 7, '2020-10-20 00:00:00', 1, 1, 111),
(165, 7, '2020-10-21 00:00:00', 1, 1, 109),
(166, 7, '2020-10-25 00:00:00', 0, 0, 65),
(167, 7, '2020-10-26 00:00:00', 1, 0, 76),
(168, 7, '2020-10-27 00:00:00', 1, 0, 76),
(169, 7, '2021-04-02 00:00:00', 1, 1, 135),
(170, 7, '2021-04-19 00:00:00', 0, 1, 105),
(171, 7, '2021-04-21 00:00:00', 0, 1, 109),
(172, 7, '2021-08-01 00:00:00', 0, 0, 125),
(173, 7, '2021-08-03 00:00:00', 1, 1, 135),
(174, 7, '2021-08-20 00:00:00', 0, 1, 111),
(175, 8, '2020-10-01 00:00:00', 0, 0, 19),
(176, 8, '2020-10-02 00:00:00', 1, 0, 25),
(177, 8, '2020-10-03 00:00:00', 0, 0, 8),
(178, 8, '2020-10-04 00:00:00', 1, 1, 17),
(179, 8, '2020-10-05 00:00:00', 0, 0, 39),
(180, 8, '2020-10-06 00:00:00', 0, 0, 39),
(181, 8, '2020-10-07 00:00:00', 0, 0, 39),
(182, 8, '2020-10-08 00:00:00', 0, 0, 52),
(183, 8, '2020-10-09 00:00:00', 1, 0, 50),
(184, 8, '2020-10-11 00:00:00', 0, 0, 57),
(185, 8, '2020-10-18 00:00:00', 0, 0, 98),
(186, 8, '2020-10-19 00:00:00', 0, 0, 98),
(187, 8, '2020-10-20 00:00:00', 0, 0, 112),
(188, 8, '2020-10-21 00:00:00', 1, 1, 110),
(189, 8, '2020-10-23 00:00:00', 0, 0, 117),
(190, 8, '2020-10-25 00:00:00', 0, 0, 66),
(191, 8, '2020-10-26 00:00:00', 0, 0, 77),
(192, 8, '2020-10-27 00:00:00', 1, 0, 83),
(193, 8, '2020-10-28 00:00:00', 1, 0, 75),
(194, 8, '2020-10-29 00:00:00', 0, 0, 98),
(195, 8, '2021-04-02 00:00:00', 1, 1, 142),
(196, 8, '2021-04-04 00:00:00', 1, 1, 134),
(197, 8, '2021-04-05 00:00:00', 0, 0, 157),
(198, 8, '2021-04-07 00:00:00', 0, 0, 157),
(199, 8, '2021-04-19 00:00:00', 0, 1, 98),
(200, 8, '2021-04-21 00:00:00', 0, 1, 110),
(201, 8, '2021-08-01 00:00:00', 0, 0, 126),
(202, 8, '2021-08-03 00:00:00', 0, 0, 136),
(203, 8, '2021-08-06 00:00:00', 0, 0, 157),
(204, 8, '2021-08-18 00:00:00', 0, 0, 98),
(205, 8, '2021-08-29 00:00:00', 0, 1, 98),
(206, 9, '2020-10-01 00:00:00', 1, 1, 19),
(207, 9, '2020-10-02 00:00:00', 0, 0, 26),
(208, 9, '2020-10-04 00:00:00', 0, 0, 33),
(209, 9, '2020-10-05 00:00:00', 1, 0, 38),
(210, 9, '2020-10-06 00:00:00', 1, 0, 38),
(211, 9, '2020-10-08 00:00:00', 1, 0, 53),
(212, 9, '2020-10-09 00:00:00', 1, 0, 51),
(213, 9, '2020-10-18 00:00:00', 1, 0, 97),
(214, 9, '2020-10-20 00:00:00', 1, 1, 113),
(215, 9, '2020-10-21 00:00:00', 1, 1, 111),
(216, 9, '2020-10-25 00:00:00', 1, 0, 67),
(217, 9, '2020-10-26 00:00:00', 1, 0, 77),
(218, 9, '2020-10-27 00:00:00', 0, 0, 84),
(219, 9, '2020-10-28 00:00:00', 0, 0, 91),
(220, 9, '2020-10-29 00:00:00', 1, 0, 97),
(221, 9, '2021-04-01 00:00:00', 1, 1, 127),
(222, 9, '2021-04-06 00:00:00', 1, 1, 156),
(223, 9, '2021-08-02 00:00:00', 0, 0, 143),
(224, 9, '2021-08-03 00:00:00', 1, 1, 136),
(225, 9, '2021-08-04 00:00:00', 0, 0, 150),
(226, 9, '2021-08-05 00:00:00', 1, 1, 156),
(227, 9, '2021-08-18 00:00:00', 1, 0, 97),
(228, 9, '2021-08-21 00:00:00', 0, 1, 111),
(229, 9, '2021-08-29 00:00:00', 1, 0, 97),
(230, 10, '2020-10-01 00:00:00', 0, 0, 10),
(231, 10, '2020-10-02 00:00:00', 1, 0, 27),
(232, 10, '2020-10-03 00:00:00', 0, 0, 10),
(233, 10, '2020-10-08 00:00:00', 0, 0, 54),
(234, 10, '2020-10-09 00:00:00', 1, 0, 52),
(235, 10, '2020-10-21 00:00:00', 1, 1, 112),
(236, 10, '2020-10-26 00:00:00', 0, 0, 68),
(237, 10, '2020-10-27 00:00:00', 1, 0, 85),
(238, 10, '2021-07-01 00:00:00', 0, 0, 128),
(239, 10, '2021-07-02 00:00:00', 1, 1, 144),
(240, 10, '2021-07-03 00:00:00', 0, 0, 128),
(241, 10, '2021-07-21 00:00:00', 0, 1, 112),
(242, 10, '2021-08-20 00:00:00', 0, 0, 114),
(243, 10, '2021-08-25 00:00:00', 0, 0, 68),
(244, 11, '2020-10-01 00:00:00', 0, 0, 20),
(245, 11, '2020-10-02 00:00:00', 0, 0, 28),
(246, 11, '2020-10-08 00:00:00', 1, 0, 55),
(247, 11, '2020-10-25 00:00:00', 1, 0, 69),
(248, 11, '2020-10-26 00:00:00', 0, 0, 78),
(249, 11, '2020-10-27 00:00:00', 0, 0, 86),
(250, 11, '2021-07-01 00:00:00', 1, 1, 129),
(251, 11, '2021-07-02 00:00:00', 0, 0, 145),
(252, 11, '2021-07-03 00:00:00', 1, 1, 11),
(253, 11, '2021-07-04 00:00:00', 0, 0, 137),
(254, 11, '2021-07-20 00:00:00', 1, 1, 115),
(255, 12, '2020-10-01 00:00:00', 1, 1, 12),
(256, 12, '2020-10-02 00:00:00', 1, 0, 29),
(257, 12, '2020-10-09 00:00:00', 0, 0, 42),
(258, 12, '2020-10-10 00:00:00', 0, 0, 42),
(259, 12, '2020-10-21 00:00:00', 0, 0, 101),
(260, 12, '2020-10-25 00:00:00', 0, 0, 70),
(261, 12, '2020-10-27 00:00:00', 1, 0, 87),
(262, 12, '2021-07-01 00:00:00', 1, 1, 129),
(263, 12, '2021-07-02 00:00:00', 1, 1, 146),
(264, 12, '2021-07-08 00:00:00', 0, 0, 42),
(265, 12, '2021-07-20 00:00:00', 0, 1, 101),
(266, 12, '2021-07-21 00:00:00', 0, 1, 101),
(267, 12, '2021-07-22 00:00:00', 0, 0, 101),
(268, 12, '2021-07-25 00:00:00', 0, 1, 101),
(269, 12, '2021-07-27 00:00:00', 0, 0, 101);

-- --------------------------------------------------------

--
-- Structure de la table `tarifs`
--

DROP TABLE IF EXISTS `tarifs`;
CREATE TABLE IF NOT EXISTS `tarifs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `prix` double NOT NULL,
  `libelle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tarifs`
--

INSERT INTO `tarifs` (`id`, `prix`, `libelle`) VALUES
(1, 38, NULL),
(2, 49, NULL),
(3, 53, NULL),
(4, 58, NULL),
(5, 68, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD CONSTRAINT `chambres_ibfk_1` FOREIGN KEY (`tarif_id`) REFERENCES `tarifs` (`id`);

--
-- Contraintes pour la table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`pays_id`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `planning`
--
ALTER TABLE `planning`
  ADD CONSTRAINT `planning_ibfk_1` FOREIGN KEY (`chambre_id`) REFERENCES `chambres` (`id_cham`),
  ADD CONSTRAINT `planning_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
