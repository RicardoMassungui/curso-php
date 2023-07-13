-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Jul-2022 às 14:38
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cfbcursos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastro`
--

DROP TABLE IF EXISTS `tb_cadastro`;
CREATE TABLE IF NOT EXISTS `tb_cadastro` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) NOT NULL,
  `username` varchar(60) NOT NULL,
  `senha` varchar(300) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(9) NOT NULL,
  `status` int(11) NOT NULL,
  `obs` varchar(255) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_cadastro`
--

INSERT INTO `tb_cadastro` (`cod`, `nome`, `username`, `senha`, `email`, `telefone`, `status`, `obs`) VALUES
(1, 'Ricardo', 'Ricardo01', 'ricardo', 'ricardomassungui01@gmail.com', '948738343', 1, 'Tudo feito!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_favoritos`
--

DROP TABLE IF EXISTS `tb_favoritos`;
CREATE TABLE IF NOT EXISTS `tb_favoritos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `senha` varchar(300) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `esportes` varchar(20) NOT NULL,
  `carro` tinyint(1) NOT NULL DEFAULT '0',
  `moto` tinyint(1) NOT NULL DEFAULT '0',
  `onibus` tinyint(1) NOT NULL DEFAULT '0',
  `feedback` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo`),
  KEY `carro` (`carro`,`moto`,`onibus`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_favoritos`
--

INSERT INTO `tb_favoritos` (`codigo`, `nome`, `senha`, `sexo`, `esportes`, `carro`, `moto`, `onibus`, `feedback`) VALUES
(1, 'ricardo01', '$2y$10$ILFQ.lyXQ/ege5zIgSWt..dyxd7OMkfb0dA0cPHGSCv/prQu0nPRS', 'M', 'Futebol', 1, 1, 0, 'ok'),
(5, 'ricardo01', '$2y$10$g2pXRqP/aw3XROTEEkCwueHHccPlen2QcX7O5gapt8jQBfam7m7om', 'M', 'Basquetebol', 1, 0, 0, 'td ok'),
(6, 'jonhricardo@gmail.com', '$2y$10$7aZJnyiZ7RFMmr6X9ZbmY.im49bUn9uB683XTKtNBbJ7wilkFnx6i', 'M', 'Artes Marciais', 1, 0, 1, 'certo'),
(7, 'teste1', '$2y$10$6bd6WDrJH1VQZli7N5CcQeZDXnwFbEcPPSmFr6E710AB0T1ZkHG6W', 'F', 'Basquetebol', 1, 1, 0, 'oba'),
(8, 'ricardo123', '$2y$10$HCEEl.le2cVUyakwcYYqO.DAQfDBtmkNbL6vYp8zoVcIT2ipCVLbi', 'F', 'Futebol', 1, 1, 1, 'feito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pesquisa`
--

DROP TABLE IF EXISTS `tb_pesquisa`;
CREATE TABLE IF NOT EXISTS `tb_pesquisa` (
  `reg` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `carro` tinyint(4) NOT NULL,
  `aviao` tinyint(4) NOT NULL,
  `navio` tinyint(4) NOT NULL,
  `trem` tinyint(4) NOT NULL,
  PRIMARY KEY (`reg`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_pesquisa`
--

INSERT INTO `tb_pesquisa` (`reg`, `nome`, `uf`, `carro`, `aviao`, `navio`, `trem`) VALUES
(1, 'Ricardo Massungui', 'BA', 1, 1, 1, 0),
(2, 'Ricardo Massungui', 'BA', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

DROP TABLE IF EXISTS `tb_produtos`;
CREATE TABLE IF NOT EXISTS `tb_produtos` (
  `codigo` varchar(10) CHARACTER SET utf8 NOT NULL,
  `produto` varchar(60) CHARACTER SET utf8 NOT NULL,
  `preco` float NOT NULL,
  `qtde` int(11) NOT NULL,
  `fdb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cat` int(11) NOT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `produto` (`produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='tabela de produtos';

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`codigo`, `produto`, `preco`, `qtde`, `fdb`, `cat`) VALUES
('auto01', 'Pneu 4', 40, 500, 'obrigado!', 3),
('auto02', 'parabisas toyota', 35.9, 30, 'certo', 3),
('auto3', 'tapetes frontal 4', 20, 300, 'recebido', 3),
('info04', 'pendrive disk 4GB', 3, 123, 'bom estado!', 1),
('info1', 'monitor apple', 50, 12, 'compra com sucesso!', 1),
('info2', 'monitor hp', 80.599, 10, 'produto em bom estado!', 1),
('info3', 'mouse gamer', 15.9, 500, 'tudo ok!', 1),
('info5', 'PortÃ¡til mackbook apple', 600, 10, 'tudo na ordem', 1),
('info6', 'teclado  hp gamer', 50, 30, 'bom trabalho!', 1),
('mob1', 'TV Plasma OLG 48PL', 350, 8, 'obrigado', 2),
('mob2', 'Micro-Ondas SMEG', 90.999, 30, 'atendido', 2),
('mob3', 'CadeirÃ£o L FAND', 768, 6, 'confortavÃ©l', 2),
('mob4', 'Mesa de Jantar - 4Cs', 89.995, 20, 'sentado no conforto!', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_transportes`
--

DROP TABLE IF EXISTS `tb_transportes`;
CREATE TABLE IF NOT EXISTS `tb_transportes` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `transportes` varchar(20) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_transportes`
--

INSERT INTO `tb_transportes` (`cod`, `transportes`) VALUES
(1, 'carro'),
(2, 'Avião'),
(3, 'Navio'),
(4, 'Trem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_uf`
--

DROP TABLE IF EXISTS `tb_uf`;
CREATE TABLE IF NOT EXISTS `tb_uf` (
  `uf` varchar(255) NOT NULL,
  `sigla` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_uf`
--

INSERT INTO `tb_uf` (`uf`, `sigla`) VALUES
('Bengo', 'BO'),
('Benguela', 'BA'),
('Bié', 'BI'),
('Cabinda', 'CA'),
('Cuanza Morte', 'CN'),
('Cuanza Sul', 'CS'),
('Cuando Cubango', 'CC'),
('Cunene', 'CU'),
('Huambo', 'HO'),
('Huíla', 'HA'),
('Lunda Norte', 'LN'),
('Lunda Sul', 'LS'),
('Malange', 'MA'),
('Moxico', 'MO'),
('Namibe', 'NA'),
('Uíge', 'UI'),
('Luanda', 'LU'),
('Zaire', 'ZA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
