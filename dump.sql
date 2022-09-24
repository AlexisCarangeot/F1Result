
CREATE TABLE `circuit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `circuit` (`id`, `name`, `place`, `date`, `country_id`) VALUES
(4, 'GP d\'Émilie-Romagne', 'Imola', '2021-04-18', 10),
(6, 'GP du Portugal', 'Portimão', '2021-05-02', 20),
(7, 'GP d\'Espagne', 'Circuit de Barcelona-Catalunya', '2021-05-09', 6),
(8, 'GP de Monaco', 'Monte Carlo', '2021-05-23', 13),
(9, 'GP d\'Azerbaïdjan', 'Baku City Circuit', '2021-06-06', 24),
(10, 'GP de France', 'Circuit Paul Ricard', '2021-06-20', 9),
(11, 'GP de Styrie', 'Red Bull Ring', '2021-06-27', 4),
(12, 'GP d\'Autriche', 'Red Bull Ring', '2021-07-04', 4),
(13, 'GP de Grande-Bretagne', 'Silverstone', '2021-07-18', 15),
(14, 'GP de Hongrie', 'Hungaroring', '2021-08-01', 17),
(15, 'GP de Belgique', 'Spa-Francorchamps', '2021-08-29', 18),
(16, 'GP des Pays-Bas', 'Zandvoort', '2021-09-05', 14),
(17, 'GP d\'Italie', 'Autodromo Nazionale Monza', '2021-09-12', 10),
(18, 'GP de Russie', 'Sochi Autodrom', '2021-09-26', 16),
(19, 'GP de Singapour', 'Circuit Ubrain de Marina Bay', '2021-10-03', 22),
(20, 'GP du Japon', 'Suzuka', '2021-10-10', 11),
(21, 'GP des États-Unis', 'Circuit of the Americas', '2021-10-24', 7),
(22, 'GP de Mexico', 'Autodromo Hermanos Rodriguez', '2021-10-31', 12),
(23, 'GP de São Paulo', 'Autódromo José Carlos Pace', '2021-11-07', 21),
(24, 'GP d\'Australie', 'Melbourne Grand Prix Circuit', '2021-11-21', 3),
(25, 'GP d\'Arabie Saoudite', 'Circuit Urbain de Djeddah', '2021-12-05', 19),
(26, 'GP d\'Abu Dhabi', 'Yas Marina Circuit', '2021-12-12', 25),
(30, 'GP de Bahreïn', 'Bahrain International Circuit', '2021-03-28', 23);

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `country` (`id`, `name`, `flag_filename`, `updated_at`) VALUES
(2, 'Allemagne', 'flag-allemagne.png', '2021-05-27 13:21:04'),
(3, 'Australie', 'flag-australie.png', '2021-05-27 13:21:17'),
(4, 'Autriche', 'flag-autriche.png', '2021-05-27 13:21:32'),
(5, 'Canada', 'flag-canada.png', '2021-05-27 13:21:37'),
(6, 'Espagne', 'flag-espagne.png', '2021-05-27 13:21:44'),
(7, 'Etats-Unis', 'flag-etats-unis.png', '2021-05-27 13:21:49'),
(8, 'Finlande', 'flag-finlande.png', '2021-05-27 13:21:54'),
(9, 'France', 'flag-france.png', '2021-05-27 13:21:59'),
(10, 'Italie', 'flag-italie.png', '2021-05-27 13:22:06'),
(11, 'Japon', 'flag-japon.png', '2021-05-27 13:22:11'),
(12, 'Mexique', 'flag-mexique.png', '2021-05-27 13:22:17'),
(13, 'Monaco', 'flag-monaco.png', '2021-05-27 13:22:22'),
(14, 'Pays-Bas', 'flag-pays-bas.png', '2021-05-27 13:22:30'),
(15, 'Royaume-Uni', 'flag-royaume-uni.png', '2021-05-27 13:22:36'),
(16, 'Russie', 'flag-russie.png', '2021-05-27 13:22:43'),
(17, 'Hongrie', 'flag-hongrie.png', '2021-05-28 08:40:21'),
(18, 'Belgique', 'flag-belgique.png', '2021-05-28 08:40:31'),
(19, 'Arabie Saoudite', 'flag-arabie-saoudite.png', '2021-05-28 08:40:41'),
(20, 'Portugal', 'flag-portugal.png', '2021-05-28 08:40:52'),
(21, 'Brésil', 'flag-bresil.png', '2021-05-28 08:40:58'),
(22, 'Singapour', 'flag-singapour.png', '2021-05-28 08:41:05'),
(23, 'Bahreïn', 'flag-bahrein.png', '2021-05-28 08:42:49'),
(24, 'Azerbaïdjan', 'flag-azerbaidjan.png', '2021-05-28 08:43:06'),
(25, 'Émirats Arabes Unis', 'flag-abu-dhabi.png', '2021-05-28 08:43:40');

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210506122901', '2021-05-27 12:12:59', 190),
('DoctrineMigrations\\Version20210506123821', '2021-05-27 12:12:59', 47),
('DoctrineMigrations\\Version20210506135330', '2021-05-27 12:12:59', 27),
('DoctrineMigrations\\Version20210507063328', '2021-05-27 12:12:59', 26),
('DoctrineMigrations\\Version20210507063605', '2021-05-27 12:12:59', 29),
('DoctrineMigrations\\Version20210507063833', '2021-05-27 12:12:59', 35),
('DoctrineMigrations\\Version20210507065913', '2021-05-27 12:12:59', 108),
('DoctrineMigrations\\Version20210507071122', '2021-05-27 12:12:59', 172),
('DoctrineMigrations\\Version20210510130833', '2021-05-27 12:12:59', 132),
('DoctrineMigrations\\Version20210510131105', '2021-05-27 12:12:59', 89),
('DoctrineMigrations\\Version20210510131228', '2021-05-27 12:13:00', 101),
('DoctrineMigrations\\Version20210511053822', '2021-05-27 12:13:00', 3),
('DoctrineMigrations\\Version20210511053915', '2021-05-27 12:13:00', 36),
('DoctrineMigrations\\Version20210511084601', '2021-05-27 12:13:00', 35),
('DoctrineMigrations\\Version20210527121252', '2021-05-28 07:52:37', 40),
('DoctrineMigrations\\Version20210528074928', '2021-05-28 07:52:37', 44),
('DoctrineMigrations\\Version20210528080735', '2021-05-28 08:07:43', 123),
('DoctrineMigrations\\Version20210528080945', '2021-05-28 08:09:50', 77),
('DoctrineMigrations\\Version20210528082827', '2021-05-28 08:28:32', 234);

CREATE TABLE `pilote` (
  `id` int(11) NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `portrait_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `team_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `pilote` (`id`, `surname`, `firstname`, `age`, `number`, `portrait_filename`, `updated_at`, `team_id`, `country_id`, `point`) VALUES
(1, 'Ricciardo', 'Daniel', 31, 3, 'portrait-dricciardo.jpeg', '2021-05-27 13:30:56', 7, 3, 24),
(2, 'Norris', 'Lando', 21, 4, 'portrait-lnorris.jpeg', '2021-05-27 13:31:37', 7, 15, 56),
(3, 'Vettel', 'Sebastian', 33, 5, 'portrait-svettel.jpeg', '2021-05-27 13:33:49', 4, 2, 10),
(4, 'Latifi', 'Nicholas', 25, 6, 'portrait-nlatifi.jpeg', '2021-05-27 13:34:15', 10, 5, NULL),
(5, 'Räikkönen', 'Kimi', 41, 7, 'portrait-kraikkonen.jpeg', '2021-05-27 13:35:15', 1, 8, NULL),
(6, 'Mazepin', 'Nikita', 22, 9, 'portrait-nmazepin.jpeg', '2021-05-27 13:35:37', 6, 16, NULL),
(7, 'Gasly', 'Pierre', 25, 10, 'portrait-pgasly.jpeg', '2021-05-27 13:36:01', 2, 9, 16),
(8, 'Pérez', 'Sergio', 31, 11, 'portrait-sperez.jpeg', '2021-05-27 13:36:32', 9, 12, 44),
(9, 'Alonso', 'Fernando', 39, 14, 'portrait-falonso.jpeg', '2021-05-27 13:36:56', 3, 6, 5),
(10, 'Leclerc', 'Charles', 23, 16, 'portrait-cleclerc.jpeg', '2021-05-27 13:37:26', 5, 13, 40),
(11, 'Stroll', 'Lance', 22, 18, 'portrait-lstroll.jpeg', '2021-05-27 13:37:53', 4, 5, 9),
(12, 'Tsunoda', 'Yuki', 21, 22, 'portrait-ytsunoda.jpeg', '2021-05-27 13:38:10', 2, 11, 2),
(13, 'Ocon', 'Esteban', 24, 31, 'portrait-eocon.jpeg', '2021-05-27 13:38:29', 3, 9, 12),
(14, 'Verstappen', 'Max', 23, 33, 'portrait-mverstappen.jpeg', '2021-05-27 13:38:52', 9, 14, 105),
(15, 'Hamilton', 'Lewis', 36, 44, 'portrait-lhamilton.jpeg', '2021-05-27 13:39:11', 8, 15, 101),
(16, 'Schumacher', 'Mick', 22, 47, 'portrait-mschumacher.jpeg', '2021-05-27 13:39:38', 6, 2, NULL),
(17, 'Sainz', 'Carlos', 26, 55, 'portrait-csainz.jpeg', '2021-05-27 13:39:59', 5, 6, 38),
(18, 'Russell', 'George', 23, 63, 'portrait-grussel.jpeg', '2021-05-27 13:40:25', 10, 15, NULL),
(19, 'Bottas', 'Valtteri', 31, 77, 'portrait-vbottas.jpeg', '2021-05-27 13:40:45', 8, 8, 47),
(20, 'Giovinazzi', 'Antonio', 27, 99, 'portrait-agiovinazzi.jpeg', '2021-05-27 13:41:13', 1, 10, 1);

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `banner_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monoplace_filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `team` (`id`, `name`, `logo_filename`, `updated_at`, `banner_filename`, `monoplace_filename`, `country_id`, `point`) VALUES
(1, 'Alfa Romeo Racing', 'logo-alfa-romeo.png', '2021-05-27 13:24:48', 'banner-alfaromeo.jpeg', 'monoplace-alfa-romeo.png', 10, 1),
(2, 'AlphaTauri', 'logo-alphatauri.png', '2021-05-27 13:25:27', 'banner-alphatauri.jpeg', 'monoplace-alphatauri.png', 10, 18),
(3, 'Alpine', 'logo-alpine.png', '2021-05-27 13:26:02', 'banner-alpine.jpeg', 'monoplace-alpine.png', 9, 17),
(4, 'Aston Martin', 'logo-aston-martin.png', '2021-05-27 13:26:26', 'banner-astonmartin.jpeg', 'monoplace-aston-martin.png', 15, 19),
(5, 'Ferrari', 'logo-ferrari.png', '2021-05-27 13:26:53', 'banner-ferrari.jpeg', 'monoplace-ferrari.png', 10, 78),
(6, 'Haas F1 Team', 'logo-haas.png', '2021-05-27 13:27:19', 'banner-haas.jpeg', 'monoplace-haas.png', 7, NULL),
(7, 'McLaren', 'logo-mclaren.png', '2021-05-27 13:27:53', 'banner-mclaren.jpeg', 'monoplace-mclaren.png', 15, 80),
(8, 'Mercedes', 'logo-mercedes.png', '2021-05-27 13:28:18', 'banner-mercedes.jpeg', 'monoplace-mercedes.png', 2, 148),
(9, 'Red Bull Racing', 'logo-redbull.png', '2021-05-27 13:28:49', 'banner-redbull.jpeg', 'monoplace-redbull.png', 4, 149),
(10, 'Williams', 'logo-williams.png', '2021-05-27 13:29:13', 'banner-williams.jpeg', 'monoplace-williams.png', 15, NULL);


ALTER TABLE `circuit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_1325F3A6F92F3E70` (`country_id`);

ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

ALTER TABLE `pilote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6A3254DD296CD8AE` (`team_id`),
  ADD KEY `IDX_6A3254DDF92F3E70` (`country_id`);

ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C4E0A61FF92F3E70` (`country_id`);


ALTER TABLE `circuit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

ALTER TABLE `pilote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;


ALTER TABLE `circuit`
  ADD CONSTRAINT `FK_1325F3A6F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

ALTER TABLE `pilote`
  ADD CONSTRAINT `FK_6A3254DD296CD8AE` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `FK_6A3254DDF92F3E70` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

ALTER TABLE `team`
  ADD CONSTRAINT `FK_C4E0A61FF92F3E70` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);
