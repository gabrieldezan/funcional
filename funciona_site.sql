-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05/01/2021 às 11:07
-- Versão do servidor: 5.7.23-23
-- Versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `funciona_site`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `categorias_id` int(11) NOT NULL,
  `categorias_idpg` int(11) NOT NULL,
  `categorias_pai` int(11) NOT NULL,
  `categorias_titulo` varchar(150) NOT NULL,
  `categorias_imagem` varchar(150) DEFAULT NULL,
  `categorias_imagem2` varchar(150) DEFAULT NULL,
  `categorias_menu` int(11) DEFAULT NULL,
  `categorias_texto` text,
  `categorias_metadescription` varchar(160) DEFAULT NULL,
  `categorias_url` varchar(200) DEFAULT NULL,
  `categorias_ordem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`categorias_id`, `categorias_idpg`, `categorias_pai`, `categorias_titulo`, `categorias_imagem`, `categorias_imagem2`, `categorias_menu`, `categorias_texto`, `categorias_metadescription`, `categorias_url`, `categorias_ordem`) VALUES
(70, 51, 0, 'Artigos', NULL, NULL, NULL, '', '', 'artigos', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `configuracoes`
--

CREATE TABLE `configuracoes` (
  `configuracoes_id` int(11) NOT NULL,
  `configuracoes_titulo` varchar(200) NOT NULL,
  `configuracoes_logo` varchar(200) NOT NULL,
  `configuracoes_favicon` varchar(25) DEFAULT NULL,
  `configuracoes_email_formulario` varchar(150) NOT NULL,
  `configuracoes_mapa` text,
  `configuracoes_idfacebook` varchar(200) DEFAULT NULL,
  `configuracoes_analytics` text NOT NULL,
  `configuracoes_secret_key` varchar(200) DEFAULT NULL,
  `configuracoes_site_key` varchar(200) DEFAULT NULL,
  `configuracoes_metatags` varchar(100) DEFAULT NULL,
  `configuracoes_metadescription` varchar(160) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `configuracoes`
--

INSERT INTO `configuracoes` (`configuracoes_id`, `configuracoes_titulo`, `configuracoes_logo`, `configuracoes_favicon`, `configuracoes_email_formulario`, `configuracoes_mapa`, `configuracoes_idfacebook`, `configuracoes_analytics`, `configuracoes_secret_key`, `configuracoes_site_key`, `configuracoes_metatags`, `configuracoes_metadescription`) VALUES
(1, 'Funcional Contabilidade', 'logo-funcional-contabilidade.png', '1479758593_banner3.png', 'angela.kelly@funcional.cnt.br', '', '', '', '6Le3mHwUAAAAAG9qMpOiPvEcpnMCVNbLTAwnyL08', '6Le3mHwUAAAAAKza6HjNxhqxsNEJNhCZphD-ovaf', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cores`
--

CREATE TABLE `cores` (
  `cor_id` int(11) NOT NULL,
  `cor_1` varchar(30) DEFAULT NULL,
  `cor_2` varchar(30) DEFAULT NULL,
  `cor_3` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `cores`
--

INSERT INTO `cores` (`cor_id`, `cor_1`, `cor_2`, `cor_3`) VALUES
(1, '#B3FF3C', '#00376C', '#000000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `email_abrir_empresa`
--

CREATE TABLE `email_abrir_empresa` (
  `Id` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `assunto` varchar(255) DEFAULT NULL,
  `segmento` varchar(200) DEFAULT NULL,
  `mensagem` text,
  `apagada` int(11) NOT NULL,
  `visualizada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `email_abrir_empresa`
--

INSERT INTO `email_abrir_empresa` (`Id`, `data`, `nome`, `email`, `cidade`, `telefone`, `assunto`, `segmento`, `mensagem`, `apagada`, `visualizada`) VALUES
(1, '2018-12-19 15:38:05', 'Junior Thomaz', 'junior@webthomaz.com.br', 'cascavel', '4598473740', NULL, 'Consultoria (Geral) ', NULL, 0, 0),
(2, '2019-01-11 15:37:42', 'Bruno Teste', 'marketing@webthomaz.com', 'Sao Jose dos Campos', '12991677002', NULL, 'Comunicação e Marketing ', NULL, 0, 0),
(3, '2019-04-10 08:08:40', 'saldanha', 'gulhysan@gmail.com', 'Cascavel', '45999064143', NULL, 'Calçados', NULL, 0, 0),
(4, '2019-08-28 14:32:12', 'CLECIO ANDERSON DAMBROVSKI SCHIESL', 'clecio.anderson@hotmail.com', 'cascavel', '45 999950888', NULL, 'Prestação de serviços (Geral) ', NULL, 0, 0),
(5, '2019-10-29 08:30:00', 'bruno', 'bruno.h@funcional.cnt.br', 'Cascavel', '4599999999', NULL, 'Construção', NULL, 0, 0),
(6, '2020-10-23 11:52:59', 'Lucas Morente de Almeida prado ', 'almeidaprado.lucas@gmail.com', 'Cascavel PR', '(45) 99155-1020', NULL, 'Comunicação e Marketing ', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `email_contato`
--

CREATE TABLE `email_contato` (
  `Id` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `assunto` varchar(255) DEFAULT NULL,
  `mensagem` text,
  `apagada` int(11) NOT NULL,
  `visualizada` int(11) NOT NULL,
  `voce_e_dono` varchar(200) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `segmento` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `email_contato`
--

INSERT INTO `email_contato` (`Id`, `data`, `nome`, `email`, `telefone`, `assunto`, `mensagem`, `apagada`, `visualizada`, `voce_e_dono`, `cidade`, `segmento`) VALUES
(1, '2018-12-05 15:49:34', 'Junior Thomaz', 'teste@teste.com', '4598473740', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(2, '2018-12-05 23:05:31', 'Gulhysan SAldanha', 'gulhysansaldanha@hotmail.com', '45999064143', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(3, '2018-12-06 08:09:15', 'bruno', 'bruno.h@funcional.cnt.br', '45999040483', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(4, '2018-12-06 08:46:09', 'teste', 'junior@webthomaz.com.br', '4598473740', NULL, NULL, 0, 0, NULL, 'cascavel', 'Locação'),
(5, '2018-12-06 08:47:14', 'teste', 'teste@teste.com.br', '(45) 35421477', NULL, NULL, 0, 0, NULL, 'teste', 'Alimentação e Bebidas'),
(6, '2018-12-06 10:44:01', 'Gulhysan SAldanha', 'gulhysansaldanha@hotmail.com', '45999064143', NULL, NULL, 0, 0, NULL, 'cascavel', 'Educação e Idiomas'),
(7, '2018-12-19 15:28:17', 'Junior Thomaz teste', 'junior@webthomaz.com.br', '4598473740', NULL, NULL, 0, 1, NULL, 'cascavel', 'Cosméticos e Beleza '),
(8, '2019-01-08 09:19:49', 'INDIANARA TREVISAN', 'indianaratarene@gmail.com', '45998126589', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(9, '2019-01-18 15:37:04', 'Gauchão de Passo Fundo ( ?° ?? ?°)', 'everton.souza@funcionalconsultoria.com.br', '(45) 99806-7994', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(10, '2019-04-02 14:01:26', 'Bruna Vieira', 'todeschini.bruna@gmail.com', '4599533500', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(11, '2019-04-09 22:12:34', 'Cleison Arenhart dos Santos', 'cleisondossantos@gmail.com', '45998557185', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(12, '2019-04-10 07:52:24', 'saldanha', 'gulhysan@gmail.com', '45999064143', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(13, '2019-04-10 07:53:40', 'Marcy', 'marcy.agnes@funcional.cnt.br', '45998334587', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(14, '2019-04-10 08:42:45', 'teste', 'financeiro@webthomaz.com.br', '4323432', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(15, '2019-04-11 14:29:00', 'joao pedro raldi', 'tea@teasta.com', '45987987', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(16, '2019-04-11 14:30:37', 'joao pedro raldi', 'teste@teste.com', 'teste', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(17, '2019-04-11 20:27:57', 'joao pedro raldi teste wt', 'jraldi@hotmail.com', '4599999999', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(18, '2019-04-11 20:28:40', 'joao pedro raldi', 'teste@teste.com', '457878787878', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(19, '2019-05-20 17:21:28', 'BRUNO HUSSEIN DALLA LÍBERA', 'bruno.h@funcional.cnt.br', '45999040483', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(20, '2019-06-14 14:16:19', 'Supermercado Paraná', 'supermercadoparanast@gmail.com', '45998268970', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(21, '2019-07-06 09:28:22', 'Felix', 'felixjunior765@gmail.com', '41999061877', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(22, '2019-07-11 16:34:16', 'Matheus Rohde Coutinho', 'math.rcoutinho@gmail.com', '45998073162', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(23, '2019-08-08 10:43:21', '1', '1@1', '1', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(24, '2019-09-18 10:58:21', 'Gulhysan', 'gulhysan@gmail.com', '45999064143', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(25, '2019-10-09 14:13:02', 'Gulhysan ', 'gulhysansaldanha@hotmail.com', 'Saldanha', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(26, '2019-10-09 14:14:41', 'bruno', 'bruno.h@funcional.cnt.br', '4599999999', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(27, '2019-10-09 14:14:41', 'bruno', 'bruno.h@funcional.cnt.br', '4599999999', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(28, '2019-11-01 10:53:42', 'angela', 'schappoangela@gmail.com', '4532255342', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(29, '2019-11-06 18:16:06', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(30, '2019-11-07 15:14:14', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(31, '2019-11-07 15:15:09', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(32, '2019-11-07 15:16:19', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(33, '2019-11-07 15:16:31', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(34, '2019-11-07 15:16:31', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(35, '2019-11-07 15:16:31', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(36, '2019-11-07 15:23:47', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(37, '2019-11-07 15:26:04', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(38, '2019-11-07 15:26:20', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(39, '2019-11-07 15:28:28', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(40, '2019-11-07 15:37:18', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(41, '2019-11-07 15:37:51', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(42, '2019-11-07 15:39:05', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(43, '2019-11-07 16:12:37', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(44, '2019-11-07 16:18:52', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(45, '2019-11-07 16:22:15', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(46, '2019-11-07 16:23:12', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(47, '2019-11-07 16:24:26', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(48, '2019-11-07 16:25:45', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(49, '2019-11-07 16:26:55', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(50, '2019-11-07 16:28:11', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(51, '2019-11-07 16:55:29', 'João Pedro Raldi', 'jraldi@hotmail.com', '(45)998535917', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(52, '2019-11-07 17:08:22', 'Angela', 'schappoangela@gmail.com', '4532255342', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(53, '2019-11-21 09:54:03', 'angela', 'schappoangela@gmail.com', '4532255342', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(54, '2019-11-26 15:33:11', 'CLAUDIA FERRONATO', 'claufe2108@gmail.com', '41991387009', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(55, '2020-01-10 16:57:09', 'Saimon de Aquino', 'saimonaquino@hotmail.com', '45999699525', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(56, '2020-01-20 08:46:47', 'silvana', 'squadri@bol.com.br', '45 999908552', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(57, '2020-01-24 13:03:21', 'Caroline Ferreira ', 'frota2@rtmtransportes.com.br', '45 999935053', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(58, '2020-05-12 14:42:18', 'Regiane', 'regiane.2104@gmail.com', '45998499741', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(59, '2020-06-26 10:48:03', 'Victor Boso', 'victorboso@hotmail.com', '45999441661', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(60, '2020-10-06 14:29:41', 'José Roberto Svistalski ', 'jrobertosvistalski@hotmail.con', '45999514075', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL),
(61, '2020-10-14 10:21:54', 'BRUNO HUSSEIN DALLA LIBERA', 'bruno.h@funcional.cnt.br', '45999040483', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(62, '2020-11-16 15:01:43', 'Lead Teste', 'jociano.brait@gmail.com', '(44) 98462-5388', NULL, NULL, 0, 0, 'Sou empresário', NULL, NULL),
(63, '2020-11-25 13:30:23', 'Rogerio', 'rogerioribasvaz@gmail.com', '1198887610', NULL, NULL, 0, 0, 'Pretendo abrir uma empresa', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `email_curriculo`
--

CREATE TABLE `email_curriculo` (
  `Id` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cidade` varchar(200) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `link` varchar(800) DEFAULT NULL,
  `file_curriculo` varchar(300) DEFAULT NULL,
  `apagada` int(11) NOT NULL,
  `visualizada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `email_curriculo`
--

INSERT INTO `email_curriculo` (`Id`, `data`, `nome`, `email`, `cidade`, `area`, `link`, `file_curriculo`, `apagada`, `visualizada`) VALUES
(8, '2017-09-27 15:20:28', 'Junior Thomaz', 'junior@webthomaz.com.br', NULL, 'teste', 'asda', '1506536428_1504295184_logo.png', 0, 0),
(9, '2017-09-27 15:26:20', 'Junior Thomaz', 'junior@webthomaz.com.br', NULL, 'teste', '', '1506536780_1505501874_logo.png', 0, 0),
(10, '2017-09-27 15:27:40', 'Junior Thomaz', 'junior@webthomaz.com.br', NULL, 'asda', '', '1506536860_1505501874_logo.png', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `email_orcamento`
--

CREATE TABLE `email_orcamento` (
  `Id` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `assunto` varchar(255) DEFAULT NULL,
  `mensagem` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `email_orcamento`
--

INSERT INTO `email_orcamento` (`Id`, `data`, `nome`, `email`, `telefone`, `assunto`, `mensagem`) VALUES
(1, '2017-09-26 15:06:40', 'Junior Thomaz', 'junior@webthomaz.com.br', '4598473740', NULL, 'asdasd'),
(2, '2017-09-26 15:31:37', NULL, NULL, NULL, NULL, NULL),
(3, '2017-09-26 15:33:03', 'Junior Thomaz', 'junior@webthomaz.com.br', '4598473740', NULL, 'asdasdsa'),
(4, '2017-09-27 15:15:00', 'VANDERLEY JUNIOR THOMAZ HERINGER', 'juniorheringer7@gmail.com', '4598473740', NULL, ''),
(5, '2017-09-27 15:24:01', 'Junior Thomaz', 'junior@webthomaz.com.br', '4598473740', NULL, 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `email_orcamento2`
--

CREATE TABLE `email_orcamento2` (
  `Id` int(11) NOT NULL,
  `data` datetime DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `assunto` varchar(255) DEFAULT NULL,
  `produtos` text,
  `mensagem` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `email_orcamento2`
--

INSERT INTO `email_orcamento2` (`Id`, `data`, `nome`, `email`, `telefone`, `assunto`, `produtos`, `mensagem`) VALUES
(1, '2017-09-26 15:06:40', 'Junior Thomaz', 'junior@webthomaz.com.br', '4598473740', NULL, NULL, 'asdasd'),
(2, '2017-09-26 15:31:37', NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2017-09-26 15:33:03', 'Junior Thomaz', 'junior@webthomaz.com.br', '4598473740', NULL, NULL, 'asdasdsa'),
(4, '2017-09-27 15:15:00', 'VANDERLEY JUNIOR THOMAZ HERINGER', 'juniorheringer7@gmail.com', '4598473740', NULL, NULL, ''),
(5, '2017-09-27 15:24:01', 'Junior Thomaz', 'junior@webthomaz.com.br', '4598473740', NULL, NULL, 'teste');

-- --------------------------------------------------------

--
-- Estrutura para tabela `paginas`
--

CREATE TABLE `paginas` (
  `paginas_id` int(11) NOT NULL,
  `paginas_titulo` varchar(200) DEFAULT NULL,
  `paginas_categoria` int(11) NOT NULL,
  `paginas_imagem` int(11) NOT NULL,
  `paginas_imagem2` int(11) NOT NULL,
  `paginas_email` int(11) NOT NULL,
  `paginas_texto` int(11) NOT NULL,
  `paginas_data` int(11) NOT NULL,
  `paginas_link` int(11) NOT NULL,
  `paginas_fotos` int(11) NOT NULL,
  `paginas_template` varchar(80) DEFAULT NULL,
  `paginas_template_exibir` varchar(100) DEFAULT NULL,
  `paginas_ordem` varchar(80) DEFAULT NULL,
  `paginas_ordem_menu` int(11) DEFAULT NULL,
  `paginas_menu` int(11) NOT NULL,
  `paginas_menu_admin` int(11) NOT NULL,
  `paginas_carousel` int(11) DEFAULT NULL,
  `paginas_layout` int(11) NOT NULL,
  `paginas_limite` int(11) NOT NULL,
  `paginas_metadescription` varchar(160) DEFAULT NULL,
  `paginas_url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `paginas`
--

INSERT INTO `paginas` (`paginas_id`, `paginas_titulo`, `paginas_categoria`, `paginas_imagem`, `paginas_imagem2`, `paginas_email`, `paginas_texto`, `paginas_data`, `paginas_link`, `paginas_fotos`, `paginas_template`, `paginas_template_exibir`, `paginas_ordem`, `paginas_ordem_menu`, `paginas_menu`, `paginas_menu_admin`, `paginas_carousel`, `paginas_layout`, `paginas_limite`, `paginas_metadescription`, `paginas_url`) VALUES
(16, 'Bem vindo', 0, 1, 0, 0, 1, 0, 1, 0, 'slideshow.php', NULL, 'registros_id ASC', 1, 1, 1, 1, 0, 0, '', 'bem-vindo'),
(22, 'Informações do rodapé', 0, 0, 0, 0, 1, 0, 0, 0, NULL, NULL, 'registros_id ASC', 0, 0, 1, 0, 1, 0, '', ''),
(24, 'Redes sociais', 0, 0, 0, 0, 1, 0, 1, 0, NULL, NULL, 'registros_id ASC', 0, 0, 1, 0, 1, 0, '', ''),
(46, 'Inovador', 0, 1, 0, 0, 1, 0, 0, 0, NULL, NULL, 'registros_id ASC', 2, 1, 1, 0, 0, 30, '', 'inovador'),
(47, 'Plataforma integrada', 0, 1, 0, 0, 1, 0, 0, 0, NULL, NULL, 'registros_id ASC', 3, 1, 1, 0, 0, 30, '', 'plataforma-integrada'),
(48, 'Funcional Digital', 0, 1, 0, 0, 1, 0, 0, 0, NULL, NULL, 'registros_id ASC', 4, 1, 1, 0, 0, 30, '', 'funcional-digital'),
(49, 'Quanto custa', 0, 0, 0, 0, 1, 0, 0, 0, NULL, NULL, 'registros_id ASC', 5, 1, 1, 0, 0, 30, '', 'quanto-custa'),
(50, 'Ficou na dúvida?', 0, 1, 0, 0, 1, 0, 0, 0, NULL, NULL, 'registros_id ASC', 6, 1, 1, 0, 0, 30, '', 'ficou-na-duvida'),
(51, 'Blog', 1, 1, 0, 0, 1, 1, 0, 1, 'blog.php', 'blog.php', 'registros_id ASC', 0, 1, 1, 0, 0, 12, '', 'blog'),
(52, 'Planos', 0, 0, 0, 0, 1, 0, 0, 0, 'planos.php', NULL, 'registros_id ASC', 0, 1, 1, 0, 0, 30, '', 'planos'),
(53, 'Portfólio 360', 0, 1, 0, 0, 1, 0, 0, 0, 'portfolio360.php', NULL, 'registros_id ASC', 0, 1, 1, 0, 0, 30, '', 'portfolio360'),
(54, 'Nossa história', 0, 1, 0, 0, 1, 0, 0, 0, 'nossa-historia.php', NULL, 'registros_id ASC', 0, 1, 1, 0, 0, 30, '', 'nossa-historia'),
(55, 'Abertura gratuita de empresa', 0, 0, 0, 0, 1, 0, 0, 0, 'abrir-empresa.php', NULL, 'registros_id ASC', 0, 1, 1, 0, 0, 30, '', 'abertura-gratuita-de-empresa'),
(56, 'Nós ajudamos a sua empresa a decolar', 0, 1, 0, 0, 1, 0, 0, 0, 'nos-ajudamos.php', NULL, 'registros_id ASC', 0, 1, 1, 0, 0, 30, '', 'nos-ajudamos-sua-empresa-decolar'),
(57, 'Depoimentos', 0, 1, 0, 0, 1, 0, 0, 0, NULL, NULL, 'registros_id ASC', 0, 1, 1, 0, 0, 30, '', 'depoimentos'),
(58, 'Condomínios', 0, 0, 0, 0, 1, 0, 0, 0, 'condominios.php', NULL, 'registros_id ASC', 0, 1, 1, 0, 0, 20, '', 'condominios'),
(59, 'Tecnologia', 0, 1, 0, 0, 1, 0, 0, 0, 'tecnologia.php', NULL, 'registros_id ASC', 0, 0, 1, 0, 0, 50, '', 'tecnologia');

-- --------------------------------------------------------

--
-- Estrutura para tabela `registros`
--

CREATE TABLE `registros` (
  `registros_id` int(11) NOT NULL,
  `registros_idpg` int(11) NOT NULL,
  `registros_titulo` varchar(200) DEFAULT NULL,
  `registros_imagem` varchar(150) NOT NULL,
  `registros_imagem2` varchar(150) DEFAULT NULL,
  `registros_email` varchar(100) NOT NULL,
  `registros_preco` varchar(100) DEFAULT NULL,
  `registros_descricao` varchar(300) DEFAULT NULL,
  `registros_texto` text NOT NULL,
  `registros_data` date NOT NULL,
  `registros_link` varchar(150) NOT NULL,
  `registros_metadescription` varchar(160) DEFAULT NULL,
  `registros_url` varchar(200) NOT NULL,
  `registros_ordem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `registros`
--

INSERT INTO `registros` (`registros_id`, `registros_idpg`, `registros_titulo`, `registros_imagem`, `registros_imagem2`, `registros_email`, `registros_preco`, `registros_descricao`, `registros_texto`, `registros_data`, `registros_link`, `registros_metadescription`, `registros_url`, `registros_ordem`) VALUES
(152, 45, 'teste', 'slide2.jpg', NULL, '', NULL, NULL, '', '0000-00-00', '', '', 'teste', 0),
(153, 38, 'asdasdas', 'slide2.jpg', NULL, '', NULL, NULL, '<p>asdasdasd</p>', '0000-00-00', '', '', 'asdasdas', 0),
(154, 14, 'testwe', 'slide2.jpg', NULL, '', NULL, NULL, '<p>ASDSDASDASDASaSDASdASD</p>', '0000-00-00', '', '', 'testwe', 0),
(155, 14, 'ADASdAS', '', NULL, '', NULL, NULL, '<p>DASdASDaSDASD</p>', '0000-00-00', '', '', 'adasdas', 0),
(156, 16, 'NÓS AJUDAMOS SUA  EMPRESA A DECOLAR!', 'bg-topo-novo.jpg', NULL, '', NULL, NULL, 'Acreditamos que contabilidade é muito mais do que apenas processar os números. Por isso, temos verdadeira paixão em ajudar empreendedores  a alcançarem seus  sonhos.', '0000-00-00', '', '', 'nos-ajudamos-sua-empresa-a-decolar', 0),
(157, 46, 'UM ESCRITÓRIO  CONFIÁVEL E INOVADOR', 'bg-inovador.jpg', NULL, '', NULL, NULL, '<ul><li><img src=\"uploads/1538493267_icon-inovacao-1.png\" style=\"width: 20px;\">&nbsp;Solidez de mercado com 25 anos de história. ISO9001:2015</li><li><img src=\"uploads/1538493274_icon-inovacao-2.png\" style=\"width: 24px;\">&nbsp;Time de especialistas do mercado financeiro com mais de 50 profissionais altamente capacitados</li><li><img src=\"uploads/1538493279_icon-inovacao-3.png\" style=\"width: 24px;\">&nbsp;Tecnologia e segurança de última geração, seus dados integrados ao nosso escritório</li></ul><div><br></div><p><b>Solução para pequenas, médias e grandes empresas:</b></p>', '0000-00-00', '', '', 'um-escritorio-confiavel-e-inovador', 0),
(158, 47, 'PLATAFORMA INTEGRADA<br>COM SUA EMPRESA', 'bg-plataforma.jpg', NULL, '', NULL, NULL, '<p><b>Simplifique seu dia a dia</b></p><p>Com o nossos sistemas de tecnologia, sua empresa e a Funcional estão agora integrados tornando sua vida muito mais fácil. Além de ganhar tempo e evitar extravio de documentos, suas informações gerenciais estarão sempre precisas e disponíveis instantâneamente, evitando erros de cálculo e multas por atraso.</p><p>Integração completa entre a sua empresa e a Funcional</p><p>Zero Paper - Chega de imprimir, copiar, escanear ou enviar documentos para o seu contador</p>', '0000-00-00', '', '', 'plataforma-integradabrcom-sua-empresa', 0),
(159, 48, 'FUNCIONAL DIGITAL', 'bg-funcional-digital-novo.jpg', NULL, '', NULL, NULL, '<p><b>Revolucionário, descomplicado</b></p><p>Tudo o que você sempre esperou do seu contador.</p>\r\n<ul><li>Atendimento</li><li>Segurança e controle</li><li>Impostos</li><li>Pró-labore e folha de pagamento</li><li>Obrigações acessórias</li><li>App móvel</li></ul>\r\n<ul>\r\n<li>Consultoria</li><li>Finanças</li><li>Treinamentos - EAD</li></ul>', '0000-00-00', '', '', 'funcional-digital', 0),
(160, 49, 'MEI', '', NULL, '', 'R$ 149,00', 'Para os empresários individuais que emitem poucas notas fiscais no mês e que possuem pouca movimentação financeira.', '<ul><li style=\"text-align: left; \">Boletins informativos&nbsp;</li><li style=\"text-align: left;\">Emissão de Guias de Tributos Mensais</li><li style=\"text-align: left;\">Entrega de Obrigações ao Fisco</li><li style=\"text-align: left;\">Pró-labore</li><li style=\"text-align: left;\">Relatório de Fluxo de Caixa Diário e Mensal em tempo real</li><li style=\"text-align: left;\">Sistema de Controle Financeiro e emissão de Notas Fiscais</li><li style=\"text-align: left;\">Atendimento via portal do cliente</li></ul>', '0000-00-00', '', '', 'mei', 0),
(161, 49, 'BÁSICO', '', '', '', 'R$ 239,00', 'Direcionado aos pequenos empresários que possuem ou não empregados e precisam de mais informações para gerir seu negócio.', '<ul><li style=\"text-align: left;\">Boletins informativos&nbsp;</li><li style=\"text-align: left;\">Emissão de Guias de Tributos Mensais</li><li style=\"text-align: left;\">Entrega de Obrigações ao Fisco</li><li style=\"text-align: left;\">Pró-labore</li><li style=\"text-align: left;\">Relatório de Fluxo de Caixa Diário e Mensal em tempo real</li><li style=\"text-align: left;\">Sistema de Controle Financeiro e emissão de Notas Fiscais</li><li style=\"text-align: left;\">Atendimento via portal do cliente</li><li style=\"text-align: left;\">Atendimento por e-mail</li><li style=\"text-align: left;\">DRE Gerencial em tempo real</li></ul>', '0000-00-00', '', '', 'basico', 0),
(162, 49, 'INTERMEDIÁRIO', '', '', '', 'R$ 369,00', 'Ideal para os empresários com necessidade de maior agilidade no atendimento.', '<ul><li style=\"text-align: left;\">Boletins informativos&nbsp;</li><li style=\"text-align: left;\">Emissão de Guias de Tributos Mensais</li><li style=\"text-align: left;\">Entrega de Obrigações ao Fisco</li><li style=\"text-align: left;\">Pró-labore</li><li style=\"text-align: left;\">Relatório de Fluxo de Caixa Diário e Mensal em tempo real</li><li style=\"text-align: left;\">Sistema de Controle Financeiro e emissão de Notas Fiscais</li><li style=\"text-align: left;\">Atendimento via portal do cliente</li><li style=\"text-align: left;\">Atendimento por e-mail</li><li style=\"text-align: left;\">DRE Gerencial em tempo real</li><li style=\"text-align: left;\">Controle de Certidões Negativas</li><li style=\"text-align: left;\">Atendimento por whatsapp</li><li style=\"text-align: left;\">&nbsp;Atendimento por telefone</li></ul>', '0000-00-00', '', '', 'intermediario', 0),
(163, 49, 'PLUS', '', '', '', 'R$ 629,00', 'Direcionado aos empresários que necessitam de acompanhamento mensal dos indicadores de resultado.', '<ul><li style=\"text-align: left;\">Boletins informativos </li><li style=\"text-align: left;\">Emissão de Guias de Tributos Mensais</li><li style=\"text-align: left;\">Entrega de Obrigações ao Fisco</li><li style=\"text-align: left;\">Pró-labore</li><li style=\"text-align: left;\">Relatório de Fluxo de Caixa Diário e Mensal em tempo real</li><li style=\"text-align: left;\">Sistema de Controle Financeiro e emissão de Notas Fiscais</li><li style=\"text-align: left;\">Atendimento via portal do cliente</li><li style=\"text-align: left;\">Atendimento por e-mail</li><li style=\"text-align: left;\">DRE Gerencial em tempo real</li><li style=\"text-align: left;\">Controle de Certidões Negativas</li><li style=\"text-align: left;\">Atendimento por whatsapp</li><li style=\"text-align: left;\">Atendimento por telefone</li><li style=\"text-align: left;\">Planejamento Tributário</li><li style=\"text-align: left;\">Gestão de Orçamento</li><li style=\"text-align: left;\">Indicadores Contábeis e Gerenciais</li></ul>', '0000-00-00', '', '', 'plus', 0),
(164, 50, 'FICOU NA  <br><span>DÚVIDA?</span>', 'bg-footer.jpg', NULL, '', NULL, NULL, 'Agende&nbsp; já uma consultoria de 30 minutos com um de nossos especialistas e tire todas as suas dúvidas&nbsp;', '0000-00-00', '', '', 'ficou-na-brspanduvidaspan', 0),
(165, 22, 'Contatos', '', NULL, '', NULL, NULL, '<div><div>Rua Visconde de Guarapuava, 1572</div><div>Cascavel - Paraná</div><div>(45) 3225-5342<br></div></div><div>(45) 99976-0044<br></div><div>contato@funcional.cnt.br</div>', '0000-00-00', '', '', 'contatos', 0),
(166, 24, 'Facebook', '', NULL, '', NULL, NULL, '<i class=\"fa fa-facebook-official\"></i>', '0000-00-00', 'https://www.facebook.com/FuncionalContabilidade/', '', 'facebook', 0),
(167, 24, 'Instagram', '', NULL, '', NULL, NULL, '<i class=\"fa fa-instagram\"></i>', '0000-00-00', 'https://www.instagram.com/funcionalcontabilidade', '', 'instagram', 0),
(168, 24, 'Whatsapp', '', NULL, '', NULL, NULL, '<i class=\"fa fa-whatsapp\"></i>', '0000-00-00', 'https://api.whatsapp.com/send?phone=5545999217272', '', 'whatsapp', 0),
(169, 24, 'Linkedin', '', NULL, '', NULL, NULL, '<i class=\"fa fa-linkedin\"></i>', '0000-00-00', '', '', 'linkedin', 0),
(170, 24, 'Twitter', '', NULL, '', NULL, NULL, '<i class=\"fa fa-twitter\"></i>', '0000-00-00', 'https://twitter.com/funcionalcontab', '', 'twitter', 0),
(179, 52, 'Prestadora de serviços', '', NULL, '', NULL, NULL, '<table class=\"table\">\r\n		<thead>\r\n			<tr>\r\n				<th>Planos de atendimento</th>\r\n				<th>MEI</th>\r\n				<th>Básico</th>\r\n				<th>Intermediário</th>\r\n				<th>Plus</th>\r\n			</tr>\r\n		</thead>\r\n		<tbody>\r\n			<tr>\r\n				<td></td>\r\n				<td><div class=\"price\">a partir de<br><b>R$ 149</b></div></td>\r\n				<td><div class=\"price\">a partir de<br><b>R$ 239</b></div></td>\r\n				<td><div class=\"price\">a partir de<br><b>R$ 369</b></div></td>\r\n				<td><div class=\"price\">a partir de<br><b>R$ 629</b></div></td>\r\n			</tr>\r\n			<tr>\r\n				<td>\r\n					<b>Serviços Contábeis</b>\r\n				</td>\r\n				<td></td>\r\n				<td></td>\r\n				<td></td>\r\n				<td></td>\r\n			</tr>\r\n			<tr>\r\n				<td>Obrigações legais com Receita Federal e Prefeitura.</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Emissão das Guias de Tributos Mensais</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Transmissão da Declaração de Imposto de Renda PJ</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Declaração de Faturamento</td>\r\n				<td>Uma por ano</td>\r\n				<td>Uma por semestre</td>\r\n				<td>Uma por trimestre</td>\r\n				<td>Uma por mês</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Relatórios contábeis (DRE, Balanço Patrimonial e DMPL)</td>\r\n				<td>Uma por ano</td>\r\n				<td>Uma por ano</td>\r\n				<td>Uma por semestre</td>\r\n				<td>Uma por trimestre</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Emissão de Pró-labore Sócios</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Folha de Pagamento</td>\r\n				<td>Personalizado</td>\r\n				<td>Personalizado</td>\r\n				<td>Personalizado</td>\r\n				<td>Personalizado</td>\r\n			</tr>\r\n			<tr>\r\n				<td><b>Canais de Suporte</b></td>\r\n				<td></td>\r\n				<td></td>\r\n				<td></td>\r\n				<td></td>\r\n			</tr>\r\n			<tr>\r\n				<td>Portal do Cliente</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>E-mail</td>\r\n				<td></td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Whatsapp</td>\r\n				<td></td>\r\n				<td></td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Telefone</td>\r\n				<td></td>\r\n				<td></td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Reunião por Conferência</td>\r\n				<td></td>\r\n				<td></td>\r\n				<td></td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Reunião presencial</td>\r\n				<td></td>\r\n				<td></td>\r\n				<td></td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td><b>Empresas Atendidas</b></td>\r\n				<td><br></td>\r\n				<td><br></td>\r\n				<td><br></td>\r\n				<td><br></td>\r\n			</tr>\r\n			<tr>\r\n				<td>Empresa de Serviços</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>3º Setor</td>\r\n				<td></td>\r\n				<td></td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Empresa Comercial</td>\r\n				<td></td>\r\n				<td></td>\r\n				<td><br></td>\r\n				<td>x<br></td>\r\n			</tr>\r\n			<tr>\r\n				<td>Empresa Industrial</td>\r\n				<td></td>\r\n				<td></td>\r\n				<td></td>\r\n				<td>x<br></td>\r\n			</tr>\r\n			<tr>\r\n				<td>Incorporação imobiliária</td>\r\n				<td></td>\r\n				<td></td>\r\n				<td></td>\r\n				<td>x<br></td>\r\n			</tr>\r\n			<tr>\r\n				<td><b>Enquadramentos Atendidos</b></td>\r\n				<td></td>\r\n				<td></td>\r\n				<td></td>\r\n				<td></td>\r\n			</tr>\r\n			<tr>\r\n				<td>Enquadramento Microempreendedor Individual - MEI</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Enquadramento Simples Nacional</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Enquadramento Lucro Presumido</td>\r\n				<td></td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Enquadramento Lucro Real</td>\r\n				<td></td>\r\n				<td></td>\r\n				<td></td>\r\n				<td>x</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Limite de Faturamento Mensal</td>\r\n				<td>Personalizado</td>\r\n				<td>Personalizado</td>\r\n				<td>Personalizado</td>\r\n				<td>Personalizado</td>\r\n			</tr>\r\n			<tr>\r\n				<td>Limite de Notas Fiscais dentro do Plano</td>\r\n				<td>Personalizado</td>\r\n				<td>Personalizado</td>\r\n				<td>Personalizado</td>\r\n				<td>Personalizado</td>\r\n			</tr><tr><td><b>Ferramentas e Conteúdos Disponibilizados</b><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td>Análise de pagamentos e recebimentos*<br></td><td><br></td><td><br></td><td>x<br></td><td>x<br></td></tr><tr><td>Conteúdos e Publicações de Gestão<br></td><td>x</td><td>x</td><td>x</td><td>x</td></tr><tr><td>Controle Proativo das Certidões Negativas<br></td><td><br></td><td><br></td><td>x</td><td>x</td></tr><tr><td>DRE Gerencial*<br></td><td><br></td><td>x</td><td>x</td><td>x</td></tr><tr><td>Ferramenta Gerenciador Financeiro e Emissão de Notas Fiscais de Serviço*<br></td><td>x</td><td>x</td><td>x</td><td>x</td></tr><tr><td>Fluxo de caixa mensal/diário*<br></td><td>x</td><td>x</td><td>x</td><td>x</td></tr><tr><td>Gestão de orçamento *<br></td><td><br></td><td><br></td><td><br></td><td>x</td></tr><tr><td>Indicadores Contábeis e Gerenciais<br></td><td><br></td><td><br></td><td><br></td><td>x</td></tr><tr><td>Mentorias de Contadores<br></td><td><br></td><td><br></td><td><br></td><td>x</td></tr><tr><td>Planejamento tributário&nbsp;<br></td><td><br></td><td><br></td><td><br></td><td>x</td></tr>\r\n		</tbody>\r\n	</table>', '0000-00-00', '', '', 'prestadora-de-servicos', 0),
(180, 52, 'Obrigações', '', NULL, '', NULL, NULL, '<div>Cumprimos todas as obrigações contábeis, fiscais e trabalhistas da sua empresa.&nbsp;</div><div>Todos os planos incluem:</div><div>Entrega de declarações à Receita Federal e Municípios</div><div>Cálculo e Emissão das Guias de Tributos</div><div>Pró-labore dos sócios</div><div>Relatórios Contábeis&nbsp;</div><div>Documentos assinados por contador</div><div>Atendimento via portal do cliente.</div>', '0000-00-00', '', '', 'obrigacoes', 0),
(181, 52, 'São considerados serviços extras e cobrados à parte', '', NULL, '', NULL, NULL, '<div>Alteração contratual<br></div><div>Declaração Siscoserv (para empresas exportadoras de serviço)</div><div>Certidão negativa de falências ou protestos</div><div>Consultoria</div><div>Diligências presenciais nos órgãos públicos</div><div>Encadernação, autenticação e registro de Livros</div><div>Reemissão de Guia de Impostos</div><div>Parcelamentos de dívidas tributárias</div><div>Declaração de Faturamento da empresa que exceder a quantidade prevista no plano</div><div>Preenchimento de formulários externos</div><div>Renovação de Certificados Digitais</div><div>Habilitação no RADAR</div><div><br></div>', '0000-00-00', '', '', 'sao-considerados-servicos-extras-e-cobrados-a-parte', 0),
(189, 54, '2002', 'func_2015_066 copiar.jpg', NULL, '', NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0000-00-00', '', '', '2002', 0),
(190, 54, '2003', 'func_2015_066 copiar.jpg', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0000-00-00', '', '', '2003', 0),
(191, 54, '2004', 'func_2015_066 copiar.jpg', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0000-00-00', '', '', '2004', 0),
(192, 54, '2005', 'func_2015_066 copiar.jpg', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0000-00-00', '', '', '2005', 0),
(193, 54, '2006', 'func_2015_066 copiar.jpg', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0000-00-00', '', '', '2006', 0),
(194, 54, '2007', 'func_2015_066 copiar.jpg', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '0000-00-00', '', '', '2007', 0),
(195, 55, 'Quer abrir sua empresa de graça?', '', NULL, '', NULL, NULL, '<p>Com o objetivo de contribuir com a redução da sobrecarga de custos, a Funcional Contabilidade oferta a abertura de empresa gratuita aos seus clientes. Quer saber como? Basta que a Funcional cuide da contabilidade de seu negócio<br></p>', '0000-00-00', '', '', 'quer-abrir-sua-empresa-de-graca', 0),
(196, 56, 'Somos mais que apenas contadores', '001-employee.png', NULL, '', NULL, NULL, 'Não se trata apenas de escriturar suas informações e preencher relatórios com os números da sua empresa para cumprir com exigências do fisco. Nós nos preocupamos em te entregar as informações de maneira rápida e eficiente, permitindo que a contabilidade seja utilizada como uma verdadeira ferramenta de gestão. Fazer sua empresa crescer é uma das experiências mais empolgantes pelas quais você possa passar, mas também uma das mais desafiadoras. Por isso, nossa equipe está pronta para te auxiliar a projetar o futuro da sua empresa.', '0000-00-00', '', '', 'somos-mais-que-apenas-contadores', 0),
(197, 56, 'Crescimento', '002-profits.png', NULL, '', NULL, NULL, 'O crescimento de um negócio é uma das coisas mais importantes que você pode planejar. É também um dos mais desafiadores. Se você está procurando expandir seus negócios, vamos ajudá-lo a descobrir o que vem depois, quais são os desafios ao longo do caminho e como superá-los (mesmo antes de alcançá-los). Usaremos análises e compartilharemos ideias para ajudá-lo a crescer de maneira rápida e sustentável. Nos deixe mostrar como.', '0000-00-00', '', '', 'crescimento', 0),
(198, 56, 'Lucro ', '003-money.png', NULL, '', NULL, NULL, 'À medida que sua empresa cresce, é muito fácil perder o lucro. A boa notícia é que sabemos o que é preciso para realmente ganhar dinheiro em um negócio. Conhecemos os erros que quase todo mundo comete e como resolvê-los. Conhecemos as alavancas para aumentar o lucro e como fazer isso regularmente. Por que não fazer uma análise de rentabilidade conosco?', '0000-00-00', '', '', 'lucro', 0),
(199, 56, 'Fluxo de caixa ', '004-debt.png', NULL, '', NULL, NULL, 'O dinheiro é o oxigênio que mantém seu negócio vivo. Sem isso, até as empresas mais ambiciosas e inovadoras falharão. No entanto, muitas empresas não têm um plano efetivo para administrar o fluxo de caixa, lutam para obter financiamento e estão usando métodos ultrapassados para buscarcrédito. Mostraremos a você como receber o pagamento mais rapidamente e eliminar o incômodo de gerenciar seu fluxo de caixa.', '0000-00-00', '', '', 'fluxo-de-caixa', 0),
(200, 56, 'Tempo ', '005-stopwatch.png', NULL, '', NULL, NULL, 'Como empresários, o tempo é o recurso mais precioso que temos. Como nós gastamos isso é fundamental para o nosso sucesso. Trabalhamos com pessoas como você para implementar tecnologias que automatizam e agilizam os processos de negócios. Trabalhando com a Funcional, vamos ajudá-lo a recuperar o tempo de cada semana para fazer mais do que você ama. Entre em contato e vamos mostrar como.', '0000-00-00', '', '', 'tempo', 0),
(201, 53, 'Serviços Contábeis ou Suporte para a Gestão do seu negócio?  Você escolhe', '', NULL, '', NULL, NULL, '<div>Não somos apenas um escritório de contabilidade. Agregamos dentro de seus serviços toda a orientação técnica e de apoio a gestão para empreendedores.</div><div><br></div><div>Nossa missão é:&nbsp; Oferecer serviços e soluções contábeis de elevado grau de qualidade, observando a valorização de pessoas e o compromisso ético e social, a um preço acessível, contribuindo efetivamente para o sucesso e crescimento da empresa e de nossos clientes</div><div><br></div><div>Nos conte o seu projeto, e vamos trabalhar juntos !</div><div><br></div>', '0000-00-00', '', '', 'servicos-contabeis-ou-suporte-para-a-gestao-do-seu-negocio-voce-escolhe', 0),
(202, 53, 'Abertura ou Regularização de Empresas', '002-approve-invoice.png', NULL, '', NULL, NULL, '<div>Cada empresa tem suas próprias características, por isso analisamos com você o melhor caminho e para tomarmos a melhor decisão.</div><div>Abrimos e regularizamos a sua empresa de forma segura e descomplicada.</div><div>Converse com os nossos Consultores.</div><div><br></div><div><b>Atuação:</b></div><div>•<span style=\"white-space:pre\">	</span>Preparação de documentos societários para Registro</div><div>•<span style=\"white-space:pre\">	</span>Cadastro na Prefeitura, Previdência e FGTS</div><div>•<span style=\"white-space:pre\">	</span>Enquadramento Sindical e Tributário</div><div>•<span style=\"white-space:pre\">	</span>Parcelamento de Débitos</div><div>•<span style=\"white-space:pre\">	</span>Alteração Contratual e Cadastral</div><div>•<span style=\"white-space:pre\">	</span>Pesquisa Fiscal e Cadastral</div><div>•<span style=\"white-space:pre\">	</span>Incorporação ou cisão totais ou parciais</div><div>•<span style=\"white-space:pre\">	</span>Legalização e Regularização da documentação.</div><div><br></div><div><b>Diferenciais:</b></div><div>•<span style=\"white-space:pre\">	</span>Analise integrada de enquadramentos societários e tributários</div><div>•<span style=\"white-space:pre\">	</span>Controle de processo para que você tenha informação, passo a passo</div><div>•<span style=\"white-space:pre\">	</span>Controle automatizado de CND’s</div><div>•<span style=\"white-space:pre\">	</span>Realização do processo do início ao fim, com todos os órgãos</div><div><br></div>', '0000-00-00', '', '', 'abertura-ou-regularizacao-de-empresas', 0),
(203, 53, 'Contabilidade e gestão tributária para sua empresa', '003-tax.png', NULL, '', NULL, NULL, '<div>Foque no seu negócio, e daremos todo o suporte necessário para que possa ter sucesso com sua empresa. As melhores soluções de mercado, aliadas a um time de profissionais preparados para acompanhar o crescimento de seu negócio!</div><div><br></div><div><b>Atuação:</b></div><div>•<span style=\"white-space:pre\">	</span>Escrituração Contábil e Fiscal</div><div>•<span style=\"white-space:pre\">	</span>Cálculo e emissão de guias de impostos</div><div>•<span style=\"white-space:pre\">	</span>Entrega das obrigações legais federais, estaduais e municipais</div><div>•<span style=\"white-space:pre\">	</span>Envio do Imposto de Renda da Empresa anual</div><div>•<span style=\"white-space:pre\">	</span>Relatórios contábeis (DRE, Balanço Patrimonial, Balancete)</div><div><b>Diferenciais:</b></div><div>•<span style=\"white-space:pre\">	</span>Integração com Informações Financeiras</div><div>•<span style=\"white-space:pre\">	</span>Auditoria dos Arquivos SPED</div><div>•<span style=\"white-space:pre\">	</span>Diagnósticos de Gestão</div><div>•<span style=\"white-space:pre\">	</span>Consultoria Ativa</div><div>•<span style=\"white-space:pre\">	</span>Planejamento Tributário permanente</div>', '0000-00-00', '', '', 'contabilidade-e-gestao-tributaria-para-sua-empresa', 0),
(204, 53, 'Folha de Pagamento', '004-money.png', NULL, '', NULL, NULL, '<div>As pessoas são o coração da sua empresa.</div><div>A área de Recursos Humanos presta os serviços relacionados ao departamento de pessoal e abrange as obrigações previdenciárias e trabalhistas, visando atender também o E-social.</div><div>Nosso objetivo é dar suporte para que a empresa cumpra com os direitos trabalhistas brasileiros, questões previdenciárias e sindicais que envolvem os funcionários, autônomos e estagiários das empresas, com foco na segurança do colaborador e minimizar os riscos passivos.</div><div><br></div><div><b>Atuação:</b></div><div>•<span style=\"white-space:pre\">	</span>Atendimento às obrigações acessórias trabalhistas e previdenciárias</div><div>•<span style=\"white-space:pre\">	</span>Informes de rendimentos dos funcionários, autônomos, estagiários e sócios.</div><div>•<span style=\"white-space:pre\">	</span>Atendimento às Fiscalizações Trabalhistas e Previdenciárias;</div><div>•<span style=\"white-space:pre\">	</span>Elaboração de relatórios de controle das férias dos funcionários;</div><div>•<span style=\"white-space:pre\">	</span>Enquadramento Sindical Patronal;</div><div>•<span style=\"white-space:pre\">	</span>Acompanhamento e Comunicação das Mudanças na Legislação Trabalhista e Previdenciária;</div><div>•<span style=\"white-space:pre\">	</span>Análise da incidência da retenção do INSS sobre serviços tomados</div><div>•<span style=\"white-space:pre\">	</span>Análise das Convenções Coletivas de Trabalho, suas aplicações e orientações as empresas</div><div>•<span style=\"white-space:pre\">	</span>SPED Folha (E-Social);</div><div>•<span style=\"white-space:pre\">	</span>Pro-labore dos sócios.</div><div>•<span style=\"white-space:pre\">	</span>Processamento de Folha de Pagamento</div><div><b>Diferenciais:</b></div><div>•<span style=\"white-space:pre\">	</span>Profissionais preparados para atendimento ao eSocial</div><div>•<span style=\"white-space:pre\">	</span>Sistema integrado para gestão das informações da folha</div><div>•<span style=\"white-space:pre\">	</span>Relatório personalizados as necessidades de cada empresa</div><div><br></div>', '0000-00-00', '', '', 'folha-de-pagamento', 0),
(205, 53, 'Condominios', '005-building.png', NULL, '', NULL, NULL, '<div>Atuamos desde a regularização e registro do novo condomínio até a toda orientação necessária ao síndico e condôminos, visando a tranquilidade&nbsp; e segurança de todos os moradores</div><div>Nosso objetivo é estar presente em todas as etapas do processo, dando suporte a construtora e posteriormente ao síndico, gestor do condomínio, em todas as suas obrigações, dando-lhes segurança nas tomadas de decisão das mais variadas questões.&nbsp;</div><div>Veja nossas soluções:</div><div>•<span style=\"white-space:pre\">	</span>Planilhas de previsão de despesas e receitas</div><div>•<span style=\"white-space:pre\">	</span>Rateio das despesas e emissão de boletos bancários</div><div>•<span style=\"white-space:pre\">	</span>Contabilização de despesas e receitas e apuração de resultados;</div><div>•<span style=\"white-space:pre\">	</span>Relatório mensal de inadimplentes</div><div>•<span style=\"white-space:pre\">	</span>Controle de contas a pagar e a receber</div><div>•<span style=\"white-space:pre\">	</span>Folha de pagamento, rescisão e férias de colaboradores</div><div>•<span style=\"white-space:pre\">	</span>Apuração de impostos: municipal, estadual e/ou federal, quando for o caso</div><div>•<span style=\"white-space:pre\">	</span>Participação em assembleias, para apresentação e prestação de contas</div><div><br></div><div><a class=\"btn btn-padrao transition\" href=\"http://funcional.cnt.br/condominios\" target=\"_blank\">Saiba mais</a></div><div><br></div>', '0000-00-00', '', '', 'condominios', 0),
(206, 53, 'Serviços para o seu IR Pessoa Física', '006-avatar.png', NULL, '', NULL, NULL, '<div>Aumenta a eficiência nas suas entregas e deixe que a gente minimiza as suas chances de ser pego pelo Leão.</div><div>Avaliamos todas as suas operações dentro e fora do Brasil para entregar as melhores informações para a Receita Federal e evitar riscos fiscais.</div><div> </div><div>Solicite um Contato</div><div><b>Atuação:</b></div><div>•<span style=\"white-space:pre\">	</span>Declaração Anual de IRPF</div><div>•<span style=\"white-space:pre\">	</span>Analise de Inconsistências e Malha Fiscal</div><div>•<span style=\"white-space:pre\">	</span>Rendimentos no Exterior</div><div>•<span style=\"white-space:pre\">	</span>Carne Leão</div><div>•<span style=\"white-space:pre\">	</span>Ganhos de Capital</div><div>•<span style=\"white-space:pre\">	</span>Declaração Bacen - CBE</div><div><b>Diferenciais:</b></div><div>•<span style=\"white-space:pre\">	</span>Acompanhamento do processamento e restituição;</div><div>•<span style=\"white-space:pre\">	</span>Auxílio técnico caso sua declaração seja retida em malha fina</div><div>•<span style=\"white-space:pre\">	</span>Auxilio em Operações Financeiras</div><div><br></div>', '0000-00-00', '', '', 'servicos-para-o-seu-ir-pessoa-fisica', 0),
(207, 58, 'Condomínios', '', NULL, '', NULL, NULL, 'A mesma confiança e qualidade de atendimento da Funcional Contabilidade, baseada em seus 27 anos de história, está à sua disposição no segmento de Condomínios. Processos bem definidos, com certificação ISO 9001:2014 auditada pela alemã TUV, trazem a segurança que condomínios precisam desde o planejamento para a sua constituição, até acompanhamento das assembleias, orientando e dando suporte necessário. O condomínio deve ser pensado para proporcionar calma e tranquilidade ao seu lar e é com esse propósito que oferecemos as nossas soluções.', '0000-00-00', '', '', 'condominios', 0),
(208, 58, 'Construtoras e incorporadoras', '', NULL, '', NULL, NULL, '<div>O objetivo do seu empreendimento é o sucesso, e nós estamos ao seu lado para que as melhores práticas de gestão do condomínio estejam à disposição dos clientes antes mesmo de desfrutarem do novo lar.</div><div><br></div><div><b>PLANEJAMENTO NAS CONTAS</b></div><div><br></div><div>Estudo que contempla as despesas para o perfeito funcionamento do condomínio. O objetivo é informar ao cliente como será todo o planejamento financeiro do condomínio, desde o valor da cota condominial até a maneira como estes recursos serão empregados. Aqui será avaliada detalhadamente a composição de serviços básicos compulsórios e serviços opcionais definidos no conceito do empreendimento.</div><div><br></div><div><b>PRÉ-IMPLANTAÇÃO DO CONDOMÍNIO</b></div><div><br></div><div>As ações de pré-implantação são realizadas antes da entrega do</div><div>empreendimento e englobam a seguintes ações:</div><div><br></div><div>• Orientação ao futuro síndico sobre sua atuação;</div><div>• Suporte na seleção de empresas parceiras e fornecedores escolhidos pelo síndico para a operação;</div><div>• Avaliação dos contratos;</div><div>• Atualização da previsão orçamentária. Nesta fase, são feitas também as validações do Edital para convocação da Assembleia de Instalação.</div><div><br></div><div><b>INSTALAÇÃO DE CONDOMÍNIO</b></div><div><br></div><div>Atenção especial com todos os detalhes do processo, desde os registros necessários para a inscrição no CNPJ, passando pela Assembleia de Instalação do Condomínio, com a emissão do Edital até a aprovação da previsão orçamentária. Neste dia, haverá acompanhamento pela equipe da Funcional Condomínios. Auxílio na elaboração do regimento interno, com todas as orientações legais.</div><div><br></div><div><b>PÓS-INSTALAÇÃO COM CONTROLE DE COTAS CONDOMINIAIS EM ESTOQUE</b></div><div><br></div><div>Atendimento voltado ao primeiro ano do empreendimento, com atenção especial para a demandas e providências específicas do primeiro ano de operação. Controle automatizado e detalhado da cobrança de cotas condominiais em estoque na construtora ou incorporadora.</div>', '0000-00-00', '', '', 'construtoras-e-incorporadoras', 0),
(209, 58, 'A Tranquilidade ao chegar na sua casa', '', NULL, '', NULL, NULL, '<div>A Funcional Condomínios não quer apenas pagar contas, fazer rateios e calcular impostos. A vida em condomínio é mais do que números e sabemos como dar todo o suporte necessário visando à harmonia entre todos os condôminos. Investimos em tecnologia para proporcionar soluções interativas e acessíveis, gerando transparência e fácil comunicação entre todos. Afinal, o que todos queremos é uma boa vizinhança!</div><div><br></div><div><b>CONTABILIDADE</b></div><div><br></div><div>• Elaboração dos demonstrativos contábeis dentro das normas IFRS;</div><div>• Apuração e emissão das guias de impostos.</div><div><br></div><div><b>ADMINISTRAÇÃO FINANCEIRA</b></div><div><br></div><div>• Controle de contas a pagar e receber;</div><div>• Relatório de inadimplência;</div><div>• Pagamentos de contas - emissão de cheques;</div><div>• Emissão de boletos bancários;</div><div>• Controle e conciliação de contas bancárias;</div><div>• Rateio - Prestação de Contas.</div><div><br></div><div><b>RECURSOS HUMANOS</b></div><div><br></div><div>• Elaboração da folha de pagamento;</div><div>• Cálculo dos impostos e encargos;</div><div>• Movimentações da folha (admissão, férias, afastamentos, rescisão).</div><div><br></div><div><b>DEPARTAMENTO JURÍDICO</b></div><div><br></div><div>• Análises e pareceres em contratos, notificações ou multas;</div><div>• Ajustes necessários em regimentos;</div><div>• Todo suporte jurídico necessário para o condomínio.</div><div><br></div><div>Além de todos os serviços citados, a Funcional Condomínios disponibiliza um site personalizado para o condomínio, com todas as suas informações, como mural de recados, prestação de contas on-line, boletos e relatórios. Também há uma área para registro das solicitações dos condôminos, facilitando ainda mais a comunicação.</div><div><br></div><div>Ficou com dúvida?</div><div>Entre em contato com nossos especialistas.</div><div><br></div><div>Cascavel - PR</div><div>Rua Visconde de Guarapuava, 1572</div><div>+ 55 45 3225.5342 | www.funcional.cnt.br</div>', '0000-00-00', '', '', 'a-tranquilidade-ao-chegar-na-sua-casa', 0),
(210, 57, 'Maria Alice Back - Marcolab ', 'mercolab.png', NULL, '', NULL, NULL, 'Prestação de serviços excelente! ', '0000-00-00', '', '', 'maria-alice-back-marcolab', 0),
(211, 57, 'Elaine – Transportadora Sabiá', 'transabia-cascavel-pr-ramo-transportadora-atividade-granel_g.jpg', NULL, '', NULL, NULL, 'Fácil acesso a informações junto aos colaboradores da funcional ', '0000-00-00', '', '', 'elaine-transportadora-sabia', 0),
(212, 57, 'Elisabeth Possamai - Banco de sangue', 'ihec.png', NULL, '', NULL, NULL, 'A Funcional tem um ótimo atendimento', '0000-00-00', '', '', 'elisabeth-possamai-banco-de-sangue', 0),
(213, 57, 'Ari Beal – Frigovel', 'logo-frigovel.png', NULL, '', NULL, NULL, 'Sempre os indico. Otimo atendimento e prestação de serviços', '0000-00-00', '', '', 'ari-beal-frigovel', 0),
(214, 57, 'Bruno Vieira – DBPV', 'dbpv.png', NULL, '', NULL, NULL, 'Gosto da competência da funcional ', '0000-00-00', '', '', 'bruno-vieira-dbpv', 0),
(215, 57, 'Zita - Saude +', 'mais saúde.png', NULL, '', NULL, NULL, 'Ótima prestação de serviços', '0000-00-00', '', '', 'zita-saude', 0),
(216, 57, 'João Biazio – Mecânica Ferrari', 'e775eb2b-c58d-41f8-8969-aa0663b987eb.jpg', NULL, '', NULL, NULL, 'Nos ajudam muito com a gestão', '0000-00-00', '', '', 'joao-biazio-mecanica-ferrari', 0),
(217, 57, 'Ligia Maria Peregrino de Almeida - Vascular ', 'instituto-vascular.png', NULL, '', NULL, NULL, 'Bom atendimento e ótimos profissionais', '0000-00-00', '', '', 'ligia-maria-peregrino-de-almeida-vascular', 0),
(218, 59, 'Conta Azul', 'Logo_ContaAzul.png', NULL, '', NULL, NULL, '<div><img src=\"uploads/1541005044_icon-contaazul.png\" style=\"width: 236px;\"><br></div><div>Sistema Conta azul: Sistema 100% online para pequena e médias empresas. Acesse seu sistema de gestão empresarial de qualquer lugar e tenha as informações da sua empresa em qualquer dia da semana.</div><div><br></div><div><img src=\"uploads/1541005050_icon-contaazul2.png\" style=\"width: 253px;\"><br></div><div>Controle financeiro empresarial: Realize toda a gestão do seu negócio com um único sistema de controle financeiro. Para administrar as finanças, quanto mais precisa for a informação, melhor a decisão que você pode tomar.</div><div><br></div><div><img src=\"uploads/1541005056_icon-contaazul3.png\" style=\"width: 268px;\"><br></div><div>Fluxo de Caixa: Utilize o fluxo de caixa em tempo real para analisar os lançamentos financeiros da sua empresa e fazer projeções. Tenha também demonstrativos atualizados automaticamente os quais são mais seguros e precisos para entender a situação das finanças de seu negócio.</div><div><br></div><div><img src=\"uploads/1541005064_icon-contaazul4.png\" style=\"width: 241px;\"><br></div><div>Nota fiscal eletrônica: Com o emissor de nota fiscal online do ContaAzul, você economiza tempo e trabalho, o sistema de emissão de NF-e ,NFC-e e NFS-e é totalmente integrado com o processo de vendas.&nbsp;</div><div><br></div><div><img src=\"uploads/1541005071_icon-contaazul5.png\" style=\"width: 255px;\"><br></div><div>Integração bancária: A integração com internet banking dos principais bancos do pais permite que o extrato de suas contas bancárias esteja sincronizado com o controle de movimentação financeiras. Automaticamente, os dados são trazidos para você ganhar tempo e categorizar entradas e saídas financeiras.&nbsp;</div><div><br></div><div><img src=\"uploads/1541005078_icon-contaazul6.png\" style=\"width: 343px;\"><br></div><div>Gestão de serviços: Uma gestão de serviços de qualidade para a sua empresa depende de informações com precisão e clareza. Com o ContaAzul você econtrara recursos para diferentes necessidades, desde o cadastro de clientes ao relacionamento, com todos o histórico de propostas comerciais.</div><div><br></div><div><img src=\"uploads/1541005085_icon-contaazul7.png\" style=\"width: 142px;\"><br></div><div>Gestão de produtos: Mantenha as informações atualizadas sobre o que você oferece, de forma simples e rápida. Ganhe velocidade transformando propostas enviadas em vendas de produto, com integração com o faturamento. Você pode ainda realizar um levantamento de seus produtos para verificar quais foram mais vendidos. Você também conta com informações de estoque de produto, as informações de mercadorias disponíveis permanecem atualizadas e claras, para você não perder vendas, melhorar o giro e rentabilidade do estoque.</div><div><br></div><div><img src=\"uploads/1541005090_icon-contaazul8.png\" style=\"width: 163.882px; height: 302px;\"><br></div><div>APP vendas ContaAzul para IOS e Android: O app vendas tem os recursos que você precisa, que podem ser usados de diferentes formas, é muito fácil e intuitivo. Crie e envie vendas para os clientes. Ele também tem espaço para cadastro e gerenciamento de clientes, produtos e serviço. O app ainda oferece um gráfico de desempenho para você acompanhar a evolução das vendas, além de um mapa de localização, tornando a navegação até seu cliente mais fácil e prática.</div>', '0000-00-00', '', '', 'conta-azul', 0),
(219, 59, 'Gestta', 'logo-gesta.png', NULL, '', NULL, NULL, '<div>GESTTA: O Gestta é uma ferramenta de gestão de tarefas que visa otimizar os controles e rotinas internas. Por meio de um portal, o aplicativo também permite que nossos clientes tenham acesso de forma transparente a todas as tarefas executadas e seus respectivos prazos.&nbsp;&nbsp;</div><div><br></div><div><img src=\"uploads/1541005487_icone-gesta.png\" style=\"width: 101px;\"><br></div><div>Tenha visibilidade do que acontece:</div><div>&nbsp;</div><div><img src=\"uploads/1541005493_icone-gesta2.png\" style=\"width: 100px;\"><br></div><div>Comunicação de forma transparente:</div><div>&nbsp;</div><div><img src=\"uploads/1541005498_icone-gesta3.png\" style=\"width: 100px;\"><br></div><div>Saiba o status das suas solicitações:</div><div><br></div><div><img src=\"uploads/1541005504_icone-gesta4.png\" style=\"width: 717px;\"><br></div>', '0000-00-00', '', '', 'gestta', 0),
(220, 59, 'Visão Lógica', 'visaologica.jpg', NULL, '', NULL, NULL, '<p>VISÃO LÓGICA:  O sistema Visão Lógica permite que o escritório Funcional importe de seus clientes toda a movimentação financeira, fiscal ou de folha de pagamento. A ferramenta gera mais eficiência e otimiza o tempo nos fechamentos mensais, em contrapartida o escritório poderá auditar os números da empresa e gerar relatórios gerenciais que buscam alavancar o negócio do cliente.</p><p><img src=\"uploads/1541005661_visao-logica-img.png\" style=\"width: 606px;\"><br></p>', '0000-00-00', '', '', 'visao-logica', 0);
INSERT INTO `registros` (`registros_id`, `registros_idpg`, `registros_titulo`, `registros_imagem`, `registros_imagem2`, `registros_email`, `registros_preco`, `registros_descricao`, `registros_texto`, `registros_data`, `registros_link`, `registros_metadescription`, `registros_url`, `registros_ordem`) VALUES
(221, 51, 'IMPOSTO DE RENDA: QUEM É OBRIGADO A DECLARAR?', 'Imposto de Renda 2019.png', NULL, '', NULL, NULL, '<p></p><p></p><p></p><h3><span style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"font-family: Verdana;\">Todo ano é a mesma dúvida, será que eu preciso declarar o IRPF ? E se não declarar, pago multa?&nbsp;</span><br></span></h3><h3><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">Tire todas suas dúvidas e descubra se você é obrigado ou não a declarar imposto de renda em 2019...&nbsp;</span></h3><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">Está obrigada a apresentar a Declaração de Ajuste Anual referente ao exercício de 2019 a pessoa física residente no Brasil que, no ano-calendário de 2018 se enquadrou em pelo menos uma das situações abaixo:&nbsp;</span><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">I - Recebeu rendimentos tributáveis, sujeitos ao ajuste na declaração, cuja soma foi superior a R$ 28.559,70, tais como rendimentos de salários, pensões e alugueis;&nbsp;</span><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">II - Recebeu rendimentos isentos, não tributáveis ou tributados exclusivamente na fonte, cuja soma foi superior a R$ 40.000,00, tais como juros de poupança, saque do FGTS, seguro-desemprego, saque do PIS, vale-alimentação, distribuição de lucros e dividendos, juros sobre o capital próprio, prêmios em loterias, devolução de parte do ICMS ou prêmios de programas de estímulo à cidadania do seu estado;&nbsp;</span><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">III - Obteve, em qualquer mês, ganho de capital na alienação de bens ou direitos sujeito à incidência do imposto, ou realizou operações em bolsas de valores, de mercadorias, de futuros e assemelhadas, inclusive criptomoedas;&nbsp;</span><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">IV - Relativamente à atividade rural:&nbsp;</span><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">a) obteve receita bruta em valor superior a R$ 142.798,50;&nbsp;</span><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">b) pretenda compensar, no ano-calendário de 2019 ou posteriores, prejuízos de anos-calendário anteriores ou do próprio ano-calendário de 2018;&nbsp;</span><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">V - teve, em 31 de dezembro, a posse ou a propriedade de bens ou direitos, inclusive terra nua, de valor total superior a R$ 300.000,00, sendo este valor o de custo e não o valor de mercado dos bens.&nbsp;</span><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">VI - passou à condição de residente no Brasil em qualquer mês e nessa condição encontrava-se em 31 de dezembro; ou&nbsp;</span><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">VII - optou pela isenção do Imposto sobre a Renda incidente sobre o ganho de capital auferido na venda de imóveis residenciais cujo produto da venda seja aplicado na aquisição de imóveis residenciais localizados no País, no prazo de 180 dias, contado da celebração do contrato de venda.&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><strong data-redactor-tag=\"strong\" style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"font-family: Verdana;\">QUANDO O TRABALHADOR AUTÔNOMO, SEM VÍNCULO EMPREGÁTICIO PRECISA DECLARAR IMPOSTO DE RENDA?&nbsp;</span><o:p></o:p></strong><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">Os rendimentos brutos decorrentes do transporte de cargas e de serviços com trator, máquinas de terraplanagem, colheitadeiras e assemelhados deverão ser informados da seguinte forma:&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">10% em Rendimento Tributável; e&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">90% em Rendimento Isento/Não-tributável.&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">Portanto, caso essa seja sua situação, cuidado para não deixar de entregar o seu imposto de renda.&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">Por exemplo:&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">O transportador autônomo recebeu ao longo do ano a quantia de R$ 50.000,00. Deverá informar R$ 5.000,00 (10%) em rendimento tributável e R$ 45.000,00 (90%) em rendimento isento/náo-tributável.&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">Nesse caso, ele está obrigado a entregar a declaração?&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">Sim, pois apesar do seu rendimento tributável não superar os R$ 28.559,70, os rendimentos isentos ultrapassaram os R$ 40.000,00.&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">Caso o transporte tenha sido prestado à Pessoa Jurídica, com emissão de RPA, a empresa deverá enviar o informe de rendimentos do ano de 2018, com as informações já preenchidas, para que você possa informar no seu IRPF 2019.&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">Os rendimentos brutos decorrentes do transporte de passageiros deverão ser informados da seguinte forma:&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">60% em Rendimento Tributável; e&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">40% em Rendimento Isento/Não-tributável.&nbsp;</span><p></p><h4 style=\"\"><span style=\"line-height: 107%;\"><span style=\"font-family: Verdana;\">QUAL\r\nO PRAZO PARA ENTREGAR A DECLARAÇÃO DE AJUSTE ANUAL?</span></span></h4><p class=\"MsoNormal\"><span style=\"font-family: Verdana;\"><br>A declaração de ajuste anual deve ser apresentada no\r\nperíodo de 7 de março a 30 de abril de 2019.</span></p><p class=\"MsoNormal\"><span style=\"line-height: 107%;\"><span style=\"font-family: Verdana;\"><br></span><o:p></o:p></span></p><blockquote style=\"\"><p><b style=\"font-family: Verdana;\">MULTA POR ATRASO NA\r\nENTREGA OU PELA NÃO APRESENTAÇÃO</b><br></p><p>A entrega da declaração de ajuste anual após o prazo previsto sujeita ao contribuinte à multa de 1% ao mês ou fração de atraso calculada sobre o total do imposto devido, ainda que integralmente pago.</p><p></p><p>Ainda, terá o valor\r\nmínimo de R$ 165,74 e máximo de 20% do imposto de renda devido.</p></blockquote><p><span style=\"font-family: Verdana;\">\r\n\r\n</span><span style=\"font-family: Verdana;\">\r\n\r\n</span><span style=\"font-family: Verdana;\">\r\n\r\n</span><span style=\"font-family: Verdana;\">\r\n\r\n</span><span style=\"font-family: Verdana;\">\r\n\r\n</span><span style=\"font-family: Verdana;\">\r\n\r\n</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">Ainda ficou com dúvida se você precisa ou não entregar a declaração de ajuste anual do imposto de renda 2019?&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">Nossa equipe de especialistas pode te ajudar, clique no botão abaixo e tire suas dúvidas!&nbsp;</span><o:p style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"></o:p><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><br style=\"color: rgb(68, 68, 68); font-family: Arial, Helvetica, Verdana, Tahoma, sans-serif;\"><span style=\"color: rgb(68, 68, 68); font-family: Verdana;\">Não corra o risco de ser pego na malha fina e precisar pagar multa!&nbsp;</span></p><p></p><br><a href=\"http://empresa.funcional.cnt.br/irpf-2019\" target=\"_blank\"><b><span style=\"font-family: Verdana;\">&gt;&gt;CLIQUE AQUI PARA DECLARAR IMPOSTO DE RENDA 2019 COM SEGURANÇA&lt;&lt;</span></b></a><p></p><p></p><p></p>', '2019-02-01', '', '', 'imposto-de-renda-quem-e-obrigado-a-declarar', 1),
(222, 56, 'Politica da Qualidade ', 'wdfwdw.png', NULL, '', NULL, NULL, ' Buscar a satisfação do cliente através da excelência na prestação de serviços contábeis com respeito a requisitos estatutários, legais e normativos;<br>\r\n\r\n* Fomentar a melhoria do Sistema de Gestão da Qualidade, bem como sua eficácia;<br>\r\n\r\n* Garantir o sucesso da organização por meio da valorização humana, através da capacitação contínua dos colaboradores.<br>', '0000-00-00', '', '', 'politica-da-qualidade', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `registros_categorias`
--

CREATE TABLE `registros_categorias` (
  `registros_id` int(11) NOT NULL,
  `categorias_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `registros_categorias`
--

INSERT INTO `registros_categorias` (`registros_id`, `categorias_id`) VALUES
(221, 70);

-- --------------------------------------------------------

--
-- Estrutura para tabela `templates`
--

CREATE TABLE `templates` (
  `templates_id` int(11) NOT NULL,
  `templates_titulo` varchar(200) DEFAULT NULL,
  `templates_imagem` varchar(200) DEFAULT NULL,
  `templates_arquivo` varchar(200) DEFAULT NULL,
  `templates_tags` varchar(300) DEFAULT NULL,
  `templates_header` int(11) NOT NULL,
  `templates_footer` int(11) NOT NULL,
  `templates_header_ok` int(11) NOT NULL,
  `templates_footer_ok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `templates`
--

INSERT INTO `templates` (`templates_id`, `templates_titulo`, `templates_imagem`, `templates_arquivo`, `templates_tags`, `templates_header`, `templates_footer`, `templates_header_ok`, `templates_footer_ok`) VALUES
(1, 'Empresa 1', '1512392434_empresa.png', 'empresa1.php', 'empresa, texto, fundo, bg, col-6', 0, 0, 0, 0),
(2, 'Header 1', '1516906648_header1.png', 'header.php', NULL, 1, 0, 1, 0),
(3, 'Header 2', '1516906669_header2.png', 'header2.php', NULL, 1, 0, 0, 0),
(4, 'Header 3 ', '1516906679_header3.png', 'header3.php', NULL, 1, 0, 0, 0),
(5, 'Footer 1', '1516906960_footer1.png', 'footer.php', NULL, 0, 1, 0, 1),
(8, 'Bem vindo', '1512417177_slideshow.jpg', 'bemvindo.php', 'bemvindo', 0, 0, 0, 0),
(9, 'Inovador', '1512417177_slideshow.jpg', 'inovador.php', 'inovador', 0, 0, 0, 0),
(10, 'Plataforma', '1512417177_slideshow.jpg', 'plataforma.php', 'plataforma', 0, 0, 0, 0),
(11, 'Funcional Digital', '1512417177_slideshow.jpg', 'funcionaldigital.php', 'funcional digital', 0, 0, 0, 0),
(12, 'Ficou na dúvida', '1512417177_slideshow.jpg', 'ficou-na-duvida.php', 'ficou na duvida', 0, 0, 0, 0),
(13, 'Galeria Carousel', '1512482388_galeria.jpg', 'galeria.php', 'carousel, galeria, fotos, 3', 0, 0, 0, 0),
(14, 'Header 4', '1516906693_header4.png', 'header4.php', NULL, 1, 0, 0, 0),
(15, 'Header 5', '1516906706_header5.png', 'header5.php', NULL, 1, 0, 0, 0),
(16, 'Ambientes', '1512502314_ambientes.png', 'ambientes.php', 'ambientes, galeria, servicos, grid4, col-3, produtos', 0, 0, 0, 0),
(17, 'Contato', '1512561935_contato.png', 'contato.php', 'contato, formulario, formulário, facebook', 0, 0, 0, 0),
(18, 'Quanto custa?', '1512417177_slideshow.jpg', 'quantocusta.php', 'quanto custa', 0, 0, 0, 0),
(19, 'Blog', '1512578008_blog.png', 'blog.php', 'blog, noticias, dicas, novidades, grid2, col-6', 0, 0, 0, 0),
(20, 'Dicas', '1512578418_dicas.png', 'dicas.php', 'blog, noticias, dicas, novidades, lista', 0, 0, 0, 0),
(21, 'Footer 2', '1516906971_footer2.png', 'footer2.php', NULL, 0, 1, 0, 0),
(22, 'Produtos', '1512578972_produtos-em-destaque.png', 'produtos.php', 'produtos, serviços, grid4, col-3, galeria', 0, 0, 0, 0),
(23, 'Blog 2', '1512579521_noticias-inverso.png', 'blog2.php', 'Blog, noticias, servicos, produtos, invertido, 2, col-6', 0, 0, 0, 0),
(24, 'Empresa 2', '1512581123_empresa2.png', 'empresa2.php', 'empresa, texto, col-6', 0, 0, 0, 0),
(25, 'Serviços 3', '1512581972_servicos3.jpg', 'servicos3.php', 'servicos, grid2, ambientes, produtos, col-6, galeria', 0, 0, 0, 0),
(26, 'Banner', NULL, 'banner.php', 'banner, imagem', 0, 0, 0, 0),
(27, 'Header 6', '1516906724_header6.png', 'header6.php', NULL, 1, 0, 0, 0),
(28, 'Blog 3', '1512583726_blog4.png', 'blog3.php', 'blog, noticias, dicas, novidades, grid3, col-4', 0, 0, 0, 0),
(29, 'Blog 4', '1512653482_blog4.png', 'blog4.php', 'blog, noticias, dicas, novidades, carousel, slide', 0, 0, 0, 0),
(30, 'Header 7', '1516906740_header7.png', 'header7.php', NULL, 1, 0, 0, 0),
(31, 'Empresa 3', '1512654359_empresa3.jpg', 'empresa3.php', 'empresa, texto, fundo, bg', 0, 0, 0, 0),
(32, 'Dicas', '1512654756_dicas2.png', 'dicas2.php', 'blog, noticias, dicas, novidades, lista', 0, 0, 0, 0),
(33, 'Produtos 2 Categorias', '1512655192_produtos2.png', 'categorias_produtos2.php', 'serviços, servicos, produtos, ambientes, fundo, bg, icone, grid3, col-4, galeria', 0, 0, 0, 0),
(34, 'Promoções', '1513280388_promocoes.jpg', 'promocoes.php', NULL, 0, 0, 0, 0),
(35, 'Carousel 2', 'carousel2.png', 'carousel2.php', 'carousel, blog, eventos', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `templates_home`
--

CREATE TABLE `templates_home` (
  `templates_home_id` int(11) NOT NULL,
  `templates_home_titulo` varchar(200) NOT NULL,
  `templates_home_idpg` int(11) NOT NULL,
  `templates_home_templatesid` int(11) NOT NULL,
  `templates_home_ordem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `templates_home`
--

INSERT INTO `templates_home` (`templates_home_id`, `templates_home_titulo`, `templates_home_idpg`, `templates_home_templatesid`, `templates_home_ordem`) VALUES
(35, 'Bem vindo', 16, 8, 1),
(36, 'Inovador', 46, 9, 2),
(37, 'Plataforma integrada', 47, 10, 3),
(38, 'Funcional Digital', 48, 11, 4),
(39, 'Quanto custa?', 49, 18, 5),
(40, 'Ficou na dúvida?', 50, 12, 6);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `usuario`, `senha`, `admin`) VALUES
(29, 'Web Thomaz', 'junior@webthomaz.com.br', 'webthomaz', 'f6e86b921e6cd7689fb611a1722d0e7b', 1),
(105, 'Cliente', 'junior@webthomaz.com.br', 'funcional', 'ef741b7b045bd2e4d6ee743481c57f03', 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categorias_id`);

--
-- Índices de tabela `cores`
--
ALTER TABLE `cores`
  ADD PRIMARY KEY (`cor_id`);

--
-- Índices de tabela `email_abrir_empresa`
--
ALTER TABLE `email_abrir_empresa`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `email_contato`
--
ALTER TABLE `email_contato`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `email_curriculo`
--
ALTER TABLE `email_curriculo`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `email_orcamento`
--
ALTER TABLE `email_orcamento`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `email_orcamento2`
--
ALTER TABLE `email_orcamento2`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`paginas_id`);

--
-- Índices de tabela `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`registros_id`);

--
-- Índices de tabela `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`templates_id`);

--
-- Índices de tabela `templates_home`
--
ALTER TABLE `templates_home`
  ADD PRIMARY KEY (`templates_home_id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categorias_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de tabela `cores`
--
ALTER TABLE `cores`
  MODIFY `cor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `email_abrir_empresa`
--
ALTER TABLE `email_abrir_empresa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `email_contato`
--
ALTER TABLE `email_contato`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `email_curriculo`
--
ALTER TABLE `email_curriculo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `email_orcamento`
--
ALTER TABLE `email_orcamento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `email_orcamento2`
--
ALTER TABLE `email_orcamento2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `paginas`
--
ALTER TABLE `paginas`
  MODIFY `paginas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de tabela `registros`
--
ALTER TABLE `registros`
  MODIFY `registros_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT de tabela `templates`
--
ALTER TABLE `templates`
  MODIFY `templates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `templates_home`
--
ALTER TABLE `templates_home`
  MODIFY `templates_home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
