-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 18 oct. 2023 à 16:18
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rpni3_lapasteque`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualites`
--

CREATE TABLE `actualites` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(100) NOT NULL,
  `l_actualite` varchar(2000) DEFAULT NULL,
  `date` date NOT NULL,
  `lien_facebook` varchar(100) NOT NULL,
  `lien_instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `actualites`
--

INSERT INTO `actualites` (`id`, `titre`, `l_actualite`, `date`, `lien_facebook`, `lien_instagram`) VALUES
(1, 'Paul à la maison dans le Sélection officielle d\'Angoulême!', 'Paul à la maison se retrouve dans la Sélection officielle du prochain Festival d\'Angoulême! Bravo Michel!\r\n', '2023-12-09', 'www.facebook.com', 'www.instagram.com'),
(2, 'Jacques Goldstyn remporte le TD!', 'Jacques Goldstyn remporte le Prix TD de littérature canadienne pour l’enfance et la jeunesse 2020 pour son livre Les étoiles!Depuis 2004, le Centre du livre jeunesse canadien (The Canadian Children’s Book Centre) et le Groupe Banque TD ont mis sur pied le Prix TD de littérature canadienne pour l’enfance et la jeunesse, pour le livre le plus remarquable de l’année. L’œuvre doit se démarquer par sa contribution générale à la littérature et l’excellence de son apport aux jeunes lecteurs. \r\nFélicitations Jacques!', '2023-11-16', 'www.facebook.com', 'www.instagram.com'),
(3, 'Trois nouveautés', 'Nos trois derniers livres de l\'année arrivent sur les tablettes de votre libraire préféré! Dès demain, le 12 novembre, retrouvez Bouées, Le tricot et Folk épisode 2.\r\nBonne lecture!', '2023-12-18', 'www.facebook.com', 'www.instagram.com'),
(4, 'Réouverture de la boutique et deux promotions!', 'La boutique de la rue Laurier va rouvrir ses portes avec un horaire réduit pour le temps des Fêtes. Vous pourrez venir nous visiter en personne le jeudi de 10h à 17h, le vendredi de 12h à 19h, le samedi et le dimanche de 10h à 17h.\r\nPour faciliter vos achats en ligne et pour pallier à l’absence du Salon du livre cette année, La Pastèque vous offre des livres dédicacés par vos auteurs préférés, exclusivement sur notre site internet. Dès le 16 novembre prochain, surveillez notre page boutique!\r\nAussi, dès le 12 novembre prochain, recevez gratuitement une carte de Noël exclusive de Jacques Goldstyn à chaque achat effectué sur notre site internet.', '2023-10-04', 'www.facebook.com', 'www.instagram.com'),
(5, 'La grande métamorphose de Théo sélectionné à Angoulême!', 'La grande métamorphose de Théo de Geoffrey Delinte et Marzena Sowa est sélectionné pour le Prix des écoles 2021!  Félicitations à nos auteurs!\nLe Prix des Écoles - Ville d\'Angoulême récompense un album élu par les enfants de quatre écoles d’Angoulême au sein d’une liste de cinq albums présélectionnés, choisis pour leur potentiel éducatif et leurs contenus pédagogiques.', '2023-04-11', 'www.facebook.com', 'www.facebook.com'),
(6, 'Astrid Lindgren memorial Award', 'Jacques Goldstyn et Isabelle Arsenault sont finalistes au prestigieux prix Astrid Lindgren Memorial Award!\nEn 2021, 263 candidats de 69 pays sont en lice pour ce prix. La liste comprend certains des plus grands créateurs de littérature pour enfants au monde, ainsi que des promoteurs de lecture. \nIl s\'agit du plus prestigieux prix pour la littérature jeunesse. Il est décerné chaque année à un lauréat ou à plusieurs. Une bourse de 750 000 dollars est également remise. \nLe nouveau lauréat sera annoncé le 13 avril 2021.  Félicitations à Jacques et Isabelle! ', '2023-10-21', 'www.facebook.com', 'www.instagram.com'),
(7, 'Calfboy nominé à Montreuil!', 'Calfboy tome 2 de Rémi Farnos a été sélectionné pour les Pépites 2020 dans la catégorie bande dessinée! Rendez-vous le 2 décembre pour connaître les lauréats ! Félicitations Rémi!', '2023-10-19', 'www.facebook.com', 'www.instagram.com'),
(8, 'Bix en librairie!', 'Bix de Scott Chantler est arrivé chez votre libraire préféré!  Ne manquez pas ce merveilleux titre sous aucun prétexte, un véritable tour de force, une merveille narrative!', '2023-08-10', 'www.facebook.com', 'www.instagram.com'),
(9, 'Jacques Goldstyn, fin tricoteur d’histoire', 'La petite Madeleine se fait offrir un foulard tricoté par sa grand-mère à partir de restants de laines ayant servi à habiller les membres de sa famille. Voir l\'article du journal Le Devoir.', '2023-11-24', 'www.facebook.com', 'www.instagram.com'),
(10, 'Pour tous les goûts!', 'Retrouvez dès demain trois superbes nouveautés chez votre libraire préféré! \r\nC\'est le grand retour de Fanny Britt et Isabelle Arsenault avec Truffe!\r\nAprès des années d\'attente, nous publions enfin le dernier tome de l\'intégrale Michel Risque \r\nEt découvrez un extraordinaire album jeunesse qui compare la beauté et la majesté des êtres humains à celle des arbres, tout en partageant délicatement les façons dont on pourrait s’en inspirer pour être de meilleures personnes.', '2024-08-09', 'www.facebook.com', 'www.instagram.com'),
(11, 'De retour de vacances et autres nouvelles', 'La Pastèque est de retour de vacances et tout le monde est prêt pour l\'automne! \r\nDécouvrez deux nouveautés en ce mois d\'août: Monstres sacrés - voyage au coeur des volcans de Julie Roberge et Aless MC et La fille à moto d\'Amy Novesky et Julie Morstad.\r\nTruffe d\'Isabelle Arsenault et Fanny Britt et Michel Risque L\'intégrale volume 2 ont du être reportés en septembre en raison des incendies de forêts en Colombie-britannique qui ont entraînés des retards sur le traffic ferroviaire.\r\nBonne lecture!\r\n', '2024-07-08', 'www.facebook.com', 'www.instagram.com'),
(12, 'L\'incroyable Andy Kaufman en librairie!', 'Retrouvez L\'incroyable Andy Kaufman de Box Brown chez votre libraire préféré dès aujourd\'hui!', '2024-05-20', 'www.facebooke.com', 'www.instagram.com'),
(13, 'Deux nouveautés!', 'Retrouvez chez votre libraire préféré nos deux nouvelles parutions pour le mois de mai: À qui appartiennent les nuages? de Mario Brassard et Gérard DuBois et Comment on construit un pont? de Roman Beliaev!\r\n', '2024-05-20', 'www.facebook.com', 'www.instagram.com'),
(14, 'Le Prix BD des collégiens 2020-2021 est décerné à Michel Rabagliati pour Paul à la maison!', 'Pour cette quatrième édition, les étudiants des quatorze cégeps participant ont choisi de décerner le Prix BD des collégiens 2020-2021, à l\'auteur Michel Rabagliati, pour son œuvre Paul à la maison.\r\nDû à la pandémie, la remise de prix qui devait se tenir au Collège au mois de mai, n’a pu avoir lieu. Toutefois une vidéo a été réalisée afin de remplacer l\'événement. Vous pouvez la visionner en cliquant sur le lien suivant : https://www.youtube.com/watch?v=YrSXy6vaDt0\r\nFélicitations Michel!', '2024-05-05', 'www.facebook.com', 'www.instagram.com'),
(15, 'Le petit astronaute enfin en librairie!', 'Le petit astronaute de Jean-Paul Eid arrive enfin en librairie! Précipitez-vous chez votre libraire préféré pour acquérir ce titre incontournable de l\'année 2021. Attention, chef-d\'oeuvre!', '2024-04-15', 'www.facebook.com', 'www.instagram.com');

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

CREATE TABLE `auteurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `notice` varchar(1500) DEFAULT NULL,
  `site_web` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`id`, `nom`, `prenom`, `notice`, `site_web`) VALUES
(1, 'Adam', 'Benjamin', '<p>Benjamin Adam est un illustrateur français né en 1983. Il a été publié par le biais de divers collectifs et revues de bandes dessinées et a notamment réalisé 12 rue des Ablettes, paru chez Warum en 2007. En 2012, son livre Ulysse, a été nominé dans la sélection jeunesse à Angoulême. En 2013, il a fait paraître le remarquable Lartigues et Prévert à La Pastèque. Depuis il collabore régulièrement avec La Revue Dessinée. L’auteur vit actuellement à Nantes.</p>', 'http://cargocollective.com/benjamin-adam'),
(2, 'Ayrolles', 'François', '<p>François Ayroles, né à Paris en 1969, est un auteur de bande dessinée. Il étudie trois ans à l\'École européenne supérieure de l\'image, à Angoulême. Il commence ensuite à publier dans la revue de bande dessinée des éditions Autrement et dans la revue Lapin édité par L’Association. Il est un membre actif de l’Oubapo. Il est une figure incontournable de la bande dessinée française.</p>', ''),
(3, 'André', 'Nicolas', '<p>Nicolas André est né à Reims en 1989, et après être passé par Bruxelles et Strasbourg, il vit dorénavant à Paris. Il s\'intéresse à l\'illustration, la bande-dessinée, les livres animés, le graphisme ou encore la sérigraphie. Il fait régulièrement des images pour la presse et l\'édition et participe à des expositions et des festival, et concerts dessinés.\r</p><p>\r</p><p>Aprés Beyond the surface, un leporello jeunesse sur l\'alpinisme et la spéléologie aux Editions Nobrow en 2014, Nicolas publie Le Voyage à Rheims avec Frédéric Chef, un livre de peinture et texte, chez Le Pythagore en 2015. Ivanhoé Backus est son premie livre à La Pastèque.</p>', 'https://nicolas-andre.com/'),
(4, 'Baillairgé', 'Mélanie', '<p>Mélanie Baillairgé  est née en 1974. Après des études en design graphique à l’UQAM, elle débute sa carrière en tant qu’illustratrice. Sa carrière prend un virage en 2006 alors qu’elle entre dans une période consacrée au design graphique et à la publicité. Elle travaillera pour les comptes de plusieurs agences de pub et diverses boites de design.  Elle vit et travaille à Montréal</p>', 'http://www.melaniebaillairge.com/'),
(5, 'Farah', 'Alain', '<p>Alain Farah est né à Montréal en 1979. Il publie en 2004 au Quartanier un livre de poésie, Quelque chose se détache du port (Finaliste Prix Émile-Nelligan). Pendant des études doctorales à l’École Normale Supérieure (Lyon), il publie Matamore no 29 (Le Quartanier) premier roman remarqué qui sera publié deux ans plus tard à Paris (Léo Scheer) et se méritera des critiques élogieuses dans Le Monde et Libération. En 2013, Farah fait paraître deux livres : un essai, Le gala des incomparables (Classiques Garnier) de même que Pourquoi Bologne (Le Quartanier). Depuis 2011, il a réalisé plus de 75 chroniques à l’émission littéraire Plus on est de fous, plus on lit ! à Radio-Canada. Professeur agrégé à l’Université McGill, Alain Farah enseigne la littérature contemporaine et la création. </p>', 'https://www.mcgill.ca/litterature/fr/administration/professeurs/alain-farah'),
(6, 'Berton ', 'Matteo', '<p>Matteo Berton est un illustrateur originaire de Pise. Il crée des illustrations pour des magazines et la publicité aussi bien que pour des livres pour enfants. Il vit à Bologne. Son travail à été récompensé par la Society of Illustrators de New York et sectionné par la Foire du livre jeunesse de Bologne. Voyage au centre de la Terre est sa première bande dessinée.</p>', 'https://matteoberton.com/'),
(7, 'Bordeleau', 'Paul', '<p>Originaire de Grande-Rivière, en Gaspésie, Paul Bordeleau vit et travaille à Québec. Illustrateur pigiste depuis 1988, il obtient un baccalauréat en communication graphique (concentration illustration) en 1991. Dès lors, il réalise des mandats pour divers clients du Québec, du Canada, de l\'Europe et des États-Unis. Il a publié la série Faüne à La Pastèque.</p>', 'http://www.paulbordeleau.com/'),
(8, 'Boum', '', '<p>Boum alias Samantha Leriche-Gionet, est une bédéiste et illustratrice pigiste vivant et travaillant à Montréal.</p><p>Elle aime s’entourer de lapins, le vin, les jours enneigés, le fromage, les vieux jeux vidéo, et avoir des drôles de coupes de cheveux.</p>', 'http://bd.boumerie.com/'),
(9, 'Brown', 'Box', '<p>Box Brown, un Américain établi à Philadelphie, est à la fois illustrateur et fondateur de Retrofit, une maison d’édition indépendante qui se consacre à la BD.</p><p>Sa bande dessinée Andre the Giant: Life and Legend, parue aux États-Unis en 2014, a figuré plus de trois semaines sur la liste des best-sellers du New York Times. En 2011, l’album Everything Dies lui a valu un prix Ignatz, catégorie meilleure série.</p>', 'https://www.boxbrown.com/'),
(10, 'Brown', 'Chester', '<p>Chester Brown est né en 1960 à Montréal. Il grandit dans la ville de Châteauguay. En 1983, il publie ses travaux à travers sa propre revue Yummy Fur. Dans ces pages, Brown publie entre autre, Ed The Happy Clown, une série grotesque et burlesque. En 1991, Yummy Fur passe chez l\'éditeur Drawn & Quarterly.  En 1992 paraît The Playboy et en 1994, I Never Liked You. En 2003, Brown propose Louis Riel, une oeuvre biographique et historique exceptionnelle.</p><p>Chester Brown est aujourd’hui considéré comme l’un des plus brillants représentants de la bande dessinée canadienne.</p>', ''),
(11, 'Bourdillon', 'Rémy', '<p>Journaliste indépendant, Rémy Bourdillon collabore entre autres à L’actualité, à La Gazette des femmes, à Rue89 et Nouveau Projet. Sa rigueur lui a valu de nombreuses récompenses, notamment le Grand Prix LOJIQ en 2017.</p>', 'https://remybourdillon.wordpress.com/'),
(12, 'Cézard', 'Pierre-Yves', '<p>Pierre-Yves Cezard est illustrateur indépendant et travaille dans les domaines de la bande dessinée, de l’illustration jeunesse et de la communication.</p>', 'https://pieriv.ultra-book.com/'),
(13, 'Chantler', 'Scott', '<p>Scott Chantler est un illustrateur canadien renommé, auteur de romans graphiques plusieurs fois mis en candidature pour divers prix dont les Eisner, Harvey, Russ Manning, Joe Shuster et Doug Wright Awards.</p><p>Il a signé Northwest Passage et illustré de nombreux autres romans graphiques, dont Days Like This, Scandalous et Stephen Colbert’s Tek Jansen. Deux généraux est son premier livre à La Pastèque.</p>', 'https://www.scottchantler.com/'),
(14, 'Cloutier', 'Claude', '<p>Claude Cloutier fait un passage remarqué dans la bande dessinée dans les années 1980.  Sa collaboration avec le magazine Croc le rendra célèbre auprès de sa cousine Mimi, notamment pour sa bande dessinée La légende des Jean-Guy.  Réalisateur de courts métrages d’animation, Claude Cloutier entre à l’ONF en 1986. Il reçu plusieurs prix internationaux pour ses films.</p>', ''),
(15, 'Collectif', '', '', ''),
(16, 'Colpron\n', 'Pascal', '<p>Pascal Colpron est âgé dans la quarantaine, il est marié et père de deux adorables petites filles. Il dessine depuis  sa tendre enfance. Il rêve aussi de conquérir le monde pour se venger de Nancy B., celle qui n’a pas voulu sortir avec lui en sixième année comme de tous ceux qui ont ri de lui durant les années ingrates de l’adolescence. Toi! Toi! Toi!  Dans les mines de sel!  Mouhouhahahaha !</p>', 'https://monpetitnombril.wordpress.com/'),
(17, 'Doisneau', 'Cyril', '<p>Cyril Doisneau est né à Nantes en 1978. Après des études de dessinateur et de maquettiste, il fréquente l’École des beaux-arts d\'Angoulême où il obtient en 2002 son diplôme, en même temps que le prix jeune talent au Festival international de la bande dessinée d\'Angoulême. Il vit et travaille à Montréal.</p>', 'http://cyrildoisneau.com/'),
(18, 'Eid', 'Jean-Paul', '<p>De 1985 à 1995, Jean-Paul Eid se joint à l\'équipe du magazine humoristique Croc où il publie les aventures de Jérôme Bigras.  Pages à lire par transparence, scénarios interactifs, pages miroir, Eid s\'amuse à déconstruire le langage même de la BD comme dans l’album Le fond du trou (Grand prix de la Ville de Québec et Prix spécial du jury Bédélys 2012), un livre perforé dont le trou permet aux personnages de traverser physiquement l\'histoire comme on voyage dans le temps.</p><p>Parallèlement, il publie, en 1999, avec le dramaturge Claude Paiement, le dyptique de science-fiction Le Naufragé de Memoria récipiendaire de plusieurs prix.</p><p>Ses illustrations se retrouvent aujourd’hui dans des magazines, des livres pour enfants ainsi que dans plusieurs museums canadiens.</p>', ''),
(19, 'Paiement', 'Claude', '<p>Auteur et metteur en scène, Claude Paiement a d’abord été formé en interprétation par l’option théâtre du collège Lionel­-Groulx en 1987. En 1990, il fonde avec le comédien Sylvain Marcel le Théâtre Harpagon, une compagnie essentiellement vouée à la création. À l’étranger, son théâtre a fait l’objet de productions en France, en Suisse et en Roumanie. Parallèlement à sa carrière de dramaturge, Claude Paiement s’intéresse à la bande dessinée et scénarise en 1999 avec Jean-­Paul Eid Le naufragé de Memoria, série pour laquelle ils remportent plusieurs prix importants.</p>', ''),
(20, 'Farnos', 'Rémi', '<p>Rémi Farnos est né à Béziers en 1987. En 2008, il intègre l’école des beaux-arts d’Angoulême (EESI). En 2013, il obtient son DNSEP (Diplôme National Supérieur d’Expression Plastique), puis il part s’installer à Nantes où, il vit et travaille encore. En 2014, il obtient la mention « Jeune Talent » du Festival International de la bande dessinée d’Angoulême. La même année, les éditions Polystyrène publient son premier livre, Thomas & Manon, scénarisé par Alex Chauvel. En 2015, il publie Alcibiade à La Joie De Lire (sélectionné au Salon du Livre et de la Presse Jeunesse de Montreuil ainsi qu’au FIBD d’Angoulême ; Lauréat du prix Versele 2018).</p>', ''),
(21, 'Girard', 'Pascal', '<p>Pascal Girard est né à Jonquière en 1981. Dès sa première journée sur les bancs d’école, il commence à remplir de dessins les marges de ses cahiers et agendas. Comme il n’a jamais pu se débarrasser de cette bonne habitude, il a naturellement décidé d’en faire son métier. En 2004, il termine son Baccalauréat interdisciplinaire en arts à l’Université du Québec à Chicoutimi. Depuis, il mène conjointement une carrière d’illustrateur et d’auteur de bandes dessinée.  Ses deux premiers livres Dans un cruchon et Nicolas, se sont partagés le prix Réal-Fillion au Festival de la bande dessinée francophone de Québec en 2006.</p>', 'https://monsieurpascalgirard.tumblr.com/'),
(22, 'Pelletier', 'Yves', '<p>Yves Pelletier est un réalisateur, acteur et humoriste québécois, né à  Laval au Québec en 1961. Il a fait partie du groupe d\'humour Rock et Belles Oreilles de 1981 à 1995.</p><p>Il est le réalisateur et le scénariste du film Les Aimants. Son dernier film Le baiser du barbu est sorti en juin 2010.</p>', ''),
(23, 'Godbout', 'Réal', '<p>Dessinateur et coscénariste des séries Michel Risque et Red Ketchup, Réal Godbout est né à Montréal en 1951. Atteint dès l’enfance par le virus de la bande dessinée, il commence à dessiner en 1969 après quelques trimestres d’études sans conséquences. </p><p>C’est au cours des années 1970 que Réal Godbout deviendra l’un des chefs de file de la renaissance de la bande dessinée québécoise, cette période d’effervescence que l’on a souvent appelée « le printemps de la BDQ ». Réal Godbout travaille également comme illustrateur et a produit une série de bandes dessinées pour le magazine Les Débrouillards. </p><p>Depuis 1999, il enseigne la bande dessinée à l’École multidisciplinaire de l’image de l’Université du Québec en Outaouais. Il est élu au Temple de la renommée de la bande dessinée canadienne en 2009.</p>', 'https://www.facebook.com/real.godbout.7'),
(24, 'Kafka', 'Franz', '', ''),
(25, 'Fournier', 'Pierre', '<p>Scénariste, dessinateur et ardent promoteur de la bande dessinée québécoise, Pierre Fournier est né à Montréal en 1949. En 1973, il crée le Capitaine Kébec, personnage phare de la BDQ. En 1975, il anime Les Amis du Capitaine Kébec, une émission de télé consacrée à la bande dessinée, la première du genre en Amérique du Nord. Dans les années 80, il travaille pour Marvel Comics. Il collabore pendant quinze ans au magazine Croc, notamment comme coscénariste des aventures de Michel Risque et de Red Ketchup. </p><p>En 1991, il reçoit le premier prix Albert-Chartier pour sa contribution à la bande dessinée québécoise. Il est intronisé au Temple de la renommée de la bande dessinée canadienne en 2008. </p><p>Parallèlement à sa carrière en bande dessinée, Pierre Fournier oeuvre comme scénariste à la télévision. Il est également historien, spécialiste de la littérature fantastique et du cinéma d’épouvante et auteur d’un blogue, Frankensteinia, récipiendaire du prestigieux Rondo Award.</p>', 'https://www.facebook.com/pierrefournier'),
(26, 'Chabin', 'Laurent', '<p>Laurent Chabin est romancier. Il est né en France, mais a aussi vécu en Espagne (où il achetait et vendait de la ferraille), aux Antilles et dans l\'Ouest canadien. Il vit maintenant à Montréal, dans le quartier même qui sert de décor à la présente BD, ainsi qu\'à plusieurs de ses romans. Ces romans, qu\'on prend parfois à tort pour des polars, sont tout simplement noirs. Noir foncé. À l\'image du monde de violence, de fausseté et de cynisme qu\'ils décrivent...</p>', ''),
(27, 'Houde', 'Jocelyn', '<p>Grand amateur des romans polaires de Jules Verne, de l\'oeuvre de Jean Ray et de la Seconde Guerre mondiale, Jocelyn Houde a publié Panzer, une série de bandes dessinées d\'aventures qui ont pour théâtre ce conflit : La patrouille des 7 (1998), Périls dans la jungle (1999) et L\'île des maîtres du monde (2005). Jocelyn Houde est décédé en 2007.</p>', ''),
(28, 'Richard', 'Marc', '<p>Passionné comme Jocelyn Houde par la Seconde Guerre mondiale, de même que par l\'Antiquité tardive, les livres de Jean Raspail et de Jean Marcel, Marc Richard est un géographe qui se consacre à la toponymie. Il poursuit des recherches sur le génie du lieu (l’importance, la singularité d’un lieu) et la création de noms et de poèmes géographiques.</p>', ''),
(29, 'Iris', 'Boudreau', '<p>Iris a fait un DEC en arts plastiques au Cégep de l’Outaouais. Elle entre au BAC en bande dessinée de l’Université du Québec en Outaouais à l’hiver 2003 et en ressort avec son diplôme en avril 2006. Depuis son arrivée à Montréal en 2007, elle se consacre à toutes sortes de formes d’art allant de la peinture à l’illustration, mais surtout, la bande dessinée. Son premier livre, Dans mes rellignes, un journal quotidien en bande dessinée, est publié chez Mécanique Générale en 2006. Elle publie Justine, une fiction en bande dessinée chez La Pastèque en 2010. En 2009, elle commence un blog feuilleton avec son amie Zviane. Ce blog deviendra les trois tomes de L’ostie d’chat, publiés chez Delcourt dans la collection Shampooing. À l’hiver 2013, elle fait son entrée dans le monde du livre jeunesse avec trois publications à La Courte Échelle: L\'abominable, écrit par Danielle Chaperon et une série en collaboration avec l’auteure Élise Gravel, Les leçons du professeur Zouf.</p>', 'http://irisboudreaublog.blogspot.com/'),
(30, 'Cathon', '', '<p>Cathon quitte la ville de Québec en 2010 pour venir s\'installer à Montréal. Depuis lors, elle se consacre à la bande dessinée et à l\'illustration tout en terminant un BAC en arts visuels et médiatiques à l\'UQAM. En 2011, elle auto-publie son premier livre, Trois secondes plus vite, pour lequel elle est nominée au prix Bédélys Indépendant. En 2012 paraissent ses deux autres fanzines, La croisière des dames, en collaboration avec Alexandre Fontaine- Rousseau et Dormir en Grenouillère. La même année, elle publie ses illustrations dans diverses revues et fanzines tels que Liberté, Nikkatsu : 100 ans de rébellion (Panorama-cinéma) et Tout va bien. Présentement, elle tente d\'apprivoiser la littérature jeunesse et continue vaillamment de piloter son blog.</p>', ''),
(31, 'Kling', 'Laurent', '<p>Avant de devenir dessinateur, Laurent Kling a pris des sentiers et des petites routes qui l\'on conduit dans ces zones industrielles perdues, il a rencontré ceux qui vivent là, une étrange peuplade qui vénère le dieu Électricité matérialisé par les imposants pylônes dressés comme des idoles. Après ce passage plutôt longuet, Kling est devenu illustrateur tout naturellement. Il travaille surtout pour la presse et l\'édition jeunesse, et il fait ses propres comics qui sont inspirés de son ancienne vie, du burlesque contemplatif de la campagne industrialisée où l\'humour côtoie le tragique.</p>', 'https://kling.ultra-book.com/portfolio'),
(32, 'Laskey', 'David', '<p>David Lasky est né en 1967 à Washington, D.C.  Il est illustrateur depuis 1989. Il est l’auteur de Urban Hipster avec Greg Stump, publié chez Alternative Comics. La famille Carter est son premier livre en français. L’auteur vit actuellement à Seattle.</p>', ''),
(33, 'Young', 'Frank M.', '<p>Frank Young est né à Tallahassee, en Floride, en 1963. Après plus d\'une décennie de journalisme, Young est retourné à l\'écriture à la fin des années 1990. Il a écrit plusieurs livres pour enfants. Young est aussi un concepteur, dessinateur, musicien et comédien.</p>', ''),
(34, 'Leclerc', 'Simon', '<p>Simon Leclerc est un illustrateur de Montréal. Il y a étudié l’animation, de même qu’en Californie, à CalArts. Il a illustré, animé et assuré la direction artistique de nombreux projets depuis.</p>', ''),
(35, 'Desaulniers-Brousseau', 'Thomas', '<p>Thomas Desaulniers-Brousseau vit et travaille à Montréal. Il a étudié le cinéma et détient un baccalauréat en traduction de l’Université McGill. L’été, il plante des arbres sur la terre familiale. Il a publié quelques nouvelles et Jours d’attente est son premier livre.</p>', ''),
(36, 'Leroy', 'Violaine', '<p>Violaine Leroy, née en 1981, crée des images et des bandes-dessinées. Issue de l\'atelier d\'illustration aux Arts Décoratifs de Strasbourg, elle dessine depuis 2005 autant pour l\'enfance que pour les adultes. Elle s\'investit dans le collectif les Rhubarbus et travaille sur des livres, revues, fanzines, affiches, écrans pour les éditions de La Pastèque, la revue XXI, le Monde, Actes Sud, Gallimard, Bayard et bien d\'autres.. dans un confortable atelier en haut d\'une tour, avec une vue imprenable sur les toits de la ville et les montagnes au fond.</p>', 'https://cargocollective.com/violaine-leroy'),
(37, 'Mahler', 'Nicolas', '<p>Nicolas Mahler vit à Vienne en Autriche où il réalise des illustrations pour des journaux et des magazines allemands, autrichiens, suisses, canadiens et américains.  Ses bandes dessinées sont principalement publiées par L’Association, B.ü.L.b Comix et La Pastèque. Il a également réalisé une série de courts-métrages d\'animation autour du personnage de Flashko, l\'homme à la couverture.</p>', 'https://www.mahlermuseum.com/'),
(38, 'Marsi', '', '<p>Marsi : [marsi] n.m.inv. – XXIe ; de la contraction de Marc et Simard 1. Se dit d’un gars ayant une formation en design graphique et ayant travaillé en illustration et en dessins animés. « Les Marsi prenaient leurs aises aux faîtes des palétuviers» (Venise) 2. (intérêts) Grand amateur de sciences naturelles et de bouffe. Gavage marsien, art marsien > Miam Miam Fléau.</p>', ''),
(39, 'Obata', 'Fumio', '<p>Fumio Obata est né à Tokyo en 1975. Depuis l’âge de 16 ans, il vit en Grande-Bretagne. Il est diplômé du Glasgow School of Art (Glasgow) et du Royal College of Art (Londres) où il a obtenu un master de graphisme et design. Depuis, il a travaillé principalement pour le cinéma d’animation et le multimédia, et notamment pour le studio Redkite Animations, installé à Edimbourgh.</p>', 'http://www.fumioobata.co.uk/?LMCL=th8pc1'),
(40, 'Rabagliati', 'Michel', '<p>Michel Rabagliati est né en 1961 à Montréal, où il a grandi dans le quartier Rosemont. Après s\'être intéressé un moment à la typographie, il étudie en graphisme et travaille à son compte dans ce domaine à partir de 1981. Il se lance sérieusement dans l\'illustration publicitaire en 1988. Depuis 1998, ses bandes dessinées révolutionnent le 9e art québécois. Avec sa série Paul, Michel Rabagliati est devenu une figure incontournable de la bande dessinée du Québec.  Il a été le premier Québécois à remporter le Prix du public Fauve FNAC-SNCF au 37e Festival international de la bande dessinée d’Angoulême pour Paul à Québec.  En 2017, il a été fait Compagnon des arts et des lettres du Québec. Cette prestigieuse distinction lui a été accordée par le Conseil des arts et des lettres du Québec (CALQ) afin de souligner son apport exceptionnel à la vitalité et au rayonnement de la culture québécoise.</p>', 'http://www.michelrabagliati.com/Bienvenue.html'),
(41, 'Rocheleau', 'Julie', '<p>Julie Rocheleau est une dessinatrice montréalaise qui, dans une ancienne vie, travaillait pour des studios de dessins animés. À partir des années 2010, elle se consacre davantage à la bande dessinée.</p><p>Collaborant avec des écrivains et des éditeurs d’Europe et d’Amérique, elle a cosigné, entre autres, la trilogie La colère de Fantômas (Dargaud, 2013-2015), La petite patrie (La Pastèque, 2015, d’après l’œuvre de Clause Jasmin) et Betty Boob (Casterman, 2017). Ces albums ont été maintes fois récompensés, notamment par le prix BD Fnac France et le Prix des libraires du Québec pour la bande dessinée Betty Boob en 2018, aussi sélectionnée pour un Eisner Award. </p><p>Julie illustre également des romans, des affiches ainsi que des publications indépendantes. Elle vit dans le quartier Rosemont–La Petite-Patrie, à Montréal.</p>', 'https://rocheleau.format.com/'),
(42, 'Grégoire', 'Normand', '<p>Normand Grégoire est scénariste, réalisateur et metteur en scène. Il commence sa carrière comme intervalliste sur le long métrage Heavy Metal (Métal Hurlant). Il a ensuite scénarisé et réalisé des dessins animés industriels et plusieurs courts métrages, dont quelques uns ont été primés aux États-Unis. Il a aussi écrit des scénarios pour le cinéma et la télévision et réalisé des séries pour Radio-Canada, Télé-Québec et TVA.</p>', ''),
(43, 'Bienvenu', 'Sophie', '<p>Sophie Bienvenu est née en Belgique en 1980, d\'une mère Belge et d\'un père Français. Après une formation en communication visuelle à Paris1, elle déménage au Québec en 2001 où elle exerce divers métiers dans le web, le journalisme et la communication.</p><p>Et au pire, on se mariera, son premier roman, publié à La Mèche, se fait remarquer par la critique, devient finaliste de plusieurs prix et obtient un franc succès. Chercher Sam, publié en 2014 au Cheval d’août, a récolté la faveur des critiques et des lecteurs et fait partie de la liste des 100 incontournables de la littérature de Ici Radio-Canada.</p>', ''),
(44, 'Simard', 'Rémy', '<p>Rémy Simard est né au siècle dernier à Roberval. Nul en mathématique et en français, il décide de faire des petits dessins. Depuis, il raconte des histoires qui prennent la forme d’albums, de romans jeunesse et de bandes dessinées.</p><p>Aujourd’hui, Rémy fait des siestes l’après-midi, nourrit ses chats,  continue de dessiner d’écrire de chouettes histoires pour petits et grands.</p>', 'https://remysimard.com/'),
(45, 'Siris', '', '<p>Figure incontournable de la bande dessinée québécoise, Siris souligne depuis plus de 20 ans les travers de la société en bande dessinée et en illustrations. Il a participé à plusieurs fanzine et collectifs d’ici et d’Europe. Il a fait beaucoup de promotion pour la bande dessinée alternative lors de festivals à Montréal, en Belgique et en France.</p><p>Siris fait ses premières armes en 1986 alors qu\'il étudie au Cégep du Vieux Montréal. Il publie ses premières planches dans le fanzine Krypton dont il assure la coordination de 1987 à 1989. Fort de cette expérience, il dessine pour plusieurs fanzines tels que Rectangle (1986 à 1990), Mac tin tac (1992 à 1995), Kèkrapules (1993), Kollectiv (1997) et bien d’autres. </p><p>Ces albums collectifs ne l’empêchent pas de publier ses propres bandes dessinées sous les titres originaux de Cent rides cent boutons (1991), J\'ai eu des pensées toute la journée (1991), Comix Baloney 1 et 2 (1995 et 1997) ou Rotabagage (1996).</p>', ''),
(46, 'Tande', 'Leif', '<p>Leif est originaire de Mosjoen en Norvège. En 1996 il termine un doctorat en nanotechnologie à l\'Université de Jyväskylä en Finlande. En 1999 il émigre au Canada pour poursuivre ses recherches sur la microquantique avec des sommités du monde scientifique. Mais l\'année suivante, il sera malencontreusement soumis à une dose habituellement mortelle de rayons oméga émis par l\'accélérateur de particules nucléaires de l\'Université Laval à Québec. Ses confrères furent témoins de l’horrible métamorphose subie par Leif, toujours vivant.</p><p>Depuis, maintenu en observation en milieu contrôlé, Leif a complètement mis de côté la science et il se passionne désormais pour la bande dessinée, convaincu que seule cette discipline a désormais le pouvoir de changer le monde. Une fois l\'an, le sas de son caisson hyperbare est ouvert pour en retirer ses messages divinatoires encryptés qui sont livrés au public sous forme de codes narratifs et de séquences illustrées.</p>', ''),
(47, 'Philippe', 'Girard', '<p>Auteur de BD et de littérature pour la jeunesse, Philippe Girard a étudié en Communications graphiques à l’Université Laval. Par la suite, il est engagé comme graphiste, puis comme réalisateur pigiste par la société Radio-Canada. Au printemps 1997, il lance avec des amis le fanzine Tabasko, un mensuel dédié à la bande dessinée, qui paraît pendant deux ans. En 2000, son premier album BD, Jim le Malingre : avatars ataviques, remporte le prix Bédéis causa humour du Festival international de la BD de Québec.</p><p>Danger public est son premier livre à la Pastèque.</p>', 'http://philippegirard.blogspot.com/'),
(48, 'Vallerand', 'Richard', '<p>Illustrateur et auteur de bande dessinée, membre du collectif La Shop à Bulles, Richard Vallerand est un collaborateur régulier du magazine Curium avec sa série « Les Laborats au bistouri ». Récemment, il a réalisé les segments animés pour le film « L’heureux naufrage ».</p>', 'http://www.richardvallerand.com/'),
(49, 'Côté', 'André-Philippe ', '<p>André-Philippe Côté s’est fait connaître par la bande dessinée. Œuvrant dans la ville de Québec, il a longtemps été illustrateur pour la revue d’humour Safarir . C’est véritablement depuis 1997 avec son poste de caricaturiste éditorialiste pour le quotidien de la Ville de Québec Le Soleil qu’il s’est réalisé pleinement. </p><p>Un recueil annuelde ses meilleures caricatures paraît chaque année depuis et trois grandes expositions lui ont été consacrées. Ses caricatures sont souvent reproduites dans Le Courrier International et Le Monde.</p>', 'https://www.facebook.com/AndrePcote/'),
(50, 'Vanoli', 'Vincent', '<p>Vincent Vanoli est né en France à Mont Saint Martin. Il a fait ses études d’arts plastiques à l’Université de Strasbourg et obtenu le CAPES d’arts plastiques en 1990. Il compte de nombreuses publications en bandes dessinées depuis 1989 dans diverses structures d’édition, parmi lesquelles L’Association et Ego Comme X. Il vit à Huningue et travaille à Mulhouse, au collège Saint-Exupéry.</p>', 'http://www.vincent-vanoli.fr/bio.html'),
(51, 'Demangeot', 'Cédric', '<p>Cédric Demangeot est un poète français né en 1974 à Tours, responsable de la maison d’édition Fissile. Il a collaboré à de nombreux numéros de la revue Grèges, aux éditions du même nom, et publié deux livres chez ce même éditeur. Il a aussi fait paraître une douzaine de livres de poésie, du théâtre en vers, quelques tentatives de prose, quelques brefs essais critiques et des traductions en collaboration.</p>', ''),
(52, 'Ménard', 'Sylvie-Anne', '<p>Sylvie-Anne Ménard (ou Zviane), née en 1983, fait de la bande dessinée et de la musique. Elle réalise des albums de bande dessinée, collabore à divers fanzines, à divers journaux, et donne à manger à un blogue dessiné qui évoluera dans toutes sortes de directions saugrenues. </p><p>En 2009 et en 2012, la Maison des auteurs d’Angoulême (France) l’accueille en résidence afin de parfaire son dessin et son sens de la narration. Son album Apnée, aux éditions Pow Pow, remporte en 2010 le Grand Prix de la Ville de Québec, décerné au meilleur album de langue française publié au Québec. </p><p>C\'est en 2011 que sortira la série L\'ostie d\'chat aux éditions Delcourt; il s\'agit de la version papier du populaire blogue-feuilleton qu\'elle entretint pendant 3 ans avec sa collègue Iris. </p><p>Récipiendaire de tout plein de prix, elle navigue entre les nouveaux projets de fanzines, d\'albums, d\'arrangements chorals, de duos de piano, de gifs animés, de montages vidéo et d\'épluchettes de blé d\'inde  Son dernier livre paru est Les deuxièmes aux Éditions Pow Pow. Le bestiaire des fruits est son premier livre à La Pastèque.</p>', ''),
(53, 'Amsallem', 'Baptiste', '<p>Baptiste Amsallem est à la fois illustrateur et dessinateur de BD. Il publie son premier livre en 2010, puis un second, un dixième, un quinzième... Il aime particulièrement s\'adresser aux tout-petits et collabore avec plusieurs maisons d\'édition.</p>', 'https://baptisteamsallem.ultra-book.com/'),
(54, 'Pierloot', 'Mathieu', '<p>Né l\'année de la sortie de « Seventeen Seconds » des Cure, Mathieu Pierloot n\'a pourtant jamais fait de musique. Il a préféré écrire des scénarios de bande dessinée, des romans et des albums pour les enfants. Il vit à Bruxelles avec sa femme, sa fille et son chat.</p>', ''),
(55, 'Turcot', 'Laurent', '<p>Laurent Turcot est né à Québec en 1979. Professeur au département des sciences humaines de l\'Université du Québec à Trois-Rivières, titulaire de la Chaire de recherche du Canada en histoire des loisirs et des divertissements, auteur d’une douzaine de livres, Laurent est également le créateur d’une populaire chaîne de vulgarisation historique sur YouTube, L\'Histoire nous le dira.</p>', ''),
(56, 'Arsenault', 'Isabelle', '<p>Isabelle Arsenault est une illustratrice formée en design graphique à l\'Université du Québec à Montréal. Sa passion pour les livres illustrés la mènera à s\'orienter davantage dans cette voie. Depuis, son travail a été reconnu et primé à plusieurs reprises sur la scène internationale. Elle a été lauréate du Prix littéraire du Gouverneur général en illustration à trois reprises et deux de ses livres ont été nommés dans la liste des 10 meilleurs livres illustrés de l\'année selon le New York Times. Son style est empreint de sensibilité et de finesse. Il accroche autant le regard des jeunes lecteurs que celui des adultes. Elle vit à Montréal, avec son mari et leurs deux enfants.</p>', 'http://www.isabellearsenault.com/'),
(57, 'Maclear', 'Kyo', '<p>Auteure et romancière, Kyo Maclear se définit elle-même comme un fourchon. Née d’un père britannique et d’une mère japonaise, elle a imaginé avec son mari l’histoire de cet ustensile métissé à l’occasion de la naissance de leur fils aîné. Fourchon est le premier livre jeunesse de Kyo Maclear. Elle vit à Toronto, avec sa famille.</p>', 'http://www.kyomaclear.com/'),
(58, 'Novesky', 'Amy', '<p>Amy Novesky est l’auteure de Georgia in Hawaii et de Me, Frida, livre pour lequel elle a reçu le prix Pura-Belpré Honor et qui a été désigné comme « livre remarquable » par l’American Library Asociation. Elle vit à San Francisco.</p>', ''),
(59, 'Hall', 'Kirsten', '<p>Après avoir obtenu sa maîtrise en éducation à la petite enfance de l’Université de New York, Kirsten Hall a enseigné pendant plusieurs années aux niveaux préscolaire et primaire, tout en écrivant des livres d’apprentissage de la lecture pour les éditions Scholastic et en participant de diverses autres manières au monde de l’édition.Aujourd’hui, elle dirige Catbird Productions, une agence littéraire qu’elle a fondée et qui fait aussi du conditionnement matériel de livres.</p>', ''),
(60, 'Blanchet', 'Pascal', '<p>Pascal Blanchet est né à Trois-Rivières en 1980. Il possède un intérêt marqué pour le design du 20e siècle, l’architecture et le jazz. Illustrateur autodidacte, il réalise des illustrations pour des journaux et magazines américains et canadiens. Il a notamment travaillé pour Penguin Book, The San Francisco Magazine, The New-Yorker et le National Post.</p>', ''),
(61, 'Desjardins', 'India', '<p>India Desjardins a commencé par être journaliste avant de découvrir sa véritable voie dans l\'écriture de fiction. Elle est surtout connue pour sa populaire série Le Journal d\'Aurélie Laflamme, dont le premier tome a été adapté au cinéma en 2010. Elle a également participé aux collectifs Cherchez la femme (qu\'elle a aussi dirigé), Amour et libertinage, par les trentenaires d\'aujourd\'hui et Miroirs. En 2012, elle se lance dans la bande dessinée avec La Célibataire, cosignée avec l\'illustratrice Magalie Foutrier. Elle aime varier les histoires, les styles et l\'âge de ses personnages au gré de son inspiration.</p>', 'https://www.facebook.com/indiadesjardinsofficiel/'),
(62, 'Campbell', 'K.G.', '<p>K.G. Campbell a été élevé dans une vieille bâtisse hantée garnie de tourelles et peuplée de professeurs lugubres, à l’ombre d’un château écossais tout escarpé. Il y a appris l’amour des choses anciennes, poussiéreuses et un tantinet inquiétantes. Lorsqu’il ne lisait pas, il dessinait. Les affreux chandails de Lester est son premier livre en tant qu’auteur-illustrateur. Il vit en Californie.</p>', 'https://www.kgcampbell.com/'),
(63, 'Castanié', 'Julien', '<p>Julien Castanié est un graphiste et illustrateur né en 1983. Il vit actuellement à Montréal au Canada où il travaille avec la presse (illustrations et dessins de presse), le domaine de l’édition (albums et documentaires) et celui de la bande dessinée (numérique et papier).</p>', 'https://juliencastanie.com/'),
(64, 'Vidal', 'Séverine', '<p>Après avoir été professeur, Séverine Vidal se consacre à l\'écriture à temps plein depuis 2011. Elle écrit des romans pour adolescents (Le Rouergue, Grasset, Sarbacane, Bayard...), des albums (Gallimard, Sarbacane, La Joie de lire, Mango...), des BD (Didier Jeunesse, Alice Jeunesse, Les Enfants rouges) ou des séries (Sarbacane, Frimousse, Magnard). Elle anime des ateliers d\'écriture (écoles, collèges, lycée, centres sociaux, centres d\'alphabétisation...). Ses livres sont traduits à l\'étranger, et récompensés par de nombreux prix.</p>', 'http://severinevidal.blogspot.com/'),
(65, 'Castrée', 'Geneviève', '<p>Geneviève Castrée est née à Loretteville en 1981. Sous son nom de plume, elle ressent l\'envie de publier son travail très tôt, apparaissant dans la scène underground montréalaise alors qu\'elle était encore adolescente.</p><p> Son premier livre Lait frappé est publié chez L’oie de Cravan alors qu’elle n’avait que 18 ans. En plus de ses livres, Geneviève Castrée a présenté plusieurs expositions au Canada, aux États-Unis, en Europe, en Australie et au Japon. Elle a passé sa vie adulte dans le nord-ouest du Pacifique avec son mari et sa fille, où elle a dessiné, fait de petites sculptures en porcelaine, et a joué de la musique sous le nom Ô PAON. </p><p>Geneviève Castrée est décédée en 2016.</p>', ''),
(66, 'Rossignol', 'Francis', '<p>Francis Rossignol est un petit passereau voisin des fauvettes, renommé pour son chant crépusculaire.</p>', ''),
(67, 'Menu', 'Séraphine', '<p>Séraphine Menu est née en France, dans un village de Normandie au bord de la mer. Après des études en littérature, elle se spécialise dans le domaine de la jeunesse et collabore à plusieurs projets littéraires et éditoriaux. Son premier roman, Les déclinaisons de la Marguerite, paraîtra aux éditions Thierry Magnier en 2018.</p>', ''),
(68, 'Doyon', 'Patrick', '<p>Depuis la fin de son baccalauréat en design graphique en 2005, Patrick Doyon travaille comme illustrateur et réalisateur de films d’animation. Son court-métrage Dimanche, produit par l\'Office national du film du Canada, a recueilli les honneurs sur le circuit international et une nomination pour l\'Oscar ® du meilleur court étrage d’animation en 2012, en plus de remporter le Jutra dans cette catégorie. Ses illustrations pour divers magazines ont remporté de nombreux prix.</p>', 'https://patrickdoyon.tumblr.com/'),
(69, 'Marois', 'André', '<p>André Marois est né à Créteil, en France, en 1959. Il émigre à Montréal en 1992 avec ses deux enfants, pour travailler comme concepteur-rédacteur pigiste indépendant. Depuis 1999, il publie des romans noirs pour les adultes, des romans policiers pour les enfants et des nouvelles pour tirer sur tout ce qui bouge…</p>', 'http://www.andremarois.com/'),
(70, 'Fehr', 'Daniel', '<p>Daniel Fehr a étudié l\'allemand et les médias à l\'université de Princeton (USA). Auparavant, il a étudié à l\'Université des Arts de Zurich et à la School of Visual Arts de New York. </p><p>Aujourd\'hui, Daniel Fehr vit et travaille à Winterthur en Suisse. Il écrit des livres d\'images et conçoit des jeux de société pour les enfants et les familles.</p>', ''),
(71, 'Carvalho', 'Bernardo P.', '<p>Bernardo P. Carvalho est à Lisbonne en 1973, il fréquente le Collège des Beaux-Arts de la même ville. Il est co-fondateur de Planeta Tangerina. En 2008, avec le livre Pê de Pai (D pour papa), il a remporté un prix de la Mention d\'honneur du meilleur livre du monde entier, sponsorisé par la Book Art Foundation. </p><p>En 2009, il a été l\'un des lauréats des 2e Prix du livre d\'images CJ (Corée), avec le livre As Duas Estradas (Les Deux Routes). Cette année-là, il a également remporté le prix national d\'illustration avec le livre Depressa Devagar. </p><p>En 2011, O Mundo num Segundo a été distingué comme l\'un des meilleurs de l\'année par la Banco del Libro du Venezuela.</p>', ''),
(72, 'Ferrer', 'Marianne', '<p>Née au Vénézuela, Marianne Ferrer est venue au Canada en 1998, où elle a poursuivi ses tendances artistiques. Là, elle a acquis plusieurs techniques d’illustration, et elle a trouvé ce style embrumé et de profond qui la distingue.</p>', 'https://www.behance.net/marianne-ferrer'),
(73, 'Flouw', 'Benjamin', '<p>Benjamin Flouw est né en 1986 dans le Nord de la France. Il grandit près d’Avignon, entouré par les pins, les vignes et le chant des cigales. Après avoir étudié l’animation, il vit à Londres, puis s’installe à Paris, où il décide finalement de se consacrer à l’illustration. L\'auteur habite aujourd\'hui Marseilles. La milléclat dorée est son premier livre.</p>', 'http://www.benjaminflouw.com/'),
(74, 'Gariépy', 'Cécile', '<p>Cécile Gariépy est une illustratrice qui vit à Montréal.</p><p>Elle conçoit des illustrations pour différents clients et décline son art à travers une variété de supports, des journaux américains jusqu’aux emballages de produits alimentaires québécois, en passant par l’annuelle carte d’anniversaire pour sa mère.</p><p>Cécile a peur de trouver des monstres sous son lit, mais à part ça, tout va bien.</p>', 'https://www.cecile-gariepy.com/'),
(75, 'Gaudesaboos', 'Pieter', '<p>Pieter Gaudesaboos est auteur, illustrateur et designer.  Il travaille souvent avec des collages et des techniques mixtes. Ses livres ont reçu plusieurs prix, dont un Golden Owl Juvenile Literature Prize en 2008. De 2004 à 2009, il a travaillé en tant que designer à la maison de théâtre de Kopergietery. Il vit à Gand, en Belgique.</p>', 'https://www.gaudesaboos.be/'),
(76, 'Francis', 'Lorraine', '<p>Lorraine Francis travaille comme bibliothécaire au département du livre pour enfants d’une bibliothèque irlandaise. Elle organise également des lectures et des ateliers. En 2009, elle a commencé à collaborer avec l\'illustrateur Pieter Gaudesaboos.</p>', ''),
(77, 'Gerin', 'Etienne', '<p>Après un baccalauréat en section Littéraire, Etienne Gerin se tourne vers le dessin et intègre l\'école Emile Cohl. Très attiré par les livres pour enfants, il cultive un style géométrique, simple, vectoriel aux couleurs marquées.</p>', ''),
(78, 'Goldstyn', 'Jacques', '<p>Jacques Goldstyn est né en 1958 à Saint-Eugène d’Argentenay où son grand-père paternel est inspecteur de fourrures. Diplômé de l’Université de Montréal en géologie, il travaille en Gaspésie, en Abitibi puis en Alberta en géologie pétrolière. En 1981, il illustre un premier livre : Le Petit Débrouillard, un recueil d’expériences dans lequel évoluent les personnages qu’il a créés, la bande des Débrouillards.</p><p>À ce jour, une dizaine de livres d’expériences et de bandes dessinées mettant en vedette les Débrouillards ainsi que Van l’inventeur ont été publiés. Jacques Goldstyn collabore également aux revues Quatre Temps, Québec Oiseaux et Relations. On peut voir ses caricatures politiques dans Le Couac, L’aut’journal et Amnistie Internationale, sous la plume de Boris. Il a reçu en 2001 le prix Michael-Smith  pour son  apport à la vulgarisation scientifique au Canada. Il a remporté en 2009 et 2011 le Grand Prix du journalisme indépendant du Québec pour l’illustration éditoriale.</p>', 'https://www.facebook.com/jacquesgoldstyn/'),
(79, 'Callot', 'Amélie', '<p>Sage-femme, Amélie Callot est née au pied des Alpes mais parachutée sur le Bassin d\'Arcachon par intérêt professionnel. Lors d\'un séjour de plusieurs mois au Québec, la tenue d\'un blog lui a révélé le plaisir de raconter et de faire voyager par l\'écriture. A son retour en France, poussée par une amie, elle poursuit l\'écriture qui naturellement s\'oriente vers un univers poétique et enfantin.</p>', ''),
(80, 'Godbout', 'Geneviève', '<p>Geneviève Godbout travaille en tant qu’illustratrice pour l’édition jeunesse et la mode. Elle s’est établie récemment à Montréal après avoir vécu à Londres et fait ses études en animation à Paris.  Rose à petits pois est son deuxième livre à paraître à La Pastèque.</p>', 'https://www.genevievegodboutillustration.com/'),
(81, 'Casey', 'Dawn', '<p>Dans ses précédentes incarnations, Dawn Casey travaillait dans l\'édition et était professeur à l’école primaire. Maintenant, elle écrit des contes populaires, des histoires originales et des textes pour la jeunesse pour différents éditeurs éducatifs et professionnels. Elle habite à Sussex en Angleterre.</p>', ''),
(82, 'Robert', 'Nadine', '<p>Nadine Robert aime les histoires et tout ce qui touche la création de livres. Après des études en lettres et en éducation, elle a travaillé tour à tour comme animatrice en bibliothèque, conceptrice de jeux vidéo, scénariste et plus récemment comme éditrice jeunesse.</p>', ''),
(83, 'Gravel', 'Elise', '<p>Après ses études en design graphique, Élise Gravel s’est rapidement découvert une passion pour le livre jeunesse. Elle a écrit et illustré près de trente ouvrages pour enfants au Canada et aux Etats-Unis. Ses dadas : les monstres, les créatures étranges, l\'humour absurde et tout ce qui sort du cadre. </p><p>Ses livres ont été traduits danssept langues et l’un d’entre eux lui a valu le prix du Gouverneur Général en 2012 dans la catégorie jeunesse – illustration. Elle vit à Montréal avec son conjoint et leurs deux petites créatures.</p>', 'http://elisegravel.com/'),
(84, 'Hale', 'Ohara', '<p>Ohara Hale est un artiste multidisciplinaire et autodidacte. Née à Hollywood, Hale a passé sa jeunesse dans le Midwest et vit maintenant à Montréal. Elle écrit et illustre des livres pour enfants. Sa plus récente publication intitulée Who Did It?, une série de cinq livres sur les animaux et les insectes peut être trouvée dans les librairies du monde entier, y compris les galeries et les musées tel le MOMA.</p><p>Elle travaille aussi comme artiste, illustrateur, directrice artistique, animatrice, doublure, actrice, graphiste, chanteuse/compositrice, photographe et écrivain.</p>', 'http://oharahale.com/'),
(85, 'Kerascoët', '', '<p>Derrière le nom Kerascoët se cachent deux dessinateurs, Marie Pommepuy et Sébastien Cosset. Ils sont les auteurs de Miss pas touche et Beauté en bande dessinée. Ils ont également créé de nombreux visuels dans le domaine de la publicité ou encore de l\'habillage et des visuels de grands magasins parisiens. Paul et Antoinette est leur premier livre à La Pastèque.</p>', 'https://www.instagram.com/kerascoet_/?hl=fr-ca'),
(86, 'Leng', 'Qin', '<p>Illustratrice et designer, Qin Leng a remporté ou a été finaliste de nombreux prix, y compris le prestigieux Prix du Gouverneur général pour la littérature jeunesse – illustration. Plus récemment, elle a signé Je suis petite, son premier album en tant qu’auteure et illustratrice. Née à Shanghai, en Chine, Qin a déménagé en France, puis à Montréal, au Canada. Aujourd’hui, elle partage une tanière douillette avec sa famille à Toronto.</p>', 'https://qinillustrations.com/'),
(87, 'Arnold', 'Marsha Diane ', '<p>Auteure à succès et lauréate de nombreux prix, Marsha Diane Arnold compte parmi ses œuvres récentes Coup de vent et Waiting for Snow. Comme les personnages d’À moi. À toi., elle a déjà lancé un cerf-volant, battu un tambour, joué au Go, pratiqué la pêche, mis à l’eau un petit bateau, sauté à la corde et tressé des couronnes de fleurs. Mais elle n’a jamais été soulevée dans le ciel comme Petit Panda ni n’a-t-elle joué au jianzi dans un arbre. Marsha habite Alva, en Floride.</p>', 'https://marshadianearnold.com/'),
(88, 'Maurey', 'Katty', '<p>Établie à Montréal, Katty Maurey est illustratrice et designer. Ses oeuvres explorent les coulisses du quotidien, des hobbies et des traditions. En fille attentive, elle prend soin d\'arroser ses plantes tous les matins.</p>', ''),
(89, 'Boisjoly', 'Véronique', '<p>Véronique Boisjoly a grandi tour à tour sur une ferme, dans la faune urbaine et au coeur d’une forêt enchantée, où elle prend aujourd’hui soin d’un petit loup. Elle aime le caramel, le café, les rimes, les petites choses du quotidien et les histoires qui finissent bien. Elle a collaboré à P45.ca et cofondé URLer.tv, avant de lancer Caribou, édition créative, une maison spécialisée dans le développement d’histoires pour iPad.</p>', ''),
(90, 'Mingle', 'Mingle', '<p>Mingle Mingle, de son vrai nom Min-Geol Jeon, est né en 1973 à Pusan, en Corée du sud. Lorsqu’il ne travaille pas sur des projets en animation, il fait de la charpenterie. Adepte de deltaplane, il aime le vent et le ciel. Mingle Mingle vit avec son épouse et sa fille à Séoul. La mouette aux croustilles est son premier livre.</p>', ''),
(91, 'Nadeau', 'Janice', '<p>Formée en design graphique à l’Université du Québec à Montréal et à l’École supérieure des arts décoratifs de Strasbourg (France), Janice Nadeau a travaillé comme directrice artistique au sein de différentes organisations.</p><p>Avec Nul poisson où aller aux éditions Les 400 coups, elle a signé en 2003 son premier album jeunesse pour lequel elle a remporté le premier Prix du Gouverneur général du Canada 2004. En 2005, elle a signé les illustrations qui constituent l’image de marque de la tournée internationale du spectacle du Cirque du Soleil, Corteo. </p><p>Elle a récemment bénéficié de deux résidences d’artiste, la première lui permettant d’effectuer des recherches à la Bibliothèque internationale pour la jeunesse à Munich, la seconde lui donnant l’occasion de travailler à un projet d’édition à Saint-Mathieu-de-Tréviers (France).</p>', 'https://www.janicenadeau.com/'),
(92, 'Bouchard', 'Hervé', '<p>Né à Jonquière en 1963, Hervé Bouchard enseigne la littérature au Cégep de Chicoutimi. En 2002, il a publié aux Éditions de L\'Effet pourpre Mailloux, histoires de novembre et de juin, que Le Quartanier a réédité en même temps que son deuxième roman, Parents et amis sont invités à y assister. Ce livre lui a d’ailleurs valu le Grand Prix du livre de Montréal 2006.</p>', ''),
(93, 'Pak', 'Kenard', '<p>Kenard Pak est un rêveur à coiffe noire dont les gribouillis magiques séduisent l’espèce humaine longtemps et profondément. Trouvé d’abord en train de picorer au sein de compagnies d’animation numérique, on l’aperçoit davantage aujourd’hui plongé dans ses illustrations de livres. Ken s’agite principalement dans la brumeuse San Francisco avec son partenaire de nid et leurs trois compagnons félins.</p>', 'https://pandagun.com/'),
(94, 'PA', 'Sophie', '<p>Sophie PA aime dessiner depuis qu’elle est toute petite. Tellement qu’une petite bosse lui a poussé sur un doigt! À l’école, elle étudie le design graphique à l’Université du Québec à Montréal. Depuis, elle collabore avec différents clients tous issus du monde de la littérature jeunesse. Son plaisir ultime, c’est de créer des images au trait vif avec des personnages amusants et colorés. Sophie vit et travaille à Québec.</p>', 'http://www.sophiepa.com/'),
(95, 'Smith', 'Brian A.M. ', '<p>Brian A.M. Smith est un rédacteur indépendant de Montréal qui, en plus de livres pour les adultes, a écrit une série de livres pour enfants, dont celui-ci est le premier. Brian a toujours aimé les sourires apportés aux coeurs des grandes personnes par l’esprit des plus petits</p>', ''),
(96, 'Pratt', 'Pierre', '<p>En 1994, Pierre Pratt reçoit le Prix du Gouverneur général du Canada, catégorie littérature de jeunesse, illustrations et le Prix du livre M. Christie pour Mon chien est un éléphant, un livre drôle et tendre écrit par Rémy Simard. Le tandem se reforme l’année suivante et publie La bottine magique de Pipo. Cette histoire amusante admirablement illustrée a été retenue en finale du Prix du Gouverneur général du Canada pour la beauté de ses images.</p><p>Pierre Pratt est né en 1962 à Montréal. Après des études collégiales en arts graphiques au Collège Ahuntsic, il commence sa carrière en faisant de la bande dessinée pour les magazines Titanic et Croc. Puis, il réalise des illustrations pour divers magazines québécois, des affiches et de la publicité. </p><p>Il œuvre dans le domaine de l’édition depuis 1985, égayant de ses couleurs vives, grasses et exubérantes albums et romans plaisant autant aux jeunes qu’à leurs parents. Pierre Pratt a remporté plusieurs prix au cours de sa carrière, dont celui du Gouverneur Général du Canada à trois reprises.</p>', '');
INSERT INTO `auteurs` (`id`, `nom`, `prenom`, `notice`, `site_web`) VALUES
(97, 'Rassat', 'Thibaut', '<p>Thibaut Rassat est diplômé de l\'Ecole Nationale Supérieure d\'Architecture de Marseille. Après avoir travaillé plusieurs années en tant qu’architecte, il se concentre plus récemment sur l’illustration.  Il a travaillé pour plusieurs maisons d’édition telles que Gallimard, Milan, Bayard Presse et Belin. L’architecture et la ville restent au centre de ses recherches et de ses divers projets.</p>', 'https://remysimard.com/'),
(98, 'Sardà', 'Júlia', '<p>Júlia Sardà est une illustratrice espagnole. Après ses études, Júlia commencé à travailler comme coloriste pour un grand studio. Elle travaille aujourd’hui essentiellement en illustration jeunesse. Les Liszt est son premier livre à paraître à La Pastèque.</p>', 'http://www.juliasarda.com/'),
(99, 'Bailey', 'Linda', '<p>Auteure primée, Linda Bailey a écrit plus de 30 livres pour enfants. Parmi ses nombreux prix figurent le Blue Spruce Award, la California Young Reader Medal et le Georgia Storybook Award. Comme Mary, elle construit « des châteaux dans le ciel » depuis toujours. Elle vit à Vancouver, en Colombie-Britannique.</p>', ''),
(100, 'Solis', 'Fermin', '<p>Fermín Solís est un dessinateur, animateur et illustrateur espagnol. Né à Madroñera, Cáceres, Ses illustrations sont apparues dans plusieurs publications. Il est l\'auteur de nombreux romans et livres graphiques. Ses histoires portent sur la vie quotidienne, les relations, la recherche, les coïncidences, le tout mêlé à une petite dose de surréalisme...</p>', 'http://ferminsolis.blogspot.com/'),
(101, 'Stephens', 'Matte', '<p>Matte Stephens est un illustrateur, artiste et fervent partisan de l’idée que l’art se trouve partout. M. Flux est son premier album illustré. Matte et sa douce épouse, Vivienne, créent toutes sortes d’œuvres d’art à Peterborough, New Hampshire, en compagnie de cinq chats et un chien. Le changement est toujours bienvenu chez eux.</p>', 'http://matteart.blogspot.com/'),
(102, 'Tolstikova', 'Dasha', '<p>Avant de devenir illustratrice, Dasha Tolstikova a été photographe, reporter, traductrice de nouvelles, vendeuse, routière, réalisatrice de cinéma et peintre en décoration – pas nécessairement dans cet ordre. Elle est diplômée du programme de maitrise en illustration de la School of Visual Arts, à New York. La jaquette marque son entrée dans le monde des livres illustrés.</p>', 'https://www.dashatolstikova.com/'),
(103, 'Ahokoivu', 'Mari', '<p>Mari Ahokoivu est une illustratrice finlandaise née en 1984. Elle enseigne la bande dessinée et est une figure active de la bande dessinée finlandaise, produisant de nombreux projets liés au 9e art. Elle travaille actuellement sur un roman graphique avec le soutien du Fonds régional de la Fondation culturelle finlandaise de l\'Ostrobothnie du Nord.</p>', ''),
(104, 'Hakkola', 'Kalle', '<p>Kalle Hakkola est né en 1971 à Helsinki, en Finlande et a travaillé dans divers domaines culturels et artistiques. Il est également bibliothécaire qualifié de profession et a travaillé dans la bibliothèque de la ville d\'Helsinki de 1995 à 2003. Depuis 1995, Hakkola a écrit des articles sur la musique, la bande dessinée et la bibliothéconomie pour plusieurs magazines finlandais et a été un important porte-parole de la bande dessinée finlandaise.</p>', ''),
(105, 'Britt', 'Fanny', '<p>Fanny Britt est écrivaine, auteure dramatique et traductrice. Elle compte une douzaine de pièces de théâtre à son actif, dont Bienveillance, lauréate du prix du Gouverneur Général du Canada en 2013. Ses pièces ont été montées sur de nombreuses scènes au Québec, aux Etats-Unis et en Europe. Elle œuvre aussi en littérature jeunesse, à titre d’auteure et de traductrice. On lui doit également des essais littéraires (dont Les tranchées : maternité, ambiguïté et féminisme, en fragments, en 2013). Elle vit à Montréal avec son mari et ses deux fils.</p>', ''),
(106, 'Eggenschwiler', 'Byron', '<p>Byron Eggenschwiler est un illustrateur maintes fois primé, dont les œuvres ont été publiées dans le New York Times, le Wall Street Journal, le New Yorker, GQ, le National Post, le Walrus et OWL Magazine.</p><p>Byron vit à Calgary avec sa femme et leurs deux chats. Opératique est son premier livre à La Pastèque.</p>', ''),
(107, 'Leduc', 'Émilie', '<p>Diplômée en dessin d’animation au Cégep du Vieux Montréal en 2005, Émilie Leduc termine son baccalauréat en design graphique à l’Université du Québec à Montréal en 2010. Elle a travaillé comme infographiste et animatrice sur différentes séries télé. En 2010, elle a reçu la bourse d’illustration Michèle Lemieux pour la qualité de son travail et ses oeuvres produites entre 2009 et 2010. Son premier album jeunesse, La ronde des mois, a été finaliste des Prix littéraires du Gouverneur Géneral en 2012. Elle a publié quatre autres imagiers en 2013. Mon coeur pédale est son premier projet à La Pastèque.</p>', 'http://www.emilieleduc.com/'),
(108, 'Boulerice', 'Simon', '<p>Écrivain, dramaturge, poète, comédien, metteur en scène et chroniqueur à la radio, Simon Boulerice est un touche-à-tout épanoui. Son oeuvre est déjà consistante : une trentaine de publications en moins de dix ans. Parmi ses plus récentes réussites, nous pouvons nommer son roman Jeanne Moreau a le sourire à l\'envers (sélectionné par le prestigieux White Ravens 2014), son album Florence et Léon (finaliste au prix du Gouverneur général 2016) et son recueil de poésie Les Garçons courent plus vite (récipiendaire du prix des enseignants de français AQPF-Anel 2017).</p>', 'https://www.facebook.com/simon.boulerice.3'),
(109, 'Liniers', '', '<p>Liniers est né à Buenos Aires en 1973. Depuis plus de dix ans, il publie un strip quotidien très populaire, Macanudo, dans le journal argentin La Nación. Son travail a été publié dans neuf pays. L’auteur vit au Vermont avec sa femme et ses filles, Mathilda, Clementina et Emma, le plus récent ajout à la famille.</p>', ''),
(110, 'Perreault', 'Guillaume', '<p>Guillaume Perreault est natif de Rimouski. </p><p>Illustrateur de nombreux romans et albums pour la jeunesse, il explore en parallèle le métier d’auteur avec succès.</p><p>En 2016, sa bande dessinée Le facteur de l’espace, pour laquelle il a conjugué écriture et illustrations, lui vaut la Pépite des lecteurs dans la catégorie Petits, au Salon du livre et de la presse jeunesse en Seine-Saint-Denis. Le tome 2 des aventures du coloré personnage est paru à La Pastèque en 2019.</p><p>Guillaume partage aujourd’hui son temps — et son imaginaire — entre Gatineau et Montréal, tandis que ses œuvres, traduites dans plusieurs langues, continuent de parcourir le monde.</p>', 'https://www.guillaumeperreault.com/'),
(111, 'Shanta', 'Élodie', '<p>Auteure et illustratrice pour la jeunesse, Elodie Shanta dessine avec amour monstres, nature, fleurs et sorcières.</p><p>Originaire de Bretagne, elle fréquente l’Université de Rennes, et en ressort diplômée en arts plastiques. Elle s’attache d’abord à la BD adulte, puis se tourne vers la littérature jeunesse. Après avoir publié quelques bandes dessinées sous un pseudonyme, elle signe son premier livre jeunesse, Marcelin Comète, avec Marc Lizano au scénario, et imagine ses propres histoires, qu’elle met en mots et en images.</p><p>Elodie Shanta publie également tous les mois depuis trois ans dans le journal Biscoto. Elle vit désormais à Bruxelles.</p>', 'https://elodieshanta.weebly.com/'),
(112, 'Vigneault', 'François', '<p>François Vigneault est illustrateur, graphiste et auteur de bande dessinée. Il a aussi cofondé le festival Linework NW. Titan, son premier livre, a été publié par les éditions Pow Pow en 2017. Originaire des États-Unis, François habite à Montréal depuis 2015.</p>', 'https://francois-vigneault.com/fr/'),
(113, 'Pettersen', 'Geneviève', '<p>Geneviève Pettersen est né en 1982. Chroniqueuse et scénariste, elle a grandi entre Québec, Jonquière, Chicoutimi, Saint-Honoré et Falardeau avant de déménager à Montréal en 2001. Après des études en sociologie des religions et en littérature à l’UQAM, elle a travaillé dans l’édition et a collaboré à différents magazines. La déesse des mouches à feu, paru au Quartanier en 2014, est son premier roman. Il a remporté le Grand Prix littéraire Archambault 2015.</p>', ''),
(114, 'Barbanègre', 'Raphaëlle', '<p>Raphaëlle Barbanègre est une illustratrice française, née à Toulouse en 1985. Aussi loin qu’elle s’en souvienne, elle a toujours dessiné. Depuis la fin de ses études à l’école Émile-Cohl de Lyon elle a illustré de nombreux livres et magasines jeunesse. En 2012, elle part vivre à Montréal et y trouve depuis une source infinie d’inspirations !</p>', ''),
(115, 'Gifford', 'Clive ', '<p>Clive Gifford est un journaliste et un auteur qui a publié plus de 180 livres et plus de 800 reportages et récits destinés aux adultes et aux enfants. On l’a vu voyager dans plus de 70 pays, être pris en otage en Colombie, faire du parachutisme, entraîner plusieurs sports et diriger une société de jeux informatiques.</p>', ''),
(116, 'Daviz', 'Paul', '<p>Dessiner. Dessiner. Dessiner. C’est l’histoire de la vie de Paul Daviz depuis son plus jeune âge. Il a travaillé comme scénariste sur des publicités télévisées, sur des productions d\'animation et des campagnes de packaging et d\'impression pour les plus grandes agences londoniennes.</p><p>Originaire de Blackburn, Paul est aujourd\'hui un illustrateur de grande expérience. Son inspiration originale provient d\'une copie du magazine MAD qui lui avait été remise à l’âge de 10 ans. Parfois, vous pouvez toujours trouver cet humour irrévérencieux dans le travail de Paul.</p><p>Il aime les boîtes d\'allumettes soviétiques.</p>', ''),
(117, 'Walker', 'Emmanuelle ', '<p>Les livres d’Emmanuelle Walker sont lus par des milliers d’enfants de tous les continents.</p><p>Artiste canado-suisse basée à Londres, elle jongle avec l’illustration et la réalisation de films d’animation pour des studios internationaux, créant des images, animées ou non, pour des magazines, des livres et des films, courts ou longs.</p>', ''),
(118, 'Harvey-Girard', 'Erik ', '<p>Erik Harvey-Girard est natif de Sept-Îles, il a étudié en biologie médicale à l’université du Québec à Trois-Rivières.  Par la suite, il déménage à Montréal afin d’obtenir un doctorat en Sciences Neurologiques de l’Université McGill. Il est aujourd’hui associé de recherche à l’université d’Ottawa où depuis plus de dix ans il étudie le lien entre le fonctionnement du cerveau et le comportement. Il est aussi chargé de cours à l’université du Québec à Gatineau et à l’université d’Ottawa.</p>', ''),
(119, 'Poirier', 'Stéphane', '<p>Enfant, Stéphane Poirier était fasciné par les livres scientifiques illustrés, qui abondaient dans sa maison. C’est ainsi qu’il explique sa double passion pour l\'illustration et la science, même encore aujourd’hui. Stéphane Poirier s’est d’abord formé en architecture à l\'université, avant de se tourner vers l\'illustration. Il a travaillé pour les milieux du web, de l\'animation et des installations interactives, participant à de nombreux projets. Par la suite, il a aussi collaboré à des installations permanentes dans des musées, produit des oeuvres de design, de signalétique et d’affichage. Aujourd’hui, il vit et travaille à Montréal avec sa famille.</p>', ''),
(120, 'Laverdure', 'Bertrand ', '<p>Bertrand Laverdure est poète, romancier, journaliste littéraire, performeur. Ses deux derniers livres : La chambre Neptune et Comment enseigner la mort à un robot ? explorent le monde qui change, grevé par les avancées inquiétantes et tout à la fois phénoménales de la technique et des inventions robotiques.  Il a obtenu le prix Joseph S. Stauffer, décerné par le Conseil des arts du Canada en 1999 et il a été Poète de la Cité à Montréal de 2015 à 2017.</p>', ''),
(121, 'Nadeau', 'Janice ', '<p>Janice Nadeau se forme au design graphique à l’Université du Québec à Montréal et à l’École supérieure des arts décoratifs de Strasbourg (France). Elle a travaillé comme directrice artistique au sein de différentes organisations. Aux éditions la Pastèque, elle publie Harveyavec Hervé Bouchard en 2009, qui a remporté le Prix du Gouverneur Général en 2009.</p>', 'https://www.janicenadeau.com/bio/'),
(122, 'Dumas', 'Ève', '<p>Ève Dumas est née à Montréal il y a une trentaine d’années, mais a grandi dans la capitale fédérale. Elle a fait des études littéraires à l’Université d’Ottawa tout en travaillant comme correctrice et journaliste au quotidien Le Droit. À l’emploi de La Presse depuis 2001, où elle a longtemps écrit sur le théâtre, elle fait aujourd’hui partie de l’équipe du cahier Actuel. Heureuse lauréate du prix du journalisme de la Fondation canadienne de naturisme pour l’année 2007, elle ne recule devant aucun sujet de reportage.</p>', ''),
(123, 'Léveillée', 'Francis ', '<p>Francis Léveillée est descendu de son tracteur pour faire des études de design graphique à l’UQAM. Il a aussi passé un an à Paris, dans une école d’art graphique. À l’emploi de La Presse depuis 2003, comme graphiste et illustrateur, il met son trait original au service de nombreux reportages. On peut aussi voir ses illustrations dans plusieurs magazines québécois, canadiens et américains, dont Urbania, Nuvo, Cottage Life et Nylon. Son travail lui a valu de nombreux prix aux concours Lux, Grafika, Applied Arts et Society for News Design.</p>', ''),
(124, 'Blanchet', 'Pascal ', '<p>est né à Trois-Rivières en 1980. Il possède un intérêt marqué pour le design du 20e siècle, l’architecture et le jazz. Illustrateur autodidacte, il réalise des illustrations pour des journaux et magazines américains et canadiens. Il a notamment travaillé pour Penguin Book, The San Francisco Magazine, The New-Yorker et le National Post.</p>', 'https://www.facebook.com/Pascal-Blanchet-Illustrateur-138744512877595/'),
(125, 'Lafleur', 'Stéphane ', '<p>Réalisateur parmi les plus prolifiques de la «jeune génération», Stéphane Lafleur a déjà signé plus d\'une trentaine de courts métrages indépendants. Membre fondateur du mouvement Kino, Stéphane est à la fois cinéaste, monteur et musicien.  En 2007, son premier long métrage, Continental, un film sans fusil, est présenté en première mondiale au prestigieux Festival de Venise dans la section «Venice Days». Stéphane Lafleur est aussi la voix et l’auteur des textes du groupe folk/country Avec pas d’casque.  Mon ami Bao est son premier livre.</p>', ''),
(126, 'Maurey', 'Katty ', '<p>Établie à Montréal, Katty Maurey est illustratrice et designer. Ses oeuvres explorent les coulisses du quotidien, des hobbies et des traditions. En fille attentive, elle prend soin d\'arroser ses plantes tous les matins.  Mon ami Bao est son deuxième livre publié à la Pastèque.</p><p>Autre livre de Katty Maurey à La Pastèque: Renaud le petit renard.</p>', 'https://kattymaurey.com/'),
(127, 'Barraud', 'Marion ', '<p>Marion Barraud est une illustratrice et autrice de bande dessinée originaire de Nantes. Après des études en graphisme, c\'est finalement vers l\'illustration qu\'elle choisit de se tourner. Elle travaille d\'abord pour la presse, avant de se tourner vers la bande dessinée et le livre pour enfants. Curieuse, elle aime également apposer ses illustrations sur des supports différents tels que la carte, l\'affiche et les objets en volume.</p>', ''),
(128, 'Cloutier', 'Fabien', '<p>Diplômé en interprétation du Conservatoire d’art dramatique de Québec en 2001, Fabien Cloutier est auteur, conteur, metteur en scène et comédien.</p>', 'https://fabiencloutier.com/'),
(129, 'Lepage', 'Catherine', '<p>Catherine Lepage a étudié le graphisme puis s’est perfectionnée en illustration à l’École supérieure des arts décoratifs de Strasbourg. Après plusieurs années comme directrice artistique dans des agences de publicité, elle a cofondé Ping Pong Ping, un studio créatif oeuvrant principalement dans le domaine culturel. En tant qu\'autrice, elle a écrit et illustré de nombreux livres, tant pour les enfants que pour les adultes. En 2019, elle a réalisé Le mal du siècle, un court-métrage d’animation produit à l’ONF.</p>', 'http://www.catherinelepage.com/'),
(130, 'Beliaev', 'Roman', '<p>Roman Beliaev est né à Moscou, où il vit toujours. Il est diplômé de la British Higher School of Art and Design. Il travaille dans la publicité, spécialisée dans la création de personnages et les affiches de films. Il a toujours voulu répondre aux questions qui l’intriguaient dans son enfance sous une forme simple et intéressante. </p>', ''),
(131, 'Delinte', 'Geoffrey', '<p>Geoffrey Delinte est né à La Louvière en 1989. Après avoir étudié la bande dessinée à Jemappes et Tournai, il se lance, parallèlement à la BD, dans le métier d\'animateur bibliothécaire au Centre de Lecture Publique du Mont-de-l\'Enclus.  Désireux de toucher aux différentes facettes des métiers du livre, il fonde en 2016, avec son compagnon d\'atelier Rémy Benjamin puis avec Valfret, la structure de micro-édition, Kaput.</p><p>Après quelques publications dans divers fanzines et dans la presse, il publie son premier album aux éditions La Pastèque, La grande métamorphose de Théo, avec Marzena Sowa au scénario.</p>', 'https://geoffreydelinte.tumblr.com/'),
(132, 'Sowa', 'Marzena', '<p>Née en Pologne en 1979, Marzena Sowa arrive en France en 2001 à l\'université Michel de Montaigne à Bordeaux pour terminer ses études de lettres modernes commencées à Cracovie. En 2004, elle scénarise le premier tome de Marzi, publié chez Dupuis. Reconnue internationalement, cette autobiographie dessinée est nominée aussi bien au Festival de la BD d\'Angoulême qu\'au Prix Eisner. En 2013, elle publie chez Aire Libre N\'embrassez pas qui vous voulez avec Sandrine Revel. L\'année suivante, elle scénarise L\'insurrection avec le dessinateur polonais.</p><p>Parallèlement à son travail de scénariste, Sowa traduit des bandes dessinées, entre autres: Les Cahiers Ukrainiens et Les Cahiers Russes de Igort, en 2013, chez l\'éditeur polonais Timof Comics.</p>', '');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'bandes dessinées'),
(2, 'bd jeunesse'),
(3, 'livres illustrés'),
(4, 'albums jeunesse'),
(5, 'documentaires'),
(6, 'divers');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(100) NOT NULL,
  `l_evenement` varchar(2000) DEFAULT NULL,
  `date` date NOT NULL,
  `galerie_boutique` tinyint(1) NOT NULL,
  `lien_facebook` varchar(100) NOT NULL,
  `lien_instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `titre`, `l_evenement`, `date`, `galerie_boutique`, `lien_facebook`, `lien_instagram`) VALUES
(1, 'Un nouveau balado!', 'La Pastèque et La puce à l’oreille sont fières de présenter une série de balados en six épisodes, inspirée de l’univers unique de Guillaume Perreault ! \r\nToute la famille sera heureuse de retrouver Bob, le personnage principal de la bande dessinée culte Le facteur de l’espace, dans cette version audio originale et déjantée. \r\nLa série propose une adaptation du premier tome de la série. On y retrouve Bob, le facteur spatial, pour qui le travail et la routine sont bien importants. Mais voilà que Patron décide de changer les horaires et les trajets de livraison… Bob devra visiter de nouvelles planètes. Pas le choix d’y aller… car après tout, le courrier, c’est sacré ! \r\nL’humoriste Charles Beauchesne, découvert grâce à son balado Les pires moments de l’histoire, prête sa voix à Bob et plusieurs autres rigolos personnages. \r\nFrancis Thibault signe la réalisation du projet audio et Alexandre Craig, la musique originale. Les textes sont de Guillaume Perreault, Alexandre Craig et Francis Thibault. La série est disponible dès maintenant sur le site de La puce à l’oreille, ainsi que plusieurs plateformes d’écoute de balados, telles Baladodiffusions d’Apple et Google Music. \r\nBonne écoute!', '2023-10-14', 0, 'www.facebook.com', 'www.instagram.com'),
(2, 'La liste des choses qui existent - La websérie!', 'Inspirée de la bande dessinée du même nom, La liste des choses qui existent met en scène les dessinatrices Cathon et Iris, deux filles curieuses et extravagantes qui partagent une véritable passion pour les objets du quotidien. \r\nL’humour complice des deux amies, l’étendue de leurs connaissances, mais aussi leur imagination débordante vous donneront envie d’en apprendre plus sur les objets qui nous entourent. Voyagez avec elles à travers l’histoire pour démystifier l’origine de certaines choses, comme l’ampoule électrique ou le pantalon. Mais… ne croyez pas tout ce qu’elles vous disent !\r\nEn ligne dès maintenant! \r\nRegardez l\'intégralité de la série sur les sites de l\'ONF ou de Télé-Québec. \r\n*Jetez un coup d\'oeil à notre compte Instagram pour du contenu supplémentaire!', '2023-12-09', 0, 'www.facebook.com', 'www.instagram.com'),
(3, 'L\'abeille à miel en balado!', 'Bzzzzz…. Bzzzzzzz! Tu entends? Une abeille approche... On compte 20 000 espèces d’abeilles dans le monde, et on en retrouve 800 juste au Canada et 1000 en France! Elles sont très importantes pour l\'équilibre de la nature, et leur travail est primordial!\r\nDans ce premier podcast issu d\'une coproduction des Éditions de La Pastèque et de La puce à l\'oreille, apprends en plus sur les abeilles, leur mode de vie, et leur fonction dans la nature! Ce podcast est un complément au superbe album L\'abeille à miel, d\'Isabelle Arsenault et Kirsten Hall, édité chez La Pastèque.\r\nVous pouvez écoutez le tout ici!\r\n', '2023-11-14', 0, 'www.facebook.com', 'www.instagram.com'),
(4, 'Le 12 août, j\'achète un livre québécois!', 'Pour le 12 août prochain, La Pastèque sort ses premiers titres du 2e semestre 2019! Retrouvez Quand je serai mort de Réal Godbout et Laurent Chabin, Les étoiles de Jacques Goldstyn, Objet perdu et Coup de vent de Cécile Gariépy! \r\nJacques Goldstyn sera présent à la Librairie Laliberté samedi le 10 août à 10h30 pour une animation jeunesse.\r\nRéal Gobbout et Laurent Chabin seront chez Planète BD samedi le 10 août à 14h pour un lancement/ dédicace.\r\nEt Cécile Gariépy sera à la Librairie Bric à brac, dimanche le 11 août à 10h pour une heure du conte.\r\nBonne journée du livre québécois! ', '2023-12-23', 0, 'www.facebook.com', 'www.instagram.com'),
(5, 'François Vigneault en France', 'François Vigneault, l\'illustrateur de 13e avenue sera présent en France en juin! Venez le rencontrer!', '2024-01-06', 0, 'www.facebook.com', 'www.instagram.com'),
(6, 'Paul à Montréal', 'Envie de faire une promenade originale à Montréal? \r\nL\'Arrondissement du Plateau-Mont-Royal donne une deuxième vie aux illustrations de Paul à Montréal, grâce à un nouveau parcours urbain de 3,8 km.\r\nSuivez-le guide ici!', '2023-11-01', 0, 'www.facebook.com', 'www.instagram.com'),
(7, 'Double lancement!', 'Jeudi le 19 septembre prochain, nous célébrons deux nouveautés: Gâteau aux pommes de Genevieve Godbout & Dawn Casey et Biomimétisme : La nature comme modèle d\'Emmanuelle Walker & Séraphine Menu.\r\nGeneviève et Emmanuelle seront sur place pour rencontrer les lecteurs et lectrices!\r\nNous vous attendons en grand nombre dès 17 h au 102 avenue Laurier Ouest à Montréal!', '2023-10-20', 1, 'www.facebook.com', 'www.instagram.com'),
(8, 'Lancement et vernissage!', 'Le 22 août prochain à partir de 17h00, La Pastèque souligne la publication de Les étoiles. Profitez-en pour découvrir notre nouvelle exposition sur le travail remarquable de Jacques Goldstyn!\r\n22 août 2019\r\n102 avenue Laurier Ouest\r\nÀ partir de 17h00', '2023-12-21', 1, 'www.facebook.com', 'www.instagram.com'),
(9, 'Double lancement!', 'Ne manquez pas notre lancement pour Traverser l\'autoroute de Julie Rocheleau & Sophie Bienvenu et Memoria de Jean-Paul Eid et Claude Paiement le jeudi 30 janvier prochain à partir de 17h00 au 102, avenue Laurier Ouest.', '2024-01-06', 1, 'www.facebook.com', 'www.instagram.com');

-- --------------------------------------------------------

--
-- Structure de la table `lapasteque`
--

CREATE TABLE `lapasteque` (
  `id` int(10) UNSIGNED NOT NULL,
  `info_1` varchar(300) DEFAULT NULL,
  `info_2` varchar(300) DEFAULT NULL,
  `info_3` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE `livres` (
  `id` int(10) UNSIGNED NOT NULL,
  `isbn_papier` varchar(13) DEFAULT NULL,
  `isbn_pdf` varchar(13) DEFAULT NULL,
  `isbn_epub` varchar(13) DEFAULT NULL,
  `url_audio` varchar(300) DEFAULT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `le_livre` varchar(1500) DEFAULT NULL,
  `arguments_commerciaux` varchar(1000) DEFAULT NULL,
  `statut` int(10) UNSIGNED NOT NULL,
  `pagination` varchar(45) DEFAULT NULL,
  `age_min` int(10) UNSIGNED DEFAULT NULL,
  `format` varchar(45) DEFAULT NULL,
  `tirage` int(10) UNSIGNED DEFAULT NULL,
  `prix_can` decimal(4,2) UNSIGNED DEFAULT NULL,
  `prix_euro` decimal(4,2) UNSIGNED DEFAULT NULL,
  `date_parution_quebec` date DEFAULT NULL,
  `date_parution_france` date DEFAULT NULL,
  `categorie_id` int(10) UNSIGNED DEFAULT NULL,
  `type_impression_id` int(10) UNSIGNED DEFAULT NULL,
  `type_couverture_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `livres`
--

INSERT INTO `livres` (`id`, `isbn_papier`, `isbn_pdf`, `isbn_epub`, `url_audio`, `titre`, `le_livre`, `arguments_commerciaux`, `statut`, `pagination`, `age_min`, `format`, `tirage`, `prix_can`, `prix_euro`, `date_parution_quebec`, `date_parution_france`, `categorie_id`, `type_impression_id`, `type_couverture_id`) VALUES
(1, '9782897770334', '', '', '', 'Lartigues et Prévert', '<p>Lartigues et Prévert sont difficiles à séparer. Ils tiennent une épicerie, y habitent, et font des piges ensemble pour des petits contrebandiers du coin. Quand un matin neigeux, ils découvrent un type agonisant dans le coffre de la voiture d\'une \"livraison\", ils prennent conscience que cette fois-ci, ça y est : leur vie monotone est en train de glisser vers le polar miteux. </p><p>Tandis que Prévert cherche à comprendre, pour Lartigues, l\'occasion est trop belle de tout recommencer - d\'ailleurs, loin de leur vie bien réglée, leur amitié ne pèse plus tant que ça.</p>', '<p>Lartigues et Prévert est le premier livre de Benjamin Adam à La Pastèque, après une collaboration remarquée au collectif Carton.</p><p>Livre incontournable de notre catalogue,Lartigues et Prévert à été sélectionné au Festival International de la bande dessinée d’Angoulême 2014 dans la sélection Polar.</p><p>Le titre est épuisé depuis un certain temps. Nous profitons de cette réimpression pour imprimer le livre en 4 Pantones au lieu d\'une quadrichromie et la couverture aura une jaquette à jeter par terre!</p>', 1, '134', 0, '21,6 x 29,2', 0, 27.95, 21.00, '2018-06-01', '2018-01-01', 1, 1, 1),
(2, '9782923841502', '', '', '', 'Deux milligrammes', '<p>Il y a quelques années, Benjamin Adam a entrepris d’arrêter de fumer. L’auteur a consigné son expérience sur un blog puis en version papier.</p>', '<p>Publié initialement à 50 et à 200 exemplaires, deux milligrammes atterrit aujourd’hui dans la nouvelle collection Pomélo.</p><p>Deux milligrammes n’est pas une méthode pour arrêter de fumer mais un livre drôle, ludique et informatif — un titre était tout indiqué pour faire partie de notre collection de livre faussement pratiques!</p>', 1, '64', 0, '19 x 29,2', 0, 17.95, 15.00, '2024-01-01', '2023-12-01', 1, 2, 2),
(3, '9782897770815', '', '', '', 'Joker', '<p>Tous les dimanches, depuis des années, trois cousins se retrouvent pour griller trois poissons et jouer aux cartes. Plus précisément, à une variante du \"huit américain\". Dans la version classique, celui qui pose un 8 peut échanger son jeu avec celui d\'un adversaire. Herb, Jed et Hawk ont ajouté un paramètre : celui qui pose un joker peut échanger son jeu et sa vie entière jusqu\'au dimanche suivant.</p><p>De cet échange initial en découleront d\'autres, telle une réaction en chaîne : on y verra deux soeurs s\'enfuir, un oculiste inquiet, un petit garçon partir et revenir, un homme prendre la foudre, un journal se créer et une entreprise vaciller…</p>', '<p>Épuisé depuis un certain moment, nous profitons de cette réimpression pour changer le format et le finition du livre. </p>', 1, '128', 0, '21,6 x 31,4', 0, 0.00, 0.00, '2022-09-01', '2022-05-01', 1, 3, 1),
(4, '9782897770358', '', '', '', 'Enfer portatif', '<p>Pierre l’aveugle et Paul le cul-de-jatte forment un duo peu ragoûtant. La vie ne les a pas gâtés, mais il faut bien s\' entraider. Et comme ils passent régulièrement la nuit au poste, il faudra l’intervention bénéfique et totalement désintéressée de Barbara Casablanca pour les sortir de la rue. Mais le traitement de faveur de la brave dame, branchée macrobiotique, se révèle bien pire encore que les humiliations des policiers... Un conte noir et grinçant, aux personnages improbables, dignes représentants des zones d’ombre de l’âme humaine.</p>', '<p>Originalement publié en 2003 chez Casterman, Enfer portatif rejoint le catalogue de la Pastèque!</p><p>Oeuvre incontournable de François Ayroles, ce récit n’a rien perdu de son caractère incisif et est plus que jamais d’actualité.</p>', 1, '124', 0, '21,6 x 28', 0, 24.95, 19.00, '2019-06-01', '2019-03-06', 1, 3, 1),
(5, '9782923841939', '', '', '', 'Ivanhoé Backus', '<p>La vie du jeune Ivanhoé Backus est rythmée par le travail de la vigne que son père, Gaspard, perpétue religieusement dans la lignée de ses ancêtres. Gaspard Backus a, pour ce faire, une seule et unique fortune : un magnifique tonneau de chêne légué par ses ainés. Mais cette année une nouvelle coutume a lieu ;  Ivanhoé est désormais en âge d\'aider son père. La tradition veut que le fils du vigneron s\'introduise dans le tonneau pour le nettoyer de fond en comble. Hélas, rien ne se passe comme prévu et Ivanhoé reste bloqué.</p><p>Dépassé par les événements et obsédé par son vin, le père décide de laisser son fils prisonnier, et réussit à produire un délicieux breuvage. Les années passent et cet étrange rite s\'installe, jusqu\'au jour où Ivanhoé parvient à quitter sa cage de bois…</p>', '', 1, '116', 0, '19,7 x 27,3', 0, 27.95, 21.00, '2020-04-09', '2020-02-09', 1, 4, 1),
(6, '9782897770022', '', '', '', 'La ligne la plus sombre', '<p>La ligne la plus sombre retrace les aventures d’un écrivain qui voit ses vacances dans le Maine interrompues par un coup de fil qui changera sa vie. </p>', '<p>Illustré par Mélanie Baillairgé, La ligne la plus sombre décline avec précision et tendresse l’univers d’Alain Farah qui poursuit, avec ce nouveau livre, un projet autobiographique entamé il y a une dizaine d’années. Narrateur de sa propre histoire, Farah se met en scène dans un livre insituable, à la fois poème romantique et baroque, bande dessinée pseudo-politique, comédie romantique refoulée.</p>', 1, '96', 0, '21,6 x 27,9', 0, 23.95, 19.00, '2016-10-01', '2016-07-01', 1, 5, 1),
(7, '9782897770211', '', '', '', 'Voyage au centre de la Terre', '<p>À la suite de la découverte d\'un manuscrit runique ancien par un savant allemand, ce dernier, avec son neveu et leur guide, entreprennent un voyage vers le centre de la Terre en y entrant par un volcan islandais éteint, le Sneffels.</p>', '<p>Écrit par Jules Verne en 1864, ce roman d’aventures est un classique de la littérature. L’italien Matteo Berton travaille sur cette adaptation depuis trois ans.</p>', 1, '112', 0, '19,7 x 25,4 ', 0, 27.95, 21.00, '2024-01-01', '2023-11-01', 1, 1, 1),
(8, '9782897770112', '', '', '', 'Le 7e vert', '<p>Le temps d’une partie de golf, un fils tente de se rapprocher de son père afin d’obtenir des réponses à des questions restées longtemps sans réponse.</p>', '<p>Avec un dessin mature et émotif, Paul Bordeleau réussit à nous faire entrer dans l’intimité d’une famille éprouvée avec humanisme et délicatesse.</p><p>Après 7 ans d’absence, c\'est le grand retour de Paul Bordeleau!</p>', 1, '96', 0, '20,3 x 29,8 ', 0, 26.95, 22.00, '2017-03-01', '2017-01-01', 1, 4, 1),
(9, '9782897770587', '', '', '', 'Nausées matinales et autres petits bonheurs', '<p>Lorsqu’on parle de grossesse, on entend bien des choses. Certaines sont vraies alors que d’autres semblent tout droit sorties d’un film de science-fiction! Comment démêler les mythes de la réalité?</p>', '<p>Forte de son expérience, Boum nous présente une bande dessinée qui devrait répondre à toutes vos questions ou presque…</p>', 1, '88', 0, '17,2 x 21,6', 0, 19.95, 16.00, '2019-10-01', '2019-06-01', 1, 4, 1),
(10, '9782923841663', '', '', '', 'André le Géant - La vie du Géant Ferré', '<p>André René Roussimoff de son vrai nom, est né à Coulommiers en 1946. Son physique hors-norme (2,24 m - 235 kg) lui a valut le surnom de la Huitième merveille du monde. Il est connu pour son travail à la fédération de lutte américaine, la World Wrestling Federation, et il est considéré comme l\'un des plus grands lutteurs de l\'histoire. Mort en 1993, il est à titre posthume le premier homme à être introduit au Hall of Fame de la WWF peu de temps après son décès.</p>', '<p>Avec André le Géant, Box brown nous offre le portrait remarquable d’une véritable icône de la culture nord-américaine.</p>', 1, '240', 0, '15,2 x 21,6', 0, 23.95, 19.00, '2024-05-01', '2024-01-01', 1, 3, 2),
(11, '9782897770143', '', '', '', 'Tetris - Jouer le jeu', '<p>C’est, peut-être, le jeu vidéo parfait. Simple, mais addictif.  Tetris est un casse-tête inépuisable qui accroche et, surtout, garde le joueur en otage.  Jouez longtemps et vous verrez ces formes géométriques colorées partout autour de vous.  Même dans vos rêves.</p>', '<p>Box Brown démêle ici les fils d’une histoire complexe en s’interrogeant sur les répercussions qu’ont les jeux sur l’art, la culture et le milieu des affaires. Pour la première fois, et de manière exhaustive, Tetris — Jouer le jeu raconte les dessous de la création du jeu vidéo le plus populaire au monde.</p>', 1, '248', 0, '15,2 x 20,3', 0, 24.95, 19.00, '2017-06-01', '2017-02-01', 1, 2, 2),
(12, '9782897770549', '', '', '', 'Cannabis - La criminalisation de la marijuana aux États-Unis', '<p>Mexique, 1519. Pendant les conquêtes espagnoles, Cortés, engagé dans une violente campagne coloniale, introduit la culture du chanvre. En secret, des autochtones commencent à cultiver la plante dans le but de la consommer. Par le truchement de la main-d’œuvre immigrante, cette dernière gagne les États-Unis et fait des adeptes parmi les ouvriers noirs. Rapidement, les législateurs américains s’attaquent au cannabis, perçu comme le vice des « races inférieures ».</p><p>On assiste alors au déploiement d’une propagande visant à susciter un climat de panique à propos d’une plante utilisée sans problème depuis des millénaires. Le cannabis est rangé parmi les substances du tableau I, où figurent des drogues comme l’héroïne. On ouvre ainsi la porte à la « guerre contre les drogues », qui cible les jeunes Noirs en nombre disproportionné et entraîne des centaines de milliers d’incarcérations, souvent pour des infractions mineures. Fondée sur l’idée de la « folie induite par le pot » et des études trompeuses sur les effets du cannabis, la relation complexe des États-Unis avec la drogue, où s’observe une forte dimension raciale, se poursuit encore aujourd’hui.</p>', '<p>S’appuyant sur des recherches exhaustives, Box Brown explore en profondeur cette troublante histoire et propose un essai graphique riche et divertissant sur le legs des lois relatives au cannabis aux États-Unis.</p>', 1, '256', 0, '15,2 x 20,3', 0, 24.95, 20.00, '2024-07-01', '2024-03-01', 1, 3, 2),
(13, '9782922585964', '', '', '', 'Louis Riel', '<p>Publié en 2004 chez Casterman dans la collection Écritures, l’oeuvre maîtresse de Chester Brown retrouve une place de choix dans notre catalogue.</p><p>Chester Brown retrace la vie du chef métis Louis Riel, fondateur de la province du Manitoba,et plus précisément ses relations avec le gouvernement du Canada nouvellement établi.</p><p>La période relatée par Chester Brown débute aux prémices de la rébellion de la rivière Rouge de 1869, et se termine par la pendaison de Louis Riel pour haute trahison en 1885.</p>', '<p>L\'auteur a été récompensé en 2004 de trois Harvey Award pour son œuvre, la plus grande distinction pour la bande dessinée aux États-Unis.</p>', 1, '280', 0, '15,2 x 22,9', 0, 27.95, 23.00, '2012-03-01', '2012-01-01', 1, 3, 2),
(14, '9782897770372', '', '', '', 'Faire campagne - Joies et désillusions du renouveau agricole au Québec', '<p>Le monde rural est en plein essor au Québec. Une nouvelle génération d’agriculteurs tente de développer de meilleures manières de produire nos aliments. Grâce à ces jeunes familles qui délaissent la ville pour la campagne, des fruits et légumes oubliés, des fromages locaux, des viandes et charcuteries diversifiées fleurissent.</p><p>Mais comment survivre dans un système taillé pour l’agriculture industrielle ? Comment garder la foi malgré l’intransigeance des règles ? Ce projet de bande-dessinée reportage repose sur une enquête journalistique au long cours.</p><p>Veillant à tendre le micro à tous les acteurs en présence, Rémy Bourdillon a suivi pendant un an le combat quotidien d’une dizaine d’agriculteurs aux prises avec le seul et unique syndicat en place, l’Union des producteurs agricoles. À travers ces femmes et ces hommes, cette bande dessinée fait la lumière sur une situation unique à l’échelle mondiale.</p>', '<p>Collaboration inédite entre Atelier 10 et La Pastèque, Journalisme 9 est la première collection canadienne francophone dédiée au reportage, à l’enquête et au journalisme dessinés.</p>', 1, '144', 0, '20,3 x 26,7', 0, 23.95, 0.00, '2018-06-01', '2018-02-01', 1, 3, 2),
(15, '9782923841243', '', '', '', 'Deux généraux', '<p>En mars 1943, le grand-père de l\'auteur et son meilleur ami, tous deux officiers du Highland Light Infantry, sont envoyés outre-mer avec leur régiment. Quelques mois plus tard, ils prendront part à l\'une des opérations militaires les plus marquantes de la Seconde Guerre mondiale: l\'invasion de la Normandie par les Alliés.</p><p>Méticuleusement documenté et magnifiquement illustré, Deux généraux est un récit poignant et une touchante histoire d\'amitié. Une histoire brutale, mais convaincante, qui illustre avec les horreurs de la guerre la bravoure de ceux qui ont combattu et nous rappelle le respect que nous leur devons.</p>', '<p>Scott Chantler rend hommage à son grand-père mais aussi à tous ces hommesordinaires pris dans des circonstances extraordinaires. Publié en anglais en 2010 et chaudement accueilli par la critique, Two generals a été sélectionné pour les prestigieux prix Eisner et Joe Shuster.</p>', 1, '152', 0, '15,2 x 22,9', 0, 23.95, 20.00, '2024-08-01', '2024-07-01', 1, 4, 2),
(16, '9782923841571', '', '', '', 'Gilles La Jungle', '<p>Né en 1984 de la plume délirante de Claude Cloutier dans les pages du mensuel Titanic (publication soeur du magazine Croc) et inspiré du roman-photo kitsch Kimba, Gilles La Jungle est beaucoup plus près de l’humour disjoncté des Lundis des ha! ha! que du héros d’Edgar Rice Burroughs.</p><p>Flèches empoisonnées au Cheez Whiz, traîtres à temps partiel et génies du crime vêtus de collants mi-polyester, mi-coton (l’uniforme des criminels internationaux), le danger guette l’impérissable Roi de la Jungle dans chaque recoin de la savane...</p>', '', 1, '48', 0, '22,9 x 30,5', 0, 23.95, 19.00, '2014-04-01', '2014-01-01', 1, 2, 1),
(17, '9782923841717', '', '', '', 'La légende des Jean-Guy', '<p>Il y a belle lurette, dans un royaume enchanteur que l’on nomme aujourd’hui Longueuil, vivaient tout plein d’animaux tous plus épais les uns que les autres. Parmi eux, se nourrissant de Kraft Dinner sauvage, les Jean-Guy s’adonnaient à leurs deux principales occupations: la culture et le sexe...</p>', '<p>Parue pour la première fois dans les pages du magazine Croc dans les années 90, La légende des Jean-Guy est un classique de la bande dessinée québécoise que nous rééditons aujourd’hui.</p>', 1, '56', 0, '22,9 x 30,5 ', 0, 19.95, 16.00, '2015-05-01', '2015-01-01', 1, 3, 2),
(18, '9782922585827', '', '', '', 'Carton', '<p>Ce livre regroupe les travaux de John Martz, Benjamin Adam, Nicolas Mahler, Pascal Blanchet, Pascal Girard, Edouard H. Bond et Mélanie Baillairgé.</p><p>Pas de baise ou de dessins explicites dans ce carton! Loin des clichés et des idées préconçues de la bande dessinée érotique, Carton propose une lecture originale et une nouvelle approche du livre collectif et de la sexualité; la découverte d’une boîte de magazines cachée sous un lit entrainera le lecteur dans la peau des protagonistes du récit!</p>', '<p>De l’acousticophile aux marins allemands, découvrez ce qui a été caché dans ce carton!</p>', 1, '60', 0, '19,1 x 25,4', 0, 19.95, 16.00, '2011-02-01', '2010-12-01', 1, 6, 2),
(19, '9782922585858', '', '', '', 'Mon petit nombril', '<p>Difficile de résister au talent de cet illustrateur qui, en quelques coups de crayon, parvient à résumer de brillante façon les paradoxes et les subtilités de la vie !</p>', '<p>Mon petit nombril fut avant tout le contenu d’un blog dessiné quotidiennement par l’auteur.  Le livre rassemble les meilleures planches du Web ainsi que des inédits pour former un ouvrage original qui vous enchantera à coup sûr!</p>', 1, '88', 0, '22,2 x 29,8', 0, 21.95, 18.00, '2009-10-01', '2009-07-01', 1, 3, 2),
(20, '9782922585865', '', '', '', '184 rue Beaubien', '<p>Un jeune Français décide de changer de vie. Destination : Montréal, Québec. Dans sa valise : papier, crayons et plumes pour plus tard. Pour le moment il s\'agit de trouver un travail, puis un logement…</p>', '<p>Cyril Doisneau nous convie à découvrir et à suivre son quotidien de nouvel immigrant…</p>', 1, '64', 0, '19,1 x 25,4', 0, 16.90, 14.00, '2009-05-01', '2009-02-01', 1, 3, 3),
(21, '9782923841205', '', '', '', 'Le Havre - New York', '<p>Dans les années 60, deux filous pensent trouver le bonheur en Amérique. À bord du France, ils font cap vers New York. À bord, diverses péripéties les jettent hors des sentiers battus. Engagés comme larbins par une chanteuse à la mode, ils vivront une traversée... de tout repos!</p>', '<p>Dans son troisième livre à La Pastèque (et premier récit de fiction), Cyril Doisneau nous offre l\'aventure charmante de deux petits voleurs sur l’océan, en route vers le rêve américain.</p>', 1, '68', 0, '21,6 x 29,2', 0, 19.95, 16.00, '2012-11-01', '2012-09-01', 1, 2, 1),
(22, '9782923841755', '', '', '', '31 jours de tournage', '<p>Cyril Doisneau a été présent sur les 31 jours de tournage de l’adaptation cinématographique de Paul à Québec de Michel Rabagliati.  Témoin privilégié, il partage avec nous son expérience à  travers dessins, anecdotes et bandes dessinées.  </p>', '<p>31 jours de tournage vous fera vivre les hauts et les bas d’un plateau de tournage historique.  Une autre façon de s’imprégner de l’univers de Paul!</p>', 1, '72', 0, '19,1 x 25,4', 0, 19.95, 0.00, '2012-09-01', '2012-07-01', 1, 7, 2),
(23, '9782923841977', '', '', '', 'Carnets de bouffe', '<p>Il y a deux ans, Cyril Doisneau a débuté des chroniques culinaires pour divers supports. Carnets de bouffe regroupe tout ce travail pour en faire un livre qui célèbre la nourriture et la restauration.  </p>', '<p>Retrouvez le Pastaga, la pâtisserie Rhubarbe, le Pied bleu ou la brasserie Magnan et laissez vos papilles être séduites par le cochon ou l’ortolan!</p>', 1, '64', 0, '20,3 x 26,7', 0, 18.95, 15.00, '2016-09-01', '2016-07-01', 1, 4, 1),
(24, '9782923841922', '', '', '', 'La femme aux cartes postales', '<p>1957. Rose quitte sa Gaspésie natale en laissant, derrière elle, une lettre sur son oreiller. Elle n’a qu’un rêve en tête: briller sur les scènes des prestigieux cabarets de la métropole. À cette époque, Montréal est un haut lieu de la vie nocturne et l’une des escales obligées des plus grands jazzmen. Les nightclubs brillent de tous leurs feux et la mafia fait des affaires d’or. Mais l’arrivée du rock’n’roll, l’engouement pour la télévision et l’élection du jeune et incorruptible maire Jean Drapeau va sonner le glas de cet âge d’or.</p><p>2002. En Gaspésie, un étranger vient d’acquérir une maison abandonnée mise aux enchères; photos aux murs, vieux piano désaccordé et au fond d’un garde robe, un terrible secret de famille…</p>', '', 1, '232', 0, '22,9 x 29,2', 0, 29.95, 23.00, '2016-04-01', '2016-01-01', 1, 3, 2),
(25, '9782897770785', '', '', '', 'Memoria', '<p>Memoria est une ville qui n’existe pas. Offerte par la compagnie Brainstorm, cette destination virtuelle à l\'image du New York des années 30 permet aux touristes du futur d’assouvir leurs désirs les plus inavouables dans la plus grande impunité. Mais dans les coulisses de ce décor factice plane l’ombre d’un monstre numérique.</p>', '<p>Vingt ans après sa première parution, non seulement le diptyque Le naufragé de Memoria n’a pas pris une seule ride, mais il est plus actuel que jamais. Le voici enfin publié en version intégrale.</p>', 1, '128', 0, '22,2 x 30,5', 0, 32.95, 26.00, '2020-01-01', '2019-12-01', 1, 4, 4),
(26, '9782897770433', '', '', '', 'Calfboy', '<p>Chris Birden a un problème, il ne se rappelle plus trop où il a enterré le butin de leur dernier braquage de train. Il promet à son frère de retrouver l’argent en trois jours, ce qui semble à première vue facile à réaliser. Mais la rencontre d’un orphelin, d’une voleuse de chevaux et de quelques indiens compliquera un peu les choses…</p>', '<p>Un premier livre pour Rémi Farnos la Pastèque!</p>', 1, '72', 0, '24,1 x 31,8', 0, 23.95, 18.00, '2018-11-01', '2018-09-01', 1, 4, 1),
(27, '9782922585889', '', '', '', 'Jimmy et le Bigfoot', '<p>Jimmy et le Bigfoot est l’histoire d’un adolescent, devenu une vedette bien malgré lui sur Youtube à cause d’une vidéo où on peut le voir danser... Le pauvre Jimmy doit aussi jongler avec l’amitié, l’amour, vivre en région et un Bigfoot sur les Monts-Valins. Vaste programme pour ce jeune adolescent...</p>', '<p>Pascal Girard propose avec son deuxième livre à la Pastèque une oeuvre au ton juste avec des dialogues qui font mouche, servi par un dessin ultra précis; une chronique adolescente douce-amère finement ciselée.</p>', 1, '48', 0, '19,1 x 25,4', 0, 16.95, 14.00, '2009-09-01', '2009-07-01', 1, 4, 1),
(28, '9782897770204', '', '', '', 'Valentin', '<p>Une petite ville, une rue paisible; des enfants qui jouent au hockey, un chien qui essaie d’attraper la balle. De la fenêtre de sa cuisine, Stéphanie, 34 ans, vêtue d’un pantalon de jogging et d’un tee-shirt, observe les enfants qui jouent tout en finissant de préparer un copieux déjeuner. La mine rêveuse, elle sourit tristement: son chum, allergique aux chats, l’a mise au défi... Stéphanie choisira le chat.</p>', '<p>Première incursion d’Yves Pelletier dans la bande dessinée et troisième titre de Pascal Girard à La Pastèque. Valentin devrait plaire aux agents d’immeubles, aux pigistes, aux chats et faire la promotion des antihistaminiques.</p>', 1, '136', 0, '16,5 x 22,9', 0, 21.95, 17.00, '2017-08-01', '2017-05-01', 1, 4, 2),
(29, '9782923841519', '', '', '', 'La collectionneuse', '<p>Voici le grand retour du dessinateur névrosé et maladroit!  Le pauvre Pascal vient de se faire larguer par sa blonde et squatte une chambre chez un couple d’amis.  Indifférent au dessin, en manque de sérotonine, incapable de courir à cause d’une entorse lombaire, il retourne sur les chantiers comme apprenti-ferblantier. Bref, l’heure est au bilan.</p>', '<p>Pascal a beau faire des plans et vouloir atterrir sur ses pieds, une rencontre fortuite avec une cleptomane de livres transforme notre antihéros en Sherlock Holmes de fortune…</p>', 1, '112', 0, '15,2 x 22,9', 0, 16.95, 14.00, '2014-01-01', '2013-11-01', 1, 3, 2),
(30, '9782897770396', '', '', '', 'Conventum', '<p>Pascal mène une petite vie tranquille, jusqu’au jour où il reçoit une invitation pour une soirée de retrouvailles avec ses anciens camarades du secondaire. L’angoisse monte instantanément ! Il se sent gros et vieux, bien loin de l’image de gagnant qu’il aimerait donner. Course à pied, régime, nouvelle garde-robe, il se donne à fond pour être à la hauteur.</p><p>Mais est-ce que tout ceci sera suffisant, ou Pascal se mettra les pieds dans les plats (ou dans la bouche) ?</p>', '<p>Initialement publié chez Delcourt il y a quelques années, c\'est avec un grand plaisir que nous rendons à nouveau disponible ce classique de Pascal Girard!</p>', 1, '168', 0, '16,5 x 22,9', 0, 21.95, 18.00, '2018-08-01', '2018-05-01', 1, 3, 2),
(31, '9782897770495', '', '', '', 'Paresse', '<p>La Pastèque réédite dans un nouveau format, sous une nouvelle couverture, le 1er livre de Pascal Girard!</p><p>Au cours de l\'année 2008, l\'auteur à réalisé une bande dessinée de façon quotidienne sur son site internet. L’exercice à duré six mois à raison d’un strip par jour!</p>', '<p>Avec son style graphique qui peut faire passer Sempé pour un pointilliste et son humour direct et efficace, Pascal Girard rate rarement sa cible. En quelques traits, il réussit avec quatre cases de magnifiques petits instantanés.</p><p>Voici donc la somme de six mois de paresse...</p>', 1, '80', 0, '21,3 x 25,4', 0, 16.95, 14.00, '2019-02-01', '2018-12-01', 1, 3, 2),
(32, '9782923841359', '', '', '', 'L\'Amérique ou le disparu', '<p>Réal Godbout a songé à adapter L’Amérique en bande dessinée il y a plus de 35 ans. À l’époque, le roman l’avait beaucoup marqué. Il avait lu aussi quelque part que Federico Fellini envisageait de le porter à l’écran, ce qui lui avait donné à penser qu’on pouvait en tirer quelque chose. Fellini n’a jamais fait le film, mais il a quand même utilisé l’idée dans Intervista, fiction autobiographique le montrant en train de tourner L’Amérique. À l’époque, il croyait sans doute être le seul à avoir cette idée. Il a constaté depuis que Kafka, malgré son côté supposément grave et cérébral, voire sinistre, se prêtait bien à la bande dessinée…</p>', '<p>Dans cette adaptation, l’auteur a cherché à rester aussi fidèle que possible au roman, en respectant généralement le récit, les personnages et l’esprit de l’auteur. Contrairement à un préjugé trop répandu sur Kafka, il ne s’agit pas d’une œuvre sombre et sinistre, mais d’un récit vivant et imagé, avec une touche d’humour absurde. L’écriture de Kafka peut sembler froide et détachée. Mais cela ne l’empêche pas de provoquer l’émotion (et parfois le rire) chez le lecteur !</p>', 1, '184', 0, '19,7 x 26', 0, 27.95, 24.00, '2013-04-01', '2013-01-01', 1, 3, 2),
(33, '9782922585971', '', '', '', 'Michel Risque - L\'intégrale vol. 1', '<p>Créé en 1975 dans les pages de La Barre du jour, Michel Risque est le premier héros moderne de la bande dessinée québécoise.</p><p>Nous poursuivons un important travail patrimonial en publiant le premier volume de l’intégrale de Michel Risque. Sur la table de travail depuis 3 ans maintenant, ce livre voit enfin le jour dans sa forme la plus aboutie.</p>', '<p>Le premier volume regroupe la majorité des planches inédites du tandem Godbout-Fournier ainsi que les deux premières aventures: Le savon maléfique et Michel Risque en vacances.  192 pages de bandes dessinées, dans une maquette exceptionnelle réalisée par Feed. Le deuxième et dernier volume sortira en 2018.</p>', 1, '192', 0, '22,9 x 30,5', 0, 34.95, 26.00, '2014-07-01', '2014-04-01', 1, 7, 1),
(34, '9782923841229', '', '', '', 'Red Ketchup - Intégrale volume 1', '<p>La réédition intégrale d’une des oeuvres majeures de la bande dessinée québécoise. Red Ketchup n’a pas pris une ride depuis ses premières aventures en 1982. Personnage phare d’un tandem légendaire de la bande dessinée québécoise, Red Ketchup casse la baraque depuis plus de 30 ans. Godbout et Fournier signent avec lui une satire percutante de l\'Amérique plus-que-profonde, sur trame d’aventures de tous les excès.</p>', '', 1, '152', 0, '21,6 x 28,6', 0, 34.95, 27.00, '2012-04-01', '2012-01-01', 1, 4, 1),
(35, '9782923841694', '', '', '', 'Red Ketchup - Intégrale volume 2', '<p>La réédition intégrale d’une des oeuvres majeures de la bande dessinée québécoise. Red Ketchup n’a pas pris une ride depuis ses premières aventures en 1982. Personnage phare d’un tandem légendaire de la bande dessinée québécoise, Red Ketchup casse la baraque depuis plus de 30 ans. Godbout et Fournier signent avec lui une satire percutante de l\'Amérique plus-que-profonde, sur trame d’aventures de tous les excès.</p>', '', 1, '152', 0, '21,6 x 28,6', 0, 34.95, 28.00, '2015-03-01', '2015-01-01', 1, 4, 1),
(36, '9782897770679', '', '', '', 'Red Ketchup - Intégrale volume 3', '<p>La réédition intégrale d’une des oeuvres majeures de la bande dessinée québécoise. Red Ketchup n’a pas pris une ride depuis ses premières aventures en 1982. Personnage phare d’un tandem légendaire de la bande dessinée québécoise, Red Ketchup casse la baraque depuis plus de 30 ans. Godbout et Fournier signent avec lui une satire percutante de l\'Amérique plus-que-profonde, sur trame d’aventures de tous les excès.</p>', '<p>Ce troisième et dernier volume reprend les titres suivants: Échec au King, Red Ketchup en enfer et Élixir X.</p>', 1, '152', 0, '21,6 x 28,6', 0, 34.95, 28.00, '2019-11-01', '2019-09-01', 1, 4, 1),
(37, '9782897770730', '', '', '', 'Quand je serai mort ', '<p>Que faire quand on sort de prison après 10 ans, victime d\'une machination particulièrement sordide? Revivre? Difficile… Mourir, plutôt. Mais on ne voudrait pas partir seul. On voudrait entraîner avec soi l\'amour, le Stade olympique ou la démocratie... Ou bien, à défaut, quelques ordures qui le méritent bien.</p><p>Quand je serai mort, c\'est la pitoyable revanche de ceux qui ont tout perdu et qui le savent. Et c\'est Montréal, aussi, la ville merveilleuse qui craque de partout, avec son maquillage qui coule et ses dessous pas très propres...</p>', '<p>6 ans après L\'amérique ou le disparu, voici le grand retour de Réal Godbout en compagnie de Laurent Chabin. Le duo nous offre un polar dur, campé dans Saint-Henri…</p>', 1, '80', 0, '20,3 x 26,7', 0, 21.95, 18.00, '2019-08-01', '2019-05-01', 1, 3, 2),
(38, '9782923841144', '', '', '', 'Les derniers corsaires', '<p>Au XXe siècle, les corsaires existent toujours. Ils surgissent maintenant des profondeurs…</p><p>Le lieutenant Wolff fut l’un des commandants de sous-marins des plus redoutés lors de la deuxième guerre mondiale. Surnommé Le roi des loutres, il établira un record de la Royal Navy pour les destructions infligées à la flotte ennemie.  Mais avant d’atteindre cette renommée, son apprentissage de la guerre sous-marine sera parsemé d’embûches.</p>', '<p>Les derniers corsaires est un récit historique d’une rare qualité.  Un véritable roman d’aventures soutenu par un scénario original et un dessin d’une grande virtuosité. Jocelyn Houde nous a quitté trop rapidement.  Il nous reste ce livre pour mesurer l’immense talent qu’il possédait.</p>', 1, '64', 0, '22,3 x 29,8', 0, 21.95, 18.00, '2006-05-01', '2006-01-01', 1, 4, 1),
(39, '9782922585957', '', '', '', 'Justine', '<p>Justine n’est pas une histoire héroïque. Ce n’est pas une histoire de guerriers qui parcourent l’univers. Ce n’est pas l’histoire d’un agent secret qui doit sauver les États-Unis. Ce n’est pas l’histoire d’un monde magique où des trolls combattent les elfes. C’est une histoire qui aurait pu arriver à chacun de nous… C’est l’histoire de Justine, qui arrive dans une ville qu’elle ne connaît pas et qui doit essayer de s’adapter dans ce nouvel univers.</p><p>Justine se situe dans une communauté fragmentée et sans repères. C’est dans ce contexte qu’Iris aborde la solitude, la marginalité, les difficiles relations humaines et l’aliénation par le travail. </p>', '<p>Justine est la première publication d’iris à la Pastèque.</p>', 1, '104', 0, '19,1 x 25,4', 0, 24.95, 21.00, '2010-11-01', '2010-08-01', 1, 4, 1),
(40, '9782923841595', '', '', '', 'Le pouvoir de l\'amour', '<p>Ah l’amour! On cherche l’oiseau rare, le coup de foudre ou l’amour à distance; il y a tant de variations dans le sentiment amoureux… Yves Pelletier nous propose un concept original sur ce thème. Il explore les relations humaines avec humour et fantaisie et livre un constat singulier sur les différentes façons d’aimer. Le plus grand pouvoir qui soit est-ce l’amour ou le rire?</p>', '<p>Le pouvoir de l\'amour est le deuxième titre d\'Yves Pelletier comme scénariste à La Pastèque. Le livre se présente comme une compilation de plusieurs petites histoires autour de l\'amour.</p>', 1, '144', 0, '20,3 x 25,4', 0, 27.95, 24.00, '2014-08-01', '2014-04-01', 1, 4, 1),
(41, '9782897770327', '', '', '', 'La liste des choses qui existent - L\'intégrale', '<p>Cathon et Iris aiment les objets. Les objets amusants, brillants, décoratifs, mobiles, pliables ou fashion... Les deux auteures aiment tellement les objets qu’elles les mettent en images! Dans La liste des choses qui existent - L\'intégrale, vous apprendrez, entre autres, d’où viennent les lunettes et comment ont été inventées la chaussure et la boîte de conserve!</p>', '<p>Véritable encyclopédie ludique, ce livre comprend en un seul volume La liste des choses qui existent et Encore plus de choses qui existent.</p>', 1, '232', 0, '20,3 x 24,1', 0, 32.95, 26.00, '2018-05-01', '2018-02-01', 1, 2, 2),
(42, '9782897770440', '', '', '', 'Folk - Épisode 1', '<p>Après un soir de beuverie, Jug accepte un pacte avec un fantôme: il a 100 jours pour se rendre de l’autre côté du continent pour enregistrer un disque au mythique studio Delta. Il deviendra un virtuose de la guitare mais devra s’entourer de musiciens les plus talentueux de tous…</p>', '<p>L’auteure Iris nous présente Folk, avec une série en 3 tomes!</p>', 1, '104', 0, '16,5 x 22,9 ', 0, 19.95, 16.00, '2018-11-01', '2018-08-01', 1, 4, 2),
(43, '9782923841168', '', '', '', 'Evan Evans', '<p>Evan Evans vit tranquillement dans l\'ennui le plus total. Il habite une vieille bicoque à l\'écart de la ville, écoute des 78 tours sur son électrophone en lisant de vieux journaux en compagnie de son canari.  Malheureusement, Evan a un ami plutôt envahissant : Ivan, un frimeur égoïste, celui par qui toutes les aventures arrivent...</p>', '<p>Hommage au cinéma burlesque de Laurel et Hardy, à l’humour slapstick et aux récits où les héros s’en sortent par tous les moyens, Evan Evans est la première bande dessinée en solo de Laurent Kling, qui avait cosigné Les rois du pétrole avec Vincent Bergier en 2009 à La Pastèque.</p>', 1, '72', 0, '19,1 x 25,4', 0, 21.95, 18.00, '2012-06-01', '2012-03-01', 1, 4, 1),
(44, '9782923841298', '', '', '', 'La famille Carter - Don\'t Forget This Song', '<p>Don’t Forget This Song, c’est l’histoire de la famille Carter : le premier groupe superstar de la musique country, qui a enregistré des centaines de chansons et vendu des millions d’albums entre 1927 et 1944. Ce livre, riche et fascinant, constitue non seulement une biographie unique de cette famille, mais également le récit émouvant de son succès, des difficultés rencontrées et de son impact sur la musique contemporaine.</p>', '<p>Illustré minutieusement, ce livre évoque la quintessence de l’Americana. C’est aussi une histoire de succès et d’échecs, de pauvreté et de richesse, de racisme et de tolérance, de créativité et de finances, mais surtout, c’est une histoire qui illustre la puissance de la musique et de l’amour.</p>', 1, '192', 0, '16,5 x 24,1', 0, 29.95, 24.00, '2014-10-01', '2014-07-01', 1, 4, 1),
(45, '9782897770648', '', '', '', 'Jours d\'attente', '<p>Pendant que s’étire la Deuxième Guerre mondiale, Jérôme Beauvais s’est réfugié en forêt et il attend. Après sa désertion des Forces canadiennes, sa mère l’a envoyé dans cet endroit où il vit reclus auprès de son taciturne grand-père, qui l’occupe avec les rénovations de sa vieille maison. Bientôt, Jérôme s’intéresse à l’histoire des lieux, ponctuée de crimes et de morts suspectes.</p><p>À mesure que son isolement grandit, Jérôme s’abîme dans les secrets de la demeure. Un suicide, un incendie et des murmures de sorcellerie hantent ses pensées, prenant peu à peu le pas sur la réalité de la guerre et sur ses propres fantômes.</p>', '', 1, '272', 0, '15,2 x 20,3', 0, 23.95, 19.00, '2019-09-01', '2019-06-01', 1, 4, 2),
(46, '9782922585629', '', '', '', 'La rue des autres', '<p>Quand elle rencontre un clochard en son fauteuil roulant, Sacha ne se doute pas que ses histoires vont la bouleverser et lui révéler que derrière les visages des passants se cachent des histoires fortes, tendres ou douloureuses…</p>', '<p>La première bande dessinée de cette illustratrice française établit à Strasbourg.  Un travail magnifique à lire avec empressement!</p>', 1, '72', 0, '19,1 x 25,4', 0, 18.95, 16.00, '2008-07-01', '2008-04-01', 1, 2, 2),
(47, '9782923841809', '', '', '', 'Dérangés', '<p>Dérangés est une histoire en trois actes où l’on suit la descente aux enfers d’un gardien de musée, la vie transformée de Nenad à la vue d’une oeuvre d’art et celle de Judith, une insomniaque qui ne peut plus démêler ses rêves de la réalité.</p><p>Chorégraphie de gestes fous, musée imaginaire et clameur des objets perdus, Dérangés est une épopée initiatique qui nous plonge dans une histoire d’une puissance impressionnante.</p>', '<p>Oeuvre spectaculaire qui met en scène un choeur d’objets, un danseur, de la broderie et trois personnages particuliers. Un chef-d\'oeuvre.</p>', 1, '312', 0, '21,6 x 28', 0, 36.95, 29.00, '2016-01-01', '2015-11-01', 1, 2, 3),
(48, '9782923841816', '', '', '', 'Bagatelles', '<p>Bagatelles réunit une douzaine d\'histoires publiées à gauche et à droite au cours des dernières années par Mahler; une sorte d\'anthologie pour consacrer le travail d\'un génie humoristique.</p>', '<p>Après 6 ans d\'absence, voici enfin le grand retour de Nicolas Mahler à La Pastèque!</p>', 1, '128', 0, '22,9 x 29,2', 0, 27.95, 20.00, '2015-10-01', '2015-07-01', 1, 4, 1),
(49, '9782922585681', '', '', '', 'Miam miam fléau', '<p>Taraboum 1er, roi des Gôls, est dévasté car Borbo, son goûteur, s’est enfui. «Rappelez-vous, Majesté, il n’avait droit qu’à une seule bouchée par plat… Et qu’à une seule gorgée… Et qu’à un tout petit rot !» Ramener Borbo au bercail ne sera pas chose facile pour Coco Météor et son cavalier indomptable !</p>', '<p>Le premier livre de Marsi, illustrateur issu du dessin animé et doté d’un sens narratif hors du commun. Un manuscrit que nous avons cru destiné à d’autres que nous. Pourtant, c’est bien chez nous que cet illustrateur voulait publier son livre.  Un livre comme il s’en fait trop rarement au Québec.</p>', 1, '64', 0, '22,9 x 29,2', 0, 21.95, 18.00, '2009-06-01', '2009-04-01', 1, 4, 1),
(50, '9782923841588', '', '', '', 'Colis 22', '<p>Pluton a beau vouloir, le métier de cyclomessager ne lui sied pas. Déjà que, par les rues étroites et escarpées de Québec, l’emploi est ardu, il fallait que s’ajoute ce foutu colis. Dans quel bourbier s’est-il encore fourré ? Des intrigants tiennent à tout prix à récupérer ce paquet. À tout prix !</p><p>Du quartier Saint-Sauveur au château Frontenac, l’affaire se conclura en haut lieu… !</p>', '<p>Marsi signe ici son deuxième album chez La Pastèque, un thriller qui roule!</p>', 1, '160', 0, '15,9 x 19,1', 0, 19.95, 16.00, '2014-10-01', '2014-07-01', 1, 3, 2),
(51, '9782922585933', '', '', '', 'L\'incroyable histoire de la sauce soja', '<p>L’incroyable histoire de la sauce soja est un recueil regroupant des histoires courtes de où se mêlent esthétique européenne et techniques issues de la tradition du manga.</p>', '<p>« Vous sentez-vous bien dans votre milieu? Pouvez-vous dire que jamais vous n’avez l’impression d’y être un étranger? » Fumio Obata pose un regard singulier sur le monde contemporain, où l’indifférence lui apparaît comme le mal le plus partagé. La finesse des observations qui fondent ces fables actuelles, d’une grande qualité visuelle, suggère aussi une morale à méditer: cette indifférence au réel ne serait pas une fatalité...</p>', 1, '120', 0, '19,1 x 25,4', 0, 23.95, 21.00, '2011-10-01', '2011-07-01', 1, 7, 1),
(52, '9782922585018', '', '', '', 'Paul à la campagne', '<p>Avec Paul à la campagne, Michel Rabagliati révèle une œuvre semi-autobiographique pleine de sensibilité. L’album se compose de deux récits, placés sous le signe de la nostalgie de l’enfance. Paul à la campagne raconte une visite dans les Laurentides tandis que Paul apprenti typographe pose un regard tendre sur l’affection liant un père et son fils.</p>', '', 1, '48', 0, '19,1 x 25,4', 0, 14.95, 12.00, '1999-10-01', '1999-07-01', 1, 3, 2),
(53, '9782923841472', '', '', '', 'Paul à la campagne - 15e anniversaire', '<p>Pour fêter le 15e anniversaire de la naissance de Paul en 2014, nous avons publié une édition spéciale de Paul à la campagne: tout en couleur, en format géant sous couverture cartonnée. </p>', '<p>Une édition intégrée à notre catalogue et disponible en tout temps!</p>', 1, '56', 0, '29,2 x 39,3', 0, 34.95, 28.00, '2013-11-01', '2013-07-01', 1, 4, 1),
(54, '9782922585087', '', '', '', 'Paul a un travail d\'été', '<p>Pour son deuxième livre, Michel Rabagliati raconte ici les aventures estivales de Paul qui décroche un emploi, moniteur dans un camp de vacances. Ce dernier va apprendre au cours de l’été à dominer ses angoisses et ses peurs, à vivre en collectivité et à s’épanouir. </p>', '<p>Un témoignage éblouissant sur la transition entre l’enfance et l’âge adulte.</p>', 1, '160', 0, '19,1 x 25,4', 0, 26.95, 21.00, '2002-03-01', '2002-01-01', 1, 3, 2),
(55, '9782922585223', '', '', '', 'Paul en appartement', '<p>Quelques années ont passé et Paul se retrouve en appartement avec sa copine sur le plateau Mont-Royal à Montréal. </p>', '<p>Une œuvre définitivement urbaine, mais qui garde une fois de plus finesse, simplicité et sensibilité, autant de qualités auxquelles Michel Rabagliati nous a habitués.</p>', 1, '120', 0, '19,1 x 25,4', 0, 21.95, 18.00, '2004-05-01', '2004-02-01', 1, 3, 2),
(56, '9782922585278', '', '', '', 'Paul dans le métro', '<p>Ce quatrième titre de la série des Paul regroupe les courts travaux réalisés par Michel Rabagliati depuis ses débuts. On retrouvera donc Paul avec grand plaisir, cette fois dans de courts récits à la fois touchants et amusants. Et une belle surprise inédite attend le lecteur à la fin du livre.</p>', '', 1, '96', 0, '19,1 x 25,4', 0, 19.95, 16.00, '2005-03-01', '2005-01-01', 1, 3, 2),
(57, '9782922585391', '', '', '', 'Paul à la pêche', '<p>Une semaine de vacances dans une pourvoirie, voilà le merveilleux prétexte choisi par Michel Rabagliati pour élargir son univers et présenter de nouveaux personnages. L’amitié, l’amour et la vie constituent le cœur du récit. De plus, Paul et Lucie rêvent de devenir parents… </p>', '<p>Avec Paul à la pêche, son cinquième livre, Michel Rabagliati démontre tout le chemin parcouru depuis ses débuts. En pleine maîtrise de ses moyens, il dessine la vie… tout simplement.</p>', 1, '208', 0, '19,1 x 25,4', 0, 31.95, 25.00, '2006-08-01', '2006-05-01', 1, 3, 2),
(58, '9782923841878', '', '', '', 'Paul à Québec', '<p>L’achat d’une première maison et la mort d’un proche sont au cœur de ce nouvel opus. D’Ahuntsic à St-Nicolas, en passant par le célèbre Madrid, l’auteur nous amène, cette fois-ci, à découvrir sa famille à travers un livre fort émouvant. Michel Rabagliati nous démontre une fois de plus qu’il est en pleine maîtrise de ses moyens, il dessine la vie… tout simplement.</p>', '<p>Le livre a fait l\'objet d\'une adaptation cinématographique en 2016.</p>', 1, '184', 0, '19,1 x 25,4', 0, 27.95, 23.00, '2009-03-01', '2009-01-01', 1, 3, 2),
(59, '9782923841052', '', '', '', 'Paul au parc', '<p>Retour au monde de l’enfance avec Paul au parc, l’action se situant avant Paul à la campagne. Michel Rabagliati explore cette fois-ci le scoutisme et le mentorat, avec en toile de fond la crise d’Octobre 1970.</p>', '<p>Maîtrisant parfaitement son art, Michel Rabagliati nous offre, une fois de plus, une histoire qui va droit au coeur. Le drame ne vient pas toujours d’où l’on pense…</p>', 1, '160', 0, '19,1 x 25,4', 0, 24.95, 21.00, '2011-11-01', '2011-09-01', 1, 3, 2),
(60, '9782923841786', '', '', '', 'Paul dans le Nord', '<p>Été 76. Paul a 16 ans et ne rêve que d\'une chose: une motocyclette Kawasaki KE100 pour fuir son quotidien et ses parents envahissants. Avec Ti-Marc, un nouvel ami rencontré à sa polyvalente, Paul traversera cette période difficile de son adolescence avec un peu plus de légèreté. Voyages en auto-stop, soirées arrosées entre copains et expériences nouvelles seront au rendez-vous. Le tout, sur fond de jeux olympiques, de musique de Peter Frampton et de Beau Dommage…</p>', '', 1, '184', 0, '19,1 x 25,4', 0, 27.95, 23.00, '2015-10-01', '2015-09-01', 1, 3, 2),
(61, '9782897770723', '', '', '', 'Paul à la maison', '<p>Paul à la maison est le 9e tome de la série. Cette fois-ci, l’action de déroule en 2012, Paul est auteur de bande dessinée à temps plein et lance un nouvel ouvrage au Salon du livre de Montréal. Entretemps, sa fille part travailler en Angleterre, Lucie n’habite plus avec lui et sa mère ne va pas bien… </p>', '<p>Paul à a maison traite du deuil, sous de multiples formes. Un album émouvant.</p>', 1, '208', 0, '19,1 x 20,3 ', 0, 31.95, 26.00, '2019-11-01', '2019-09-01', 1, 3, 2),
(62, '9782897770228', '', '', '', 'Paul à Montréal', '<p>Dans le cadre des célébrations du 375e anniversaire de Montréal, Michel Rabagliati a réalisé un parcours urbain réunissant 12 cases de bande dessinée géantes réparties dans le quartier du Plateau Mont-Royal.</p>', '<p>Paul à Montréal regroupe l\'ensemble des planches ainsi que plusieurs pages d\'anecdotes sur la ville de Montréal, une façon originale de célébrer le 375e anniversaire de la métropole!</p>', 1, '56', 0, '30,5 x 20,3', 0, 36.95, 28.00, '2017-11-01', '2017-08-01', 1, 4, 4),
(63, '9782923841762', '', '', '', 'La Petite Patrie', '<p>Publié en 1972, La Petite Patrie de Claude Jasmin est un roman autobiographique qui a connu un vif succès. Chronique d’un quartier populaire de Montréal, il nous offre le regard d’un enfant de huit ans sur le monde qui l’entoure à l’aube des années 40 : la guerre, la religion, les jeux de ruelles, l’amour et la mort…</p>', '<p>Julie Rocheleau et Normand Grégoire nous offre une adaption du populaire roman de Claude Jasmin, un livre qui nous rappelle notre enfance et l’insouciance qui s’y rattache.</p>', 1, '88', 0, '21,6 x 30,5', 0, 26.95, 21.00, '2015-11-01', '2015-08-01', 1, 4, 1),
(64, '9782897770792', '', '', '', 'Traverser l\'autoroute', '<p>Une maison avec un garage, une tondeuse, des outils dont on ne se sert pas, une piscine utilisée une demi-fois par année, un fils de 16 ans avec qui les rapports sont difficiles, un couple qui s’enlise dans la routine… Qu’est-ce qui rend notre vie supportable?</p>', '<p>L’écrivaine Sophie Bienvenu nous livre un formidable instantané de la vie moderne, mis en image par des illustrations exceptionnelles de Julie Rocheleau. Un livre incontournable pour le début de 2020.</p>', 1, '88', 0, '22,2 x 30,5', 0, 27.95, 22.00, '2020-01-01', '2019-11-01', 1, 4, 1),
(65, '9782923841632', '', '', '', 'Mes Dinky', '<p>Rémy Simard aime les voitures. Surtout les petites. Il en possède 140. Rémy est tout indiqué pour réaliser un guide sur le monde des collectionneurs.</p>', '<p>Voici un livre pratique qui vous apprendra tout sur les voitures miniatures et même plus; vous pourrez même profiter de ses conseils avisés pour démarrer votre collection de timbres postes ou de petites cuillères! </p>', 1, '104', 0, '17,8 x 21,6', 0, 19.95, 16.00, '2014-11-01', '2014-08-01', 1, 4, 2),
(66, '9782897770051', '', '', '', 'Ligue de garage', '<p>Tout ce que vous avez toujours voulu savoir sur les ligues de garage, cet univers impénétrable et lieu emblématique du sport national des Québécois. Chaque semaine, des milliers de personnes, aux quatre coins de la province, enfilent leurs patins le temps d’une joute de hockey.</p>', '<p>L’auteur est gardien de but dans une telle ligue. Quoi de plus naturel pour lui de réaliser une bande dessinée sur cette activité qui se termine souvent autour d’une bière et de nombreuses anecdotes…</p>', 1, '104', 0, '17,8 x 21,6', 0, 19.95, 16.00, '2016-11-01', '2016-08-01', 1, 2, 2),
(67, '9782897770181', '', '', '', 'Vogue la valise - L\'intégrale', '<p>Touchant témoignage sur un père alcoolique qui entraîne dans son malheur sa famille et surtout la Poule, alter ego autobiographique de Siris, Vogue la valise met en lumière une saga familiale déchirante.</p>', '<p>Les pieds bien ancrés dans la réalité et l’oeil planant bien haut, Siris jette un regard poétique acide et autobiographique sur son enfance. Premier véritable roman graphique de l’auteur, celui-ci à mis plus de dix ans pour pondre, à travers son style chargé et sa créativité narrative, un récit fort émouvant.</p>', 1, '352', 0, '17,8 x 25,4', 0, 32.95, 25.00, '2017-11-01', '2017-08-01', 1, 4, 2),
(68, '9782923841292', '', '', '', 'Morlac', '<p>Véritable ovni littéraire, Morlac est sans doute le projet le plus fou à nous avoir été présenté à La Pastèque.</p><p>Cette bande dessinée, sous des aspects oubapiens, présente un récit tentaculaire qui se multiplie sous l’effet des choix qui s’imposent au personnage.  On retrouve donc, non pas un récit unique à lire mais plusieurs histoires qui se coupent et se recoupent vers une fin réglée au quart de tour. Avec Morlac, l’auteur repousse les cadres de la bande dessinée et plonge dans une exploration singulière de ses limites narratives.</p>', '<p>Leif Tande alias Éric Asselin est un phénomène.  Figure emblématique du 9e art québécois, cet illustrateur prolifique a livré à La Pastèque son travail le plus remarquable. </p><p>Morlac demeure, à nos yeux, une pièce maîtresse de notre catalogue et résume assez bien ce qui se passe dans la tête du plus fou de nos auteurs.</p>', 1, '152', 0, '20,2 x 36,8', 0, 23.95, 21.00, '2005-09-01', '2005-07-01', 1, 3, 2),
(69, '9782922585544', '', '', '', 'Danger public', '<p>Persuadé que le type attablé au restaurant d’en face en veut à sa vie, un barbier échafaude une série de scénarios pour sauver sa peau. Malheureusement, plusieurs obstacles se dressent sur son chemin. Et… le danger ne vient pas toujours d’où l’on pense !</p>', '', 1, '88', 0, '20,4 x 26,8', 0, 19.95, 16.00, '2007-11-01', '2007-08-01', 1, 3, 2),
(70, '9782922585811', '', '', '', 'L\'origine de la vie', '<p>Molécule est né il y a 3,8 milliards d’année. Il fut le premier organisme vivant de la planète Terre. Bien que ses origines soient encore controversées par les scientifiques contemporains, nous avons droit à son autobiologie qui nous éclaire enfin sur la véritable naissance de la vie sur Terre. Peu importe votre opinion, génération spontanée, créationnisme ou origines exogènes, Molécule répond à toutes vos questions existentielles et peut-être un peu plus…</p>', '<p>Molécule c’est aussi un web-comic que l’auteur a tenu pendant 365 jours sur internet en 2008. Ce livre est le plus imposant que nous ayons publié jusqu’à ce jour : 376 pages sous couverture cartonnée ! Un pavé ! Et une expérience de lecture étonnante comme Leif Tande nous a habitué.</p>', 1, '376', 0, '16,5 x 21,6', 0, 42.95, 35.00, '2010-03-01', '2010-01-01', 1, 4, 1);
INSERT INTO `livres` (`id`, `isbn_papier`, `isbn_pdf`, `isbn_epub`, `url_audio`, `titre`, `le_livre`, `arguments_commerciaux`, `statut`, `pagination`, `age_min`, `format`, `tirage`, `prix_can`, `prix_euro`, `date_parution_quebec`, `date_parution_france`, `categorie_id`, `type_impression_id`, `type_couverture_id`) VALUES
(71, '9782897770105', '', '', '', 'Automne rouge', '<p>Québec 1970, Tout commence par un banal travail scolaire, Laurent, treize ans doit inventer un héros québécois.  Mais qu’est-ce qu’un héros québécois ?  Comment un héros québécois doit-il se comporter ? Laurent cherche des réponses autour de lui : du côté de sa mère, ardente syndicaliste, de sa tante Marie, serveuse dans un bar au prise avec des problèmes de drogue, du côté de M. Lebrun, son père de substitution, un homme effacé et discret, et surtout du côté de Jason, un jeune Huron en colère.</p><p>Dans ce Québec bouleversé par des évènements politiques et sociaux importants,  la quête de Laurent devient un chemin parsemé d’obstacles.</p>', '', 1, '104', 0, '20,3 x 26 ', 0, 27.95, 22.00, '2017-03-01', '2017-01-01', 1, 4, 1),
(72, '9782922585841', '', '', '', 'La chasse-galerie', '<p>Ce livre, que nous considérons comme une pièce majeure de notre catalogue, a été publié originalement en 2000.  Avec cette réimpression, nous lui avons enfin donné la forme qu’il méritait: en grand format, sous couverture cartonnée au dos toilé. </p><p>Vanoli s’est attaqué à une œuvre fondamentale de la littérature québécoise. Ce récit d’Honoré Beaugrand, qui nous raconte comment des bûcherons retrouvent leurs blondes la veille du jour de l’An après un pacte avec le diable, est illustré d’une façon magistrale, grâce au regard vierge de l’auteur et à son trait expressionniste, qui rappelle l’art de l’estampe. Nul autre que Vincent Vanoli ne pouvait réaliser pareil chef-d’œuvre, un illustrateur discret mais essentiel.</p>', '<p>Nul autre que Vincent Vanoli ne pouvait réaliser pareil chef-d’œuvre, un illustrateur discret mais essentiel.</p><p>1ere édition décembre 2000, 2e édition avril 2011></p>', 1, '40', 0, '21,6 x 28', 0, 19.95, 16.00, '2011-04-01', '2011-01-01', 1, 3, 1),
(73, '9782923841304', '', '', '', 'Le méchant petit poucet', '<p>Le méchant petit Poucet est une adaptation du célèbre conte par le poète français Cédric Demangeot.</p><p>Du temps où le père de Poucet était « encore un homme », l’un des plus solides bûcherons de la contrée, sa petite famille ne manquait de rien. Mais un soir tout bascula. Le père revint de la ville sa charrette pleine et les mains vides. Personne n’avait voulu de son bois. Alors la famille de Poucet cessa de manger. Pour toute nourriture restèrent les larmes, puis vinrent les cris et les coups, car le père de Poucet se mit à boire. Poucet eut alors l’idée de perdre ses parents dans la forêt...</p>', '<p>Douze ans après La Chasse-galerie, La Pastèque accueille avec une immense joie un nouveau livre de Vincent Vanoli, un artiste discret mais dont le travail depuis 1989, laisse une empreinte profonde sur le 9e art.</p>', 1, '56', 0, '22,9 x 29,2', 0, 19.95, 16.00, '2012-09-01', '2012-05-01', 1, 3, 1),
(74, '9782897770037', '', '', '', 'Objets trouvés', '<p>Objets trouvés de Vincent Vanoli est un recueil qui tend à une connivence particulière entre le lecteur et l\'auteur: elle est dans l\'acceptation du fait qu\'il n\'y a rien à expliquer finalement du maillage d\'une vie, il faut au contraire se laisser aller à la rêverie. La narration de ces courtes histoires est donc ici organisée selon des événements en chaîne con-séquentiels ou elle use de feintes narratives, pour renforcer l\'effet de la chute absurde du récit, correspondant volontairement à la chute réelle ou morale du personnage.</p>', '', 1, '88', 0, '17,8 x 22,9', 0, 19.95, 18.00, '2017-06-01', '2017-03-01', 1, 3, 2),
(75, '9782923841540', '', '', '', 'Le bestiaire des fruits', '<p>La meilleure chose qui soit arrivée à Zviane, sur le plan gustatif, aura été de vivre à ville St-Laurent en 2001. Dans le supermarché où elle faisait son épicerie, elle est tombée sur des fruits… obscurs. Au péril de sa vie, elle a concocté ce savant traité qui vous fera tout connaître des fruits exotiques. </p>', '<p>Voici le guide le plus loufoque sur le ramboutan, le mangoustan ou le kaki jamais publié.</p>', 1, '124', 0, '15,2 x 24,1', 0, 17.95, 14.00, '2018-02-01', '2018-01-01', 1, 8, 2),
(81, '9782923841908', '', '', '', 'Jamais contents!', '<p>Recevoir des cadeaux, c\'est amusant, mais pourquoi les gens ne sont-ils jamais contents?</p>', '<p>Premier livre pour Mathieu Pierloot et Baptiste Amsallem à La Pastèque, Jamais contents! vous rappellera une situation familière…</p>', 1, '32', 4, '19,1 x 24,1', 0, 16.95, 13.00, '2016-04-01', '2001-01-01', 4, 4, 1),
(82, '9782897770570', '', '', '', 'Hier, quand j\'étais bébé', '<p>Charlotte, six ans, pense qu\'hier, elle était un bébé... Son ingénieux papa va entreprendre de lui expliquer comment fonctionne le temps! </p>', '<p>Laurent Turcot et Baptiste Amsallem nous présentent un livre brillant pour faire comprendre les notions de temps aux enfants!</p>', 1, '32', 4, '25,4 x 15,2', 0, 18.95, 15.00, '2019-10-01', '2001-01-01', 4, 4, 1),
(83, '9782923841038', '9782924342046', '9782924342053', '', 'Fourchon', '<p>Sa maman est une cuillère. Son papa est une fourchette. Lui, il est un peu des deux. Voici Fourchon!</p><p>Fourchon détonne. Dans sa cuisine, les cuillères sont des cuillères et les fourchettes sont des fourchettes. On ne se mêle pas aux autres. Il a beau tenter de passer pour une cuillère, puis pour une fourchette, Fourchon n’est jamais choisi lorsque vient le temps de se mettre à table. </p><p>Il semble condamné à un destin de tiroir... jusqu’à l’arrivée, un beau jour, d’une chose malpropre qui ne se soucie pas des coutumes de la coutellerie. Fourchon trouvera-t-il enfin sa place à table ?</p>', '<p>Fourchon a été publié en anglais par Kids Can Press en 2010 et a reçu des critiques très positives. Le livre s’est rapidement retrouvé dans la liste des bestseller des librairies canadiennes.</p>', 1, '36', 3, '19,1 x 24,1', 0, 16.95, 14.00, '2011-09-01', '2001-01-01', 4, 4, 1),
(84, '9782923841236', '9782924342039', '9782924342022', '', 'Virginia Wolf', '<p>Virginia, la soeur de Vanessa, est d\'humeur féroce - elle grogne, elle hurle à la lune et elle fait des choses très étranges. Elle est prise d\'un cafard si intense que toute la maison semble sens dessus dessous. Vanessa fait tout ce qu\'elle peut pour lui remonter le moral, mais rien n\'y fait. Jusqu’à ce que Virginia parle à Vanessa d\'un lieu imaginaire, un endroit merveilleux nommé Bloomsberry...</p>', '<p>Librement inspiré de la relation qu\'entretenait l\'écrivaine Virginia Woolf avec sa soeur, la peintre Vanessa Bell, Virginia Wolf est une fable émouvante destinée aux lecteurs de tous âges.</p>', 1, '36', 4, '19,1 x 24,1', 0, 16.95, 14.00, '2012-05-01', '2001-01-01', 4, 4, 1),
(85, '9782923841618', '', '', '', 'Alpha', '<p>Connaissez-vous le code alpha international ? Aussi nommé Alphabet phonétique de l’Otan, il est utilisé au sein de nombreuses professions en lien avec l’aviation ou les services de secours comme les pompiers, la police ou encore la Croix Rouge. Ce langage est officiel puisque chaque lettre de l’alphabet correspond à un seul et même mot dans le monde entier.</p>', '<p>Voici donc un abécédaire international qui donne la possibilité de se familiariser et de s’amuser avec un langage codé.  Une idée géniale qui nous a permis de vendre Alpha dans 8 pays avant même sa parution en français.</p><p>Et devinez quel mot est utilisé pour la lettre Q…</p>', 1, '60', 3, '19,7 x 19,7', 0, 18.95, 15.00, '2014-11-01', '2001-01-01', 4, 4, 1),
(86, '9782923841915', '', '', '', 'Une berceuse en chiffons', '<p>Louise Bourgeois (1911–2010) est une artiste moderne de réputation internationale, connue pour ses sculptures faites de bois, d’acier, de pierre et de caoutchouc moulé. La plus célèbre, Maman, est une araignée de plus de dix mètres de hauteur.</p><p>Tout comme l’araignée qui tisse sa toile et la répare, la mère de Louise était tisserande et réparait des tapisseries. Pendant son enfance, Louise a fait son apprentissage auprès d’elle, avant de devenir elle-même artiste tapissière. Louise a travaillé le tissu tout au long de sa carrière, et cet album biographique est une illustration de l’expérience qui lui a inspiré ses œuvres les plus célèbres, celle de l’enfant tissant aux côtés d’une mère aimante et attentionnée.</p>', '<p>Par son récit poétique et superbement nuancé, le livre déploie sous nos yeux la relation entre la mère et la fille, et jette un jour lumineux sur le tissage des souvenirs en chacun de nous.</p>', 1, '42', 8, '22,9 x 27,9', 0, 21.95, 18.00, '2016-06-01', '2001-01-01', 4, 4, 1),
(87, '9782897770365', '', '', '', 'L\'abeille à miel', '<p>CHUT ! Qu’est-ce que c’est ? Tu entends ? C’est tout près. C’est une abeille à miel !</p><p>Un tiers de ce que nous consommons pour nous nourrir provient de la pollinisation. Le déclin de abeilles au cours des dernières années est un enjeu environnemental majeur.  Voici donc un livre, destiné à un jeune lectorat, pour les sensibiliser à la disparition des abeilles!</p>', '<p>Écrit par Kirsten Hall et illustré par Isabelle Arsenault, suivez l’étonnant travail de l’abeille à miel!</p>', 1, '40', 5, '22,9 x 28,6 ', 0, 21.95, 18.00, '2018-06-01', '2001-01-01', 4, 4, 1),
(88, '9782923841441', '9782924342152', '9782924342145', '', 'Le Noël de Marguerite', '<p>Une dame âgée a renoncé aux fêtes de Noël. Elle préfère désormais rester bien confortablement chez elle. Ainsi, elle ne risque pas de s’exposer à tous les dangers comme glisser sur un trottoir glacé, attraper la grippe ou se faire attaquer par un brigand. Au moment où elle s’apprête à prendre un repas bien tranquillement assise devant sa télévision, on sonne à sa porte...</p>', '', 1, '72', 7, '20,3 x 24,1', 0, 19.95, 16.40, '2014-11-01', '2001-01-01', 4, 4, 1),
(89, '9782923841649', '', '', '', 'Les affreux chandails de Lester', '<p>Personne ne sait trop de qui Cousine Clara est la cousine, alors elle vient s’installer avec la famille de Lester. Elle est petite et pleine de froufrous et ne quitte jamais son grand panier de tricot. Un matin elle annonce : « je t’ai tricoté un chandail ». Et Lester se dit : « comme c’est gentil. » Jusqu’à ce qu’il le voit… Il est AFFREUX.</p>', '<p>Attachant et étrange, Les affreux chandails de Lester nage dans les eaux troubles des bonnes manières et des cadeaux indésirables, et plaira à tous ceux qui ont déjà gentiment accepté un cadeau déplaisant – et qui ont trouvé une façon créative de s’en débarrasser !</p>', 1, '36', 4, '19,1 x 24,1', 0, 18.95, 15.00, '2014-11-01', '2001-01-01', 4, 4, 1),
(90, '9782923841946', '', '', '', 'Un pas puis mille', '<p>J’ai d’abord fait un pas, et puis mille. J’ai dit « Je pars », je le fais. À moi la grande vie, à moi le rêve et la nature sauvage !</p><p>Un enfant accepte difficilement que ses parents aient décidé de déménager.  Alors, il décide de partir.  Après un long détour en compagnie de son nouvel ami, un serpent rouge nommé Pesco, une certaine conclusion s’impose pour notre jeune aventureux…</p>', '', 1, '48', 5, '19,1 x 24,1', 0, 17.95, 15.00, '2016-06-01', '2001-01-01', 4, 4, 1),
(91, '9782897770341', '', '', '', 'Une bulle', '<p>Dans les derniers mois de sa vie, Geneviève Castrée a réalisé un dernier cadeau pour sa fille de deux ans. Laisser une dernière note pour une jeune enfant est une tâche difficile; Geneviève Castrée y répond avec grâce et subtilité. En utilisant des dessins précis et exquis, l’auteure et sa fille flottent de page en page, enfermées dans une bulle qui les protège du monde extérieur.</p>', '<p>Une contemplation de l\'amour et de la perte, Une Bulle est une déclaration durable, un souvenir final, un réconfort pour les autres qui ont du chagrin…</p>', 1, '18', 3, '14,6 x 14,6', 0, 14.95, 10.00, '2018-05-01', '2001-01-01', 4, 4, 1),
(92, '9782897770310', '', '', '', 'Les Parpadouffes au pays des beaux pruneaux ', '<p>Les Parpadouffes sont trois adorables créatures en quête d\'aventure ! Avec leurs parents, ils vivent heureux dans leur terrier, mais parcourent le monde extérieur dès qu\'une occasion se présente. Dans ce premier album : suis-les à travers les bois, à la recherche des mystérieux beaux pruneaux qui habitent leurs rêves ! Une nouvelle série pour les enfants de 3 à 6 ans!</p>', '', 1, '48', 3, '19,7 x 19,7', 0, 16.95, 12.00, '2018-02-01', '2001-01-01', 4, 4, 1),
(93, '9782897770655', '', '', '', 'Les Parpadouffes et le trésor perdu du Capitaine Pélican', '<p>C’est l’été, le soleil brille et les vagues s\'agitent, mais les trois petits parpadouffes s’ennuient. Alors qu’ils ne savent plus comment occuper leurs vacances, ils entendent parler d’un trésor fabuleux : celui du capitaine Pélican. Ils se donnent aussitôt pour défi de s’en emparer, et embarquent pour une grande mais imprévisible aventure !</p><p>​</p>', '', 1, '48', 3, '19,7 x 19,7', 0, 14.95, 12.00, '2019-07-01', '2001-01-01', 4, 4, 1),
(94, '9782923841267', '', '', '', 'Le voleur de sandwichs', '<p>Marin s’est fait voler son sandwich, celui du lundi au jambon-cheddar-laitue, son préféré ! Quel malfaisant a pu commettre un acte aussi cruel ? Le mardi, c’est le jour de son deuxième sandwich préféré : celui au thon que sa mère prépare avec sa fameuse mayonnaise et des tomates séchées. Pour ne pas mourir de faim, Marin décide de tendre un piège au voleur…</p>', '<p>Premier livre de Patrick Doyon et André Marois à La Pastèque. Le voleur de sandwichs est un polar pour enfants qui vous tiendra en appétit du début à la fin.</p>', 1, '168', 7, '17,1 x 22,2', 0, 18.95, 15.00, '2014-11-01', '2001-01-01', 4, 4, 1),
(95, '9782897770303', '', '', '', 'La balle jaune', '<p>À la recherche d’une balle égarée, Louis et Louise se glissent dans les coulisses du livre qui leur sert de terrain de tennis. L’aventure les conduit à travers toutes sortes de situations et les oblige à courir de page en page, vers l’avant et vers l’arrière, sur la piste d’indices. Et les lecteurs ? Ah oui, les lecteurs ! Ils devront faire leur travail afin que l’histoire (c’est-à-dire la partie) se termine. Espérons qu’ils n’en perdront pas le souffle !</p>', '', 1, '36', 5, '22,2 x 26 ', 0, 18.95, 14.00, '2018-03-01', '2001-01-01', 4, 4, 1),
(96, '9782897770259', '', '', 'https://ici.radio-canada.ca/premiere/livres-audio/arts/105811/histoire-cancer-india-desjardins-labrosse', 'Une histoire de cancer qui finit bien', '<p>Il y a quelques années, India Desjardins a rencontré une jeune fille atteinte de leucémie, qui lui a demandé si elle pouvait écrire «Une histoire de cancer qui finit bien, avec de l’amour à la fin», en ajoutant que ça «donnerait de l’espoir.»</p><p>C’est donc pour donner de l’espoir que l’auteure a décidé de raconter l’histoire de cette jeune fille de quinze ans qui, après ses traitements, a rendez-vous avec son médecin pour connaître son état de santé et traverse le corridor de l’hôpital vers son diagnostic final. Elle se remémore ses souvenirs, ses moments difficiles et ses moments plus heureux. Mais tout ça se terminera bien. C’était une promesse.</p>', '', 1, '88', 12, '20,3 x 26', 0, 24.95, 19.00, '2017-09-01', '2001-01-01', 4, 4, 1),
(97, '9782897770082', '', '', '', 'La milléclat dorée', '<p>Renard est un amoureux de la nature. Dans son salon, il collectionne les plantes et les livres de botanique. Un soir, il découvre dans l’un d’eux l’existence d’une fleur mystérieuse : la milléclat dorée. Très rare, elle ne pousse que dans la montagne et personne n’a encore eu la chance de l’observer. Il n’en faut pas plus à Renard pour se lancer : voilà la grande aventure qu’il attendait ! Demain, il s’enfoncera dans la montagne à sa recherche !</p>', '', 1, '48', 5, '19,7 x 19,1', 0, 16.95, 13.00, '2017-06-01', '2001-01-01', 4, 4, 1),
(98, '9782897770617', '', '', '', 'Le constellis des profondeurs', '<p>Après le succès de La milléclat dorée, Renard le renard est de retour pour une nouvelle aventure! Cette fois, il rend visite à son cousin Loup pour passer l’été au bord de la mer. Comme Renard aime la nature, il décide d\'explorer les profondeurs de l\'océan, à la recherche d\'une mystérieuse plante d\'eau: le constellis des profondeurs...</p>', '', 1, '48', 5, '19,7 x 19,1', 0, 16.95, 14.00, '2019-01-01', '2001-01-01', 4, 4, 1),
(99, '9782897770709', '', '', '', 'Coup de vent', '<p>La Pastèque est très heureuse de publier le premier livre de Cécile Gariépy! Coup de vent montre avec humour plusieurs petites scènes de la vie quotidienne avant et après un gros coup de vent, qui mettra tout sens dessus dessous. Spécialement pensé pour la petite enfance, cet album est basé sur des formes et des couleurs simples, un comique de répétition et des détails rigolos qui feront sourire les plus jeunes!</p>', '', 1, '18', 3, '16,5 x 16,5', 0, 16.95, 14.00, '2019-08-01', '2001-01-01', 4, 4, 1),
(100, '9782897770716', '', '', '', 'Objet perdu', '<p>Avec Objet perdu, le lecteur découvre le quotidien de deux jeunes enfants qui se préparent à aller à l’école. Mais des objets (le savon, une chaussette ou une tranche de pain) disparaissent de page en page dans les pièces de la maison. Il faudra donc explorer chaque page en détails pour les retrouver et comprendre ce qui s’est passé. </p>', '<p>Objet perdu est le second livre de Cécile Gariépy aux éditions La Pastèque. Réalisé spécialement pour les plus petits, il est muet et explore quelques situations du quotidien grâce à des images claires, des couleurs simples et un comique de répétition adapté.</p>', 1, '18', 3, '16,5 x 16,5', 0, 16.95, 14.00, '2019-08-01', '2001-01-01', 4, 4, 1),
(101, '9782923841854', '', '', '', 'Qu\'y a-t-il dans la boîte?', '<p>Dans cette histoire, il y a un pilote, un capitaine, un machiniste, une conductrice, un facteur, une fillette et une boîte.  Suivons ensemble le trajet de cette mystérieuse boîte vers sa destination finale. Qu’y a-t-il dans la boîte ? est un récit à tiroirs au dénouement inattendu!</p>', '', 1, '28', 4, '29,8 x 15,6', 0, 16.95, 13.00, '2016-03-01', '2001-01-01', 4, 4, 1),
(102, '9782897770488', '', '', '', 'Réveille-toi, Walter!', '<p>Walter est fatigué. Il dort dans la piscine, dans la cour de récréation, dans l\'aquarium, lors de sa fête d\'anniversaire, sous la pluie. Rien ne le garde éveillé. D\'un tigre dangereux à un orchestre de 75 musiciens, personne ne peut l\'aider. Jusqu\'à ce qu\'une nuit ...</p>', '', 1, '36', 5, '24,1 x 31,8', 0, 19.95, 16.00, '2019-01-01', '2001-01-01', 4, 4, 1),
(103, '9782897770297', '', '', '', 'Monsieur Vroum', '<p>Monsieur Vroum est un champion des courses. Il est toujours premier. Il ne ralentit jamais. Pas le temps d’écouter les autres parler, pas le temps d’apprécier un bon dîner. Même quand il s’endort, il est pressé…</p>', '', 1, '44', 4, '18,4 x 19,7', 0, 16.95, 12.00, '2018-02-01', '2001-01-01', 4, 4, 1),
(104, '9782923841700', '', '', '', 'L\'arbragan', '<p>Quand on est un petit garçon pas comme les autres et que cette différence ne nous embête pas, on peut très bien se lier d’amitié avec un arbre et l’appeler Bertolt. Il est un chêne très vieux et son immense feuillage est non seulement une cachette mais aussi une maison, un labyrinthe ou une forteresse. Un jour, un nouveau printemps arrive et Bertolt meurt. Quand un chat ou un oiseau décèdent, on sait quoi faire, mais pour un arbre, on fait quoi?</p>', '<p>L’arbragan est un récit d’une amitié hors du commun.</p>', 1, '96', 6, '15,2 x 19,1', 0, 19.95, 16.00, '2015-02-01', '2001-01-01', 4, 4, 1),
(105, '9782923841960', '', '', '', 'Azadah', '<p>Au contact d\'une photographe, une petite afghane constatera que le monde est vaste et que les possibilités sont infinies…</p>', '', 1, '56', 6, '16,5 x 21', 0, 18.95, 15.00, '2016-09-01', '2001-01-01', 4, 4, 1),
(106, '9782897770501', '', '', '', 'Le petit tabarnak', '<p>La Pastèque réédite le premier livre de Jacques Goldstyn sous une nouvelle couverture et un nouveau format!</p><p>Tout le monde sait que tabarnak est un gros mot. Le papa de Jules l’utilise très très rarement. Il faut qu’il soit méga fâché, comme aujourd’hui. Pourquoi on n’a pas le droit de prononcer ce mot-là? Et d’où ça vient le mot tabarnak?  Est-ce un gros monstre préhistorique, une maladie mortelle qui provoque des bubons ou le nom d’un terrible dictateur? </p><p>Grâce à l’intervention de monsieur le curé, Jules et ses amis vont trouver réponse à leurs questions: le tabarnak habite dans l’église! Prêts à déguerpir au moindre signe de danger, le petit groupe d’amis visite alors une église pour la première fois...</p>', '<p>artie intégrante du lexique de notre langue, véritable témoignage de l’héritage religieux du Québec, le sacre est ici expliqué avec intelligence et finesse par Jacques Goldstyn.</p>', 1, '40', 7, '19 x 15,2', 0, 16.95, 15.00, '2001-01-01', '2001-01-01', 4, 4, 1),
(107, '9782897770686', '', '', '', 'Les étoiles', '<p>Un jeune garçon juif et une petite fille musulmane se rencontrent dans un parc, dans le Mile End : quartier populaire de Montréal. Ils réalisent bientôt qu\'ils partagent une passion profonde pour les étoiles et les constellations, rêvant de devenir un jour scientifiques ou astronautes, d\'explorer l\'infini du ciel. Leur histoire consistera à rêver, à partager et à explorer ce qui est plus grand que nous, au-delà des questions religieuses.</p>', '<p>Véritable hymne à l\'amitié, Jacques Goldstyn nous offre, une fois de plus, un livre exceptionnel.</p>', 1, '68', 8, '19 x 24,1', 0, 18.95, 15.00, '2019-08-01', '2001-01-01', 4, 4, 1),
(108, '9782923841847', '', '', '', 'Rose à petits pois', '<p>Quand il fait beau, Adèle sourit, elle sifflote, elle chante à tue-tête, elle ouvre les fenêtres et laisse la porte ouverte.  Mais dès qu\'il pleut, Adèle reste enfermée. Elle n\'y peut rien, elle perd son entrain. La pluie, c\'est gris, froid et sombre.</p><p> Vous aurez alors beau dire tout ce que vous voulez, argumenter tant que vous pourrez, ça n\'est pas la peine de discuter, Adèle ne mettra pas une mèche de cheveux dehors... </p>', '<p>Rose à petits pois mettra un baume ensoleillée sur vos journées froides et grises.</p>', 1, '80', 8, '21 x 27,3', 0, 23.95, 19.00, '2016-05-01', '2001-01-01', 4, 4, 1),
(109, '9782897770693', '', '', '', 'Gâteau aux pommes', '<p>Partagez la promenade d’une petite fille à travers la campagne, pour récolter les ingrédients qui formeront un délicieux gâteau : miel des abeilles, lait des vaches et pommes des arbres.</p>', '<p>Cette histoire toute simple apprend aux plus petits à rendre hommage à la nature et à la remercier de ce qu’elle nous apporte.</p>', 1, '32', 4, '21,6 x 27', 0, 18.95, 15.00, '2019-09-01', '2001-01-01', 4, 4, 1),
(110, '9782897770822', '', '', '', 'Joseph Fipps', '<p>Joseph a cinq ans et parfois il fait des bêtises, comme la plupart des petits garçons. Quand Joseph fait une grosse bêtise, sa maman le gronde, comme le font la plupart des mamans. Il arrive aussi que les enfants que l\'on réprimande, ronchonnent et rouspètent, comme le petit Joseph Fipps!</p>', '<p>Joseph Fipps est le premier livre publié à la Pastèque de Geneviève Godbout, une illustratrice exceptionnelle. Nadine Robert signe un fort joli texte sur la relation mère-fils.</p><p>Nous profitons de cette réimpression pour proposer un format à l\'italienne, mieux adapté à ce livre. Voici une belle occaison de redécouvrir Joseph Fipps!</p>', 1, '40', 4, '30,5 x 21,6', 0, 19.95, 16.00, '2020-06-01', '2020-06-01', 4, 4, 1),
(111, '9782897770471', '', '', '', 'Malou', '<p>Aucun autre kangourou ne bondit comme le petit Malou. Un bond, deux bonds, trois bonds : il s’élance toujours plus haut et toujours plus fort. Mais un jour, sans comprendre ce qui lui arrive, Malou ne saute plus. Un nuage gris s’est installé sur lui…</p>', '', 1, '32', 4, '20,3 x 30,5', 0, 19.95, 16.00, '2018-11-01', '2001-01-01', 4, 4, 1),
(112, '9782923841557', '9782924342206', '978292434213', '', 'Le Grand Antonio', '<p>À vingt ans, Antonio arrive au Canada par bateau. Il est immense et très, très fort. Il mesure un mètre quatre-vingt-treize et pèse 225 kilos. Le Grand Antonio aime montrer sa force; il tire des autobus bondés de gens avec ses cheveux et combat des champions japonais. Ses cheveux sont des tresses épaisses et lorsqu’il met des tiges de métal à l’intérieur, elles deviennent des antennes qui lui permettent de communiquer avec les extraterrestres!</p>', '<p>Le Grand Antonio est le plus célèbre homme fort de Montréal et Élise Gravel lui rend hommage avec son premier livre à La Pastèque.</p>', 1, '56', 4, '19,1 x 24,1', 0, 18.95, 14.00, '2014-04-01', '2001-01-01', 4, 4, 1),
(113, '9782923841984', '', '', '', 'Ada la grincheuse en tutu', '<p>Ada est une grincheuse.  Elle n’aime pas les samedis, ni les ballades en voitures et surtout, elle déteste le ballet…  Qu’est-ce qui pourrait bien lui redonner le sourire?</p>', '<p>Nouveau titre pour Élise Gravel à La Pastèque après Le Grand Antonio! Découvrez une petite fille qui n’aime pas grand chose mais qui finira par trouver sa voie!</p>', 1, '36', 5, '22,9 x 22,9', 0, 14.95, 12.00, '2016-09-01', '2001-01-01', 4, 4, 1),
(114, '9782897770090', '', '', '', 'Grenouille fantôme', '<p>As-tu déjà entendu parler de Grenouille fantôme ? Celle qui, à la nuit tombée, se glisse dans ton lit pour te chatouiller les pieds ? Elle joue avec ton chat, dévore ce qu’il y a dans ton frigo et déplace même tes jouets, mais elle n’est pas facile à démasquer !</p>', '', 1, '40', 4, '17,8 x 22,9', 0, 16.95, 14.00, '2017-08-01', '2001-01-01', 4, 9, 1),
(115, '9782897770198', '', '', '', 'Paul et Antoinette', '<p>aul aime l’arrangement floral, Antoinette aime la boue... mais pourraient-ils vivre l’un sans l’autre ? Magnifiquement illustrée par Kerascoët, voici une histoire drôle, profonde, et magnifique sur l’acceptation, la confiance et l’importance d’être soi-même.</p>', '', 1, '40', 5, '21,6 x 26', 0, 21.95, 14.00, '2018-01-01', '2001-01-01', 4, 4, 1),
(116, '9782897770419', '', '', '', 'Je marche avec Vanessa - Le récit tout simple d\'une bonne action', '<p>Inspiré par des événements réels, Je marche avec Vanessa raconte le sentiment d\'impuissance et de colère qui se manifestent suite à un acte d\'intimidation et montre comment un seul acte de gentillesse peut amener toute une communauté à s’entraider.</p>', '<p>Avec des thèmes d’acceptation et de gentillesse, cette histoire de bien-être intemporel et profond résonnera avec les lecteurs, jeunes et moins jeunes.</p>', 1, '32', 5, '22,9 x 27,9', 0, 19.95, 16.00, '2019-01-01', '2001-01-01', 4, 4, 1),
(117, '9782897770525', '', '', '', 'À moi. À toi.', '<p>Quand Petit Panda tombe par hasard sur une tanière douillette, il réveille Grand Panda en sursaut.</p><p>« À moi », déclare, grognon, Grand Panda en poussant Petit Panda vers l’extérieur et en lui disant fermement : « À toi. »</p><p>Quand Petit Panda refuse de partir, Grand Panda lui offre un cerf-volant. Ah, qu’il s’amuse! Jusqu’au moment où les objets des autres animaux de la forêt s’emmêlent dans la queue du cerf-volant…</p>', '<p>Tous réussiront-ils à apprendre une nouvelle expression : « À nous »?</p>', 1, '40', 3, '21,3 x 25,4', 0, 18.95, 15.00, '2019-04-01', '2001-01-01', 4, 4, 1),
(119, '9782897770786', '9782924342084', '9782924342091', '', 'Renaud le petit renard', '<p>La buanderie, c’est nouveau pour Renaud. Depuis que son papa a emménagé dans son nouvel appartement, ils doivent se rendre à la buanderie de Monsieur Li pour faire leur lessive. Renaud n’aime pas ça : laver son linge sale en famille, c’est plus rigolo... sauf quand Lily Bottes de pluie est là!</p>', '<p>Premier livre pour Véronique Boisjoly et Katty Maurey à La Pastèque! Renaud le petit renard est un chouette livre sur le plaisir de laver son linge sale... à la buanderie!</p>', 1, '92', 4, '19,1 x 24,1', 0, 21.95, 18.00, '2012-05-01', '2001-01-01', 4, 4, 1),
(120, '9782923841748', '', '', '', 'La mouette aux croustilles', '<p>En volant près d’un bateau de croisière, une mouette attrape au vol un aliment jusque-là inconnu. C’est pointu, salé et très croustillant. Le coup de foudre est immédiat. Mais où retrouver cette nourriture bizarre ?  Complètement aveuglée par ce goût si envoûtant, la mouette ne se doute pas un seul instant des résultats  néfastes que peut avoir une diète riche… en chips !</p>', '<p>La mouette aux croustilles est un livre amusant sur les effets négatifs de la malbouffe.</p>', 1, '40', 4, '22,2 x 26,7', 0, 19.95, 16.00, '2015-05-01', '2001-01-01', 4, 4, 1),
(121, '9782922585674', '', '', '', 'Harvey', '<p>«J’ai entendu que notre porte s’ouvrait avec fracas puis ma mère Bouillon qui criait le nom de mon père Bouillon. Et j’ai entendu qu’on dévalait les marches en bois de la galerie puis qu’on roulait quelque chose dans l’entrée, qui passa tout près de nous. Et j’ai entendu des voix d’hommes que je ne connaissais pas et d’autres bruits de portes.»</p><p>Quelle image gardons nous des gens qui décèdent? Nous pouvons voir la même personne mais chacun d’entre nous avons une image différente de celle-ci. Personne ne voit ce qu’il y a de vrai pour lui seul. Et si il suffisait d’écouter ceux qui regardent?</p>', '<p>Lauréat de huit récompenses dont 2 Prix littéraires du Gouverneur général, une première dans l’histoire des prix, Harvey est une oeuvre d’exception.</p><p>Une rencontre extraordinaire entre une illustratrice d’exception et un écrivain qui travaille la langue comme le boulanger, le pain et le forgeron, l’acier.</p>', 1, '168', 10, '15,2 x 20,3', 0, 26.95, 23.00, '2009-02-01', '2001-01-01', 4, 4, 1),
(122, '9782897770167', '', '', '', 'Le brouillard', '<p>Pourquoi le brouillard est-il venu ? Quand partira-t-il ? Pourquoi personne ne remarque-t-il sa présence ? Campée dans un Nord froid et lointain, voici l’histoire envoûtante et mystérieuse d’un brouillard soudain, d’une fauvette jaune et d’un petit humain.</p><p>​</p>', '', 1, '40', 5, '20,3 x 28', 0, 19.95, 15.00, '2017-08-01', '2001-01-01', 4, 4, 1),
(123, '9782923841281', '', '', '', 'Tom la tondeuse', '<p>Tom est un petit garçon adorable et attachant. Il aime donner un coup de main et ferait n’importe quoi pour plaire à ses parents. Mais secrètement, Tom rêve de posséder quelque chose… Un jour, il ose demander à ses parents : « Je pourrais avoir une tondeuse ? ». C’est là que l’aventure commence...</p>', '', 1, '48', 4, '19,1 x 24,1', 0, 18.95, 15.00, '2015-08-01', '2001-01-01', 4, 4, 1),
(124, '9782923841274', '9782924342121', '9782924342121', '', 'Gustave', '<p>Une petite souris a perdu son ami parce qu\'un chat l\'a mangé. Elle ne pourra plus jouer avec lui. Comment le dire à sa maman? Elle avait pourtant prévenu qu\'il y avait un chat. Elle avait bien dit de jouer près de la maison et de ne pas trop s\'éloigner…</p>', '<p>Voici la première réunion de Pierre Pratt et Rémy Simard depuis 1998. Gustave est un livre sur la disparition, la perte. Sous une allure sérieuse se cache cependant une charmante histoire sur une peluche mangée par un chat… Il peut être difficile de le dire à sa maman mais celle-ci a plus d’un tour dans son sac pour parer à la tragédie!</p>', 1, '56', 4, '19,1 x 24,1', 0, 18.95, 15.60, '2013-08-01', '2001-01-01', 4, 4, 1),
(125, '9782897770761', '', '', '', 'Mauvaise herbe', '<p>Eugène est architecte. Il aime que tout soit bien droit et bien carré. Tout doit être classé, rangé et organisé. Parfois, c\'est difficile de ne pas pouvoir tout contrôler…</p>', '<p>Voici le premier livre de Thibaut Rassat à La Pastèque. Un formidable ouvrage sur l’importance de savoir faire face à l’inattendu!</p>', 1, '40', 6, '17,8 x 28', 0, 21.95, 18.00, '2020-02-01', '2001-01-01', 4, 4, 1),
(126, '9782897770013', '', '', '', 'Les Liszt', '<p>Les Liszt font des listes. Ils font des listes en hiver, au printemps, en été et à l’automne. Ils font des listes tous les jours sauf le dimanche. Mama Liszt, Papa Liszt, Winifred, Edward, Frederick et grand-père font des listes toute la journée. Puis un jour, un visiteur arrive. Comment vont-ils gérer quelque chose d’inattendu? Il n’est pas sur la liste de personne…</p>', '', 1, '40', 8, '18,4 x 30,5 ', 0, 21.95, 18.00, '2016-10-01', '2001-01-01', 4, 4, 1),
(127, '9782897770532', '', '', '', 'Mary, auteure de Frankenstein', '<p>Mary est une rêveuse. Le genre de fille à imaginer des choses qui n’ont jamais existé. </p><p>Voici l’histoire de Mary Shelley et de la manière dont une écrivaine vient au monde et une légende est forgée.</p>', '<p>Une histoire à vous glacer le sang, un château, une créature morte. Une découverte scientifique. Une nuit d’orage. Cette histoire raconte comment une jeune fille de dix-huit ans a tout réuni pour créer un des plus grands romans de tous les temps…</p>', 1, '48', 9, '19 x 28', 0, 21.95, 18.00, '2019-10-01', '2001-01-01', 4, 4, 1),
(128, '9782897770280', '', '', '', 'Opération Frankenstein', '<p>Boris, Victor et Elsa sont frères et soeur. Ils ne s’ennuient jamais, car ils trouvent toujours quelque chose à faire pour s’amuser; comme réanimer un vieux mannequin…</p>', '', 1, '34', 6, '17,1 x 22,2 ', 0, 9.95, 7.00, '2018-01-01', '2001-01-01', 4, 4, 1),
(129, '9782923841526', '9782924342220', '9782924342237', '', 'M. Flux', '<p>Il était une fois un garçon prénommé Martin, qui n’aimait pas le changement. En fait, ce n’est pas tant qu’il n’aimait pas le changement, mais plutôt qu’il ne le connaissait pas. Martin vivait avec sa famille dans une ville jolie, mais prévisible.</p><p>Jusqu’au jour où un certain Monsieur Flux fit son entrée dans le quartier à bord d’une vieille caravane bruyante. Non seulement Monsieur Flux connaissait le changement, mais il en était friand.</p>', '<p>Récit d’une amitié inattendue, M. Flux illustre la joie qui peut naître des changements, petits ou grands. </p>', 1, '32', 6, '19,1 x 24,1', 0, 16.95, 14.00, '2014-03-01', '2001-01-01', 4, 4, 1),
(130, '9782923841724', '', '', '', 'La jaquette', '<p>Il était une fois un livre. C’était un livre amusant et plein de surprises, mais il était aussi timide et se sentait délaissé. Jour après jour, il attendait d’être découvert par un enfant qui l’aimerait comme seuls sont aimés les livres préférés.</p>', '<p>a jaquette est une jolie histoire qui met en valeur la relation entre une fille et un livre, tout en donnant concrètement aux jeunes lecteurs la possibilité de nouer une relation semblable avec leur livre préféré…</p>', 1, '40', 4, '19,7 x 24,8 ', 0, 19.95, 16.00, '2015-09-01', '2001-01-01', 4, 4, 1),
(131, '9782897770129', '', '', '', 'Sanni et Jonas - Une nuit d\'hiver', '<p>Même quand la neige tombe à gros flocons et qu’ils doivent rester dans la maison, la petite Sanni et son frère Jonas ne s’ennuient jamais.  Une longue nuit d’hiver se prépare… Maman est partie travailler, grand-père dort dans la pièce d’à côté. Pour Sanni et Jonas, les jeux, les rires et les histoires ne font que commencer !</p>', '', 1, '72', 5, '20 x 25', 0, 18.95, 16.00, '2017-02-01', '2016-12-01', 2, 4, 1),
(132, '9782923841328', '978292342169', '978292342169', 'https://ici.radio-canada.ca/premiere/livres-audio/arts/41593/jane-le-renard-et-moi', 'Jane, le renard et moi', '<p>Hélène est victime de harcèlement et d’intimidation à son école. Elle trouve alors refuge dans le monde de Jane Eyre, le premier roman de Charlotte Brontë...</p><p>Jane, le renard et moi est un récit touchant qui présente avec justesse la méchanceté que les enfants peuvent déployer l’une envers l’autre.</p>', '<p>Au texte brûlant d’actualité de Fanny Britt s’ajoute le travail d’illustration d’Isabelle Arsenault : moderne et sensible, utilisant la couleur de façon surprenante, son dessin se révèle exceptionnel. </p><p>Pour leur première incursion dans la bande dessinée, les deux auteures réalisent une oeuvre parfaite.</p>', 1, '104', 12, '22,9 x 30,5', 0, 26.95, 22.20, '2012-11-01', '2012-09-01', 2, 4, 1),
(133, '9782897770006', '', '', '', 'Louis parmi les spectres', '<p>Louis a onze ans, une mère qui a peur de tout, un père qui pleure quand il boit et un petit frère obsédé par la soul américaine. Louis rêve de déclarer son amour à Billie, une compagne de classe indépendante et solitaire. Mais dans la réalité, rien à faire : dès qu’il s’approche d’elle, Louis se tétanise comme un clou rouillé. Accompagné de sa famille, de son fidèle ami Boris, et de ses spectres (ceux du passé comme ceux de son monde intérieur), Louis apprendra la vraie définition du courage.</p>', '<p>Jane, le renard et moi, la première collaboration entre les deux auteures, s\'est vendu à plus de 20 000 exemplaires depuis sa publication</p>', 1, '160', 12, '22,9 x 30,5', 0, 34.95, 24.00, '2016-10-01', '2016-08-01', 2, 4, 1),
(134, '9782897770150', '', '', '', 'L\'oiseau de Colette', '<p>Pauvre Colette, récemment déménagée dans un nouveau quartier, sa mère lui refuse un animal de compagnie. Mais lorsqu’elle cherchera à se faire de nouveaux amis, ce sera grâce à une perruche… imaginaire!  </p><p>​</p>', '<p>Ce livre est le premier d’une série mettant en vedette les personnages de la bande du Mile-End. Chaque livre apportera de nouvelles aventures, de nouvelles couleurs et des univers propres à la personnalité de chacun.</p>', 1, '48', 4, '17,8 x 22,9 ', 0, 18.95, 14.00, '2017-05-01', '2017-03-01', 2, 4, 1),
(135, '9782897770563', '', '', '', 'La quête d\'Albert', '<p>Albert ne souhaitait qu’une chose : lire calmement et silencieusement dans la ruelle. Malheureusement, l’arrivée de ses amis ne sera pas de tout repos !</p>', '<p>Ce livre est le deuxième d’une série mettant en vedette les personnages de la bande du Mile End. Chaque album apportera de nouvelles aventures, d’autres couleurs et des univers propres à la personnalité de chacun.</p>', 1, '48', 5, '17,8 x 22,9', 0, 18.95, 15.00, '2019-05-01', '2019-02-01', 2, 4, 1),
(136, '9782897770624', '', '', '', 'Opératique', '<p>La fin des classes approche, et Charlie doit trouver « sa » chanson pour un travail scolaire. Mais comment se concentrer alors qu’elle n’a d’yeux que pour Émile, ou qu’elle se demande pourquoi Luka a cessé de venir à l’école? En plus de tout ça, elle a accepté à contrecœur de participer à un numéro musical avec ses meilleures amies pour le spectacle de fin d’année.</p><p>Un jour, le professeur de musique fait entendre un opéra à ses élèves, et Charlie découvre Maria Callas. Plus elle en apprend sur la vie de cette artiste, et plus elle l’admire. Charlie saura-t-elle suivre l’exemple de la plus grande des divas dans sa propre vie?</p>', '<p>Ce premier roman graphique de Kyo Maclear et Byron Eggenschwiler illustre brillamment les sentiments opératiques de l’adolescence – l’amitié, l’amour, l’intimidation – et l’importance de la musique.</p>', 1, '140', 12, '16,5 x 22,9', 0, 21.95, 18.00, '2019-05-01', '2019-03-01', 2, 4, 2),
(137, '9782897770136', '', '', '', 'Mon coeur pédale', '<p>La tante de Simon, Chantal, est élancée et a des cheveux peroxydés. Sa repousse brune est très jolie. Ça donne du caractère à sa féminité.  Elle maîtrise très bien le look Samantha Fox. Elle ne ressemble en rien à son ainée. Depuis l’an dernier elle est en froid avec la mère de Simon car Chantal a acheté sa voiture sport ailleurs qu’au concessionnaire où travaille sa soeur.  </p><p>Pourtant, matante Chantal viendra passer quatre semaines à la maison pour garder Simon. Le temps d’un été, ce dernier fera l’apprentissage de la réconciliation, de la complicité, de la trahison et de la déception…</p>', '', 1, '104', 14, '20,3 x 29,8 ', 0, 27.95, 21.00, '2017-04-01', '2017-01-01', 2, 4, 1),
(138, '9782923841687', '', '', '', 'Un ballon sous la pluie', '<p>Quand sa petite soeur, Clémi, refuse de sortir sous la pluie, Mathilda se propose de lui apprendre tous les plaisirs d’un samedi pluvieux! </p>', '<p>Liniers, auteur des Macanudo, nous offre un portrait drôle et doux de ses filles avec cette bande dessinée jeunesse qui capture l’innocence et l’amour de deux soeurs.</p>', 1, '48', 4, '15,2 x 22,9', 0, 16.95, 13.00, '2015-02-01', '2015-01-01', 2, 4, 1),
(139, '9782897770044', '', '', '', 'Écrit et dessiné par Enriqueta ', '<p>La lecture de livres, c’est amusant... mais, les créer ? Armée de nouveaux crayons, Enriqueta est prête à essayer. Suivez les aventures d’une jeune fille courageuse, d’une armoire à linge immense et d’un monstre à trois têtes!</p>', '<p>Liniers nous offre, avec ce livre, une célébration du processus créatif comme lui seul peut le faire. Tout le monde à ses crayons!</p>', 1, '72', 5, '15,2 x 22,9 ', 0, 18.95, 15.00, '2016-11-01', '2016-09-01', 2, 4, 1),
(140, '9782923841892', '', '', '', 'Le facteur de l\'espace', '<p>Bob aime bien sa petite routine et adore son travail: pour lui, la poste, c\'est très important! À bord de son vaisseau, il distribue des lettres et des colis à un tas de gens, partout dans la galaxie. Du moins, la partie de la galaxie qu\'il connait. Par contre, ce matin, il y a un pépin au bureau de poste.</p>', '', 1, '146', 8, '19,1 x 25,4', 0, 21.95, 18.00, '2016-03-01', '2016-01-01', 2, 4, 2),
(141, '9782897770402', '', '', '', 'Crevette', '<p>Crevette est une petite sorcière gentille et un peu pleurnicharde, qui rêve de rentrer à l’école de sorcellerie mais rate toujours le concours d’entrée. Alors, lorsque Gamelle (un chat savant) et Joseph (un petit démon collecteur d’âmes) lui proposent de venir habiter dans leur grand manoir et d’étudier avec eux en échange d’un peu de ménage, elle accepte aussitôt. Le trio va développer des liens forts et Crevette finira même par entrer à l’école, où elle rencontrera d\'autres amis étonnants.</p>', '<p>Ce livre rempli de tendresse et d\'humour possède un univers et un style graphique unique. C’est le premier livre d’Élodie Shanta à La Pastèque. </p>', 1, '140', 6, '19 x 24,8', 0, 21.95, 16.00, '2019-03-01', '2019-01-01', 2, 4, 1),
(142, '9782923841069', '', '', '', 'Boris - L\'intégrale', '<p>Boris est un petit garçon qui ne sait pas encore marcher. Ce qu\'il aime par-dessus tout, c\'est débouler l\'escalier, s\'imaginer plus grand et voir les femmes, sa mère en tête, comme des bars laitiers ambulants... Son environnement est aussi composé essentiellement de sa soeur dont le passe-temps favori est de mettre son petit frère dans des situations impossibles, son père resté un grand enfant, et Paulette, la fleur douée de conscience.</p>', '<p>Boris a été prépublié dans le journal La Presse et Le Quotidien au Québec pendant plusieurs mois il y a quelques années.</p><p>Aujourd’hui, l’occasion est idéale pour sortir une édition définitive, révisée et intégrale des frasques de Boris! Sous couverture cartonnée, retrouvez les 4 tomes initialement publiés par La Pastèque.</p>', 1, '208', 5, '20,3 x 22,9 ', 0, 29.95, 24.60, '2012-11-01', '2012-07-01', 2, 2, 1),
(143, '9782897770556', '', '', '', 'La pierre de lune', '<p>Lili est toujours dans la lune. Lors d’une sortie scolaire au Cosmodôme, Boris décide de l’aider. Mais pour réussir, il doit lui trouver la pierre de lune qui se trouve… sur la lune ! Aucun problème, Boris a un plan et une fusée à emprunter…</p>', '', 1, '64', 7, '17,1 x 21,6 ', 0, 12.95, 10.00, '2019-03-01', '2019-01-01', 2, 4, 2),
(144, '9782897770426', '', '', '', '13e avenue tome 1', '<p>Depuis que sa mère lui a annoncé au retour de l’école une nouvelle qui a chamboulé leur existence, Alexis se demande si ça existe, des journées comme les autres.  Déraciné de son Saguenay natal et transplanté à Montréal, où il n’a jamais mis les pieds, Alexis atterrit à Rosemont privé de repères et désarmé face aux défis qui s’accumulent devant lui.</p><p>Heureusement, Alexis a pour l’aider son ami Ernest, le voisin d’en haut, un garçon timide que personne ne remarque mais qui sait tout sur tout le monde…</p>', '', 1, '176', 10, '17,8 x 24,1', 0, 19.95, 16.00, '2018-11-01', '2018-09-01', 2, 3, 2),
(145, '9782897770631', '', '', '', 'Le facteur de l\'espace 2 - Les pilleurs à moteurs', '<p>Dans cette nouvelle aventure, Bob, notre facteur de l’espace, doit relever un défi de taille; travailler en équipe! Avec Marcelle, sa collègue à l’entraînement, ils devront livrer une seule et unique lettre aujourd’hui. Une tâche bien simple en apparence qui rapidement se transformera en une véritable quête d’un bout à l’autre de la galaxie! En plus, notre duo n’est pas seul, quelqu’un semble s’intéresser de très près à cette mystérieuse enveloppe...</p>', '<p>La suite tant attendue!</p>', 1, '152', 8, '19,1 x 25,4', 0, 21.95, 18.00, '2019-04-01', '2019-02-01', 2, 4, 2),
(146, '9782897770631', '', '', '', 'La grande métamorphose de Théo', '', '', 1, '0', 0, '', 0, 0.00, 0.00, '2019-04-01', '2019-02-01', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `livres_auteurs`
--

CREATE TABLE `livres_auteurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `livre_id` int(10) UNSIGNED NOT NULL,
  `auteur_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `livres_auteurs`
--

INSERT INTO `livres_auteurs` (`id`, `livre_id`, `auteur_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 2),
(5, 5, 3),
(6, 6, 4),
(7, 6, 5),
(8, 7, 6),
(9, 8, 7),
(10, 9, 8),
(11, 10, 9),
(12, 11, 9),
(13, 12, 9),
(14, 13, 10),
(15, 14, 11),
(16, 14, 12),
(17, 15, 13),
(18, 16, 14),
(19, 17, 14),
(20, 18, 15),
(21, 19, 16),
(22, 20, 17),
(23, 21, 17),
(24, 22, 17),
(25, 23, 17),
(26, 24, 18),
(27, 24, 19),
(28, 25, 18),
(29, 25, 19),
(30, 26, 20),
(31, 27, 21),
(32, 28, 21),
(33, 28, 22),
(34, 29, 21),
(35, 30, 21),
(36, 31, 21),
(37, 32, 23),
(38, 32, 24),
(39, 33, 23),
(40, 33, 25),
(41, 34, 23),
(42, 34, 25),
(43, 35, 23),
(44, 35, 25),
(45, 36, 23),
(46, 36, 25),
(47, 37, 23),
(48, 37, 26),
(49, 38, 27),
(50, 38, 28),
(51, 39, 29),
(52, 40, 29),
(53, 40, 22),
(54, 41, 29),
(55, 41, 30),
(56, 42, 29),
(57, 43, 31),
(58, 44, 32),
(59, 44, 33),
(60, 45, 34),
(61, 45, 35),
(62, 46, 36),
(63, 47, 36),
(64, 48, 37),
(65, 49, 38),
(66, 50, 38),
(67, 51, 39),
(68, 52, 40),
(69, 53, 40),
(70, 54, 40),
(71, 55, 40),
(72, 56, 40),
(73, 57, 40),
(74, 58, 40),
(75, 59, 40),
(76, 60, 40),
(77, 61, 40),
(78, 62, 40),
(79, 63, 41),
(80, 63, 42),
(81, 64, 41),
(82, 64, 43),
(83, 65, 44),
(84, 66, 44),
(85, 67, 45),
(86, 68, 46),
(87, 69, 46),
(88, 69, 47),
(89, 70, 46),
(90, 71, 48),
(91, 71, 49),
(92, 72, 50),
(93, 73, 50),
(94, 73, 51),
(95, 74, 50),
(96, 75, 52),
(101, 81, 53),
(102, 81, 54),
(103, 82, 53),
(104, 82, 55),
(105, 83, 56),
(106, 83, 57),
(107, 84, 56),
(108, 84, 57),
(109, 85, 56),
(110, 86, 56),
(111, 86, 58),
(112, 87, 56),
(113, 87, 59),
(114, 88, 60),
(115, 88, 61),
(116, 89, 62),
(117, 90, 63),
(118, 90, 64),
(119, 91, 65),
(120, 92, 17),
(121, 92, 67),
(122, 92, 66),
(123, 93, 17),
(124, 93, 67),
(125, 94, 68),
(126, 94, 69),
(127, 95, 70),
(128, 95, 71),
(129, 96, 72),
(130, 96, 61),
(131, 97, 73),
(132, 98, 73),
(133, 99, 74),
(134, 100, 74),
(135, 101, 75),
(136, 102, 75),
(137, 102, 76),
(138, 103, 77),
(139, 104, 78),
(140, 105, 78),
(141, 106, 78),
(142, 107, 78),
(143, 108, 80),
(144, 108, 79),
(145, 109, 80),
(146, 109, 81),
(147, 110, 80),
(148, 110, 82),
(149, 111, 80),
(150, 112, 83),
(151, 113, 83),
(152, 114, 84),
(153, 115, 85),
(154, 116, 85),
(155, 117, 86),
(156, 117, 87),
(158, 119, 88),
(159, 119, 89),
(160, 120, 90),
(161, 121, 91),
(162, 121, 92),
(163, 122, 93),
(164, 122, 57),
(165, 123, 94),
(166, 123, 95),
(167, 124, 96),
(168, 124, 44),
(169, 125, 97),
(170, 126, 98),
(171, 126, 57),
(172, 127, 98),
(173, 128, 100),
(174, 129, 101),
(175, 129, 57),
(176, 130, 102),
(177, 130, 59),
(181, 131, 103),
(182, 131, 104),
(183, 132, 56),
(184, 132, 105),
(185, 133, 56),
(186, 133, 105),
(187, 134, 56),
(188, 135, 56),
(189, 136, 106),
(190, 136, 57),
(191, 137, 107),
(192, 137, 108),
(193, 138, 109),
(194, 139, 109),
(195, 140, 110),
(196, 141, 111),
(197, 142, 44),
(198, 143, 44),
(199, 144, 112),
(200, 144, 113),
(201, 145, 110),
(202, 146, 131),
(203, 146, 132);

-- --------------------------------------------------------

--
-- Structure de la table `reconnaissances`
--

CREATE TABLE `reconnaissances` (
  `id` int(10) UNSIGNED NOT NULL,
  `la_reconnaissance` varchar(1500) DEFAULT NULL,
  `livre_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `reconnaissances`
--

INSERT INTO `reconnaissances` (`id`, `la_reconnaissance`, `livre_id`) VALUES
(1, '<p>Sélection Polar – Festival International de la bande dessinée d’Angoulême 2014</p>', 1),
(2, '<p>White Ravens 2018– Sélection</p>', 7),
(3, '<p>Prix BD des collégiens 2017 - Finaliste</p>', 8),
(4, '<p>Sélection Patrimoine – Festival International de la bande dessinée d’Angoulême 2015</p>', 16),
(5, '<p>Prix Lux 2011 - Bande dessinée</p>', 18),
(6, '<p>Festival de la BD francophone de Québec 2010 - Prix Réal-Fillion - Auteur québécois, scénariste ou dessinateur, s’étant le plus illustré avec son premier album professionnel - Nomination</p>', 19),
(7, '<p>Prix BD Cezam Inter-CE Ile de France 2018</p>', 24),
(8, '<p>Doug Wright Awards 2011 - Best Book</p>', 27),
(9, '<p>Doug Wright Awards 2011 - Best Book</p>', 29),
(10, '<p>Bédélys Québec 2013– Les Amis de la Bibliothèque de Montréal - Album québécois de l’année</p>', 32),
(11, '<p>Festival de la BD francophone de Québec 2007 - Prix Réal-Filion - Nomination</p>', 38),
(12, '<p>Gourmand World Cookbook Awards 2009-  Best Cookbook Illustrations - Canada French</p>', 49),
(13, '<p>Festival de la BD francophone de Québec 2000 - Meilleur espoir québécois</p>', 52),
(14, '<p>Festival de la BD francophone de Québec 2003 - Prix Réal Fillion - Meilleure bande dessinée québécoise de l’année</p>', 54),
(15, '<p>Doug Wright Awards 2006 - Best Book</p>', 55),
(16, '<p>Bédélys Québec 2005 - Association des Libraires du Québec - Nomination</p>', 56),
(17, '<p>Eisner Awards 2008 - Best Graphic Album - New - Nomination</p>', 57),
(18, '<p>Prix des étudiants et étudiantes en bande dessinée de l\'ÉMI 2009</p>', 58),
(19, '<p>Festival de la BD francophone de Québec 2010 - Grand prix de la ville de Québec - Meilleur album de langue française publié au Québec - Nomination</p>', 59),
(20, '<p>Prix Bédéis Causa 2016 – Grand prix de la Ville de Québec - Finaliste</p>', 60),
(21, '<p>Prix Bédéis Causa 2016 – Prix Réal-Fillion – Normand Grégoire - Finaliste</p>', 63),
(22, '<p>Prix Expozine 2018 - BD francophone - Nomination</p>', 67),
(23, '<p>Festival de la BD francophone de Québec 2006 - Grand prix de la ville de Québec - Meilleure bande dessinée québécoise.</p>', 68),
(24, '<p>Joe Shuster Awards 2008 - Outstanding canadian Comic Book Writer - Philippe Girard</p>', 69),
(25, '<p>Festival Pulp 2018– Sélection</p>', 7),
(26, '<p>Prix des libraires du Québec- catégorie BD – Première sélection</p>', 8),
(27, '<p>Bédéis Causa 2018 - Grand prix de la ville de Québec- Meilleur album de langue française publié au Québec par des auteur.e.s canadiens. - Nomination</p>', 8),
(28, '<p>Prix de la critique ACBD de la bande dessinée québécoise 2016</p>', 24),
(29, '<p>Prix Bédéis Causa 2017 – Grand prix de la Ville de Québec</p>', 24),
(30, '<p>Bédélys Québec 2010 - Les Amis de la Bibliothèque de Montréal - Album québécois de l’année  - Nomination</p>', 27),
(31, '<p>Festival de la BD francophone de Québec 2007 - Prix Ville de Québec - Nomination</p>', 38),
(32, '<p>Bédélys Québec 2000 - Album québécois de l’année</p><p>Harvey Award 2001 - Best New Talent</p><p>Eisner Awards 2001 - Best Single Issue - Nomination</p>', 52),
(33, '<p>Bédélys Québec 2002 - Album québécois de l’année</p><p>Bédélys Média 2002</p><p>Prix BD Québec 2002 - Meilleur album</p>', 54),
(34, '<p>Festival de la BD francophone de Québec 2005 - Grand prix de la ville de Québec - Meilleure bande dessinée québécoise.</p><p>Bédélys d’Or 2004 - Corporation des Bibliothécaires professionnels - Nomination</p><p>Bédélys Québec 2004 - Association des Libraires du Québec - Nomination</p>', 55),
(35, '<p>Ignatz Awards 2004 - Outstanding Story - Nomination</p>', 56),
(36, '<p>Ignatz Awards 2008- Outstanding Graphic Novel - Nomination</p><p>Joe Shuster Awards 2007- Créateur exceptionnel de Bandes Dessinées Canadien Francophone</p><p>Bédélys d\'Or 2006- Corporation des Bibliothécaires du Québec - Nomination</p><p>Bédélys Québec 2006 - Association des libraires du Québec - Album québécois de l’année</p><p>Festival de la BD francophone de Québec 2007 - Grand prix de la ville de Québec - Meilleure bande dessinée québécoise.</p>', 57),
(37, '<p>Bédélys d\'Or 2009- Corporation des Bibliothécaires du Québec</p><p>Bédélys Québec 2009 - Les Amis de la Bibliothèque de Montréal - Album québécois de l’année</p><p>Joe Shuster Awards 2010 - Cartonnist/Créateur</p><p>Festival de la BD francophone de Québec 2010 - Grand prix de la ville de Québec - Meilleur album de langue française publié au Québec.</p><p>Fauve Fnac-SNCF - 37e Festival international de la bande dessinée d’Angoulême - Prix du public</p><p>Grand Prix du livre de la ville de Montréal - Nomination</p><p>Prix du grand public du Salon du livre de Montréal - Nomination</p>', 58),
(38, '<p>Prix Bédélys Québec 2012– Les Amis de la Bibliothèque de Montréal -Meilleure bande dessinée publiée au Québec - Nomination</p><p>39e Festival international de la bande dessinée d’Angoulême 2012 - Sélection jeunesse</p>', 59),
(39, '<p>Prix Bédélys Québec 2015 - Finaliste</p>', 60),
(40, '<p>Prix Bédéis Causa 2016 – Grand prix de la Ville de Québec - Finaliste</p><p>Prix Bédélys Québec 2015 - Finaliste</p>', 63),
(41, '<p>Prix de la critique ACBD de la bande dessinée québécoise 2018</p><p>Bédéis Causa 2018 - Grand prix de la ville de Québec- Meilleur album de langue française publié au Québec par des auteur.e.s canadiens</p><p>Bédélys Québec 2018</p><p>Prix BD des collégiens 2019</p>', 67),
(42, '<p>Shuster awards 2006 - Créateur canadien exceptionnel de Bandes Dessinées (écrivain/dessinateur) - Nomination.</p><p>Bédélys Québec 2005 - Association des libraires du Québec - Album québécois de l’année - Nomination.</p>', 68),
(43, '<p>Bédélys Québec 2007 - Album québécois de l’année</p><p>Festival de la BD francophone de Québec 2007 - Grand prix de la ville de Québec - Meilleure bande dessinée québécoise. - Nomination</p>', 69),
(44, '<p>Prix BD Québec 2002 - Meilleur album</p>', 54),
(45, '<p>Festival de la BD francophone de Québec 2005 - Grand prix de la ville de Québec - Meilleure bande dessinée québécoise.</p>', 55),
(46, '<p>Bédélys d’Or 2004 - Corporation des Bibliothécaires professionnels - Nomination</p>', 55),
(47, '<p>Bédélys Québec 2004 - Association des Libraires du Québec - Nomination</p>', 55),
(48, '<p>Ignatz Awards 2004 - Outstanding Story - Nomination</p>', 56),
(49, '<p>Ignatz Awards 2008- Outstanding Graphic Novel - Nomination</p>', 57),
(50, '<p>Joe Shuster Awards 2007- Créateur exceptionnel de Bandes Dessinées Canadien Francophone</p>', 57),
(51, '<p>Bédélys d\'Or 2006- Corporation des Bibliothécaires du Québec - Nomination</p>', 57),
(52, '<p>Bédélys Québec 2006 - Association des libraires du Québec - Album québécois de l’année</p>', 57),
(53, '<p>Festival de la BD francophone de Québec 2007 - Grand prix de la ville de Québec - Meilleure bande dessinée québécoise.</p>', 57),
(54, '<p>Bédélys d\'Or 2009- Corporation des Bibliothécaires du Québec</p>', 58),
(55, '<p>Bédélys Québec 2009 - Les Amis de la Bibliothèque de Montréal - Album québécois de l’année</p>', 58),
(56, '<p>Joe Shuster Awards 2010 - Cartonnist/Créateur</p>', 58),
(57, '<p>Festival de la BD francophone de Québec 2010 - Grand prix de la ville de Québec - Meilleur album de langue française publié au Québec.</p>', 58),
(58, '<p>Fauve Fnac-SNCF - 37e Festival international de la bande dessinée d’Angoulême - Prix du public</p>', 58),
(59, '<p>Grand Prix du livre de la ville de Montréal - Nomination</p>', 58),
(60, '<p>Prix du grand public du Salon du livre de Montréal - Nomination</p>', 58),
(61, '<p>Prix Bédélys Québec 2012– Les Amis de la Bibliothèque de Montréal -Meilleure bande dessinée publiée au Québec - Nomination</p>', 59),
(62, '<p>39e Festival international de la bande dessinée d’Angoulême 2012 - Sélection jeunesse</p>', 59),
(63, '<p>Prix Bédélys Québec 2015 - Finaliste</p>', 60),
(64, '<p>Prix Bédéis Causa 2016 – Grand prix de la Ville de Québec - Finaliste</p>', 63),
(65, '<p>Prix Bédélys Québec 2015 - Finaliste</p>', 63),
(66, '<p>Prix Bédélys Québec 2015 - Finaliste</p>', 63),
(67, '<p>Prix de la critique ACBD de la bande dessinée québécoise 2018</p>', 67),
(68, '<p>Bédéis Causa 2018 - Grand prix de la ville de Québec- Meilleur album de langue française publié au Québec par des auteur.e.s canadiens</p>', 67),
(69, '<p>Bédélys Québec 2018</p>', 67),
(70, '<p>Prix BD des collégiens 2019</p>', 67),
(71, '<p>Shuster awards 2006 - Créateur canadien exceptionnel de Bandes Dessinées (écrivain/dessinateur) - Nomination.</p>', 68),
(72, '<p>Bédélys Québec 2005 - Association des libraires du Québec - Album québécois de l’année - Nomination.</p>', 68),
(73, '<p>Bédélys Québec 2007 - Album québécois de l’année</p>', 69),
(74, '<p>Festival de la BD francophone de Québec 2007 - Grand prix de la ville de Québec - Meilleure bande dessinée québécoise. - Nomination</p>', 69),
(81, '<p>Prix Jeunesse des libraires du Québec - volet 0-4 ans</p>', 83),
(82, '<p>Liste d’honneur d’IBBY 2018 - Traduction - Sophie Chisogne</p>', 86),
(83, '<p>Prix nénuphar de l’album jeunesse 2017 – Nomination</p>', 86),
(84, '<p>Ragazzi Award 2014 - Fiction</p>', 88),
(85, '<p>Prix TD de littérature canadienne pour l\'enfance et la jeunesse 2014 - Finaliste</p>', 88),
(86, '<p>Prix du Gouverneur Général 2014 - catégorie Littérature jeunesse - texte – Finaliste</p>', 88),
(87, '<p>Prix du Gouverneur Général 2014 - catégorie Littérature jeunesse - illustrations – Finaliste</p>', 88),
(88, '<p>Prix littéraire Ravinala 2018 - Catégorie CE2 et CM1</p>', 94),
(89, '<p>Sélection Prix des Incorruptibles 2015-2016</p>', 94),
(90, '<p>Prix du Gouverneur Général 2015 – catégorie Littérature jeunesse - livres illustrés</p>', 94),
(91, '<p>Prix Des Incorruptibles 2017 - Catégorie CE2 CM1</p>', 94),
(92, '<p>Prix jeunesse des libraires du Québec 2015 – Finaliste – 6-11 ans - Québec</p>', 94),
(93, '<p>Prix Alvine-Bélisle 2014</p>', 94),
(94, '<p>Prix TD de littérature canadienne pour l\'enfance et la jeunesse 2015 - Finaliste</p>', 94),
(95, '<p>White Ravens 2015 - Sélection</p>', 94),
(96, '<p>Prix littéraires du Gouverneur général 2018 - Catégorie Littérature jeunesse - Livre illustré - Finaliste</p>', 96),
(97, '<p>Salon du livre et de la presse jeunesse de Montreuil - Pépite 2017 – 1ere sélection</p>', 97),
(98, '<p>La nuit du livre 2018 - Pré-selection</p>', 97),
(99, '<p>Prix des libraires du Québec - Catégorie jeunesse - Finaliste - 0-5 ans</p>', 100),
(100, '<p>Salon du livre et de la presse jeunesse de Montreuil - Pépite 2017 – 1ere sélection</p>', 101),
(101, '<p>Prix Sorcières Premières lectures 2016</p>', 104),
(102, '<p>Prix TD de littérature canadienne pour l\'enfance et la jeunesse 2016</p>', 104),
(103, '<p>Prix du livre jeunesse des Bibliothèques de Montréal 2016</p>', 104),
(104, '<p>Prix jeunesse des libraires du Québec 2015 – Lauréat – 6-11 ans - Québec</p>', 104),
(105, '<p>Prix du Gouverneur Général 2014 - catégorie Littérature jeunesse – livres illustrés – Finaliste</p>', 104),
(106, '<p>Prix du livre jeunesse des Bibliothèques de Montréal 2017</p>', 105),
(107, '<p>Prix du Gouverneur Général 2017 - catégorie Littérature jeunesse - livres illustrés</p>', 105),
(108, '<p>Prix Harry Black de l\'album jeunesse 2017 - Finaliste</p>', 105),
(109, '<p>Prix jeunesse des libraires du Québec 2018 - Liste préliminaire, 6-11 ans QUÉBEC</p>', 105),
(110, '<p>Prix des libraires du Québec - Catégorie jeunesse - Finaliste - 6-11 ans</p>', 107),
(111, '<p>Grand Prix lux 2015</p>', 112),
(112, '<p>Prix jeunesse des libraires du Québec 2015 – Finaliste – 6-11 ans - Québec</p>', 112),
(113, '<p>Prix du livre jeunesse des bibliothèques de Montréal - 2010</p><p>​</p>', 121),
(114, '<p>Joe Shuster Awards 2010 - Writer/Écrivain - Nomination</p>', 121),
(115, '<p>Prix littéraire Récit 2009 - Hervé Bouchard - Salon du livre du Saguenay-Lac-Saint-Jean</p>', 121),
(116, '<p>Prix littéraires du Gouverneur général - Hervé Bouchard - Littérature jeunesse Texte</p>', 121),
(117, '<p>Prix littéraires du Gouverneur général - Janice Nadeau - Littérature jeunesse Illustrations</p>', 121),
(118, '<p>Grand Prix Lux 2009 - Illustration - Janice Nadeau</p>', 121),
(119, '<p>Grand Prix Lux 2009 - Livre - Janice Nadeau</p>', 121),
(120, '<p>Prix Lux 2009 - Couverture de Livre et magazine - Janice Nadeau</p>', 121),
(121, '<p>Applied Arts 2010 - Photography Illustration Awards</p>', 121),
(122, '<p>Prix Jeunesse des libraires du Québec - volet 6-11 ans</p>', 129),
(130, '<p>Prix jeunesse des libraires du Québec 2018 - Liste préliminaire, catégorie 0-5 ans QUÉBEC</p>', 131),
(131, '<p>Prix TD de la littérature canadienne pour l\'enfance et la jeunesse 2013 - Finaliste</p>', 132),
(132, '<p>Joe Shuster Awards 2013 - Dessinateur de l’année - Isabelle Arsenault</p>', 132),
(133, '<p>Joe Shuster Awards 2013 - Scénariste - Fanny Britt</p>', 132),
(134, '<p>Bédéis Causa 2013 - Grand prix de la ville de Québec - Meilleur album de langue française publié au Québec - Nomination</p>', 132),
(135, '<p>Bédéis Causa 2013 - Prix Réal-Fillion - Auteur québécois, scénariste ou dessinateur, s’étant le plus illustré avec son premier album professionnel</p>', 132),
(136, '<p>Pépites 2013 du Salon du livre et de la presse jeunesse de Montreuil - Pré-selection</p>', 132),
(137, '<p>8e Prix du livre jeunesse des Bibliothèques de Montréal - Finaliste</p>', 132),
(138, '<p>Prix du Gouverneur Général 2013 – Isabelle Arsenault – catégorie Littérature jeunesse – Livres illustrés</p>', 132),
(139, '<p>Prix du Gouverneur Général 2013 – Fanny Britt – catégorie Littérature jeunesse – Texte - Nomination</p>', 132),
(140, '<p>Sélection jeunesse – Festival International de la bande dessinée d’Angoulême 2014</p>', 132),
(141, '<p>Prix Artémisia 2014 – Nomination</p>', 132),
(142, '<p>Grand Prix Lux 2013 – Illustration – Isabelle Arsenault</p>', 132),
(143, '<p>Eisner Awards 2018 - Best Publications for Teens (age 13-17) - Best Penciller/Inker - Best Lettering  - Nominations </p>', 133),
(144, '<p>Sélection jeunesse FIBD Angoulême 2016</p>', 133),
(145, '<p>Prix du livre jeunesse des Bibliothèques de Montréal 2017 – Finaliste</p>', 133),
(146, '<p>Prix Bédélys jeunesse 2016 - Finaliste</p>', 133),
(147, '<p>Prix du Gouverneur Général 2017 - catégorie Littérature jeunesse - livres illustrés – Finaliste</p>', 133),
(148, '<p>Prix Lux 2017 - Grand Prix Bande dessinée jeunesse</p>', 133),
(149, '<p>Prix Alvine-Bélisle 2017</p>', 133),
(150, '<p>Prix de la critique ACBD de la bande dessinée québécoise 2017 - Finaliste</p>', 133),
(151, '<p>White Ravens 2017 - Sélection</p>', 133),
(152, '<p>Prix jeunesse des libraires du Québec 2018 - Liste préliminaire, 12-17 ans QUÉBEC</p>', 133),
(153, '<p>Prix Tamarac 2018 - Finaliste</p>', 133),
(154, '<p>Prix jeunesse des libraires du Québec 2018 - Catégorie 0-5 ans QUÉBEC</p>', 134),
(155, '<p>Prix des libraires du Québec - Catégorie jeunesse - Liste préliminaire - BD Québec</p>', 135),
(156, '<p>Festival international de la bande dessinée d\'Angoulême - Prix des écoles 2020</p>', 135),
(157, '<p>Salon du livre et de la presse jeunesse de Montreuil - Pépite 2017 – 1ere sélection</p>', 137),
(158, '<p>Salon du livre et de la presse jeunesse de Montreuil - Bandes dessinées 2018 - Sélection</p>', 141),
(159, '<p>Prix des libraires du Québec - Catégorie jeunesse - Liste préliminaire - BD Hors-Québec</p>', 141),
(160, '<p>Prix des libraires du Québec - Catégorie jeunesse - Liste préliminaire - BD Québec</p>', 144),
(161, '<p>Festival International de la bande dessinée d\'Angoulême - Sélection Collèges 2020 - Finaliste</p>', 144);

-- --------------------------------------------------------

--
-- Structure de la table `traductions`
--

CREATE TABLE `traductions` (
  `id` int(10) UNSIGNED NOT NULL,
  `traduit_en` varchar(45) DEFAULT NULL,
  `traduit_de` varchar(45) DEFAULT NULL,
  `traduit_par` varchar(100) DEFAULT NULL,
  `livre_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `traductions`
--

INSERT INTO `traductions` (`id`, `traduit_en`, `traduit_de`, `traduit_par`, `livre_id`) VALUES
(1, '<p>Chinois simplifié (Monde)</p>', '', '<p> Ginkgo (Beijing) Book Co., Ltd</p>', 7),
(2, '', '<p>l\'Italien</p>', '<p>Véronique Dassas</p>', 7),
(3, '<p>Russe (Monde)</p>', '', '<p>Albus Corvus</p>', 7),
(4, '<p>Espagnol</p>', '', '<p>Thule Ediciones</p>', 7),
(5, '', '<p>l\'anglais (États-Unis)</p>', '<p>Sophie Chisogne, La Pastèque</p>', 10),
(6, '', '<p>l\'anglais (États-Unis)</p>', '<p>Mathieu Leroux, La Pastèque</p>', 11),
(7, '', '<p>l\'anglais (États-Unis)</p>', '<p>Lori Saint-Martin et Paul Gagné, La Pastèque</p>', 12),
(8, '', '<p>l\'anglais (Canada)</p>', '<p>Sidonie Van Den Dries, La Pastèque</p>', 13),
(9, '', '<p>l\'anglais (Canada)</p>', '<p>Sophie Chisogne. La Pastèque</p>', 15),
(10, '<p>Anglais</p>', '', '<p>Drawn & Quarterly</p>', 27),
(11, '<p>Anglais (Monde)</p>', '', '<p>Conundrum Press</p>', 28),
(12, '<p>Espagnol (Monde)</p>', '', '<p>Ediciones La Cúpula</p>', 28),
(13, '<p>Anglais (Monde)</p>', '', '<p>Conundrum Press</p>', 32),
(14, '<p>Coréen (Monde)</p>', '', '<p>Esoope Publisinhg Co.</p>', 32),
(15, '<p>Anglais</p>', '', '<p>Drawn & Quarterly</p>', 52),
(16, '<p>Espagne</p>', '', '<p>Fulgencio Pimentel</p>', 52),
(17, '<p>Néerlandais</p>', '', '<p>Oog & Blik</p>', 52),
(18, '<p>Néerlandais</p>', '', '<p>Oog & Blik</p>', 54),
(19, '<p>Anglais</p>', '', '<p>Drawn & Quarterly</p>', 54),
(20, '<p>Croate</p>', '', '<p>Naklada Fibra</p>', 54),
(21, '<p>Allemand</p>', '', '<p>Edition 52</p>', 54),
(22, '<p>Espagne</p>', '', '<p>Fulgencio Pimentel</p>', 54),
(23, '<p>Anglais</p>', '', '<p>Drawn & Quarterly</p>', 55),
(24, '<p>Espagne</p>', '', '<p>Astiberri ediciones</p>', 55),
(25, '<p>Anglais (Monde)</p>', '', '<p>Conundrum Press</p>', 67),
(51, '<p>Chinois simplifié - (Chine)</p>', '', '<p>Cnpiec Digital Printing</p>', 81),
(52, '<p>Catalan - (Monde) </p>', '', '<p>La Casita Roja</p>', 81),
(53, '<p>Espagnol - (Monde) </p>', '', '<p>La Casita Roja</p>', 81),
(54, '<p>Anglais</p>', '', '<p>Kids Can Press</p>', 83),
(55, '', '<p>l\'anglais (Canada)</p>', '<p>Fanny Britt </p>', 84),
(56, '', '<p>l\'anglais (États-Unis)</p>', '<p>Mathieu Leroux</p>', 87),
(57, '<p>Italien</p>', '', '<p>BAO Publishing</p>', 88),
(58, '<p>Polonais</p>', '', '<p>Wydawnictwo Dwie Siostry</p>', 88),
(59, '<p>Chinois simplifié</p>', '', '<p>Oriental Babies & Kids Limited)</p>', 88),
(60, '<p>Chinois complexe </p>', '', '<p>Grimm Press</p>', 88),
(61, '<p>Coréen </p>', '', '<p>Sigongsa</p>', 88),
(62, '<p>Anglais - Amérique du Nord</p>', '', '<p>Enchanted Lion</p>', 88),
(63, '<p>Portugais</p>', '', '<p>Editora Positivo Ltda</p>', 88),
(64, '<p>Anglais</p>', '', '<p>Chronicle Books</p>', 94),
(65, '<p>Coréen</p>', '', '<p>Imazu</p>', 94),
(66, '<p>Catalan</p>', '', '<p>Editorial Cruilla</p>', 94),
(67, '<p>Turc</p>', '', '<p>Redhouse</p>', 94),
(68, '<p>Chinois simplifié</p>', '', '<p>DUKU</p>', 94),
(69, '<p>Polonais</p>', '', '<p>Polarny Lis</p>', 94),
(70, '<p>Italien</p>', '', '<p>Sinnos</p>', 94),
(71, '<p>Anglais - (Monde)</p>', '', '<p>Wide Eyed Books, Frances Lincoln</p>', 96),
(72, '<p>Anglais (Amérique du Nord)</p>', '', '<p>Penguin Random House</p>', 97),
(73, '<p>Anglais (Royaume-Uni)</p>', '', '<p>Little Gestalten</p>', 97),
(74, '<p>Allemagne - (Monde)</p>', '', '<p>Little Gestalten</p>', 97),
(75, '<p>Catalan - (Monde)</p>', '', '<p>Coco Books</p>', 97),
(76, '<p>Chinois simplifié</p>', '', '<p>Ronshin Group</p>', 97),
(77, '<p>Espagnol - (Monde)</p>', '', '<p>Coco Books</p>', 97),
(78, '<p>Italien - (Monde)</p>', '', '<p>Sinnos</p>', 97),
(79, '<p>Espagnol - (Monde)</p>', '', '<p>Coco Books</p>', 98),
(80, '<p>Catalan - (Monde)</p>', '', '<p>Coco Books</p>', 98),
(81, '<p>Chinois simplifié - (Chine)</p>', '', '<p>Ronshin Group</p>', 98),
(82, '<p>Coréen - (Monde)</p>', '', '<p>Little One Ahyun</p>', 99),
(83, '<p>Coréen - (Monde)</p>', '', '<p>Little One Ahyun</p>', 100),
(84, '', '<p>l\'anglais</p>', '<p>Mathieu Leroux</p>', 102),
(85, '<p>Espagnol - (Monde)</p>', '', '<p>Uppa</p>', 103),
(86, '<p>Italien - (Monde)</p>', '', '<p>Thule Ediciones</p>', 103),
(87, '<p>Anglais(États-Unis)- (Monde)</p>', '', '<p>Enchanted Lion​</p>', 104),
(88, '<p>Coréen - (Monde)</p>', '', '<p>Grimm-young Publishers</p>', 104),
(89, '<p>Espagnol - (Europe)</p>', '', '<p>Tramuntana Editorial</p>', 104),
(90, '<p>Chinois simplifié - (Chine)</p>', '', '<p>Trustbridge Publishing</p>', 104),
(91, '<p>Turc </p>', '', '<p>Can Sanat Yayınları Yapım ve Dagitim</p>', 104),
(92, '<p>Russe - (Russie)</p>', '', '<p>Polyandrai</p>', 104),
(93, '<p>Perse - (Monde)</p>', '', '<p>Mobtakeran Publishing</p>', 104),
(94, '<p>Italien (Italie) </p>', '', '<p>Guido Tommasi Editore</p>', 104),
(95, '<p>Coréen</p>', '', '<p>Gimm-Young Publishers</p>', 105),
(96, '<p>Suédois</p>', '', '<p>Speja</p>', 105),
(97, '<p>Espagnol</p>', '', '<p>Editorial Juventud</p>', 105),
(98, '<p>Anglais (Amérique du Nord)</p>', '', '<p>Enchanted Lion</p>', 105),
(99, '<p>Catalan</p>', '', '<p>Editorial Juventud</p>', 105),
(100, '<p>Anglais (Canada - États-Unis)</p>', '', '<p>Penguin Random House Canada</p>', 108),
(101, '<p>Catalan - (Monde)</p>', '', '<p>Impedimenta</p>', 108),
(102, '<p>Espagnol - (Monde)</p>', '', '<p>Impedimenta</p>', 108),
(103, '<p>Italien - (Italie)</p>', '', '<p>Guido Tommasi Editore</p>', 108),
(104, '<p>Japonais - (Monde)</p>', '', '<p>Fukuinkan Shoten</p>', 108),
(105, '<p>Chinois simplifié (Chine)</p>', '', '<p>Trustbridge Publishing</p>', 110),
(106, '<p>Anglais (Amérique du Nord)</p>', '', '<p>Enchanted Lion Books</p>', 110),
(107, '<p>Grec - (Monde)</p>', '', '<p>Niki Ekdotiki</p>', 110),
(108, '<p>Italien - (Italie)</p>', '', '<p>Guido Tommasi Editore</p>', 110),
(109, '<p>Coréen - (Monde)</p>', '', '<p>Media Changbi</p>', 110),
(110, '<p>Portugais (Brésil)</p>', '', '<p>Saraiva S.A. Livreiros Editores</p>', 110),
(111, '<p>Anglais (Amérique du Nord)</p>', '', '<p>Penguin Random House Canada</p>', 111),
(112, '<p>Russe - (Monde) </p>', '', '<p>Polyandria</p>', 111),
(113, '<p>Anglais (États-Unis)</p>', '', '<p>Toon Books</p>', 112),
(114, '<p>Traduit de l\'anglais (Canada)</p>', '', '<p>par Sophie Chisogne</p>', 114),
(115, '<p>Traduit de l\'anglais (États-Unis)</p>', '', '<p>par Éric Fontaine</p>', 117),
(116, '<p>Anglais (États-Unis)</p>', '', '<p>       </p>', 119),
(117, '<p>Chinois simplifié (Chine)</p>', '', '<p>Beijing Children and Juvenile Publishing House</p>', 119),
(118, '<p>Estonien </p>', '', '<p>         </p>', 119),
(119, '', '<p> l\'anglais </p>', '<p>Fanny Britt</p>', 120),
(120, '<p>Chinois simplifié - (Chine)</p>', '', '<p>Beijing Publishing Group LTD</p>', 121),
(121, '<p>Anglais - (Amérique du Nord)</p>', '', '<p>Groundwood Books</p>', 121),
(122, '<p>Coréen (Corée du Sud)</p>', '', '<p>Sanha Pub. Co.</p>', 121),
(123, '<p>Portugais (Brésil)</p>', '', '<p>Pulo Do Gato</p>', 121),
(124, '<p>Anglais - (Amérique du Nord)</p>', '', '<p>Groundwood Books</p>', 124),
(125, '', '<p>l\'anglais (Canada)</p>', '<p>Éric Fontaine</p>', 127),
(126, '', '<p>l\'espagnol</p>', '<p>Sophie Chisogne</p>', 128),
(127, '', '<p>l\'anglais (Canada)</p>', '<p>Sophie Chisogne</p>', 129),
(128, '', '<p>l\'anglais (États-Unis)</p>', '<p>Sophie Chisogne</p>', 130),
(131, '', '<p>finnois (Finlande)</p>', '<p>Kirsi Kinnunen</p>', 131),
(132, '<p>Anglais (Amérique du Nord)</p>', '', '<p>Groundwood Books</p>', 132),
(133, '<p>Anglais(Royaume-Uni)</p>', '', '<p>Walker Books</p>', 132),
(134, '<p>Chinois simplifié</p>', '', '<p>Beijing Total Vision Culture Spread Co.</p>', 132),
(135, '<p>Espagnol</p>', '', '<p>Salamandra</p>', 132),
(136, '<p>Allemagne</p>', '', '<p>Reprodukt</p>', 132),
(137, '<p>Coréen</p>', '', '<p>Booknbean </p>', 132),
(138, '<p>Italien</p>', '', '<p>Mondadori</p>', 132),
(139, '<p>Russe</p>', '', '<p>Ooo Izdatelstvo Albus Corvus</p>', 132),
(140, '<p>Japonais</p>', '', '<p>Nishimura Co.</p>', 132),
(141, '<p>Portugais</p>', '', '<p>WMF Martins Fontes</p>', 132),
(142, '<p>Anglais (Amérique du Nord)</p>', '', '<p>Groundwood Books</p>', 133),
(143, '<p>Anglais(Royaume-Uni)</p>', '', '<p>Walker Books</p>', 133),
(144, '<p>Chinois complexe</p>', '', '<p>Worldfield Publishing</p>', 133),
(145, '<p>Coréen</p>', '', '<p>Booknbean</p>', 133),
(146, '<p>Italien</p>', '', '<p>Mondadori Libri</p>', 133),
(147, '<p>Russe</p>', '', '<p>Ooo Izdatelstvo Albus Corvus</p>', 133),
(148, '<p>Suédois</p>', '', '<p>Sanatorium Forlag</p>', 133),
(149, '', '<p>l\'nglais (Canada)</p>', '<p>Sophie Chisogne</p>', 134),
(150, '', '<p>l\'anglais(Canada)</p>', '<p>Isabelle Arsenault</p>', 135),
(151, '', '<p>l\'nglais(Canada)</p>', '<p>Fanny Britt</p>', 136),
(152, '', '<p>l\'espagnol(Argentine)</p>', '<p>Sophie Chisogne</p>', 138),
(153, '<p>Coréen - (Monde</p>', '', '<p>Nice Dreams Publishing</p>', 141),
(154, '<p>Espagnol - (Monde)</p>', '', '<p>Editorial Juventud</p>', 145),
(155, '<p>Catalan - (Monde)</p>', '', '<p>Editorial Juventud</p>', 145),
(156, '<p>Chinois simplifié</p>', '', '<p>Duku Cultural Exchange Beijing</p>', 145),
(157, '', '', '<p>Holiday House</p>', 145);

-- --------------------------------------------------------

--
-- Structure de la table `type_couverture`
--

CREATE TABLE `type_couverture` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_couverture`
--

INSERT INTO `type_couverture` (`id`, `nom`) VALUES
(1, 'cartonnée'),
(4, 'cartonnée toilée'),
(3, 'souple '),
(2, 'souple avec rabats');

-- --------------------------------------------------------

--
-- Structure de la table `type_impression`
--

CREATE TABLE `type_impression` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `type_impression`
--

INSERT INTO `type_impression` (`id`, `nom`) VALUES
(1, '4 Pantones'),
(2, 'bichromie'),
(9, 'cinq couleurs'),
(3, 'noir et blanc'),
(6, 'noir et blanc et bichromie'),
(7, 'noir et blanc et quadrichromie'),
(4, 'quadrichromie'),
(5, 'trichromie'),
(8, 'une couleur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualites`
--
ALTER TABLE `actualites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lapasteque`
--
ALTER TABLE `lapasteque`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `type_impression_id_idx` (`type_impression_id`),
  ADD KEY `type_couverture_id_idx` (`type_couverture_id`),
  ADD KEY `categorie_id_idx` (`categorie_id`);

--
-- Index pour la table `livres_auteurs`
--
ALTER TABLE `livres_auteurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livre_id_idx` (`livre_id`),
  ADD KEY `auteur_id_idx` (`auteur_id`);

--
-- Index pour la table `reconnaissances`
--
ALTER TABLE `reconnaissances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livre_id_idx` (`livre_id`);

--
-- Index pour la table `traductions`
--
ALTER TABLE `traductions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livre_id_idx` (`livre_id`);

--
-- Index pour la table `type_couverture`
--
ALTER TABLE `type_couverture`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `nom_UNIQUE` (`nom`);

--
-- Index pour la table `type_impression`
--
ALTER TABLE `type_impression`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `nom_UNIQUE` (`nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualites`
--
ALTER TABLE `actualites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `lapasteque`
--
ALTER TABLE `lapasteque`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `livres`
--
ALTER TABLE `livres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT pour la table `livres_auteurs`
--
ALTER TABLE `livres_auteurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT pour la table `reconnaissances`
--
ALTER TABLE `reconnaissances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT pour la table `traductions`
--
ALTER TABLE `traductions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT pour la table `type_couverture`
--
ALTER TABLE `type_couverture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `type_impression`
--
ALTER TABLE `type_impression`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `livres`
--
ALTER TABLE `livres`
  ADD CONSTRAINT `categorie_id` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `type_couverture_id` FOREIGN KEY (`type_couverture_id`) REFERENCES `type_couverture` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `type_impression_id` FOREIGN KEY (`type_impression_id`) REFERENCES `type_impression` (`id`);

--
-- Contraintes pour la table `livres_auteurs`
--
ALTER TABLE `livres_auteurs`
  ADD CONSTRAINT `auteur_id` FOREIGN KEY (`auteur_id`) REFERENCES `auteurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `livre_id` FOREIGN KEY (`livre_id`) REFERENCES `livres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `reconnaissances`
--
ALTER TABLE `reconnaissances`
  ADD CONSTRAINT `rec_livre_id` FOREIGN KEY (`livre_id`) REFERENCES `livres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `traductions`
--
ALTER TABLE `traductions`
  ADD CONSTRAINT `trad_livre_id` FOREIGN KEY (`livre_id`) REFERENCES `livres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
