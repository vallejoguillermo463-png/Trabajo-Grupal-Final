-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         11.8.3-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.11.0.7065
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para db_videojuegos
CREATE DATABASE IF NOT EXISTS `db_videojuegos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_uca1400_ai_ci */;
USE `db_videojuegos`;

-- Volcando estructura para tabla db_videojuegos.videojuegos
CREATE TABLE IF NOT EXISTS `videojuegos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `fecha_lanzamiento` date NOT NULL,
  `stock` tinyint(4) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_uca1400_ai_ci;

-- Volcando datos para la tabla db_videojuegos.videojuegos: ~10 rows (aproximadamente)
INSERT INTO `videojuegos` (`id`, `nombre`, `genero`, `precio`, `fecha_lanzamiento`, `stock`, `imagen`) VALUES
	(1, 'EA Sports FC 25', 'Deportes', 69.99, '2024-09-27', 1, '1781662960_WhatsApp Image 2026-06-16 at 9.21.11 PM (9).jpeg'),
	(2, 'Minecraft', 'Sandbox', 29.99, '2011-11-18', 1, '1781662977_WhatsApp Image 2026-06-16 at 9.21.11 PM (8).jpeg'),
	(3, 'Grand Theft Auto V', 'Accion', 39.99, '2013-09-17', 1, '1781663276_WhatsApp Image 2026-06-16 at 9.21.11 PM (7).jpeg'),
	(4, 'Call of Duty Black Ops 6', 'Shooter', 79.99, '2024-10-25', 1, '1781663295_WhatsApp Image 2026-06-16 at 9.21.11 PM (6).jpeg'),
	(5, 'The Legend of Zelda: Tears of the Kingdom', 'Aventura', 69.99, '2023-05-12', 1, '1781663310_WhatsApp Image 2026-06-16 at 9.21.11 PM (5).jpeg'),
	(6, 'God of War Ragnarok', 'Accion', 59.99, '2022-11-09', 0, '1781663344_WhatsApp Image 2026-06-16 at 9.21.11 PM (4).jpeg'),
	(7, 'Resident Evil 4 Remake', 'Terror', 49.99, '2023-03-24', 1, '1781663361_WhatsApp Image 2026-06-16 at 9.21.11 PM (3).jpeg'),
	(8, 'Forza Horizon 5', 'Carreras', 54.99, '2021-11-09', 1, '1781663377_WhatsApp Image 2026-06-16 at 9.21.11 PM (2).jpeg'),
	(9, 'Red Dead Redemption 2', 'Aventura', 44.99, '2018-10-26', 0, '1781663390_WhatsApp Image 2026-06-16 at 9.21.11 PM (1).jpeg'),
	(10, 'Cyberpunk 2077', 'RPG', 49.99, '2020-12-10', 1, '1781663408_WhatsApp Image 2026-06-16 at 9.21.11 PM.jpeg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
