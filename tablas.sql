-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2021 a las 19:04:12
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `yii_aplicacion`
--
/*CREATE
DATABASE IF NOT EXISTS `maia_yii` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE
`maia_yii`;*/

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE `auth_assignment`
(
    `item_name`  varchar(64) COLLATE utf8_unicode_ci NOT NULL,
    `user_id`    varchar(64) COLLATE utf8_unicode_ci NOT NULL,
    `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

CREATE TABLE `auth_item`
(
    `name`        varchar(64) COLLATE utf8_unicode_ci NOT NULL,
    `type`        smallint(6) NOT NULL,
    `description` text COLLATE utf8_unicode_ci        DEFAULT NULL,
    `rule_name`   varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
    `data`        blob                                DEFAULT NULL,
    `created_at`  int(11) DEFAULT NULL,
    `updated_at`  int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

CREATE TABLE `auth_item_child`
(
    `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
    `child`  varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

CREATE TABLE `auth_rule`
(
    `name`       varchar(64) COLLATE utf8_unicode_ci NOT NULL,
    `data`       blob DEFAULT NULL,
    `created_at` int(11) DEFAULT NULL,
    `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------


--
-- Estructura de tabla para la tabla `profile`
--

CREATE TABLE `profile`
(
    `user_id`        int(11) NOT NULL,
    `name`           varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `public_email`   varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `gravatar_id`    varchar(32) COLLATE utf8_unicode_ci  DEFAULT NULL,
    `location`       varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `website`        varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `timezone`       varchar(40) COLLATE utf8_unicode_ci  DEFAULT NULL,
    `bio`            text COLLATE utf8_unicode_ci         DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE = utf8_unicode_ci;




-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `social_account`
--

CREATE TABLE `social_account`
(
    `id`         int(11) NOT NULL,
    `user_id`    int(11) DEFAULT NULL,
    `provider`   varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `client_id`  varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `code`       varchar(32) COLLATE utf8_unicode_ci  DEFAULT NULL,
    `email`      varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `username`   varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `data`       text COLLATE utf8_unicode_ci         DEFAULT NULL,
    `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `social_account`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `token`
--

CREATE TABLE `token`
(
    `user_id`    int(11) DEFAULT NULL,
    `code`       varchar(32) COLLATE utf8_unicode_ci NOT NULL,
    `type`       smallint(6)                         NOT NULL,
    `created_at` int(11)                             NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8
  COLLATE = utf8_unicode_ci;




-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user`
(
    `id`                  int(11) NOT NULL,
    `username`            varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `email`               varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `password_hash`       varchar(60) COLLATE utf8_unicode_ci  NOT NULL,
    `auth_key`            varchar(32) COLLATE utf8_unicode_ci  NOT NULL,
    `unconfirmed_email`   varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `registration_ip`     varchar(45) COLLATE utf8_unicode_ci  DEFAULT NULL,
    `flags`               int(11) NOT NULL DEFAULT 0,
    `confirmed_at`        int(11) DEFAULT NULL,
    `blocked_at`          int(11) DEFAULT NULL,
    `updated_at`          int(11) NOT NULL,
    `created_at`          int(11) NOT NULL,
    `last_login_at`       int(11) DEFAULT NULL,
    `last_login_ip`       varchar(45) COLLATE utf8_unicode_ci  DEFAULT NULL,
    `auth_tf_key`         varchar(16) COLLATE utf8_unicode_ci  DEFAULT NULL,
    `auth_tf_enabled`     tinyint(1) DEFAULT 0,
    `password_changed_at` int(11) DEFAULT NULL,
    `gdpr_consent`        tinyint(1) DEFAULT 0,
    `gdpr_consent_date`   int(11) DEFAULT NULL,
    `gdpr_deleted`        tinyint(1) DEFAULT 0,
    `verification_token`  varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
    `status`              int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `unconfirmed_email`, `registration_ip`,
                    `flags`, `confirmed_at`, `blocked_at`, `updated_at`, `created_at`, `last_login_at`, `last_login_ip`,
                    `auth_tf_key`, `auth_tf_enabled`, `password_changed_at`, `gdpr_consent`, `gdpr_consent_date`,
                    `gdpr_deleted`, `verification_token`, `status`)
VALUES (1, 'admin', 'email@example.com', '$2y$10$JDr41ioXe439PtY5Z95H/.AVEXvlo9z/8wdifD6zaThjrWOyokhxW',
        '50p_IBw5V6Dhyfqa3K6epjJ1Lc0Vxa17', NULL, NULL, 0, 1633093461, NULL, 1633093462, 1633093462, 1633351695,
        '127.0.0.1', '', 0, 1633093462, 0, NULL, 0, NULL, 10);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_billing`
--

CREATE TABLE `user_billing`
(
    `id`              int(11) NOT NULL,
    `user_id`         int(11) NOT NULL,
    `sub_active`      int(11) NOT NULL,
    `sub_type`        varchar(50)  NOT NULL,
    `stripe_customer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
    ADD PRIMARY KEY (`item_name`, `user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indices de la tabla `auth_item`
--
ALTER TABLE `auth_item`
    ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indices de la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
    ADD PRIMARY KEY (`parent`, `child`),
  ADD KEY `child` (`child`);

--
-- Indices de la tabla `auth_rule`
--
ALTER TABLE `auth_rule`
    ADD PRIMARY KEY (`name`);



--
-- Indices de la tabla `profile`
--
ALTER TABLE `profile`
    ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `social_account`
--
ALTER TABLE `social_account`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_social_account_provider_client_id` (`provider`,`client_id`),
  ADD UNIQUE KEY `idx_social_account_code` (`code`),
  ADD KEY `fk_social_account_user` (`user_id`);

--
-- Indices de la tabla `token`
--
ALTER TABLE `token`
    ADD UNIQUE KEY `idx_token_user_id_code_type` (`user_id`,`code`,`type`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_user_username` (`username`),
  ADD UNIQUE KEY `idx_user_email` (`email`);

--
-- Indices de la tabla `user_billing`
--
ALTER TABLE `user_billing`
    ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id(user)_user_id(user_billing)` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `product`
--


--
-- AUTO_INCREMENT de la tabla `social_account`
--
ALTER TABLE `social_account`
    MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
    MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `user_billing`
--
ALTER TABLE `user_billing`
    MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
    ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
    ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
    ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON
DELETE
CASCADE ON
UPDATE CASCADE;

--
-- Filtros para la tabla `profile`
--
ALTER TABLE `profile`
    ADD CONSTRAINT `fk_profile_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `social_account`
--
ALTER TABLE `social_account`
    ADD CONSTRAINT `fk_social_account_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `token`
--
ALTER TABLE `token`
    ADD CONSTRAINT `fk_token_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_billing`
--
ALTER TABLE `user_billing`
    ADD CONSTRAINT `fk_id(user)_user_id(user_billing)` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- Volcado de datos para la tabla `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`)
VALUES ('admin', '1', 1633093462);

--
-- Volcado de datos para la tabla `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`)
VALUES ('admin', 1, 'Administrator', NULL, NULL, 1633093461, 1633093461),
       ('user-management', 2, 'User Management', NULL, NULL, 1633093461, 1633093461);

--
-- Volcado de datos para la tabla `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`)
VALUES ('admin', 'user-management');

--
-- Volcado de datos para la tabla `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`,
                       `timezone`, `bio`)
VALUES (1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
