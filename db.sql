-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 18 nov. 2020 à 18:10
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
-- Base de données :  `id13517709_x1`
--

-- --------------------------------------------------------

--
-- Structure de la table `ann`
--

DROP TABLE IF EXISTS `ann`;
CREATE TABLE IF NOT EXISTS `ann` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texte` varchar(212) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `ann`
--

INSERT INTO `ann` (`id`, `nom`, `type`, `texte`) VALUES
(1, 'creer tuto', 'texte', 'saviez vous que vous pouvez , selon vos connaisances ,Ã©crire des tutos ?');

-- --------------------------------------------------------

--
-- Structure de la table `bambine`
--


-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `de` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tuto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `commentaires`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sujet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

DROP TABLE IF EXISTS `contenu`;
CREATE TABLE IF NOT EXISTS `contenu` (
  `id_affich` int(11) NOT NULL AUTO_INCREMENT,
  `id_modif` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(233) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` varchar(1900) COLLATE utf8_unicode_ci NOT NULL,
  `tuto` varchar(323) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_affich`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contenu`
--

INSERT INTO `contenu` (`id_affich`, `id_modif`, `nom`, `type`, `contenu`, `tuto`) VALUES
(19, '5f43ff79d0386', 'fin', 'text', '<p class=\"excert\">et voila, nous sommes maintenant connectÃ©s a une base de donnÃ©e et vous pourrez voir dans d&#39;autres tutos tout ce que l&#39;on peut faire ðŸ˜‰</p>', '5793419'),
(20, '5f440ecd78717', 'intro', 'text', '<p class=\"excert\">Nous allons voir dans ce tuto comment afficher une table d\'une base de donnÃ©es .Il faut d\'abord une base de donnÃ©es,\r\nsi vous n\'en avez pas,vous pouvez installer wamp <a href = \"../tuto/?type=singletuto&id=5793435\">ici</a> .Vous devez aussi Ãªtre connectÃ© a la base de donnÃ©es que vous voulez afficher ,si ce n\'est pas les cas vous pouvez apprendre comment faire <a href = \"/tuto/?type=singletuto&id=5793419\">dans ce tuto</a>.Maintenant que vous avez une base de donnÃ©es et que vous y Ãªtes connectÃ© nous allons pouvoir commencer.</p>', '5793406'),
(17, '5f43fe729f6ae', 'conn', 'text', '<p class=\"excert\">nous allons ensuite nous connecter grÃ¢ce a la fonction <code>mysqli_connect</code>\r\n</p>', '5793419'),
(18, '5f43fefa0b1dd', '   coon code   ', 'code', '<pre class = \"brush:php\">// Connexion Ã  la base de donnÃ©es avec la fonction mysqli_connect\r\n$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);\r\n \r\n// VÃ©rifier la connexion\r\nif($conn === false){\r\n    die(\"ERREUR : Impossible de se connecter. \" . mysqli_connect_error());\r\n}</pre>', '5793419'),
(11, '5f43fd473e554', 'definition inf', 'code', '<pre class=\"brush:php\">\r\n//dÃ©finition des informations de connexion\r\ndefine(\'DB_SERVER\', \'localhost\');\r\ndefine(\'DB_USERNAME\', \'root\');\r\ndefine(\'DB_PASSWORD\', \'\');\r\ndefine(\'DB_NAME\', \'\');</pre>', '5793419'),
(1, '5f43f5934dfff', 'Introduction', 'text', '<p class=\"excert\">Les bases de donnÃ©es sont au centre de tous les sites web actuels , pour se connecter , s&#39;inscrire... on passe par une base de donnÃ©e.Nous allons voir comment nous connecter a une base de donnÃ©e en php. Tout d&#39;abord , il faut ,bien Ã©videment une base de donnÃ©e. Si vous avez un domaine elle est fournie avec (dans la plupart des cas). Sinon si vous n&#39;avez pas de domaine et que vous Ãªtes en local vous aurez besoin de wamp .Si vous ne l&#39;avez pas vous pouvez le tÃ©lÃ©charger <a href = \"../tuto/?type=singletuto&id=5793435\">ici</a> .Maintenant que nous avons une base de donnÃ©es , passons   Ã  la connexion.</p>', '5793419'),
(9, '5f43f81d2f35b', 'debut conn', 'text', '<p class=\"excert\">Nous allons maintenant nous connecter a la base de donnÃ©e en commenÃ§ant par dÃ©finir nos identifiants de connexion.Si vous Ãªtes sur wamp , vous n\'avez pas besoin de changer les informations de connexion.</p>', '5793419'),
(12, '5f43f67647155', 'remarque mdp', 'text', '<div class=\"quote-wrapper\">\r\n        <div class=\"quotes\">\r\n          Si vous avez un domaine, votre hÃ©bergeur vous donne le mot de passe de votre base de donnÃ©e . Sur wamp ,le nom d\'utilisateur pas dÃ©faut est root\r\n        </div>\r\n        </div>', '5793419'),
(21, '5f440fb78e63f', 'debut', 'text', '<p class=\"excert\">Nous allons commencer par nous connecter a la base de donnÃ©es</p>', '5793406'),
(22, '5f441034bd18f', 'conn', 'code', '<pre class=\"brush:php\">// Informations d\'identification\r\ndefine(\'DB_SERVER\', \'localhost\');\r\ndefine(\'DB_USERNAME\', \'root\');\r\ndefine(\'DB_PASSWORD\', \'\');\r\ndefine(\'DB_NAME\', \'\');\r\n \r\n// Connexion a la base de donnees MySQL \r\n$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);\r\n \r\n// Verifier la connexion\r\nif($conn === false){\r\n  \r\n    die(\"ERREUR : Impossible de se connecter. \" . mysqli_connect_error());\r\n}else{\r\necho \'connexion ok\';\r\n}</pre>', '5793406'),
(23, '5f44116b6d13d', 'suite...', 'text', '<p class=\"excert\">Maintenant que nous sommes connectÃ©s Ã  la base de donnÃ©es nous allons sÃ©lectionner toutes les lignes d\'une table \r\nusers et prendre le rÃ©sultat grÃ¢ce Ã  la fonction <code> mysqli_fetch_array</code> et l\'afficher dans un tableau html </p> ', '5793406'),
(25, '5f44c7a91de4e', 'affichage', 'code', '<pre class=\"brush:php\">//requete de selection\r\n$query = \"SELECT * FROM `users`\";\r\n//on execute la requete en liant la vaiable conn définie plus haut\r\n$execute = mysqli_query($conn , $query);\r\n//si la requete se passe bien , on prend le resultat\r\nif($execute){\r\n//tant qu\'il y a des lignes , les afficher\r\nwhile($ligne = mysqli_fetch_array($execute)){\r\necho \' <h1>Utilisateur</h1> \r\n<p> id : \'.$ligne[\'id\'].\'</p>\r\n <p>username : \'.$ligne[\'username\'].\'</p>\r\n <p>email : \'.$ligne[\'email\'].\'</p>\';\r\n}}\r\n</pre>', '5793406'),
(27, '5f44cd7cd0a1a', 'fin', 'text', '<p class=\"excert\">et voila ,la table users s\'affiche en fonction de ce q\'uelle contient</p>', '5793406'),
(28, '5f44d1862d976', 'img', 'image', '<img src = \"../img/tablephp1tuto.png\" class = \"grd\">', '5793406'),
(31, '5f451739e8706', 'Introduction', 'text', '<p class=\"excert\">L\' HTML est le centre de touts les sites webs actuels.Il permet de construire le centre de la page web ,ensuite complÃ©tÃ©e par du style css et des interactions en php .Tout d\'abord, une page web se compose en 2 section : la tete (head) et le corps (body) .Dans la partie head , on renseigne toutes les informations intradocument  , par exemple le titre que le navigateur devra afficher en haut de l\'onglet ou encore des liens vers les scripts et documents css liÃ©s a la page\r\n.Tout ce que l\'on Ã©crit dans la partie head n\'est pas destinÃ© a Ãªtre affichÃ© .</p>', '5793409'),
(30, '5f44d26eceef7', 'remarque', 'text', '<div class=\"quote-wrapper\">\r\n        <div class=\"quotes\">\r\n          si vous avez  une page vide c\'est que ou il n\'y a pas de table users dans votre base de donnÃ©e ou elle est vide.Vous pouvez bien Ã©videment afficher une autre table en changeant la variable <code>$query</code> et l\'index de la variable ligne(<code>$ligne[\'....\']</code>)\r\n        </div>\r\n        </div>', '5793406'),
(32, '5f453137daedf', 'exemple ', 'code', '<pre class=\"brush:html\"><head></head></pre>', '5793409'),
(34, '5f454b7f85d34', 'Introduction', 'text', '<p class=\"excert\">Vous savez dÃ©jÃ  faire un magnifique formulaire en html ? mais bon , un formulaire tout seul ou quand on clique sur valider il ne se passe rien Ã§a ne sert a rien . Nous allons voir dans ce tuto comment exploiter les rÃ©sultats d&#39;un formulaire.Je part du fait que vous savez dÃ©ja faire un formulaire en html sinon vous pouvez regarder <a href = \"../tuto/?type=singletuto&id=5793411\">ce tuto</a>.Nous allons commencer par faire un formulaire html basique avec 3 champs : nom , age , ville.</p>', '5793416'),
(35, '5f454d426686d', ' formulaire ', 'code', ' Formulaire\r\n<pre class=\"brush:html\"><form action = \"process.php\">\r\n   <h1>Formulaire de prÃ©sentation</h1>\r\n   <label>Nom</label>\r\n   <input type = \"text\" name = \"nom\" required>\r\n   <label>Age</label>\r\n   <input type = \"number\" name = \"age\" required>\r\n   <label>Ville</label>\r\n   <input type = \"text\" name = \"ville\" required>\r\n<input type = \"submit\" value = \"valider\">\r\n</form></pre> ', '5793416'),
(36, '5f4553e7b9a99', 'explication de process.php', 'text', '<p class=\"excert\">Une fois que l&#39;utilisateur appuie sur valider , la page envoie vers la page dÃ©finie dans la balise <code>action</code>\r\nla valeur de chaque champ saisi ex : process.php?nom=..... On va ensuite dire a la page process.php de prendre les valeurs et de les afficher de faÃ§on a ce que Ã§a face : \"bonjour nom tu as age et tu viens de ville . Bienvenue sur mon site 1\" .Pour cela , nous allons nous servir de la variable <code>$_REQUEST[&#39;ce que l&#39;on veut&#39;] </code> qui va prendre la valeur.Passons au code</p>', '5793416'),
(37, '5f45580f02d21', '    code process.php  ', 'code', '    Page process.php\r\n<pre class=\"brush:php\">\r\n//si la page recoit les 3 valeurs ,\r\nif(isset($_REQUEST[&#39;nom&#39;] , $_REQUEST[&#39;age&#39;] , $_REQUEST[&#39;ville&#39;])){\r\n$nom = $_REQUEST[&#39;nom&#39;];\r\n$age = $_REQUEST[&#39;age&#39;];\r\n$ville = $_REQUEST[&#39;ville&#39;];\r\necho &#39;<h2>Bonjour &#39;.$nom.&#39; tu as &#39;.$age.&#39; et tu vient de &#39;.$ville.&#39; , \r\nBienvenue sur mon site !</h2>&#39;;\r\n\r\n}else{\r\n   echo &#39;aucune valeur envoyÃ©e&#39;;\r\n}</pre>    ', '5793416'),
(38, '5f4560c9bbec6', 'fin', 'text', '<p class=\"excert\">Et quand on essaye, nous avons bien le message qui s&#39;affiche</p>', '5793416'),
(46, '5f46771d82ae7', 'Introduction', 'text', '<p class=\"excert\">SQL est le langage utilisÃ© pour les bases de donnÃ©es , il est donc trÃ¨s utile de le connaitre . Dans ce tuto nous allons en voir les bases , pour ceci , vous aurez besoin d&#39;une base de donnÃ©e et d&#39;un accÃ¨s a phpMyAdmin . Sinon , vous pouvez aller sur la version en ligne de phpMyAdmin <a href = \"https://www.phpmyadmin.net/\"> ICI</a> .Pour commencer ,nous allons  crÃ©er une base de donnÃ©e de nom tuto ( que pour la version en ligne).</p>', '5793425'),
(42, '5f45650b56bd3', 'pour aller plus loin', 'text', '<div class=\"quote-wrapper\">\r\n        <div class=\"quotes\">\r\n          Dans cet exemple , nous dÃ©finitions une balise <code> action</code> mais si vous laissez cette balise vide et que vous mettez le code php dans la mÃªme page , le rÃ©sultat est le mÃªme \r\n        </div>\r\n        </div>', '5793416'),
(43, '5f4565cd99cd7', 'vraie fin', 'text', '<p class=\"excert\">Et voila ! Vous savez(j&#39;espÃ¨re) dÃ©sormais comment exploiter les rÃ©sultats d&#39;un formulaire.Vous pouvez depuis ceci, faire beaucoup plus de choses : insÃ©rer les valeurs saisies par l&#39;utilisateur dans une base de donnÃ©e... </p>', '5793416'),
(39, '5f456d4b98ea6', 'nom', 'image', '<img src = \"../img/tutoformphp.png\" class = \"grd\">', '5793416'),
(47, '5f46789610b86', '1ere photo', 'image', '<img src = \"../img/imgsql1.png\" class = \"grd\">', '5793425'),
(49, '5f467a802ae9a', 'debut insert', 'text', '<p class=\"excert\">une fois la base de donnÃ©e crÃ©e , nous allons crÃ©er une table `users` avec 4 colones : ID , de type INT (nombre) avec un index PRIMARY et un auto_increment , Username de type VARCHAR (texte a longeur variable ) comme taille 255 , , email et password , sur le mÃªme modÃ¨le.</p>', '5793425'),
(50, '5f467a9400c0d', '2ere photo', 'image', '<img src = \"../img/imgsql2.png\" class = \"grd\">', '5793425'),
(51, '5f467ae1ec818', 'SI peur', 'text', '<p class=\"excert\">Si vous avez peur de vous tromper , vous pouvez coller ce code dans l&#39;onglet SQL</p>', '5793425'),
(53, '5f467bf7b6769', 'code sql', 'text', '<p class=\"excert\"><code>CREATE TABLE `tuto`.`users` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;</code></p>', '5793425'),
(54, '5f467f2ce1614', 'INSERt', 'text', '<p class=\"excert\">VoilÃ  ,nous avons une table `users` avec 4 colones. Nous allons nous rendre maintenant dans l&#39;onglet sql pour voir la premiÃ¨re requÃªte : INSERT . Cette requÃªte est assez simple , elle permet dâ€™insÃ©rer une ligne dans la table avec une valeur pour chaque colonne.Nous allons donc Ã©crire ceci : </p>', '5793425'),
(55, '5f467fc069e74', 'coed insert', 'text', '<p class=\"excert\"><code>INSERT INTO `users`(`username`, `password`, `email`) VALUES (&#39;thenardier&#39; , &#39;thenard21&#39; , &#39;thenardier@miserables.com&#39;)</code></p>', '5793425'),
(56, '5f4680336f4de', 'bien fait', 'text', '<p class=\"excert\">Une fois la requÃªte exÃ©cutÃ©e , quand on revient sur l&#39;onglet parcourir , on voit que la ligne a bien Ã©tÃ© insÃ©rÃ©e</p>', '5793425'),
(57, '5f468262c126e', '3eme photo', 'image', '<img src = \"../img/imgsql3.png\" class = \"grd\">', '5793425'),
(60, '5f46830ec634d', 'SELECT 1', 'text', '<p class=\"excert\">Passons maintenant a une nouvelle requÃªte , le SELECT ,cette requÃªte , aussi simple permet de sÃ©lectionner des donnÃ©es de la table.Nous allons essayer de sÃ©lectionner tous les utliisateurs en Ã©crivant:</p>', '5793425'),
(59, '5f46856e29c12', 'remarque id', 'text', '<div class=\"quote-wrapper\">\r\n        <div class=\"quotes\">\r\n          Dans la requete INSERT , nous n&#39;avons spÃ©cifiÃ© que 3 des 4 colonnes car la colonne `id` est en <code>auto_increment</code> numÃ©rique, Ã§a veut dire que une valeur se met automatiquement ( 1 de plus de la colonne prÃ©cÃ©dente)\r\n        </div>\r\n        </div>', '5793425'),
(61, '5f469695da74e', 'code select', 'text', '<p class=\"excert\"><code>SELECT * FROM `users`</code></p>', '5793425'),
(62, '5f469c0f4e0b7', 'preuve', 'text', '<p class=\"excert\">et toutes les ligne s&#39;affichent :</p>', '5793425'),
(63, '5f469c5a1c4b0', 'img preuve', 'image', '<img src = \"../img/imgsql4.png\" class = \"grd\">', '5793425'),
(64, '5f469d27049dc', 'WHERE', 'text', '<p class=\"excert\">Nous allons maintenant essayer de sÃ©lectionner une ligne spÃ©cifique en introduisant l&#39;attribut WHERE .Qui signifie quand.Cet attribut va sÃ©lectionner les lignes quand les colones on les valeurs que l&#39;on veut.ex: sÃ©lectionner toutes les lignes quand la colonne `id` est Ã©gale Ã  1.</p>', '5793425'),
(65, '5f469f292eed2', 'ex WHERE', 'text', '<p class=\"excert\">exemple d&#39;une requete SELECT avec un WHERE\r\n<p>\r\n<code>SELECT * FROM `users` WHERE `id` = &#39;1&#39;</code></p></p>', '5793425'),
(67, '5f46b8b1b9c0b', 'prev', 'text', '<p class=\"excert\">Et seulement la ligne qui a pour la colonne `id` la valeur 1 s&#39;affiche</p>', '5793425'),
(68, '5f46b8fe22274', '5eme photo', 'image', '<img src = \"../img/imgsql5.png\" class = \"grd\">', '5793425'),
(69, '5f4764b357b32', 'Introduction', 'text', '<p class=\"excert\">Dans la plupart des sites rÃ©cents , il y a des paramÃ¨tres dans l&#39;URL ,ces paramÃ¨tres servent par exemple a dÃ©finir la langue , la page a afficher....bref ,il sont trÃ¨s utiles . Mais avant tout , il faut savoir a quoi ressemble un paramÃ¨tre .C&#39;est juste l&#39;url complÃ¨te de la page plus ?lenom=lavaleur .</p>', '5793415'),
(70, '5f476520d0b3c', 'ex', 'text', '<p class=\"excert\">Exemple d&#39;un paramÃ¨tre\r\n<p><code>http://monsite.fr/index.php?page=index</code></p></p>', '5793415'),
(71, '5f4765f861387', 'suite', 'text', '<div class=\"quote-wrapper\">\r\n                    <div class=\"quotes\">\r\n                      Quand il y a  plusieurs paramÃ¨tres dans la mÃªme URL , on Ã©crit  : <code>http://monsite.fr/index.php?page=index&langue=fr</code> . Il peut y avoir un nombre illimitÃ© de paramÃ¨tres dans une page\r\n                    </div>\r\n                    </div>', '5793415'),
(72, '5f4766ca0e06e', 'suite', 'text', '<p class=\"excert\">Maintenant que nous en savons un peu plus sur les paramÃ¨tres , nous allons pourvoir passer au plus dur : prendre un paramÃ¨tres et l&#39;afficher. Pour cela nous allons prendre le paramÃ¨tre avec la mÃ©thode <code>$_GET</code> qui va prendre le paramÃ¨tre.</p>', '5793415'),
(73, '5f4767f5344c5', '1er exemple param', 'code', '<pre class=\"brush:php\">//si le paramÃ¨tre existe , on le prend .\r\nif(isset($_GET[&#39;page&#39;])){\r\n$page = $_GET[&#39;page&#39;];\r\necho &#39;le paramÃ¨tre page a pour valeur : &#39;.$page.&#39;&#39;;\r\n}else{\r\n   echo &#39;aucun paramÃ¨tre envoyÃ© ! &#39;;\r\n}</pre>', '5793415'),
(74, '5f4768e94125a', 'preuve', 'text', '<p class=\"excert\">et quand on essaye , on voit bien le message qui s&#39;affiche :</p>', '5793415'),
(75, '5f47690dc7511', '1ere photo', 'image', '<img src = \"../img/imgparam1.png\" class = \"grd\">', '5793415'),
(76, '5f476d255eb6a', 'nom', 'text', '<p class=\"excert\">Essayons maintenant autre chose : si le paramÃ¨tre page a une certaine valeur , afficher  , par exemple ,l&#39;accueil sinon ,une autre page.La logique reste la meme sauf qu&#39;on rajoute 2 conditions( if) .</p>', '5793415'),
(77, '5f476d3b609f3', 'code param 2', 'code', '<pre class=\"brush:php\">//si le paramÃ¨tre existe , on le prend .\r\nif(isset($_GET[&#39;page&#39;])){\r\n$page = $_GET[&#39;page&#39;];\r\n//si le paramÃ¨tre page est Ã©gal a accueil , on affiche l&#39;accueil\r\nif($page == &#39;accueil&#39;){\r\necho &#39;<h1>Accueil</h1>\r\n<a href = \"?page=autre\">Aller sur la page avec un autre paramÃ¨tre</a>\r\n<p>vous etes actuellement sur l&#39;accueil</p>\r\nle paramÃ¨tre page a pour valeur : &#39;.$page.&#39; &#39;;\r\n}\r\n//afichage de l&#39;autre page\r\nif($page == &#39;autre&#39;){\r\n   echo &#39;<h1>Autre Page </h1>\r\n   <a href = \"?page=accueil\">Aller sur la page avec un autre paramÃ¨tre</a>\r\n   <p>vous etes actuellement sur l&#39;autre page</p>\r\n   le paramÃ¨tre page a pour valeur : &#39;.$page.&#39; &#39;;\r\n   }\r\n}else{\r\n   echo &#39;aucun paramÃ¨tre envoyÃ© ! &#39;;\r\n}</pre>', '5793415'),
(78, '5f476da201bac', 'nom', 'text', '<p class=\"excert\">et quand on essaye , ca fonctionne bien !</p>', '5793415'),
(79, '5f476dd732312', '2ere photo', 'image', '<img src = \"../img/capture.png\" class = \"grd\">', '5793415'),
(80, '5f477361c46a8', 'pour aller plus loin', 'text', '<div class=\"quote-wrapper\">\r\n                    <div class=\"quotes\">\r\n                      Pour qu&#39;il y ait toujours un parametre dans une page , vous pouvez rediriger la personne vers la page avec parametre en mettant : <pre class =\"brush:php\">//si il n&#39;y a pas de parametre page\r\nif(!isset($_GET[&#39;page&#39;])){\r\n   //redirection grace a la fonction header\r\n   header(&#39;location:?page=accueil&#39;);\r\n}</pre>\r\n                    </div>\r\n                    </div>', '5793415'),
(81, '5f47cceabd634', 'fin', 'text', '<p class=\"excert\">Et voilÃ  ,vous savez dÃ©sormais ce qu&#39;est un paramÃ¨tre et ce que vous pouvez faire avec . Maintenant , a vous de crÃ©er !</p>', '5793415'),
(82, '5f4a593a65a28', 'intro', 'text', '<p class=\"excert\">Nous allons voir dans ce tuto comment faire des commentaires dans du code html .Cela peut Ãªtre utile pour se repÃ©rer dans de longs codes . Les commentaires html sont ignorÃ©s par le navigateur et , donc non affichÃ©s.</p>', '5793436'),
(83, '5f4a5bce69dd1', 'suite...', 'text', '<p class=\"excert\">Voici un exemple de commentaire html , vous pouvez mettre des balises html , le navigateur n&#39;en prendra pas compte</p>', '5793436'),
(84, '5f4a5bfe26ff4', 'code', 'code', '<pre class=\"brush:html\"><!--- Exemple de commentaire HTML --->\r\n</pre>', '5793436'),
(85, '5f4a5c7c21f81', 'remarque', 'text', '<div class=\"quote-wrapper\">\r\n                    <div class=\"quotes\">\r\n                      On peut mettre toutes sortes de caractÃ¨res dans les commentaires puisque le navigateur les ignore\r\n                    </div>\r\n                    </div>', '<?php echo $id?>'),
(86, '5f4a5cccc7f2b', 'remarque', 'text', '<div class=\"quote-wrapper\">\r\n                    <div class=\"quotes\">\r\n                        On peut mettre toutes sortes de caractÃ¨res dans les commentaires puisque le navigateur les ignore\r\n                    </div>\r\n                    </div>', '5793436'),
(87, '5f4a5d07e1e6f', 'fin', 'text', '<p class=\"excert\">Et voilÃ  , c&#39;est la fin de ce (court) tuto ! vous pourrez maintenant commenter votre code</p>', '5793436'),
(88, '5f4b63a517071', 'intro', 'text', '<p class=\"excert\">Dans la plupart des sites actuels , il y a une barre de rechercher pour rechercher un article en particulier. Nous allons donc dans ce tuto rÃ©aliser une barre de rechercher qui recherche dans une base de donnÃ©es . Il vous faudra donc une base de donnÃ©es avec une table qui a suffisamment de lignes . Nous allons commencer par nous connecter a la base de donnÃ©es :</p>', '5793432'),
(89, '5f4b64c87702d', 'connexion a la base de donnÃ©es', 'code', '<pre class=\"brush:php\">// Informations d&#39;identification\r\ndefine(&#39;DB_SERVER&#39;, &#39;localhost&#39;);\r\ndefine(&#39;DB_USERNAME&#39;, &#39;root&#39;);\r\ndefine(&#39;DB_PASSWORD&#39;, &#39;&#39;);\r\ndefine(&#39;DB_NAME&#39;, &#39;&#39;);\r\n  \r\n// Connexion a la base de donnÃ©es MySQL \r\n$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);\r\n  \r\n// Verifier la connexion\r\nif($conn === false){\r\n die(\"ERREUR : Impossible de se connecter. \" . mysqli_connect_error());\r\n}else{\r\n// la connexion est Ã©tablie\r\n}</pre>', '5793432'),
(90, '5f4b69f7c1bba', 'explication', 'text', '<p class=\"excert\">Maintenant que nous sommes connectÃ©s a la base de donnÃ©es , nous allons pouvoir commencer par faire un formulaire html de mÃ©thode GET avec un champ (input) de type search  et nous allons nommer ce champ q (comme query).</p>', '5793432'),
(91, '5f4b6e9aeddb1', 'barre de recherche html', 'code', '<pre class=\"brush:html\"> <form action =\"\" method = \"GET\">\r\n      <input type = \"search\" name = \"q\"  required>\r\n      <button type = \"submit\">Recherche</button>\r\n   </form></pre>', '5793432'),
(92, '5f4b7c0d4818a', 'php', 'text', '<p class=\"excert\">Nous allons maintenant passer au code php Pour commencer , nous afficherons tous les articles .Et quand l&#39;utilisateur cliquera sur recherche , nous chercherons dans la base de donnÃ©es les lignes ou le nom ou description sont Ã©gals a la recherche .Pour ceci , nous utiliserons un CONCAT et une valeur joker pour la recherche (<code>LIKE &#39;%\".$q.\"%&#39; </code>) . Nous afficherons ensuite le rÃ©sultat avec une boucle <code>while</code>.</p>', '5793432'),
(93, '5f4b7c7bc2a3e', '     tout     ', 'code', '     <pre class=\"brush:php\">\r\nif(isset($_GET[&#39;q&#39;])){\r\n//on prend la valeur de la recherche\r\n$q = htmlspecialchars($_GET[&#39;q&#39;]); \r\n//requÃªte de sÃ©lection avec une valeur joker \r\n$search = \"SELECT * FROM `tuto` WHERE CONCAT( `nom`,`description`) LIKE  &#39;%\".$q.\"%&#39; \";\r\n}else{\r\n//si l&#39;utilisateur n&#39;a pas encore recherchÃ©\r\n   $search = \"SELECT * FROM `tuto`\";\r\n   $q = \"\";\r\n}\r\n   ?>\r\n   <form action =\"\" method = \"GET\">\r\n      <input type = \"search\" class = \"form-control\"  name = \"q\" value = \"<?php echo $q ?>\" >\r\n      <input type = \"submit\" class = \"btn\" value = \"Recherche\">\r\n   </form>\r\n   <?php\r\n   $result = mysqli_query($conn , $search);\r\n//tant qu&#39;il y a des rÃ©sultats , on les affiche avec une boucle while\r\nwhile($ligne = mysqli_fetch_assoc($result)){\r\n   echo &#39;<p><a href = \"\">&#39;.$ligne[&#39;nom&#39;].&#39;</a><p>&#39;.$ligne[&#39;description&#39;].&#39;</p></p>&#39;;\r\n}\r\n   $rows = mysqli_num_rows($result);\r\n//si il n&#39;y a aucun rÃ©sultat\r\nif($rows == 0){\r\n   echo &#39;aucun rÃ©sultat pour &#39;.$q.&#39;&#39;;\r\n}\r\n   ?></pre>     ', '5793432'),
(94, '5f4b97145459d', 'fin', 'text', '<p class=\"excert\">Et quand nous cherchons , nous  pouvons constater que la recherche se fait dans le nom et la description.</p>', '5793432'),
(95, '5f4b9790225b1', 'remarque', 'text', '<div class=\"quote-wrapper\">\r\n                    <div class=\"quotes\">\r\n                      Pour ne pas rÃ©pÃ©ter ce code sur chaque page de votre site , vous pouvez mettre le code php dans une page <code>search.php</code> et mettre dans l&#39;attribut action du formulaire search.php\r\n                    </div>\r\n                    </div>', '5793432');

-- --------------------------------------------------------

--
-- Structure de la table `deleted tuto`
--

DROP TABLE IF EXISTS `deleted tuto`;
CREATE TABLE IF NOT EXISTS `deleted tuto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(332) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(332) COLLATE utf8_unicode_ci NOT NULL,
  `codecp` varchar(342) COLLATE utf8_unicode_ci NOT NULL,
  `createur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statut` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'En attente de validation',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5793421 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `erreurs`
--

DROP TABLE IF EXISTS `erreurs`;
CREATE TABLE IF NOT EXISTS `erreurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(332) COLLATE utf8_unicode_ci NOT NULL,
  `endroit` varchar(524) COLLATE utf8_unicode_ci NOT NULL,
  `page` varchar(534) COLLATE utf8_unicode_ci NOT NULL,
  `par` varchar(344) COLLATE utf8_unicode_ci NOT NULL,
  `resolue` varchar(432) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

DROP TABLE IF EXISTS `formulaire`;
CREATE TABLE IF NOT EXISTS `formulaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date ajout` date DEFAULT current_timestamp(),
  `disponible` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date fin` date NOT NULL,
  `importance` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Aucune description',
  `speciallink` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'wiewform.php?form=''.$ligne[''1''].''',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `formulaire`
--



-- --------------------------------------------------------

--

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sujets` varchar(211) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'aucun sujet',
  `importance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Aucun lien joint',
  `de` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pour` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `message`
--

-- --------------------------------------------------------


--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(112) COLLATE utf8_unicode_ci NOT NULL,
  `statut` varchar(1122) COLLATE utf8_unicode_ci NOT NULL,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `nom`, `statut`, `version`) VALUES
(1, 'Base de donne', 'demaree', '10.4.10-MariaDB'),
(2, 'php', 'demaree', '7.3.12'),
(3, 'apache', 'demaree', '2.4.41'),
(4, 'Maria DB', 'demaree', '10.4.10'),
(5, 'phpMyAdmin', 'demaree', '4.9.2');

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

DROP TABLE IF EXISTS `site`;
CREATE TABLE IF NOT EXISTS `site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etat` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ok',
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `site`
--

INSERT INTO `site` (`id`, `etat`, `version`) VALUES
(1, 'oui', '2.0');

-- --------------------------------------------------------

--
-- Structure de la table `tuto`
--

DROP TABLE IF EXISTS `tuto`;
CREATE TABLE IF NOT EXISTS `tuto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(332) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(332) COLLATE utf8_unicode_ci NOT NULL,
  `codecp` varchar(342) COLLATE utf8_unicode_ci NOT NULL,
  `createur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statut` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'En attente de validation',
  `description` varchar(600) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'aucune description',
  `keyword` varchar(499) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'tuto',
  `vues` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5793437 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `tuto`
--

INSERT INTO `tuto` (`id`, `nom`, `categorie`, `image`, `codecp`, `createur`, `date`, `cat`, `statut`, `description`, `keyword`, `vues`) VALUES
(5793406, 'PHP: afficher une table d\'une base de donnÃ©es SQL', 'php ', '../img/php.png', 'dze', '1865', '2020-08-24', '1', 'valide', 'Vous voulez afficher une table en php par exemple la liste des utlisateurs ?  alors ce tuto est fait pour vous.Nous allons,dans ce tuto en php afficher une table d\'une base de donnÃ©e SQL', 'tuto , sql , php ,afficher base de donnÃ©e ,afficher table ,afficher base de donnee', '73'),
(5793407, 'PHP: afficher une table (2nd methode)', 'php', '../img/php.png', 'dze', '1865', '2020-08-16', '1', 'valide', 'Vous voulez afficher une table en php par exemple la liste des utlisateurs ? alors ce tuto est fait pour vous.Nous allons,dans ce tuto ,avec php pdo afficher une table d\'une base de donnÃ©e SQL', 'tuto', '5'),
(5793409, 'HTML : base de la page', 'html', '../img/html.png', 'dze', '1865', '2020-08-08', '1', 'valide', 'HTML est le centre de toutes les pages webs actuelles .Nous allons dÃ©couvrir ensembles dans ce tuto la base d\'une page HTML', 'tuto , base html ,squellete html , structure page html , structure  html', '3'),
(5793410, 'HTML : liens et boutons', 'html', '../img/html.png', 'dze', '1865', '2020-08-17', '1', 'valide', 'aucune description', 'tuto', '2'),
(5793411, 'HTML : les formulaires', 'html', '../img/html.png', 'dze', '1865', '2020-08-17', '1', 'valide', 'aucune description', 'tuto', '3'),
(5793412, 'Creation d\'un bot Discord : EP 1', 'discord', '../img/reiboot.png', 'dze', '1865', '2020-08-17', '2', 'valide', 'aucune description', 'tuto', '1'),
(5793413, 'Creation d\'un bot Discord : EP 2', 'discord', '../img/reiboot.png', 'dze', '1865', '2020-08-17', '2', 'valide', 'aucune description', 'tuto', '2'),
(5793414, 'Creation d\'un bot Discord : EP 3', 'discord', '../img/reiboot.png', 'dze', '1865', '2020-08-17', '2', 'valide', 'aucune description', 'tuto', '1'),
(5793415, 'PHP : les paramÃ¨tres', 'php', '../img/php.png', '../code%20tuto/PHP%20parametres.zip', '1865', '2020-08-25', '1', 'valide', 'Dans la plupart des sites rÃ©cents , il y a des paramÃ¨tres dans l&#39;URL ,ces paramÃ¨tres servent par exemple a dÃ©finir la langue , la page a afficher....Bref , ils sont trÃ¨s utiles', 'tuto ,parametres php ,php parametres,parametres', '43'),
(5793416, 'PHP : les formulaires', 'php', '../img/php.png', '../code%20tuto/PHP%20formulaire.zip', '1865', '2020-08-24', '1', 'valide', 'Vous savez dÃ©jÃ  faire un magnifique formulaire en html ? mais bon , un formulaire tout seul ou quand on clique sur valider il ne se passe rien Ã§a ne sert a rien . Nous allons voir dans ce tuto comment exploiter les rÃ©sultats d&#39;un formulaire', 'tuto , formulaire ,formulaire php,php formulaire,exploiter un formulaire ,prendre les rÃ©sultats d&#39;un formulaire', '42'),
(5793417, 'PHP : formulaire d\'inscription', 'php', '../img/php.png', 'dze', '1865', '2020-08-17', '1', 'valide', 'aucune description', 'tuto', '1'),
(5793419, 'PHP : connexion a une base de donnÃ©es', 'php', ' ../img/php.png', 'dze', '1865', '2020-08-17', '1', 'valide', 'Une base de donnÃ©es peut Ãªtre trÃ¨s utile . Mais il faut , pour commencer , s&#39;y connecter . C&#39;est ce que nous allons faire dans ce tuto', 'tuto , connexion base de donnee ,php ,base de donee , base de donnÃ©es', '10'),
(5793420, 'PHP : formulaire de connexion', 'php', '../img/php.png', 'dze', '1865', '2020-08-17', '1', 'valide', 'aucune description', 'tuto', '1'),
(5793425, 'SQL : les bases', 'sql', '../img/sql.png', 'dze', '1865', '2020-08-19', '1', 'valide', 'SQL est le langage des bases de donnÃ©es il est trÃ¨s utile pour faire un site.Nous allons voir les requetes SQL de base dans ce tuto', 'tuto , sql ,base de donnÃ©e ,php ,base sql, sql base', '10'),
(5793429, 'PHP : Modifier son profil', 'php', '../img/php.png', 'dexs', '1865', '2020-08-20', '1', 'valide', 'aucune description', 'tuto', '1'),
(5793430, 'EXEL: les bases', 'exel', '../img/icone.png', 'dze', '1867', '2020-08-21', '4', 'valide', 'aucune description', 'tuto', '10'),
(5793431, 'EXEL : les macros(bases)', 'exel', '../img/icone.png', 'des', '1865', '2020-08-21', '4', 'valide', 'aucune description', 'tuto', '2'),
(5793432, 'PHP : barre de recherche', 'php', '../img/php.png', 'dze', '45f42add479878', '2020-08-29', '1', 'valide', 'Dans la plupart des sites actuels , il y a une barre de recherche pour rechercher un article en particulier. Nous allons donc dans ce tuto rÃ©aliser une barre de recherche qui recherche dans une base de donnÃ©es', 'tuto ', '99'),
(5793434, 'PHP : mot de passe oubliÃ©', 'php', '../img/php.png', 'dse', '1865', '2020-08-22', '1', 'valide', 'aucune description', 'tuto', '5'),
(5793435, 'Instalation de wamp', 'autres', '../img/wamp.ico', 'ds', '1865', '2020-07-24', '4', 'valide', 'aucune description', 'tuto', '1'),
(5793436, 'HTML : les commentaires', 'html', '../img/html.png', 'dze', '1865', '2020-08-29', '1', 'valide', 'Nous allons voir dans ce tuto comment faire des commentaires dans du code html.', 'tuto , html , commentaires html ', '8');

-- --------------------------------------------------------

--
-- Structure de la table `tutos en attente`
--

DROP TABLE IF EXISTS `tutos en attente`;
CREATE TABLE IF NOT EXISTS `tutos en attente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(332) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(332) COLLATE utf8_unicode_ci NOT NULL,
  `codecp` varchar(342) COLLATE utf8_unicode_ci NOT NULL,
  `createur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statut` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'En attente de validation',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5793421 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(19) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '../img/default-avatar.png',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'normal',
  `profil` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'public',
  `description` varchar(1104) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'aucune description',
  `prenom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creation` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `avatar`, `password`, `nom`, `type`, `profil`, `description`, `prenom`, `creation`) VALUES
('000', 'Anonyme', 'tdw@gmail.com', '../img/ano.png', '70db3c71f97a861921390800776c25054c567c23ff0d7a5b730b7c83ceba9ede', NULL, 'normal', 'public', 'aucune description', NULL, '2020-08-29'),
('1865', 'ð–•ð–†ð–šð–‘ð–‰ð–‡09', 'pauldeboissieu07@gmail.com', '../img/pauldb09.jpg', '70db3c71f97a861921390800776c25054c567c23ff0d7a5b730b7c83ceba9ede', 'paul', 'admin', 'public', 'CrÃ©ateur du site\r\n', 'paul', '2020-08-29'),
('1867', 'essai', 'jan@gmail.com', '../img/default-avatar.png', '70db3c71f97a861921390800776c25054c567c23ff0d7a5b730b7c83ceba9ede', 'Bizzare', 'normal', 'public', 'aucune description', 'Jean', '2020-08-29'),
('45f42add479878', 'la tech', 'hum@yahoo.com', '../img/tech.png', '70db3c71f97a861921390800776c25054c567c23ff0d7a5b730b7c83ceba9ede', '', 'normal', 'public', 'aucune descriptionbg', '', '2020-08-29'),
('5f463642ee08d', 'hummm', 'loi@gmail.com', '../img/default-avatar.png', '70db3c71f97a861921390800776c25054c567c23ff0d7a5b730b7c83ceba9ede', NULL, 'normal', 'public', 'aucune description', NULL, '2020-08-29'),
('5f46738d59f90', '[4nC]fandecota', 'loi@gmail.com', '../img/default-avatar.png', '70db3c71f97a861921390800776c25054c567c23ff0d7a5b730b7c83ceba9ede', '', 'normal', 'public', 'aucune description', '', '2020-08-29'),
('5f47d221cb0a4', 'hu mmz', 'loi@ac-paris.fr', '../img/default-avatar.png', '70db3c71f97a861921390800776c25054c567c23ff0d7a5b730b7c83ceba9ede', '', 'normal', 'public', 'rien', '', '2020-08-29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
