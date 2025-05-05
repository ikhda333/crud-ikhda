# Host: localhost  (Version 5.5.5-10.4.32-MariaDB)
# Date: 2024-12-09 19:56:18
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "baju"
#

DROP TABLE IF EXISTS `baju`;
CREATE TABLE `baju` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `ukuran_baju` varchar(10) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "baju"
#

INSERT INTO `baju` VALUES (1,'Jeno','XL','Kemeja'),(2,'Jennie','L','Dress'),(3,'Mingyu','XXL','Kaos'),(4,'Minji','M','Jumpsuit'),(5,'Karina','L','Gamis'),(7,'Udin','L','Kemeja');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'vera','$2y$10$sgxVuLT3R/FhdR1oeNQNjOw2C8VO7d4nOlZ8t.0hPo9sHLWU9J3KW'),(2,'qila','$2y$10$NLckdIiGX.n2ezeVRKF.f.eN9MzqeKg1yUr0sIOefRHUb8f8KTcZa');
