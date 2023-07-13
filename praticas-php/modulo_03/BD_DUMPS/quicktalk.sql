-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Fev-2023 às 01:46
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
-- Banco de dados: `quicktalk`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Sender` int NOT NULL,
  `Reciever` int NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Creation` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=308 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `chat`
--

INSERT INTO `chat` (`Id`, `Sender`, `Reciever`, `Message`, `Image`, `Creation`) VALUES
(124, 16, 14, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-20 11:31:18'),
(125, 16, 13, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '', '2022-09-20 11:37:14'),
(126, 16, 13, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '', '2022-09-20 11:37:33'),
(127, 16, 15, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '', '2022-09-20 11:38:54'),
(128, 16, 14, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '', '2022-09-20 11:51:09'),
(129, 16, 14, '', 'filomeno_MESSAGE_100963filomeno.jpg', '2022-09-20 11:52:54'),
(130, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-20 12:09:52'),
(131, 16, 13, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '', '2022-09-20 12:10:03'),
(132, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites. E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??  Agora mesmo · Amigos', '', '2022-09-20 19:39:59'),
(133, 16, 13, 'Feliz Aniversário tio! muita benção e saúde.', '', '2022-09-20 20:43:04'),
(134, 16, 13, 'como estás ?', '', '2022-09-20 21:16:52'),
(135, 16, 13, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '', '2022-09-20 21:45:20'),
(136, 16, 14, 'Feliz Aniversário tio! muita benção e saúde.', '', '2022-09-20 23:04:00'),
(137, 16, 14, 'Feliz Aniversário tio! muita benção e saúde.', '', '2022-09-20 23:05:10'),
(138, 16, 14, 'c', '', '2022-09-20 23:05:15'),
(139, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-20 23:55:32'),
(140, 16, 13, 'como estás ?', '', '2022-09-20 23:55:41'),
(141, 16, 13, 'como estás ?', '', '2022-09-20 23:56:34'),
(142, 16, 14, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '', '2022-09-21 00:07:13'),
(143, 16, 14, 'como estás ?', '', '2022-09-21 00:21:44'),
(144, 16, 14, 'como estás ?', '', '2022-09-21 00:23:22'),
(145, 16, 14, 'como estás ?', '', '2022-09-21 00:24:38'),
(146, 16, 13, 'como estás ?', '', '2022-09-21 00:27:45'),
(147, 16, 15, 'como estás ?', '', '2022-09-21 00:42:33'),
(148, 16, 15, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '', '2022-09-21 00:42:41'),
(149, 16, 15, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-21 00:42:46'),
(150, 16, 13, 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '', '2022-09-21 00:47:23'),
(151, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites. E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??  Agora mesmo · Amigos', '', '2022-09-21 00:51:59'),
(152, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-21 00:52:03'),
(153, 16, 13, 'como estás ?', '', '2022-09-21 00:52:17'),
(154, 16, 13, 'como estás ?', '', '2022-09-21 01:14:26'),
(155, 16, 14, 'como estás ?', '', '2022-09-21 01:15:40'),
(156, 16, 14, 'como estás ?', '', '2022-09-21 01:18:27'),
(157, 16, 14, 'como estás ?', '', '2022-09-21 01:18:38'),
(158, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites. E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??  Agora mesmo · Amigos', '', '2022-09-21 01:25:10'),
(159, 16, 13, 'como estás ?', '', '2022-09-21 01:25:20'),
(160, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-21 22:58:47'),
(161, 16, 13, '', 'filomeno_MESSAGE_461820rtc.jpg', '2022-09-21 22:59:10'),
(162, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-21 23:59:46'),
(163, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-21 23:59:46'),
(164, 16, 14, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-22 00:00:19'),
(165, 16, 14, 'como estás ?', '', '2022-09-22 00:03:59'),
(166, 16, 14, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-22 00:08:29'),
(167, 16, 14, 'como estás ?', '', '2022-09-22 00:13:06'),
(168, 16, 14, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-22 00:22:01'),
(169, 16, 14, 'como estás ?', '', '2022-09-22 00:34:51'),
(170, 16, 13, 'como estás ?', '', '2022-09-22 00:35:18'),
(171, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-22 00:37:41'),
(172, 16, 14, 'como estás ?', '', '2022-09-22 00:39:42'),
(173, 16, 14, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-22 00:41:12'),
(174, 16, 14, 'como estás ?', '', '2022-09-22 00:42:23'),
(175, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-22 00:44:23'),
(176, 16, 15, 'como estás ?', '', '2022-09-22 00:45:00'),
(177, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites. E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??  Agora mesmo · Amigos', '', '2022-09-22 00:45:58'),
(178, 16, 14, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-22 00:47:03'),
(179, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-22 00:48:28'),
(180, 16, 14, 'como estás ?', '', '2022-09-22 00:51:07'),
(181, 16, 14, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-22 00:52:11'),
(182, 16, 14, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-22 00:54:33'),
(183, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites.  E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??', '', '2022-09-22 01:06:32'),
(184, 16, 13, 'Meu mano e amigo favorito, á ti apenas desejo toda a felicidade, saúde, e prosperidade para toda vida. E que jamais deixes que arrancam de ti o sentido de humor e a energia agradável que transmites. E Que Deus abençoe a ti e a tua família. E para finalizar: \"Não fica burro e não me aluminha muito\", e o último de todos:\"Anós Samos burro mesmo a crescer bué, sempre seremos burros\"... Fim: \"FELIZ ANIVERSÁRIO MEU COMPADRE E IRMÃO DO MUNDINHO\"??  Agora mesmo · Amigos', 'filomeno_MESSAGE_709247289916118_5337159846343299_3417764387651847185_n.jpg', '2022-09-22 01:07:03'),
(185, 16, 13, 'como estás ?', '', '2022-09-22 02:04:00'),
(186, 16, 14, 'ttttttttttttttttttttttttttt\r\n', '', '2022-09-22 02:06:53'),
(187, 16, 14, 'ttttttttttt\r\n', '', '2022-09-22 02:10:37'),
(188, 16, 14, 'yyyyyyyyyyyyyyyyyy\r\n', '', '2022-09-22 02:10:57'),
(189, 16, 13, 'eeeeeeeeeeeeee\r\n', '', '2022-09-22 02:12:49'),
(190, 16, 13, 'rrrrrrrrrr\r\n', '', '2022-09-22 02:21:07'),
(191, 16, 13, 'yyyyyyyyyyyyyyyyyyyyyyyyyyyyy\r\n', '', '2022-09-22 02:21:18'),
(192, 16, 13, 'yyyyyyyyyyyyyyyyyyyyyyy\r\n', '', '2022-09-22 02:22:03'),
(193, 16, 13, 'fffffffffffffffffff\r\n', '', '2022-09-22 04:09:51'),
(194, 16, 14, 'como vai\r\n', '', '2022-09-22 16:21:40'),
(195, 16, 14, '7\r\n', '', '2022-09-22 17:50:14'),
(196, 16, 14, '', 'filomeno_MESSAGE_755906282675999_586713786143361_8912051332285431633_n.jpg', '2022-09-22 17:50:42'),
(197, 16, 14, 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffgggggggggggggggggggggggggggdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '', '2022-09-22 19:56:54'),
(198, 16, 14, 'd\r\n', '', '2022-09-22 20:16:36'),
(199, 16, 13, 'k\r\n', '', '2022-09-22 20:30:27'),
(200, 16, 15, 'como vai a tua vida, sua vida\r\n', '', '2022-09-22 20:47:51'),
(201, 16, 15, '', 'filomeno_MESSAGE_230370b.jpg', '2022-09-22 20:48:06'),
(202, 16, 14, 'como vai\r\n', '', '2022-09-22 21:08:54'),
(203, 16, 14, 'ooooooooooooo\r\n', '', '2022-09-22 21:14:15'),
(204, 16, 14, 'RRRR\r\n', '', '2022-09-23 08:45:04'),
(205, 16, 14, 'TTTT\r\n', '', '2022-09-23 08:46:08'),
(206, 16, 13, 'hj\r\n', '', '2022-09-23 09:01:19'),
(207, 16, 14, 'rrrrrrrr\r\n', '', '2022-09-23 09:46:09'),
(208, 16, 14, 'como vai a sua vida?\r\n', '', '2022-09-23 10:33:08'),
(209, 16, 14, '', 'filomeno_MESSAGE_823667289916118_5337159846343299_3417764387651847185_n.jpg', '2022-09-23 11:05:42'),
(210, 16, 14, 'tt\r\n', '', '2022-09-23 11:15:17'),
(211, 18, 18, 'como estás puto a sua vida\r\n', '', '2022-09-23 12:45:03'),
(212, 18, 18, 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd\r\n', '', '2022-09-23 12:45:58'),
(213, 18, 16, 'como\r\n', '', '2022-09-23 15:34:52'),
(214, 18, 14, 'ricardo massungui\r\n', '', '2022-09-23 16:05:03'),
(215, 18, 14, 'amanhã é sabádo mas eu não sabia das coisas mais deverias me atencipar como podemos fazer isso nesse  coisas\r\n', '', '2022-09-23 16:07:29'),
(216, 18, 13, 'como vai', '', '2022-09-23 16:08:58'),
(217, 18, 13, 'como vai a sua ifilho?', '', '2022-09-23 16:09:15'),
(218, 18, 14, 'como vai sua vida filho', '', '2022-09-23 16:25:12'),
(219, 18, 14, '', 'Tona Maria Massungu_MESSAGE_55556b.jpg', '2022-09-23 16:35:59'),
(220, 18, 14, 'como conseguste fazer alguma coisa \r\n', '', '2022-09-23 17:49:37'),
(221, 18, 14, 'olá querida como está?\r\n', '', '2022-09-23 17:50:00'),
(222, 18, 13, 'jjjjjjjjjjjjjjjjjj\r\n', '', '2022-09-24 09:32:45'),
(223, 18, 14, 'got\r\n', '', '2022-09-24 09:43:29'),
(224, 18, 14, 'ttttttttt', '', '2022-09-24 10:21:54'),
(225, 18, 14, 'dddd\r\n', '', '2022-09-24 10:26:24'),
(226, 18, 13, 'sssssss\r\n', '', '2022-09-24 10:27:48'),
(227, 18, 14, 'dddd\r\n', '', '2022-09-24 10:40:02'),
(228, 18, 14, 'como vai filha\r\n', '', '2022-09-24 10:42:10'),
(229, 18, 13, 'como estás\r\n', '', '2022-09-24 10:43:20'),
(230, 18, 13, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '', '2022-09-24 10:43:28'),
(231, 18, 13, 'como', '', '2022-09-24 10:52:59'),
(232, 18, 13, 'ckomo\r\n', '', '2022-09-24 10:54:27'),
(233, 18, 13, '77', '', '2022-09-24 10:59:50'),
(234, 18, 13, 'fff', '', '2022-09-24 17:47:45'),
(235, 18, 13, 'vvvvvvvvvvv', '', '2022-09-24 17:47:54'),
(236, 18, 13, 'como estás filho?\r\n', '', '2022-09-24 18:00:15'),
(237, 18, 14, 'onde podemos nos encontrar no dia da, serár que possivél na sala 02 no segundo piso?', '', '2022-09-24 18:08:04'),
(238, 18, 15, 'como estás puto estudaste matemática?', '', '2022-09-24 18:09:03'),
(239, 18, 15, 'quando poderes aparecer na escola me dá um toque para não haver problemas no dia em nos encontrarmos novametne por ai podemos também fazer isso??', '', '2022-09-24 18:11:01'),
(240, 18, 15, 'como estás?\r\n', '', '2022-09-24 18:11:46'),
(241, 18, 14, 'como vai vossa linda', '', '2022-09-24 18:44:44'),
(242, 18, 13, 'como estas?', '', '2022-09-24 18:50:40'),
(243, 18, 13, '', 'Tona Maria Massungu_MESSAGE_900452281773734_1279770289497302_1494166348524575538_n.jpg', '2022-09-24 18:50:47'),
(244, 18, 13, '', 'Tona Maria Massungu_MESSAGE_851171SEAC.jpg', '2022-09-24 19:10:15'),
(245, 13, 18, '', 'Ricardo_MESSAGE_459855wtrc.jpg', '2022-09-24 19:12:33'),
(246, 18, 13, 'como vai', '', '2022-09-24 19:13:39'),
(247, 13, 18, 'a sua vida\r\n', '', '2022-09-24 19:13:55'),
(248, 18, 13, 'o tio gradi é bem feio,a tua cabeça é gigante\r\n', '', '2022-09-24 19:39:19'),
(249, 18, 13, '333333333333333333333333333333333333333333333333333333333333333333333333333333333333333333', '', '2022-09-24 19:39:32'),
(250, 18, 13, '44444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444', '', '2022-09-24 19:39:46'),
(251, 18, 13, 'sonic boom 3 homem aranha meu amigo podes só um jogo quie +e os', '', '2022-09-24 19:41:52'),
(252, 18, 14, '', 'Tona Maria Massungu_MESSAGE_451660b.jpg', '2022-09-24 19:58:52'),
(253, 18, 15, '', 'Tona Maria Massungu_MESSAGE_53413sistema-escolar.jpg', '2022-09-24 23:06:28'),
(254, 18, 13, '', 'Tona Maria Massungu_MESSAGE_112229IIºTrimeste-mat.jpg', '2022-09-24 23:10:06'),
(255, 13, 19, 'como estás madalena?\r\n', '', '2022-09-25 00:34:35'),
(256, 19, 13, 'estou bem e vc\r\n', '', '2022-09-25 00:35:04'),
(257, 19, 13, 'como sua vida\r\n', '', '2022-09-25 01:20:03'),
(258, 19, 13, 'se ouviste melhor podes falar e perguntar para não haver mais problemas!', '', '2022-09-25 01:31:02'),
(259, 13, 19, 'prontos né\r\n', '', '2022-09-25 02:27:11'),
(260, 13, 19, '', 'Ricardo_MESSAGE_700903reactnative (2).jpg', '2022-09-25 02:27:44'),
(261, 13, 19, '', 'Ricardo_MESSAGE_93949520220318_130417.jpg', '2022-09-25 02:37:54'),
(262, 19, 13, 'esse é meu projecto\r\n', '', '2022-09-25 02:39:16'),
(263, 19, 13, '', 'madalena_MESSAGE_677941capa-c-sharp.png', '2022-09-25 02:40:30'),
(264, 13, 19, 'como vai\r\n', '', '2022-09-25 02:42:10'),
(265, 13, 19, '', 'Ricardo_MESSAGE_89864320220411_103702.jpg', '2022-09-25 11:36:14'),
(266, 13, 19, 'como vai', '', '2022-09-25 14:25:26'),
(267, 13, 19, '', 'Ricardo_MESSAGE_372520220321_125248.jpg', '2022-09-25 14:25:38'),
(268, 13, 19, 'como estás\r\n', '', '2022-09-25 14:28:57'),
(269, 13, 19, '', 'Ricardo_MESSAGE_22219020220318_130417.jpg', '2022-09-25 14:29:10'),
(270, 19, 13, 'como posso ajudar!', '', '2022-09-25 15:01:42'),
(271, 13, 19, '', 'Ricardo_MESSAGE_55347020220318_130417.jpg', '2022-09-25 15:02:57'),
(272, 19, 13, 'como posso te ajudar! jovem a tua vida é sempre.\r\n', '', '2022-09-25 15:04:27'),
(273, 19, 13, '', 'madalena_MESSAGE_926529wtrc.jpg', '2022-09-25 15:04:47'),
(274, 19, 13, 'como vai a tua?\r\n', '', '2022-09-25 15:09:05'),
(275, 13, 19, 'valeu\r\n', '', '2022-09-25 15:09:14'),
(276, 13, 19, 'estamos offline\r\n', '', '2022-09-25 15:10:06'),
(277, 13, 19, '', 'Ricardo_MESSAGE_50741120220313_160902.jpg', '2022-09-25 15:10:22'),
(278, 19, 13, '', 'madalena_MESSAGE_647646rtc.jpg', '2022-09-25 15:20:03'),
(279, 19, 13, '', 'madalena_MESSAGE_60880277478038_661007671845891_204050700514168548_n.jpg', '2022-09-25 15:37:43'),
(280, 13, 19, 'como estás\r\n', '', '2022-09-25 15:58:30'),
(281, 13, 19, '', 'Ricardo_MESSAGE_41455220220313_160902.jpg', '2022-09-25 15:59:07'),
(282, 13, 19, '\r\n', '', '2022-09-25 15:59:43'),
(283, 13, 18, 'gylo para me\r\n', '', '2022-09-28 09:32:12'),
(284, 13, 18, '', 'Ricardo_MESSAGE_7112220220313_160902.jpg', '2022-09-28 09:32:24'),
(285, 13, 14, 'hj vas\r\n', '', '2022-09-28 09:33:59'),
(286, 13, 14, '', 'Ricardo_MESSAGE_82547820220313_160902.jpg', '2022-09-28 09:34:07'),
(287, 13, 19, '\r\n', '', '2022-09-29 07:53:17'),
(288, 13, 19, 'como vai \r\n', '', '2022-09-29 07:53:33'),
(289, 13, 19, 'a sua vida querida?\r\n', '', '2022-09-29 07:53:56'),
(290, 13, 13, 'como vai\r\n', '', '2022-09-29 08:04:16'),
(291, 13, 13, '', 'Ricardo_MESSAGE_54863520220318_130417.jpg', '2022-09-29 08:04:34'),
(292, 13, 19, '', 'Ricardo_MESSAGE_6714120220321_125248.jpg', '2022-10-06 08:22:59'),
(293, 13, 15, 'nuygbbhhuuuu', '', '2022-10-13 10:45:34'),
(294, 13, 15, '', 'Ricardo_MESSAGE_30305420220319_065539.jpg', '2022-10-13 10:45:48'),
(295, 13, 15, 'nnnnnn', '', '2022-10-13 10:45:55'),
(296, 13, 15, '', 'Ricardo_MESSAGE_28542120220403_150809.jpg', '2022-10-13 10:46:18'),
(297, 13, 18, 'como posso ajuda-lo senhor ricardo massungui, a sua duvída é um prazer\r\n', '', '2022-10-15 23:15:11'),
(298, 13, 18, 'como vai sua vida\r\n', '', '2022-10-15 23:15:26'),
(299, 13, 18, 's\r\n', '', '2022-10-15 23:15:38'),
(300, 20, 13, 'como estás\r\n', '', '2022-12-03 00:03:06'),
(301, 20, 13, '', 'josué fernando_MESSAGE_97565620220416_140155.jpg', '2022-12-03 00:03:14'),
(302, 13, 20, 'obrigado estás bem?', '', '2022-12-03 00:05:38'),
(303, 20, 13, 'ya kota mais fudido que todos', '', '2022-12-03 00:06:33'),
(304, 13, 20, '', 'Ricardo_MESSAGE_15715413e1275cf2a9228786773c03601a1db5.jpg', '2022-12-03 00:07:03'),
(305, 20, 13, 'não seu porque que me enviaste isso porque não estou a ver bemgggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', '', '2022-12-03 00:08:21'),
(306, 20, 13, '', 'josué fernando_MESSAGE_94374620220416_140304.jpg', '2022-12-11 04:54:08'),
(307, 20, 13, 'é como feio\r\n', '', '2022-12-11 04:54:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conversations`
--

DROP TABLE IF EXISTS `conversations`;
CREATE TABLE IF NOT EXISTS `conversations` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `MainUser` int NOT NULL,
  `OtherUser` int NOT NULL,
  `Unread` varchar(1) NOT NULL DEFAULT 'n',
  `Modification` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Creation` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `conversations`
--

INSERT INTO `conversations` (`Id`, `MainUser`, `OtherUser`, `Unread`, `Modification`, `Creation`) VALUES
(27, 16, 13, 'n', '2022-09-18 03:32:06', '2022-09-18 04:32:06'),
(28, 13, 16, 'n', '2022-09-18 03:32:06', '2022-09-18 04:32:06'),
(29, 16, 15, 'n', '2022-09-18 03:32:52', '2022-09-18 04:32:52'),
(30, 15, 16, 'y', '2022-09-18 03:32:52', '2022-09-18 04:32:52'),
(31, 16, 14, 'n', '2022-09-18 03:34:06', '2022-09-18 04:34:06'),
(32, 14, 16, 'y', '2022-09-18 03:34:06', '2022-09-18 04:34:06'),
(33, 16, 16, 'n', '2022-09-18 03:36:35', '2022-09-18 04:36:35'),
(34, 16, 16, 'n', '2022-09-18 03:36:35', '2022-09-18 04:36:35'),
(35, 18, 18, 'n', '2022-09-23 11:45:03', '2022-09-23 12:45:03'),
(36, 18, 18, 'n', '2022-09-23 11:45:03', '2022-09-23 12:45:03'),
(37, 18, 16, 'n', '2022-09-23 14:34:52', '2022-09-23 15:34:52'),
(38, 16, 18, 'y', '2022-09-23 14:34:52', '2022-09-23 15:34:52'),
(39, 18, 14, 'n', '2022-09-23 15:05:03', '2022-09-23 16:05:03'),
(40, 14, 18, 'y', '2022-09-23 15:05:03', '2022-09-23 16:05:03'),
(41, 18, 13, 'n', '2022-09-23 15:08:57', '2022-09-23 16:08:57'),
(42, 13, 18, 'n', '2022-09-23 15:08:58', '2022-09-23 16:08:58'),
(43, 18, 15, 'n', '2022-09-24 17:09:03', '2022-09-24 18:09:03'),
(44, 15, 18, 'y', '2022-09-24 17:09:03', '2022-09-24 18:09:03'),
(45, 13, 19, 'n', '2022-09-24 23:34:34', '2022-09-25 00:34:34'),
(46, 19, 13, 'n', '2022-09-24 23:34:35', '2022-09-25 00:34:35'),
(47, 13, 14, 'n', '2022-09-28 08:33:59', '2022-09-28 09:33:59'),
(48, 14, 13, 'y', '2022-09-28 08:33:59', '2022-09-28 09:33:59'),
(49, 13, 13, 'n', '2022-09-29 07:04:15', '2022-09-29 08:04:15'),
(50, 13, 13, 'n', '2022-09-29 07:04:15', '2022-09-29 08:04:15'),
(51, 13, 15, 'n', '2022-10-13 09:45:34', '2022-10-13 10:45:34'),
(52, 15, 13, 'y', '2022-10-13 09:45:34', '2022-10-13 10:45:34'),
(53, 20, 13, 'n', '2022-12-02 23:03:06', '2022-12-03 00:03:06'),
(54, 13, 20, 'n', '2022-12-02 23:03:06', '2022-12-03 00:03:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `Picture` varchar(1000) NOT NULL DEFAULT 'user.jpg',
  `Online` datetime NOT NULL,
  `Token` varchar(100) NOT NULL,
  `Secure` bigint NOT NULL,
  `Creation` datetime NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`Id`, `Username`, `Email`, `Password`, `Picture`, `Online`, `Token`, `Secure`, `Creation`) VALUES
(13, 'Ricardo', 'jonhricardo949@gmail.com', '$2y$10$7J9QPG2Yo/4aUQYrxCM16.V0LGI5.EMEE/gBsNTS1GoP6OMWfGd22', 'Ricardo_692072fotoDeveloper.png', '2022-12-03 05:17:50', '081746cd03ace3997a7ecd609918f41a8de2a9f3', 9856974459, '2022-09-17 09:30:15'),
(14, 'Sebastião', 'sebastiao@gmail.com', '$2y$10$hoE0shKbRxji3CP2YwXzKuGuQNo9Wc5UpOQlyGpX/E6h5JaAQgL5a', 'Sebastião_648978sebastian.jpg', '2022-09-17 09:32:58', 'd032f588df2322693e1215f8ced43a0e59bf419b', 7770618764, '2022-09-17 09:32:10'),
(15, 'Rubem Marcos', 'rubemmarcos@gmail.com', '$2y$10$eFzFeLUEsFElH8reCnN6t.yCoHKOm7A4EjHortvEuwU2R5ZE5l3Xm', 'Rubem Marcos_119756rubem.jpg', '2022-09-18 04:27:32', '2b2dd756e935eb09b3d01f5c2fe1c65c60dfddae', 8003219174, '2022-09-17 09:34:41'),
(16, 'filomeno', 'facebook@meta.com', '$2y$10$dU9aHLgz.Qicf2I1sDixrum4UnenUPWF9mYFu8Zs/FpxECTNaFxfi', 'filomeno_824173filomeno.jpg', '2022-09-23 12:09:02', 'e3af3835f0d5f776eaac7171b4deb0fa29c19fd2', 6372622279, '2022-09-18 04:30:41'),
(17, 'BoaTona massung', 'boatona@gmail.com', '$2y$10$rvTlQw0U0uD2cDAE8WWknOg3FjD4HAZk9kWQLhMIGl89IPM0FAICG', 'user.jpg', '2022-09-23 12:20:49', '50f54a1355246c6258a6641c4fe25b6d61edb7b2', 3315472640, '2022-09-23 12:16:28'),
(18, 'Tona Maria Massungu', 'maria@gmail.com', '$2y$10$AMrPBNKugIjwT5COQEyLJ.N1sZJJ8hc78se1s665LobN/17VNqivO', 'user.jpg', '2022-09-25 00:30:39', 'f9afc44403c48836f9c6cb2130eb42af8b4b95f7', 7235784174, '2022-09-23 12:43:25'),
(19, 'madalena', 'Filomeno@gmail.com', '$2y$10$C255t07adGgu0.zKK/mrMu0NGUdLdOGRTVFcohTj6VvzsEnpw/QMG', 'user.jpg', '2022-09-25 18:39:21', '0b2b4a2845276f69fe000e9afc487a30deb37faf', 9522202976, '2022-09-25 00:32:49'),
(20, 'josué fernando', 'josuefernando@gmail.com', '$2y$10$O4GX9KdRY0xnZIayB1dT/.W1MiZuKqzmFiXDtrDi1bSytBRAXIGPS', 'josué fernando_796465reactnative (2).jpg', '2022-12-21 12:56:16', '74704b93b69f82e27b42e89cd4f950c9a7707918', 1297916707, '2022-12-03 00:01:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
