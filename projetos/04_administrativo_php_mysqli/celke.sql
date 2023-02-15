-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Jul-2022 às 02:28
-- Versão do servidor: 8.0.27
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adms_sits_users`
--

DROP TABLE IF EXISTS `adms_sits_users`;
CREATE TABLE IF NOT EXISTS `adms_sits_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `adms_sits_users`
--

INSERT INTO `adms_sits_users` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Ativo', '2022-07-23 23:17:48', NULL),
(2, 'Inativo', '2022-07-23 23:17:48', NULL),
(3, 'Aguardando confirmação', '2022-07-23 23:17:48', NULL),
(4, 'Spam', '2022-07-23 23:17:48', NULL),
(5, 'Descadastrado', '2022-07-23 23:17:48', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `adms_users`
--

DROP TABLE IF EXISTS `adms_users`;
CREATE TABLE IF NOT EXISTS `adms_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(44) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recover_password` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conf_email` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(220) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adms_sits_user_id` int NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `adms_sits_user_id` (`adms_sits_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `adms_users`
--

INSERT INTO `adms_users` (`id`, `name`, `nickname`, `email`, `username`, `password`, `recover_password`, `conf_email`, `image`, `adms_sits_user_id`, `created`, `modified`) VALUES
(1, 'Cesar', NULL, 'cesar@celke.com.br', 'cesar@celke.com.br', '$2y$10$5JH2PNBu1nc9qVCS/Sr0cueFdEsLVW0ozAhbRtGuszj9QOi8oNTKO', NULL, NULL, NULL, 1, '2022-07-23 23:19:25', NULL);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `adms_users`
--
ALTER TABLE `adms_users`
  ADD CONSTRAINT `adms_users_ibfk_1` FOREIGN KEY (`adms_sits_user_id`) REFERENCES `adms_sits_users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
