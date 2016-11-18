-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2016 a las 00:19:14
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `panda`
--
CREATE DATABASE IF NOT EXISTS `panda` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `panda`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `titulo` varchar(25) CHARACTER SET utf8 NOT NULL COMMENT 'titulo de la actividad',
  `descripcion` varchar(300) CHARACTER SET utf8 DEFAULT NULL COMMENT 'descripcion de la actividad',
  `tipo` int(1) NOT NULL COMMENT '0-juego 1-dinamica 2-video'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `titulo`, `descripcion`, `tipo`) VALUES
(1, 'Memorama Bob Esponja', 'Los puzzles pueden ser una gran ayuda para mejorar la concentración, este es un gran ejemplo', 0),
(2, 'Simon', 'Simon dice” pueden ser positivos para los niños con TDAH ayudándoles a memorizar cosas y a fijar su atención.', 0),
(3, 'Mario bros puzzle', 'El puzzle ayuda a mejorar la concentración del niño para así mejorar también en el aula escolar\r\n', 0),
(4, 'Los simpson parejas', 'Al tener los juegos estilo parejas ayuda al niño a mejorar su memoria puesto debe de recordar en donde quedo cada carta y juntarla con una igual', 0),
(5, 'Colorea scooby do', 'El colorear a personajes de su caricatura favorita ayuda a retener su concentración para así poder mejorar la misma', 0),
(6, 'Crea tu propio bingo', 'El objetivo de este juego es poder convivir en familia así como obtener concentración y memorización por parte del niño/a', 0),
(7, 'corazón con el color ', 'Su hijo podrá aprender a diferenciar los colores de manera divertida', 0),
(8, 'Colorea y aprende', 'Diviertete aprendiendo vocabulario de comida mientras coloreas.', 0),
(9, 'Mira de cerca', 'Se recomienda para esta actividad recortar las imágenes y pegarlas en alguna pared. Después se puede preguntar al niño de buscar figuras que empiecen con la letra "A" o "¿Donde esta la manzana?".', 0),
(10, 'Busca ese color', '¡Imprime cuantas veces quieras, recortala y a jugar!. Dile a tu hijo/a que busque objetos que tengan el color que le indiques.', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL COMMENT 'id del usuario',
  `id_actividad` int(11) NOT NULL COMMENT 'id de la actividad',
  `calificacion` int(1) NOT NULL COMMENT 'califiacion dada'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`id`, `id_usuario`, `id_actividad`, `calificacion`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 1, 3, 4),
(4, 1, 4, 3),
(5, 1, 5, 1),
(7, 2, 2, 5),
(8, 2, 3, 4),
(9, 2, 4, 3),
(10, 2, 5, 2),
(12, 3, 4, 4),
(50, 3, 3, 3),
(16, 4, 4, 5),
(17, 4, 5, 4),
(21, 5, 5, 1),
(26, 2, 1, 1),
(27, 3, 1, 1),
(28, 3, 2, 5),
(29, 4, 1, 1),
(30, 4, 2, 2),
(31, 4, 3, 3),
(32, 5, 1, 5),
(33, 5, 2, 4),
(34, 5, 3, 3),
(35, 5, 4, 4),
(52, 9, 2, 3),
(51, 9, 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL COMMENT 'nombre de usuario',
  `correo` varchar(30) NOT NULL COMMENT 'correo electronico',
  `contrasena` varchar(80) NOT NULL COMMENT 'contrasena'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(1, 'Admin', 'example@gmai.com', 'contrasena'),
(2, 'Admin2', 'ejemplo@ejemplo.com', '1234'),
(3, 'Gadiel Hernandez', 'ejemplo@ejemplo.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(4, 'usu7', 'sdfdsf', '039c501ac8dfcac91c6f05601cee876e1cc07e17'),
(5, 'usu5', '', '039c501ac8dfcac91c6f05601cee876e1cc07e17'),
(6, 'usu6', '', ''),
(7, 'Admin', 'admin@ejemplo.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(8, 'Juan', 'juan.perez@hotmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(9, 'Usuario1', 'usuario@prueba.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
