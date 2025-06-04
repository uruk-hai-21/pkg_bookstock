CREATE TABLE IF NOT EXISTS `#__bookstock` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `quantity` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 DEFAULT COLLATE=utf8mb4_unicode_ci;

INSERT INTO `#__bookstock` (`quantity`) VALUES (0);