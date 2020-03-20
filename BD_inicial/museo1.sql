-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2020 a las 01:40:11
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `museo1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `abouts`
--

INSERT INTO `abouts` (`id`, `titulo`, `descripcion`, `imagen`, `created_at`, `updated_at`) VALUES
(5, 'Museo del Prado', 'The Museo del Prado opened to the public on 19 November 1819 as a Royal Museum of Painting and Sculpture. In 2019, we celebrated our Bicentenary, a commemoration that will reveal the path covered since 1819 until today. On this special occasion, we wanted to reflect on the future and the forthcoming challenges for this and the other great Museums of ancient painting: the need to attract social groups that traditionally are not attracted by the collections, to encourage gender and minority research studies or the challenges caused by overcrowding. Furthermore, for the following years the finalization of the Prado Campus is expected, adding the last building, the Hall of Realms, the old Buen Retiro Palace, an incorporation that will imply a rethinking of the current display of the collections. The activity plan for the bicentenary reinforces the usual programme of the Museo del Prado, insisting on the above mentioned aspects.', 'imagenes/about/2020-03-19-20-29-08.png', '2020-03-02 23:06:19', '2020-03-20 00:29:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `blogs`
--

INSERT INTO `blogs` (`id`, `nombre`, `cargo`, `imagen`, `created_at`, `updated_at`) VALUES
(5, 'Blog del dia', '27-03-20', 'imagenes/blog/2020-03-19-21-17-43.jpg', '2020-02-19 23:28:44', '2020-03-20 01:17:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacts`
--

INSERT INTO `contacts` (`id`, `titulo`, `descripcion`, `direccion`, `telefono`, `email`, `created_at`, `updated_at`) VALUES
(3, 'Información de contacto', 'Puede contactarse con nosotros mediante los siguientes medios', 'Calle 16 de Julio, # 456 La paz, Bolivia', '44489887', 'info@museoPrado.com', '2020-02-11 22:08:15', '2020-03-20 01:20:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galleris`
--

CREATE TABLE `galleris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombre_imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `galleris`
--

INSERT INTO `galleris` (`id`, `titulo`, `descripcion`, `Nombre_imagen`, `imagen`, `created_at`, `updated_at`) VALUES
(10, 'Mamani Mamani', 'Nuestros trabajos son de alta calidad es una parte que refleja nuestro esfuerzo y cariño', 'mamani mamani', 'imagenes/galleri/2020-03-19-20-45-47.jpg', '2020-02-11 21:39:14', '2020-03-20 00:45:47'),
(11, 'Uma resposta to “Novas Telas Africanas”', 'The Museo del Prado opened to the public on 19 November 1819 as a Royal Museum of Painting and Sculpture. In 2019, we celebrated our Bicentenary, a commemoration that will reveal the path covered since 1819 until today. On this special occasion, we wanted to reflect on the future and the forthcoming challenges for this and the other great Museums of ancient painting: the need to attract social groups that traditionally are not attracted by the collections, to encourage gender and minority research studies or the challenges caused by overcrowding. Furthermore, for the following years the finalization of the Prado Campus is expected, adding the last building, the Hall of Realms, the old Buen Retiro Palace, an incorporation that will imply a rethinking of the current display of the collections. The activity plan for the bicentenary reinforces the usual programme of the Museo del Prado, insisting on the above mentioned aspects.', 'Uma resposta to “Novas Telas Africanas”', 'imagenes/galleri/2020-03-19-20-46-58.jpg', '2020-03-20 00:46:58', '2020-03-20 00:46:58'),
(12, 'Parque del pescado', 'Obra original y única de la serie \"Arquitectura del paisaje\". Firmado y fechado Somonte 2019. De estilo neo-realista, la serie está formada por ensayos estéticos de la arquitectura en la naturaleza. Son espacios imaginarios que evocan algún recuerdo o deseo del artista. El precio incluye un boceto previo en tinta sobre papel.', 'Parque del pescado', 'imagenes/galleri/2020-03-19-20-48-25.jpg', '2020-03-20 00:48:25', '2020-03-20 00:48:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `homes`
--

CREATE TABLE `homes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `homes`
--

INSERT INTO `homes` (`id`, `titulo`, `descripcion`, `imagen`, `created_at`, `updated_at`) VALUES
(7, 'MUSEO DEL PRADO', 'EXPERIENCIAS CULTURALES MEMORABLES', 'imagenes/home/2020-03-19-21-22-29.jpg', '2020-02-11 21:10:47', '2020-03-20 01:22:29');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_26_194727_create_homes_table', 1),
(5, '2019_12_26_194828_create_abouts_table', 1),
(6, '2019_12_26_194907_create_services_table', 1),
(7, '2019_12_26_195049_create_testimonials_table', 1),
(8, '2019_12_26_195110_create_blogs_table', 1),
(9, '2019_12_26_195122_create_contacts_table', 1),
(10, '2019_12_26_195150_create_contact_messages_table', 1),
(11, '2020_01_21_154458_create_galleris_table', 1),
(12, '2020_01_23_202013_create_rols_table', 1),
(34, '2020_01_13_190619_create_roles_table', 1),
(35, '2020_01_13_190726_create_role_user_table', 1),
(55, '2019_12_26_195036_create_galleries_table', 2),
(73, '2020_01_13_194834_create_roles_table', 3),
(74, '2020_01_13_195045_create_role_user_table', 3),
(113, '2014_10_12_000000_create_users_table', 4),
(114, '2014_10_12_100000_create_password_resets_table', 4),
(115, '2019_08_19_000000_create_failed_jobs_table', 4),
(116, '2019_12_26_194727_create_homes_table', 4),
(117, '2019_12_26_194828_create_abouts_table', 4),
(118, '2019_12_26_194907_create_services_table', 4),
(119, '2019_12_26_195049_create_testimonials_table', 4),
(120, '2019_12_26_195110_create_blogs_table', 4),
(121, '2019_12_26_195122_create_contacts_table', 4),
(122, '2019_12_26_195150_create_contact_messages_table', 4),
(123, '2020_01_21_154458_create_galleris_table', 4),
(124, '2020_01_23_202013_create_rols_table', 4);

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
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_rol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `nombre_rol`, `created_at`, `updated_at`) VALUES
(1, 'administrador', NULL, NULL),
(2, 'usuario', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo_imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_imagen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `titulo`, `descripcion`, `titulo_imagen`, `descripcion_imagen`, `imagen`, `created_at`, `updated_at`) VALUES
(20, 'Exposición permanente', 'El Museo dispone ante el visitante una completa exposición permanente dividida en tres ámbitos distintos:', 'Servicio permenente', 'El Museo dispone ante el visitante una completa exposición permanente dividida en tres ámbitos distintos:  Colección Arqueológica de época romana: Se ubica en la sede principal del Museo y se articula en 30 salas organizadas en tres plantas. Cripta: Instalada en el sótano de la sede principal, cuenta con las ruinas de un tramo de la conducción hidráulica de San Lázaro, otro de la calzada que salía hacia la ciudad de Córdoba y un peculiar barrio extramuros compuesto por viviendas, edificios funerarios e instalaciones industriales. Colección de Arte Visigodo: Se ubica en la Iglesia de Santa Clara.', 'imagenes/services/2020-03-19-20-23-46.png', '2020-03-20 00:14:02', '2020-03-20 00:23:46'),
(21, 'Exposiciones Temporales', 'Como complemento a la exposición permanente, el Museo programa anualmente exposiciones temporales que pueden ser de producción propia, o bien en colaboración con otras instituciones.', 'Exposiciones Temporales', 'Como complemento a la exposición permanente, el Museo programa anualmente exposiciones temporales que pueden ser de producción propia, o bien en colaboración con otras instituciones.', 'imagenes/services/2020-03-19-20-22-09.png', '2020-03-20 00:17:59', '2020-03-20 00:22:09'),
(22, 'Cesión de espacios', 'Espacios como la sala de exposiciones temporales y el salón de actos pueden cederse para actividades de carácter cultural (conciertos, reportajes fotográficos, periodísticos y cinematográficos, actuaciones teatrales, ciclos de conferencias, reuniones, etc.). Para ello se han de abonar las tasas previstas en la legislación vigente.', 'Cesión de espacios', 'Espacios como la sala de exposiciones temporales y el salón de actos pueden cederse para actividades de carácter cultural (conciertos, reportajes fotográficos, periodísticos y cinematográficos, actuaciones teatrales, ciclos de conferencias, reuniones, etc.). Para ello se han de abonar las tasas previstas en la legislación vigente.', 'imagenes/services/2020-03-19-20-22-19.png', '2020-03-20 00:20:07', '2020-03-20 00:22:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_cli` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `testimonials`
--

INSERT INTO `testimonials` (`id`, `titulo`, `descripcion_titulo`, `imagen`, `nombre_cli`, `created_at`, `updated_at`) VALUES
(8, 'Rolando Mora G.', 'Fue una experiencia memorable por el ambiente que se siente en el lugar.', 'uploads/Testimonials/ZV3Tg1e4ePm3rnYSFnmZzrMxp0Qx5sLQwrQ2XLm8.jpeg', 'Rolando Mora G.', '2020-03-20 01:06:05', '2020-03-20 01:06:17'),
(9, 'Ruby Chavez  A.', 'Fue una gran visita donde recibi una gran experiencia de atención', 'uploads/Testimonials/SRVvErzN5ip6CAanbwQlTJybagjgesu8wycxqgW2.jpeg', 'Ruby Chavez  A.', '2020-03-20 01:09:47', '2020-03-20 01:09:47'),
(10, 'Rolando Mora G.', 'Increible grandes obras de arte e historia', 'uploads/Testimonials/K6JufNksL2zyvIbtTiaZjfj8tYDRZAxwKEoB1YYt.jpeg', 'Rolando Mora G.', '2020-03-20 01:10:04', '2020-03-20 01:10:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `rol_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'adrian', 'adrian@gmail.com', NULL, '$2y$10$cgJLf0wdRlYjmLFvFMomgeEl6Al7BZngmtmN65Vt0dwEIL/qPTKP2', 1, 'PSOOSvp74BmwVjCshDZ2Ae2u7We8y77Uct5xhP0hy07qHInexwC9co9jDTBd', '2020-01-27 18:54:31', '2020-01-27 18:54:31'),
(17, 'adrian', 'adri@gmail.com', NULL, '$2y$10$F5DPUSAFI6SDAb.VzwSqbOizkCZ/QpKVjH7BVE6rnCVp3uv1D73Va', 2, NULL, '2020-01-28 23:50:27', '2020-01-28 23:50:27'),
(18, 'admin', 'juan@gma.com', NULL, '$2y$10$vlRMbm41sTGkIiDW/.RX/OMkZcWsvxPArWnpdF4f9tsuMBtn44VlK', 2, NULL, '2020-01-29 00:05:15', '2020-01-29 00:05:15'),
(21, 'asd', 'saf', NULL, '$2y$10$eo6qdZGWk6zXALeunuPUzueIixOEwAxun60kI0kOIg1YUc3wHgJzW', 1, NULL, '2020-02-04 00:41:01', '2020-02-04 00:41:01'),
(22, 'fabio', 'fabi@gmail.com', NULL, '$2y$10$8NOVt96KuP2JMmw.JQm8mOagmUP6EfCmsMbepu8LDWX.LfFS8XW5i', 2, NULL, '2020-02-06 23:11:01', '2020-02-06 23:11:01'),
(23, 'jhon', 'jhon@gmail.com', NULL, '$2y$10$aIn3g3OSLXiuV79XdA2ADOFQJ7EeBJaQVvrQuEoWQN/Z/R0ymlT.e', 1, NULL, '2020-02-06 23:31:28', '2020-02-06 23:31:28'),
(24, 'alex', 'alex@gmail.com', NULL, '$2y$10$6aAVV19JOxSl4DFkI1fb9.0uFtg4PxayRybIi5DQdUjkrWfArq2Hu', 1, NULL, '2020-02-06 23:31:50', '2020-02-06 23:31:50'),
(25, 'fabio', 'fabio@hotmail.com', NULL, '$2y$10$Z2iMGFi4bVjqduLrPLuUz.IM6QzIh1tOruWiTKhB.aZ/WV3d0/aRS', 2, NULL, '2020-02-11 19:40:37', '2020-02-11 19:40:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galleris`
--
ALTER TABLE `galleris`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT de la tabla `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `galleris`
--
ALTER TABLE `galleris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
