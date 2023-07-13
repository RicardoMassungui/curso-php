-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Maio-2023 às 08:29
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_devfolio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `nome_home` varchar(40) NOT NULL,
  `email_admin` varchar(220) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `senha_admin` varchar(220) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usuario_admin` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `permissao_admin` int NOT NULL DEFAULT '1',
  `foto_admin` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'admin.jpg',
  `create_admin` datetime NOT NULL,
  `modifield_admin` datetime NOT NULL,
  `token` varchar(100) NOT NULL,
  `secure` bigint NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nome_home`, `email_admin`, `senha_admin`, `usuario_admin`, `permissao_admin`, `foto_admin`, `create_admin`, `modifield_admin`, `token`, `secure`) VALUES
(1, 'Ricardo Massungui', 'jonhricardo949@gmail.com', '$2y$10$DeKRKZkA9kUGqXdN6DVzAeKB70zKrN475TpbGgoWDeGjhbwdiEZaS', 'Fullst@ckDeveloper', 1, 'admin.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_basico`
--

DROP TABLE IF EXISTS `tb_basico`;
CREATE TABLE IF NOT EXISTS `tb_basico` (
  `id_basic` int NOT NULL AUTO_INCREMENT,
  `preco` float NOT NULL,
  PRIMARY KEY (`id_basic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_home`
--

DROP TABLE IF EXISTS `tb_home`;
CREATE TABLE IF NOT EXISTS `tb_home` (
  `id_home` int NOT NULL AUTO_INCREMENT,
  `nome_home` varchar(40) DEFAULT NULL,
  `fundo_home` varchar(300) DEFAULT NULL,
  `link_home` varchar(300) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_home`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_home`
--

INSERT INTO `tb_home` (`id_home`, `nome_home`, `fundo_home`, `link_home`, `created`, `modified`) VALUES
(1, 'Ricardo Massungui', 'hacker.jpg', 'http://localhost/praticas-php/DevFolio/admin/home.php', '2023-05-09 09:00:45', '2023-05-25 09:45:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_precario`
--

DROP TABLE IF EXISTS `tb_precario`;
CREATE TABLE IF NOT EXISTS `tb_precario` (
  `id_precario` int NOT NULL AUTO_INCREMENT,
  `tema` varchar(100) NOT NULL,
  PRIMARY KEY (`id_precario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servicos`
--

DROP TABLE IF EXISTS `tb_servicos`;
CREATE TABLE IF NOT EXISTS `tb_servicos` (
  `id_servicos` int NOT NULL AUTO_INCREMENT,
  `tema` varchar(100) NOT NULL,
  `servico` varchar(80) NOT NULL,
  `descricao` tinytext NOT NULL,
  PRIMARY KEY (`id_servicos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sobre`
--

DROP TABLE IF EXISTS `tb_sobre`;
CREATE TABLE IF NOT EXISTS `tb_sobre` (
  `id_sobre` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT 'administrador',
  `descricao` text NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `especialidade` varchar(100) NOT NULL,
  `tecnologia` varchar(100) NOT NULL,
  `experiencia` int NOT NULL DEFAULT '0',
  `junior` tinyint NOT NULL,
  `pleno` tinyint NOT NULL,
  `senior` tinyint NOT NULL,
  `foto` varchar(200) NOT NULL DEFAULT 'tech.jpg',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sobre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tecnobasico`
--

DROP TABLE IF EXISTS `tb_tecnobasico`;
CREATE TABLE IF NOT EXISTS `tb_tecnobasico` (
  `id_tecnobasico` int NOT NULL AUTO_INCREMENT,
  `tecnologia` varchar(100) NOT NULL,
  PRIMARY KEY (`id_tecnobasico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
