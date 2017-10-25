-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Out-2017 às 05:14
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testelojapc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_albuns`
--

CREATE TABLE `tb_albuns` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `albuns_tipo_id` int(11) DEFAULT NULL,
  `video` tinyint(4) DEFAULT NULL,
  `codigo_fk` int(11) DEFAULT NULL,
  `sintese` varchar(300) DEFAULT NULL,
  `imagem` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_albuns`
--

INSERT INTO `tb_albuns` (`id`, `nome`, `slug`, `created`, `modified`, `albuns_tipo_id`, `video`, `codigo_fk`, `sintese`, `imagem`) VALUES
(1, 'Álbum Fotos', 'Album-Fotos', '2017-10-23 20:18:57', '2017-10-23 20:18:57', 2, 0, 1, NULL, ''),
(2, 'teste123', 'teste123', '2017-10-25 00:17:34', '2017-10-25 00:17:34', 2, 0, NULL, NULL, ''),
(3, 'Fotos', 'fotos', '2017-10-25 00:23:57', '2017-10-25 01:00:28', 2, 0, 3, NULL, ''),
(4, 'Fotos', 'fotos-2-3-4-5', '2017-10-25 00:48:15', '2017-10-25 01:20:21', 2, NULL, 4, NULL, ''),
(5, 'Fotos', 'fotos-2', '2017-10-25 01:04:16', '2017-10-25 01:04:16', 2, NULL, 5, NULL, ''),
(6, 'Fotos', 'fotos-2-3', '2017-10-25 01:07:13', '2017-10-25 01:07:13', 2, NULL, 6, NULL, ''),
(7, 'Fotos', 'fotos-2-3-4', '2017-10-25 01:16:30', '2017-10-25 01:16:30', 2, NULL, 7, NULL, ''),
(8, 'Fotos', 'fotos-2-3-4-5-6', '2017-10-25 01:21:09', '2017-10-25 01:21:09', 2, NULL, 8, NULL, ''),
(9, 'Fotos', 'fotos-2-3-4-5-6-7', '2017-10-25 03:37:11', '2017-10-25 03:37:11', 2, NULL, 2, NULL, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_albuns_imagens`
--

CREATE TABLE `tb_albuns_imagens` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `imagem` varchar(120) NOT NULL,
  `descricao` varchar(80) DEFAULT NULL,
  `legenda` varchar(100) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_albuns_imagens`
--

INSERT INTO `tb_albuns_imagens` (`id`, `album_id`, `imagem`, `descricao`, `legenda`, `ordem`, `created`, `modified`) VALUES
(1, 1, 'img-institucional-home.jpg', '', '', 1, '2015-05-15 16:19:16', '2015-05-15 16:25:46'),
(2, 1, 'player1.jpg', '', '', 4, '2015-05-15 16:19:38', '2015-05-15 16:25:50'),
(3, 1, 'player2.jpg', '', '', 3, '2015-05-15 16:19:39', '2015-05-15 16:25:52'),
(4, 1, 'player3.jpg', '', '', 2, '2015-05-15 16:19:39', '2015-05-15 16:25:53'),
(5, 2, '93078-2-1507636120-gg.jpg', '', '', 1, '2017-10-25 00:21:05', '2017-10-25 00:21:11'),
(6, 2, '93078-1507752688-gg.jpg', '', '', 1, '2017-10-25 00:21:06', '2017-10-25 00:21:15'),
(7, 2, '93078-1507909955-gg.jpg', '', '', 2, '2017-10-25 00:21:07', '2017-10-25 00:21:18'),
(8, 3, '93078-2-1507636120-gg.jpg', '', '', NULL, '2017-10-25 00:50:28', '2017-10-25 00:50:28'),
(9, 3, '93078-1507752688-gg.jpg', '', '', NULL, '2017-10-25 00:50:29', '2017-10-25 00:50:29'),
(10, 3, '93078-1507909955-gg.jpg', '', '', NULL, '2017-10-25 00:50:30', '2017-10-25 00:50:30'),
(11, 4, '75312-1458158002-gg.jpg', '', '', NULL, '2017-10-25 00:55:24', '2017-10-25 00:55:24'),
(12, 5, '88376-1495544802-gg.jpg', '', '', NULL, '2017-10-25 01:04:42', '2017-10-25 01:04:42'),
(13, 5, '88376-1495544807-gg.jpg', '', '', NULL, '2017-10-25 01:04:43', '2017-10-25 01:04:43'),
(14, 5, '88376-1495544815-gg.jpg', '', '', NULL, '2017-10-25 01:04:43', '2017-10-25 01:04:43'),
(15, 5, '88376-index-gg.jpg', '', '', NULL, '2017-10-25 01:04:44', '2017-10-25 01:04:44'),
(16, 6, '81134-1475692088-gg.jpg', '', '', NULL, '2017-10-25 01:07:23', '2017-10-25 01:07:23'),
(17, 6, '81134-1475692093-gg.jpg', '', '', NULL, '2017-10-25 01:07:24', '2017-10-25 01:07:24'),
(18, 7, '78663-1468352752-gg.jpg', '', '', NULL, '2017-10-25 01:16:42', '2017-10-25 01:16:42'),
(19, 7, '78663-1468352759-gg.jpg', '', '', NULL, '2017-10-25 01:16:43', '2017-10-25 01:16:43'),
(20, 7, '78663-1468352762-gg.jpg', '', '', NULL, '2017-10-25 01:16:44', '2017-10-25 01:16:44'),
(21, 8, '92011-1502984073-gg.jpg', '', '', NULL, '2017-10-25 01:21:27', '2017-10-25 01:21:27'),
(22, 8, '92011-1502984091-gg.jpg', '', '', NULL, '2017-10-25 01:21:28', '2017-10-25 01:21:28'),
(23, 8, '92011-1502984098-gg.jpg', '', '', NULL, '2017-10-25 01:21:28', '2017-10-25 01:21:28'),
(24, 9, 'bg-024-3-1.jpg', '', '', NULL, '2017-10-25 03:37:23', '2017-10-25 03:37:23'),
(25, 9, 'bg-024bg-024-1.jpg', '', '', NULL, '2017-10-25 03:37:24', '2017-10-25 03:37:24'),
(26, 9, 'bg-024bg-0243-1.jpg', '', '', NULL, '2017-10-25 03:37:24', '2017-10-25 03:37:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_albuns_tipos`
--

CREATE TABLE `tb_albuns_tipos` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_albuns_tipos`
--

INSERT INTO `tb_albuns_tipos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Conteúdo', '2015-05-15 11:15:09', '2015-05-15 11:15:13'),
(2, 'Produtos', '2015-05-15 11:15:21', '2015-05-15 11:15:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_albuns_videos`
--

CREATE TABLE `tb_albuns_videos` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `codigo_video` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria_servicos`
--

CREATE TABLE `tb_categoria_servicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `slug` varchar(150) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_categoria_servicos`
--

INSERT INTO `tb_categoria_servicos` (`id`, `nome`, `slug`, `created`, `modified`) VALUES
(1, 'Computadores', 'computadores', '2015-05-29 15:29:48', '2017-10-22 03:35:42'),
(2, 'Teclado / Mouse', 'teclado-mouse', '2015-06-02 15:16:57', '2017-10-24 20:41:13'),
(3, 'Cadeiras Gamer', 'cadeiras-gamer', '2015-06-02 15:17:04', '2017-10-22 03:36:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_servicoses`
--

CREATE TABLE `tb_servicoses` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `descricao_produto` text,
  `imagem` varchar(120) DEFAULT NULL,
  `ativo` tinyint(4) DEFAULT NULL,
  `categoria_servico_id` int(11) DEFAULT NULL,
  `especificacoes_tecnicas` text,
  `preco_a_vista` double DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_servicoses`
--

INSERT INTO `tb_servicoses` (`id`, `nome`, `slug`, `descricao_produto`, `imagem`, `ativo`, `categoria_servico_id`, `especificacoes_tecnicas`, `preco_a_vista`, `created`, `modified`) VALUES
(2, 'COMPUTADOR I3-7100, GEFORCE® GTX 1050 2GB, 8GB DDR4, 1TB, 400W, BG-024', 'computador-i3-7100-geforce-gtx-1050-2gb-8gb-ddr4-1tb-400w-bg-024', '<div class="col p4" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-size: 12px; font-family: Lato, Helvetica, Tahoma, Arial; vertical-align: baseline; text-rendering: auto; float: left; width: 343.859px; background-color: rgb(255, 255, 255);">\r\n<div class="sectionPiCPU" style="outline: 0px; margin: 0px auto; padding: 0px; border-top: none; border-right: 2px solid rgb(0, 125, 202); border-bottom: 2px solid rgb(0, 125, 202); border-left: 2px solid rgb(0, 125, 202); border-image: initial; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; position: relative; width: 900px; max-width: 80%;">\r\n<h1><span style="font-family:inherit; font-size:14px"><span style="font-family:inherit"><strong>Processador</strong></span></span></h1>\r\n\r\n<p><br />\r\n<br />\r\n<span style="font-family:inherit; font-size:14px"><span style="font-family:inherit"><img src="https://cdn.pichau.com.br/media/wysiwyg/BANNER_PC/Banner_v06_2016/19/CPU.png" style="border:0px; display:block; font-family:inherit; font-size:inherit; font-style:inherit; margin:-20px auto 0px; outline:0px; padding:0px; text-rendering:auto; vertical-align:baseline; width:60px" /></span></span></p>\r\n\r\n<p><span style="font-family:inherit; font-size:14px"><span style="font-family:inherit">Intel i3-7100, processador da 7&ordf; gera&ccedil;&atilde;o de processadores com alto desempenho e baixo consumo. Apresenta 2 n&uacute;cleos e 4 threads com frequ&ecirc;ncia de 3.9Ghz</span></span></p>\r\n</div>\r\n</div>\r\n\r\n<div class="col p4" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-size: 12px; font-family: Lato, Helvetica, Tahoma, Arial; vertical-align: baseline; text-rendering: auto; float: left; width: 343.859px; background-color: rgb(255, 255, 255);">\r\n<div class="sectionPiVGA" style="outline: 0px; margin: 0px auto; padding: 0px; border-top: none; border-right: 2px solid rgb(118, 185, 0); border-bottom: 2px solid rgb(118, 185, 0); border-left: 2px solid rgb(118, 185, 0); border-image: initial; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; position: relative; width: 900px; max-width: 80%;">\r\n<div class="top-borderVGA left" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; position: absolute; height: 2px; width: 41.25px; background-color: rgb(118, 185, 0); left: 0px;">&nbsp;</div>\r\n\r\n<div class="top-borderVGA right" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; position: absolute; height: 2px; width: 41.25px; background-color: rgb(118, 185, 0); right: 0px;">&nbsp;</div>\r\n\r\n<h1><span style="font-family:inherit; font-size:14px"><strong>Placa de v&iacute;deo</strong></span></h1>\r\n\r\n<p><br />\r\n<br />\r\n<span style="font-family:inherit; font-size:14px"><img src="https://cdn.pichau.com.br/media/wysiwyg/BANNER_PC/Banner_v06_2016/19/VGA.png" style="border:0px; display:block; font-family:inherit; font-size:inherit; font-style:inherit; margin:-20px auto 0px; outline:0px; padding:0px; text-rendering:auto; vertical-align:baseline; width:70px" /></span></p>\r\n\r\n<p><span style="font-family:inherit; font-size:14px">A GTX 1050 foi desenvolvida para dar maior desempenho para seu PC. Com a placa de v&iacute;deo conta com 640 Cuda Cores e mem&oacute;ria GDDR5 com capacidade de 2GB</span></p>\r\n</div>\r\n</div>\r\n\r\n<div class="col p4" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-size: 12px; font-family: Lato, Helvetica, Tahoma, Arial; vertical-align: baseline; text-rendering: auto; float: left; width: 343.859px; background-color: rgb(255, 255, 255);">\r\n<div class="sectionPi" style="outline: 0px; margin: 0px auto; padding: 0px; border-top: none; border-right: 2px solid rgb(51, 51, 51); border-bottom: 2px solid rgb(51, 51, 51); border-left: 2px solid rgb(51, 51, 51); border-image: initial; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; position: relative; width: 900px; max-width: 80%;">\r\n<div class="top-borderMOBO left" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; position: absolute; height: 2px; width: 66.0156px; background-color: rgb(51, 51, 51); left: 0px;">&nbsp;</div>\r\n\r\n<div class="top-borderMOBO right" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; position: absolute; height: 2px; width: 66.0156px; background-color: rgb(51, 51, 51); right: 0px;">&nbsp;</div>\r\n\r\n<h1><span style="font-family:inherit; font-size:14px"><strong>Placa-m&atilde;e</strong></span></h1>\r\n\r\n<p><br />\r\n<br />\r\n<span style="font-family:inherit; font-size:14px"><img src="https://cdn.pichau.com.br/media/wysiwyg/BANNER_PC/Banner_v06_2016/19/Mobo.png" style="border:0px; display:block; font-family:inherit; font-size:inherit; font-style:inherit; margin:-20px auto 0px; outline:0px; padding:0px; text-rendering:auto; vertical-align:baseline; width:60px" /></span></p>\r\n\r\n<p><span style="font-family:inherit; font-size:14px">Chipset H110 com suporte a 32GB de mem&oacute;ria RAM do tipo DDR4 com frequ&ecirc;ncias de 2133Mhz. Possui PCI-e 3.0, USB 3.0, Sata 6gb/s e sistema de &aacute;udio HD com 7.1 canais.</span></p>\r\n</div>\r\n</div>\r\n', 'i3-iubv.jpg', 1, 1, '<div class="col p12" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-size: 12px; font-family: Lato, Helvetica, Tahoma, Arial; vertical-align: baseline; text-rendering: auto; float: left; width: 1042px; background-color: rgb(255, 255, 255); height: 50px;">&nbsp;</div>\r\n\r\n<div style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-size: 12px; font-family: Lato, Helvetica, Tahoma, Arial; vertical-align: baseline; text-rendering: auto; background-color: rgb(255, 255, 255);">\r\n<div class="panelpi" style="outline: 0px; margin: 0px; padding: 0px 18px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; max-height: 0px; overflow: hidden; transition: 0.6s ease-in-out; opacity: 0;">\r\n<div class="col p3" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; float: left; width: 321.906px;"><img src="https://images.pichau.com.br/media/wysiwyg/BANNER_PC/A_PC_2017/CPU/i3.png" style="border:0px; display:block; font-family:inherit; font-size:inherit; font-style:inherit; margin:0px auto; outline:0px; padding:0px; text-rendering:auto; vertical-align:baseline; width:200px" /></div>\r\n\r\n<div class="col p9" style="outline: 0px; margin: 20px 0px 0px; padding: 0px; border: 0px; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; text-rendering: auto; float: left; width: 643.828px;"><br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</div>\r\n</div>\r\n\r\n<p><strong>Placa M&atilde;e</strong>&nbsp;- H110 DDR4</p>\r\n\r\n<p><strong>Processador</strong><span style="background-color:rgb(255, 255, 255); font-family:lato,helvetica,tahoma,arial; font-size:12px">&nbsp;- Intel i3-7100 3.9ghz</span></p>\r\n\r\n<div class="panelpi" style="outline: 0px; margin: 0px; padding: 0px 18px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; max-height: 0px; overflow: hidden; transition: 0.6s ease-in-out; opacity: 0;">\r\n<div class="col p3" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; float: left; width: 321.906px;"><img src="https://cdn.pichau.com.br/media/wysiwyg/BANNER_PC/Banner_v06_2016/11/H110M.png" style="border:0px; display:block; font-family:inherit; font-size:inherit; font-style:inherit; margin:0px auto; outline:0px; padding:0px; text-rendering:auto; vertical-align:baseline; width:200px" /></div>\r\n\r\n<div class="col p9" style="outline: 0px; margin: 20px 0px 0px; padding: 0px; border: 0px; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; text-rendering: auto; float: left; width: 643.828px;"><br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</div>\r\n</div>\r\n<strong>Placa de v&iacute;deo</strong>&nbsp;- GeForce&reg; GTX 1050 2Gb 128-bit GDDR5\r\n\r\n<div class="panelpi" style="outline: 0px; margin: 0px; padding: 0px 18px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; max-height: 0px; overflow: hidden; transition: 0.6s ease-in-out; opacity: 0;">\r\n<div class="col p3" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; float: left; width: 321.906px;"><img src="https://cdn.pichau.com.br/media/wysiwyg/BANNER_PC/A_PC_2017/VGA/GeForce-GTX-1050-1.png" style="border:0px; display:block; font-family:inherit; font-size:inherit; font-style:inherit; margin:0px auto; outline:0px; padding:0px; text-rendering:auto; vertical-align:baseline; width:300px" /></div>\r\n\r\n<div class="col p9" style="outline: 0px; margin: 20px 0px 0px; padding: 0px; border: 0px; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; text-rendering: auto; float: left; width: 643.828px;"><br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</div>\r\n</div>\r\n<strong>Mem&oacute;ria</strong>&nbsp;- 8Gb 2133Mhz DDR4\r\n\r\n<div class="panelpi" style="outline: 0px; margin: 0px; padding: 0px 18px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; max-height: 0px; overflow: hidden; transition: 0.6s ease-in-out; opacity: 0;">\r\n<div class="col p3" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; float: left; width: 321.906px;"><img src="https://cdn.pichau.com.br/media/wysiwyg/BANNER_PC/Banner_v06_2016/09/memo-02.png" style="border:0px; display:block; font-family:inherit; font-size:inherit; font-style:inherit; margin:0px auto; outline:0px; padding:0px; text-rendering:auto; vertical-align:baseline; width:200px" /></div>\r\n\r\n<div class="col p9" style="outline: 0px; margin: 20px 0px 0px; padding: 0px; border: 0px; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; text-rendering: auto; float: left; width: 643.828px;"><br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</div>\r\n</div>\r\n<strong>Armazenamento</strong>&nbsp;- HD 1TB Sata III 3.5&quot;\r\n\r\n<div class="panelpi" style="outline: 0px; margin: 0px; padding: 0px 18px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; max-height: 0px; overflow: hidden; transition: 0.6s ease-in-out; opacity: 0;">\r\n<div class="col p3" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; float: left; width: 321.906px;"><img src="https://cdn.pichau.com.br/media/wysiwyg/BANNER_PC/BEAR/test/HDpadrao1.png" style="border:0px; display:block; font-family:inherit; font-size:inherit; font-style:inherit; margin:0px auto; outline:0px; padding:0px; text-rendering:auto; vertical-align:baseline; width:200px" /></div>\r\n\r\n<div class="col p9" style="outline: 0px; margin: 20px 0px 0px; padding: 0px; border: 0px; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; text-rendering: auto; float: left; width: 643.828px;"><br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</div>\r\n</div>\r\n<strong>Fonte</strong>&nbsp;- Corsair VS400 80 Plus White\r\n\r\n<div class="panelpi" style="outline: 0px; margin: 0px; padding: 0px 18px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; max-height: 0px; overflow: hidden; transition: 0.6s ease-in-out; opacity: 0;">\r\n<div class="col p3" style="outline: 0px; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-size: inherit; font-family: inherit; vertical-align: baseline; text-rendering: auto; float: left; width: 321.906px;"><img src="https://cdn.pichau.com.br/media/catalog/product/c/p/cp-9020117-la6.jpg" style="border:0px; display:block; font-family:inherit; font-size:inherit; font-style:inherit; margin:0px auto; outline:0px; padding:0px; text-rendering:auto; vertical-align:baseline; width:300px" /></div>\r\n\r\n<div class="col p9" style="outline: 0px; margin: 20px 0px 0px; padding: 0px; border: 0px; font-style: inherit; font-size: 15px; font-family: inherit; vertical-align: baseline; text-rendering: auto; float: left; width: 643.828px;"><br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;</div>\r\n</div>\r\n<strong>Gabinete</strong>&nbsp;- Bluecase Gamer BG-024</div>\r\n\r\n<p>&nbsp;</p>\r\n', 2287.12, NULL, '2017-10-25 03:37:53'),
(3, 'Computador Intel Extreme Masters Core i5-7600, 16GB, HD 1TB, SSD 120GB, VGA Asus GTX 1060 6GB, RW263PVM', 'computador-intel-extreme-masters-core-i5-7600-16gb-hd-1tb-ssd-120gb-vga-asus-gtx-1060-6gb-rw263pvm', '<p><span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">Computador Intel Extreme Masters Core i5-7600, 16GB, HD 1TB, SSD 120GB, VGA Asus GTX 1060 6GB, RW263PVM</span></p>\r\n', '93078-1507910000-index-gg.jpg', 1, 1, '<p><span style="font-family:swis721_b">Caracter&iacute;sticas:</span></p>\r\n\r\n<p>- Marca: Intel Extreme Master</p>\r\n\r\n<p>- Modelo: RW263PVM</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Especifica&ccedil;&otilde;es:</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Processador:</span></p>\r\n\r\n<p>- Intel i5 7600</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Cooler:</span></p>\r\n\r\n<p>- Water Cooler Seidon 120V PLUS V3</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Placa M&atilde;e:</span></p>\r\n\r\n<p>- GigaByte B250M-GAMING 3</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Mem&oacute;ria:</span></p>\r\n\r\n<p>- HyperX 16GB (1x16GB)</p>\r\n\r\n<p>- DDR4</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">HDD:</span></p>\r\n\r\n<p>- Toshiba 1TB&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">SSD:</span></p>\r\n\r\n<p>- Kingston 120GB</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">VGA:</span></p>\r\n\r\n<p>-&nbsp;Asus GTX 1060 6GB</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Fonte:</span></p>\r\n\r\n<p>- 600W Bronze&nbsp;Thermaltake</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Gabinete:</span></p>\r\n\r\n<p>- NZXT S340 Black and Red</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Conte&uacute;do da embalagem:</span></p>\r\n\r\n<p>- Computador Intel Extreme Master</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Imagens meramente ilustrativas.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721_b; font-size:13px">Garantia</span><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">12 meses de garantia</span><br />\r\n<br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721_b; font-size:13px">Peso</span><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">13040 gramas (bruto com embalagem)</span></p>\r\n', 2353.63, '2017-10-22 04:23:00', '2017-10-25 00:52:31'),
(4, 'Teclado Gamer Razer Blackwidow Tournament Chroma', 'teclado-gamer-razer-blackwidow-tournament-chroma', '<p>Teclado Gamer Razer Blackwidow Tournament Editio</p>\r\n', '75312-index-gg.jpg', 1, 2, '<p><span style="font-family:swis721_b">Caracter&iacute;sticas:</span></p>\r\n\r\n<p>- Marca: Razer</p>\r\n\r\n<p>- Modelo: RZ03-01430100-R3U1</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Especifica&ccedil;&otilde;es:</span></p>\r\n\r\n<p>- Cor: Preto</p>\r\n\r\n<p>- Ilumina&ccedil;&atilde;o Chroma: 16,8 milh&otilde;es de op&ccedil;&otilde;es personaliz&aacute;veis</p>\r\n\r\n<p>- Interface: USB</p>\r\n\r\n<p>- Padr&atilde;o: Ingl&ecirc;s (US)</p>\r\n\r\n<p>- Fun&ccedil;&atilde;o: Multim&iacute;dia</p>\r\n\r\n<p>- Teclas &nbsp;Razer Mec&acirc;nica Interruptores com for&ccedil;a de atua&ccedil;&atilde;o 50G</p>\r\n\r\n<p>- 60 milh&otilde;es vida keystroke</p>\r\n\r\n<p>- Anti-ghosting com 10 teclas sobrepostas</p>\r\n\r\n<p>- Teclas program&aacute;veis com on-the-fly macro de grava&ccedil;&atilde;o</p>\r\n\r\n<p>- Tempo de resposta de 1ms / 1000hz Ultrapolling</p>\r\n\r\n<p>- Razer Synapse 2.0 habilitado</p>\r\n\r\n<p>- Cabo USB fibra tran&ccedil;ada destac&aacute;vel com al&ccedil;a de cabo</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Conte&uacute;do da embalagem:</span></p>\r\n\r\n<p>- 01 Teclado Razer</p>\r\n\r\n<p>- 01 Maleta para prote&ccedil;&atilde;o&nbsp;</p>\r\n\r\n<p>- 01 Manual</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721_b; font-size:13px">Garantia</span><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">12 meses de garantia</span><br />\r\n<br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721_b; font-size:13px">Peso</span><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">1875 gramas (bruto com embalagem)</span></p>\r\n', 962.9, '2017-10-24 20:44:49', '2017-10-24 20:44:49'),
(5, 'Teclado Gamer Riotoro Mecanico Ghostwriter Black Switchs Cherry MX', 'teclado-gamer-riotoro-mecanico-ghostwriter-black-switchs-cherry-mx', '<p><span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">O novo teclado mec&acirc;nico RIOTORO GHOSTWRITER Black oferece uma discreta borda recortada desenhada na Alemanha pela CHERRY MX RGB Black switches. Cherry MX switches &eacute; o l&iacute;der mundial em tecnologia mec&acirc;nica.</span></p>\r\n', '88376-index-gg.jpg', 1, 2, '<p><span style="font-family:swis721_b">Caracter&iacute;sticas:</span></p>\r\n\r\n<p>- Marca: Riotoro</p>\r\n\r\n<p>- Modelo: Ghostwriter Black</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Especifica&ccedil;&otilde;es:</span></p>\r\n\r\n<p>- Dimen&ccedil;&otilde;es: 463.78 x 211.62 x 30.24 (sem descan&ccedil;o de pulso)</p>\r\n\r\n<p>- Dimen&ccedil;&otilde;es do descan&ccedil;o de pulso: 463.75 x 64.42 x 16.93 (somente o descan&ccedil;o de pulso)</p>\r\n\r\n<p>- N&uacute;mero de teclas: 104</p>\r\n\r\n<p>- Material: Pl&aacute;stico ABS/Alum&iacute;nio</p>\r\n\r\n<p>- Interface: &nbsp;USB 2.0</p>\r\n\r\n<p>- Volume roller</p>\r\n\r\n<p>- Teclas multimidia: Sim (reproduzir, pausa, parar, avan&ccedil;ar, retroagir, modo mudo)</p>\r\n\r\n<p>- Suporte e sistemas operativos: Windows 7,8 e 10</p>\r\n\r\n<p>- Atua&ccedil;&otilde;es r&aacute;pidas e precisas para torneios de performance</p>\r\n\r\n<p>- 100% anti-ghosting</p>\r\n\r\n<p>- 16.8 milh&otilde;es de cores</p>\r\n\r\n<p>- Ilumina&ccedil;&atilde;o com m&uacute;ltiplos efeitos multicor</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Conte&uacute;do da embalagem:</span></p>\r\n\r\n<p>- 01 Teclado Gamer Riotoro</p>\r\n\r\n<p><br />\r\n<br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721_b; font-size:13px">Garantia</span><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">12 meses de garantia</span><br />\r\n<br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721_b; font-size:13px">Peso</span><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">1495 gramas (bruto com embalagem)</span></p>\r\n', 776.35, '2017-10-25 01:03:18', '2017-10-25 01:03:18'),
(6, 'Mouse Gaming Asus Spatha Preto - L701-1A-Rog', 'mouse-gaming-asus-spatha-preto-l701-1a-rog', '', '81134-index-gg.jpg', 1, 2, '<p><span style="font-family:swis721_b">Caracter&iacute;sticas:</span></p>\r\n\r\n<p>- Marca: Asus</p>\r\n\r\n<p>- Modelo: L701-1A-Rog &nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Especifica&ccedil;&otilde;es:</span></p>\r\n\r\n<p>- Tecnologia de conex&atilde;o: Wired / Wireless</p>\r\n\r\n<p>- Tecnologia sem fio: 2.4GHz RF</p>\r\n\r\n<p>- Tracking: Laser</p>\r\n\r\n<p>- Sistema Operacional: Windows&reg; 10 / Windows&reg; 8.1 / Windows&reg; 8 / Windows&reg; 7</p>\r\n\r\n<p>- Cor: Preto Titanium</p>\r\n\r\n<p>- Resolu&ccedil;&atilde;o: 8200dpi</p>\r\n\r\n<p>- Interface: USB</p>\r\n\r\n<p>- Dimens&otilde;es: 89 x 137 x 45 mm</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Conte&uacute;do da embalagem:</span></p>\r\n\r\n<p>- 01 Mouse Gaming Asus</p>\r\n\r\n<p><br />\r\n<br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721_b; font-size:13px">Garantia</span><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">12 meses de garantia</span><br />\r\n<br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721_b; font-size:13px">Peso</span><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">1045 gramas (bruto com embalagem)</span></p>\r\n', 919.88, '2017-10-25 01:07:05', '2017-10-25 01:07:05'),
(7, 'Cadeira Gamer DT3 Sports GT Black Red', 'cadeira-gamer-dt3-sports-gt-black-red', '<p style="text-align:justify"><span style="font-family:myriad pro,gill sans,gill sans mt,dejavu sans condensed,helvetica,arial,sans-serif; font-size:16px">A DT3 Sports GT foi projetada na Su&eacute;cia e incorporou melhorias recentes desenvolvida por brasileiros apaixonados por jogos como voc&ecirc;. A base agora &eacute; de a&ccedil;o e as rodinhas s&atilde;o maiores, exclusividade para o Brasil. &Eacute; uma cadeira ergon&ocirc;mica e confort&aacute;vel. Possui grosso estofamento de alta qualidade para as costas, bra&ccedil;os e assento permitindo longas sess&otilde;es de jogos ou trabalho sem fadiga irritante no corpo. A apar&ecirc;ncia &eacute; inspirada nos campeonatos e est&aacute; dispon&iacute;vel em uma variedade de cores atraentes para expressar sua atitude vencedora.</span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:myriad pro,gill sans,gill sans mt,dejavu sans condensed,helvetica,arial,sans-serif">- Apoio de bra&ccedil;o de couro PU com acolchoamento extra gerando maio conforto.&nbsp;</span><br />\r\n<span style="font-family:myriad pro,gill sans,gill sans mt,dejavu sans condensed,helvetica,arial,sans-serif">- Rota&ccedil;&atilde;o de giro em 360&deg;.&nbsp;</span><br />\r\n<span style="font-family:myriad pro,gill sans,gill sans mt,dejavu sans condensed,helvetica,arial,sans-serif">- Regulamento de altura de at&eacute; 80mm.&nbsp;</span><br />\r\n<span style="font-family:myriad pro,gill sans,gill sans mt,dejavu sans condensed,helvetica,arial,sans-serif">Opcional com regulagem de 100mm e 120mm.&nbsp;</span><br />\r\n<span style="font-family:myriad pro,gill sans,gill sans mt,dejavu sans condensed,helvetica,arial,sans-serif">- Cilindro de alta qualidade (class-4 gas lift).</span></span></p>\r\n\r\n<p style="text-align:justify"><span style="font-size:14px"><span style="font-family:myriad pro,gill sans,gill sans mt,dejavu sans condensed,helvetica,arial,sans-serif">- Fun&ccedil;&atilde;o de balan&ccedil;o permite inclinar o assento em at&eacute; 12&deg;. Com bloqueio na posi&ccedil;&atilde;o vertical.&nbsp;</span><br />\r\n<span style="font-family:myriad pro,gill sans,gill sans mt,dejavu sans condensed,helvetica,arial,sans-serif">- Rodas de alta resist&ecirc;ncia e f&aacute;cil movimenta&ccedil;&atilde;o (65mm). N&atilde;o deixar&atilde;o marcas ou arranh&otilde;es no seu piso.&nbsp;</span><br />\r\n<span style="font-family:myriad pro,gill sans,gill sans mt,dejavu sans condensed,helvetica,arial,sans-serif">- Base de A&ccedil;o com pintura eletroest&aacute;tica. Nada de pl&aacute;stico! Homologados no teste BIFMA, suportam mais do que 1136Kg mesmo ap&oacute;s 1 ano de uso.&nbsp;</span><br />\r\n<span style="font-family:myriad pro,gill sans,gill sans mt,dejavu sans condensed,helvetica,arial,sans-serif">- Base com 5 p&eacute;s com 350mm de raio.&nbsp;</span><br />\r\n<span style="font-family:myriad pro,gill sans,gill sans mt,dejavu sans condensed,helvetica,arial,sans-serif">- Costura industrial de qualidade.</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:16px">Cilindro de g&aacute;s suporta at&eacute; 150Kg. Cadeira recomendada para at&eacute; 120Kg. Atende normas EN 1335-1 e EN 1335-2 certificadas pelo SGS.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-size:16px"><span style="font-family:swis721_b">Cores Dispon&iacute;veis:</span></span></p>\r\n\r\n<p><span style="font-size:14px">- Preto, Cinza, Azul, Verde, Laranja, Vermelho, Branco, Amarelo Fluorescente.</span></p>\r\n', '78663-index-gg.jpg', 1, 3, '<p><span style="font-family:swis721_b">Caracter&iacute;sticas:</span></p>\r\n\r\n<p>- Marca: DT3 Sports</p>\r\n\r\n<p>- Modelo: 10297-9</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Especifica&ccedil;&otilde;es:&nbsp;</span></p>\r\n\r\n<p>- Cadeira ergon&ocirc;mica, extra-acolchoado e super confort&aacute;vel</p>\r\n\r\n<p>- Design diferenciado para escrit&oacute;rio, casa, trabalho ou lazer</p>\r\n\r\n<p>- Constru&ccedil;&atilde;o leve para f&aacute;cil movimenta&ccedil;&atilde;o mas estrutura resistente e refor&ccedil;ada</p>\r\n\r\n<p>- Couro sint&eacute;tico PU mesclado com tecido de f&aacute;cil limpeza e alta qualidade</p>\r\n\r\n<p>- Apoio de bra&ccedil;o de couro PU com acolchoamento extra para maior conforto</p>\r\n\r\n<p>- Rota&ccedil;&atilde;o de giro de 360&deg;</p>\r\n\r\n<p>- Mola de g&aacute;s com altura ajust&aacute;vel e alta qualidade (class-4 gas lift)</p>\r\n\r\n<p>- Fun&ccedil;&atilde;o de balan&ccedil;o permite inclinar o assento em at&eacute; 12&deg;</p>\r\n\r\n<p>- Com bloqueio na posi&ccedil;&atilde;o vertical</p>\r\n\r\n<p>- Rodas de alta resist&ecirc;ncia e f&aacute;cil movimenta&ccedil;&atilde;o (60mm)</p>\r\n\r\n<p>- Base de a&ccedil;o liga com pintura eletroest&aacute;tica</p>\r\n\r\n<p>- Possui 5 p&eacute;s com 350mm de raio</p>\r\n\r\n<p>- Costura industrial de qualidade</p>\r\n\r\n<p>- Suporta at&eacute; 120Kg</p>\r\n\r\n<p>- Atende normas EN 1335-1 e EN 1335-2 certificadas pela SGS</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Dimens&otilde;es F&iacute;sicas:</span></p>\r\n\r\n<p>- Altura do assento ajust&aacute;vel: 46 - 56 cm</p>\r\n\r\n<p>- Altura da cadeira: 115 - 125 cm (cilindro de 80mm)</p>\r\n\r\n<p>- Largura do assento: 50 cm</p>\r\n\r\n<p>- Profundidade do assento: 63 cm</p>\r\n\r\n<p>- Largura do encosto: 50 cm</p>\r\n\r\n<p>- Altura do encosto: 76 cm</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Conte&uacute;do da Embalagem:</span></p>\r\n\r\n<p>- Cadeira Gamer DT3 Sports GT</p>\r\n\r\n<p><br />\r\n<br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721_b; font-size:13px">Garantia</span><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">12 meses de garantia</span><br />\r\n<br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721_b; font-size:13px">Peso</span><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">19500 gramas (bruto com embalagem)</span></p>\r\n', 649.9, '2017-10-25 01:15:10', '2017-10-25 01:16:16'),
(8, 'Cadeira Gamer THUNDERX3 TGC12 Preta/Verde', 'cadeira-gamer-thunderx3-tgc12-preta-verde', '<p><span class="marker"><span style="font-size:14px"><span style="font-family:swis721">A TGC12 ThunderX3 &eacute; uma cadeira gamer com revestimento de couro coberta com costuras de fibra de carbono. Seu estofado &eacute; em forma de diamantes constru&iacute;da com firmeza para proporcionar conforto enquanto voc&ecirc; desfruta do prazer de jogar seus games favoritos. Da sala de estar para a sala de jogos, voc&ecirc; pode planejar a pr&oacute;xima domina&ccedil;&atilde;o do mundo do conforto de sua cadeira gamer.</span></span></span></p>\r\n', '92011-index-gg.jpg', 1, 3, '<p><span style="font-family:swis721_b">Caracter&iacute;sticas:</span></p>\r\n\r\n<p>- Marca: THUNDERX3</p>\r\n\r\n<p>- Modelo: TGC12</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Especifica&ccedil;&otilde;es:</span></p>\r\n\r\n<p>- Tipo de Espuma: Moldado por Inje&ccedil;&atilde;o&nbsp;</p>\r\n\r\n<p>- Densidade da Espuma: 50 (Assento) e 45 (Traseira)&nbsp;</p>\r\n\r\n<p>- Bra&ccedil;os Ajust&aacute;veis: 2D (2 Dire&ccedil;&otilde;es)&nbsp;</p>\r\n\r\n<p>- Tipo de Mecanismo: Butterfly&nbsp;</p>\r\n\r\n<p>- Intervalo de Oscila&ccedil;&atilde;o: 3~18&ordm;</p>\r\n\r\n<p>- Bloqueio de Inclina&ccedil;&atilde;o</p>\r\n\r\n<p>- Especifica&ccedil;&atilde;o de Eleva&ccedil;&atilde;o de G&aacute;s: 80mm&nbsp;</p>\r\n\r\n<p>- Classe de Eleva&ccedil;&atilde;o de G&aacute;s: 4&nbsp;</p>\r\n\r\n<p>- &Acirc;ngulo de Ajuste de Apoio de Bra&ccedil;os: 90~180&ordm;</p>\r\n\r\n<p>- Encosto de Cabe&ccedil;a Ajust&aacute;vel</p>\r\n\r\n<p>- Tipo de Base: 350mm (Metal)&nbsp;</p>\r\n\r\n<p>- Montagem Necess&aacute;ria</p>\r\n\r\n<p>- Suporta: At&eacute; 150 Kg</p>\r\n\r\n<p>- Altura do Usu&aacute;rio Recomendada: At&eacute; 2m</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Recursos:</span></p>\r\n\r\n<p>- Bra&ccedil;os 2D (2 Dire&ccedil;&otilde;es)&nbsp;</p>\r\n\r\n<p>- Encosto Reclin&aacute;vel de 90~180&ordm;</p>\r\n\r\n<p>- Balan&ccedil;o de 3~18&ordm;</p>\r\n\r\n<p>- Almofada Para Coluna e Nuca&nbsp;</p>\r\n\r\n<p>- Ajuste de Altura&nbsp;</p>\r\n\r\n<p>- Assento Girat&oacute;rio&nbsp;</p>\r\n\r\n<p>- Roda de 50mm&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Informa&ccedil;&otilde;es Adicionais:</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Conforto o Dia Todo:</span></p>\r\n\r\n<p>- Um assento firme com um pequeno apoio para cabe&ccedil;a e almofada para as costas oferecem um conforto prolongado.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Descanso Poderoso:</span></p>\r\n\r\n<p>- Para impulsionar sua mem&oacute;ria, suas habilidades cognitivas, criatividade e energia, essa cadeira conta com o encosto traseiro reclin&aacute;vel em at&eacute; 180&deg;. Al&eacute;m de desfrutar de horas de jogabilidade, voc&ecirc; ainda pode descansar para voltar a jogar com poder renovado.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Relaxe:</span></p>\r\n\r\n<p>- Descanse seu antebra&ccedil;o no apoio ajust&aacute;vel bi-direcional da cadeira gamer TGC12. Perfeito para posicionar os cotovelos durante horas de jogabilidade.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Ajuste de Altura do Assento:</span></p>\r\n\r\n<p>- Ajuste pneum&aacute;tico da altura do assento com um giro de 360&ordm;. Perfeito para jogadores entre 160~185cm de altura.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Feito Para Durar:</span></p>\r\n\r\n<p>- A combina&ccedil;&atilde;o de qualidade, materiais s&oacute;lidos e mecanismos fazem as Cadeiras Gamer ThunderX3 a melhor escolha. O estofado refinado de couro sint&eacute;tico em formato de diamantes &eacute; suave e adciona um toque de eleg&acirc;ncia &agrave; cadeira gamer TGC12.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Base Resistente:</span></p>\r\n\r\n<p>- Uma base resistente forte feito de a&ccedil;o garante a sua cadeira estabilidade e durabilidade.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Movimente-se:</span></p>\r\n\r\n<p>- Com uma roda de 50mm de di&acirc;metro constru&iacute;da em nylon garante liberdade para movimentar-se para todos os lados.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Resist&ecirc;ncia:</span></p>\r\n\r\n<p>- Estrutura met&aacute;lica resistente que garante que a cadeira n&atilde;o se deforme ou quebre.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style="font-family:swis721_b">Conte&uacute;do da Embalagem:</span></p>\r\n\r\n<p>- Cadeira Gamer THUNDERX3 TGC12</p>\r\n\r\n<p><br />\r\n<br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721_b; font-size:13px">Garantia</span><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">12 meses de garantia</span><br />\r\n<br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721_b; font-size:13px">Peso</span><br />\r\n<span style="color:rgb(51, 51, 51); font-family:swis721; font-size:13px">25100 gramas (bruto com embalagem)</span></p>\r\n', 819.9, '2017-10-25 01:19:22', '2017-10-25 01:22:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `funcao` varchar(50) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `email`, `created`, `modified`, `imagem`, `funcao`, `status`, `password`) VALUES
(1, 'Felipe Borges', 'felipeborges@unipam.edu.br', '2017-10-22 01:03:19', '2017-10-22 04:44:05', 'goku-angel.jpg', NULL, 1, '1caaa56bc5d35666b5dc4b792afa9492ba8da2bf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_albuns`
--
ALTER TABLE `tb_albuns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fk_tb_albuns_tipos_tb_albuns` (`albuns_tipo_id`);

--
-- Indexes for table `tb_albuns_imagens`
--
ALTER TABLE `tb_albuns_imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tb_albuns_imagens_tb_albuns` (`album_id`);

--
-- Indexes for table `tb_albuns_tipos`
--
ALTER TABLE `tb_albuns_tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_albuns_videos`
--
ALTER TABLE `tb_albuns_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tb_albuns_videos_tb_albuns` (`album_id`);

--
-- Indexes for table `tb_categoria_servicos`
--
ALTER TABLE `tb_categoria_servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_servicoses`
--
ALTER TABLE `tb_servicoses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_reference_11` (`categoria_servico_id`);

--
-- Indexes for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_albuns`
--
ALTER TABLE `tb_albuns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_albuns_imagens`
--
ALTER TABLE `tb_albuns_imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tb_albuns_tipos`
--
ALTER TABLE `tb_albuns_tipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_albuns_videos`
--
ALTER TABLE `tb_albuns_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_categoria_servicos`
--
ALTER TABLE `tb_categoria_servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_servicoses`
--
ALTER TABLE `tb_servicoses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_albuns`
--
ALTER TABLE `tb_albuns`
  ADD CONSTRAINT `fk_fk_tb_albuns_tipos_tb_albuns` FOREIGN KEY (`albuns_tipo_id`) REFERENCES `tb_albuns_tipos` (`id`);

--
-- Limitadores para a tabela `tb_albuns_imagens`
--
ALTER TABLE `tb_albuns_imagens`
  ADD CONSTRAINT `fk_tb_albuns_imagens_tb_albuns` FOREIGN KEY (`album_id`) REFERENCES `tb_albuns` (`id`);

--
-- Limitadores para a tabela `tb_albuns_videos`
--
ALTER TABLE `tb_albuns_videos`
  ADD CONSTRAINT `fk_tb_albuns_videos_tb_albuns` FOREIGN KEY (`album_id`) REFERENCES `tb_albuns` (`id`);

--
-- Limitadores para a tabela `tb_servicoses`
--
ALTER TABLE `tb_servicoses`
  ADD CONSTRAINT `fk_reference_11` FOREIGN KEY (`categoria_servico_id`) REFERENCES `tb_categoria_servicos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
