-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2023 a las 01:25:04
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `precio`, `stock`, `imagen`) VALUES
(1, 'Nike Air Force 1 Mid \'07 ', 'Zapatillas de Moda para Hombre', 113999, 7, 0x7a61706174696c6c6139312e6a7067),
(2, 'Nike Blanco y Negro', 'Zapatillas de Moda para Hombre\r\n', 47000, 8, 0x7a61706174696c6c6131312e6a7067),
(3, 'Nike Basket ', 'Zapatillas Deportivas', 100000, 9, 0x7a61706174696c6c6132322e6a706567),
(4, 'Nike High 1', 'Zapatillas de Moda para Hombre', 123000, 9, 0x7a61706174696c6c6132312e6a7067),
(5, 'Nike Multicolor', 'Zapatillas de Moda para Mujer', 70000, 23, 0x7a61706174696c6c6133312e6a706567),
(6, 'Nike Dunk High', 'Zapatillas de Moda para Hombre', 75000, 4, 0x7a61706174696c6c6139312e6a706567),
(7, 'Nike Rainbow', 'Zapatillas de Moda para Mujer', 43000, 19, 0x7a61706174696c6c6134322e6a706567),
(8, 'Nike Gris', 'Zapatillas de Moda para Hombre', 77700, 23, 0x7a61706174696c6c6136312e6a706567),
(9, 'Nike Air 25', 'Zapatillas de Moda para Hombre', 125000, 54, 0x7a61706174696c6c6138312e6a7067),
(10, 'Nike High X', 'Zapatillas de Moda para Hombre', 84990, 12, 0x7a61706174696c6c613331312e6a706567);

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `contraseña`, `rol`) VALUES
(1, 'admin@admin.com', '1234', 'admin'),
(4, 'cliente@gmail.com', '1234', 'cliente'),
(5, 'cliente2@gmail.com', '1234', 'cliente'),
(6, 'cliente3@gmail.com', '1234', 'cliente');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
