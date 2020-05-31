-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table psicoapp/web.preguntas: ~10 rows (approximately)
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` (`id_pregunta`, `texto_pregunta`) VALUES
	(1, '¿Cuál es la diferencia entre vivir y existir?'),
	(2, ' ¿Qué es lo que más detestas de una persona? ¿Por que?'),
	(3, '¿Qué harías de otra manera si supieras que nadie te juzgará?'),
	(4, '¿Cuál es la promesa más importante que te has hecho?'),
	(5, '¿Cómo podemos tener relaciones saludables?'),
	(6, '¿Cuál es el significado de la vida?'),
	(7, '¿Cómo mides la vida?'),
	(8, '¿Estás en control de tu vida?'),
	(9, '¿Por qué a veces te comportas así?'),
	(10, '¿Cómo puedes cambiar tu vida?');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;

-- Dumping data for table psicoapp/web.respuestas_preguntas: ~0 rows (approximately)
/*!40000 ALTER TABLE `respuestas_preguntas` DISABLE KEYS */;
/*!40000 ALTER TABLE `respuestas_preguntas` ENABLE KEYS */;

-- Dumping data for table psicoapp/web.rol: ~2 rows (approximately)
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`Id_rol`, `nom_rol`) VALUES
	(1, 'psicologo'),
	(2, 'paciente');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;

-- Dumping data for table psicoapp/web.usuario: ~8 rows (approximately)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id_persona`, `correo`, `contrasena`, `id_rol`, `nombres`, `apellidos`) VALUES
	(1, 'prueba2@hotmail.com', '1234', 2, 'Juan', 'Grijalba'),
	(5, 'prueba@hotmail.com', '1234', 1, 'Jose', 'Grijalba'),
	(7, 'prueb@hotmail.com', '1234', 2, NULL, NULL),
	(8, 'prue@hotmail.com', '1234', 2, NULL, NULL),
	(9, 'pru@hotmail.com', '1234', 2, NULL, NULL),
	(15, 'ru@hotmail.com', '1234', 2, NULL, NULL),
	(16, 'qw@hot.com', 'qwe', 2, NULL, NULL),
	(18, 'wer@h.com', '123', 2, 'pdre', 'car'),
	(19, 'asd@hotmail.com', '123', 2, 'cristhian', 'hernandez');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
