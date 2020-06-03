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

-- Dumping data for table psicoapp/web.preguntas: ~9 rows (approximately)
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

-- Dumping data for table psicoapp/web.respuestas_preguntas: ~19 rows (approximately)
/*!40000 ALTER TABLE `respuestas_preguntas` DISABLE KEYS */;
INSERT INTO `respuestas_preguntas` (`correo`, `id_pregunta`, `respuesta`) VALUES
	('prueba@hotmail.com', 2, '7'),
	('prueba@hotmail.com', 3, '77'),
	('prueba@hotmail.com', 4, '7'),
	('prueba@hotmail.com', 5, '7'),
	('prueba@hotmail.com', 6, '7'),
	('prueba@hotmail.com', 7, '7'),
	('prueba@hotmail.com', 8, '7'),
	('prueba@hotmail.com', 9, '7'),
	('prueba@hotmail.com', 10, '7'),
	('cristhian@hotmail.com', 1, 'que vivir es disfrutar de lo que se tiene, y existir es saber que uno no es finito y por lo tanto tiene que ser realizta'),
	('cristhian@hotmail.com', 2, 'la envidia por querer tener lo que el otro, ya que esta no es la mejor forma'),
	('cristhian@hotmail.com', 3, 'nada pues ya vivo como si no pasara lo que hago es segun mis valores eticos'),
	('cristhian@hotmail.com', 4, 'niguna'),
	('cristhian@hotmail.com', 5, 'comiendo saludable'),
	('cristhian@hotmail.com', 6, 'amar al projimo'),
	('cristhian@hotmail.com', 7, 'exclente'),
	('cristhian@hotmail.com', 8, 'se puede decir que si'),
	('cristhian@hotmail.com', 9, 'porque quiero jajajajaj'),
	('cristhian@hotmail.com', 10, 'haciendo cosas que nunca he hecho');
/*!40000 ALTER TABLE `respuestas_preguntas` ENABLE KEYS */;

-- Dumping data for table psicoapp/web.rol: ~2 rows (approximately)
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`Id_rol`, `nom_rol`) VALUES
	(1, 'psicologo'),
	(2, 'paciente');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;

-- Dumping data for table psicoapp/web.usuario: ~9 rows (approximately)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id_persona`, `correo`, `contrasena`, `id_rol`, `nombres`, `apellidos`) VALUES
	(1, 'prueba2@hotmail.com', '1234', 2, 'Juan', 'Grijalba'),
	(5, 'prueba@hotmail.com', '1234', 2, 'Jose', 'Grijalba'),
	(7, 'cristhian@hotmail.com', '1234', 2, 'Cristhian', 'Hernandez'),
	(8, 'prue@hotmail.com', '1234', 2, NULL, NULL),
	(9, 'pru@hotmail.com', '1234', 2, NULL, NULL),
	(15, 'psicologo@hotmail.com', '1234', 1, 'Psicologo', 'Anonimo'),
	(16, 'qw@hot.com', 'qwe', 2, NULL, NULL),
	(18, 'wer@h.com', '123', 2, 'pdre', 'car'),
	(19, 'asd@hotmail.com', '123', 2, 'Pablo', 'hernandez');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
