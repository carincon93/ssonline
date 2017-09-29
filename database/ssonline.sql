-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2017 a las 00:57:57
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ssonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_28_145010_create_servicios_table', 1),
(4, '2017_09_28_145325_create_politicas_de_seguridad', 1),
(5, '2017_09_29_143610_create_servicios_adquiridos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politicas_de_seguridad`
--

CREATE TABLE `politicas_de_seguridad` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `politicas_de_seguridad`
--

INSERT INTO `politicas_de_seguridad` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Monitoreo transaccional de DIGICERT en línea ante vulnerabilidades y software malicioso.', '2017-09-29 13:09:58', '2017-09-29 13:09:58'),
(2, 'Nuestra plataforma transaccional CWEB se encuentra en un Data Center.', '2017-09-29 13:10:11', '2017-09-29 13:10:11'),
(3, 'Bloqueo automático de transacciones ante detecciones de fraude.', NULL, NULL),
(4, 'Sistema antifraude de transacciones.', NULL, NULL),
(5, 'Certificado de seguridad y de vulnerabilidades DIGICERT.', NULL, NULL),
(6, 'Acceso a la plataforma de pagos segura autorizado por Redeban.', NULL, NULL),
(7, 'Correo electrónico con confirmación de compra.', NULL, NULL),
(8, 'Monitoreo transaccional de DIGICERT en línea ante vulnerabilidades y software malicioso.', NULL, NULL),
(9, 'Nuestra plataforma transaccional SSONLINE cuenta con multiusuarios para cada propósito.', NULL, NULL),
(10, 'Bloqueo automático de transacciones ante detecciones de fraude.', NULL, NULL),
(11, 'Validación de identificación SIRI.', NULL, NULL),
(12, 'Autonomía en montos por transacción.', NULL, NULL),
(13, 'Centro de control de transacciones de revisión manual.', NULL, NULL),
(14, 'Disponibilidad de switch transaccional superior a 99.9 %.', NULL, NULL),
(15, 'Soporte en línea a través de www.ssonline.co', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_servicio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `descripcion`, `tipo_servicio`, `created_at`, `updated_at`) VALUES
(1, 'Análisis y desarrollo de planes de mercadeo orientados a habilitar estrategias de CRM \r\n(Costumer Relation  Managment).', 'servicios estrategicos', '2017-09-29 13:06:20', '2017-09-29 13:06:20'),
(2, 'Análisis de Información.', 'servicios estrategicos', '2017-09-29 13:06:30', '2017-09-29 13:06:30'),
(3, 'Procesamiento de Información.', 'servicios estrategicos', '2017-09-29 13:06:38', '2017-09-29 13:06:38'),
(4, 'Transacción electrónica.', 'servicios estrategicos', '2017-09-29 13:06:53', '2017-09-29 13:06:53'),
(5, 'Implantación e implementación de tecnología de punta.', 'servicios tecnologicos', '2017-09-29 13:07:17', '2017-09-29 13:07:17'),
(6, 'Herramientas de control y gestión.', 'servicios tecnologicos', '2017-09-29 13:07:25', '2017-09-29 13:07:25'),
(7, 'Informe y reportes en línea para la toma de decisiones.', 'servicios tecnologicos', '2017-09-29 13:07:35', '2017-09-29 13:07:35'),
(8, 'Comunicación.', 'servicios tecnologicos', '2017-09-29 13:07:43', '2017-09-29 13:07:43'),
(9, 'A partir de herramientas tecnológicas y de modelos estratégicos desarrollamos campañas de comunicación desde diversos puntos de su compañía para el consumidor, las cuales interactúan independiente y complementariamente para ayudarle a su compañía cumplir con  sus clientes el \r\nobjetivo de marca y mercado de una forma medible y \r\nconstante.', 'servicios tecnologicos', '2017-09-29 13:07:54', '2017-09-29 13:07:54'),
(10, 'Diseño y Desarrollo de websites.', 'servicios interactivos', '2017-09-29 13:08:22', '2017-09-29 13:08:22'),
(11, 'Campañas de mercadeo Online.', 'servicios interactivos', '2017-09-29 13:08:34', '2017-09-29 13:08:34'),
(12, 'Diseño y desarrollo de portales de Mercadeo.', 'servicios interactivos', '2017-09-29 13:08:42', '2017-09-29 13:08:42'),
(13, 'Adquisición, actualización y exploración de Bases de Datos.', 'servicios interactivos', '2017-09-29 13:08:50', '2017-09-29 13:08:50'),
(14, 'Email Marketing.', 'servicios interactivos', '2017-09-29 13:08:58', '2017-09-29 13:08:58'),
(15, 'Servicios de audio Respuesta (IVR).', 'servicios interactivos', '2017-09-29 13:09:06', '2017-09-29 13:09:06'),
(16, 'Carrito de compras.', 'servicios interactivos', '2017-09-29 13:09:18', '2017-09-29 13:09:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_adquiridos`
--

CREATE TABLE `servicios_adquiridos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `servicio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/images/foto-default.png',
  `sitio_web` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cliente',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `foto`, `sitio_web`, `rol`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', '/images/foto-default.png', 'google.com', 'admin', '$2y$10$NC8Zli6eBJtHC6/ROfq1v.MzP75/GqOg4jT2VdX3pIAuhiPMo.f7m', 'QhBUjzoXWMzxn4d8b1LedPkOpsJmPLUT1V5gJrP7NotcrX3rdU5MUxEMghVa', '2017-09-30 01:56:13', '2017-09-30 01:56:13'),
(2, 'cliente', 'cliente@mail.com', '/images/foto-default.png', 'google.com', 'cliente', '$2y$10$7r7Xe3hfObxnymkyZSLA0.IDwYabcz4.ZYep66rLZu0NYBy3s7bRu', NULL, '2017-09-30 01:57:34', '2017-09-30 01:57:34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `politicas_de_seguridad`
--
ALTER TABLE `politicas_de_seguridad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios_adquiridos`
--
ALTER TABLE `servicios_adquiridos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `politicas_de_seguridad`
--
ALTER TABLE `politicas_de_seguridad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `servicios_adquiridos`
--
ALTER TABLE `servicios_adquiridos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
