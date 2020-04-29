-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para intranet
CREATE DATABASE IF NOT EXISTS `intranet` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `intranet`;

-- Volcando estructura para tabla intranet.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `categoria_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoria_descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoria_activo` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla intranet.categorias: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT IGNORE INTO `categorias` (`id`, `categoria_nombre`, `categoria_descripcion`, `categoria_activo`, `created_at`, `updated_at`) VALUES
	(1, 'Tecnologia', 'Este es una categoria de tecnologia', 1, '2020-02-07 20:33:56', '2020-02-07 20:33:56'),
	(2, 'Marketing', 'Marketin es a etiqueta.', 0, '2020-02-07 21:01:32', '2020-02-07 21:01:32'),
	(3, 'Salud', 'Salud es una etiqueta', 1, '2020-02-07 21:02:01', '2020-02-07 21:02:01'),
	(4, 'Mecanica', 'Tag de mecanica', 0, '2020-02-09 22:24:25', '2020-02-09 22:24:25'),
	(5, 'Electronica', 'Tag de electronica.', 0, '2020-02-10 01:48:33', '2020-02-10 12:35:06'),
	(6, 'Moda', 'esto es una etiqueta de moda', 1, '2020-02-10 12:38:57', '2020-02-10 12:38:57'),
	(7, 'Salud', 'Esto es una etiqueta de salud.', 0, '2020-02-10 12:46:02', '2020-02-10 12:46:02'),
	(8, 'Carros', 'Esto es una etiqueta de carros.', 1, '2020-02-10 12:46:39', '2020-02-10 12:46:56');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla intranet.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla intranet.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla intranet.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla intranet.migrations: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_01_23_171341_create_roles_table', 1),
	(5, '2020_01_23_173049_add_id_user_to_users_table', 1),
	(6, '2020_01_23_220336_add_id_role_to_users_table', 1),
	(7, '2020_01_30_235921_add_status_to_roles_table', 1),
	(8, '2020_02_05_192742_add_avatar_to_users_table', 1),
	(9, '2020_02_07_164555_create_categorias_table', 2),
	(10, '2020_02_12_165315_create_noticias_table', 3),
	(11, '2020_02_20_203827_add_image_name_to_noticias_table', 4),
	(12, '2020_02_26_170143_crear_noticia_categoria_table', 5),
	(13, '2020_03_16_130702_crear_usuario_rol_table', 6),
	(14, '2020_03_16_141620_crear_usuario_roles_table', 7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla intranet.noticias
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `noticia_titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noticia_fecha_publicacion` timestamp NOT NULL,
  `noticia_imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noticia_imagen_nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noticia_descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla intranet.noticias: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT IGNORE INTO `noticias` (`id`, `noticia_titulo`, `noticia_fecha_publicacion`, `noticia_imagen`, `noticia_imagen_nombre`, `noticia_descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Noticia 001', '2020-12-12 00:00:00', 'public/8vV7QsfJ9sJgE9ZppGXDEuwjXzg8YxKyMR2u8hkQ.jpeg', '61474974_10216647220126706_5513782025653321728_o.jpg', 'esta es una descripcion de prueba.', '2020-03-15 23:26:10', '2020-03-15 23:26:10');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;

-- Volcando estructura para tabla intranet.noticia_categoria
CREATE TABLE IF NOT EXISTS `noticia_categoria` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_noticia` bigint(20) unsigned NOT NULL,
  `id_categoria` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `noticia_categoria_id_noticia_foreign` (`id_noticia`),
  KEY `noticia_categoria_id_categoria_foreign` (`id_categoria`),
  CONSTRAINT `noticia_categoria_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`),
  CONSTRAINT `noticia_categoria_id_noticia_foreign` FOREIGN KEY (`id_noticia`) REFERENCES `noticias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla intranet.noticia_categoria: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `noticia_categoria` DISABLE KEYS */;
INSERT IGNORE INTO `noticia_categoria` (`id`, `id_noticia`, `id_categoria`) VALUES
	(1, 1, 1),
	(3, 1, 8),
	(4, 1, 3),
	(5, 1, 4),
	(6, 1, 5);
/*!40000 ALTER TABLE `noticia_categoria` ENABLE KEYS */;

-- Volcando estructura para tabla intranet.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla intranet.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla intranet.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `rol_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rol_key_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rol_description` text COLLATE utf8_unicode_ci,
  `activo` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_rol_key_name_unique` (`rol_key_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla intranet.roles: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT IGNORE INTO `roles` (`id`, `rol_name`, `rol_key_name`, `rol_description`, `activo`, `created_at`, `updated_at`) VALUES
	(1, 'Administrador', 'admin', 'Usuario administrador de la intranet.', 1, '2020-02-06 04:55:03', '2020-02-06 04:55:03'),
	(2, 'Moderador', 'moderador', 'Moderador de la intranet.', 1, '2020-03-17 01:57:49', '2020-03-17 01:57:49'),
	(3, 'Aprobador', 'aprobador', 'aprobador de la intranet.', 1, '2020-03-17 01:58:25', '2020-03-17 01:58:25');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Volcando estructura para tabla intranet.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'avatar-default.jpg',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla intranet.users: ~45 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT IGNORE INTO `users` (`id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`, `user_id`) VALUES
	(1, 'Ammiel', 'ammiel16@gmail.com', 'public/6Vo254g8bYCw7c6Jow8v4pPOzu78lKsFYBlVy1LG.jpeg', NULL, '$2y$10$HgDzna71CDnDYqXov7qEeOeNL8L3gI.Sx0uvORcrfvWACsn1j4NfG', 1, NULL, '2020-02-06 04:49:08', '2020-02-07 21:02:52', NULL),
	(2, 'Carla hernandez', 'carla@gmail.com', 'avatar-default.jpg', NULL, '$2y$10$xgOCx0fvQDLURYwEEzLFX.Ayi1BlnMOa/y0wyrhkBQ9tkFNn623WC', 1, NULL, '2020-02-06 04:52:15', '2020-03-17 22:41:07', NULL),
	(3, 'Cesar', 'cesar@gmail.com', 'public/cPk4noaiEDl9offNHJuENHFQ3qx7lKQe6kFlvxth.jpeg', NULL, '$2y$10$r6CuYboxs4VyKAoRuySxCORZJmLnB6MVBDBcgah6x7.1Cv.E/hI1e', 1, NULL, '2020-03-15 06:37:28', '2020-03-15 06:37:28', NULL),
	(4, 'Jose', 'jose@gmail.com', 'avatar-default.jpg', NULL, '$2y$10$SktXwGfwmr5plSE.RKpPKuh/gYVynOyehUVFQG4HcF0io.XhIKZ9y', 1, NULL, '2020-03-17 13:24:38', '2020-03-17 13:24:38', NULL),
	(5, 'keny', 'keny@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 14:11:39', '2020-03-21 14:11:39', NULL),
	(6, 'luis', 'luis@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 14:43:02', '2020-03-21 14:43:02', NULL),
	(7, 'rocio', 'rocio@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 14:43:47', '2020-03-21 14:43:47', NULL),
	(9, 'hefhhh', 'hhjjj@hhhh.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 14:55:13', '2020-03-21 14:55:13', NULL),
	(10, 'yttyuu', 'ammm@gg.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 14:56:23', '2020-03-21 14:56:23', NULL),
	(11, 'gfddd', 'fffff@dd.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 14:57:04', '2020-03-21 14:57:04', NULL),
	(12, 'Ruth', 'ruth@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 15:15:43', '2020-03-21 15:15:43', NULL),
	(13, 'walter', 'walter@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 15:17:57', '2020-03-21 15:17:57', NULL),
	(14, 'Oscar', 'oscar@gg.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 15:22:38', '2020-03-21 15:22:38', NULL),
	(15, 'hernan', 'hernan@gg.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 15:24:15', '2020-03-21 15:24:15', NULL),
	(16, 'bbbbb', 'bbbb@ggg.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 15:30:52', '2020-03-21 15:30:52', NULL),
	(17, 'vcvv', 'ccvvc@ff.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 15:32:11', '2020-03-21 15:32:11', NULL),
	(18, 'desf', 'desf@ggaa.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 16:36:32', '2020-03-21 16:36:32', NULL),
	(19, 'yyyyyy', 'yyyy@dd com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 16:39:32', '2020-03-21 16:39:32', NULL),
	(20, 'gggggg', 'ggg@ggg.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 16:40:43', '2020-03-21 16:40:43', NULL),
	(21, 'tttttt', 'tttt@tt.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 16:41:33', '2020-03-21 16:41:33', NULL),
	(22, 'panj', 'pan@dd.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 16:44:52', '2020-03-21 16:44:52', NULL),
	(23, 'uuuuu', 'uuu@zzz.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 16:51:04', '2020-03-21 16:51:04', NULL),
	(24, 'zgdgdhdhdhd', 'tttttt@tt.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 17:05:52', '2020-03-21 17:05:52', NULL),
	(25, 'ccccc', 'cccc@dd.con', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 17:39:54', '2020-03-21 17:39:54', NULL),
	(27, 'hhhh', 'hhh@zzz.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 18:02:53', '2020-03-21 18:02:53', NULL),
	(28, 'vvvvv', 'vvv@sss.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 18:05:56', '2020-03-21 18:05:56', NULL),
	(29, 'belen', 'belen@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 18:51:39', '2020-03-21 18:51:39', NULL),
	(30, 'ruben', 'rubeen@dd.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 21:22:49', '2020-03-21 21:22:49', NULL),
	(31, 'damian', 'damian@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-21 21:26:35', '2020-03-21 21:26:35', NULL),
	(32, 'yuli', 'yuli@jdjf.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-23 00:22:09', '2020-03-23 00:22:09', NULL),
	(33, 'Joseth', 'joseth@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-25 04:01:53', '2020-03-25 04:01:53', NULL),
	(34, 'jime', 'jime@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-25 04:05:02', '2020-03-25 04:05:02', NULL),
	(35, 'lala', 'lala@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-25 04:15:45', '2020-03-25 04:15:45', NULL),
	(36, 'lolo', 'lolo@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-26 13:24:21', '2020-03-26 13:24:21', NULL),
	(37, 'lelo', 'lelo@ggg.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-26 14:04:23', '2020-03-26 14:04:23', NULL),
	(38, 'demo', 'demo@ff.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-26 14:05:51', '2020-03-26 14:05:51', NULL),
	(39, 'hhhhyyy', 'fggghj@hhh.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-26 14:30:25', '2020-03-26 14:30:25', NULL),
	(40, 'yaya', 'yaya@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-26 16:35:17', '2020-03-26 16:35:17', NULL),
	(41, 'hahahah', 'hahaha@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-26 17:26:36', '2020-03-26 17:26:36', NULL),
	(42, 'jjjjjjjjj', 'jjjj@dd.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-26 17:28:15', '2020-03-26 17:28:15', NULL),
	(43, 'yuuuu', 'yuuu@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-26 17:54:18', '2020-03-26 17:54:18', NULL),
	(44, 'tttttt', 'tttt@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-26 17:54:44', '2020-03-26 17:54:44', NULL),
	(45, 'mmmm', 'mmm@dd.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-26 17:55:18', '2020-03-26 17:55:18', NULL),
	(46, 'renzo', 'renzo@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-27 04:02:24', '2020-03-27 04:02:24', NULL),
	(47, 'linda', 'linda@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-27 04:02:49', '2020-03-27 04:02:49', NULL),
	(48, 'yuli', 'yuli@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-27 04:08:48', '2020-03-27 04:08:48', NULL),
	(49, 'tomas', 'tomas@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-27 04:09:16', '2020-03-27 04:09:16', NULL),
	(50, 'mama', 'mama@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-27 04:12:39', '2020-03-27 04:12:39', NULL),
	(51, 'yolo', 'yolo@gmail.com', 'avatar-default.jpg', NULL, NULL, NULL, NULL, '2020-03-27 04:14:00', '2020-03-27 04:14:00', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla intranet.usuario_rol
CREATE TABLE IF NOT EXISTS `usuario_rol` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` bigint(20) unsigned NOT NULL,
  `id_rol` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_rol_id_usuario_foreign` (`id_usuario`),
  KEY `usuario_rol_id_rol_foreign` (`id_rol`),
  CONSTRAINT `usuario_rol_id_rol_foreign` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`),
  CONSTRAINT `usuario_rol_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla intranet.usuario_rol: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario_rol` DISABLE KEYS */;
INSERT IGNORE INTO `usuario_rol` (`id`, `id_usuario`, `id_rol`) VALUES
	(1, 4, 1),
	(4, 4, 2),
	(5, 1, 1),
	(6, 1, 3),
	(7, 2, 2);
/*!40000 ALTER TABLE `usuario_rol` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
